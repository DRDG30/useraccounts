<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>


    <div>
        <?php

        if (isset($_POST['register'])) {
            $firstname   = $_POST['firstname'];
            $lastname    = $_POST['lastname'];
            $email       = $_POST['email'];
            $password    = $_POST['password'];

            echo $firstname . " " . $lastname . " " . $email . " " . $password;

        }

        ?>
    </div>


    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Registration</h1>
                    <p>Fill up the form with correct values.</p>

                    <label for="firstname">First Name</label>
                    <input class="form-control" type="text" name="firstname" required>

                    <label for="lastname">Last Name</label>
                    <input class="form-control" type="text" name="lastname" required>

                    <label for="email">Email Address</label>
                    <input class="form-control" type="email" name="email" required>

                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" required>

                    <input class="btn btn-primary btn-block mt-3" type="submit" name="register" value="Register">
                </div>
            </div>
        </div>
    </form>


</body>

</html>