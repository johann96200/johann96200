<?php 

class TypeDechet

{

private $id;
private $libelle;
private $nbkilosparsac;
private $prixUnitaire;


public function __construct(int $id,string $libelle,int $nbkilosparsac,int $prixUnitaire)
{
    $this->id = $id;
    $this->libelle = $libelle;
    $this->nbkilosparsac = $nbkilosparsac;
    $this->prixUnitaire = $prixUnitaire;
}

public function getid():int
{
    return $this->id;
}

public function getlibelle():string 
{
    return $this->libelle;
}

public function getnbkilosparsac():int
{
    return $this->nbkilosparsac;
}

public function getprixUnitaire():int
{
    return $this->prixUnitaire; 
}


public function __toString()
{
    return "id".$this->id."libelle".$this->libelle."nbkilosparsac".$this->nbkilosparsac."prixUnitaire".$this->prixUnitaire."<br>";
}









}















?> 