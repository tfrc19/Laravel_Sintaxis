<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!--<link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">-->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <title>Blog</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Hola</h4>
                            <p class="card-text">Si</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Hola</h4>
                            <p class="card-text">Si</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Hola</h4>
                            <p class="card-text">Si</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Hola</h4>
                            <p class="card-text">Si</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <button class="btn btn-large btn-primary" id="boton">Prueba</button>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/prueba.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>

</html>