<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Receiving
 *
 * @author Theresa
 */
class Receiving extends Application
{
        /**
         * Default Constructor
         */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * loads receiving page
	 */
	public function index()
	{
            $this->load->model('supplies');
            $this->data['pagebody'] = 'receiving';

            // gets a list of supplies
            $source = $this->supplies->all();
            $supplies = array ();
            foreach ($source as $record)
            {
                    $supplies[] = array ('code' => $record['code']);
            }
            $this->data['supplies'] = $supplies;

            $this->render();
            
	}
	public function getCost() {
		return ($_GET['receiving_unit'] * getRcost());
	}

	public function getRcost() {
		return 30;
	}

	public function receipt() {
		$log = $_GET['receiving_unit'] . " lavendar(s) was received at the cost of $" . getCost() . ".";
		
		$file = fopen("log.txt","w");
		fwrite($file,$log."<br/>");
		fclose($file);
		
		$myfile = fopen("log.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("log.txt"));
		fclose($myfile);
	}

	public function totalCost() {
		$cost = getCost();
		$file2 = fopen("log2.txt","w");
		fwrite($file2,$cost+1000);
		fclose($file2);
		
		$myfile2 = fopen("log2.txt", "r") or die("Unable to open file!");
		$total = 0;
		$total = fread($myfile2,filesize("log2.txt"));
		
		echo "Total Price:" . $total;
		fclose($myfile2);
	}
}