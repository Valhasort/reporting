<!DOCTYPE html>
<html>
<head>
	<?php include 'library.php'; ?>
	<title>TEST</title>
</head>
s
<body>	

	<div class="container" style="width:100%; height:100%; position:fixed; left:0;overflow:hidden;" >
		<div class="row">
			<!-- partie de gauche -->
			<div id="a" class="col-md-6 text-center scroll">
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
				</div>
			</div>
			<!-- partie de droite -->
			<div id="b" class="col-md-6 text-cente scroll">
				<form>
					<p><label>Sources concerné</label></p>
					<p><input class="form-control" type="text" name="demande" placeholder="demande"></p>
					<p><label>Sources concerné</label></p>
					<p><input class="form-control" type="text" name="demande" placeholder="demande"></p>
					<p><label>Sources concerné</label></p>
					<p><input class="form-control" type="text" name="demande" placeholder="demande"></p>
					<div class="row text-center"><p><button type="submit" class="btn btn-default text-center">Envoyer</button></p></div>
				</form>
			</div>
		</div>
	</div>	
</body>
</html>

