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
                                                data-bs-target="#collapse{{ $submodule->id }}"
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $submodule->id }}">{{ $submodule->title }}</button>
                                        </h5>
                                    </div>
                                    <div class="collapse {{ $index === 0 ? 'show' : '' }}" id="collapse{{ $submodule->id }}"
                                        aria-labelledby="headingOne" data-bs-parent="#accordion1">
                                        <div class="file-content">
                                            <div class="card">
                                                <div class="card-body file-manager">
                                                    <h5>Материалы</h5>
                                                    <ul class="quick-file d-flex flex-row">
                                                        @foreach ($materials as $index => $material)
                                                            @if ($material->submodule_id == $submodule->id)
                                                                <li>
                                                                    <div class="quick-box"><i
                                                                            class="fa fa-youtube-play font-danger"></i>
                                                                    </div>
                                                                    <h6>Видео {{ $index + 1 }}</h6>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                        <!-- Другие элементы -->
                                                    </ul>

                                                    <h5 class="mt-4">Домашняя работа</h5>
                                                    <ul class="folder">
                                                        <ul class="quick-file d-flex flex-row">
                                                            @foreach ($homeWorks as $homeWork)
                                                                @if ($homeWork->submodule_id == $submodule->id)
                                                                    <a
                                                                        href="{{ route('homework.download', ['id' => $homeWork->id]) }}">
                                                                        <li>
                                                                            <div class="quick-box"><i
                                                                                    class="fa fa-file-archive-o font-secondary"></i>
                                                                            </div>
                                                                            <h6>Файл</h6>
                                                                        </li>
                                                                    </a>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </ul>
                                                    <!-- Другие элементы -->
                                                </div>
                                            </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <!-- Кнопка загрузки работы -->
                                            <div class="btn btn-outline-primary ms-2"
                                                onclick="document.getElementById('file').click();">
                                                <i data-feather="upload"></i> Загрузить работу
                                            </div>

                                            <!-- Скрытая форма для загрузки файла -->
                                            <form id="uploadForm" action="{{ route('upload_homework') }}" method="POST"
                                                enctype="multipart/form-data" style="display: none;">
                                                @csrf
                                                <input type="file" name="file" id="file" class="form-control"
                                                    required style="display: none;" onchange="this.form.submit();">
                                                <input type="hidden" name="submodule_id" value="{{ $submodule->id }}">
                                                <!-- Укажите ID подмодуля -->
                                            </form>
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
