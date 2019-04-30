<?php

namespace App\Http\Controllers;
use Auth;
use App\Purchase;
use App\User;
use Illuminate\Http\Request;

class purchaseController extends Controller
{
    
    public function index()
    {   
      if(Auth::check()){
        $id = Auth::user()->id;
        $purchase = Purchase::where('customer_id', $id)->get();
        return view('customer.purchase', ['purchases' => $purchase]);
        //return $purchase;
      }
    }

    public function store(Request $request)
    {
        $purchase = new Purchase;
        $purchase->item = $request->item;
        $purchase->category = $request->category;
        $purchase->quantity = $request->quantity;
        $purchase->customer_id = Auth::user()->id;
        $purchase->save();
    }
    
    public function destroy($id)
    {
        $purchase = Purchase::where('id', $id);
        $purchase->delete();
        return 1;
    }

    public function adminPurchaseList(){
      $purchase = Purchase::all();
      $user = User::all();
      return view('admin.purchase', ['purchases' => $purchase, 'users' => $user]);
    }

    public function adminCategory($request){
        $purchase = Purchase::where('category',$request)->get();
        $user = User::all();
        return view('admin.purchase', ['purchases' => $purchase, 'users' => $user]);
    }
}
