<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('profile') }}">php project</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" d-flex flex-row-reverse navbar-collapse collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav">
          @if (auth()->user())
          <a type="button" class="nav-link active" aria-current="page" href="{{ route('profile') }}">{{auth()->user()->name}}</a>
           <a  type="button"  class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
          @endif
        </div>
      </div>
    </div>
  </nav>