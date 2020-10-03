<Form action="" method="get">
    Input Nilai <input type="number" name="n" placeholder="max 10" required>
    <input type="submit" value="generate">
</form>
<hr>
<h3>HASIL DARI DERET FIBONACCI</h3>

<?php
$d[1] = 4;
$d[2] = 7;

$n = isset($_GET['n']) ? $_GET['n'] : '1';

if ($n >= 3 and $n <= 10) {
    $hasil = "$d[1],$d[2]";
    for ($i = 3; $i <= $n; $i++) {
        $x = $i - 1;
        $y = $i - 2;

        $d[$i] = $d[$x] + $d[$y];
        $hasil .=  ", $d[$i]";
    }
    echo "<b>deret bilangan FIbonacci 1 -  $n</b>";
    echo " <div style ='color:red'>output: $hasil</div>";
} else {
    echo "Inputan harus diantara 3 / 10";
}
?>