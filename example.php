<?php

require_once 'GoogleplusURLValidator.php';



// default person url
$default_person_url = 'https://plus.google.com/u/0/104112109127008389517/posts';

//custom person url
$custom_person_url = 'https://plus.google.com/u/0/+gowrisankar/about';

// default page url
$default_page_url = 'https://plus.google.com/u/0/b/106984636161068705398/dashboard/overview';

// custom page url
$custom_page_url = 'https://plus.google.com/u/0/b/106984636161068705398/+Code-cocktailIn/about';



$url = $custom_person_url;


$validator = new GoogleplusURLValidator($url);


try{
    $result = $validator->get_profile_id();

    
    print_r($result);
    
}
catch(Exception $e){
    
   echo 'Caught exception: ',  $e->getMessage(), "\n";
}
