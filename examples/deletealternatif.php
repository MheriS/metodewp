<?php
include "config.php";
$nmalternatif = $_GET['nmalternatif'];
if(isset($nmalternatif)){
        $sql ="DELETE FROM `alternatif` WHERE  `nmalternatif`='$nmalternatif'";
        $a = $koneksi->query($sql);
    if($a === true){
            ?>
                <script language="JavaScript">
                    alert('Good! Hapus data alternatif berhasil ...');
                    document.location='./tables.php';
                </script>
            <?php
   }else{
            echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
   }
}
?>