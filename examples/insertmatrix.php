<?php
include "config.php";
$alternatif = $_POST['alternatif'];
$bobot = $_POST['bobot'];//harus diubah ke idkriteria dulu
$nilai=$_POST['nilai'];
$kode1=$_POST['kode1'];
$sql="INSERT INTO matrixkeputusan (idmatrix,idalternatif,idbobot,nilai) values ('".$kode1."',(select idalternatif from alternatif where nmalternatif='$alternatif'),'".$bobot."','".$nilai."')";
$a=$koneksi->query($sql);
if($a === true){
?>
                <script language="JavaScript">
                    alert('Good! Input data matrix berhasil ...');
                    document.location='./formmatrix.php';
                </script>
            <?php
}else{
echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
}
?>