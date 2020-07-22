@extends('layouts.app')
@section('content')
@section('title','AfriNet | Clients')

<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h5 class="mr-0 mr-r-5">Clients</h5>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Clients</li>
            </ol>

        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <div class="widget-list">
        <div class="row">
            <div class="col-md-12 widget-holder">
                <div class="widget-bg">
                    <div class="widget-heading clearfix">
                        <h5>Modifier  <em>{{$customer->last_name}} {{$customer->first_name}}</em></h5>
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                    <div class="modal-body">
                                        <div>
                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <label for="">Type de client</label>
                                                    <select name="" id="type"  onchange="typeToggle(this.value)" class="form-control">
                                                        <option  selected disabled>Choisir le type de client</option>
                                                        <option value="1" @if($customer->type ===1 ) selected @endif>Client</option>
                                                        <option value="2" @if($customer->type ===2 ) selected @endif>Compagnie</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mb-2" style="display: none;">
                                                    <label for="">Nom de la compagnie</label>
                                                    <input type="text"  value="{{$customer->company_name}}" class="form-control" id="company_name">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-2">
                                                    <label for="">Nom</label>
                                                    <input type="text" value="{{$customer->first_name}}" class="form-control" id="firstname">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="">Prénom</label>
                                                    <input type="text" class="form-control" value="{{$customer->last_name}}"  id="lastname">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-2">
                                                    <label for="">Email</label>
                                                    <input type="text" value="{{$customer->email}}" class="form-control" id="email">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="">Téléphone</label>
                                                    <input type="text" value="{{$customer->phone_number}}" class="form-control" id="tel">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-2">
                                                    <label for="">Adresse</label>
                                                    <input type="text" value="{{$customer->addresse}}" class="form-control" id="address">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="">Ville</label>
                                                    <input type="text" value="{{$customer->city}}" class="form-control" id="city">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-2">
                                                    <label for="">Pays</label>
                                                    <input type="text" value="{{$customer->country}}" class="form-control" id="country">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="">Mot de passe</label>
                                                    <input type="password" value="{{$customer->password}}" class="form-control" id="password">
                                                </div>
                                            </div>
                                            <input type="hidden" value="{{$customer->id}}" id="customerId">
                                            <button class="btn btn-rounded btn-lg btn-success ripple" id="addcustomers" onclick="addCustomer(this)" >Modifier</button>
                                        </div>
                                    </div>

                    </div>

                </div>
                <!-- /.widget-body -->
            </div>
            <!-- /.widget-bg -->
        </div>
        <!-- /.widget-holder -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.widget-list -->
</main>
@endsection
