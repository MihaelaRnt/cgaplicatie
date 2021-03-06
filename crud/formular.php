<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular inregistrare utilizatori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
  <!-- Content here -->
     <h1> Formular inregistrare</h1>
     <form method = "post" action=""  class="row g-3 needs-validation" novalidate>
         <div class="col-md-12">
             <label for="validationCustom01" class="form-label">Prenume</label>
             <input name="prenume" type="text" class="form-control" id="validationCustom01" value="" required>
             <div class="valid-feedback">
             Camp completat corect.
             </div>
         </div>
         <div class="col-md-12">
             <label for="validationCustom02" class="form-label">Nume</label>
             <input name="nume" type="text" class="form-control" id="validationCustom02" value="" required>
             <div class="valid-feedback">
             Camp completat corect.
             </div>
         </div>
         <div class="col-md-12">
             <label for="validationCustom03" class="form-label">Email</label>
             <input name="email" type="email" class="form-control" id="validationCustom03" value="" required>
             <div class="valid-feedback">
             Camp completat corect.
             </div>
         </div>
         <div class="col-md-12">
             <label for="validationCustom04" class="form-label">Parola</label>
             <input name="parola" type="password" class="form-control" id="validationCustom04" value="" required>
             <div class="valid-feedback">
             Camp completat corect.
             </div>
         </div>
         <div class="col-md-12">
             <label for="validationCustom05" class="form-label">Data nastere</label>
             <input name="datanastere" type="date" class="form-control" id="validationCustom05" value="" required>
             <div class="valid-feedback">
             Camp completat corect.
             </div>
         </div>




         

  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>