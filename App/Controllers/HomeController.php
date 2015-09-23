<?php

namespace App\Controllers;

use App\System\Controllers\ControllerInterface;
use App\System\Controllers\Stump;

class HomeController extends Stump implements ControllerInterface{

    public function display(){
        return 'Smoked Potatoes';
    }

    public function displayAnother(){
        return 'Another';
    }
}