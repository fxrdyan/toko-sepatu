<html>

<head>
    <title>Toko Sepatu Ferdyan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
    <center>
        <div class="container">
        <center><h2>Toko Sepatu Ferdyan</h2></center>
            <form action="<?= base_url('sepatu/cetak'); ?>"method="post">
            <label for="nama" >Nama Pembeli</label><br/>
            <input type="text" class="input" name="nama" placeholder="Nama Pembeli">
            <br/>
            <label for="merk">Merk</label><br/>
            <select name="merk" class="input">
                <option value="">Pilih Merk Sepatu</option>
                <option value="Nike">Nike</option>
                <option value="Adidas">Adidas</option>
                <option value="Kickers">Kickers</option>
                <option value="Eiger">Eiger</option>
                <option value="Bucherri">Bucherri</option>                  
            </select>
            <br/>
            <label for="ukuran" >Ukuran</label><br/>
                            <input type="radio"name="ukuran" value="32">32
                            <input type="radio"name="ukuran" value="33">33
                            <input type="radio"name="ukuran" value="34">34
                            <input type="radio"name="ukuran" value="35">35
                            <input type="radio"name="ukuran" value="36">36
                            <input type="radio"name="ukuran" value="37">37
                            <input type="radio"name="ukuran" value="38">38
                            <input type="radio"name="ukuran" value="39">39
                            <br/>
                            <input type="radio"name="ukuran" value="40">40
                            <input type="radio"name="ukuran" value="41">41
                            <input type="radio"name="ukuran" value="42">42
                            <input type="radio"name="ukuran" value="43">43
                            <input type="radio"name="ukuran" value="44">44
            <br/>
            <label for="najumlahma" >Jumlah</label><br/>
            <input type="text" name="jumlah" class="input" placeholder="Jumlah Pembelian">
            
            <input type="submit" class="kirim" value="Pesan">
            <input type="reset" class="batal" value="Batal">
            </form>
        <div>    
    </center>
</body>

</html> 