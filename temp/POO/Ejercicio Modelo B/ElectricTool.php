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

public function aplicarRecargo(){
	
	
	$this->precioDia = $this->precioDia + ($this->precioDia * $this->recargo);
	
	
	
}



public function getPrecioDia():float{
	
	
	return $this->precioDia;
	
	
	
}




?>