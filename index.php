<?php
require_once 'config/config.php';
include('include/header.php');


$user = '';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    
} else {
    header('location: login.php');
}


?>
<div class="container">
    <h1>Welcome <?php echo $user->firstname ?>!</h1>
</div>
<?php include('include/footer.php') ?>