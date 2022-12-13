<?php require "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Weather API</title>
</head>

<body>
    <div class="container mt-5">
        <div class="mb-3">
            <?php if ($error) : ?>
                <div class="alert alert-danger"><?php echo $errorMsg; ?></div>
            <?php else :  ?>
                <h4><?php echo $info; ?></h4>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <div class=mb-3>
                <span class="text">Check today's weather!</span>
            </div>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Check</button>
            </form>
        </div>
    </div>

</body>

</html>