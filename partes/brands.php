<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapped</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://localhost/comercio/proyecto/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        html,
        body {
          position: relative;
          height: 100%;
        }
   
        body {
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          font-size: 14px;
          color: #000;
          margin: 0;
          padding: 0;
        }
   
        .swiper {
          width: 100%;
          height: 210px;
        }
   
        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;
          display: flex;
          justify-content: center;
          align-items: center;
        }
   
        .swiper-slide img {
          display: block;
          width: 300px;
          height: 170px;
          object-fit: cover;
        }
 
        .swiper-pagination-bullet {
        background-color: #000;
        }
 
        @media (max-width: 1024px) {
          .swiper-slide img {
              width: 250px;
              height: 135px;
          }
        }
 
        @media (max-width: 768px) {
          .swiper-slide img {
            width: 250px;
            height: 135px;
          }
        }
 
        @media (max-width: 480px) {
          .swiper-slide img {
            width: 90px;
            height: 50px;
          }
        }
 
      </style>
 
</head>
<body>
 
    <div class="container swiper mySwiper mt-5" >
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="http://localhost/comercio/proyecto/image/converse.png" alt=""></div>
          <div class="swiper-slide"><img src="http://localhost/comercio/proyecto/image/puma.png" alt=""></div>
          <div class="swiper-slide"><img src="http://localhost/comercio/proyecto/image/adidas.png" alt=""></div>
          <div class="swiper-slide"><img src="http://localhost/comercio/proyecto/image/nike.png" alt=""></div>
          <div class="swiper-slide"><img src="http://localhost/comercio/proyecto/image/newbalance.png" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
 
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 5
        }
    }
});
 
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
 