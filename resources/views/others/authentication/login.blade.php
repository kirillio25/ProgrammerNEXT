@extends('others.others_layout.master')

@section('others_css')
    
@endsection

@section('others_content')
<div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-12 p-0">    
        <div class="login-card">
          <div>
            <div><a class="logo" href="{{ route('dashboard') }}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo2.png') }}" alt="looginpage"></a></div>
            <div class="login-main"> 
              <form class="theme-form">
                <h4 class="text-center">Войти в аккаунт</h4>
                <p class="text-center">Введите свой email и пароль для входа</p>
                <div class="form-group">
                  <label class="col-form-label">Почта</label>
                  <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Пароль</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Запомнить пароль</label>
                  </div><a class="link" href="{{ route('forget_password') }}">Забыли пароль?</a>
                  <div class="text-end mt-3">
                    <button class="btn btn-primary btn-block w-100" type="submit">Войти</button>
                  </div>
                </div>
                <!-- <div class="login-social-title">
                  <h6>Войти с                 </h6>
                </div>
                <div class="form-group">
                  <ul class="login-social">
                    <li><a href="https://www.linkedin.com" target="_blank"><i data-feather="linkedin"></i></a></li>
                    <li><a href="https://twitter.com" target="_blank"><i data-feather="twitter"></i></a></li>
                    <li><a href="https://www.facebook.com" target="_blank"><i data-feather="facebook"></i></a></li>
                    <li><a href="https://www.instagram.com" target="_blank"><i data-feather="instagram"></i></a></li>
                  </ul>
                </div>
                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{ route('sign_up') }}">Create Account</a></p> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('others_script')
    
@endsection