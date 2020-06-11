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
                <a href="ahp.php" class="nav-item nav-link">AHP</a>
                <a href="electree.php" class="nav-item nav-link">ELECTREE</a>
                <a href="#" class="nav-item nav-link active">TOPSIS</a>
                <a href="moora.php" class="nav-item nav-link">MOORA</a>
                <a href="gdss.php" class="nav-item nav-link">GDSS</a>
            </div>
        </div>
    </nav>
    <br>
    <h5>Soal Metode TOPSIS</h5>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Sepatu1</th>
                <th>Sepatu2</th>
                <th>Sepatu3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Model</th>
                <td>sedang</td>
                <td>baik</td>
                <td>sangat baik</td>
            </tr>
            <tr>
                <th>Brand</th>
                <td>sangat baik</td>
                <td>sedang</td>
                <td>baik</td>
            </tr>
            <tr>
                <th>Kualitas</th>
                <td>sedang</td>
                <td>kurang</td>
                <td>sangat baik</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>murah</td>
                <td>mahal</td>
                <td>murah</td>
            </tr>
        </tbody>
    </table>
    <h5>SCORE</h5>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>A1</th>
                <th>A2</th>
                <th>A3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>C1</th>
                <td><?php $A1C1 = 3; echo $A1C1?></td>
                <td><?php $A2C1 = 4; echo $A2C1?></td>
                <td><?php $A3C1 = 5; echo $A3C1?></td>
            </tr>
            <tr>
                <th>C2</th>
                <td><?php $A1C2 = 5; echo $A1C2?></td>
                <td><?php $A2C2 = 3; echo $A2C2?></td>
                <td><?php $A3C2 = 4; echo $A3C2?></td>
            </tr>
            <tr>
                <th>C3</th>
                <td><?php $A1C3 = 3; echo $A1C3?></td>
                <td><?php $A2C3 = 2; echo $A2C3?></td>
                <td><?php $A3C3 = 5; echo $A3C3?></td>
            </tr>
            <tr>
                <th>C4</th>
                <td><?php $A1C4 = 1; echo $A1C4?></td>
                <td><?php $A2C4 = 3; echo $A2C4?></td>
                <td><?php $A3C4 = 1; echo $A3C4?></td>
            </tr>
        </tbody>
    </table>
    <h5>Bobot</h5>
    <table class="table">
        <thead>
            <tr>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php $BC1 = 30; echo $BC1;?></td>
                <td><?php $BC2 = 25; echo $BC2;?></td>
                <td><?php $BC3 = 20; echo $BC3;?></td>
                <td><?php $BC4 = 25; echo $BC4;?></td>
            </tr>
        </tbody>
    </table>
    <h5>NORMALISASI R</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>R</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $RA1C1 = $A1C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)); echo $RA1C1;?></td>
                <td><?php $RA1C2 = $A1C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)); echo $RA1C2;?></td>
                <td><?php $RA1C3 = $A1C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)); echo $RA1C3;?></td>
                <td><?php $RA1C4 = $A1C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)); echo $RA1C4;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $RA2C1 = $A2C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)); echo $RA2C1;?></td>
                <td><?php $RA2C2 = $A2C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)); echo $RA2C2;?></td>
                <td><?php $RA2C3 = $A2C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)); echo $RA2C3;?></td>
                <td><?php $RA2C4 = $A2C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)); echo $RA2C4;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $RA3C1 = $A3C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)); echo $RA3C1;?></td>
                <td><?php $RA3C2 = $A3C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)); echo $RA3C2;?></td>
                <td><?php $RA3C3 = $A3C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)); echo $RA3C3;?></td>
                <td><?php $RA3C4 = $A3C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)); echo $RA3C4;?></td>
            </tr>
        </tbody>
    </table>
    <h5>NORMALISASI BERBOBOT V</h5>
    <table class="table">
        <thead>
            <tr>
                <th>V</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $VA1C1 = $RA1C1*$BC1; echo $VA1C1;?></td>
                <td><?php $VA1C2 = $RA1C2*$BC2; echo $VA1C2;?></td>
                <td><?php $VA1C3 = $RA1C3*$BC3; echo $VA1C3;?></td>
                <td><?php $VA1C4 = $RA1C4*$BC4; echo $VA1C4;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $VA2C1 = $RA2C1*$BC1; echo $VA2C1;?></td>
                <td><?php $VA2C2 = $RA2C2*$BC2; echo $VA2C2;?></td>
                <td><?php $VA2C3 = $RA2C3*$BC3; echo $VA2C3;?></td>
                <td><?php $VA2C4 = $RA2C4*$BC4; echo $VA2C4;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $VA3C1 = $RA3C1*$BC1; echo $VA3C1;?></td>
                <td><?php $VA3C2 = $RA3C2*$BC2; echo $VA3C2;?></td>
                <td><?php $VA3C3 = $RA3C3*$BC3; echo $VA3C3;?></td>
                <td><?php $VA3C4 = $RA3C4*$BC4; echo $VA3C4;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Solusi Ideal Positif</h5>
    <table class="table">
        <thead>
            <tr>
                <th>+</th>
                <th>A+</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>C1</th>
                <td><?php $PC1 = max($VA1C1, $VA2C1, $VA3C1); echo $PC1;?></td>
            </tr>
            <tr>
                <th>C2</th>
                <td><?php $PC2 = max($VA1C2, $VA2C2, $VA3C2); echo $PC2;?></td>
            </tr>
            <tr>
                <th>C3</th>
                <td><?php $PC3 = max($VA1C3, $VA2C3, $VA3C3); echo $PC3;?></td>
            </tr>
            <tr>
                <th>C4</th>
                <td><?php $PC4 = max($VA1C4, $VA2C4, $VA3C4); echo $PC4;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Solusi Ideal Negatif</h5>
    <table class="table">
        <thead>
            <tr>
                <th>-</th>
                <th>A-</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>C1</th>
                <td><?php $MC1 = min($VA1C1, $VA2C1, $VA3C1); echo $MC1;?></td>
            </tr>
            <tr>
                <th>C2</th>
                <td><?php $MC2 = min($VA1C2, $VA2C2, $VA3C2); echo $MC2;?></td>
            </tr>
            <tr>
                <th>C3</th>
                <td><?php $MC3 = min($VA1C3, $VA2C3, $VA3C3); echo $MC3;?></td>
            </tr>
            <tr>
                <th>C4</th>
                <td><?php $MC4 = min($VA1C4, $VA2C4, $VA3C4); echo $MC4;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Hasil jarak alternatif dengan solusi ideal positif</h5>
    <table class="table">
        <thead>
            <tr>
                <th>d1+</th>
                <th>d2+</th>
                <th>d3+</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php $DP1 = sqrt(pow(($PC1-$VA1C1),2)+pow(($PC2-$VA1C2),2)+pow(($PC3-$VA1C3),2)+pow(($PC4-$VA1C4),2)); echo $DP1;?></td>
                <td><?php $DP2 = sqrt(pow(($PC1-$VA2C1),2)+pow(($PC2-$VA2C2),2)+pow(($PC3-$VA2C3),2)+pow(($PC4-$VA2C4),2)); echo $DP2;?></td>
                <td><?php $DP3 = sqrt(pow(($PC1-$VA3C1),2)+pow(($PC2-$VA3C2),2)+pow(($PC3-$VA3C3),2)+pow(($PC4-$VA3C4),2)); echo $DP3;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Hasil jarak alternatif dengan solusi ideal negatif</h5>
    <table class="table">
        <thead>
            <tr>
                <th>d1-</th>
                <th>d2-</th>
                <th>d3-</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php $DM1 = sqrt(pow(($MC1-$VA1C1),2)+pow(($MC2-$VA1C2),2)+pow(($MC3-$VA1C3),2)+pow(($MC4-$VA1C4),2)); echo $DM1;?></td>
                <td><?php $DM2 = sqrt(pow(($MC1-$VA2C1),2)+pow(($MC2-$VA2C2),2)+pow(($MC3-$VA2C3),2)+pow(($MC4-$VA2C4),2)); echo $DM2;?></td>
                <td><?php $DM3 = sqrt(pow(($MC1-$VA3C1),2)+pow(($MC2-$VA3C2),2)+pow(($MC3-$VA3C3),2)+pow(($MC4-$VA3C4),2)); echo $DM3;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Skor akhir untuk setiap alternatif</h5>
    <table class="table">
        <thead>
            <tr>
                <th>A1</th>
                <th>A2</th>
                <th>A3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php $Score1 = $DM1/($DM1+$DP1); echo $Score1;?></td>
                <td><?php $Score2 = $DM2/($DM2+$DP2); echo $Score2;?></td>
                <td><?php $Score3 = $DM3/($DM3+$DP3); echo $Score3;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Dari score di atas A2 adalah alternatif yang dipilih dengan nilai tertinggi</h5>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>