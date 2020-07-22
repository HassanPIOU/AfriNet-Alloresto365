@extends('layouts.app')


@section('content')
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">Dashboard</h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

            </div>
            <!-- /.page-title-right -->
        </div>
        <!-- /.page-title -->
        <!-- =================================== -->
        <!-- Different data widgets ============ -->
        <!-- =================================== -->
        <div class="widget-list">
            <!-- Counters -->
            <div class="row">
                <!-- Counter: Sales -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-primary text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6>Client Total </h6>
                                <h3 class="h1"><span class="counter">{{$total_customers}}</span></h3>
                            </div>
                            <!-- /.widget-counter -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <!-- Counter: Subscriptions -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-color-scheme text-inverse">
                        <div class="widget-body clearfix">
                            <div class="widget-counter">
                                <h6>Clients abonnés </h6>
                                <h3 class="h1"><span class="counter">{{$total_customers_abonne}}</span></h3>
                            </div>
                            <!-- /.widget-counter -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <!-- Counter: Users -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <div class="widget-counter">
                                <h6>Tickets en attentes</h6>
                                <h3 class="h1"><span class="counter">{{$ticket_en_attente}}</span></h3>
                            </div>
                            <!-- /.widget-counter -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>


                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <div class="widget-counter">
                                <h6>Tickets affectés </h6>
                                <h3 class="h1"><span class="counter">{{$ticket_affecte}}</span></h3>
                            </div>
                            <!-- /.widget-counter -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>

                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <div class="widget-counter">
                                <h6>Tickets en cours de traitement</h6>
                                <h3 class="h1"><span class="counter">{{$ticket_en_traitement}}</span></h3>
                            </div>
                            <!-- /.widget-counter -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>


                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <div class="widget-counter">
                                <h6>Tickets  terminés </h6>
                                <h3 class="h1"><span class="counter">{{$ticket_termine}}</span></h3>
                            </div>
                            <!-- /.widget-counter -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>


                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <div class="widget-counter">
                                <h6>Tickets évalués </h6>
                                <h3 class="h1"><span class="counter">{{$ticket_evalue}}</span></h3>
                            </div>
                            <!-- /.widget-counter -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <!-- Counter: Pageviews -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <div class="widget-counter">
                                <h6>Tickets archivés</h6>
                                <h3 class="h1"><span class="counter">{{$ticket_archive}}</span></h3>
                            </div>
                            <!-- /.widget-counter -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.row -->
            <!-- Chart Group 1 -->
            <div class="row">
                <!-- Chart: Registration History -->
                <div class="col-md-12 widget-holder widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-heading clearfix">
                            <h5>L’évolution des chiffres d’affaires</h5>
                            <!-- /.widget-actions -->
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body clearfix">
                            <textarea  id="dataMorris" cols="30"  style="display: none;" rows="4">{{json_encode($data)}}</textarea>
                            <textarea  id="dataMorrisClients" cols="30" style="display: none;"  rows="4">{{json_encode($dataClients)}}</textarea>
                            <!-- /.row -->
                            <div id="extraAreaMorris" style="height: 280px"></div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <!-- Charts: Sales Statistics -->
                <!-- /.widget-holder -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.widget-list -->
    </main>
@endsection
