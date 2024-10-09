<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from link_vidio where kode_link='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>


<h3> Tambah Link</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130"> Kode Link </td>
            <td><input type="text" name="kode_link" value="<?php echo $data['kode_link']; ?>"></td>
        </tr>
        <tr>
            <td> Link Video </td>
            <td><input type="text" name="link_vidio" value="<?php echo $data['link_vidio']; ?>"></td>
        </tr>
        <tr>
            <td> Hari Pengiriman Video </td>
            <td><input type="date" name="hari_pengiriman" value="<?php echo $data['hari_pengiriman']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update link_vidio set
    link_vidio= '$_POST[link_vidio]',
    hari_pengiriman= '$_POST[hari_pengiriman]'
    where kode_link = '$_GET[kode]'");

    echo "Data link baru telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='data-link.php'>";    
}

?>

<style>
body {
    font-family: Arial, sans-serif;
    background-image: url('vidio_gambar/Honor-of-Kings-Nabs-Users-Choice-Award-2023-on-the-Brazilian-Google-Play-Store.jpg');
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    margin: 0;
    padding: 20px;
}

.container {
    background-color: rgba(255, 255, 255, 0.9); 
    padding: 15px; 
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    max-width: 400px; 
    margin: auto; 
    width: 90%; 
}

h3 {
    text-align: center;
    color: blue; 
}

table {
    width: 100%;
    margin-top: 20px;
}

td {
    padding: 10px; 
}

td:first-child {
    color: white; 
}

input[type="text"],
input[type="date"] {
    width: calc(100% - 12px); 
    padding: 8px; 
    border: 1px solid #ccc; 
    border-radius: 4px; 
    background-color: whitesmoke;
    color: black; 
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white; 
    border: none;
    padding: 10px;
    border-radius: 4px; 
    cursor: pointer; 
}

input[type="submit"]:hover {
    background-color: #45a049; 
}

.success {
    color: green; 
    text-align: center;
}

.error {
    color: red; 
    text-align: center;
}


@media (max-width: 600px) {
    .container {
        padding: 10px;
    }

    input[type="text"],
    input[type="date"] {
        padding: 6px;
    }

    input[type="submit"] {
        padding: 8px;
    }
}

</style>