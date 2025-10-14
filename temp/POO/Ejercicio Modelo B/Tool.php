<?php 

public abstract class Tool{



public function __construct(
protected string $Sku,
protected string $nombre, 
protected float $precioDia ){
	
	
};


public function setSku(string $sku):void{
	
	
	$this->Sku = $sku;
	
}


public function setNombre(string $nombreHerramienta):void{
	
	
	$this->nombre = $nombreHerramienta;
	
}




}

public function setPrecioDia(float $precio):void{
	
	
	$this->precioDia = $precio;
	
	
}




?>