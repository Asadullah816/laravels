<!doctype html>
<html lang="en">
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="about.html">
    <style>
        img {
            height: 500px;
            width: 100%;
        }
        
        .timg {
            height: 250px;
            width: 200px;
        }
    </style>
</head>

<body>
    <x-header componentName="user"/>
    <nav class="navbar navbar-expand-lg bg-body-primary " data-bs-theme="dark" style="background-color: rgb(9, 46, 46);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">A.Coder</A></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/practice">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About us</a>
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
            </div>
    </nav>
    </div>
    <div class="container">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-1">
                <h2 class="featurette-heading fw-normal lh-1">It all started by A. Coder's </h2> <span class="text-muted">It’ll
                    blow your
                    mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.
                </p>
            </div>
            <div class="col-md-5 order-md-2">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" src="images/./p8.jpg" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-1">
                <h2 class="featurette-heading fw-normal lh-1">We stated in 2023. <span class="text-muted">It’ll
                    blow your
                    mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.
                </p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" src="images/./p6.jpg" alt="">
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg> -->
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">It's all about us. <span class="text-muted">It’ll
                    blow your
                    mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.
                </p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" src="images/./p9.jpg" alt="">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>