<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{


    public function index()
    {
        $auth = auth()->user();
        $users = User::latest()->Where('id' , '!=', $auth->id)->paginate(10);
        return view('users.index',compact('users'));
    }

    public function updateuser(Request $request, $id, $type)
    {

        if ($type == 3){
            if (User::where('id',$id)->delete()){
                echo 'true';
            }
            else{
                echo 'false';
            }
        }
        else{
            if (User::where('id' , $id)->update(['state' => $type])){
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

            $data = [
                "first_name" =>   $params['first_name'],
                "last_name" =>   $params['last_name']
            ];

            $params['password'] = Hash::make($params['password'] );

        $check = User::where($data)->count();
        $telcheck = User::where('phone_number', $params['phone_number'])->count();
        $emailcheck = User::where('email', $params['email'])->count();
        if ($telcheck > 0){
            echo "phone";
        }
        else if ($emailcheck > 0){
            echo "email";
        }
        else if ($check > 0){
            echo "exist";
        }
        else{
            if (User::create($params)){
                echo "true";
            }else{
                echo "false";
            }
        }
        die;
    }

    public  function edit(Request $request){
           $params = $request->all();

            if (User::where('id',$params['id'])->update($params)){
                echo "true";
            }else{
                echo "false";
            }

        die;
    }

}
