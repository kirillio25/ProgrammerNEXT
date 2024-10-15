@extends('layout.master')

@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Курсы</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Обучение</li>
            <li class="breadcrumb-item active">Курсы</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row learning-block">
      <div class="col-xxl-9 col-xl-8 box-col-8">
        <div class="row">
          @foreach($courses as $course)
          <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
            <div class="card">
              <div class="product-box learning-box">
                <!-- 600 на 450  -->
                <div class="product-img"><img class="img-fluid top-radius-blog" src="{{ asset('storage/' . $course->path_url) }}" alt="">
                    <a href="{{ route('learning_detailed', ['course' => $course->id]) }}"> <div class="product-hover"></div></a>
                </div>
                <div class="details-main"><a href="{{ route('learning_detailed', ['course' => $course->id]) }}">                                       
                    <div class="bottom-details"> 
                      <h6>{{ $course->title }}</h6>
                    </div></a>
                  <p>{{ $course->description }}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-xxl-3 col-xl-4 box-col-4">
        <div class="md-sidebar job-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">learning filter</a>
          <div class="md-sidebar-aside job-left-aside custom-scrollbar">
            <div class="default-according style-1 job-accordion" id="accordionoc">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="mb-0 p-0">
                        <button class="btn btn-link ps-0 ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">Фильтр</button>
                      </h5>
                    </div>
                    <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordion">
                      <div class="card-body filter-cards-view animate-chk">
                        <div class="job-filter">
                          <div class="faq-form">
                            <input class="form-control" type="text" placeholder="Поиск.."><i class="search-icon" data-feather="search"></i>
                          </div>
                        </div>
                        <div class="checkbox-animated">
                          <div class="learning-header"><span class="f-w-600">Категории</span></div>
                          <label class="d-block" for="chk-ani">
                            <input class="checkbox_animated" id="chk-ani" type="checkbox">Accounting
                          </label>
                          <label class="d-block" for="chk-ani0">
                            <input class="checkbox_animated" id="chk-ani0" type="checkbox">Design
                          </label>
                          <label class="d-block" for="chk-ani1">
                            <input class="checkbox_animated" id="chk-ani1" type="checkbox">Development
                          </label>
                          <label class="d-block" for="chk-ani2">
                            <input class="checkbox_animated" id="chk-ani2" type="checkbox">Management
                          </label>
                        </div>
                        <div class="checkbox-animated mt-0">
                          <div class="learning-header"><span class="f-w-600">Время</span></div>
                          <label class="d-block" for="chk-ani6">
                            <input class="checkbox_animated" id="chk-ani6" type="checkbox">0-50 hours
                          </label>
                          <label class="d-block" for="chk-ani7">
                            <input class="checkbox_animated" id="chk-ani7" type="checkbox">50-100 hours
                          </label>
                          <label class="d-block" for="chk-ani8">
                            <input class="checkbox_animated" id="chk-ani8" type="checkbox">100+ hours
                          </label>
                        </div>
                        <div class="checkbox-animated mt-0">
                          <div class="learning-header"><span class="f-w-600">Цена</span></div>
                          <label class="d-block" for="edo-ani">
                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">All Courses
                          </label>
                          <label class="d-block" for="edo-ani1">
                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" checked="">Paid Courses
                          </label>
                          <label class="d-block" for="edo-ani2">
                            <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">Free Courses
                          </label>
                        </div>
                        <div class="checkbox-animated mt-0">
                          <div class="learning-header"><span class="f-w-600">Статус</span></div>
                          <label class="d-block" for="chk-ani3">
                            <input class="checkbox_animated" id="chk-ani3" type="checkbox">Registration
                          </label>
                          <label class="d-block" for="chk-ani4">
                            <input class="checkbox_animated" id="chk-ani4" type="checkbox">Progress
                          </label>
                          <label class="d-block" for="chk-ani5">
                            <input class="checkbox_animated" id="chk-ani5" type="checkbox">Completed
                          </label>
                        </div>
                        <button class="btn btn-primary text-center" type="button">Приминить</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="mb-0 p-0">
                        <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon1" aria-expanded="true" aria-controls="collapseicon1">Categories</button>
                      </h5>
                    </div>
                    <div class="collapse show" id="collapseicon1" aria-labelledby="collapseicon1" data-bs-parent="#accordion">
                      <div class="categories">
                        <div class="learning-header"><span class="f-w-600">Design</span></div>
                        <ul>
                          <li><a href="javascript:void(0)">UI Design </a><span class="badge badge-primary pull-right">28</span></li>
                          <li><a href="javascript:void(0)">UX Design </a><span class="badge badge-primary pull-right">35</span></li>
                          <li><a href="javascript:void(0)">Interface Design </a><span class="badge badge-primary pull-right">17</span></li>
                          <li><a href="javascript:void(0)">User Experience </a><span class="badge badge-primary pull-right">26</span></li>
                        </ul>
                      </div>
                      <div class="categories pt-0">
                        <div class="learning-header"><span class="f-w-600">Development</span></div>
                        <ul>
                          <li><a href="javascript:void(0)">Frontend Development</a><span class="badge badge-primary pull-right">48</span></li>
                          <li><a href="javascript:void(0)">Backend Development</a><span class="badge badge-primary pull-right">19</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div> -->

                <!-- <div class="col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="mb-0 p-0">
                        <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">Upcoming Courses</button>
                      </h5>
                    </div>
                    <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-bs-parent="#accordion">
                      <div class="upcoming-course card-body">
                        <div class="d-flex">
                          <div class="flex-grow-1"><span class="f-w-600">UX Development</span>
                            <h6>Course By <a href="javascript:void(0)">Development Team</a></h6>
                            <ul class="rating">
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star-half-o font-warning"></i></li>
                            </ul>
                          </div>
                          <div>
                            <h5 class="mb-0 p-0 font-primary">18</h5><span class="d-block">Dec</span>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="flex-grow-1"><span class="f-w-600">Business Analyst</span>
                            <h6>Course By <a href="javascript:void(0)">Analyst Team.</a></h6>
                            <ul class="rating">
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star-half-o font-warning"></i></li>
                            </ul>
                          </div>
                          <div>
                            <h5 class="mb-0 p-0 font-primary">28</h5><span class="d-block">Dec</span>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="flex-grow-1"><span class="f-w-600">Web Development</span>
                            <h6>Course By <a href="javascript:void(0)">Designer</a></h6>
                            <ul class="rating">
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star font-warning"></i></li>
                              <li><i class="fa fa-star-half-o font-warning"></i></li>
                            </ul>
                          </div>
                          <div>
                            <h5 class="mb-0 p-0 font-primary">5</h5><span class="d-block">Jan</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
@endsection