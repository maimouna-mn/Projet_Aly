<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
 <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <!-- <form action="pageEnregistrementE.php" method="POST"> -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="listeEleve.php">Enregistrement Eleve</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listeModule.php">Enregistrement Module</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listeClasse.php">Enregistrement Classe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listeAnnee.php">Enregistrement Annee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="niveauEtude.php">niveau Etude</a>
        </li>
          <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    
<!-- <div class="a">
<select class="form-select" aria-label="Default select example">
  <option selected>Selectionner une classe</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<a class="btn btn-primary btn1" href="pageEnregistrementE.php" role="button">Ajouter</a>
		  </div> -->
<!-- <button type="submit" class="btn1">Ajouter</button> -->
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
							<th><span>Code</span></th>
							<th><span>Description</span></th>
							
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<a href="#" class="user-link">Vocabulaire</a>
							</td>
							<td>
							VOC
							</td>
							
							</td>
                            <td style="width: 20%;">
								<a href="#" class="table-link">
									<span class="fa-stack">
										<!-- <i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i> -->
									</span>
								</a>
								<a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="#" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#" class="user-link">Ecriture</a>
							</td>
							<td>
							ECR
							</td>
							<td style="width: 20%;">
								<a href="#" class="table-link">
									<span class="fa-stack">
										<!-- <i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i> -->
									</span>
								</a>
								<a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="#" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</td>
							</td>
                            
						</tr>
                        <tr>
							<td>
								<a href="#" class="user-link">Vocabulaire</a>
							</td>
							<td>
							VOC
							</td>
							<td style="width: 20%;">
								<a href="#" class="table-link">
									<span class="fa-stack">
										<!-- <i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i> -->
									</span>
								</a>
								<a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="#" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</td>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>
</div>
<!-- </form> -->
</body>
</html>