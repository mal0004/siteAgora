    <?php
    // On d�finit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez tr�s bien interroger votre base de donn�es afin de savoir si le visiteur qui se connecte est bien membre de votre site


    // on teste si nos variables sont d�finies
    if (isset($_POST['login']) && isset($_POST['pwd'])) {
	$fichierR = fopen('data/comptes.txt','r');
    	// on v�rifie les informations du formulaire, � savoir si le pseudo saisi est bien un pseudo autoris�, de m�me pour le mot de passe
	while (!feof($fichierR)){
		$a = explode(" ",  fgets($fichierR));	
	    	if ($a[0] == $_POST['login'] && $a[1] == $_POST['pwd']) {
    			// dans ce cas, tout est ok, on peut d�marrer notre session
	
	    		// on la d�marre :)
	    		session_start ();
	    		// on enregistre les param�tres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
	    		$_SESSION['login'] = $_POST['login'];
	    		$_SESSION['pwd'] = $_POST['pwd'];
	
    			// on redirige notre visiteur vers une page de notre section membre
	    		header ('location: page_membre.php');
	    	}
	}
	fclose($fichierR);
    	
    	// Le visiteur n'a pas �t� reconnu comme �tant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
    	echo '<body onLoad="alert(\'Membre non reconnu...\')">';
    	// puis on le redirige vers la page d'accueil
    	echo '<meta http-equiv="refresh" content="0;URL=index.html">';
    	
}
    else {
    	echo 'Les variables du formulaire ne sont pas d�clar�es.';
    }
    ?>