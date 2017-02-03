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

	public function zzz()
	{
		$this->data['pagebody'] = 'justone';
	
		// getting the sleep quote
		$record = $this->quotes->get(1);
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}
	
	public function gimme($id)
	{
		$this->data['pagebody'] = 'justone';
		
		// getting the gimme quote
		$record = $this->quotes->get($id);
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}
}
