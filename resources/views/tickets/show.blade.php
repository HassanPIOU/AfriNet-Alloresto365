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
                <li class="breadcrumb-item active">Ticket</li>
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
                        <h5>{{ $ticket->title }}</h5>
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix" id="messagebox">
                        <!-- DataTales Example -->
                        <div class="row">
                            <div class="col-md-12">
                                    @foreach ($ticket->messages as $message)
                                        @if(empty($message->user_id))
                                        <div class="media col-lg-8">
                                            <div class="mr-3">
                                                <figure class="user--online thumb-xs">
                                                    <img src="/assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                                </figure>
                                            </div>
                                            <div class="media-body ">
                                                <p>{{ $message->content }}</p>
                                            </div>
                                        </div>
                                        @endif
                                        @if(!empty($message->user_id))
                                        <div class="media  col-lg-8   pull-right" style="text-align: right; margin-bottom: 50px;">
                                            <div class="media-body" style="padding-top: 10px; padding-right: 20px;">
                                                <p>{{ $message->content }}</p>
                                            </div>
                                            <div class="mr-3">
                                                <figure class="user--online thumb-xs">
                                                    <img src="/assets/demo/users/user2.jpg" class="rounded-circle" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.widget-body -->
            </div>
            <!-- /.widget-bg -->
        </div>
        <div class="row">
            <div class="col-md-12 widget-holder">
                <div class="widget-bg">
                    <div class="widget-heading clearfix">
                        <h5>Envoyer un message</h5>
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                        <!-- DataTales Example -->
                        <form id="anserTicketForm" action="{{ route('tickets.show', $ticket) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="content">Votre Message</label>
                                    <textarea name="content" id="content" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success">Envoyer</button>
                                </div>
                            </div>
                        </form>
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
