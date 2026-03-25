<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '1.jpeg'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => '1.jpeg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 2500, 'path' => '1.jpeg'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 500, 'path' => '1.jpeg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 1500, 'path' => '1.jpeg'],
            ['id' => 6, 'title' => 'продукт 6', 'price' => 2500, 'path' => '1.jpeg'],
            ['id' => 7, 'title' => 'продукт 7', 'price' => 500, 'path' => '1.jpeg'],
            ['id' => 8, 'title' => 'продукт 8', 'price' => 1500, 'path' => '1.jpeg'],
    ];

    public function showIndex()
    {
        return view('home');
    }
    public function showArray()
    {
        $array = $this->array;
        return view('array', compact('array'));
    }

   
    public function shuffleArray()
    {
        $array = $this->array;
        shuffle($array);
        return view('array', compact('array'));
    }

   
    public function sortArray()
    {
        $array = $this->array;
        usort($array, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return view('array', compact('array'));
    }

    
    public function filterArray()
    {
        $array = array_filter($this->array, function($item) {
            return $item['price'] > 1000;
        });
        return view('array', compact('array'));
    }
}