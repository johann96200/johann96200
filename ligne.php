<?php 

class ligne 

{

private $nbSacs;
private $PrixUnitaireF;

public function __construct(int $nbSacs,int $PrixUnitaireF)
{
    $this->nbSacs = $nbSacs;
    $this->PrixUnitaireF = $PrixUnitaireF;
}

public function getnbSacs():int
    {
        return $this-> nbSacs;
    }

public function getPrixUnitaireF():int
{
    return $this-> PrixUnitaireF;
}

public function __toString()
{
    return "nbSacs".$this->NbSacs."prixUnitaireF".$this->prixUnitaireF."<br>";
}









}


?> 