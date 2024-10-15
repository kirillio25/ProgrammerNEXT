@extends('layout.master')

@section('main_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Подмодуль</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Ui Kits</li>
                    <li class="breadcrumb-item active">Подмодуль</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@dump($submodules)
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-4 col-xl-5 box-col-30">
            <div class="card">
                <div class="card-header pb-0">
                    <h4>Основы Python 1</h4>
                    <!-- <span>Add <code>.bg-*</code> class to add background color withcard-header.</span> -->
                </div>
                <div class="card-body">
                    <div class="bar-chart-widget">
                        <div id="chart-widget5"> </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-xl-7 box-col-7">
            <div class="card">
                <!-- <div class="card-header pb-0">
                    <h4>Color Accordion</h4><span>Add <code>.bg-*</code> class to add background color with
                        card-header.</span>
                </div> -->
                <div class="card-body">
                    <div class="default-according" id="accordion1">
                        @foreach ($submodules as $index => $submodule)
                        <div class="card">
                            <div class="card-header bg-primary" id="heading{{ $submodule->id }}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $submodule->id }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $submodule->id }}">{{ $submodule->title }}</button>
                                </h5>
                            </div>
                            <div class="collapse {{ $index === 0 ? 'show' : '' }}" id="collapse{{ $submodule->id }}" aria-labelledby="headingOne"
                                data-bs-parent="#accordion1">
                                <div class="file-content">
                                    <div class="card">
                                        <div class="card-body file-manager">
                                            <h5>Материалы</h5>
                                            <ul class="quick-file d-flex flex-row">
                                                <li>
                                                    <div class="quick-box"><i class="fa fa-youtube-play font-danger"></i></div>
                                                    <h6>Videos</h6>
                                                </li>
                                                <!-- Другие элементы -->
                                            </ul>
                                            <h5 class="mt-4">Домашняя работа</h5>
                                            <ul class="folder">
                                                <li class="folder-box">
                                                    <div class="d-block"><i class="f-44 fa fa-file-archive-o txt-warning"></i><i
                                                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                                                        <div class="mt-3">
                                                            <h6>Tivo admin</h6>
                                                            <p>20 file<span class="pull-right"> <i class="fa fa-clock-o"> </i> 2 Hour ago</span></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                    
                                            <!-- Другие элементы -->
                                        </div>
                                    </div>
                                    <div class="btn btn-outline-primary ms-2">
                                        <i data-feather="upload"> </i>Загрузить работу
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/chart-widget.js') }}"></script>

<!-- Видео -->
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon-clipart.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
@endsection