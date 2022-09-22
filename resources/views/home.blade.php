<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                        <a href="" class="navbar-brand">School</a>

                        <div class="navbar-nav">
                                <a href="{{ route('homepage')}}" class="nav-item nav-link">Home</a>
                                <a href="{{ route('aboutpage')}}" class="nav-item nav-link">About</a>
                                <a href="{{ route('contactpage')}}" class="nav-item nav-link">Contact</a>
                                <a href="{{ route('gallerypage')}}" class="nav-item nav-link">Gallery</a>
                        </div>
                </div>
        </nav>

        <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                        <div class="carousel-item active bg-primary p-5 text-white">
                                <h1>this is slide1</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quam doloribus recusandae,
                                     dolores iste rem nemo quaerat nobis iure dignissimos id aut reiciendis eaque, nihil aliquid vero consequatur. Cumque, quis.</p>
                                <a href="" class="btn btn-dark">Getting Start</a>
                        </div>
                        <div class="carousel-item bg-warning p-5 text-white">
                                <h1>this is slide2</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quam doloribus recusandae,
                                     dolores iste rem nemo quaerat nobis iure dignissimos id aut reiciendis eaque, nihil aliquid vero consequatur. Cumque, quis.</p>
                                <a href="" class="btn btn-dark">Getting Start</a>
                        </div>
                        <div class="carousel-item bg-danger p-5 text-white">
                                <h1>this is slide3</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quam doloribus recusandae, 
                                    dolores iste rem nemo quaerat nobis iure dignissimos id aut reiciendis eaque, nihil aliquid vero consequatur. Cumque, quis.</p>
                                <a href="" class="btn btn-dark">Getting Start</a>
                        </div>
                       
                </div>
        </div>
        <div class="container mt-5">
                <div class="row">
                        <div class="col-4">
                                <div class="card bg-primary text-white">
                                        <div class="card-body">
                                                <h1>About</h1>
                                                <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sapiente cupiditate expedita libero recusandae labore,
                                                     aperiam iure facilis ullam eum, dignissimos sunt nemo, provident ea ratione quia amet ex rerum!</p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-4">
                                <div class="card bg-dark text-white">
                                        <div class="card-body">
                                                <h1 class="text-white">Our Mission</h1>
                                                <p class="small text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sapiente cupiditate expedita libero recusandae labore,
                                                     aperiam iure facilis ullam eum, dignissimos sunt nemo, provident ea ratione quia amet ex rerum!</p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-4">
                                <div class="card bg-warning text-white">
                                        <div class="card-body">
                                                <h1 class="text-white">Our Vision</h1>
                                                <p class="small text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sapiente cupiditate expedita libero recusandae labore, 
                                                    aperiam iure facilis ullam eum, dignissimos sunt nemo, provident ea ratione quia amet ex rerum!</p>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>