<!DOCTYPE html>
<html>
<head>
	<title>Movie Data</title>

	  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

	<div class="container" style="margin-top: 50px;">
		<ul class="list-group">
  <li class="list-group-item active">Movie Name: <?php echo $_POST['moviename'] ?></li>
  <li class="list-group-item">Producer Name: <?php echo $_POST['movieproducer'] ?></li>
  <li class="list-group-item">Movie Duration: <?php echo $_POST['movieDuration'] ?></li>
  <li class="list-group-item">Rating: <?php echo $_POST['movierating'] ?></li>
  <li class="list-group-item">Booking date: <?php echo $_POST['moviedate'] ?></li>
  <li class="list-group-item">Movie Shop Email: <?php echo $_POST['movieshopemail'] ?></li>
</ul>
		
	</div>

</body>
</html>