@extends('layouts.app')

@section('content')
    @push('styles-pages')
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link href="{{asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/libs/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/charts/chartist-bundle/chartist.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/charts/morris-bundle/morris.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/charts/c3charts/c3.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    @endpush
    @push('scripts-pages')
        <script src="{{asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
        <!-- bootstap bundle js -->
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
        <!-- slimscroll js -->
        <script src="{{asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('assets/libs/js/main-js.js')}}"></script>
        <!-- chart chartist js -->
        <!-- sparkline js -->
        <script src="{{asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
        <!-- morris js -->
        <script src="{{asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
        <script src="{{asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script>
        <!-- chart c3 js -->
        <script src="{{asset('assets/vendor/charts/c3charts/c3.min.js')}}"></script>
        <script src="{{asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
        <script src="{{asset('assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    @endpush
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html"><i class="fas fa-hands-helping"></i> Trade Bot</a>
            </nav>
        </div>
        @include('includes.menu')

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce" style="background: #fff;">
                <div class="container-fluid dashboard-content" style="padding-bottom: 0;">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">{{$breadcrumb}}</h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0)" class="breadcrumb-link">Trade Bot Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content container-fluid p-0 m-0">
                <div class="email-inbox-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="email-title"><span class="icon"><i class="fas fa-inbox"></i></span> Чаты <span class="new-messages">(2 новых сообщения)</span> </div>
                        </div>
                    </div>
                </div>
                <div class="email-filters">
                    <div class="email-filters-left">
                        <div class="btn-group">
                            <button class="btn btn-light" type="button">Удалить</button>
                        </div>
                    </div>
                    <div class="email-filters-right"><span class="email-pagination-indicator">1-50 из 253</span>
                        <div class="btn-group email-pagination-nav">
                            <button class="btn btn-light" type="button"><i class="fas fa-angle-left"></i></button>
                            <button class="btn btn-light" type="button"><i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="email-list">

                    <div class="email-list-item email-list-item--unread">
                        <div class="email-list-actions">
                            <label class="custom-control custom-checkbox">
                                <input class="custom-control-input checkboxes" type="checkbox" value="1" id="one"><span class="custom-control-label"></span>
                            </label><a class="favorite active" href="#"></a>
                        </div>
                        <div class="email-list-detail"><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i> </span>28 Jul</span><span class="from">Penelope Thornton</span>
                            <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                        </div>
                    </div>

                    <div class="email-list-item">
                        <div class="email-list-actions">
                            <label class="custom-control custom-checkbox">
                                <input class="custom-control-input checkboxes" type="checkbox" value="2" id="two"><span class="custom-control-label"></span>
                            </label><a class="favorite" href="#"></a>
                        </div>
                        <div class="email-list-detail"><span class="date float-right"></span><span class="date float-right"><span class="icon"><i class="fas fa-paperclip"></i></span> 13 Jul</span><span class="from">Benji Harper</span>
                            <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
