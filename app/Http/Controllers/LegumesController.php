<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;

class LegumesController extends Controller
{
    public function index(){
        $dataLeg = Legume::all();
        return view('pages.legumes', compact('dataLeg'));
    }

    public function show(Legume $id){
        $legume = $id;
        return view('pages.showLegumes', compact('legume'));
    }
}
