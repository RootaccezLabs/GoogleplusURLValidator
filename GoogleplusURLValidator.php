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
	
	/*
	 *@method:is_valid
	 *
	 */
	public function is_valid(){
		
	       if($this->is_url($this->url)){
		
		$this->pattern = '/plus.google.com/i';
		
		preg_match($this->pattern, $this->url, $this->result);
		
			if(count($this->result)!=0){
			 return true;	
			}
			else{
			 return false;
			}
		
	
		}
		else{
		   throw Exception("This is not a valid URL!");
		}
		
	}
	
	/*
	 *@method: get_profile_id
	 */	
	public function get_profile_id(){
		
		$this->pattern = '/\+\w+|\d{21}/i';
		
		preg_match($this->pattern, $this->url, $this->result);
		
		
		return $this->result[0];
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