<html>
<head>
<title> Agora </title>
</head>

<body>

<TABLE cellspacing="0" cellpadding="0"">
<TR>
<TD VALIGN="right" ALIGN="left">
<img src="https://images-eu.ssl-images-amazon.com/images/I/21EAOCdUbKL._SX300_QL70_.jpg" alt="" height="450px" width="400px"  />
</TD>
<TD VALIGN="bottom" ALIGN="center">
<h6> <a href="BrProgramme.html ">Breton</a>
<a href="NoProgramme.html">Normand</a>
<a href="CoProgramme.html">Corse</a>
<a href="BaProgramme.html">Basque</a>
<a href="AnProgramme.html">Anglais</a> </h6>
<img src="https://cdn.discordapp.com/attachments/599371505247453234/603719279820537883/unknown.png">

    <?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();

    // On récupère nos variables de session
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    	// On teste pour voir si nos variables ont bien été enregistrées

    	echo '<br />';
    	echo 'Bievenue '.$_SESSION['login'].'.';
    	echo '<br />';
	echo '<h3> La peine de mort </h3>';
	echo '<form action="vote.php" method="post">';
	echo '<input type="hidden" name="login" value='.$_SESSION['login'].'>';
	echo 'Votre opinion (pour/contre) </br> <input type="text" name="vote"> <br />';
	echo '<input type="submit" value="vote">';
	echo '</form>';
    }
    else {
    	echo '</br> </br> Veuillez vous connecter.</br> </br> ';
    }
    ?>



<img src="https://cdn.discordapp.com/attachments/599371505247453234/603719785959784448/unknown.png">
</TD>
<TD VALIGN="top" ALIGN="right">
<img src="https://images-eu.ssl-images-amazon.com/images/I/21EAOCdUbKL._SX300_QL70_.jpg" alt="" height="450px" width="400px"  />
</TD>
</TR>
<TR>
<TD VALIGN="top" ALIGN="left">
<img src="https://images-eu.ssl-images-amazon.com/images/I/21EAOCdUbKL._SX300_QL70_.jpg" alt="" height="400px" width="400px"  />
</TD>
<TD VALIGN="top" ALIGN="left">
<script src="test.js" type="text/javascript"> </script>
<div class="c1" id="CollapsiblePanel1"><dd><img src="https://cdn.discordapp.com/attachments/599371505247453234/604341591674454017/unknown.png"></dd>
<dd style="overflow: hidden; display: none; height: 3px;">
 <h3> <ul> 
    <li> <a style="text-decoration:none" href="Adherer.html ">Devenir membre</a> </li>
    <li> <a style="text-decoration:none" href="espaceMembre.html">Espace membre </a> </li>
    <li> <a style="text-decoration:none" href="Journal.html ">Journal de l'Agora</a> </li>
    <li> <a style="text-decoration:none" href="Programme.html">Programme de l'Agora</a> </li> 
    <li> <a style="text-decoration:none" href="index.html">Accueil</a> </li> 
  </ul>
<ul> 
    <li> <a style="text-decoration:none" href="https://www.youtube.com/channel/UCzdCtjuk9ifS2nF7nCMez7w ">youtube</a> </li>
    <li> <a style="text-decoration:none" href="https://www.instagram.com/mouvement_agora">instagram</a> </li>
    <li> <a style="text-decoration:none" href="https://t.me/joinchat/MTLWpRM3keBQrRiKCoJd9A">telegram</a> </li>
    <li> <a style="text-decoration:none" href="https://twitter.com/AgoraMouvement">twitter</a>  </li> 
    <li> <a style="text-decoration:none" href="https://discord.gg/EQcfyY">discord</a>  </li> 
  </ul> </h3>
  <script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");//--> </script>
</dd>
</div>
<TD VALIGN="top" ALIGN="right">
<img src="https://images-eu.ssl-images-amazon.com/images/I/21EAOCdUbKL._SX300_QL70_.jpg" alt="" height="400px" width="400px"  />
</TD>
</TR>
</TABLE>
</body>
</html>
