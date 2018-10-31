<?php

use Yaf\Controller_Abstract;
class IndexController extends Controller_Abstract 
{
	public function indexAction(){

		echo "this is a test page";
		exit;
	}

	public function pageAction()
	{
		echo "this is a test view  page";
		exit

	}

}




