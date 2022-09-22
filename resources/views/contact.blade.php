<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
        <div class="container mt-3">
                <div class="row">
                        <div class="col-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14370.17030892388!2d87.4679296!3d25.7856682!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8f622c46e9afaa9!2sCode%20with%20SadiQ!5e0!3m2!1sen!2sin!4v1653405155835!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-4">
                                <div class="card">
                                        <div class="card-body">
                                                <h5>CWS Programming School</h5>
                                                <h6>(+91) 9546704825,9578564525</h6>
                                                <p class="small">Gandhinagar, madhubani,Purnia (Bihar)</p>
                                                <p class="small">854301</p>
                                        </div>
                                </div>
                                <div class="card mt-3">
                                        <div class="card-body">
                                                <h5>Touch with Us</h5>
                                                <form action="">
                                                        <div class="mb-3">
                                                                <label for="">Name</label>
                                                                <input type="text" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                                <label for="">Contact</label>
                                                                <input type="text" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                                <label for="">Description</label>
                                                                <textarea row="7" class="form-control"></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                                <input type="submit" class="btn btn-success">
                                                        </div>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>