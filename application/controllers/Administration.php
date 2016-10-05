<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Administration
 *
 * @author Theresa
 */
class Administration extends Application
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

            echo("This is the administration page");
	}

}