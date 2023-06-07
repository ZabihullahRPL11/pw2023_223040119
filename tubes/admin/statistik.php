<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>placed orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php' ?>
 
<section class="statistik">
    <h1 class="heading">
        STATISTIK
    </h1>
    <div class="box-container">
        <div class="box-fluid" id="printable">
            <h3 class="heading">Laporan Pesanan Harian</h3>
        <table class="table" cellpadding="1">
            <thead>
                <tr>
                    <th class="py-10">Tanggal</th>
                    <th class="py-10">Jumlah</th>
                    <th class="py-10">Total</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $query = $conn->prepare("SELECT placed_on as tanggal,count(*) as jumlah,sum(total_price) as total FROM resto_db.orders GROUP BY placed_on");
            $query->execute();
            $grand = 0;
            $item = 0;
            while($row=$query->fetch(PDO::FETCH_ASSOC)) {
                $total = number_format($row['total']);
                $grand +=$row['total'];
                $item+=$row['jumlah'];
                echo "<tr><td>{$row['tanggal']}</td><td align='center'>{$row['jumlah']}</td><td align='right'>Rp $total</td></tr>";
            }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>TOTAL</th>
                    <td align="center"><?php echo number_format($item)?></td>
                    <td align="right">Rp. <?php echo number_format($grand)?></td>
                </tr>
            </tfoot>
        </table>
        
        </div>
        <button class="btn" id="cetak">Cetak</button>
    </div>
</section>
<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>
<script>
const element = document.getElementById("cetak");
element.addEventListener("click", function() {
  printDiv('printable');
});
</script>
</body>
</html>