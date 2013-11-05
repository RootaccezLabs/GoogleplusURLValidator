<?php 
/*
 * GoogleplusURLValidator class is used to validate the Google + profile url.
*
* @package: GoogleplusURLValidator
* @author: Gowri sankar <gchokeen@gmail.com>
* @link: http://www.code-cocktail.in
*/

class GoogleplusURLValidator{

	private $url;
	private $pattern;
	private $result;

	public function __construct($url){

		$this->url = $url;
		$this->pattern = '';
		$this->result = '';
	}
	
	
	public function validate(){
		
	}
	
	/* is_url is used to validat the url
	 * @method: is_url
	 * 
	 */
	private function is_url($url){
	
		if(filter_var($url, FILTER_VALIDATE_URL) === FALSE)
		{
			return false;
		}else{
			return true;
		}
	}

	
}