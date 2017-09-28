<?php

class WikiaCorporateModel extends WikiaModel {

	// taken from wgEnableWikiaHomePageExt
	const LANG_TO_WIKI_ID = [
		'en' => Wikia::CORPORATE_WIKI_ID,
		'de' => 111264,
		'fr' => 208826,
		'pl' => 435095,
		'es' => 637291,
		'ja' => 875569,
	];

	/**
	 * Get corporate wikiId by content lang
	 *
	 * @param string $lang
	 * @return int|false
	 */
	public function getCorporateWikiIdByLang($lang) {
		if (!isset(self::LANG_TO_WIKI_ID[$lang])) {
			return false;
		}

		return self::LANG_TO_WIKI_ID[$lang];
	}

	/**
	 * Return true when there is active Corporate Wiki in that language - like www.wikia.com or de.wikia.com
	 *
	 * @param string $langCode
	 * @return bool
	 */
	public function isCorporateLang($langCode) {
		return isset(self::LANG_TO_WIKI_ID[$langCode]);
	}
}
