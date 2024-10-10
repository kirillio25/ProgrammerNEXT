@extends('layout.master')

@section('main_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Accordion</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Ui Kits</li>
                    <li class="breadcrumb-item active">Accordion</li>
                </ol>
            </div>
        </div>
    </div>
</div>
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
                        <div class="card">
                            <div class="card-header bg-primary" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link ps-0 text-white" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">1. Python intro</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="collapseFour" aria-labelledby="headingOne"
                                data-bs-parent="#accordion1">
                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">2. Основы</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseFive" aria-labelledby="headingFive"
                                data-bs-parent="#accordion1">
                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link ps-0 collapsed text-white" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">3. Условия</button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseSix" aria-labelledby="headingSix"
                                data-bs-parent="#accordion1">
                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.</div>
                            </div>
                        </div>
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
@endsection