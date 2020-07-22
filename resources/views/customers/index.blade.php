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
                <div class="d-none d-sm-inline-flex justify-center align-items-center">
                    <a href="javascript: void(0);"
                       class="btn btn-outline-success mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple"
                       data-toggle="modal" data-target="#customerModal">Ajouter</a>
                </div>
            </div>
            <!-- /.page-title-right -->
        </div>
        <!-- /.page-title -->
        <div class="widget-list">
            <div class="row">
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-heading clearfix">
                            <h5>Liste des Clients</h5>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body clearfix">
                        @include('customers._add')
                        <!-- DataTales Example -->
                            <div class="table-responsive">
                                <table class="table  table-borderless table-striped" id="customertable" width="100%" cellspacing="0">
                                    <thead style="border-bottom: 1px solid #ccc">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Pays</th>
                                        <th>type</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="body">
                                    @foreach($customers  as $customer)
                                        <tr class="customerTr">
                                            <td>{{$customer->last_name}}</td>
                                            <td>{{$customer->first_name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->country}}</td>
                                            <td>
                                                @if($customer->type === 1)
                                                    <b class="badge badge-primary">Client</b>
                                                @elseif($customer->type === 2)
                                                    <b class="badge badge-primary">Business</b>
                                                @endif
                                            </td>
                                            <td>  @if($customer->state === 1)
                                                    <b class="badge badge-success">Actif</b>
                                                @elseif($customer->state === 2)
                                                    <b class="badge badge-danger">Inactif</b>
                                                @endif</td>
                                            <td style="text-align: center !important;">
                                                <a href="/customer-edit-{{$customer->id}}">
                                                    <i class="list-icon material-icons text-info" style="font-size: 12px"onclick="" >mode_edit</i>
                                                </a>
                                                @if($customer->state === 1)
                                                    <a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionCustomer('{{$customer->id}}',2)">
                                                        <i class="list-icon material-icons text-danger" style="font-size: 12px">lock_outline</i>
                                                    </a>
                                                @elseif($customer->state === 2)
                                                    <a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionCustomer('{{$customer->id}}',1)">
                                                        <i class="list-icon material-icons text-success" style="font-size: 12px">lock_open</i>
                                                    </a>
                                                @endif
                                                <a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionCustomer('{{$customer->id}}',3)">
                                                    <i class="list-icon material-icons text-danger" style="font-size: 12px">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $customers->links() }}
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
