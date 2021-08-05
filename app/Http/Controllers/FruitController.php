<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index(){
        $dataFruit = Fruit::all();
        return view('pages.fruit', compact('dataFruit'));
    }
    public function show(Fruit $id){
        $fruit = $id;
        return view('pages.showFruit', compact('fruit')); 
    }
}
