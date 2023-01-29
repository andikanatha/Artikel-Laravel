<!-- Navbar -->
<header>
        {{-- <img src="/assets/rev-logo.png" alt="logo" class="logo"> --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            {{-- <a class="navbar-brand" href="#">PERWEB</a> --}}
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/home">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/article/allarticle">Artikel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/publisher/allpublisher">Author</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Hi, {{Auth()->user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/dashboard">Dashboard</a>
                      <a>
                        <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                        </form>
                      </a>
                    </div>
                    @else
                    <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endauth
                
              </ul>
            </div>
          </nav>
    </header>
    <!-- End Navbar -->