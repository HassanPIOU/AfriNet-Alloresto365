<?php
/**
 * Created by PhpStorm.
 * User: Stephane de Jesus
 * Date: 08/07/2020
 * Time: 22:51
 */

namespace App\Http\Controllers;


use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::latest()->paginate(10);
        return view('customers.index',compact('customers'));
    }


    public function updatecustomer(Request $request, $id, $type)
    {

        if ($type == 3){
            if (Customer::where('id',$id)->delete()){
                echo 'true';
            }
            else{
                echo 'false';
            }
        }
        else{
            if (Customer::where('id' , $id)->update(['state' => $type])){
                echo 'true';
            }
            else{
                echo 'false';
            }

            die;

        }
    }

    public  function store(Request $request){

        $params = $request->all();

        if ($params['type'] == 2){
            $data = [
                "company_name" =>   $params['company_name']
            ];
        }else{
            $data = [
                "first_name" =>   $params['first_name'],
                "last_name" =>   $params['last_name']
            ];
        }


        $check = Customer::where($data)->count();
        $telcheck = Customer::where('phone_number', $params['phone_number'])->count();
        if ($telcheck > 0){
            echo "phone";
        }
       else if ($check > 0){
            echo "exist";
        }
        else{
            if (Customer::create($params)){
                echo "true";
            }else{
                echo "false";
            }
        }
        die;
    }

    public function updatepage(Request $request, $id)
    {
        $customer = Customer::where('id' , $id)->first();

        return view('customers.edit',compact('customer'));
    }

    public  function edit(Request $request){

           $params = $request->all();
           $id  = $params['id'];
            unset($params['id']);
            if (Customer::where('id', $id)->update($params)){
                echo "true";
            }else{
                echo "false";
            }
        die;
    }


}
