<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Supplies
 *
 * @author Tess Robertson
 */
class Supplies extends CI_Model{
    
    // Initialize the array of supplies
    var $data = array(
		array(
                    'code' => '0', 
                    'name' => 'Lavendar', 
                    'description' => 'Lavendar oil', 
                    'receiving_unit' => 'case of 12 bottles', 
                    'receiving_cost' => '$30',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '1', 
                    'name' => 'Eucalyptus', 
                    'description' => 'Eucalyptus oil', 
                    'receiving_unit' => 'case of 10 bottles', 
                    'receiving_cost' => '$35',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '2', 
                    'name' => 'Lemon', 
                    'description' => 'Lemon oil', 
                    'receiving_unit' => 'case of 12 bottles', 
                    'receiving_cost' => '$30',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '3', 
                    'name' => 'Orange', 
                    'description' => 'Orange oil', 
                    'receiving_unit' => 'case of 8 bottles', 
                    'receiving_cost' => '$40',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '4', 
                    'name' => 'Grapefruit', 
                    'description' => 'Grapefruit oil', 
                    'receiving_unit' => 'case of 10 bottles', 
                    'receiving_cost' => '$25',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '5', 
                    'name' => 'Ylang', 
                    'description' => 'Ylang ylang oil', 
                    'receiving_unit' => 'case of 12 bottles', 
                    'receiving_cost' => '$30',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '6', 
                    'name' => 'Geranium', 
                    'description' => 'Geranium oil', 
                    'receiving_unit' => 'case of 10 bottles', 
                    'receiving_cost' => '$30',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '7', 
                    'name' => 'Rosemary', 
                    'description' => 'Rosemary oil', 
                    'receiving_unit' => 'case of 14 bottles', 
                    'receiving_cost' => '$50',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '8', 
                    'name' => 'Peppermint', 
                    'description' => 'Peppermint oil', 
                    'receiving_unit' => 'case of 12 bottles', 
                    'receiving_cost' => '$28',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '9', 
                    'name' => 'Sandalwood', 
                    'description' => 'Sandalwood oil', 
                    'receiving_unit' => 'case of 10 bottles', 
                    'receiving_cost' => '$50',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '10', 
                    'name' => 'Neroli', 
                    'description' => 'Neroli oil', 
                    'receiving_unit' => 'case of 12 bottles', 
                    'receiving_cost' => '$42',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '11', 
                    'name' => 'Spearmint', 
                    'description' => 'Spearmint oil', 
                    'receiving_unit' => 'case of 8 bottles', 
                    'receiving_cost' => '$50',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '12', 
                    'name' => 'Bergamot', 
                    'description' => 'Bergamot oil', 
                    'receiving_unit' => 'case of 12 bottles', 
                    'receiving_cost' => '$50',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '13', 
                    'name' => 'Cedarwood', 
                    'description' => 'Cedarwood oil', 
                    'receiving_unit' => 
                    'case of 8 bottles', 
                    'receiving_cost' => '$38',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '14', 
                    'name' => 'Chamomile', 
                    'description' => 'Chamomile oil', 
                    'receiving_unit' => 'case of 8 bottles', 
                    'receiving_cost' => '$26',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '15', 
                    'name' => 'Rosewood', 
                    'description' => 'Rosewood oil', 
                    'receiving_unit' => 'case of 8 bottles', 
                    'receiving_cost' => '$52',
                    'stocking_unit' => '5mL bottles',
                    'quantity' => '6'),
                array(
                    'code' => '16',
                    'name' => 'Ginger',
                    'description' => 'Ginger oil',
                    'receiving_unit' => 'case of 12 bottles',
                    'receiving_cost' => '$32',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '17', 
                    'name' => 'Marjoram', 
                    'description' => 'Marjoram oil', 
                    'receiving_unit' => 'case of 12 bottles', 
                    'receiving_cost' => '$30',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6'),
                array(
                    'code' => '18', 
                    'name' => 'Basil', 
                    'description' => 'Basil oil', 
                    'receiving_unit' => 'case of 10 bottles', 
                    'receiving_cost' => '$42',
                    'stocking_unit' => '5mL bottles', 
                    'quantity' => '6',)
        );

	/**
         * Constructor
         */
	public function __construct()
	{
		parent::__construct();
	}
        
        /**
         * Retrieve a single supply by code
         * @param $code
         * @return $record
         */
	public function get($id)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['code'] == $id)
				return $record;
		return null;
	}

        /**
         * Adjust the quantity of a supply item
         * @param type $code
         * @param type $amount
         */
        /*
		 * for next Assignment
		public function adjustQuantity($code, $amount){
            get($code)->quantity += $amount;
        }
        */
	/**
         * Returns the array
         * @return type array
         */
	public function all()
	{
		return $this->data;
	}
}
