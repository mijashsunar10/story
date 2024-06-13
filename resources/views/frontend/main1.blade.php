<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Main</title>

    <script src="https://kit.fontawesome.com/2c3dd3b477.js" crossorigin="anonymous"> </script>

   
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
rel="stylesheet">
<link rel="icon" type="image/x-icon" href="img/logo2.png">
<script src="https://kit.fontawesome.com/a1d8eeb7ff.js" crossorigin="anonymous"></script>

<!-- Css Styles -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/plyr.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<style>
    .btn-rounded
    {
        border-radius: 50px;
    }

    .wrapper
        {
            display: flex;
            // flex-wrap: wrap;
            align-items: center;
            justify-content: center;

        }

        .wrapper_item
        {
            display: flex;
            flex: 1 1 200px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
            .text 
                {
                    font-family :'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                     color:#e2e7ee ;
                     font-weight: bolder;
                }
                .text1 
                {
                   
                    // padding: -1rem 0rem;
                    margin-bottom: 2rem;
                }
                .text3
                {
                    max-width: 600px;
                }   
                .image 
            {
                height: 80vh;
                width: 100%;
                object-fit: contain;
            }     

            @media screen and (max-width:783px)
          {
            
                    .button
                {
                    // display:flex;
                    flex-direction: column;
                    gap: 1rem !important;
                    // margin-bottom: 0;
                }
                
                
            }
            @media screen and (max-width:700px)
            {
                .wrapper 
                {
                    flex-direction: column;
                }
            }
</style>


</head>

<body>
    @include('layouts.header');

    <section>
        <div class="wrapper">
          <div class="wrapper_item  font-weight-bolder">

            <p class="text text1 fs-1 " style="color:">Hi, We are Simthesis</p>
            <p class="text text2 fs-2">Where Tales Dwells</p>
            <p class="text text3 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, commodi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ad? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis eveniet totam maxime voluptate nam id ducimus aliquam velit quas recusandae!</p>

          <div class=" button d-flex justify-content-center align-items-center m-0 flex-lg-row gap-5">
          <a href="#signup" class="text-white text-decoration-none px-4 py-1 fs-5  rounded-3" style="background-color:#e53637">Start Reading</a>
          <a href="#signup" class="text-white text-decoration-none px-4 py-1 fs-5 rounded-3" style="background-color:#e53637">Start Writing</a>
          </div>
          </div>
          <div class="wrapper_item ">
            <img class="image" src="img/computer copy3.png" alt="">

          </div>

        </div>
      </section>

    <footer
          class="text-center text-lg-start text-white "
          style="background-color: #063140 "
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a class="text-white">MDWordPress</a>
            </p>
            <p>
              <a class="text-white">BrandFlow</a>
            </p>
            <p>
              <a class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1 btn-rounded"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1 btn-rounded"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-primary btn-floating m-1 btn-rounded"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1 btn-rounded"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>

            <!-- Linkedin -->
            <a
               class="btn btn-primary btn-floating m-1 btn-rounded"
               style="background-color: #0082ca"
               href="#!"
               role="button"
               ><i class="fab fa-linkedin-in"></i
              ></a>
            <!-- Github -->
            <a
               class="btn btn-primary btn-floating m-1 btn-rounded"
               style="background-color: #333333"
               href="#!"
               role="button"
               ><i class="fab fa-github"></i
              ></a>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>