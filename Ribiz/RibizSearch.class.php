<?php
ini_set( "soap.wsdl_cache_enabled", "0" );
/**
*This is the class that returns the result. If false then it returns an empty array.
*/
class Ribiz_Search {
	const VERSION = '1.0';

	private $client;
	
	/**
	 *The search function
	 *@var array
	 */
	private $searchArray = array();

	public function init() {
		//Connecting to soap server
		$this->client = new SoapClient( 'http://webservices.cibg.nl/Ribiz/OpenbaarV4.asmx?wsdl' ); 
	}
	/**
	 * Search function
	 *
	 * @return string|bool when found returns the bignumber else returns false
	 */
	public function search( $array = array() ) {
		if( ! sizeof( $array ) ) {
			$array = $this->searchArray;
		}
		//Giving back the results
		$result = $this->client->__soapCall( 'ListHcpApprox4' , $this->searchRequest( $array ) );

		if( ! is_soap_fault( $this->client) ) {
			if( property_exists( $result, 'ListHcpApprox' ) &&
				property_exists( $result->ListHcpApprox, 'ListHcpApprox4' ) &&
				property_exists( $result->ListHcpApprox->ListHcpApprox4, 'ArticleRegistration' ) &&
				property_exists( $result->ListHcpApprox->ListHcpApprox4->ArticleRegistration, 'ArticleRegistrationExtApp' ) ) {

				//Check if a single element or an array of elements is returned
				$element = $result->ListHcpApprox->ListHcpApprox4->ArticleRegistration->ArticleRegistrationExtApp;
				if( is_array( $element ) ) {
					//Use the array element with the array index
					$element = current( $element );
				}

				if ( property_exists( $element, 'ArticleRegistrationNumber' ) ) {
					//results have been found, return them
					return $element->ArticleRegistrationNumber;
				}
			}
		}
		return false;
	}

	private function searchRequest( $array ) {
		return array( 'listHcpApproxRequest' => array( 'WebSite' => 'Ribiz' ) + $array);
	}
}
