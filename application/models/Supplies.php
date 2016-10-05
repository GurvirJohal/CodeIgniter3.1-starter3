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
		array('code' => 'lavendar', 'description' => 'lavendar oil', 'receiving_unit' => 'case of 12 bottles', 'receiving_cost' => '$30',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'eucalyptus', 'description' => 'eucalyptus oil', 'receiving_unit' => 'case of 10 bottles', 'receiving_cost' => '$35',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'lemon', 'description' => 'lemon oil', 'receiving_unit' => 'case of 12 bottles', 'receiving_cost' => '$30',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'orange', 'description' => 'orange oil', 'receiving_unit' => 'case of 8 bottles', 'receiving_cost' => '$40',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'grapefruit', 'description' => 'grapefruit oil', 'receiving_unit' => 'case of 10 bottles', 'receiving_cost' => '$25',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'ylang', 'description' => 'ylang ylang oil', 'receiving_unit' => 'case of 12 bottles', 'receiving_cost' => '$30',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'geranium', 'description' => 'geranium oil', 'receiving_unit' => 'case of 10 bottles', 'receiving_cost' => '$30',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'rosemary', 'description' => 'rosemary oil', 'receiving_unit' => 'case of 14 bottles', 'receiving_cost' => '$50',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'peppermint', 'description' => 'peppermint oil', 'receiving_unit' => 'case of 12 bottles', 'receiving_cost' => '$28',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'sandalwood', 'description' => 'sandalwood oil', 'receiving_unit' => 'case of 10 bottles', 'receiving_cost' => '$50',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'neroli', 'description' => 'neroli oil', 'receiving_unit' => 'case of 12 bottles', 'receiving_cost' => '$42',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'spearmint', 'description' => 'spearmint oil', 'receiving_unit' => 'case of 8 bottles', 'receiving_cost' => '$50',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'bergamot', 'description' => 'bergamot oil', 'receiving_unit' => 'case of 12 bottles', 'receiving_cost' => '$50',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'cedarwood', 'description' => 'cedarwood oil', 'receiving_unit' => 'case of 8 bottles', 'receiving_cost' => '$38',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'chamomile oil', 'description' => 'chamomile oil', 'receiving_unit' => 'case of 8 bottles', 'receiving_cost' => '$26',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'rosewood', 'description' => 'rosewood oil', 'receiving_unit' => 'case of 8 bottles', 'receiving_cost' => '$52',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'ginger', 'description' => 'ginger oil', 'receiving_unit' => 'case of 12 bottles', 'receiving_cost' => '$32',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'marjoram', 'description' => 'marjoram oil', 'receiving_unit' => 'case of 12 bottles', 'receiving_cost' => '$30',
			'stocking_unit' => '5mL bottles', 'quantity' => '6'),
                array('code' => 'basil', 'description' => 'basil oil', 'receiving_unit' => 'case of 10 bottles', 'receiving_cost' => '$42',
			'stocking_unit' => '5mL bottles', 'quantity' => '6',)
        );

	/**
         * Constructor
         */
	public function __construct()
	{
		parent::__construct();
	}
        
        /**
         * Retrieve a single supply by quote
         * @param type $code
         * @return type
         */
	public function get($code)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['code'] == $code)
				return $record;
		return null;
	}
        
	/**
         * Returns the array
         * @return type array
         */
	public function all()
	{
		return $this->data;
	}
}
