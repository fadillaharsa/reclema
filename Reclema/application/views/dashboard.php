<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">

<title>Dashboard Template for Bootstrap</title>


<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/dashboard.css');?>" rel="stylesheet">
</head>

<body>
<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Dashboard</a>
<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Settings</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Profile</a>
</li>


<?php if($this->session->userdata('user_has_login') == true ){?>
<li class="nav-item">
<a class="nav-link" href="#"><?php echo $this->session->userdata('user_username')?></a>
</li>
<?php } else {?>
<li class="nav-item">
<a class="nav-link" href="#">Help</a>
</li>
<?php } ?>

<li class="nav-item">
<a class="nav-link" href="<?php echo $logout_url;?>">Sign Out</a>
</li>
</ul>
<form class="form-inline mt-2 mt-md-0">
<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
</header>

<div class="container-fluid">
<div class="row">
<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
<ul class="nav nav-pills flex-column">
<li class="nav-item">
<a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Reports</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Analytics</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Export</a>
</li>
</ul>

<ul class="nav nav-pills flex-column">
<li class="nav-item">
<a class="nav-link" href="#">Nav item</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Nav item again</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">One more nav</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Another nav item</a>
</li>
</ul>

<ul class="nav nav-pills flex-column">
<li class="nav-item">
<a class="nav-link" href="#">Nav item again</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">One more nav</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Another nav item</a>
</li>
</ul>
</nav>

<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
<h1>Dashboard</h1>

<section class="row text-center placeholders">
<div class="col-6 col-sm-3 placeholder">
<img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
<h4>Label</h4>
<div class="text-muted">Something else</div>
</div>
<div class="col-6 col-sm-3 placeholder">
<img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
<h4>Label</h4>
<span class="text-muted">Something else</span>
</div>
<div class="col-6 col-sm-3 placeholder">
<img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
<h4>Label</h4>
<span class="text-muted">Something else</span>
</div>
<div class="col-6 col-sm-3 placeholder">
<img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
<h4>Label</h4>
<span class="text-muted">Something else</span>
</div>
</section>

<h2>Section title</h2>
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>#</th>
<th>Header</th>
<th>Header</th>
<th>Header</th>
<th>Header</th>
</tr>
</thead>
<tbody>
<tr>
<td>1,001</td>
<td>Lorem</td>
<td>ipsum</td>
<td>dolor</td>
<td>sit</td>
</tr>

<tr>
<td>1,015</td>
<td>sodales</td>
<td>ligula</td>
<td>in</td>
<td>libero</td>
</tr>
</tbody>
</table>
</div>
</main>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->


<script src="<?php echo base_url('assets/jquery-3.2.1.slim.min.js');?>"></script>
<script src="<?php echo base_url('assets/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap.min.js');?>"></script>
</body>
</html>