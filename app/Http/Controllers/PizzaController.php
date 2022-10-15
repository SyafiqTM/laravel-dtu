<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pizza;

class PizzaController extends Controller
{
   public function index($key){

       $array = [
        'hawaiian' => 'This is the file for chapter one',
        'chicken-wing' => 'This is the file for chapter two',
        'cheese' => 'This is the file for chapter three'
       ];

       $pizza = DB::table('pizza')->where('slug', $key)->first();


       if(array_key_exists($key, $array)){
            $description = $array[$key];
       }else{
            $description = 'There is no available chapter';
       }

    //    $array['chciken-wing'];
       return view('test', ['pizza' => $pizza]);
   }


   public function show(){
        // $pizza = Pizza::where('slug', $pizza)->firstOrFail();
        $pizza = Pizza::where('duration', '>', 0)->take(3)->latest('finished_at')->get();

        return view('summary', ['pizzas' => $pizza]);
   }

   public function store($pizza){
        $pizza = Pizza::where('slug', $pizza)->first();
        $pizza->add_duration(15);
        $pizza->complete();

        return view('summary', ['pizza' => $pizza]);
   }
}
