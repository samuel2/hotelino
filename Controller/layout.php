<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title>HotelINO - <?php echo $titre; ?> </title>
    </head>
    <body>
        <table border="1" width="80%" align="center" >
            <tr>
                <td colspan="2" height="150" ></td>
            </tr>
            <tr>
                <td colspan="2" height="20"></td>
            </tr>
            <tr>
                <td class="sidebar-left" height="400" width="20%">
                    <div class="module-sb cat">
                        <ul>
                            <li><a href="index.php?action=listclient">Client</a></li>
                            <li><a href="index.php?action=listchambre">Chambre</a></li>
                            <li><a href="index.php?action=listreservation">Reservation</a></li>
                            <li><a href="index.php?action=listcoccupant">Occupant</a></li>
                            <li><a href="index.php?action=listreglement">Reglement</a></li>
                            <li><a href="index.php?action=listreceptionniste">Receptionniste</a></li>
                        </ul>
                    </div>
                </td>
                <td class="contener">
                    <?php include $page; ?>
                </td>
            </tr>
            <tr>
                <td id="footer-bar" height="30" colspan="2">
                    <p id="copyright">Copyright Hotelino 2015</p>
                </td>
            </tr>
        </table>
    </body>
</html>
