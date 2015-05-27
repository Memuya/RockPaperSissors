<?php
class RPS {
	private $player, $ai, $selections, $results;

	public function __construct() {
		$this->selections = [
			'rock' => 'scissors',
			'paper' => 'rock',
			'sissors' => 'paper'
		];
	}

	public function battle() {
		$this->setAI();
		foreach($this->selections as $key => $x) {
			//player wins
			if($this->player == $key && $this->ai == $x) $this->results = 'YOU WIN<br>'.$key.' beats '.$x;
			//ai wins
			else if($this->ai == $key && $this->player == $x) $this->results = 'YOU LOSE<br>'.$key.' beats '.$x;
			//draw
			else if($this->player == $key && $this->ai == $key) $this->results = 'DRAW<br>'.$this->player.' and '.$this->ai.' are the same';
		}
	}

	public function results() {
		return $this->results;
	}

	public function setPlayer($x) {
		//if player selection is not in array, default to 'rock'
		if(in_array($x, $this->selections))
			$this->player = $x;
		else
			$this->player = 'rock';

		//un-comment to randomize player selection
		//$this->player = array_rand($this->selections);
	}

	public function setAI() {
		$this->ai = array_rand($this->selections);
	}

	public function getPlayer() {
		return $this->player;
	}

	public function getAI() {
		return $this->ai;
	}
}
