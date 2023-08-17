
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
<form action="{{ route('add-form') }}" method="post" class="form-signin mx-auto" enctype="multipart/form-data">
  @csrf
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Добавить изображение</h1>
      <label for="name" class="sr-only">Название</label>
      <input type="text" name="name" id="name" class="form-control p-3" placeholder="Название" autofocus="true">

      <label for="description" class="sr-only">Описание</label>
      <input type="text" name="description" id="description" class="form-control p-3 inputDesc" placeholder="Описание">
      <select class="custom-select w-100 p-3 mt-3" id="category" name="category">
        <option selected value="1">Портрет</option>
        <option value="2">Пейзаж</option>
        <option value="3">Натюрморт</option>
      </select>
      <label for="formFile" class="form-label sr-only" >Default file input example</label>
      <input class="form-control mt-3" type="file" id="photo" name="photo">
     
      <button class="btn mt-3 btn-lg btn-primary btn-block btnn" type="submit">Добавить</button>
    </form>
</main>
@endsection