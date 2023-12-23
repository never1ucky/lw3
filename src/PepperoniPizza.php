<?php

namespace Ya\Test;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'пицца пепперони; ';
        $this->sauce = 'соус томатный; ';
        $this->toppings = ['грибы, ', 'пепперони, ', 'сыр.'];
    }
}
