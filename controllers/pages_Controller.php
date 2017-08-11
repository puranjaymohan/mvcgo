<?php
/*
 * THIS IS PAGES CONTROLLER, ADD NEW PAGES HERE
*/
class pagesController
{   //HOME PAGE METHOD
    public function home(){
		require_once('views/pages/home.php');
    }


    //ABOUT PAGE METHOD
    public function about() {
        require_once('views/pages/about.php');
    }


    //CONTACT PAGE METHOD
    public function contact() {
        require_once('views/pages/contact.php');
    }
	
	//PHOTOS PAGE METHOD
    public function photos() {
        require_once('views/pages/photos.php');
    }


    //ERROR PAGE METHOD
    public function error() {
        require_once('views/pages/error.php');
    }
}


?>