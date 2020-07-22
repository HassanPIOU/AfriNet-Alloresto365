<?php
/**
 * Created by PhpStorm.
 * User: Stephane de Jesus
 * Date: 08/07/2020
 * Time: 22:51
 */

namespace App\Http\Controllers;


use App\CustomerSubscription;
use App\Package;
use App\Customer;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForfaitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $packages = Package::all();
        return view('forfait.index',compact('packages'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:packages',
            'data' => 'required|integer',
        ], ['title.required' => "Le titre est obligatoire", 'data.required' => "Data est obligatoire"]);
        Package::create($request->all());
        return response()->json(['msg' => "Le forfait à été ajouté correctement"], 200, []);
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'title' => 'required',
            'data' => 'required|integer',
        ], ['title.required' => "Le titre est obligatoire", 'data.required' => "Data est obligatoire"]);
        $package->update($request->all());
        return response()->json(['msg' => "Le forfait à été mis à jour correctement"], 200, []);
    }

    public function trash(Package $package)
    {
        $package->delete();
        return response()->json(['msg' => "Le forfait à été mis à la corbeille correctement"], 200, []);
    }

    public function subscription()
    {
        $packages =CustomerSubscription::join('customers', 'customers_subscription.customer_id', '=', 'customers.id')
            ->join('packages', 'customers_subscription.package_id', '=', 'packages.id')
            ->join('subscriptions', 'customers_subscription.duration', '=', 'subscriptions.id')
            ->orderBy('customers_subscription.ended_at', "DESC")
            ->get();

        $forfaits = Package::all();
        $customers = Customer::where('state', 1)->get();
        $subscriptions = Subscription::all();
        return view('forfait.subscription',compact('packages','forfaits','customers','subscriptions'));
    }



    public function actionsub(Request $request, $id, $type)
    {
        if ($type == 3){
            if (CustomerSubscription::where('id_sub',$id)->delete()){
                echo 'true';
            }
            else{
                echo 'false';
            }
        }
        else{
            if (CustomerSubscription::where('id_sub' , $id)->update(['state' => $type])){
                echo 'true';
            }
            else{
                echo 'false';
            }

            die;

        }
    }


    public function subscriptionAdd(Request $request)
    {
       if ( CustomerSubscription::create($request->all())){
           echo "true";
       }else{
           echo "false";
       }
       die;
    }

    public function validesouscription(Request $request,$id)
    {
        $sub =  CustomerSubscription::join('subscriptions', 'customers_subscription.duration', '=', 'subscriptions.id')
            ->where('customers_subscription.id_sub',$id)->first();
        $today = time();
        $duration = (3600 * 24) * $sub['duration_value'];
        $endDate = $today + $duration;

        $data = [
            'state' => 1,
            'started_at' =>  date('Y-m-d', time()),
            'ended_at' => date('Y-m-d', $endDate)
        ];


       if ( CustomerSubscription::where('id_sub',$id)->update($data)){
           echo "true";
       }else{
           echo "false";
       }
       die;
    }



}
