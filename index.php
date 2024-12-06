<?php
session_start();

// Check if the user is logged in
$loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placeholder - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <header>
        <div class="banner">
            <h1>Placeholder Company</h1>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <?php if ($loggedIn): ?>
                    <li class="nav-item"><a class="nav-link" href="logout.html">Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="shipping.html">Shipping</a></li>
                    <li class="nav-item"><a class="nav-link" href="create.html">Create</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        <li><a class="dropdown-item" href="category1.html">Category 1</a></li>
                        <li><a class="dropdown-item" href="category2.html">Category 2</a></li>
                        <li><a class="dropdown-item" href="category3.html">Category 3</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome to Placeholder Store!</h2>
        <div class="carousel-container">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/image1.jpg" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image2.jpg" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image3.jpg" class="d-block w-100" alt="Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>    
        <p>Lorum Ipsum</p>
        <ul>
            <li>Placeholder Products</li>
        </ul>
        <p>Placeholder Store's mission statement. (Plus product images)</p>
    </main>
    <footer>
        <p>&copy; 2024 Ian Espinal</p>
        <div class="footer-links">
            <ul>
                <li><a href="terms.html">Terms of Service</a></li>
                <li><a href="privacy.html">Privacy Statement</a></li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>