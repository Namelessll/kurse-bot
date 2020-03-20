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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
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
        </div>
    </div>
@endsection
