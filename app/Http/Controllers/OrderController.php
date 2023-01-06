<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\type;
use App\Models\tafel;
use App\Models\order;
use App\Models\menuOrder;

class OrderController extends Controller
{
    public function index(){
        $type = type::all();
        $tafel = tafel::all();
        $menuCount = menu::count(); 
        return view('bestellen',[
            'type' => $type,
            'tafel' => $tafel,
            'menuCount' => $menuCount,
        ]);
    }

    public function store(Request $request){
        // $request->validate([
        //     'tafel' => 'required',
        //     'type' => 'required',
        //     'menu' => 'required',
        // ]);

        $order = Order::create([
            'tafel_id' => $request->tafel_id,
        ]);

        foreach($request->order as $m){
            menuOrder::create([
                'menu_id' => $m,
                'order_id' => $order->id,
            ]);
        }
        return back()->with('message', 'Bestelling is geplaatst');
    }

    public function kitchen(){
        $kitchen = Order::whereDate('created_at', today())
        ->whereNull('food_ready_at')
        ->whereHas('menu', function($query){
            $query->whereHas('type', function($query){
                $query->where('name', 'drank');
            });
        })->get();    
        return view('kitchen',[
            'kitchen' => $kitchen
        ]);
    }

    public function bar(){
        $bar = Order::whereDate('created_at', today())
        ->whereNull('drinks_ready_at')
        ->whereHas('menu', function($query){
            $query->whereHas('type', function($query){
                $query->where('name', 'drank');
            });
        })->get();
        return view('bar',[
            'bar' => $bar
        ]);
    }

    public function update(Request $request, Order $kitchen){
        if($request->type == 'drinks'){
            $kitchen->update([
                'drinks_ready_at' => now(),
            ]);
        }else{
            $kitchen->update([
                'food_ready_at' => now(),
            ]);
        }
        return back();
    }
}
