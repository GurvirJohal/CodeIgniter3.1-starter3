<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Supply Controller
 *
 * @author Thach
 */
class Receiving extends Receiving
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
            $this->data['pagebody'] = 'receiving';

            // gets a single supply
            $source = $this->supplies->get();
            $supplies = array ();
            foreach ($source as $record)
            {
                    $supplies[] = array ('code' => $record['code']['receiving_unit']);
            }
            $this->data['supplies'] = $supplies;

            $this->render();
            
	}