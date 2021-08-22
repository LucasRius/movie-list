
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">MovieList</a>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link {{(Route::current()->getName() === 'site.home' ? 'active' : '')}}" aria-current="page" href="{{route('site.home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{(Route::current()->getName() === 'site.list' ? 'active' : '')}}" href="{{route('site.list')}}">Lista de Filmes</a>
            </li>
          </ul>
        </ul>
        @if (Route::current()->getName() === 'site.list')
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <select class="form-select" aria-label="Default select example">
              <option selected>Genero - Todos</option>              
              @foreach ($genre as $value)                  
                    <option value="{{$value['id']}}">{{$value['name']}}</option>                                   
              @endforeach             
            </select>
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
        @endif            
          </div>
      </div>
    </nav>
</header>
<main>

  @yield('content') 

 {{-- FOOTER --}}
 @extends('site.layouts.footer')    
</main>