<?php
include "config.php";
$nmkriteria = $_GET['nmkriteria'];
if(isset($nmkriteria)){
        $sql ="DELETE FROM `kriteria` WHERE  `nmkriteria`='$nmkriteria'";
        $a = $koneksi->query($sql);
    if($a === true){
            ?>
                <script language="JavaScript">
                    alert('Good! Hapus data kriteria berhasil ...');
                    document.location='./tables.php';
                </script>
            <?php
   }else{
            echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
   }
}
?>