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
            <div class = "prihlaseni">
                <div class="card-login">
                    <div class="card-body">
                        <h5 class="card-title-login display-5">Registrace</h5>               			
                        <div class="form-group">
                            <form name="f1" action="registrace.php" method="POST">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name">
                                            <label for="name">Jméno</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password" name="password">
                                            <label for="password">Heslo</label>
                                        </div>  
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password2" name="password2">
                                            <label for="password2">Heslo znovu</label>
                                        </div>                                                                
                                    </div> 
                                </div>
                                <div class = "tlacitko">
                                    <button type="submit" class="btn btn-dark odeslat">Odeslat</button>
                                </div>  
                            </form>                                             
                        </div>
                    </div>
                </div>
                <div class="message">
                    <?php
                        if (isset($_GET['message'])) 
                        {
                            $message = $_GET['message'];
                            echo "<p class='error-message'>$message</p>";
                        }
                    ?>
                </div>  
            </div>
	    </div>
	</body>
</html>