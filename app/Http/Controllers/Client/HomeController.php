<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FundProduct;
use App\Models\MarketProduct;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $fund_products = FundProduct::all();
        $market_products = MarketProduct::all();
        $user = User::first();
        return view('client.index', ['user' => $user,'fund_products' => $fund_products, 'market_products' => $market_products]);
    }
}
