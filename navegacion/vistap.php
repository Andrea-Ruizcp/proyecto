<?php
 
include("../conexion/conexion.php");
 
include("../include/header.php");
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shooping | Zapped Shoes</title>
    <link rel="stylesheet" href="http://localhost/comercio/proyecto/partescss/vista.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
</head>
<body>
   
<main>
    <div class="container-img mt-5">
        <img src="http://localhost/comercio/proyecto/image/black.png"alt="imagen-producto">
            </div>
            <div class="container-info-product mt-5">
                <h1 class="title-product">Name</h1>
                <h6 class="category-product">Category</h6>
                <div class="container-price">
                    <span>$95.00</span>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
 
                <div class="container-details-product">
                    <div class="form-group">
                        <label for="colour">Color</label>
                        <select name="colour" id="colour">
                            <option disabled selected value="">
                                Choose an option
                            </option>
                            <option value="rojo">Rojo</option>
                            <option value="blanco">Blanco</option>
                            <option value="beige">Beige</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select name="size" id="size">
                            <option disabled selected value="">
                                Choose an option
                            </option>
                            <option value="40">40</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </div>
                    <button class="btn-clean">Clear</button>
                </div>
 
                <div class="container-add-cart">
                    <div class="container-quantity">
                        <input
                            type="number"
                            placeholder="1"
                            value="1"
                            min="1"
                            class="input-quantity"
                        />
                        <div class="btn-increment-decrement">
                            <i class="fa-solid fa-chevron-up" id="increment"></i>
                            <i class="fa-solid fa-chevron-down" id="decrement"></i>
                        </div>
                    </div>
                    <button class="btn-add-to-cart">
                        <i class="fa-solid fa-plus"></i>
                        Añadir al carrito
                    </button>
                </div>
 
                <div class="container-description">
                    <div class="title-description">
                        <h4>Description</h4>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="text-description">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Laboriosam iure provident atque voluptatibus
                            reiciendis quae rerum, maxime placeat enim cupiditate
                            voluptatum, temporibus quis iusto. Enim eum qui delectus
                            deleniti similique? Lorem, ipsum dolor sit amet
                            consectetur adipisicing elit. Sint autem magni earum est
                            dolorem saepe perferendis repellat ipsam laudantium cum
                            assumenda quidem quam, vero similique? Iusto officiis
                            quod blanditiis iste?
                        </p>
                    </div>
                </div>
                <div class="container-reviews">
                    <div class="title-reviews">
                        <h4>Reviews</h4>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="text-reviews hidden">
                        <p>-----------</p>
                    </div>
                </div>
            </div>
        </main>
    <?php include("../include/footer.php"); ?>
    <script src="http://localhost/comercio/proyecto/script/vista.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>