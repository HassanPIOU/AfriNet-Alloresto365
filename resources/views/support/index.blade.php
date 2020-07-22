@extends('layouts.app')
@section('content')
@section('title','AfriNet | Support')

<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h5 class="mr-0 mr-r-5">Support Client</h5>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Supports</li>
            </ol>
            <div class="d-none d-sm-inline-flex justify-center align-items-center">
                <a href="javascript: void(0);"
                   class="btn btn-outline-success mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple"
                   data-toggle="modal" data-target="#AddTicketModal"
                >Ajouter un nouveau ticket</a>
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
                        <h5>Liste des Tickets</h5>
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix" id="ticketpanel">
                    @include('support.ticket')
                    @include('support._options')
                        @if($tickets->count() == 0)
                          <h4 class="text-center">Liste vide</h4>
                          <p class="text-center">La liste des tickets est vide !</p>
                       @elseif(!empty($tickets))
                            <div class="table-responsive">
                                <table class="table  table-borderless table-striped" id="tickettable" width="100%" cellspacing="0">
                                    <thead style="border-bottom: 1px solid #ccc">
                                    <tr>
                                        <th>Sujet</th>
                                        <th>Type</th>
                                        <th>Messages</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="body">
                                    @foreach($tickets  as $ticket)
                                        <tr>
                                            <td>{{ $ticket->title }}</td>
                                            @if ($ticket->type === 'request')
                                                <td><b class="badge badge-info">Requête</b></td>
                                            @else
                                                <td><b class="badge badge-info">Plainte</b></td>
                                            @endif
                                            <td>{{ $ticket->messages->count() }}</td>
                                            <td>
                                                @if($ticket->state === 1)
                                                    <b class="badge badge-info">En attente</b>
                                                @elseif($ticket->state === 2 )
                                                    <b class="badge badge-gray">Affecté</b>
                                                @elseif($ticket->state === 3 )
                                                    <b class="badge badge-gray-dark">En cours de traitement</b>
                                                @elseif($ticket->state === 4 )
                                                    <b class="badge badge-success">Terminé</b>
                                                @elseif($ticket->state === 5 )
                                                    <b class="badge badge-secondary">Evalué</b>
                                                @elseif($ticket->state === 6 )
                                                    <b class="badge badge-dark">Archivé</b>
                                                @endif

                                            </td>
                                            <td style="width: 10%;">
                                                <a href="#"   onclick="setOptionTicket('{{$ticket->id}}')">
                                                    <i class="list-icon material-icons text-success" style="font-size: 14px">check</i>
                                                </a>
                                                <a href="{{ route('tickets.show', $ticket) }}" style="padding-left: 5px;">
                                                    <i class="list-icon material-icons text-info" style="font-size: 14px">visibility</i>
                                                </a>
                                                <a class="trash-ticket" action-url="{{ route('tickets.trash', $ticket) }}" href="javascript:void(0)" style="padding-left: 5px;">
                                                    <i class="list-icon material-icons text-danger" style="font-size: 14px">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $tickets->links() }}
                       @endif


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
<script src="{{ asset('assets/pages/tickets.js') }}"></script>
@endsection
