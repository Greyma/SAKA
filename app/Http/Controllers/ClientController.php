<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        return view('client.index');
    }
    public function checkout(){
        return view('client.checkout');
    }
    public function decouvrer(){
        return view('client.decouvrer');
    }
    public function formulaire(){
        return view('client.formulaire');
    }
    public function panier(){
        return view('client.panier');
    }
    public function register(){
        return view('client.register');
    }
    public function shop(){
        return view('client.shop');
    }
    public function signin(){
        return view('client.signin');
    }
}

?>
