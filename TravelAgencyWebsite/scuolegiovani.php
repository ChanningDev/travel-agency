<?php

include 'config/config.inc.php';
include 'controllers/scuolegiovani.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';

echo '</br>';
echo '<h1>'.$citta.'</h1>';
?>





    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="media/empty-img.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum</h3>
                    <h1>Lorem ipsum</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="media/empty-img.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum</h3>
                    <h1>Lorem ipsum</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="media/empty-img.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum</h3>
                    <h1>Lorem ipsum</h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</br>


    <div class="container">

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus accumsan nisl non viverra. Donec eget laoreet odio, vel lacinia nisi. Duis egestas ut urna non elementum.
            Aliquam sed imperdiet orci. Pellentesque viverra ante eget quam tincidunt, et auctor tellus viverra. Aenean eget diam neque. Donec at interdum massa, nec placerat ligula.
            Mauris rutrum et sem non aliquet. Vestibulum mauris turpis, maximus at posuere sed, finibus nec lacus. Aliquam eu velit in velit mollis efficitur.
            Praesent turpis arcu, laoreet nec rhoncus quis, pulvinar eget ipsum. Sed est felis, interdum eget eleifend sit amet, auctor id sapien. Quisque tincidunt ligula sit amet risus dictum, a imperdiet nisl vulputate.
        </p>
    </div>



    </br>
    <div class="container">
        <a href="preventivo.php" class="btn btn-primary">Richiedi un preventivo</a>
        <a href="iscrizione.php" class="btn btn-primary">Iscriviti subito</a>
    </div>

</br>

<?php
echo '<h1>Scuole per adulti '.$citta.'</h1>';

echo '<div class="row">';
if (is_array($scuoleGiovani) || is_object($scuoleGiovani))
{
    foreach ($scuoleGiovani as $item) {
        echo '<div class="col-md-6 d-flex align-items-stretch">';
        echo '<div class="card w-75 p-3 mt-4 mb-4 mx-auto">';
        echo '<a href="dettaglioscuola.php?scuola=' . $item->nome . '">';
        echo '<img class="card-img-top" src="media/empty-img.jpg" alt="Card image cap"/>';
        echo '</a>';
        echo '<div class="card-body">';
        echo '<h3 class="card-title">' . $item->nome . ' ' . $item->citta . '</h3>';
        echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>';

        echo '<a href="dettaglioscuola.php?scuola=' . $item->nome . '&citta=' .$item->citta. '" class="btn btn-primary">Vai al dettaglio</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        //echo '</div>';
    }
}
else
{
    echo "Unfortunately, an error occured.";
}
echo '</div>';

include 'config/footer.inc.php';


