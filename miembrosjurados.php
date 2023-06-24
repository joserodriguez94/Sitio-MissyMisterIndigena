<!DOCTYPE html>
<html lang="en">


<head>



    <?php
      include ('./include/head.php');
   
   ?>

</head>




<body>

    <header>
        <?php
include ('./include/header.php');
?>

    </header>




    <!--Nav -->
    <?php
           include ('./include/nav.php');
   
        ?>

    <!--Fin de nav -->



    <!--Slider-->
    <?php
   include ('./include/slides.php');
   
   ?>
    <!--Fin Slider-->




    <!--Contenido de sitio -->

    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">

        <div class="carousel-inner  ">

            <div class="carousel-item active">
                <img src="img/baner.jpg" class=" baner w-100" alt=" ..">
                <div class=" bloquetitulo1 ">
                    <div class="carousel-caption bloquetitulo2  ">
                        <h2 class="titulodebanner  "> Finalistas del certamen <br> 2021</h2>

                    </div>
                </div>
            </div>


        </div>




    </div>





    <div class="card" >
        <img src="img/finalista.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>











    <!--Fin de contenido de sitio -->









    <!--Footer-->
    <?php
   include ('./include/footer.php');
   
   ?>
    <!--Fin Footer-->






    <!--Scripts-->
    <?php
   include ('./include/script.php');
   
   ?>
    <!--Fin Scripts-->



</body>

</html>