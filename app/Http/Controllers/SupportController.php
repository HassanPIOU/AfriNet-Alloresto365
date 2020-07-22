<?php

namespace App\Http\Controllers;


use App\Ticket;
use App\Message;
use App\Customer;
use Illuminate\Support\Facades\Request;

class SupportController extends Controller
{
    public function index(){
        $tickets = Ticket::latest()->paginate(10);
        $customers = Customer::all();
        return view('support.index',compact('tickets', 'customers'));
    }

    public function update(Request $request,$type ,$id){
        if (Ticket::where('id' , $id)->update(['state' => $type])){
            echo 'true';
        }
        else{
            echo 'false';
        }
    }

}
