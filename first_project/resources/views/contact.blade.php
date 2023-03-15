<!doctype html>
<html lang="en">
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="about.html">
    <style>
        .timg {
            height: 250px;
            width: 200px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-primary " data-bs-theme="dark"
        style="background-color: rgb(9, 46, 46);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">A.Coder</A></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/practice">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/about">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                        <a class="nav-link active" href="contact.html">Contact us</a>
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
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="container text-dark">
            <h3 class="text-success my-4 text-center">Contact Us</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Select your query :</label>
                
                <select class="form-select" aria-label="Default select example">
                    <option selected>Web development</option>
                    <option value="1">Graphic designing</option>
                    <option value="2">Technology</option>
                    <option value="3">Software development</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Member?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                        <label for="gridCheck1" class="form-check-label">Yes</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Desinger?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                        <label for="gridCheck1" class="form-check-label">Yes</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Coder?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                        <label for="gridCheck1" class="form-check-label">Yes</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Teacher?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                        <label for="gridCheck1" class="form-check-label">Yes</label>
                    </div>
                </div>
            

            </div>
              
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Elaborate Your Concern :</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" >Submit</button>
            </div>
        </div>
    </div>
        
        
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">© 2022 Company, Inc</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>