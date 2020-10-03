s<form method="POST" action="">

    Nilai awal <input type="text" name="nilaia" value="<?= isset($_POST['na']) ? $_POST['na'] : '' ?>"><br><br>
    Nilai beda <input type="text" name="nilaib" value="<?= isset($_POST['nb']) ? $_POST['nb'] : '' ?>"><br><br>
    Suku yang di cari <input type="text" name="nilaic" value="<?= isset($_POST['nc']) ? $_POST['nc'] : '' ?>"><br><br>

    <input type="submit" name="submit" value="hasil">

</form>

<hr>

<h3>Hasil aritmatika</h3>

<?php
if (isset($_POST['submit'])) {
    $na = $_POST['nilaia'];
    $nb = $_POST['nilaib'];
    $nc = $_POST['nilaic'];
    echo "Nilai Awal = " . $na;
    echo "<br> Nilai Beda = " . $nb;
    echo "<br> Nilai dari aritmatika setelah diinput : ";
    for ($i = 1; $i <= $nc; $i++) {
        $hasil = $na + ($nb * ($i - 1));
        echo "<br>" . $hasil;
    }
    $hasilsuku = $na + ($nc - 1) * $nb;
    echo "<br> <br> Nilai suku ke- " . $nc;
    echo "<br>" . $hasilsuku;
}
?>