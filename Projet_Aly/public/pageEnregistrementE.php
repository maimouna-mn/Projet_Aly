<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
  <!-- <form action="Projet_Aly/index.html" method="POST"> -->
    <section class="h-100 bg-dark">
        
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="photo.png"
                      alt="Sample photo" class="img-fluid" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Enregistrement Eleve</h3>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m">Prenom</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n">Nom</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m1">Date de Naissance</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">Matricule</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Adresse</label>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Genre: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="option1" />
                          <label class="form-check-label" for="femaleGender">Feminin</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="option2" />
                          <label class="form-check-label" for="maleGender">Masculin</label>
                        </div>
      
                        <!-- <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="option3" /> -->
                          <!-- <label class="form-check-label" for="otherGender">Other</label> -->
                        <!-- </div> -->
      
                      </div>
      <div>
                      <div class="row">
                        <div class="col-md-6 mb-4">
      
                          <select class="select">
                            <option value="1">Classe</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                          </select>
      
                        </div>
                        <div class="col-md-6 mb-4">
      
                          <select class="select">
                            <option value="1">Annee</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                          </select>
      
                        </div>
                        <div class="col-md-6 mb-4">
      
      <select class="select ">
        <option value="1">Niveau</option>
        <option value="2">Option 1</option>
        <option value="3">Option 2</option>
        <option value="4">Option 3</option>
      </select>

    </div>
                        
                      </div>
      
                      <!-- <div class="form-outline mb-4">
                        <input type="text" id="form3Example9" class="form-control form-control-lg" /> -->
                        <!-- <label class="form-label" for="form3Example9">DOB</label> -->
                      <!-- </div> -->
<!--       
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example90" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example90">Pincode</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example99" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example99">Course</label>
                      </div> -->
<!--       
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example97" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example97">Email ID</label>
                      </div> -->
      
                      <div class="d-flex justify-content-end pt-3">
                        
                        <!-- <button type="button" class="btn btn-light btn-lg">Annuler</button> -->
                <a class="btn btn-primary btn1" href="listeEleve.php" role="button">Annuler</a>
                <button type="button" class="btn btn-warning btn-lg ms-2">Valider</button>



                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- </form> -->
</body>
</html>