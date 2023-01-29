<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
      </form>
      <form class="d-flex" action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-outline-danger">Logout</button>
      </form>
    </div>
  </div>
</nav>