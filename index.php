
<?php
	include 'quote.php';
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<div class="d-flex justify-content-center align-items-center p-3 mb-2 bg-info text-white"></div>
<div class="container d-flex justify-content-center align-items-center p-10" id="emon">
  <!-- Content here -->
  <div class="card " style="width: 25rem;" >
  <div class="card-body">
    <h5 class="card-title">ঊক্তি</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php  print_r($jsonArray[$id][1]);

?></h6>
    <p class="card-text">- <?php print_r($jsonArray[$id][2])?></p>
 <br>
 <?php echo $id?>
  </div>
</div>
</div>


<br>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>



