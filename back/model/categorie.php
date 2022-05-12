<?php
class Categorie{
    private ?int $id_categorie= null;
    private ?string $label_categorie = null;


    public function __construct(string $label_categorie)
    {
        
        $this->label_categorie = $label_categorie; 
    }

    public function getIdcategorie(): int
    {
        return $this->id_categorie;
    }

    public function setIdcategorie(int $idcategorie): void
    {
        $this->idcategorie = $idcategorie;
    }

    public function getlabel_categorie(): string
    {
        return $this->label_categorie;
    }


    public function setlabel_categorie(string $label_categorie): void
    {
        $this->label_categorie = $label_categorie; 
    }
}

?>