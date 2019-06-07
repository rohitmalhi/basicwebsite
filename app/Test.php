<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function __construct(){
        echo "construct method from test model";
    }
}
