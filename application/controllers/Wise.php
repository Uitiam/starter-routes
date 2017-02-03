<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
{

	/**
	 * Index Page for this controller.
	 */
	public function bingo()
	{
		$this->data['pagebody'] = 'justone';
	
		// getting the fourth quote
		$record = $this->quotes->get(6);
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}
}
