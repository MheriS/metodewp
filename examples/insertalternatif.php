<?php
include "config.php";
$nama = $_POST['name'];
$kode1 = $_POST['kode1'];

$sql="INSERT INTO alternatif (idalternatif, nmalternatif) values ('".$kode1."','".$nama."')";
$a=$koneksi->query($sql);
if($a === true){
?>
                <script language="JavaScript">
                    alert('Good! Input data alternatif berhasil ...');
                    document.location='./formalternatif.php';
                </script>
            <?php
}else{
echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
}
?>