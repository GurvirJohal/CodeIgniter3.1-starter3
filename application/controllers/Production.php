<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Production
 *
 * @author Theresa
 */
class Production extends Application {
    //put your code here
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
