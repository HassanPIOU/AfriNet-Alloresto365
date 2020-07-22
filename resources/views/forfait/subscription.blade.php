@extends('layouts.app')
@section('content')
@section('title','AfriNet | Souscription')


<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h5 class="mr-0 mr-r-5">Souscription</h5>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Souscription</li>
            </ol>
            <div class="d-none d-sm-inline-flex justify-center align-items-center">
                <a href="javascript: void(0);"
                   class="btn btn-outline-success mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple"
                   data-toggle="modal" data-target="#sousModal">Souscrire</a>
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
                        <h5>Liste des Souscriptions</h5>
                    </div>

                @include('forfait._addSus')
                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                    <!-- DataTales Example -->
                        <div class="table-responsive">
                            <table class="table  table-borderless table-striped table-responsive" id="subscriptiontable" width="100%" cellspacing="0">
                                <thead style="border-bottom: 1px solid #ccc">
                                <tr>
                                    <th>Clients</th>
                                    <th>Data</th>
                                    <th>Durée</th>
                                    <th>Date de début</th>
                                    <th>Date d'expiration</th>
                                    <th style="width: 10%;">Action</th>
                                </tr>
                                </thead>
                                <tbody id="body">
                                @foreach($packages as $package)
                                    <tr>
                                        <td>{{$package->first_name}} {{$package->last_name}}</td>
                                        <td style="width: 10%;">

                                            @if($package->data > 1024)
                                                {{round($package->data / 1024)}} Gigaoctets
                                            @else
                                                {{$package->data}}   Mégaoctets
                                            @endif</td>

                                        <td>
                                                {{round($package->duration_value / 30)}} Mois
                                        </td>

                                        <td>
                                            @if($package->started_at == null)

                                           @else
                                                {{date('d M, Y', strtotime($package->started_at))}}
                                            @endif

                                        </td>
                                        <td>

                                            @if($package->ended_at == null)

                                            @else
                                                {{date('d M, Y', strtotime($package->ended_at))}}
                                            @endif
                              </td>

                                        <td style="text-align: center !important;">
                                            @if(empty($package->ended_at))
                                            <a href="javascript:void(0)" onclick="startSub('{{$package->id_sub}}')">
                                                <i class="list-icon material-icons text-success"  style="font-size: 12px">play_arrow</i>
                                            </a>
                                            @endif

                                            {{--@if($package->state == 1)--}}
                                                {{--<a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionSubscription('{{$package->id_sub}}',2)">--}}
                                                    {{--<i class="list-icon material-icons text-danger" style="font-size: 12px">lock_outline</i>--}}
                                                {{--</a>--}}
                                            {{--@elseif($package->state == 2)--}}
                                                {{--<a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionSubscription('{{$package->id_sub}}',1)">--}}
                                                    {{--<i class="list-icon material-icons text-success" style="font-size: 12px">lock_open</i>--}}
                                                {{--</a>--}}
                                            {{--@endif--}}

                                            <a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionSubscription('{{$package->id_sub}}',3)">
                                                <i class="list-icon material-icons text-danger" style="font-size: 12px">delete_forever</i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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

@section('scripts')
    <script src="{{ asset('assets/pages/forfaits.js') }}"></script>
@endsection
