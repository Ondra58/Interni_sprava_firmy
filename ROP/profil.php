<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>  
		<title>Interní správa firmy - Můj profil</title>
		<script src="skript.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
		<!--<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/js/">		-->	
		<link rel ="stylesheet" href = "styl.css">			
	</head>
	<body>
		<div class = "nadpis">
		<h1 class="display-2">Můj profil</h1>
		
		</div>	
		<div class = "obal">		
			<div class = "menu">	
				<button onClick="domu()" class="btn btn-dark btn-flat">Domů</button>
				<button onClick="zamestnanci()" class="btn btn-dark btn-flat">Zaměstnanci</button>
				<button onClick="dochazka()" class="btn btn-dark btn-flat">Docházka</button>
				<button onClick="majetek()" class="btn btn-dark btn-flat">Majetek</button>
				<button onClick="dovolena()" class="btn btn-dark btn-flat">Dovolená</button>
				<a href = "profil.php"><img src = "profil.png" class="profil"></a>
			</div>
			<div class = "obsah obsah5">
				<div class = "udaje">
					<div class = "nadpis-udaje">
						<h6 class = "display-6">Údaje</h6>
					</div>
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td>Jméno:</td>
								<td>
									<?php
										$prihlasenyuzivatel = isset($_SESSION['prihlasenyuzivatel']) ? $_SESSION['prihlasenyuzivatel'] : '';
										echo $prihlasenyuzivatel;
									?>
								</td>
							</tr>
							<tr>
								<td>
									Email:
								</td>
							</tr>
							<tr>
								<td>
									Role:
								</td>
							</tr>
							<tr>
								<td>
									Zařazení:
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>