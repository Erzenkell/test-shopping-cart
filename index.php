<?php
    include 'setting.php';
    include 'header.php';
?>

<body>
<div class="container">
    <header class="header">
    <h3 class="header-logo">Shopping cart de fou</h3>

    <nav class="header-nav">
        <ul>
        <li><a href="#0">Home</a></li>
        <li><a href="#0">Produits</a></li>
        <li><a href="#0">Contact</a></li>
        </ul>
    </nav>
    </header>

    <div class="products"></div>

    <div class="shopping-cart">
    <div class="shopping-cart-head">
        <span class="product-quantity">0</span> Produits dans le panier
    </div>
    <ul class="shopping-cart-list">
    </ul>
    <div class="cart-buttons">
        <a href="#0" class="button empty-cart-btn">Vide</a>
        <a href="#0" class="button cart-checkout">Checkout - <span class="total-price">0€</span></a>
    </div>
    </div>
</div>

<script src="js/app.js"></script>
</body>

<?php include 'footer.php'; ?>