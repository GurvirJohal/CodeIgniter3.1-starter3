<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stock
 *
 * @author Tess
 */
class Stock extends CI_Model{
    //Initialize the array of stock
    var $data = array(
		array('code' => 'refresh', 'description' => 'sharpen concentration, increase stamina, and revitalize your senses',  'quantity' => '4', 'price' => '$14.95'),
                array('code' => 'cloud nine', 'description' => 'lift your spirits', 'quantity' => '7', 'price' => '$16.45'),
                array('code' => 'energy', 'description' => 'invigorate and refresh your mind and body',  'quantity' => '5', 'price' => '$18.45'),
                array('code' => 'exhale', 'description' => 'an exhilarating essential oil blend that renews and strengthens',  'quantity' => '4', 'price' => '$12.95'),
                array('code' => 'citrus dream', 'description' => 'for promoting a sense of calmness and positivity',  'quantity' => '9', 'price' => '$16.95'),
                array('code' => 'tranquility', 'description' => 'for a deeper, more restful sleep',  'quantity' => '5', 'price' => '$12.45'),
                array('code' => 'unwind', 'description' => 'melt away stress and ease tension with this uplifting blend', 'quantity' => '7', 'price' => '$19.45')
        );

	/**
         * Constructor
         */
	public function __construct()
	{
		parent::__construct();
	}
        
        /**
         * Retrieve a single stock by code
         * @param $code
         * @return $record
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
         * Retrieve all of the stock
         * @return $this->data
         */
	public function all()
	{
		return $this->data;
	}
}
