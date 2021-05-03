<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validacija</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center">
    <h2>Form validacija</h2>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-6 offset-3">
    <form action="validate.php" method="post">
    <input type="username" name="username" placeholder="username" class="form-control"> <br>
    <input type="email" name="email" placeholder="email" class="form-control"> <br>
    <select name="year">
    <?php for($i = 1965;$i<2005;$i++): ?>
    <option value="<?php echo $i; ?>">Year of birth <?php echo $i; ?></option>
    <?php endfor; ?>
    </select>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female <br><br>
    <p>Programming languages</p>
    <input type="checkbox" name="languages[]" value="php"> Php
    <input type="checkbox" name="languages[]" value="js"> Js
    <input type="checkbox" name="languages[]" value="Java"> Java
<button type = "submit" name="subBtn" class="btn btn-info form-control">Save</button>

    </form>
    </div>
    </div>
    </div>
</body>
</html>