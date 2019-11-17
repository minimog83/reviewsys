<?php

class Restaurants {
    protected $name;
    protected $explain;
    
    function __construct(string $name, string $explain) {
        $this->name = $name;
        $this->explain = $explain;
    }
    
    function getName():string {
        return $this->name;
    }
    
    function getProfile():string {
        $profile = "{$this->name}<br /> {$this->explain}";
        return $profile;
    }
}

?>