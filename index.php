<?php 

class Persona {

  private $nome;
  private $cognome;

  function __construct($nome, $cognome)
  {
    $this -> nome = $nome;
    $this -> cognome = $cognome;
  }

  function __toString()
  {
    return "Il nome è: ". $this -> nome . ", il cognome: ". $this -> cognome;
  }

}

class Ospite extends Persona {
  private $dataDiNascita;
  function __construct($nome, $cognome, $dataDiNascita)
  {
    parent::__construct($nome, $cognome);
    $this -> dataDiNascita = $dataDiNascita;
  }
  function __toString()
  {
   return parent::__toString() . "<br>". "Data di nascita: " .$this -> dataDiNascita; 
  }
}

class Pagante extends Persona {
  private $indirizzoDiResidenza;
  function __construct($nome, $cognome, $indirizzoDiResidenza)
  {
    parent::__construct($nome, $cognome);
    $this -> indirizzoDiResidenza = $indirizzoDiResidenza;
  }
  function __toString()
  {
   return parent::__toString() . "<br>". "Indirizzo di residenza: " .$this -> indirizzoDiResidenza; 
  }
}

$persona = new Persona("Angelo", "Inglima");
$ospite = new Ospite("Pippo", "Pluto", "20/10/1990");
$pagante = new Pagante("Alfonso", "Giardina", "Via Roma n° 90");

echo $persona . "<br>"."<br>";
echo $ospite . "<br>"."<br>";
echo $pagante . "<br>"."<br>";


?>