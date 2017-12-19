<!DOCTYPE html>
<html>
<head>
	<?php include 'library.php'; ?>
	<title>TEST</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
				<li><a href="http://www/stage/projet/local/reporting/client">Reporting</a></li>
				<li><a href="http://www/stage/projet/local/reporting/client/action">Actions</a></li>
			</ul>
		</div>
	</nav>
</header>
<body>	
	<div class="container flex-center" style="width:100%; height:100%; position:fixed; left:0;overflow:hidden;" >
		<div class="row">
			<div class="col-md-12">
				<div class="container text-center flex-center">
					<div class="row">
						<div class="panel panel-default panel-table">
							<div class="panel-heading">
								<div class="row">
									<div class="col col-xs-6">
										<h3 class="panel-title text-right">Reporting</h3>
									</div>
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-striped table-bordered table-list">
									<thead>
										<tr>
											<th><em class="fa fa-cog"></em></th>
											<th class="hidden-xs">ID</th>
											<th>Préconisations</th>
											<th>Date début</th>
											<th>Date mise a jour</th>
											<th>Etat</th>
										</tr> 
									</thead>
									<tbody>
										<tr class="accordion-toggle">
											<td align="center">
												<a class="btn btn-default"><em class="fa fa-pencil"></em></a>
											</td>
											<td data-toggle="collapse" data-target="#collapseOne" class="hidden-xs">1</td>
											<td data-toggle="collapse" data-target="#collapseOne">Ajoutez le nombre de vue de la boutique</td>
											<td data-toggle="collapse" data-target="#collapseOne">31/03/2017</td>
											<td data-toggle="collapse" data-target="#collapseOne">18/12/2017</td>
											<td data-toggle="collapse" data-target="#collapseOne">
												<select id="select">
													<option value="valeur1">En cour</option> 
													<option value="valeur2" selected>Non débuté</option>
													<option value="valeur3">Fini</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="6">
												<div id="collapseOne" class="collapse out text-center">
													Résultats
												</div>	
											</td>
										</tr>
										<tr class="accordion-toggle">
											<td align="center">
												<a class="btn btn-default"><em class="fa fa-pencil"></em></a>
											</td>
											<td data-toggle="collapse" data-target="#collapseTwo" class="hidden-xs">1</td>
											<td data-toggle="collapse" data-target="#collapseTwo">Ajoutez le nombre de vue de la boutique</td>
											<td data-toggle="collapse" data-target="#collapseTwo">31/03/2017</td>
											<td data-toggle="collapse" data-target="#collapseTwo">18/12/2017</td>
											<td data-toggle="collapse" data-target="#collapseTwo">
												<select id="select">
													<option value="valeur1">En cour</option> 
													<option value="valeur2" selected>Non débuté</option>
													<option value="valeur3">Fini</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="6">
												<div id="collapseTwo" class="collapse out text-center">
													Résultats
												</div>	
											</td>
										</tr>
									</tbody>
								</table>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>