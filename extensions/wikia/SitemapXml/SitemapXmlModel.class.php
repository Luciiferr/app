<?php

class SitemapXmlModel extends WikiaModel {

	private $dbr;

	public function __construct() {
		$this->dbr = wfGetDB( DB_SLAVE );
	}

	/**
	 * Get total number of pages
	 * @param int $namespace
	 * @param int $limit
	 * @return float
	 */
	public function getPageNumber( $namespace, $limit ) {
		$sql = $this->getQuery( $namespace )
			->COUNT( '*' )->AS_( 'c' );

		$count = $sql->run( $this->dbr, function ( $result ) {
			return $result->fetchObject()->c;
		} );

		return ceil( $count / $limit );
	}

	/**
	 * Get list of items for the namespace
	 *
	 * @param int $namespace
	 * @param int $offset
	 * @param int $limit
	 * @return bool|mixed
	 */
	public function getItems( $namespace, $offset, $limit ) {
		$sql = $this->getQuery( $namespace )
			->FIELD( 'page_namespace', 'page_title', 'page_touched' )
			->OFFSET( $offset )->LIMIT( $limit );

		return $sql->run( $this->dbr, function ( $result ) {
			while ( $row = $result->fetchObject() ) {
				yield $row;
			}
		} );
	}

	/**
	 * Get query
	 * @param int $namespace
	 * @return WikiaSQL
	 */
	private function getQuery( $namespace ) {
		$sql = ( new WikiaSQL() )
			->SELECT()
			->FROM( 'page' )
			->WHERE( 'page_namespace' )->EQUAL_TO( $namespace )
			->AND_( 'page_is_redirect' )->EQUAL_TO( false )
			->ORDER_BY( 'page_id' );

		if ( $namespace === NS_CATEGORY ) {
			$sql->JOIN( 'category' )->ON( 'page.page_title', 'category.cat_title')
				->AND_( 'page.page_namespace', NS_CATEGORY );
			$sql->AND_( 'category.cat_pages' )->GREATER_THAN( 9 );
		}

		return $sql;
	}

}
