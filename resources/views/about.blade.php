<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
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
        <div class="container mt-4">
                <div class="row">
                        <div class="col-4">
                                <!--<img src="https:/via.placeholder.com/300.jpg" alt="">-->
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPsH-U1vXbV347QZFyirhbNZ3BlmCoebCa5Q&usqp=CAU" alt="" class="w-75">
                        </div>
                        <div class="col-8">
                                <h2>About Our School</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quaerat, itaque dolorem natus corrupti laboriosam illo, commodi adipisci nulla voluptatum molestias ad nemo, odit qui aspernatur sapiente. In, ex placeat?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nesciunt reprehenderit, nisi rem sapiente velit ipsam molestiae vero accusantium? Neque non saepe, dicta veritatis deleniti molestiae porro soluta? Neque, quae.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio quae nobis deleniti, quos sed beatae assumenda iusto itaque recusandae sint minima architecto facilis odit sequi eum debitis aperiam voluptatibus et.</p>
                        </div>
                </div>
        </div>
</body>
</html>