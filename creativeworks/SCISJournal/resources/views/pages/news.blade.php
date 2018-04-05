<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>SCIS Journal</title>
  <!-- link css -->
  <link rel="stylesheet" href="css/main.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/bootstrap-grid.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-reboot.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('')}}">SCIS Journal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/announcement')}}">Announcements<span class="sr-only"></span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="{{url('/news')}}">News Articles<span class="sr-only"></span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/internship')}}">Employment and Internship<span class="sr-only"></span></a>
      </li>
      <!-- <li class="nav-item dropdown"> -->
        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
          <!-- Programs -->
        <!-- </a> -->
        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown"> -->
          <!-- <a class="dropdown-item" href="#">Announcements</a> -->
          <!-- <a class="dropdown-item" href="#">News Articles</a> -->
          <!-- <a class="dropdown-item" href="#">Employment and Internship</a> -->
          <!-- <div class="dropdown-divider"></div> -->
          <!-- <a class="dropdown-item" href="#">Post your research here</a> -->
        <!-- </div> -->
      <!-- </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{url('/activities')}}">Upcoming Activities</a>
      </li>
    </ul>
  </div>
</nav>
<!-- end navbar -->

  <div class="container">
  
	<!-- first row -->
    <div class="row">
      <div class="col-sm-12 col-md-12 mt-5">
        <div class="card">
          <div class="card-header">
			News Article 1
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
    </div>
	<!-- end first row -->
	
    <!-- second row -->
    <div class="row mt-3">
      <div class="col-sm-12 col-md-12 mt-3">
        <div class="card">
          <div class="card-header">
            News Article 2
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
    </div>
    <!-- end second row -->
	
    <!-- third row -->
    <div class="row mt-3">
      <div class="col-sm-12 col-md-12 mt-3">
        <div class="card">
          <div class="card-header">
            News Article 3
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
    </div>
    <!-- end third row -->
	
    <!-- fourth row -->
    <div class="row mt-3">
      <div class="col-sm-12 col-md-12 mt-3 mb-5">
        <div class="card">
          <div class="card-header">
            News Article 4
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
    </div>
    <!-- end fourth row -->
	
  </div>
  
  <!-- footer -->
  <div class="container-fluid footer">

  </div>
  <!-- end footer -->

  <!-- Script bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Font awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
</body>
</html>
