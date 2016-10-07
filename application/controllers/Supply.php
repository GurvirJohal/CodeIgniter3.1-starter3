<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Supply Controller
 *
 * @author Thach
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
	 * loads information of each supply
	 */
	public function index()
	{
            $this->load->model('supplies');
            $this->data['pagebody'] = 'supply';

            // gets a single supply
			// hardcode 0 for testing
            $source = $this->supplies->get('0');
            $supplies = array ();
            foreach ($source as $record)
            {
                    $supplies[] = array ('code' => $record['name']['description']['receiving_unit']
					['receiving_cost']['stocking_unit']['quantity']);
            }
            $this->data['supplies'] = $supplies;

            $this->render();
            
	}