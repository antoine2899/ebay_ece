<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      

      
      <link rel="stylesheet" type="text/css" href="log.css">
   
  </head>
  <body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-log-tab" data-toggle="pill" href="#pills-log" role="tab" aria-controls="pills-log" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">register</a>
          </li>
        </ul>
      </div>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-log" role="tabpanel" aria-labelledby="pills-log-tab">
          <div class="modal-body">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email :" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Mot de passe :" name="mdp">
            </div>
            <button type="button" class="btn btn-info">Log in</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>

        </div>
        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nom :" name="name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Prénom :" name="surname">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email :" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Mot de passe :" name="mdp">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Confirmer :" name="mdpc">
            </div>
            <button type="button" class="btn btn-info">Register</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

</body>
</html>


