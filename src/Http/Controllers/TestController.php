<?php

namespace Sahadat\Sfaq\Http\Controllers;

use App\Http\Controllers\Controller;


class TestController extends Controller
{
    public function index(){
        return "hello from test controller inside package";
    }
}