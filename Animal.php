<?php 

class Animal {
    public $name;
    public $species;
    public $year;
    public $gender;

    function __construct($name = null, $species = null, $year = null, $gender = null){
        $this->name = $name;
        $this->species = $species;
        $this->year = $year;
        $this->gender = $gender;
    }

    public function intro()
    {
        
    }

    // jei funkcijoje yra bent vienas $this - funkcija dinamine. Dinamines funkcijas kvieciame per klases objekta; statines per klase
}

?>