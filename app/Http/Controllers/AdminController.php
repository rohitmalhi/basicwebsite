<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
class AdminController extends Controller
{
    private  $test;
    public function __construct(Test $test)
    {
      $this->test = $test;

    }
    public function dashboard()
    {
      echo "dashboard";die;
    }
}
