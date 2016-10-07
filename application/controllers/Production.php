<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * The production page should show recipes, and for the selected one, show the ingredients
 * that go into it, flagging any that are not on hand. Log any items made, without updating inventory.
 */
class Production extends Application 
{      
	public function index()
	{
		// get the newest images from our model
		$item = $this->recipes_model->all();

		// build an array of formatted cells for them
		foreach ($item as $items)
			$cells[] = $this->parser->parse('_cell', (array) $items, true);

		// prime the table class
		$this->load->library('table');
		$parms = array(
			'table_open' => '<table class="menu_table">',
			'cell_smart' => '<td class="menu_item">',
			'cell_alt_start' => '<td class="menu_item">'
		);
		$this->table->set_template($parms);

		// finally! generate the table
		$rows = $this->table->make_columns($cells, 4);
		$this->data['production_table'] = $this->table->generate($rows);

		$this->data['pagebody'] = 'production_view';
		$this->render();
	}
}
