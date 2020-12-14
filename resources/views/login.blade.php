@extends('layouts.app')

@section('title-block')Авторизация@endsection

@section('content')
<section class="authorization" style="background-image: url('/public/image/auth-bg.jpg');">
  <div class="authorization__inner">
    <div class="container">
      <div class="row authorization__wrapper">
        <div class="authorization__form">
          <div class="authorization__title">Авторизация</div>
          <form name="auth" action="/home">
            <div class="form-group">
              <label for="login">Логин</label>
              <input type="login" class="form-control" id="login" placeholder="Введите Логин">
            </div>
            <div class="form-group">
              <label for="password">Пороль</label>
              <input type="password" class="form-control" id="password" placeholder="Введите Пороль">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection