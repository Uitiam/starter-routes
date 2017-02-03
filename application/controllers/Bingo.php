<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'justone';

		// getting the fourth quote
		$record = $this->quotes->get(5);
		$this->data = array_merge($this->data, $record);

		$this->render();
	}
}
