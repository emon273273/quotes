<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>

    <?php
   

    ?>


    <div class="container">

        <div class="row">

            <div class="column column-60 column-offset-20">

                <h2>out first form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint tempora omnis, deleniti molestias sequi optio consectetur reiciendis vitae quos dignissimos libero rem placeat repellendus perferendis perspiciatis, repudiandae tenetur voluptas dolore.</p>


                <p>
                    <?php  if(isset($_POST['fname']) &&!empty($_POST["fname"])):?>
                    First Name: <?php  echo $_POST['fname']?> <br/>
                    <?php  endif?>

                    <?php  if(isset($_POST['lname']) &&!empty($_POST['lname'])):?>
                    Last Name: <?php  echo $_POST['lname']?>
                    <?php  endif?>
                </p>
            </div>
        </div>

        <div class="row">

            <div class="column column-60 column-offset-20">

                <form method="POST">

                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                    <button type="submit"> submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>