@extends('layout.master')
<style>
  .like-button {
      display: flex;
      align-items: center;
  }
  .like-button.liked {
      color: #007bff; /* Цвет для "Liked" состояния */
  }
</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Курс - Python</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Обучение</li>
            <li class="breadcrumb-item active">Описание</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  @dump($course)
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row learning-block">
      <div class="col-xxl-9 col-xl-8 box-col-8">                        
        <div class="blog-single">
          <div class="blog-box blog-details">
            <div class="card"><img class="img-fluid w-100" src="{{ asset('storage/' . $course->path_url) }}" alt="blog-main">
              <div class="card-body">
                <div class="blog-details">
                  <ul class="blog-social">
                    {{-- <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li> --}}
                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                  </ul>
                  <h4>
                    {{ $course->title }}
                  </h4>
                  <div class="single-blog-content-top">
                    {{ $course->description }}
                    </div>
                </div>
              </div>
              <div class="card-body">
                  <a href="{{ route('learning_course_modules', ['course' => $course->id]) }}" class="btn btn-primary text-center" 
                  type="button">Изучать</a>
              </div>
            </div>
          </div>
          <div class="card comment-box">
            <div class="card-body">
              <h4>Комментарии</h4>
              <ul>
                @foreach ($comments as $comment)
                  @if ($comment->parent_id === null)
                    <li>
                      <div class="d-md-flex"><img class="align-self-center" src="{{ asset('assets/images/blog/comment.jpg') }}" alt="Generic placeholder image">
                        <div class="flex-grow-1">
                          <div class="row">
                            <div class="col-md-4 xl-100 box-col-12"><a href="{{ route('user_profile') }}">
                                <h6 class="mt-0">{{ $comment->user->name }}</h6></a></div>
                            {{-- <div class="col-md-8 xl-100 box-col-12">
                              <ul class="comment-social learning-comment">
                                <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                              </ul>
                            </div> --}}
                          </div>
                          <p>{{ $comment->content }}</p>

                          <div class="container mt-1 d-flex justify-content-end align-items-center">
                            <button id="likeButton" class="btn btn-light like-button me-2" onclick="toggleLike()">
                                <i id="likeIcon" class="far fa-thumbs-up"></i>
                                <span id="likeText"></span>
                                <span id="likeCount" class="ms-2">0</span> <!-- Элемент для отображения количества лайков -->

                            </button>
                        </div>
                        

                        </div>
                        
                      </div>
                    </li>

                    

                    <li>
                      <ul>
                        @foreach ($comments as $reply)
                          @if ($reply->parent_id === $comment->id)
                            <li>
                              <div class="d-md-flex"><img class="align-self-center" src="{{ asset('assets/images/blog/9.jpg') }}" alt="Generic placeholder image">
                                <div class="flex-grow-1">
                                  <div class="row">
                                    <div class="col-xl-12"><a href="{{ route('user_profile') }}">
                                        <h6 class="mt-0">{{ $comment->user->name }}</h6></a></div>
                                  </div>
                                  <p>{{ $comment->content }}</p>
                                  <div class="container mt-1 d-flex justify-content-end align-items-center">
                                    <button id="likeButton" class="btn btn-light like-button me-2" onclick="toggleLike()">
                                        <i id="likeIcon" class="far fa-thumbs-up"></i>
                                        <span id="likeText"></span>
                                        <span id="likeCount" class="ms-2">0</span> <!-- Элемент для отображения количества лайков -->
        
                                    </button>
                                </div>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-4 box-col-30">
        <div class="md-sidebar job-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">learning filter</a>
          <div class="md-sidebar-aside job-left-aside custom-scrollbar custom-scrollbar">
            <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="mb-0 p-0">
                        <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">Фильтр</button>
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
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  



<script>
  function toggleLike() {
      const button = document.getElementById('likeButton');
      const icon = document.getElementById('likeIcon');
      const text = document.getElementById('likeText');

      // Проверка, содержит ли кнопка класс "liked"
      if (button.classList.contains('liked')) {
          button.classList.remove('liked');
          icon.classList.replace('fas', 'far'); // Изменение иконки
      } else {
          button.classList.add('liked');
          icon.classList.replace('far', 'fas'); // Изменение иконки
      }
  }
</script>

@endsection