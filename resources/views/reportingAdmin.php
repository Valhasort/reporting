<!DOCTYPE html>
<html>
<head>
	<?php include 'library.php'; ?>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>TEST</title>
</head>
<header>
	<nav  id="firstNavbar" class="navbar navbar-default" role="navigation">
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="#"><img id="logoHeader" src="../img/logo-hh.png"></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://www/stage/projet/local/reporting/"><button id="btLogout" type="button" class="btn btn-primary text-center">Logout</button></a></li>
			</ul>
		</div>
	</nav>
	<nav id="secondNavBar" class="navbar navbar-default" role="navigation">
		<div class="navbar-header"> 
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="http://www/stage/projet/local/reporting/admin">Choix Client</a></li>
				<li><a href="http://www/stage/projet/local/reporting/admin/reporting">Reporting</a></li>
				<li><a href="http://www/stage/projet/local/reporting/admin/action">Actions</a></li>
			</ul>
		</div>
	</nav>
</header>
<body>	
	<div class="container" style="width:100%; height:100%; position:fixed; left:0;overflow:hidden;" >
		<div class="row">
			<!-- partie de gauche -->
			<div id="a" class="col-md-6 text-center scroll"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>


			<!-- partie de droite -->
			<div id="b" class="col-md-6 text-center scroll">
				<form action="#">
					<!-- Introduction -->
					<label for="introduction">Introduction:</label>
					<textarea class="form-control" rows="3" id="intro"></textarea>
					<br>
					<div class="row-fluid">
						<div class="panel panel-default panel-table">
							<div class="panel-body">
								<table class="table table-striped table-bordered table-list">
									<tbody>
										<tr class="accordion-toggle">
											<td data-toggle="collapse" data-target="#collapseOne" class="hidden-xs">Wordpress</td>
										</tr>
										<tr>
											<td colspan="1">
												<div id="collapseOne" class="collapse out text-center">
													Résultats
												</div>	
											</td>
										</tr>
										<tr class="accordion-toggle">
											<td data-toggle="collapse" data-target="#collapseTwo" class="hidden-xs">Prestashop</td>
										</tr>
										<tr>
											<td colspan="1">
												<div id="collapseTwo" class="collapse out text-center">
													Résultats
												</div>	
											</td>
										</tr>
										<tr class="accordion-toggle">
											<td data-toggle="collapse" data-target="#collapseThree" class="hidden-xs">Facebook</td>
										</tr>
										<tr>
											<td colspan="1">
												<div id="collapseThree" class="collapse out text-center">
													Résultats
												</div>	
											</td>
										</tr>
										<tr class="accordion-toggle">
											<td data-toggle="collapse" data-target="#collapseFour" class="hidden-xs">Google Analytics</td>
										</tr>
										<tr>
											<td colspan="1">
												<div id="collapseFour" class="collapse out text-center">
													Résultats
												</div>	
											</td>
										</tr>
										<tr class="accordion-toggle">
											<td data-toggle="collapse" data-target="#collapseFive" class="hidden-xs">Twitter</td>
										</tr>
										<tr>
											<td colspan="1">
												<div id="collapseFive" class="collapse out text-center">
													Résultats
												</div>	
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<label for="introduction">Conclusion:</label>
						<textarea class="form-control" rows="3" id="conclusion"></textarea>
						<br>
						 <button type="submit" class="btn btn-default">Envoyer</button>		
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>

