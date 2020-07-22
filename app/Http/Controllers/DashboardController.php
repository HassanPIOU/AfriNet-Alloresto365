<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerSubscription;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    public function index()
    {

$total_customers = Customer::all()->count();
$total_customers_abonne = CustomerSubscription::join('customers', 'customers_subscription.customer_id', '=', 'customers.id')->count();

$ticket_en_attente = Ticket::where('state', 1)->count();
$ticket_affecte = Ticket::where('state', 2)->count();
$ticket_en_traitement = Ticket::where('state', 3)->count();
$ticket_termine = Ticket::where('state', 4)->count();
$ticket_evalue = Ticket::where('state', 5)->count();
$ticket_archive = Ticket::where('state', 6)->count();

$sub= CustomerSubscription::all();


$year = date('Y');

$littleyear = $year - 5;

$date = [];

  for ($i = 0; $i < 5; $i++){
      $k = $i + 1;
      array_push($date,  $littleyear+ $k);
  }

$data = [];
 $dataClients = [];

        foreach ($date as $dat){
            $c = CustomerSubscription::whereYear('created_at', '=', $dat)->count();

            $d = Customer::whereYear('created_at', '=', $dat)->count();
            $da = [
                'date' => $dat,
                'nbre' => $c
            ];

            $dar = [
                'date' => $dat,
                'nbre' => $d
            ];
            array_push($data, $da);
            array_push($dataClients, $dar);
        }

        return view('dashboard',compact(
            'total_customers',
            'total_customers_abonne',
               'ticket_en_attente',
               'ticket_affecte',
               'ticket_en_traitement',
               'ticket_termine',
               'ticket_evalue',
               'ticket_archive',
               'data',
              'dataClients'
            ));
    }
}
