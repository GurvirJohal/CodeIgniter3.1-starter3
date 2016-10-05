<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Recipes
 *
 * @author Tess
 */
class Recipes extends CI_Model{
    //Initialize the array of recipes
    var $data = array(
		array('code' => 'refresh', 'description' => 'sharpen concentration, increase stamina, and revitalize your senses', 'ingredients' => array('spearmint' => '1', 'lavendar' => '1', 'eucalyptus' => '1', 'lemon' => '1', 'rosewood' => '.5', 'cedarwood' => '.5')),
                array('code' => 'cloud nine', 'description' => 'lift your spirits', 'ingredients' => array('lavendar' => '2', 'ylang' => '1', 'neroli' => '1', 'sandalwood' => '1')),
                array('code' => 'energy', 'description' => 'invigorate and refresh your mind and body', 'ingredients' => array('peppermint' => '1.5', 'rosemary' => '1', 'lemon' => '1', 'bergamot' => '1', 'basil' => '.5')),
                array('code' => 'exhale', 'description' => 'an exhilarating essential oil blend that renews and strengthens', 'ingredients' => array('eucalyptus' => '2', 'peppermint' => '1.5', 'rosemary' => '1', 'ginger' => '.5')),
                array('code' => 'citrus dream', 'description' => 'for promoting a sense of calmness and positivity', 'ingredients' => array('orange' => '2.5', 'grapefruit' => '1', 'lemon' => '1', 'neroli' => '.5')),
                array('code' => 'tranquility', 'description' => 'for a deeper, more restful sleep', 'ingredients' => array('orange' => '1.5', 'lavendar' => '1.5', 'marjoram' => '1', 'chamomile' => '1')),
                array('code' => 'unwind', 'description' => 'melt away stress and ease tension with this uplifting blend', 'ingredients' => array('orange' => '2', 'lavendar' => '1.5', 'bergamot' => '1', 'geranium' => '.5'))
        );

	/**
         * Constructor
         */
	public function __construct()
	{
		parent::__construct();
	}
        
        /**
         * Retrieve a single recipe by code
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
         * Retrieve all of the recipes
         * @return $this->data
         */
	public function all()
	{
		return $this->data;
	}
}
