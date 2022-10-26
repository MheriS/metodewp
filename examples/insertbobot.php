<?php
include "config.php";
$kriteria = $_POST['kriteria'];//harus diubah ke idkriteria dulu
$value=$_POST['value'];
$kode1=$_POST['kode1'];
$sql="INSERT INTO bobot (idbobot,idkriteria,value) values ('".$kode1."',(select idkriteria from kriteria where nmkriteria='$kriteria'),'".$value."')";
$a=$koneksi->query($sql);
if($a === true){
?>
                <script language="JavaScript">
                    alert('Good! Input data bobot berhasil ...');
                    document.location='./formbobot.php';
                </script>
            <?php
}else{
echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
}
?>