<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>  
		<title>Interní správa firmy - Domů</title>
		<script src="skript.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
		<!--<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/js/">		-->	
		<link rel ="stylesheet" href = "styl.css">			
				
	</head>
	<body>	
		<div class = "nadpis">
		<h1 class="display-2">Interní správa firmy</h1>
		
		</div>	
		<div class = "obal">		
			<div class = "menu">		
				<button onClick="zamestnanci()" class="btn btn-dark btn-flat">Zaměstnanci</button>
				<button onClick="dochazka()" class="btn btn-dark btn-flat">Docházka</button>
				<button onClick="majetek()" class="btn btn-dark btn-flat">Majetek</button>
				<button onClick="dovolena()" class="btn btn-dark btn-flat">Dovolená</button>
				<a href = "profil.php"><img src = "profil.png" class="profil"></a>
			</div>
			<div class = "obsah">
			<div class="card">
				<a href = "zamestnanci.html"><img src="zamestnanci.png" class="card-img-top"></a>
				<div class="card-body">
					<h5 class="card-title">Zaměstnanci</h5>
					<p class="card-text">Zobrazte si přehledný seznam všech zaměstnanců!</p>
				</div>
			</div>
			<div class="card">
				<a href = "dochazka.html"><img src="dochazka.png" class="card-img-top"></a>	
				<div class="card-body">
					<h5 class="card-title">Docházka</h5>
					<p class="card-text">Zkontrolujte, zda všichni poctivě dochází do práce!</p>
				</div>
			</div>
			<div class="card">
				<a href = "majetek.html"><img src="majetek.png" class="card-img-top"></a>	
				<div class="card-body">
					<h5 class="card-title">Majetek</h5>
					<p class="card-text">Spravujte majetek a jeho vlastnictví!</p>
				</div>
			</div>
			<div class="card">			
				<a href = "dovolena.html"><img src="dovolena.png" class="card-img-top"></a>	
				<div class="card-body">			
					<h5 class="card-title">Dovolená</h5>
					<p class="card-text">Dejte si oddych, vemte si dovolenou!</p>
				</div>
			</div>
			</div>
	</body>
</html>