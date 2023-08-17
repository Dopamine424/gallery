
@extends('layouts.app')

@section('title-block')Логин@endsection

@section('content')

<!-- @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif -->
<main class="text-center main-auth mx-auto">
<form action="{{ route('auth-form') }}" method="post" class="form-signin mx-auto">
  @csrf
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Вход</h1>
      <label for="inputEmail" class="sr-only">Ваш email</label>
      <input type="email" name="email" id="email" class="form-control p-3 input-email {{$errors->has('email') ? 'is-invalid' : '' }}" placeholder="Ваш email" autofocus="true">
      <label for="inputPassword" class="sr-only">Ваш пароль</label>
      <input type="password" id="password" name="password" class="form-control p-3 {{$errors->has('password') ? 'is-invalid' : '' }}" placeholder="Ваш пароль">
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" id="remember-me" name="remember-me"> Запомнить меня
        </label>
      </div>
      
      <button class="btn btn-lg btn-primary btn-block btnn" type="submit">Войти</button>
      <a href="{{route('password.request')}}" class="link-primary">Забыл пароль</a>
    </form>
</main>
@endsection