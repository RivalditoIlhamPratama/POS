<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodBeverage()
    {
        $name = 'Food and Beverage';
        return view('category.index')->with('name', $name);
    }

    public function beautyHealth()
    {
        $name = 'Beauty and Health';
        return view('category.index')->with('name', $name);
    }

    public function homeCare()
    {
        $name = 'Home Care';
        return view('category.index')->with('name', $name);
    }

    public function babyKid()
    {
        $name = 'Baby and Kid';
        return view('category.index')->with('name', $name);
    }
}