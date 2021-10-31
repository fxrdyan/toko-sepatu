<html>

<head>
    <title>Toko Sepatu Ferdyan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
    <center>
        <div class="container">
        <center><h2>Toko Sepatu Ferdyan</h2></center>
            <label for="nama" >Nama Pembeli : </label>
            <strong><?= $nama; ?></strong>
            <br/>
            <label for="merk">Merk  : </label>
            <strong><?= $merk; ?></strong>
            <br/>
            <label for="ukuran" >Ukuran : </label>
            <strong><?= $ukuran; ?></strong>
            <br/>
            <label for="jumlah" >Jumlah : </label>
            <strong><?= $jumlah; ?></strong>
            <?php
            if ($merk == "Nike") {
                $harga = 375000;
            } else if ($merk == "Adidas") {
                $harga = 300000;
            } else if ($merk == "Kickers") {
                $harga = 250000;
            } else if ($merk == "Eiger") {
                $harga = 275000;
            } else if ($merk == "Bucherri") {
                $harga = 400000;
            }
            $total = $harga * $jumlah
            ?>
            <br/>
            <label for="harga" >Harga Sepatu : </label>
            <strong><?= $harga; ?></strong>
            <br/>
            <label for="total" >Total : </label>
            <strong><?= $total; ?></strong>
            
            <a href="<?= base_url('sepatu'); ?>"><input type="submit" class="kirim" value="Pesan lagi"></a>
        <div>    
    </center>
</body>

</html> 