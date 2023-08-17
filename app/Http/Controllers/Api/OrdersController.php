<?php

namespace App\Http\Controllers\Api;

use App\Models\DetailOrder;
use App\Models\Orders;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function saveOrders(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if($user->save()){
            $order = new Orders();
            $order->user_id = $user->id;
            $order->status = 'PENDIENTE';
            $order->price = $request->total;
            if($order->save()){
                foreach ($request->products as $item) {
                    $detail = new DetailOrder();
                    $detail->product_id = $item['id'];
                    $detail->orders_id = $order->id;
                    $detail->save();
                }
                return response()->json([
                    'status' => 1
                ]);
            }else{
                return response()->json([
                    'status' => 0
                ]);
            }
        }
    }
}
