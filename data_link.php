<div class="container">
<h3> Data Link Vidio </h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Vidio</th>
        <th>Link Vidio</th>
        <th>Hari Pengiriman</th>
        <th colspan="2">DU</th>
    </tr>
    <?php
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from link_vidio");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[kode_link]</td>
            <td>$tampil[link_vidio]</td>
            <td>$tampil[hari_pengiriman]</td>
            <td><a href='?kode=$tampil[kode_link]'> Hapus </a></td>
            <td><a href='link_vidio_ubah.php?kode=$tampil[kode_link]'>Ubah</a></td>
        </tr>";
        $no++;
    }
    ?>

</table>
</div>
<?php
if(isset($_GET['kode'])){
   
mysqli_query($koneksi, "delete from link_vidio where kode_link='$_GET[kode]'");
echo "Data telah terhapus";
echo "<meta http-equiv=refresh content=2;URL='data-link.php'>";    

}

?>


<style>
body {
    background-image: url('vidio_gambar/honor.jpeg'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    height: 100vh; 
    overflow: auto; 
}


.container {
    max-width: 1200px; 
    margin: 0 auto; 
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9); 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
}



h3 {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

a {
    text-decoration: none;
    color: blue;
}

a:hover {
    text-decoration: underline;
}

@media screen and (max-width: 600px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }
    
    th {
        display: none; 
    }

    tr {
        margin-bottom: 15px;
    }

    td {
        text-align: right;
        position: relative;
        padding-left: 50%;
    }

    td::before {
        content: attr(data-label); 
        position: absolute;
        left: 10px;
        width: 45%;
        padding-left: 10px;
        text-align: left;
        font-weight: bold;
    }
}

</style>