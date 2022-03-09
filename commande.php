<?php 


class commande 

{

private $idCde;
private $dateCde; 
public $Gleslignes;
public $poidsTotal; 
public $montantTotal; 


public function __construct(int $idCde,dateTime $dateCde,int $Gleslignes,int $poidsTotal,int $montantTotal)
{
    $this->idCde = $idCde;
    $this->dateCde = $dateCde;
    $this->Gleslignes = $Gleslignes;
    $this->montantTotal = $montantTotal;
}


public function getidCde():int 
{
    return $this->idCde;
}

public function getdateCde():dateTime 
{
    return $this->dateCde;
}

public function setdateCde(dateTime $dateCde)
{
    $this->dateCde = $dateCde;
}

public function getGleslignes():int 
{
    return $this->Gleslignes; 
}

public function montantTotal():int
{
    return $this->montantTotal;
}

public function __toString()
{
    return "idCde ".$this->idCde."dateCde".$this->dateCde."Gleslignes".$this->Gleslignes."montantTotal".$this->montantTotal."<br>";
}

}



?> 