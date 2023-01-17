<?php include('server.php');
$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">


</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  py-2 ">

    <div class="topnav">
        <a href="login.php">LogIn</a>
        <a href="contactus.html">Contact</a>
        <a href="about us.html">About</a>
        <a class="active" href="login.php">Shops</a>
        <img src="../images/logo.png" alt="" class="src">
        

    </div>

    <!-- Navigation -->

    <?php

if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
    };
};

?>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root {
        --blue: #2980b9;
        --red: tomato;
        --orange: orange;
        --black: #333;
        --white: #fff;
        --bg-color: #eee;
        --dark-bg: rgba(0, 0, 0, .7);
        --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        --border: .1rem solid #999;
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        /* padding-bottom: 5rem; */
    }

    section {
        padding: 2rem;
    }

    .heading {
        text-align: center;
        font-size: 3.5rem;
        text-transform: uppercase;
        color: var(--black);
        margin-bottom: 2rem;
    }

    .btn,
    .option-btn,
    .delete-btn {
        display: block;
        width: 100%;
        text-align: center;
        background-color: var(--blue);
        color: var(--white);
        font-size: 1.7rem;
        padding: 1.2rem 3rem;
        border-radius: .5rem;
        cursor: pointer;
        margin-top: 1rem;
    }

    .btn:hover,
    .option-btn:hover,
    .delete-btn:hover {
        background-color: var(--black);
    }

    .option-btn i,
    .delete-btn i {
        padding-right: .5rem;
    }

    .option-btn {
        background-color: var(--orange);
    }

    .delete-btn {
        margin-top: 0;
        background-color: var(--red);
    }

    .message {
        background-color: var(--blue);
        position: sticky;
        top: 0;
        left: 0;
        z-index: 10000;
        border-radius: .5rem;
        background-color: var(--white);
        padding: 1.5rem 2rem;
        margin: 0 auto;
        max-width: 1200px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.5rem;
    }

    .message span {
        font-size: 2rem;
        color: var(--black);
    }

    .message i {
        font-size: 2.5rem;
        color: var(--black);
        cursor: pointer;
    }

    .message i:hover {
        color: var(--red);
    }

    .header {
        background-color: var(--blue);
        position: sticky;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    .header .flex {
        display: flex;
        align-items: center;
        padding: 1.5rem 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .header .flex .logo {
        margin-right: auto;
        font-size: 2.5rem;
        color: var(--white);
    }

    .header .flex .navbar a {
        margin-left: 2rem;
        font-size: 2rem;
        color: var(--white);
    }

    .header .flex .navbar a:hover {
        color: yellow;
    }

    .header .flex .cart {
        margin-left: 2rem;
        font-size: 2rem;
        color: var(--white);
    }

    .header .flex .cart:hover {
        color: yellow;
    }

    .header .flex .cart span {
        padding: .1rem .5rem;
        border-radius: .5rem;
        background-color: var(--white);
        color: var(--blue);
        font-size: 2rem;
    }

    #menu-btn {
        margin-left: 2rem;
        font-size: 3rem;
        cursor: pointer;
        color: var(--white);
        display: none;
    }

    .add-product-form {
        max-width: 50rem;
        background-color: var(--bg-color);
        border-radius: .5rem;
        padding: 2rem;
        margin: 0 auto;
        margin-top: 2rem;
    }

    .add-product-form h3 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--black);
        text-transform: uppercase;
        text-align: center;
    }

    .add-product-form .box {
        text-transform: none;
        padding: 1.2rem 1.4rem;
        font-size: 1.7rem;
        color: var(--black);
        border-radius: .5rem;
        background-color: var(--white);
        margin: 1rem 0;
        width: 100%;
    }

    .display-product-table table {
        width: 100%;
        text-align: center;
    }

    .display-product-table table thead th {
        padding: 1.5rem;
        font-size: 2rem;
        background-color: var(--black);
        color: var(--white);
    }

    .display-product-table table td {
        padding: 1.5rem;
        font-size: 2rem;
        color: var(--black);
    }

    .display-product-table table td:first-child {
        padding: 0;
    }

    .display-product-table table tr:nth-child(even) {
        background-color: var(--bg-color);
    }

    .display-product-table .empty {
        margin-bottom: 2rem;
        text-align: center;
        background-color: var(--bg-color);
        color: var(--black);
        font-size: 2rem;
        padding: 1.5rem;
    }

    .edit-form-container {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1100;
        background-color: var(--dark-bg);
        padding: 2rem;
        display: none;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        width: 100%;
    }

    .edit-form-container form {
        width: 50rem;
        border-radius: .5rem;
        background-color: var(--white);
        text-align: center;
        padding: 2rem;
    }

    .edit-form-container form .box {
        width: 100%;
        background-color: var(--bg-color);
        border-radius: .5rem;
        margin: 1rem 0;
        font-size: 1.7rem;
        color: var(--black);
        padding: 1.2rem 1.4rem;
        text-transform: none;
    }

    .products .box-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, 35rem);
        gap: 1.5rem;
        justify-content: center;
    }

    .products .box-container .box {
        text-align: center;
        padding: 2rem;
        box-shadow: var(--box-shadow);
        border: var(--border);
        border-radius: .5rem;
    }

    .products .box-container .box img {
        height: 25rem;
    }

    .products .box-container .box h3 {
        margin: 1rem 0;
        font-size: 2.5rem;
        color: var(--black);
    }

    .products .box-container .box .price {
        font-size: 2.5rem;
        color: var(--black);
    }
    .box img{
        height: 22rem;
        width: 30rem;
    }



    /* media queries  */

    @media (max-width:1200px) {

        .shopping-cart {
            overflow-x: scroll;
        }

        .shopping-cart table {
            width: 120rem;
        }

        .shopping-cart .heading {
            text-align: left;
        }

        .shopping-cart .checkout-btn {
            text-align: left;
        }

    }

    @media (max-width:991px) {

        html {
            font-size: 55%;
        }

    }

    @media (max-width:768px) {

        #menu-btn {
            display: inline-block;
            transition: .2s linear;
        }

        #menu-btn.fa-times {
            transform: rotate(180deg);
        }

        .header .flex .navbar {
            position: absolute;
            top: 99%;
            left: 0;
            right: 0;
            background-color: var(--blue);
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            transition: .2s linear;
        }

        .header .flex .navbar.active {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }

        .header .flex .navbar a {
            margin: 2rem;
            display: block;
            text-align: center;
            font-size: 2.5rem;
        }

        .display-product-table {
            overflow-x: scroll;
        }

        .display-product-table table {
            width: 90rem;
        }

    }

    @media (max-width:450px) {

        html {
            font-size: 50%;
        }

        .heading {
            font-size: 3rem;
        }

        .products .box-container {
            grid-template-columns: 1fr;
        }

    }
    </style>

    <div class="container">

        <section class="products">

            <h1 class="heading">Agriculture products</h1>

            <div class="box-container">

                <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_products)) {
            ?>

                <form action="" method="post">
                    <div class="box">
                        <img src="../admin/uploaded_img/<?= $fetch_product['image']; ?>" alt="">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <h3><?php echo $fetch_product['name']; ?></h3>
                        <div class="price">Rs <?php echo $fetch_product['price']; ?>/-</div>
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="hidden" name="product_quantity" value="<?php echo $fetch_product['quantity']; ?>">
                        <a href="login.php" class="btn"> <i class="add-to-cart"></i>Add to cart
                        </a>

                        <!-- <input a href="login.php" type=" submit" class="btn" value="add to cart" name="add_to_cart"> -->
                    </div>
                </form>

                <?php
                };
            };
            ?>

            </div>

        </section>

    </div>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>



    </body>

</html>