{{-- Extends layout --}}
@extends('layout.default')

@push('css')
	<link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
@endpush

{{-- Content --}}
@section('content')
<!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-3  mb-lg-5   align-items-start">
            <a href="javascript:void(0);" class="btn btn-danger">+ New Doctor</a>
            <div class="input-group search-area ml-auto d-inline-flex">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="flaticon-381-controls-3 mr-2"></i> Filter
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="#">A To Z List</a>
                    <a class="dropdown-item" href="#">Z To A List</a>
                </div>
            </div>
            <div class="dropdown ml-3 d-inline-block">
                <div class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                    Newest
                </div>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="#">Newest</a>
                    <a class="dropdown-item" href="#">Old</a>
                </div>
            </div>
            <a href="javascript:void(0);" class="btn btn-outline-primary ml-3"><i class="flaticon-381-menu-1 mr-0"></i></a>
            <a href="javascript:void(0);" class="btn btn-light ml-3"><i class="flaticon-381-pad mr-0"></i></a>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div id="accordion-one" class="accordion doctor-list ">
                @foreach ($data as $dt)
                    <div class="accordion__item">
                        <div class="accordion__header rounded-lg" data-toggle="collapse" data-target="#default_collapseOne">
                            <span class="accordion__header-alphabet">A</span>
                            <span class="accordion__header-line flex-grow-1"></span>
                            <span class="accordion__header--text">5 Doctors</span>
                            <span class="accordion__header--indicator style_two"></span>
                        </div>
                        <div id="default_collapseOne" class="collapse accordion__body show" data-parent="#accordion-one">
                                <div class="widget-media best-doctor pt-4">
                                    <div class="timeline row">
                                        <div class="col-lg-6">
                                            <div class="timeline-panel bg-white p-4 mb-4">
                                                <div class="media mr-4">
                                                    <img alt="image" width="90" src="{{ asset('images/avatar/1.jpg')}}">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="mb-2">{{ $dt->nama_lengkap }}</h4>
                                                    <p class="mb-2 text-primary">{{ $dt->jenis }}</p>
                                                    <div class="star-review">
                                                        <i class="fa fa-star text-orange"></i>
                                                        <i class="fa fa-star text-orange"></i>
                                                        <i class="fa fa-star text-orange"></i>
                                                        <i class="fa fa-star text-gray"></i>
                                                        <i class="fa fa-star text-gray"></i>
                                                        <span class="ml-3">451 reviews</span>
                                                    </div>
                                                </div>
                                                <div class="social-media">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded fa fa-instagram btn-sm"></a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded fa fa-twitter btn-sm"></a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded fa fa-facebook btn-sm"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
	<script src="{{ asset('vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/deznav-init.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<!-- Apex Chart -->
	<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
    <!-- Chart piety plugin files -->
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Chartist -->
    <script src="{{ asset('vendor/chartist/js/chartist.min.js') }}"></script>


	<!-- Dashboard 1 -->
	<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
@endpush
