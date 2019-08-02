<?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site

$sortie=false;

// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['vote'])) {
	if ($_POST['vote']=='pour' or $_POST['vote']=='contre'){
		$fichierR = fopen('data/peineDeMort.txt','r');
		while (!feof($fichierR)){
			$a = explode(" ",  fgets($fichierR));	
		    	if ($a[0] == $_POST['login']) {
				$sortie=true;
			}
		}
		if ($sortie==false){
			file_put_contents('data/resultatPeineDeMort.txt', $_POST['vote']." "."\n", FILE_APPEND);
			file_put_contents('data/peineDeMort.txt', $_POST['login']." "."\n", FILE_APPEND);
		}
		else {
			echo '<body onLoad="alert(\'Vous avez déjà voter\')">';
			echo '<meta http-equiv="refresh" content="0;URL=index.html">';
		}
	}
	else {
			echo '<body onLoad="alert(\'Vote invalide\')">';
			echo '<meta http-equiv="refresh" content="0;URL=page_membre.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>