<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'justone';
	
		// getting the first quote
		$record = $this->quotes->get(1);
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}

}
