<?php

include 'config/config.inc.php';
include 'controllers/dettaglioscuola.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';

echo '</br>';
echo '<h1>'.$scuola.' '.$citta.'</h1>';
?>

    <div class="container">

        <p>
            <img src="media/empty-img.jpg" style="width: 80%; height: auto;"/>
        </p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus accumsan nisl non viverra. Donec eget laoreet odio, vel lacinia nisi. Duis egestas ut urna non elementum. Aliquam sed imperdiet orci. Pellentesque viverra ante eget quam tincidunt, et auctor tellus viverra. Aenean eget diam neque. Donec at interdum massa, nec placerat ligula. Mauris rutrum et sem non aliquet. Vestibulum mauris turpis, maximus at posuere sed, finibus nec lacus. Aliquam eu velit in velit mollis efficitur. Praesent turpis arcu, laoreet nec rhoncus quis, pulvinar eget ipsum. Sed est felis, interdum eget eleifend sit amet, auctor id sapien. Quisque tincidunt ligula sit amet risus dictum, a imperdiet nisl vulputate.

            Vivamus dapibus ultrices nunc elementum posuere. Nam molestie ultrices nibh, id feugiat elit dapibus eu. Aenean commodo nulla in mi venenatis, et porttitor mi iaculis. Ut convallis vehicula mauris, nec ornare velit commodo et. In hac habitasse platea dictumst. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi ac nisl nunc. Sed quis auctor ex, eget iaculis turpis.

            Donec sit amet justo sit amet enim mollis vehicula et nec turpis. Vivamus id libero non libero efficitur vestibulum sed ac nisl. In vitae risus a nunc lacinia viverra. Praesent venenatis urna nec fermentum facilisis. Proin scelerisque orci odio, vitae elementum lacus porttitor eu. Aliquam eleifend fringilla faucibus. Praesent luctus tincidunt nisi, rhoncus luctus ipsum vestibulum non. Donec hendrerit urna et velit iaculis congue. Proin semper porttitor massa, id sodales mauris. Etiam ut purus at tellus tempus scelerisque in pulvinar tellus.

            Praesent efficitur vehicula est sit amet convallis. Donec congue ante vitae porta egestas. Donec in massa at elit gravida tincidunt. Nulla sed tincidunt mauris, sed tristique turpis. In euismod tristique ligula. Donec non malesuada elit. Nullam fringilla volutpat turpis, sed condimentum leo condimentum vel.

        </p>
    </div>



    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Date e prezzi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Video</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Foto</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Catalogo</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus ultrices nunc elementum posuere. Nam molestie ultrices nibh, id feugiat elit dapibus eu. Aenean commodo nulla in mi venenatis, et porttitor mi iaculis.
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus ultrices nunc elementum posuere. Nam molestie ultrices nibh, id feugiat elit dapibus eu. Aenean commodo nulla in mi venenatis, et porttitor mi iaculis.
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus ultrices nunc elementum posuere. Nam molestie ultrices nibh, id feugiat elit dapibus eu. Aenean commodo nulla in mi venenatis, et porttitor mi iaculis.
        </div>
    </div>




    </br>
    <div class="container">
        <a href="preventivo.php" class="btn btn-primary">Richiedi un preventivo</a>
        <a href="iscrizione.php" class="btn btn-primary">Iscriviti subito</a>
    </div>
    </br>

    <!--Google map-->
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                style="border:0" allowfullscreen></iframe>
    </div>

    <!--Google Maps-->



<?php
include 'config/footer.inc.php';
