<?php

class periode 

{

private $dateDebut;
private $dateFin;
public $totalCA;
public $VenteAllumeFeu;

public function __construct(DateTime $dateDebut, DateTime $dateFin,int $totalCA,int $VenteAllumeFeu)
{

    $this->dateDebut = $dateDebut;
    $this->dateFin= $dateFin;
    $this->totalCA = $totalCA;
    $this->venteAllumeFeu = $VenteAllumeFeu;
}

public function getdateDebut():string
{
    return $this->DateDebut;
}
 
public function setdateDebut(DateTime $dateDebut)
{
    $this->dateDebut = $dateDebut;
}

public function getdateFin():string
{
    return $this->DateFin;
}
 
public function setdateFin(DateTime $dateFin)
{
    $this->dateFin = $dateFin;
}

public function totalCA():int
{
    return $this->totalCA;
}

public function venteAllumeFeu():int
{
    return $this->venteAllumeFeu;
}

public function __toString()

{
    return 'dateDebut :'.$this->dateDebut.'dateFin :'.$this->dateFin."totalCA : ".$this->totalCA."venteAllumeFeu : ".$this->venteAllumeFeu."<br>";
}

}




















?>