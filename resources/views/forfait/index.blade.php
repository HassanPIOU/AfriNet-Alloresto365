@extends('layouts.app')
@section('content')
@section('title','AfriNet | Forfaits')


<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h5 class="mr-0 mr-r-5">Forfaits</h5>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Forfaits</li>
            </ol>
            <div class="d-none d-sm-inline-flex justify-center align-items-center">
                <a href="javascript: void(0);"
                    class="btn btn-outline-success mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple"
                    data-toggle="modal" data-target="#forfaitModal">Ajouter</a>
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
                        <h5>Liste des Forfaits</h5>
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                        @include('forfait.create')
                        @include('forfait.edit')
                        <!-- DataTales Example -->
                        <div class="table-responsive">
                            <table class="table  table-borderless table-striped" id="customertable" width="100%" cellspacing="0">
                                <thead style="border-bottom: 1px solid #ccc;">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Data</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="body">
                                    @foreach($packages as $package)
                                    <tr class="customerTr">
                                        <td>{{$package->title}}</td>
                                        <td style="width: 10%;">

                                            @if($package->data > 1024)
                                                {{round($package->data / 1024)}} Gigaoctets
                                            @else
                                                {{$package->data}}   Mégaoctets
                                            @endif</td>
                                        <td style="width: 10%;">
                                            <a class="update-package" data-toggle="modal" data-target="#forfaitModal-{{ $package->id }}" href="javascript:void(0)">
                                                <i class="list-icon material-icons text-info"
                                                    style="font-size: 12px">mode_edit</i>
                                            </a>
                                            <a class="trash-package" href="javascript:void(0)" action-url="{{ route('forfait.trash', $package) }}" style="padding-left: 5px;">
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
