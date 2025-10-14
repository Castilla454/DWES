<?php 

requires_once = 'Tool.php';

public class ElectricTool extends Tool{


public function __construct(
string $Sku, 
string $nombre, 
float $precioDia, 
float $recargo){
	parent::__construct($Sku,$nombre,$precioDia);
	
	
}

public function getRecargo(): float{
	
	
	return $this->recargo;
	
}



}










?>