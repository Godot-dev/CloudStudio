<?php
class VersionMix{

    private int $id;
    private int $idProjet;
    private int $idCreateur;
    private string $info;

    function __construct(int $id=-1, int $idProjet=-1, int $idCreateur=-1, string $info='')
    {
        $this->id = $id;
        $this->idProjet = $idProjet;
        $this->idCreateur = $idCreateur;
        $this->info = $info;
    }

    function __get($name)
    {
        return htmlspecialchars($this->$name);
    }
}


?>