<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>exercice_50A</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	
	<link rel="stylesheet" type="text/css" href="css/stylemenu.css">
</head>
<body>
	<div id="content">

	<header>
	<div id="titre">
		<img src="img/accroche.png" alt="">
	</div>
	<div id="stitre">
		<img src="img/logo-thoiry-baseline.png"alt="">
		
		<div class="topnav" id="myTopnav">

			<nav class="choix">
				<hr>
				<ul>
					<li class="who"><a href="#">vous etes :</a></li>
					<li><a href="#">Famille</a></li>
					<li><a href="#">Scolaires</a></li>
					<li><a href="#">Centre de loisirs</a></li>
					<li><a href="#">Groupes</a></li>
					<li><a href="#">Comité d'entreprise</a></li>
					<li><a href="#">Séminaires</a></li>
					<li><a href="#">FR</a></li>
					<li><a href="#"><i class="fas fa-search"></i></a></li>
				</ul>
				<hr>
			</nav>

			<nav class="menu">
				<ul>
					<li><a href="#"><i class="fa fa-home"></i></a></li>
					<li><a href="#">DECOUVRIR LE SAFARI</a></li>
					<li><a href="#">LOISIRS ET EVENEMENTS</a></li>
					<li><a href="#">PREPARER VOTRE VISITE</a></li>
					<li class="btnbuy"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ACHETEZ VOS BILLETS</a></li>
				</ul>
			</nav>
		</div>
<a href="javascript:void(0);" class="icon" onclick="toggleMenu()"><i class="fa fa-bars"></i></a>

		<div class="topnav" id="myTopnavResponsive">
			<ul id="menuVertical">
				<li class="who"><a href="#">vous etes :</a></li>
					<ul>
						<li><a href="#">Famille</a></li>
						<li><a href="#">Scolaires</a></li>
						<li><a href="#">Centre de loisirs</a></li>
						<li><a href="#">Groupes</a></li>
						<li><a href="#">Comité d'entreprise</a></li>
						<li><a href="#">Séminaires</a></li>
						<li><a href="#">FR</a></li>
					</ul>
			
			
				<li><a href="#"><i class="fas fa-search"></i></a></li>
				<li><a href="#">HOME</a></li>
				<li><a href="#">DECOUVRIR LE SAFARI</a></li>
				<li><a href="#">LOISIRS ET EVENEMENTS</a></li>
				<li><a href="#">PREPARER VOTRE VISITE</a></li>
				
			</ul>
		</div>
<div id="btn">
<li class="btnbuy"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ACHETEZ VOS BILLETS</a></li> 
</div> 
	<script>
function toggleMenu() {
    var x = document.getElementById("myTopnavResponsive");
    if (x.className == "topnav") {
        x.className = "topnavResponsive";
    } else {
        x.className = "topnav";
    }
}

window.addEventListener("resize", function(event){
	document.getElementById("myTopnavResponsive").className = "topnav"
})
</script>
</header>
 
<div id="formulaire">
<form action="menu.php" method="post" id="myForm">
<p>
    <input type="number" name="secondes" id="duree" value="5" />
    <input type="submit" value="Valider" />
</p>
</form> 
</div>
   

<div id="compteRebour_affiche" style="display: none"></div>
    <script type="text/javascript">

    	var form = document.getElementById("myForm")
    	var cr = document.getElementById("compteRebour_affiche")
    	

    	form.addEventListener("submit", function(event){
    event.preventDefault()
    var input = document.getElementById("duree")
    	var duree = input.value
    	if(duree < 1) {
    		input.focus()
    		input.className = "error"
    	}
    	else {
    		rebour(duree, this, cr)
    		
    		input.className = ""
    	}
});

    	var lancement = function(d) {
    		rebour(d)
    	}




</script>

<script src="js/compte.js"></script>

 </body>
</html>	
    
	<!--<div id="slider">
		<img src="img/image-carousel.jpg" alt="">

		<div id=textslider>
			<h2>JOURNEE INOUBLIABLE</h2>
			<li class="btnbuy"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ACHETEZ VOS BILLETS</a></li>
		</div>
	</div>
	</div>-->
	
