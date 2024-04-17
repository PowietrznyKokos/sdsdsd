<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sklep</title>
</head>

<body>
    <header class="flex-container topnav">
        <img src="img/chuj1.png" alt="logo" class="logo">

        <div class="search-container">
            <form action="search.php" method="get">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
        <div class="icon">
            <a href="cart.php">
                <img src="img/koszyk-z-grzybkami-zielony.png" alt="koszyk" id="cart">
            </a>
            <a href="login.html">
                <img src="img/green-silkroad-opponent.png" alt="login" id="cart">
            </a>
        </div>
    </header>
    <main class="flex-container">
        <div class="fifty flex-container-wrap">
            <div class="card text-center">
                <h3>Magiczny grzyb podlaski</h3>
                <img src="img/kurka.jpg" alt="kurka" class="kurka">
                <p>99,99/25g</p>
            </div>
            <?php
            include "display_products.php";
            ?>
        </div>
        <aside class="sixty sidebar">
            <h3 class="chuj">Grube Tematy</h3>
            <ul class="category-list">
                <li class="category-item"><a href="#" class="category-link">Grzyby</a></li>
                <li class="category-item"><a href="#" class="category-link">Zioło</a></li>
                <li class="category-item"><a href="#" class="category-link">Kryształ</a></li>
                <li class="category-item"><a href="#" class="category-link">Opiaty</a></li>
                <li class="category-item"><a href="#" class="category-link">Kanabinole</a></li>
                <li class="category-item"><a href="#" class="category-link">Psychostymulujące</a></li>
                <li class="category-item"><a href="#" class="category-link">Halucynki</a></li>
                <li class="category-item"><a href="#" class="category-link"></a></li>
                <li class="category-item"><a href="małe-dziewczynki.php" class="category-link">Małe Dziewczynki</a></li>
                <li class="category-item"><a href="#" class="category-link">Odam za darmo!</a></li>
                <!-- Dodaj więcej kategorii, jeśli jest taka potrzeba -->
            </ul>
        </aside>
    </main>
    
</body>
<footer>

</footer>
</html>