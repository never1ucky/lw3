<?php

namespace lw3\Pizza;

require '../vendor/autoload.php';

use Lw3\Library\PizzaStore;
use Lw3\Library\Pizza;

class PizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'fourcheeses') {
            return new FourCheesesPizza();
        }
        if ($type === 'hawaiian') {
            return new HawaiianPizza();
        }
        if ($type === 'pepperoni') {
            return new PepperoniPizza();
        } else {
            throw new Exception('вы выбрали неверный тип пиццы');
        }
    }
}
