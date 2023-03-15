<div>
       <nav class="navbar navbar-expand-lg bg-body-primary " data-bs-theme="dark" style="background-color: rgb(9, 46, 46);">
        <div class="container-fluid">
            <h3>{{$title}}</h3>
            <a class="navbar-brand" href="#">A.Coder</A></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/practice">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/about">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Topics
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Technology</a></li>
                            <li><a class="dropdown-item" href="#">Web development</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Write for us</a></li>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact us</a>
                        </li>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="mx-2">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login

                  </button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signupModal">
                    Sign Up

                  </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>