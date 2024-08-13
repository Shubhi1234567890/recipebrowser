<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hours of Taste</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        #hero {
            background-image: url('./asset/home1.jpg');
            padding: 20%;
            border-radius: 10px;
            color: white;
            height: 18%;
            width: 100%;
            font-size: large;
        }

        #home2 {
            margin-top: 5%;
            font-size: 2rem;
            color:rgba(0, 0, 0, 0.651);
        }

        header {
            background: linear-gradient(180deg, rgb(49, 172, 49) 20%, rgb(218, 218, 42) 100%);
            height: 55px;
        }

        body {
            background: linear-gradient(180deg, rgb(218, 218, 42) 10%, rgb(49, 172, 49) 90%);
        }

        #t1 {
            font-family: "Poetsen One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: rgba(0, 0, 0, 0.651);
        }

        #top-recipes {
            margin-left: 5%;
            text-align: center;
        }

        #r {
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 20px 35px rgba(0, 0, 1, 0.9);
        }

        .navbar {
            background: transparent !important;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.651);
            font-weight: bold;
        }

        .navbar-dark .navbar-brand {
            color: rgba(0, 0, 0, 0.651);
            font-weight: bold;
        }

        .card-img-top {
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card {
            width: 100%;
            max-width: 265px;
        }

        .footer {
            padding: 2px 0;
        }

        .like-btn {
            background: none;
            border: none;
            color: #e74c3c;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .like-btn:hover {
            color: #c0392b;
        }
        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 45px;
}
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="text-center" id="t1">Hours of Taste</h1>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="homepage.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="browse.php">Browse Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submit.html">Submit Recipe</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="edit.php">Edit Profile</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="hero" class="py-5 text-center">
        <div id="home2" class="container">
            <h1>Find, Share, and Enjoy!</h1>
            <p>Discover mouth-watering recipes from around the world.</p>
            <a href="browse.php" class="btn btn-primary">Browse Recipes</a>
        </div>
    </section>

    <section id="top-recipes" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Top Liked Recipes</h2>
        </div>
    </section>
    <div class="row justify-content-center">
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card" id="r">
            <img src="images (1).jpeg" class="card-img-top" alt="Recipe Title 1">
            <div class="card-body">
                <h5 class="card-title">Chole Bhature</h5>
                <p class="card-text">Chole Bhature is a popular North Indian dish consisting of spicy, tangy chickpeas (chole) served with deep-fried bread (bhature). .</p>
                <p class="card-text">Likes: 120</p>
                <a href="https://nishamadhulika.com/64-chole_bhature_recipe.html" class="btn btn-primary">View Recipe</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card" id="r">
            <img src="images(2).jpeg" class="card-img-top" alt="Recipe Title 2">
            <div class="card-body">
                <h5 class="card-title">Idli sambar</h5>
                <p class="card-text">The idlis are light and fluffy, made from fermented rice and urad dal batter. The sambar is a tangy and spicy stew made with lentils, vegetables, and tamarind.</p>
                <p class="card-text">Likes: 98</p>
                <a href="https://www.indianhealthyrecipes.com/idli-sambar-recipe-tiffin-sambar/" class="btn btn-primary">View Recipe</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card" id="r">
            <img src="images(4).jpeg" class="card-img-top" alt="Recipe Title 2">
            <div class="card-body">
                <h5 class="card-title">Dal Dhokli</h5>
                <p class="card-text">Daal Dhokli is a popular Indian dish, particularly in the Gujarat region, known for its comforting and hearty qualities.</p>
                <p class="card-text">Likes: 98</p>
                <a href="https://www.yummytummyaarthi.com/dal-dhokli-recipe-gujarati-daal-dhokli/" class="btn btn-primary">View Recipe</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card" id="r">
            <img src="IMG_0059.JPG" class="card-img-top" alt="Recipe Title 2">
            <div class="card-body">
                <h5 class="card-title">Ghee Upma</h5>
                <p class="card-text">Ghee Upma is a flavorful and aromatic South Indian breakfast dish made from semolina (rava) cooked with ghee (clarified butter)..</p>
                <p class="card-text">Likes: 98</p>
                <a href="https://www.indianhealthyrecipes.com/upma-recipe-how-to-make-upma/" class="btn btn-primary">View Recipe</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card" id="r">
            <img src="images(3).jpeg" class="card-img-top" alt="Recipe Title 3">
            <div class="card-body">
                <h5 class="card-title">Litti Chokha</h5>
                <p class="card-text">Litti Chokha is a classic dish from the Bhojpuri region of India.</p>
                <p class="card-text">Likes: 76</p>
                <a href="https://www.vegrecipesofindia.com/litti-chokha-recipe/" class="btn btn-primary">View Recipe</a>
            </div>
        </div>
    </div>
</div>


    <footer class="footer bg-dark text-white text-center">
        <div class="container">
            <p>&copy; 2024 Hours of Taste</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
