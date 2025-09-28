<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view('home');
    }

    public function showArray(){
        $array = [
        ['id' => 1, 'title' => 'Кот 1', 'price' => 600, 'path' => 'cats-1.jpg'],
        ['id' => 2, 'title' => 'Кот 2', 'price' => 700, 'path' => 'cats-2.jpg'],
        ['id' => 3, 'title' => 'Кот 3', 'price' => 900, 'path' => 'cats-3.jpg'],
        ['id' => 4, 'title' => 'Кот 4', 'price' => 200, 'path' => 'cats-4.jpg'],
        ['id' => 5, 'title' => 'Кот 5', 'price' => 300, 'path' => 'cats-5.jpg'],
        ['id' => 6, 'title' => 'Кот 6', 'price' => 500, 'path' => 'cats-6.jpg']];
        return view('array', compact('array'));
    }
}
