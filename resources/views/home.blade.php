@extends('layouts.app')

@section('title-block')Галерея@endsection

@section('content')
<main>
<section class="py-5 text-center container">
    <div class="row py-lg-12">
      <div class="col-lg-12 col-md-12 mx-auto">
        <h1 class="fw-light">Галерея</h1>
        <p class="lead text-body-secondary col-lg-6 col-md-4 mx-auto">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p class="mx-auto">
            <ul class="nav nav-pills mb-4 col-md-6 mx-auto text-center d-flex justify-content-center flex-nowrap align-items-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-center" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Портреты</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-center" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Пейзаж</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-center" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Натюрморт</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                </li> -->
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <h2 class="fw-light">Портреты</h2>
                    <div class="album py-5 bg-body-tertiary">
                    <div class="container">

                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <!-- @foreach($data as $el)
                        @if($el->category == 1)
                        <div class="col">
                          <div class="card shadow-sm">
                          <img src='../public/storage/folder/{{$el->photo}}' data-toggle="modal" class="card-img-top" alt="Photo" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-body">
                              <h5 class="card-title">{{ $el->name }}</h5>
                              <p class="card-text">{{ $el->description }}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="../public/storage/folder/{{$el->photo}}" type="button" download class="btn btn-sm btn-outline-secondary">Скачать</a>
                                </div>
                                <small class="text-body-secondary">{{ $el->created_at }}</small>
                                <small class="text-body-secondary">{{ $el->author }}</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        
                        <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">{{ $el->name }}</h5>
                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <img src='../public/storage/folder/{{$el->photo}}' class="card-img-top" alt="Photo">
                                <p class="card-text">{{ $el->description }}</p>
                                <small class="text-body-secondary">{{ $el->created_at }}</small> <br>
                                  <small class="text-body-secondary">{{ $el->author }}</small>
                                </div>
                                <div class="modal-footer">
                                  <a href="../public/storage/folder/{{$el->photo}}" type="button" download class="btn btn-sm btn-outline-secondary">Скачать</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          
                        @endif
                        @endforeach -->

                        @foreach($data as $el)
                        @if($el->category == 1)
                        <div class="col">
                          <div class="card shadow-sm">
                          <img src='../public/storage/folder/{{$el->photo}}' data-toggle="modal" class="card-img-top" alt="Photo" data-bs-toggle="modal" data-bs-target="#{{$el->name}}">
                            <div class="card-body">
                              <h5 class="card-title">{{ $el->name }}</h5>
                              <p class="card-text">{{ $el->description }}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="../public/storage/folder/{{$el->photo}}" type="button" download class="btn btn-sm btn-outline-secondary">Скачать</a>
                                </div>
                                <small class="text-body-secondary">{{ $el->created_at }}</small>
                                <small class="text-body-secondary">{{ $el->author }}</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        
                        <div class="modal fade" id="{{$el->name}}" role="dialog" aria-labelledby="{{$el->name}}-Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="{{$el->name}}-Label">{{ $el->name }}</h5>
                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <img src='../public/storage/folder/{{$el->photo}}' class="card-img-top" alt="Photo">
                                <p class="card-text">{{ $el->description }}</p>
                                <small class="text-body-secondary">{{ $el->created_at }}</small> <br>
                                  <small class="text-body-secondary">{{ $el->author }}</small>
                                </div>
                                <div class="modal-footer">
                                  <a href="../public/storage/folder/{{$el->photo}}" type="button" download class="btn btn-sm btn-outline-secondary">Скачать</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          
                        @endif
                        @endforeach

                        

                      
                      </div>
                    </div>
                  </div>
                  </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <h2 class="fw-light">Пейзаж</h2>
                    <div class="album py-5 bg-body-tertiary">
                    <div class="container">

                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach($data as $el)
                        @if($el->category == 2)
                        <div class="col">
                          <div class="card shadow-sm">
                          <img src='../public/storage/folder/{{$el->photo}}' class="card-img-top" alt="Photo">
                            <div class="card-body">
                              <h5 class="card-title">{{ $el->name }}</h5>
                              <p class="card-text">{{ $el->description }}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="../public/storage/folder/{{$el->photo}}" type="button" download class="btn btn-sm btn-outline-secondary">Скачать</a>
                                </div>
                                <small class="text-body-secondary">{{ $el->created_at }}</small>
                                <small class="text-body-secondary">{{ $el->author }}</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endif
                        @endforeach
                      
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <h2 class="fw-light">Натюрморт</h2>
                    <div class="album py-5 bg-body-tertiary">
                    <div class="container">

                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach($data as $el)
                        @if($el->category == 2)
                        <div class="col">
                          <div class="card shadow-sm">
                          <img src="../public/storage/folder/{{$el->photo}}" class="card-img-top" alt="Photo">
                            <div class="card-body">
                              <h5 class="card-title">{{ $el->name }}</h5>
                              <p class="card-text">{{ $el->description }}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="../public/storage/folder/{{$el->photo}}" type="button" download class="btn btn-sm btn-outline-secondary">Скачать</a>
                                </div>
                                <small class="text-body-secondary">{{ $el->created_at }}</small>
                                <small class="text-body-secondary">{{ $el->author }}</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endif
                        @endforeach
                      
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                </div>
            </div>
        </p>
      </div>
    </div>

  </section>
  
</main>
@endsection
