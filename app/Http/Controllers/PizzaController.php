<?php

namespace App\Http\Controllers;

use App\Models\Pizza as ModelsPizza;
use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function index(){
        #$pizzas=[
         #   ['name'=>'Hawaiian', 'type'=>'cheesy', 'base'=>'thin crust'],
          #  ['name'=>'Italian', 'type'=>'sausage', 'base'=>'soft crust']
        #];
        #$pizzas=Pizza::all();
        #$pizzas=Pizza::orderby('name')->get();
        #$pizzas=Pizza::where('name','Nehal')->get();
        $pizzas=Pizza::latest()->get();
        return view('pizzas', ['pizzas'=>$pizzas]);
    }
}
