<html>

<head>
    <title>Tutorial Menghitung Total Bayar dengan Script PHP</title>
</head>

<body>
    <h3>Form Hitung Total Bayar</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <select name="qty">
                        <option value="">- Jumlah -</option>
                        <?php
                        for ($x = 1; $x <= 50; $x++) {
                        ?>
                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3>Hasil :</h3>
    <?php
        if (isset($_POST['hitung'])) {
            $nama    = $_POST['nama'];
            $harga    = $_POST['harga'];
            $qty    = $_POST['qty'];
            $total    = $harga * $qty;
        }
        ?>
    <p>Harga total : <?php echo $total?></p>    
    </body>

</html>