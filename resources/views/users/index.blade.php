@extends('layouts.app')
@section('content')
@section('title','AfriNet | Administrateur')

<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h5 class="mr-0 mr-r-5">Administration</h5>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Administration</li>
            </ol>
            <div class="d-none d-sm-inline-flex justify-center align-items-center">
                <a href="javascript: void(0);"
                    class="btn btn-outline-success mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple"
                    data-toggle="modal" data-target="#useraddModal">Ajouter</a>
            </div>
        </div>
        <!-- /.page-title-right -->
    </div>
    @include('users._add')
    @include('users.edit')
    <!-- /.page-title -->
    <div class="widget-list">
        <div class="row">
            <div class="col-md-12 widget-holder">
                <div class="widget-bg">
                    <div class="widget-heading clearfix">
                        <h5>Liste des Utilisateurs</h5>
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                        <!-- DataTales Example -->
                        <div class="table-responsive">
                            <table class="table  table-borderless table-striped" id="usertable" width="100%" cellspacing="0">
                                <thead style="border-bottom: 1px solid #ccc">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="body">
                                    @foreach($users as $user)
                                    <tr >
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td> @if($user->state === 1)
                                            <b class="badge badge-success">Actif</b>
                                            @elseif($user->state === 2)
                                            <b class="badge badge-danger">Inactif</b>
                                            @endif</td>
                                        <td style="text-align: center !important;">
                                            <a href="javascript:void(0)" onclick="editUsers('{{$user->last_name}}','{{$user->first_name}}','{{$user->email}}','{{$user->phone_number}}','{{$user->id}}',)"><i class="text-info fa fa-edit"
                                                    style="font-size: 12px !important;"></i></a>
                                            @if($user->state === 1)
                                            <a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionUser('{{$user->id}}',2)"><i
                                                    class="text-danger fa fa-lock" style="font-size: 12px !important;"></i></a>
                                            @elseif($user->state === 2)
                                            <a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionUser('{{$user->id}}',1)">
                                                <i class="text-success fa fa-unlock" style="font-size: 12px !important;"></i></a>
                                            @endif
                                            <a href="javascript:void(0)" style="padding-left: 5px;" onclick="actionUser('{{$user->id}}',3)"><i
                                                    class="text-danger fa fa-trash" style="font-size: 12px !important;"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $users->links() }}
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
