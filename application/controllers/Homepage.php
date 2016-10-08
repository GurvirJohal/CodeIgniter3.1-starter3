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
			$this->populate();
            $this->render();
	}
	/**
	* Function for adding content
	*/
	public function populate() {
	        $this->load->model('supplies');
            //$this->data['pagebody'] = 'receiving';
            // gets a list of supplies
            $source = $this->supplies->all();
            $supplies = array ();
			
			//Total
			$totalCost = 0;
			
            foreach ($source as $record)
            {
                    //$supplies[] = array ('code' => $record['code'],
                    //                    'receiving_unit' => $record['receiving_unit'],
					//'receiving_cost' => $record['receiving_cost'], 'stocking_unit' => $record['stocking_unit'],
					//'quantity' => $record['quantity']);
					$rUniut = intval(preg_replace('/[^0-9]+/', '', $record['receiving_unit']), 10);
					$rCost = intval(preg_replace('/[^0-9]+/', '', $record['receiving_cost']), 10);
					$inv = intval(preg_replace('/[^0-9]+/', '', $record['quantity']), 10);
					$totalCost += (($inv / $rUniut) * $rCost);
					
            }
			$this->data['totalCost'] = $totalCost;
            //echo $totalCost;
	}
	/*
		// gets the calculated cost
	public function getCost() {
		return ($_GET['receiving_unit'] * $this->getRcost());
	}
	
	// gets the receiving unit cost
	public function getRcost() {
		return 30;
	}
	*/
}