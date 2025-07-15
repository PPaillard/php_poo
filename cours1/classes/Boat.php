<?php
class Boat {
    private string $name;
    private int $speed;
    private array $amphorae = [];

    public function __construct(string $name, int $speed = 0)
    {
        $this->name = $name; 
        $this->speed = $speed;
    }

    public function load(Amphora $amphora): void {
        $this->amphorae[] = $amphora;
    }

    // listCargo() : affiche le nombre d’amphores et leur capacité totale
    public function listCargo():void {
        echo nl2br(PHP_EOL."Le nom du bateau est : {$this->name}".PHP_EOL);
        echo nl2br("Le nombre d'amphores est de : ".count($this->amphorae).PHP_EOL);

        $totalCapacity = 0;
        // chercher le tableau d'amphore
        // pour chaque additionné et faire le total
        foreach($this->amphorae as $amphora){
            $totalCapacity += $amphora->getCapacity();
        }
        echo "La capacité totale est de $totalCapacity";
    }
}