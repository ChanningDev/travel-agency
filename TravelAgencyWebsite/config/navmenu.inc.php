<?php
include 'config/config.inc.php';
include 'controllers/navmenu.controller.php';
?>


<!--<nav class="navbar navbar-expand-sm bg-dark navbar-dark">-->
<nav class="navbar navbar-custom1 navbar-expand-sm" >
<!--    <a class="navbar-brand" href="index.php"><h4>WorldStudies Bellinzona</h4></a>-->
<!--    <h3 class="text-muted mb-md-0 mb-5 bold-text"><a class="text-decoration-none text-secondary" href="index.php">WorldStudies.</a></h3>-->
<!--    <img src="media/logos/logo1.png" width="250"  alt="">-->

    <!-- bottone per il menu responsive -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1,#nav2" id="toggleButton">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- proprieta per rendere la navbar collassabile nel bottone-->
    <div class="collapse navbar-collapse" id="nav1">
        <!-- Links -->
<!--        <ul class="navbar-nav ml-auto navbar-custom1" >-->
        <ul class="navbar-nav ml-auto navbar-text" >
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="preventivo.php">Preventivo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iscrizione1.php">Iscrizione</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contatto.php">Contatto</a>
            </li>
        </ul>
    </div>
</nav>


<nav class="navbar navbar-custom2 navbar-expand-sm">
<!--    <h3 class="text-muted mb-md-0 mb-5 bold-text"><a class="text-decoration-none text-secondary" href="index.php">WorldStudies.</a></h3>-->
    <a class="navbar-brand" href="index.php"><img src="media/logos/logo1.png" width="300px" height="50px"></a>
    <!-- proprieta per rendere la navbar collassabile nel bottone-->
    <div class="collapse navbar-collapse" id="nav2">
        <!-- Links -->
        <ul class="navbar-nav ml-auto navbar-text">

            <!--inizio seconda riga-->
            <!-- Dropdown1 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                    Destinazioni per adulti
                </a>
                <div class="dropdown-menu">

                    <?php
                    if (is_array($nazioniAdulti) || is_object($nazioniAdulti))
                    {
                        foreach ($nazioniAdulti as $item)
                        {
                            echo '<a class="dropdown-item" href="cittaadulti.php?nazione=' . $item->nome . '">' . $item->nome . '</a>';
                            echo '</br>';
                        }
                    }
                    else
                    {
                        echo "Unfortunately, an error occured.";
                    }
                    ?>

                    <a class="dropdown-item" href="nazioniadulti.php">Tutte le destinazioni per adulti</a>
                </div>
            </li>

            <!-- Dropdown2 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                    Destinazioni per giovani
                </a>
                <div class="dropdown-menu">

                    <?php
                    if (is_array($nazioniAdulti) || is_object($nazioniAdulti))
                    {
                        foreach ($nazioniGiovani as $item)
                        {
                            echo '<a class="dropdown-item" href="cittagiovani.php?nazione=' . $item->nome . '">' . $item->nome . '</a>';
                            echo '</br>';
                        }
                    }
                    else
                    {
                        echo "Unfortunately, an error occured.";
                    }
                    ?>

                    <a class="dropdown-item" href="nazionigiovani.php">Tutte le destinazioni per giovani</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="corsionline.php">Corsi online</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="catalogo.php">Catalogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="infovarie.php">Informazioni varie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="offepromo.php">Offerte & Promozioni</a>
            </li>

        </ul>
    </div>
</nav>

