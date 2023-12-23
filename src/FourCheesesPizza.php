<?php

namespace lw3\Pizza;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class FourCheesesPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'пиццы четыре сыра; ';
        $this->sauce = 'оливковое масло; ';
        $this->toppings = ['горгонзола; ', 'пармезан; ', 'моцарелла.'];
    }
}
