<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Sales
 *
 * @author Theresa
 */
class Sales extends Application
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
            $this->load->model('stock');
            $this->data['pagebody'] = 'homepage';

            // build the list of authors, to pass on to our view
            $source = $this->stock->all();
            $stock = array ();
            foreach ($source as $record)
            {
                    $stock[] = array ('code' => $record['code']);
            }
            $this->data['stock'] = $stock;

            $this->render();
	}

}