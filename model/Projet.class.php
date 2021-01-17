<?php

class Projet{
    private int $id;
    private int $idCreateur;
    private string $nom;

    function __construct(int $id=0, int $idCreateur=0, string $nom='')
    {
        $this->id = $id;
        $this->idCreateur = $idCreateur;
        $this->nom = $nom;
    }

    function __get($name)
    {
        return htmlspecialchars($this->$name);
    }

    function __set(string $name, $value) : void
    {
        $this->$name = $value;
    }
}


?>