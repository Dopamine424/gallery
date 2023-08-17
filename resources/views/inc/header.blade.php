<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{route('all-data')}}" class="nav-link px-2 text-secondary">Галерея</a></li>
          <li><a href="{{route('contacts')}}" class="nav-link px-2 text-white">Контакты</a></li>
        </ul>

        @guest
        <div class="text-end">
          <a type="button" href="{{route('auth')}}" class="btn btn-outline-light me-2">Вход</a>
          <a type="button" href="{{route('register')}}" class="btn btn-primary">Регистрация</a>
        </div>
        @endguest
        @auth
        <div class="text-end d-flex">
          <a type="button" href="{{route('add')}}" class="btn btn-primary me-2">Добавить</a>
          <form method="POST" action="{{route('logout')}}">
            @csrf
            <a type="button" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-danger">Выйти</a>
          </form>
        </div>
        @endauth
      </div>
    </div>
  </header>