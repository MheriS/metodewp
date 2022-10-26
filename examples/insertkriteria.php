<?php
include "config.php";
$nama = $_POST['name'];

$sql="INSERT INTO kriteria (nmkriteria) values ('".$nama."')";
$a=$koneksi->query($sql);
if($a === true){
?>
                <script language="JavaScript">
                    alert('Good! Input data kriteria berhasil ...');
                    document.location='./formkriteria.php';
                </script>
            <?php
}else{
echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
}
?>