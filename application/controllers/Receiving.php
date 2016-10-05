<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Receiving
 *
 * @author Theresa
 */
class Receiving extends Application
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
            $this->load->model('supplies');
            $this->data['pagebody'] = 'homepage';

            // build the list of authors, to pass on to our view
            $source = $this->supplies->all();
            $supplies = array ();
            foreach ($source as $record)
            {
                    $supplies[] = array ('code' => $record['code']);
            }
            $this->data['supplies'] = $supplies;

            $this->render();
            
	}

}