<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class paymentController extends Controller
{
    public function index(Request $request){
        $orders = [];
        foreach($request->order as $o){
            $orders[] = menu::find($o);
        }       
        //total price
        $total = 0;
        foreach($orders as $o){
            $total += $o->price;
        }
        return view('payment',[
            'orders' => $orders,
            'total' => $total
        ]);
    }
}
