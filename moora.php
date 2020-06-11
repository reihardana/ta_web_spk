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
                <a href="topsis.php" class="nav-item nav-link">TOPSIS</a>
                <a href="#" class="nav-item nav-link active">MOORA</a>
                <a href="gdss.php" class="nav-item nav-link">GDSS</a>
            </div>
        </div>
    </nav>
    <br>
    <h5>Bobot Kriteria</h5>
    <table class="table">
        <thead>
            <tr>
                <th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>C5</th><th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php $BC1 = 0.29; echo $BC1;?></td>
                <td><?php $BC2 = 0.173; echo $BC2;?></td>
                <td><?php $BC3 = 0.091; echo $BC3;?></td>
                <td><?php $BC4 = 0.162; echo $BC4;?></td>
                <td><?php $BC5 = 0.08; echo $BC5;?></td>
                <td><?php $BC6 = 0.204; echo $BC6;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Keputusan</h5>
    <table class="table">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $A1C1 = 1; echo $A1C1?></td>
                <td><?php $A1C2 = 1; echo $A1C2?></td>
                <td><?php $A1C3 = 3; echo $A1C3?></td>
                <td><?php $A1C4 = 4; echo $A1C4?></td>
                <td><?php $A1C5 = 1; echo $A1C5?></td>
                <td><?php $A1C6 = 4; echo $A1C6?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $A2C1 = 1; echo $A2C1?></td>
                <td><?php $A2C2 = 1; echo $A2C2?></td>
                <td><?php $A2C3 = 4; echo $A2C3?></td>
                <td><?php $A2C4 = 3; echo $A2C4?></td>
                <td><?php $A2C5 = 1; echo $A2C5?></td>
                <td><?php $A2C6 = 3; echo $A2C6?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $A3C1 = 1; echo $A3C1?></td>
                <td><?php $A3C2 = 1; echo $A3C2?></td>
                <td><?php $A3C3 = 4; echo $A3C3?></td>
                <td><?php $A3C4 = 4; echo $A3C4?></td>
                <td><?php $A3C5 = 1; echo $A3C5?></td>
                <td><?php $A3C6 = 4; echo $A3C6?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $A4C1 = 1; echo $A4C1?></td>
                <td><?php $A4C2 = 1; echo $A4C2?></td>
                <td><?php $A4C3 = 3; echo $A4C3?></td>
                <td><?php $A4C4 = 3; echo $A4C4?></td>
                <td><?php $A4C5 = 0; echo $A4C5?></td>
                <td><?php $A4C6 = 3; echo $A4C6?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $A5C1 = 1; echo $A5C1?></td>
                <td><?php $A5C2 = 1; echo $A5C2?></td>
                <td><?php $A5C3 = 3; echo $A5C3?></td>
                <td><?php $A5C4 = 3; echo $A5C4?></td>
                <td><?php $A5C5 = 1; echo $A5C5?></td>
                <td><?php $A5C6 = 4; echo $A5C6?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Normalisasi</h5>
    <table class="table">
        <thead>
            <tr>
                <th>A</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $RA1C1 = $A1C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)+pow($A4C1,2)+pow($A5C1,2)); echo $RA1C1;?></td>
                <td><?php $RA1C2 = $A1C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)+pow($A4C2,2)+pow($A5C2,2)); echo $RA1C2;?></td>
                <td><?php $RA1C3 = $A1C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)+pow($A4C3,2)+pow($A5C3,2)); echo $RA1C3;?></td>
                <td><?php $RA1C4 = $A1C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)+pow($A4C4,2)+pow($A5C4,2)); echo $RA1C4;?></td>
                <td><?php $RA1C5 = $A1C5/sqrt(pow($A1C5,2)+pow($A2C5,2)+pow($A3C5,2)+pow($A4C5,2)+pow($A5C5,2)); echo $RA1C5;?></td>
                <td><?php $RA1C6 = $A1C6/sqrt(pow($A1C6,2)+pow($A2C6,2)+pow($A3C6,2)+pow($A4C6,2)+pow($A5C6,2)); echo $RA1C6;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $RA2C1 = $A2C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)+pow($A4C1,2)+pow($A5C1,2)); echo $RA2C1;?></td>
                <td><?php $RA2C2 = $A2C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)+pow($A4C2,2)+pow($A5C2,2)); echo $RA2C2;?></td>
                <td><?php $RA2C3 = $A2C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)+pow($A4C3,2)+pow($A5C3,2)); echo $RA2C3;?></td>
                <td><?php $RA2C4 = $A2C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)+pow($A4C4,2)+pow($A5C4,2)); echo $RA2C4;?></td>
                <td><?php $RA2C5 = $A2C5/sqrt(pow($A1C5,2)+pow($A2C5,2)+pow($A3C5,2)+pow($A4C5,2)+pow($A5C5,2)); echo $RA2C5;?></td>
                <td><?php $RA2C6 = $A2C6/sqrt(pow($A1C6,2)+pow($A2C6,2)+pow($A3C6,2)+pow($A4C6,2)+pow($A5C6,2)); echo $RA2C6;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $RA3C1 = $A3C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)+pow($A4C1,2)+pow($A5C1,2)); echo $RA3C1;?></td>
                <td><?php $RA3C2 = $A3C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)+pow($A4C2,2)+pow($A5C2,2)); echo $RA3C2;?></td>
                <td><?php $RA3C3 = $A3C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)+pow($A4C3,2)+pow($A5C3,2)); echo $RA3C3;?></td>
                <td><?php $RA3C4 = $A3C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)+pow($A4C4,2)+pow($A5C4,2)); echo $RA3C4;?></td>
                <td><?php $RA3C5 = $A3C5/sqrt(pow($A1C5,2)+pow($A2C5,2)+pow($A3C5,2)+pow($A4C5,2)+pow($A5C5,2)); echo $RA3C5;?></td>
                <td><?php $RA3C6 = $A3C6/sqrt(pow($A1C6,2)+pow($A2C6,2)+pow($A3C6,2)+pow($A4C6,2)+pow($A5C6,2)); echo $RA3C6;?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $RA4C1 = $A4C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)+pow($A4C1,2)+pow($A5C1,2)); echo $RA4C1;?></td>
                <td><?php $RA4C2 = $A4C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)+pow($A4C2,2)+pow($A5C2,2)); echo $RA4C2;?></td>
                <td><?php $RA4C3 = $A4C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)+pow($A4C3,2)+pow($A5C3,2)); echo $RA4C3;?></td>
                <td><?php $RA4C4 = $A4C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)+pow($A4C4,2)+pow($A5C4,2)); echo $RA4C4;?></td>
                <td><?php $RA4C5 = $A4C5/sqrt(pow($A1C5,2)+pow($A2C5,2)+pow($A3C5,2)+pow($A4C5,2)+pow($A5C5,2)); echo $RA4C5;?></td>
                <td><?php $RA4C6 = $A4C6/sqrt(pow($A1C6,2)+pow($A2C6,2)+pow($A3C6,2)+pow($A4C6,2)+pow($A5C6,2)); echo $RA4C6;?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $RA5C1 = $A5C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)+pow($A4C1,2)+pow($A5C1,2)); echo $RA5C1;?></td>
                <td><?php $RA5C2 = $A5C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)+pow($A4C2,2)+pow($A5C2,2)); echo $RA5C2;?></td>
                <td><?php $RA5C3 = $A5C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)+pow($A4C3,2)+pow($A5C3,2)); echo $RA5C3;?></td>
                <td><?php $RA5C4 = $A5C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)+pow($A4C4,2)+pow($A5C4,2)); echo $RA5C4;?></td>
                <td><?php $RA5C5 = $A5C5/sqrt(pow($A1C5,2)+pow($A2C5,2)+pow($A3C5,2)+pow($A4C5,2)+pow($A5C5,2)); echo $RA5C5;?></td>
                <td><?php $RA5C6 = $A5C6/sqrt(pow($A1C6,2)+pow($A2C6,2)+pow($A3C6,2)+pow($A4C6,2)+pow($A5C6,2)); echo $RA5C6;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Normalisasi Berbobot</h5>
    <table class="table">
        <thead>
            <tr>
                <th>V</th><th>C1</th><th>C2</th><th>C4</th><th>C5</th><th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $VA1C1 = $RA1C1 * $BC1; echo $VA1C1?></td>
                <td><?php $VA1C2 = $RA1C2 * $BC2; echo $VA1C2?></td>
                <td><?php $VA1C3 = $RA1C3 * $BC3; echo $VA1C3?></td>
                <td><?php $VA1C4 = $RA1C4 * $BC4; echo $VA1C4?></td>
                <td><?php $VA1C5 = $RA1C5 * $BC5; echo $VA1C5?></td>
                <td><?php $VA1C6 = $RA1C6 * $BC6; echo $VA1C6?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $VA2C1 = $RA2C1 * $BC1; echo $VA2C1?></td>
                <td><?php $VA2C2 = $RA2C2 * $BC2; echo $VA2C2?></td>
                <td><?php $VA2C3 = $RA2C3 * $BC3; echo $VA2C3?></td>
                <td><?php $VA2C4 = $RA2C4 * $BC4; echo $VA2C4?></td>
                <td><?php $VA2C5 = $RA2C5 * $BC5; echo $VA2C5?></td>
                <td><?php $VA2C6 = $RA2C6 * $BC6; echo $VA2C6?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $VA3C1 = $RA3C1 * $BC1; echo $VA3C1?></td>
                <td><?php $VA3C2 = $RA3C2 * $BC2; echo $VA3C2?></td>
                <td><?php $VA3C3 = $RA3C3 * $BC3; echo $VA3C3?></td>
                <td><?php $VA3C4 = $RA3C4 * $BC4; echo $VA3C4?></td>
                <td><?php $VA3C5 = $RA3C5 * $BC5; echo $VA3C5?></td>
                <td><?php $VA3C6 = $RA3C6 * $BC6; echo $VA3C6?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $VA4C1 = $RA4C1 * $BC1; echo $VA4C1?></td>
                <td><?php $VA4C2 = $RA4C2 * $BC2; echo $VA4C2?></td>
                <td><?php $VA4C3 = $RA4C3 * $BC3; echo $VA4C3?></td>
                <td><?php $VA4C4 = $RA4C4 * $BC4; echo $VA4C4?></td>
                <td><?php $VA4C5 = $RA4C5 * $BC5; echo $VA4C5?></td>
                <td><?php $VA4C6 = $RA4C6 * $BC6; echo $VA4C6?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $VA5C1 = $RA5C1 * $BC1; echo $VA5C1?></td>
                <td><?php $VA5C2 = $RA5C2 * $BC2; echo $VA5C2?></td>
                <td><?php $VA5C3 = $RA5C3 * $BC3; echo $VA5C3?></td>
                <td><?php $VA5C4 = $RA5C4 * $BC4; echo $VA5C4?></td>
                <td><?php $VA5C5 = $RA5C5 * $BC5; echo $VA5C5?></td>
                <td><?php $VA5C6 = $RA5C6 * $BC6; echo $VA5C6?></td>
            </tr>
        </tbody>
    </table>
    <h5>Nilai Ranking</h5>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>MAX</th>
                <th>MIN</th>
                <th>Yi</th>
                <th>Rank</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $MAXA1 = $VA1C1+$VA1C2+$VA1C5+$VA1C6; echo $MAXA1?></td>
                <td><?php $MINA1 = $VA1C3+$VA1C4; echo $MINA1;?></td>
                <td><?php $YIA1 = $MAXA1 - $MINA1; echo $YIA1;?></td>
                <td>2</td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $MAXA2 = $VA2C1+$VA2C2+$VA2C5+$VA2C6; echo $MAXA2?></td>
                <td><?php $MINA2 = $VA2C3+$VA2C4; echo $MINA2;?></td>
                <td><?php $YIA2 = $MAXA2 - $MINA2; echo $YIA2;?></td>
                <td>4</td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $MAXA3 = $VA3C1+$VA3C2+$VA3C5+$VA3C6; echo $MAXA3?></td>
                <td><?php $MINA3 = $VA3C3+$VA3C4; echo $MINA3;?></td>
                <td><?php $YIA3 = $MAXA3 - $MINA3; echo $YIA3;?></td>
                <td>3</td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $MAXA4 = $VA4C1+$VA4C2+$VA4C5+$VA4C6; echo $MAXA4?></td>
                <td><?php $MINA4 = $VA4C3+$VA4C4; echo $MINA4;?></td>
                <td><?php $YIA4 = $MAXA4 - $MINA4; echo $YIA4;?></td>
                <td>5</td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $MAXA5 = $VA5C1+$VA5C2+$VA5C5+$VA5C6; echo $MAXA5?></td>
                <td><?php $MINA5 = $VA5C3+$VA5C4; echo $MINA5;?></td>
                <td><?php $YIA5 = $MAXA5 - $MINA5; echo $YIA5;?></td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <h5>Alternatif yang dipilih adalah A5 dengan nilai Yi terbesar</h5>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>