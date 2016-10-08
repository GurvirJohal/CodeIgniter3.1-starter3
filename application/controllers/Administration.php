<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Administration
 *
 * @author Theresa
 */
class Administration extends Application
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
            $this->data['pagebody'] = 'administration';

            $this->render();
	}
        
        public function supplies(){
            $this->load->model('supplies');
            $this->data['pagebody'] = 'supplies';

            $source = $this->supplies->all();
            $supplies = array ();
            foreach ($source as $record)
            {
                    $supplies[] = array ('code' => $record['code'], 'name' => $record['name'],
					'description' => $record['description'], 'receiving_unit' => $record['receiving_unit'],
					'receiving_cost' => $record['receiving_cost'], 'stocking_unit' => $record['stocking_unit'],
					'quantity' => $record['quantity']);
            }
            $this->data['supplies'] = $supplies;

            $this->render();
        }
        
        public function editsupply($code){
            $this->load->model('supplies');
            $this->data['pagebody'] = 'editsupply';

            // gets a list of supplies
            $source = $this->supplies->get($code);
            $this->data = array_merge($this->data, $source);
            $this->render();
        }
        
        public function recipes(){
            $this->load->model('recipes');
            $this->data['pagebody'] = 'recipes';

            // gets a list of supplies
            $source = $this->recipes->all();
            $supplies = array ();
            foreach ($source as $record)
            {
                    $recipes[] = array ('code' => $record['code'], 'name' => $record['name'],
					'description' => $record['description'], 'ingredients' => $record['ingredients']);
            }
            $this->data['recipes'] = $recipes;

            $this->render();
        }
        
        public function editrecipe($code){
            $this->load->model('recipes');
            $this->data['pagebody'] = 'editrecipe';

            // gets a list of supplies
            $source = $this->recipes->get($code);
            $this->data = array_merge($this->data, $source);
            $this->render();
        }
        
        public function stock(){
            $this->load->model('stock');
            $this->data['pagebody'] = 'stock';

            // gets a list of supplies
            $source = $this->stock->all();
            $supplies = array ();
            foreach ($source as $record)
            {
                    $stock[] = array ('code' => $record['code'], 'name' => $record['name'],
					'description' => $record['description'], 'price' => $record['price'], 'quantity' => $record['quantity']);
            }
            $this->data['stock'] = $stock;

            $this->render();
        }
        
        public function editstock($code){
            // code to show form to edit a stock
            $this->load->model('stock');
            $this->data['pagebody'] = 'editstock';

            // gets a list of supplies
            $source = $this->stock->get($code);
            $this->data = array_merge($this->data, $source);
            $this->render();
        }

}