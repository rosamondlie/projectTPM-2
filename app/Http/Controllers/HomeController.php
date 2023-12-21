<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $list_restaurant = Restaurant::all();

        // return view('home',[
        // "list_restaurant" => $list_restaurant]);
        return view(
            'home',
            // "list_restaurant" => $list_restaurant
            compact('list_restaurant')
        );
    }
}
