<?php
$signup = false;
if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['age']) and isset($_POST['dob']) and isset($_POST['address']) and isset($_POST['qual'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $qual = $_POST['qual'];
    if (($echeck = User::everify($email))) {
        $error = User::regis($name, $email, $age, $dob, $address, $qual);
    }
    $signup = true;
}
if ($signup) {

    if ($error) {
?>
        <main class="container">
            <div class="bg-light p-5 rounded mt-3">
                <h1>Your Registration Success</h1>
                <p class="lead">Now you Go to Userform <a href="index.php">here</a>.
                </p>

            </div>
        </main>
    <?php
    } else {
    ?>
        <script>
            window.location.href = "/reg.php?error=1"
        </script>
    <?php
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user registration form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="_templates/assets/dist/css/regi.css" rel="stylesheet">
    </head>

    <body>
        <main class="form-signup">
            <form method="post" action="reg.php">
                <img class="mb-4" src="https://git.selfmade.ninja/uploads/-/system/appearance/logo/1/Logo_Dark.png" alt="" height="50">
                <h1 class="h3 mb-4 mw-normal">User Registration Form</h1>
                <?
                if (isset($_GET['error'])) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        Invalid Credentials
                    </div>
                <?
                }
                ?>
                <div class="form-floating">
                    <input name="name" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com" required>
                    <label for="floatingInputUsername">Name</label>
                </div>
                <div class="form-floating">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" require>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input name="age" type="number" class="form-control" id="floatingInputUsername" placeholder="name@example.com" required>
                    <label for="floatingInputUsername">age</label>
                </div>
                <div class="form-floating">
                    <input name="dob" type="date" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">date of birth</label>
                </div>
                <div class="form-floating">
                    <input name="address" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">address</label>
                </div>
                <div class="form-floating mb-1">
                    <input name="qual" type="text" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">qualification</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary hvr-grow-rotate" type="submit">Sign up</button>
            </form>
        </main>
    </body>

    </html>
<?php
}
?>


<!--
     <main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Check Your Email</h1>
		<p class="lead">Retry Again <a
				href="reg.php">here</a>.
		</p>
        </div>
</main>
-->