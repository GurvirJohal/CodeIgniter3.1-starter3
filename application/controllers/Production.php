<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * The production page should show recipes, and for the selected one, show the ingredients
 * that go into it, flagging any that are not on hand. Log any items made, without updating inventory.
 */
class Production extends Application 
{
    /**
     * constructor
     */
    function __construct()
    {
        parent::__construct();
        
    }
        
	public function index()
	{
            $this->load->model('recipes');
            $this->data['pagebody'] = 'homepage';
            // build the list of authors, to pass on to our view
            $source = $this->recipes->all();
            $recipes = array ();
            foreach ($source as $record)
            {
                    $recipes[] = array ('code' => $record['code']);
            }
            $this->data['recipes'] = $recipes;
            $this->render();
	}
}
