<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Homepage should be a dashboard of sorts, showing some summary information:
 * $ spent purchasing inventory, $ received from sales, cost of sales ingredients
 * consumed. These are derived from the transaction logs.
 */
class Homepage extends Application
{
        /**
         * Default Constructor
         */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
            // this is the view we want shown
            $this->data['pagebody'] = 'homepage';
            $this->render();
	}

}