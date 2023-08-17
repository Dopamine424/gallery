
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
<form action="{{ route('password.request-form') }}" method="post" class="form-signin mx-auto">
  @csrf
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Сброс пароля</h1>
      <label for="inputEmail" class="sr-only">Ваш email</label>
      <input type="email" name="email" id="email" class="input-forgot form-control p-3 input-email {{$errors->has('email') ? 'is-invalid' : '' }}" placeholder="Ваш email" autofocus="true">
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      <button class="btn mt-3 btn-lg btn-primary btn-block btnn" type="submit">Сбросить пароль</button>
    </form>
</main>
@endsection