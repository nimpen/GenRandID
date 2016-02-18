<?php
class GenRandID {

	// All the vowels, some consonants and some numbers have been removed
	public $TR_ENC = '56789dfghjklmnpqrstvwz';
	
	function __construct() {
		$this->BASE=strlen($this->TR_ENC);
		$this->TR_DEC=substr('0123456789abcdefghijklmnopqrstuvwxyz',0,$this->BASE);
		}

	public function encode($userID) {
		$rand=rand(10,99);
		$newID=$userID.$rand;
		$base=base_convert($newID, 10, $this->BASE);	
		$transl=strtr($base, $this->TR_DEC, $this->TR_ENC);
		return($transl);
		}

	public function decode($userID) {
		$transl=strtr($userID, $this->TR_ENC, $this->TR_DEC);
		$base=base_convert($transl, $this->BASE, 10);	
		$userID=substr($base, 0, -2);
		return($userID);
		}
}
?>

