@extends('layout.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Модули - Python</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Курс</li>
                        <li class="breadcrumb-item active"> Python</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @dump($modules)
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="my-gallery row gallery-with-description" itemscope="">
                            @foreach ($modules as $module)
                                <div class="col-xl-3 col-sm-6 xl-33 box-col-33"><a href="{{ route('learning_course_module_submodules', ['module' => $module->id]) }}">
                                        <img src="{{ asset('storage/' . $module->path_url) }}" itemprop="thumbnail"
                                            alt="Image description">
                                        <div class="caption">
                                            <h4>{{ $module->title }}</h4>
                                            <p class="mb-0">{{ $module->description }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                        <!--
                    Background of PhotoSwipe.
                    It's a separate element, as animating opacity is faster than rgba().
                    -->
                        <div class="pswp__bg"></div>
                        <!-- Slides wrapper with overflow:hidden.-->
                        <div class="pswp__scroll-wrap">
                            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                            <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>
                            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                            <div class="pswp__ui pswp__ui--hidden">
                                <div class="pswp__top-bar">
                                    <!-- Controls are self-explanatory. Order can be changed.-->
                                    <div class="pswp__counter"></div>
                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class="pswp__button pswp__button--share" title="Share"></button>
                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                                    <!-- element will get class pswp__preloader--active when preloader is running-->
                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                    <div class="pswp__share-tooltip"></div>
                                </div>
                                <button class="pswp__button pswp__button--arrow--left"
                                    title="Previous (arrow left)"></button>
                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
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
    <!-- <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
        <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
        <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script> -->
@endsection
