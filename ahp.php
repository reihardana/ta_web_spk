<html>
<title>SPK</title>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">SPK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="saw.php" class="nav-item nav-link">SAW</a>
                <a href="wp.php" class="nav-item nav-link">WP</a>
                <a href="#" class="nav-item nav-link active">AHP</a>
                <a href="electree.php" class="nav-item nav-link">ELECTREE</a>
                <a href="topsis.php" class="nav-item nav-link">TOPSIS</a>
                <a href="moora.php" class="nav-item nav-link">MOORA</a>
                <a href="gdss.php" class="nav-item nav-link">GDSS</a>
            </div>
        </div>
    </nav>
    <div>
        <?php
        // Kriteria pasar
        $c11 = 1;
        $c12 = 1 / 3;
        $c13 = 2;
        $c14 = 4;
        // Kriteria pendapatan
        $c21 = 3;
        $c22 = 1;
        $c23 = 5;
        $c24 = 3;
        // Kriteria infrastruktur
        $c31 = 1 / 2;
        $c32 = 1 / 5;
        $c33 = 1;
        $c34 = 2;
        // Kriteria transportasi
        $c41 = 1 / 4;
        $c42 = 1 / 3;
        $c43 = 1 / 2;
        $c44 = 1;
        ?>
        <h2>Tabel Kriteria</h2>
        <table class="table table-bordered" border="1">
            <tr>
                <th>Kriteria</th>
                <th>pasar</th>
                <th>pendapatan</th>
                <th>infrastruktur</th>
                <th>transportasi</th>
            </tr>
            <tr>
                <th>pasar</th>
                <th><?php echo $c11 ?></th>
                <th><?php echo $c12 ?></th>
                <th><?php echo $c13 ?></th>
                <th><?php echo $c14 ?></th>
            </tr>
            <tr>
                <th>pendapatan</th>
                <th><?php echo $c21 ?></th>
                <th><?php echo $c22 ?></th>
                <th><?php echo $c23 ?></th>
                <th><?php echo $c24 ?></th>
            </tr>
            <tr>
                <th>infrastruktur</th>
                <th><?php echo $c31 ?></th>
                <th><?php echo $c32 ?></th>
                <th><?php echo $c33 ?></th>
                <th><?php echo $c34 ?></th>
            </tr>
            <tr>
                <th>transportasi</th>
                <th><?php echo $c41 ?></th>
                <th><?php echo $c42 ?></th>
                <th><?php echo $c43 ?></th>
                <th><?php echo $c44 ?></th>
            </tr>
            <!-- jumlah kriteria -->
            <?php
            $jk1 = $c11 + $c21 + $c31 + $c41;
            $jk2 = $c12 + $c22 + $c32 + $c42;
            $jk3 = $c13 + $c23 + $c33 + $c43;
            $jk4 = $c14 + $c24 + $c34 + $c44;
            ?>
            <tr>
                <th>Jumlah</th>
                <th><?php echo $jk1 ?></th>
                <th><?php echo $jk2 ?></th>
                <th><?php echo $jk3 ?></th>
                <th><?php echo $jk4 ?></th>
            </tr>
        </table>
        <h3>Normalisasi</h3>
        <?php
        // perhitungan normalisasi
        // Kriteria pasar
        $nc11 = $c11 / $jk1;
        $nc12 = $c12 / $jk2;
        $nc13 = $c13 / $jk3;
        $nc14 = $c14 / $jk4;
        // Kriteria pendapatan
        $nc21 = $c21 / $jk1;
        $nc22 = $c22 / $jk2;
        $nc23 = $c23 / $jk3;
        $nc24 = $c24 / $jk4;
        // Kriteria infrastruktur
        $nc31 = $c31 / $jk1;
        $nc32 = $c32 / $jk2;
        $nc33 = $c33 / $jk3;
        $nc34 = $c34 / $jk4;
        // Kriteria transportasi
        $nc41 = $c41 / $jk1;
        $nc42 = $c42 / $jk2;
        $nc43 = $c43 / $jk3;
        $nc44 = $c44 / $jk4;
        // jumlah hasil normalisasi
        $jn1 = $nc11 + $nc12 + $nc13 + $nc14;
        $jn2 = $nc21 + $nc22 + $nc23 + $nc24;
        $jn3 = $nc31 + $nc32 + $nc33 + $nc34;
        $jn4 = $nc41 + $nc42 + $nc43 + $nc44;
        // perhitungan PW
        $pwc1 = $jn1 / 4;
        $pwc2 = $jn2 / 4;
        $pwc3 = $jn3 / 4;
        $pwc4 = $jn4 / 4;
        ?>
        <table class="table table-bordered" border="1">
            <tr>
                <th>Kriteria</th>
                <th>pasar</th>
                <th>pendapatan</th>
                <th>infrastruktur</th>
                <th>transportasi</th>
                <th>jumlah</th>
                <th>PW</th>
            </tr>
            <tr>
                <th>pasar</th>
                <th><?php echo $nc11 ?></th>
                <th><?php echo $nc12 ?></th>
                <th><?php echo $nc13 ?></th>
                <th><?php echo $nc14 ?></th>
                <th><?php echo $jn1 ?></th>
                <th><?php echo $pwc1 ?></th>
            </tr>
            <tr>
                <th>pendapatan</th>
                <th><?php echo $nc21 ?></th>
                <th><?php echo $nc22 ?></th>
                <th><?php echo $nc23 ?></th>
                <th><?php echo $nc24 ?></th>
                <th><?php echo $jn2 ?></th>
                <th><?php echo $pwc2 ?></th>
            </tr>
            <tr>
                <th>infrastruktur</th>
                <th><?php echo $nc31 ?></th>
                <th><?php echo $nc32 ?></th>
                <th><?php echo $nc33 ?></th>
                <th><?php echo $nc34 ?></th>
                <th><?php echo $jn3 ?></th>
                <th><?php echo $pwc3 ?></th>
            </tr>
            <tr>
                <th>transportasi</th>
                <th><?php echo $nc41 ?></th>
                <th><?php echo $nc42 ?></th>
                <th><?php echo $nc43 ?></th>
                <th><?php echo $nc44 ?></th>
                <th><?php echo $jn4 ?></th>
                <th><?php echo $pwc4 ?></th>
            </tr>
        </table>
        <h3>Menghitung CR</h3>
        <h4>Menghitung Matriks</h2>
            <?php
            // perhitungan matriks
            $mc1 = ($c11 * $pwc1) + ($c12 * $pwc2) + ($c13 * $pwc3) + ($c14 * $pwc4);
            $mc2 = ($c21 * $pwc1) + ($c22 * $pwc2) + ($c23 * $pwc3) + ($c24 * $pwc4);
            $mc3 = ($c31 * $pwc1) + ($c32 * $pwc2) + ($c33 * $pwc3) + ($c34 * $pwc4);
            $mc4 = ($c41 * $pwc1) + ($c42 * $pwc2) + ($c43 * $pwc3) + ($c44 * $pwc4);
            // perhitungan matriks dibagi PW
            $mcw1 = $mc1 / $pwc1;
            $mcw2 = $mc2 / $pwc2;
            $mcw3 = $mc3 / $pwc3;
            $mcw4 = $mc4 / $pwc4;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Kriteria</th>
                    <th>Matriks</th>
                    <th>Matriks / PW</th>
                </tr>
                <tr>
                    <th>pasar</th>
                    <th><?php echo $mc1 ?></th>
                    <th><?php echo $mcw1 ?></th>
                </tr>
                <tr>
                    <th>pendapatan</th>
                    <th><?php echo $mc2 ?></th>
                    <th><?php echo $mcw2 ?></th>
                </tr>
                <tr>
                    <th>infrastruktur</th>
                    <th><?php echo $mc3 ?></th>
                    <th><?php echo $mcw3 ?></th>
                </tr>
                <tr>
                    <th>transportasi</th>
                    <th><?php echo $mc4 ?></th>
                    <th><?php echo $mcw4 ?></th>
                </tr>
            </table>
            <h4>Menhitung λmaks dan CI</h4>
            <?php
            // menghitung λmaks
            $cm = ($mcw1 + $mcw2 + $mcw3 + $mcw4) / 4;
            $cci = ($cm - 4) / (4 - 1);
            $ccr = $cci / 0.9;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Perhitungan</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <th>λmaks</th>
                    <th><?php echo $cm ?></th>
                </tr>
                <tr>
                    <th>CI</th>
                    <th><?php echo $cci ?></th>
                </tr>
                <tr>
                    <th>CR</th>
                    <th><?php echo $ccr ?></th>
                    <th><?php
                        if ($ccr < 0.1) {
                            echo ("Dapat Digunakan");
                        } else {
                            echo ("Tidak Dapat Digunakan");
                        }
                        ?></th>
                </tr>
            </table>
    </div>
    <!------------------------ Alternatif Pasar ------------------------>
    <div>
        <?php
        // Atlanta
        $a1c11 = 1;
        $a1c12 = 4;
        $a1c13 = 7;
        // Birmingham
        $a1c21 = 1 / 4;
        $a1c22 = 1;
        $a1c23 = 2;
        // Charlotte
        $a1c31 = 1 / 7;
        $a1c32 = 1 / 2;
        $a1c33 = 1;
        ?>
        <hr>
        <hr>
        <h2>Tabel Alternatif Pasar</h2>
        <table class="table table-bordered" border="1">
            <tr>
                <th>pasar</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $a1c11 ?></th>
                <th><?php echo $a1c12 ?></th>
                <th><?php echo $a1c13 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $a1c21 ?></th>
                <th><?php echo $a1c22 ?></th>
                <th><?php echo $a1c23 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $a1c31 ?></th>
                <th><?php echo $a1c32 ?></th>
                <th><?php echo $a1c33 ?></th>
            </tr>
            <!-- jumlah alternatif pasar -->
            <?php
            $ja1k1 = $a1c11 + $a1c21 + $a1c31;
            $ja1k2 = $a1c12 + $a1c22 + $a1c32;
            $ja1k3 = $a1c13 + $a1c23 + $a1c33;
            ?>
            <tr>
                <th>Jumlah</th>
                <th><?php echo $ja1k1 ?></th>
                <th><?php echo $ja1k2 ?></th>
                <th><?php echo $ja1k3 ?></th>
            </tr>
        </table>
        <h3>Normalisasi</h3>
        <?php
        // perhitungan normalisasi
        // Atlanta pasar
        $na1c11 = $a1c11 / $ja1k1;
        $na1c12 = $a1c12 / $ja1k2;
        $na1c13 = $a1c13 / $ja1k3;
        // Birmingham pasar
        $na1c21 = $a1c21 / $ja1k1;
        $na1c22 = $a1c22 / $ja1k2;
        $na1c23 = $a1c23 / $ja1k3;
        // Charlotte pasar
        $na1c31 = $a1c31 / $ja1k1;
        $na1c32 = $a1c32 / $ja1k2;
        $na1c33 = $a1c33 / $ja1k3;
        // jumlah hasil normalisasi
        $ja1n1 = $na1c11 + $na1c12 + $na1c13;
        $ja1n2 = $na1c21 + $na1c22 + $na1c23;
        $ja1n3 = $na1c31 + $na1c32 + $na1c33;
        // perhitungan PW
        $pwa1c1 = $ja1n1 / 3;
        $pwa1c2 = $ja1n2 / 3;
        $pwa1c3 = $ja1n3 / 3;
        ?>
        <table class="table table-bordered" border="1">
            <tr>
                <th>pasar</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
                <th>jumlah</th>
                <th>PW</th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $na1c11 ?></th>
                <th><?php echo $na1c12 ?></th>
                <th><?php echo $na1c13 ?></th>
                <th><?php echo $ja1n1 ?></th>
                <th><?php echo $pwa1c1 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $na1c21 ?></th>
                <th><?php echo $na1c22 ?></th>
                <th><?php echo $na1c23 ?></th>
                <th><?php echo $ja1n2 ?></th>
                <th><?php echo $pwa1c2 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $na1c31 ?></th>
                <th><?php echo $na1c32 ?></th>
                <th><?php echo $na1c33 ?></th>
                <th><?php echo $ja1n3 ?></th>
                <th><?php echo $pwa1c3 ?></th>
            </tr>
        </table>
        <h3>Menghitung CR</h3>
        <h4>Menghitung Matriks</h2>
            <?php
            // perhitungan matriks
            $ma1c1 = ($a1c11 * $pwa1c1) + ($a1c12 * $pwa1c2) + ($a1c13 * $pwa1c3);
            $ma1c2 = ($a1c21 * $pwa1c1) + ($a1c22 * $pwa1c2) + ($a1c23 * $pwa1c3);
            $ma1c3 = ($a1c31 * $pwa1c1) + ($a1c32 * $pwa1c2) + ($a1c33 * $pwa1c3);
            // perhitungan matriks dibagi PW
            $mca1w1 = $ma1c1 / $pwa1c1;
            $mca1w2 = $ma1c2 / $pwa1c2;
            $mca1w3 = $ma1c3 / $pwa1c3;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Alternatif</th>
                    <th>Matriks</th>
                    <th>Matriks / PW</th>
                </tr>
                <tr>
                    <th>Atlanta</th>
                    <th><?php echo $ma1c1 ?></th>
                    <th><?php echo $mca1w1 ?></th>
                </tr>
                <tr>
                    <th>Birmingham</th>
                    <th><?php echo $ma1c2 ?></th>
                    <th><?php echo $mca1w2 ?></th>
                </tr>
                <tr>
                    <th>Charlotte</th>
                    <th><?php echo $ma1c3 ?></th>
                    <th><?php echo $mca1w3 ?></th>
                </tr>
            </table>
            <h4>Menhitung λmaks dan CI</h4>
            <?php
            // menghitung λmaks
            $cma1 = ($mca1w1 + $mca1w2 + $mca1w3) / 3;
            $ccia1 = ($cma1 - 3) / (3 - 1);
            $ccra1 = $ccia1 / 0.58;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Perhitungan</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <th>λmaks</th>
                    <th><?php echo $cma1 ?></th>
                </tr>
                <tr>
                    <th>CI</th>
                    <th><?php echo $ccia1 ?></th>
                </tr>
                <tr>
                    <th>CR</th>
                    <th><?php echo $ccra1 ?></th>
                    <th><?php
                        if ($ccra1 < 0.1) {
                            echo ("Dapat Digunakan");
                        } else {
                            echo ("Tidak Dapat Digunakan");
                        }
                        ?></th>
                </tr>
            </table>
    </div>
    <!------------------------ Alternatif Pendapatan ------------------------>
    <div>
        <?php
        // Atlanta
        $a2c11 = 1;
        $a2c12 = 1 / 6;
        $a2c13 = 1 / 4;
        // Birmingham
        $a2c21 = 6;
        $a2c22 = 1;
        $a2c23 = 3;
        // Charlotte
        $a2c31 = 4;
        $a2c32 = 1 / 3;
        $a2c33 = 1;
        ?>
        <hr>
        <hr>
        <h2>Tabel Alternatif Pendapatan</h2>
        <table class="table table-bordered" border="1">
            <tr>
                <th>pendapatan</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $a2c11 ?></th>
                <th><?php echo $a2c12 ?></th>
                <th><?php echo $a2c13 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $a2c21 ?></th>
                <th><?php echo $a2c22 ?></th>
                <th><?php echo $a2c23 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $a2c31 ?></th>
                <th><?php echo $a2c32 ?></th>
                <th><?php echo $a2c33 ?></th>
            </tr>
            <!-- jumlah alternatif pendapatan -->
            <?php
            $ja2k1 = $a2c11 + $a2c21 + $a2c31;
            $ja2k2 = $a2c12 + $a2c22 + $a2c32;
            $ja2k3 = $a2c13 + $a2c23 + $a2c33;
            ?>
            <tr>
                <th>Jumlah</th>
                <th><?php echo $ja2k1 ?></th>
                <th><?php echo $ja2k2 ?></th>
                <th><?php echo $ja2k3 ?></th>
            </tr>
        </table>
        <h3>Normalisasi</h3>
        <?php
        // perhitungan normalisasi
        // Atlanta pendapatan
        $na2c11 = $a2c11 / $ja2k1;
        $na2c12 = $a2c12 / $ja2k2;
        $na2c13 = $a2c13 / $ja2k3;
        // Birmingham pendapatan
        $na2c21 = $a2c21 / $ja2k1;
        $na2c22 = $a2c22 / $ja2k2;
        $na2c23 = $a2c23 / $ja2k3;
        // Charlotte pendapatan
        $na2c31 = $a2c31 / $ja2k1;
        $na2c32 = $a2c32 / $ja2k2;
        $na2c33 = $a2c33 / $ja2k3;
        // jumlah hasil normalisasi
        $ja2n1 = $na2c11 + $na2c12 + $na2c13;
        $ja2n2 = $na2c21 + $na2c22 + $na2c23;
        $ja2n3 = $na2c31 + $na2c32 + $na2c33;
        // perhitungan PW
        $pwa2c1 = $ja2n1 / 3;
        $pwa2c2 = $ja2n2 / 3;
        $pwa2c3 = $ja2n3 / 3;
        ?>
        <table class="table table-bordered" border="1">
            <tr>
                <th>pendapatan</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
                <th>jumlah</th>
                <th>PW</th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $na2c11 ?></th>
                <th><?php echo $na2c12 ?></th>
                <th><?php echo $na2c13 ?></th>
                <th><?php echo $ja2n1 ?></th>
                <th><?php echo $pwa2c1 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $na2c21 ?></th>
                <th><?php echo $na2c22 ?></th>
                <th><?php echo $na2c23 ?></th>
                <th><?php echo $ja2n2 ?></th>
                <th><?php echo $pwa2c2 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $na2c31 ?></th>
                <th><?php echo $na2c32 ?></th>
                <th><?php echo $na2c33 ?></th>
                <th><?php echo $ja2n3 ?></th>
                <th><?php echo $pwa2c3 ?></th>
            </tr>
        </table>
        <h3>Menghitung CR</h3>
        <h4>Menghitung Matriks</h2>
            <?php
            // perhitungan matriks
            $ma2c1 = ($a2c11 * $pwa2c1) + ($a2c12 * $pwa2c2) + ($a2c13 * $pwa2c3);
            $ma2c2 = ($a2c21 * $pwa2c1) + ($a2c22 * $pwa2c2) + ($a2c23 * $pwa2c3);
            $ma2c3 = ($a2c31 * $pwa2c1) + ($a2c32 * $pwa2c2) + ($a2c33 * $pwa2c3);
            // perhitungan matriks dibagi PW
            $mca2w1 = $ma2c1 / $pwa2c1;
            $mca2w2 = $ma2c2 / $pwa2c2;
            $mca2w3 = $ma2c3 / $pwa2c3;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Alternatif</th>
                    <th>Matriks</th>
                    <th>Matriks / PW</th>
                </tr>
                <tr>
                    <th>Atlanta</th>
                    <th><?php echo $ma2c1 ?></th>
                    <th><?php echo $mca2w1 ?></th>
                </tr>
                <tr>
                    <th>Birmingham</th>
                    <th><?php echo $ma2c2 ?></th>
                    <th><?php echo $mca2w2 ?></th>
                </tr>
                <tr>
                    <th>Charlotte</th>
                    <th><?php echo $ma2c3 ?></th>
                    <th><?php echo $mca2w3 ?></th>
                </tr>
            </table>
            <h4>Menhitung λmaks dan CI</h4>
            <?php
            // menghitung λmaks
            $cma2 = ($mca2w1 + $mca2w2 + $mca2w3) / 3;
            $ccia2 = ($cma2 - 3) / (3 - 1);
            $ccra2 = $ccia2 / 0.58;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Perhitungan</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <th>λmaks</th>
                    <th><?php echo $cma2 ?></th>
                </tr>
                <tr>
                    <th>CI</th>
                    <th><?php echo $ccia2 ?></th>
                </tr>
                <tr>
                    <th>CR</th>
                    <th><?php echo $ccra2 ?></th>
                    <th><?php
                        if ($ccra2 < 0.1) {
                            echo ("Dapat Digunakan");
                        } else {
                            echo ("Tidak Dapat Digunakan");
                        }
                        ?></th>
                </tr>
            </table>
    </div>
    <!------------------------ Alternatif Infrastruktur ------------------------>
    <div>
        <?php
        // Atlanta
        $a3c11 = 1;
        $a3c12 = 1 / 3;
        $a3c13 = 5;
        // Birmingham
        $a3c21 = 3;
        $a3c22 = 1;
        $a3c23 = 6;
        // Charlotte
        $a3c31 = 1 / 5;
        $a3c32 = 1 / 6;
        $a3c33 = 1;
        ?>
        <hr>
        <hr>
        <h2>Tabel Alternatif Infrastruktur</h2>
        <table class="table table-bordered" border="1">
            <tr>
                <th>infrastruktur</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $a3c11 ?></th>
                <th><?php echo $a3c12 ?></th>
                <th><?php echo $a3c13 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $a3c21 ?></th>
                <th><?php echo $a3c22 ?></th>
                <th><?php echo $a3c23 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $a3c31 ?></th>
                <th><?php echo $a3c32 ?></th>
                <th><?php echo $a3c33 ?></th>
            </tr>
            <!-- jumlah alternatif infrastruktur -->
            <?php
            $ja3k1 = $a3c11 + $a3c21 + $a3c31;
            $ja3k2 = $a3c12 + $a3c22 + $a3c32;
            $ja3k3 = $a3c13 + $a3c23 + $a3c33;
            ?>
            <tr>
                <th>Jumlah</th>
                <th><?php echo $ja3k1 ?></th>
                <th><?php echo $ja3k2 ?></th>
                <th><?php echo $ja3k3 ?></th>
            </tr>
        </table>
        <h3>Normalisasi</h3>
        <?php
        // perhitungan normalisasi
        // Atlanta infrastruktur
        $na3c11 = $a3c11 / $ja3k1;
        $na3c12 = $a3c12 / $ja3k2;
        $na3c13 = $a3c13 / $ja3k3;
        // Birmingham infrastruktur
        $na3c21 = $a3c21 / $ja3k1;
        $na3c22 = $a3c22 / $ja3k2;
        $na3c23 = $a3c23 / $ja3k3;
        // Charlotte infrastruktur
        $na3c31 = $a3c31 / $ja3k1;
        $na3c32 = $a3c32 / $ja3k2;
        $na3c33 = $a3c33 / $ja3k3;
        // jumlah hasil normalisasi
        $ja3n1 = $na3c11 + $na3c12 + $na3c13;
        $ja3n2 = $na3c21 + $na3c22 + $na3c23;
        $ja3n3 = $na3c31 + $na3c32 + $na3c33;
        // perhitungan PW
        $pwa3c1 = $ja3n1 / 3;
        $pwa3c2 = $ja3n2 / 3;
        $pwa3c3 = $ja3n3 / 3;
        ?>
        <table class="table table-bordered" border="1">
            <tr>
                <th>infrastruktur</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
                <th>jumlah</th>
                <th>PW</th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $na3c11 ?></th>
                <th><?php echo $na3c12 ?></th>
                <th><?php echo $na3c13 ?></th>
                <th><?php echo $ja3n1 ?></th>
                <th><?php echo $pwa3c1 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $na3c21 ?></th>
                <th><?php echo $na3c22 ?></th>
                <th><?php echo $na3c23 ?></th>
                <th><?php echo $ja3n2 ?></th>
                <th><?php echo $pwa3c2 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $na3c31 ?></th>
                <th><?php echo $na3c32 ?></th>
                <th><?php echo $na3c33 ?></th>
                <th><?php echo $ja3n3 ?></th>
                <th><?php echo $pwa3c3 ?></th>
            </tr>
        </table>
        <h3>Menghitung CR</h3>
        <h4>Menghitung Matriks</h2>
            <?php
            // perhitungan matriks
            $ma3c1 = ($a3c11 * $pwa3c1) + ($a3c12 * $pwa3c2) + ($a3c13 * $pwa3c3);
            $ma3c2 = ($a3c21 * $pwa3c1) + ($a3c22 * $pwa3c2) + ($a3c23 * $pwa3c3);
            $ma3c3 = ($a3c31 * $pwa3c1) + ($a3c32 * $pwa3c2) + ($a3c33 * $pwa3c3);
            // perhitungan matriks dibagi PW
            $mca3w1 = $ma3c1 / $pwa3c1;
            $mca3w2 = $ma3c2 / $pwa3c2;
            $mca3w3 = $ma3c3 / $pwa3c3;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Alternatif</th>
                    <th>Matriks</th>
                    <th>Matriks / PW</th>
                </tr>
                <tr>
                    <th>Atlanta</th>
                    <th><?php echo $ma3c1 ?></th>
                    <th><?php echo $mca3w1 ?></th>
                </tr>
                <tr>
                    <th>Birmingham</th>
                    <th><?php echo $ma3c2 ?></th>
                    <th><?php echo $mca3w2 ?></th>
                </tr>
                <tr>
                    <th>Charlotte</th>
                    <th><?php echo $ma3c3 ?></th>
                    <th><?php echo $mca3w3 ?></th>
                </tr>
            </table>
            <h4>Menhitung λmaks dan CI</h4>
            <?php
            // menghitung λmaks
            $cma3 = ($mca3w1 + $mca3w2 + $mca3w3) / 3;
            $ccia3 = ($cma3 - 3) / (3 - 1);
            $ccra3 = $ccia3 / 0.58;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Perhitungan</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <th>λmaks</th>
                    <th><?php echo $cma3 ?></th>
                </tr>
                <tr>
                    <th>CI</th>
                    <th><?php echo $ccia3 ?></th>
                </tr>
                <tr>
                    <th>CR</th>
                    <th><?php echo $ccra3 ?></th>
                    <th><?php
                        if ($ccra3 < 0.1) {
                            echo ("Dapat Digunakan");
                        } else {
                            echo ("Tidak Dapat Digunakan");
                        }
                        ?></th>
                </tr>
            </table>
    </div>
    <!------------------------ Alternatif Transportasi ------------------------>
    <div>
        <?php
        // Atlanta
        $a4c11 = 1;
        $a4c12 = 1 / 2;
        $a4c13 = 1 / 7;
        // Birmingham
        $a4c21 = 2;
        $a4c22 = 1;
        $a4c23 = 1 / 2;
        // Charlotte
        $a4c31 = 7;
        $a4c32 = 2;
        $a4c33 = 1;
        ?>
        <hr>
        <hr>
        <h2>Tabel Alternatif Transportasi</h2>
        <table class="table table-bordered" border="1">
            <tr>
                <th>transportasi</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $a4c11 ?></th>
                <th><?php echo $a4c12 ?></th>
                <th><?php echo $a4c13 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $a4c21 ?></th>
                <th><?php echo $a4c22 ?></th>
                <th><?php echo $a4c23 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $a4c31 ?></th>
                <th><?php echo $a4c32 ?></th>
                <th><?php echo $a4c33 ?></th>
            </tr>
            <!-- jumlah alternatif infrastruktur -->
            <?php
            $ja4k1 = $a4c11 + $a4c21 + $a4c31;
            $ja4k2 = $a4c12 + $a4c22 + $a4c32;
            $ja4k3 = $a4c13 + $a4c23 + $a4c33;
            ?>
            <tr>
                <th>Jumlah</th>
                <th><?php echo $ja4k1 ?></th>
                <th><?php echo $ja4k2 ?></th>
                <th><?php echo $ja4k3 ?></th>
            </tr>
        </table>
        <h3>Normalisasi</h3>
        <?php
        // perhitungan normalisasi
        // Atlanta transportasi
        $na4c11 = $a4c11 / $ja4k1;
        $na4c12 = $a4c12 / $ja4k2;
        $na4c13 = $a4c13 / $ja4k3;
        // Birmingham transportasi
        $na4c21 = $a4c21 / $ja4k1;
        $na4c22 = $a4c22 / $ja4k2;
        $na4c23 = $a4c23 / $ja4k3;
        // Charlotte transportasi
        $na4c31 = $a4c31 / $ja4k1;
        $na4c32 = $a4c32 / $ja4k2;
        $na4c33 = $a4c33 / $ja4k3;
        // jumlah hasil normalisasi
        $ja4n1 = $na4c11 + $na4c12 + $na4c13;
        $ja4n2 = $na4c21 + $na4c22 + $na4c23;
        $ja4n3 = $na4c31 + $na4c32 + $na4c33;
        // perhitungan PW
        $pwa4c1 = $ja4n1 / 3;
        $pwa4c2 = $ja4n2 / 3;
        $pwa4c3 = $ja4n3 / 3;
        ?>
        <table class="table table-bordered" border="1">
            <tr>
                <th>trasnportasi</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
                <th>jumlah</th>
                <th>PW</th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $na4c11 ?></th>
                <th><?php echo $na4c12 ?></th>
                <th><?php echo $na4c13 ?></th>
                <th><?php echo $ja4n1 ?></th>
                <th><?php echo $pwa4c1 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $na4c21 ?></th>
                <th><?php echo $na4c22 ?></th>
                <th><?php echo $na4c23 ?></th>
                <th><?php echo $ja4n2 ?></th>
                <th><?php echo $pwa4c2 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $na4c31 ?></th>
                <th><?php echo $na4c32 ?></th>
                <th><?php echo $na4c33 ?></th>
                <th><?php echo $ja4n3 ?></th>
                <th><?php echo $pwa4c3 ?></th>
            </tr>
        </table>
        <h3>Menghitung CR</h3>
        <h4>Menghitung Matriks</h2>
            <?php
            // perhitungan matriks
            $ma4c1 = ($a4c11 * $pwa4c1) + ($a4c12 * $pwa4c2) + ($a4c13 * $pwa4c3);
            $ma4c2 = ($a4c21 * $pwa4c1) + ($a4c22 * $pwa4c2) + ($a4c23 * $pwa4c3);
            $ma4c3 = ($a4c31 * $pwa4c1) + ($a4c32 * $pwa4c2) + ($a4c33 * $pwa4c3);
            // perhitungan matriks dibagi PW
            $mca4w1 = $ma4c1 / $pwa4c1;
            $mca4w2 = $ma4c2 / $pwa4c2;
            $mca4w3 = $ma4c3 / $pwa4c3;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Alternatif</th>
                    <th>Matriks</th>
                    <th>Matriks / PW</th>
                </tr>
                <tr>
                    <th>Atlanta</th>
                    <th><?php echo $ma4c1 ?></th>
                    <th><?php echo $mca4w1 ?></th>
                </tr>
                <tr>
                    <th>Birmingham</th>
                    <th><?php echo $ma4c2 ?></th>
                    <th><?php echo $mca4w2 ?></th>
                </tr>
                <tr>
                    <th>Charlotte</th>
                    <th><?php echo $ma4c3 ?></th>
                    <th><?php echo $mca4w3 ?></th>
                </tr>
            </table>
            <h4>Menhitung λmaks dan CI</h4>
            <?php
            // menghitung λmaks
            $cma4 = ($mca4w1 + $mca4w2 + $mca4w3) / 3;
            $ccia4 = ($cma4 - 3) / (3 - 1);
            $ccra4 = $ccia4 / 0.58;
            ?>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>Perhitungan</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <th>λmaks</th>
                    <th><?php echo $cma4 ?></th>
                </tr>
                <tr>
                    <th>CI</th>
                    <th><?php echo $ccia4 ?></th>
                </tr>
                <tr>
                    <th>CR</th>
                    <th><?php echo $ccra4 ?></th>
                    <th><?php
                        if ($ccra4 < 0.1) {
                            echo ("Dapat Digunakan");
                        } else {
                            echo ("Tidak Dapat Digunakan");
                        }
                        ?></th>
                </tr>
            </table>
    </div>
    <!-- Pengambilan Keputusan -->
    <div>
        <hr>
        <hr>
        <!-- Perhitungan PK -->
        <?php
        $pk1 = ($pwc1 * $pwa1c1) + ($pwc2 * $pwa2c1) + ($pwc3 * $pwa3c1) + ($pwc4 * $pwa4c1);
        $pk2 = ($pwc1 * $pwa1c2) + ($pwc2 * $pwa2c2) + ($pwc3 * $pwa3c2) + ($pwc4 * $pwa4c2);
        $pk3 = ($pwc1 * $pwa1c3) + ($pwc2 * $pwa2c3) + ($pwc3 * $pwa3c3) + ($pwc4 * $pwa4c3);
        ?>
        <h3>Pengampilan Keputusan</h3>
        <table class="table table-bordered" border="1">
            <tr>
                <th></th>
                <th>pasar</th>
                <th>pendapatan</th>
                <th>infrastruktur</th>
                <th>transportasi</th>
                <th>Hasil</th>
            </tr>
            <tr>
                <th>PW</th>
                <th><?php echo $pwc1 ?></th>
                <th><?php echo $pwc2 ?></th>
                <th><?php echo $pwc3 ?></th>
                <th><?php echo $pwc4 ?></th>
            </tr>
            <tr>
                <th>Atlanta</th>
                <th><?php echo $pwa1c1 ?></th>
                <th><?php echo $pwa2c1 ?></th>
                <th><?php echo $pwa3c1 ?></th>
                <th><?php echo $pwa4c1 ?></th>
                <th><?php echo $pk1 ?></th>
            </tr>
            <tr>
                <th>Birmingham</th>
                <th><?php echo $pwa1c2 ?></th>
                <th><?php echo $pwa2c2 ?></th>
                <th><?php echo $pwa3c2 ?></th>
                <th><?php echo $pwa4c2 ?></th>
                <th><?php echo $pk2 ?></th>
            </tr>
            <tr>
                <th>Charlotte</th>
                <th><?php echo $pwa1c3 ?></th>
                <th><?php echo $pwa2c3 ?></th>
                <th><?php echo $pwa3c3 ?></th>
                <th><?php echo $pwa4c3 ?></th>
                <th><?php echo $pk3 ?></th>
            </tr>
        </table>
    </div>
</body>
</html>