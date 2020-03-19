<?php
require_once('plugins/fb/config.php');
require_once('plugins/google/config.php');

$redirectTo = "http://et-exam.herokuapp.com/?page=products";
$data = ['email'];
$fullURL = $handler->getLoginUrl($redirectTo, $data);
// $loginURL = $gClient->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="assets/scripts/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/scripts/popper.min.js"></script>
    <script type="text/javascript" src="assets/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/scripts/scripts.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <div class="row m-5" align="center">
            <div class="col-12">
                <button class="btn btn-primary" type="button" onclick="window.location = '<?php echo $fullURL ?>'">
                    <img src="assets/icons/feathericons/facebook.svg" alt="">
                    Facebook
                </button>
                <button class="btn btn-danger" type="button" onclick="window.location = '<?php echo $loginURL ?>'">
                    <img src="assets/icons/feathericons/mail.svg" alt="">
                    Gmail
                </button>
            </div>
        </div>
    </div>
</body>

</html>