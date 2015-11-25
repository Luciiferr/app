<?php

class ContextLinkTemplate {

	/**
	 * @desc check if template should be processed.
	 * Wikitext should not be empty and should not contain curly brackets
	 * which indicate that template has not yet expanded templates or arguments.
	 *
	 * @param $templateWikitext
	 *
	 * @return bool
	 */
	public static function shouldTemplateBeProcessed( $templateWikitext ) {
		global $wgEnableTemplateTypesParsing, $wgArticleAsJson;

		return $wgEnableTemplateTypesParsing
			&& $wgArticleAsJson
			&& !empty( $templateWikitext )
			&& !self::containsUnexpandedArguments( $templateWikitext );
	}

	/**
	 * @desc sanitize context-link template content
	 *
	 * @param $wikitext
	 *
	 * @return string
	 */
	public static function handle( $wikitext ) {
		$wikitext = self::parseTables( $wikitext );
		$wikitext = self::sanitizeContextLinkWikitext( $wikitext );
		$wikitext = self::wrapContextLink( $wikitext );

		return $wikitext;
	}

	/**
	 * @desc If curly brackets found, means that template contain some not expanded
	 * templates and arguments yet.
	 *
	 * @param $wikitext
	 * @return bool
	 */
	private static function containsUnexpandedArguments( $wikitext ) {
		return preg_match( '/{{.+}}/', $wikitext );
	}

	/**
	 * @desc remove all non-link and non-text elements of context-link wikitext
	 *
	 * @param string $wikitext context-link template wikitext
	 *
	 * @return string
	 */
	public static function sanitizeContextLinkWikitext( $wikitext ) {
		//remove any custom HTML tags
		$wikitext = strip_tags( $wikitext );
		//remove list and indent elements from the beginning of line
		$wikitext = preg_replace( '/^[:#* \n]+/', '', $wikitext );
		//remove all bold and italics from all of template content
		$wikitext = preg_replace( '/\'{2,}/', '', $wikitext );
		//remove all headings from all of template content
		$wikitext = self::removeHeadings( $wikitext );
		//remove all newlines from the middle of the template text.
		$wikitext = preg_replace( '/\n/', ' ', $wikitext );
		//remove images from template content
		$fileNamespaceSanitizeHelper = FileNamespaceSanitizeHelper::getInstance();
		$wikitext = $fileNamespaceSanitizeHelper->stripFilesFromWikitext( $wikitext );
		//trim all unwanted spaces around content
		$wikitext = trim( $wikitext );

		return $wikitext;
	}

	/**
	 * @desc if wikitext contains '{\' that is contains a wikitable,
	 * preparse tables to be able to remove their markup
	 * in the following steps
	 *
	 * @param string $wikitext
	 * @return string html table markup
	 */
	private static function parseTables( $wikitext ) {
		global $wgParser;

		if ( strpos( $wikitext, '{|' ) !== false ) {
			$parser = ParserPool::get();
			$parser->mStripState = new StripState( $wgParser->getRandomString() );
			$wikitext = $parser->doTableStuff( $wikitext );
			ParserPool::release( $parser );
		}

		return $wikitext;
	}

	private static function removeHeadings( $wikitext ) {
		for ( $i = 6; $i >= 1; --$i ) {
			$h = str_repeat( '=', $i );
			$wikitext = preg_replace( "/$h(.+)$h/m", '\\1', $wikitext );
		}

		return $wikitext;
	}

	/**
	 * @desc wrap text of context-link in div with CLASS_CONTEXT_LINK class
	 *
	 * @param string $wikitext context-link template wikitext
	 *
	 * @return string
	 */
	private static function wrapContextLink( $wikitext ) {
		return sprintf( '<div class="%s">%s</div>', AutomaticTemplateTypes::TEMPLATE_CONTEXT_LINK, $wikitext );
	}
}
