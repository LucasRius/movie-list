{{-- HEADER AND NAV --}}
@extends('site.layouts.head')
@section('title', 'Home')

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Movie List - 
                @if(date('H') >=0 && date('H')<=12)
                Bom Dia!
                @elseif(date('H') >=13 && date('H')<=18)
                  Boa Tarde!
                @else
                  Boa Noite!
                @endif
            </h1>
            <p>Veja os Filmes mais procurados</p>
            <p><a class="btn btn-lg btn-danger" href="{{route('site.list')}}">Saiba mais!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Sempre pensando em você!</h1>
            <p>Nossa lista é atualizada diariamente</p>
            <p><a class="btn btn-lg btn-danger" href="{{route('site.list')}}">Veja nossa lista!!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Ainda não sabe o que assistir?</h1>
            <p>Deixe-nos ajudar a encontrar seu filme ideal de hoje!</p>
            <p><a class="btn btn-lg btn-danger" href="{{route('site.list')}}">Se aventure</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        
        <h2>Cinema</h2>
        <p>Veja os filmes que estão em cartaz.</p>
        <p><a class="btn btn-danger" href="{{route('site.list')}}">Confira &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <h2>Detalhes</h2>
        <p>Saiba os detalhes sobre o filme que deseja assistir.</p>
        <p><a class="btn btn-danger" href="{{route('site.list')}}">Confira &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <h2>Atualidades</h2>
        <p>Esteja atualizado sobre os filmes mais assistidos.</p>
        <p><a class="btn btn-danger" href="{{route('site.list')}}">Confira &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    

  </div><!-- /.container -->
  <hr>
      

      