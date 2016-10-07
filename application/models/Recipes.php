<?php

/*
 * the list of raw materials that go into the creation of one product for sale or one service offered. 
 * With sample values in brackets ... a recipe code (Legendary Burger), a description (single patty, 
 * original burger), and the recipe ingredients (1 patty, 1 bun, 2 oz triple-O sauce, 1 pickle).
 */
class Recipes extends CI_Model{
    //Initialize the array of recipes
    var $data = array(
		array(
                    'code' => '0',
                    'name' => 'Refresh',
                    'description' => 'Sharpen concentration, increase stamina, and revitalize your senses',
                    'ingredients' => array(
                                        'Spearmint' => '1',
                                        'Lavendar' => '1',
                                        'Eucalyptus' => '1',
                                        'Lemon' => '1',
                                        'Rosewood' => '.5',
                                        'Cedarwood' => '.5')),
                
                array(
                    'code' => '1', 
                    'name' => 'Cloud nine', 
                    'description' => 'Lift your spirits', 
                    'ingredients' => array(
                                        'Lavendar' => '2',
                                        'Ylang' => '1',
                                        'Neroli' => '1',
                                        'Sandalwood' => '1')),
                
                array(
                    'code' => '2',
                    'name' => 'Energy',
                    'description' => 'Invigorate and refresh your mind and body', 
                    'ingredients' => array(
                                        'Peppermint' => '1.5',
                                        'Rosemary' => '1',
                                        'Lemon' => '1',
                                        'Bergamot' => '1',
                                        'Basil' => '.5')),
                
                array(
                    'code' => '3', 
                    'name' => 'Exhale', 
                    'description' => 'An exhilarating essential oil blend that renews and strengthens', 
                    'ingredients' => array(
                                        'Eucalyptus' => '2',
                                        'Peppermint' => '1.5',
                                        'Rosemary' => '1',
                                        'Ginger' => '.5')),
                
                array(
                    'code' => '4',
                    'name' => 'Citrus Dream',
                    'description' => 'For promoting a sense of calmness and positivity',
                    'ingredients' => array(
                                        'Orange' => '2.5',
                                        'Grapefruit' => '1',
                                        'Lemon' => '1',
                                        'Neroli' => '.5')),
                
                array(
                    'code' => '5',
                    'name' => 'Tranquility',
                    'description' => 'For a deeper, more restful sleep',
                    'ingredients' => array(
                                        'Orange' => '1.5',
                                        'Lavendar' => '1.5',
                                        'Marjoram' => '1',
                                        'Chamomile' => '1')),
                
                array(
                    'code' => '6',
                    'name' => 'Unwind',
                    'description' => 'Melt away stress and ease tension with this uplifting blend',
                    'ingredients' => array(
                                        'Orange' => '2',
                                        'Lavendar' => '1.5',
                                        'Bergamot' => '1',
                                        'Geranium' => '.5'))
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
