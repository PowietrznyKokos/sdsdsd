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
        <img src="img/magic1-mushroom.png" alt="logo" class="logo">

        <div class="search-container">
            <form action="search.php" method="get">
                <input type="text" class="search-input" placeholder="Search...">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
        <div class="icon">
            <a href="cart.php">
                <img src="img/koszyk-Photoroom.png-Photoroom.png" alt="koszyk" id="cart">
            </a>
            <a href="login.html">
                <img src="img/uzytkownik-Photoroom.png-Photoroom.png" alt="login" id="cart">
            </a>
        </div>
    </header>
    <main class="flex-container">
        <div class="fifty flex-container-wrap">
            <div class="card text-center">
                <h3>nazwa oferty</h3>
                <p>cena:189,99zł</p>
            </div>
            <?php
            include "display_products.php";
            ?>
        </div>
        <aside class="sixty sidebar">
            <h3>Kategorie</h3>
            <ul class="category-list">
                <li class="category-item"><a href="#" class="category-link">Kategoria 1</a></li>
                <li class="category-item"><a href="#" class="category-link">Kategoria 2</a></li>
                <li class="category-item"><a href="#" class="category-link">Kategoria 3</a></li>
                <!-- Dodaj więcej kategorii, jeśli jest taka potrzeba -->
            </ul>
        </aside>
    </main>
</body>

</html>