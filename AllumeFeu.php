<?php 

class AllumeFeu extends TypeDechet
{

private $libelEssence;
private $valeurEnergetique;


public function __construct(int $id,string $libelle,int $nbkilosparsac,int $prixUnitaire,string $libelEssence,int $valeurEnergetique)
{
    parent::__construct($id, $libelle,$nbkilosparsac,$prixUnitaire);
        $this->libelEssence = $libelEssence;
        $this->valeurEnergetique = $valeurEnergetique;
}


public function getlibelEssence():string
    {
        return $this-> libelEssence;
    }

public function getvaleurEnergetique():int
{
    return $this->valeurEnergetique;
}

public function __toString()
{
    return parent::__toString(). "LibelEssence".$this->libelEssence."valeurEnergetique".$this->valeurEnergetique."<br>";
}












}


?> 