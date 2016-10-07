<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Sales
 *
 * @author Theresa
 */
class Sales extends Application
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
            $this->load->model('stock');
            $this->data['pagebody'] = 'sales';

            // build the list of authors, to pass on to our view
            $source = $this->stock->all(); 
            $stock = array ();
            foreach ($source as $record)
            {
                    $stock[] = array ('code' => $record['code'], 'description' => $record['description'], 'quantity' => $record['quantity'], 'price' => $record['price']);
            }
            $this->data['stock'] = $stock;

            $this->render();
	}

        public function receipt() {
            $log = $_GET['receiving_unit'] . " lavendar(s) was received at the cost of $" . $this->getCost() . ".";

            $file = fopen("log.txt","w");
            fwrite($file,$log."<br/>");
            fclose($file);

            $myfile = fopen("log.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("log.txt"));
            fclose($myfile);
	}
}