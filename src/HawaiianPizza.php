<?php

namespace lw3\Pizza;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class HawaiianPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'гавайские пиццы ';
        $this->sauce = 'соус барбекю; ';
        $this->toppings = ['ананас, ', 'болгарский перец, ', 'пармезан. '];
    }
}
