<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if(isset($_POST['submit'])){

   $address = $_POST['jln'] .', '.$_POST['no'].', '.$_POST['rt/rw'].', '.$_POST['kel'] .', '. $_POST['kec'] .', '. $_POST['kota'] .', '. $_POST['prov'] .' - '. $_POST['kode'];
   // $address = filter_var($address, FILTER_SANITIZE_STRING);

   $update_address = $conn->prepare("UPDATE `users` set address = ? WHERE id = ?");
   $update_address->execute([$address, $user_id]);

   $message[] = 'address saved!';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update address</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php' ?>

<?php
if(!isset($_POST['submit'])) {
   ?>
<section class="form-container">

<form action="update_address.php" method="post">
   <h3>alamat anda</h3>
   <input type="text" class="box" placeholder="nama jalan" required maxlength="50" name="jln">
   <input type="text" class="box" placeholder="nomor rumah" required maxlength="10" name="no">
   <input type="text" class="box" placeholder="RT/RW" required maxlength="10" name="rt/rw">
   <input type="text" class="box" placeholder="nama kelurahan" required maxlength="50" name="kel">
   <input type="text" class="box" placeholder="nama kecamatan" required maxlength="50" name="kec">
   <input type="text" class="box" placeholder="kota" required maxlength="50" name="kota">
   <input type="text" class="box" placeholder="provinsi" required maxlength="50" name="prov">
   <input type="text" class="box" placeholder="kode pos" required maxlength="5" name="kode">
   <input type="submit" value="save address" name="submit" class="btn">
</form>

</section>
<?php }?>










<?php include 'components/footer.php' ?>






<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>