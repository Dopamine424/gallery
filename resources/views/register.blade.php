
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
<form action="{{ route('register-form') }}" novalidate method="post" class="form-signin mx-auto">
  @csrf
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
      <label for="name" class="sr-only">Имя</label>
      <input type="text" name="name"  id="name" value="{{ old('name') }}" class="form-control p-3 {{$errors->has('name') ? 'is-invalid' : '' }}" placeholder="Ваше имя" autofocus="true">
      <label for="inputEmail" class="sr-only">Ваш email</label>
      <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control p-3 {{$errors->has('email') ? 'is-invalid' : '' }}" placeholder="Ваш email" autofocus="">
      <label for="inputPassword" class="sr-only">Ваш пароль</label>
      <input type="password" id="password" name="password" class="form-control p-3 {{$errors->has('password') ? 'is-invalid' : '' }}" placeholder="Ваш пароль">
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
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
          <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
      <p class="mt-2 mb-3 text-muted">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных</p>
    </form>
</main>
@endsection