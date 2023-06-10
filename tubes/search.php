<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>search</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<!-- search form section starts  -->

<section class="search-form">
   <form method="post" action="">
      <input type="text" id="keyword" name="keyword" placeholder="search here..." class="box">
      <button type="button" name="search_btn" class="fas fa-search"></button>
   </form>
</section>

<!-- search form section ends -->


<section class="products" style="min-height: 100vh; padding-top:0;">
<div class="box-container" id="searchContainer">
</div>
</section>
<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->
<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
   const keyword = document.getElementById('keyword');
   const searchContainer = document.getElementById('searchContainer');
   keyword.onkeyup = function() {
      // console.log(keyword.value);
      fetch("ajax_search.php?keyword="+keyword.value)
      .then((response)=>response.text())
      .then((text)=>(searchContainer.innerHTML=text));
   }
</script>

</body>
</html>