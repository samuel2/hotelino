<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HotelINO - <?php echo $titre; ?> </title>
    </head>
    <body>

        <nav class="nav navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <i class="glyphicon glyphicon-home"></i>
                    Gestion Hotelino
                </a>
            </div>

            <div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            <i class="glyphicon glyphicon-book"></i>
                            Partenaire
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?action=listclient">
                                    <i class="glyphicon glyphicon-fire"></i>
                                    Client
                                </a>
                            </li>
                            <li><a href="index.php?action=listcoccupant">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Occupant
                                </a>
                            </li>
                        </ul>
                    </li>

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                Opération
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php?action=listreservation">
                                        <i class="glyphicon glyphicon-cutlery"></i>
                                        Reservation
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?action=listreglement">
                                        <i class="glyphicon glyphicon-usd"></i>
                                        Reglement
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-th-list"></i>
                                Personnel
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php?action=listreceptionniste">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Receptionniste
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Comptable
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Secrétaire
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-signal"></i>
                                Chambre
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php?action=listchambre">
                                        <i class="glyphicon glyphicon-unchecked"></i>
                                        Liste des chambre
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-log-out"></i>
                                        Chambres libres
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-log-in"></i>
                                        Chambres occupées
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="navbar-droit">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    Language
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    User
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <i class="glyphicon glyphicon-pushpin"></i>
                                            Connexion
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
            </div>
        </nav>

        <div class="container">
            <div class="">

            </div>
        </div>

        <div class="container-fluid">

            <div class="row-fluid">
                <?php include $page; ?>
                <div class="span2">

                </div>

                <div class="modal-footer">
                    <p>Copyright &copy; Hotel-Ino 2015</p>
                </div>
            </div>
        </div>

    </body>
</html>
