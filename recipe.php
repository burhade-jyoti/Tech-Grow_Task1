<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Animated Recipe Website</title>
    <!-- Add this in the <head> section of your HTML -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleRecipe.css">
</head>
<body>
    <?php

include'navbarR.html';

    ?>
     <section class="hero">
        <div class="container text-center">
            <h1>"Discover Delicious Recipes for Every Occasion"</h1>
            <p>The cutest recipes made with love.
</p>
        </div>
    </section>
    <div id="re">

    <section class="recipe-cards container mt-5">
        <div class="row">
            <!-- Recipe Card 1 -->
            <div class="col-md-4">
                <div class="recipe-card">
                    <img src="img/re11.png" alt="Recipe 1" class="img-fluid">
                    <div class="recipe-content">
                        <h3>Beer-Roasted Cauliflower with Pasta</h3>
                        <p>Poach a whole head of cauliflower in an olive-oil dappled, chile-spiked, beer-based broth, then wedge it & roast it until golden-crusted and butter tender.
</p>
                    </div>
                </div>
            </div>
            <!-- Recipe Card 2 -->
            <div class="col-md-4">
                <div class="recipe-card">
                    <img src="img/re2.png" alt="Recipe 2" class="img-fluid">
                    <div class="recipe-content">
                        <h3>Roasted Tomato Salad</h3>
                        <p>The next time you think of making a caprese salad, consider this roasted tomato salad instead. The special combination of both raw and roasted tomatoes, along with bright homemade harissa oil brings an element of the unexpected.</p>
                    </div>
                </div>
            </div>
            <!-- Recipe Card 3 -->
            <div class="col-md-4">
                <div class="recipe-card">
                    <img src="img/re3.png" alt="Recipe 3" class="img-fluid">
                    <div class="recipe-content">
                        <h3>Egg Salad Sandwich</h3>
                        <p>The perfect egg salad sandwich is all about the little tweaks and a smart ratio of eggs to other ingredients. This is my favorite. Served on garlic-rubbed toasted bread with chopped celery, onion, and whole-grain mustard.
</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <footer class="text-center bg-dark text-white py-3">
        <p>&copy; 2024 Recipe Moms Recipes. All Rights Reserved.</p>
    </footer>

    <script src="assets/bootstrap.bundle.min.js"></script>
    <script src="scriptR.js"></script>
</body>


<!-- Add this before the closing </body> tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>