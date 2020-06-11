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
                <a href="#" class="nav-item nav-link active">ELECTREE</a>
                <a href="topsis.php" class="nav-item nav-link">TOPSIS</a>
                <a href="moora.php" class="nav-item nav-link">MOORA</a>
                <a href="gdss.php" class="nav-item nav-link">GDSS</a>
            </div>
        </div>
    </nav>
    <br>
    <h5>SOAL ELECTREE</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $A1C1 = 2; echo $A1C1;?></td>
                <td><?php $A1C2 = 4; echo $A1C2;?></td>
                <td><?php $A1C3 = 2; echo $A1C3;?></td>
                <td><?php $A1C4 = 3; echo $A1C4;?></td>
                <td><?php $A1C5 = 3; echo $A1C5;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $A2C1 = 4; echo $A2C1;?></td>
                <td><?php $A2C2 = 1; echo $A2C2;?></td>
                <td><?php $A2C3 = 5; echo $A2C3;?></td>
                <td><?php $A2C4 = 5; echo $A2C4;?></td>
                <td><?php $A2C5 = 3; echo $A2C5;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $A3C1 = 3; echo $A3C1;?></td>
                <td><?php $A3C2 = 2; echo $A3C2;?></td>
                <td><?php $A3C3 = 1; echo $A3C3;?></td>
                <td><?php $A3C4 = 4; echo $A3C4;?></td>
                <td><?php $A3C5 = 4; echo $A3C5;?></td>
            </tr>
            <tr>
                <th>BOBOT</th>
                <td><?php $BC1 = 3; echo $BC1?></td>
                <td><?php $BC2 = 2; echo $BC2?></td>
                <td><?php $BC3 = 2; echo $BC3?></td>
                <td><?php $BC4 = 2; echo $BC4?></td>
                <td><?php $BC5 = 1; echo $BC5?></td>
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
                <th>C5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $RA1C1 = $A1C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)); echo $RA1C1;?></td>
                <td><?php $RA1C2 = $A1C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)); echo $RA1C2;?></td>
                <td><?php $RA1C3 = $A1C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)); echo $RA1C3;?></td>
                <td><?php $RA1C4 = $A1C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)); echo $RA1C4;?></td>
                <td><?php $RA1C5 = $A1C5/sqrt(pow($A1C5,2)+pow($A2C5,2)+pow($A3C5,2)); echo $RA1C5;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $RA2C1 = $A2C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)); echo $RA2C1;?></td>
                <td><?php $RA2C2 = $A2C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)); echo $RA2C2;?></td>
                <td><?php $RA2C3 = $A2C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)); echo $RA2C3;?></td>
                <td><?php $RA2C4 = $A2C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)); echo $RA2C4;?></td>
                <td><?php $RA2C5 = $A2C5/sqrt(pow($A1C5,2)+pow($A2C5,2)+pow($A3C5,2)); echo $RA2C5;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $RA3C1 = $A3C1/sqrt(pow($A1C1,2)+pow($A2C1,2)+pow($A3C1,2)); echo $RA3C1;?></td>
                <td><?php $RA3C2 = $A3C2/sqrt(pow($A1C2,2)+pow($A2C2,2)+pow($A3C2,2)); echo $RA3C2;?></td>
                <td><?php $RA3C3 = $A3C3/sqrt(pow($A1C3,2)+pow($A2C3,2)+pow($A3C3,2)); echo $RA3C3;?></td>
                <td><?php $RA3C4 = $A3C4/sqrt(pow($A1C4,2)+pow($A2C4,2)+pow($A3C4,2)); echo $RA3C4;?></td>
                <td><?php $RA3C5 = $A3C5/sqrt(pow($A1C5,2)+pow($A2C5,2)+pow($A3C5,2)); echo $RA3C5;?></td>
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
                <th>C5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $VA1C1 = $RA1C1*$BC1; echo $VA1C1;?></td>
                <td><?php $VA1C2 = $RA1C2*$BC2; echo $VA1C2;?></td>
                <td><?php $VA1C3 = $RA1C3*$BC3; echo $VA1C3;?></td>
                <td><?php $VA1C4 = $RA1C4*$BC4; echo $VA1C4;?></td>
                <td><?php $VA1C5 = $RA1C5*$BC5; echo $VA1C5;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $VA2C1 = $RA2C1*$BC1; echo $VA2C1;?></td>
                <td><?php $VA2C2 = $RA2C2*$BC2; echo $VA2C2;?></td>
                <td><?php $VA2C3 = $RA2C3*$BC3; echo $VA2C3;?></td>
                <td><?php $VA2C4 = $RA2C4*$BC4; echo $VA2C4;?></td>
                <td><?php $VA2C5 = $RA2C5*$BC5; echo $VA2C5;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $VA3C1 = $RA3C1*$BC1; echo $VA3C1;?></td>
                <td><?php $VA3C2 = $RA3C2*$BC2; echo $VA3C2;?></td>
                <td><?php $VA3C3 = $RA3C3*$BC3; echo $VA3C3;?></td>
                <td><?php $VA3C4 = $RA3C4*$BC4; echo $VA3C4;?></td>
                <td><?php $VA3C5 = $RA3C5*$BC5; echo $VA3C5;?></td>
            </tr>
        </tbody>
    </table>
    <h5>HIMPUNAN CORCODANCE</h5>
    <table class="table">
        <tbody>
            <tr>
                <th>cc12</th>
                <td>2,5</td>
            </tr>
            <tr>
                <th>cc13</th>
                <td>2,3</td>
            </tr>
            <tr>
                <th>cc21</th>
                <td>1,3,4,5</td>
            </tr>
            <tr>
                <th>cc23</th>
                <td>1,3,4</td>
            </tr>
            <tr>
                <th>cc31</th>
                <td>1,4,5</td>
            </tr>
            <tr>
                <th>cc32</th>
                <td>2,5</td>
            </tr>
        </tbody>
    </table>
    <h5>MATRIX CORCODANCE</h5>
    <table class="table">
        <thead>
            <th>C</th>
            <th>A1</th>
            <th>A2</th>
            <th>A3</th>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $CA1A1 = 0; echo $CA1A1?></td>
                <td><?php $CA1A2 = 3; echo $CA1A2?></td>
                <td><?php $CA1A3 = 4; echo $CA1A3?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $CA2A1 = 8; echo $CA2A1?></td>
                <td><?php $CA2A2 = 0; echo $CA2A2?></td>
                <td><?php $CA2A3 = 7; echo $CA2A3?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $CA3A1 = 6; echo $CA3A1?></td>
                <td><?php $CA3A2 = 3; echo $CA3A2?></td>
                <td><?php $CA3A3 = 0; echo $CA3A3?></td>
            </tr>
            <tr>
                <th>JML</th>
                <td><?php $jmlC = $CA1A1 + $CA1A2 + $CA1A3 + $CA2A1 + $CA2A2 + $CA2A3 + $CA3A1 + $CA3A2 + $CA3A3; echo $jmlC;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Threshold C = <?php $thresholdC = $jmlC/(3*(3-1)); echo $thresholdC;?></h5>
    <h5>MATRIX DOMINAN CORCODANCE F</h5>
    <table class="table">
        <thead>
            <th>C</th>
            <th>A1</th>
            <th>A2</th>
            <th>A3</th>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td>
                    <?php
                        if($CA1A1 > $thresholdC) $FA1A1 = 1;
                        else $FA1A1 = 0;
                        echo $FA1A1;
                    ?>    
                </td>
                <td>
                    <?php
                        if($CA1A2 > $thresholdC) $FA1A2 = 1;
                        else $FA1A2 = 0;
                        echo $FA1A2;
                    ?>   
                </td>
                <td>
                    <?php
                        if($CA1A3 > $thresholdC) $FA1A3 = 1;
                        else $FA1A3 = 0;
                        echo $FA1A3;
                    ?>   
                </td>
            </tr>
            <tr>
                <th>A2</th>
                <td>
                    <?php
                        if($CA2A1 > $thresholdC) $FA2A1 = 1;
                        else $FA2A1 = 0;
                        echo $FA2A1;
                    ?>   
                </td>
                <td>
                    <?php
                        if($CA2A2 > $thresholdC) $FA2A2 = 1;
                        else $FA2A2 = 0;
                        echo $FA2A2;
                    ?>   
                </td>
                <td>
                    <?php
                        if($CA2A3 > $thresholdC) $FA2A3 = 1;
                        else $FA2A3 = 0;
                        echo $FA2A3;
                    ?>   
                </td>
            </tr>
            <tr>
                <th>A3</th>
                <td>
                    <?php
                        if($CA3A1 > $thresholdC) $FA3A1 = 1;
                        else $FA3A1 = 0;
                        echo $FA3A1;
                    ?>   
                </td>
                <td>
                    <?php
                        if($CA3A2 > $thresholdC) $FA3A2 = 1;
                        else $FA3A2 = 0;
                        echo $FA3A2;
                    ?>   
                </td>
                <td>
                    <?php
                        if($CA3A3 > $thresholdC) $FA3A3 = 1;
                        else $FA3A3 = 0;
                        echo $FA3A3;
                    ?>   
                </td>
            </tr>
        </tbody>
    </table>
    <h5>Himpunan Discordance</h5>
    <table class="table">
        <tbody>
            <tr>
                <th>dc12</th>
                <td>1,3,4</td>
            </tr>
            <tr>
                <th>dc13</th>
                <td>1,4,5</td>
            </tr>
            <tr>
                <th>dc21</th>
                <td>2</td>
            </tr>
            <tr>
                <th>dc23</th>
                <td>2,5</td>
            </tr>
            <tr>
                <th>dc31</th>
                <td>2,3</td>
            </tr>
            <tr>
                <th>dc32</th>
                <td>1,3,4</td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Discordance</h5>
    <table class="table">
        <thead>
            <th>C</th>
            <th>A1</th>
            <th>A2</th>
            <th>A3</th>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $DA1A1 = 0; echo $DA1A1?></td>
                <td><?php $DA1A2 = max(abs($VA1C1-$VA2C1),abs($VA1C3-$VA2C3))/max(abs($VA1C1-$VA2C1),abs($VA1C2-$VA2C2),abs($VA1C3-$VA2C3),abs($VA1C4-$VA2C4),abs($VA1C5-$VA2C5)); echo $DA1A2?></td>
                <td><?php $DA1A3 = max(abs($VA1C1-$VA3C1),abs($VA3C4-$VA3C4),abs($VA1C5-$VA3C5))/max(abs($VA1C1-$VA3C1),abs($VA1C2-$VA3C2),abs($VA1C3-$VA3C3),abs($VA1C4-$VA3C4),abs($VA1C5-$VA3C5)); echo $DA1A3?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $DA2A1 = abs($VA2C1-$VA1C1)/max(abs($VA2C1-$VA1C1),abs($VA2C1-$VA1C2),abs($VA2C3-$VA1C3),abs($VA2C4-$VA1C4),abs($VA2C5-$VA1C5)); echo $DA2A1?></td>
                <td><?php $DA2A2 = 0; echo $DA2A2?></td>
                <td><?php $DA2A3 = max(abs($VA2C2-$VA3C2),abs($VA2C5-$VA3C5))/max(abs($VA2C1-$VA3C1),abs($VA2C1-$VA3C2),abs($VA2C3-$VA3C3),abs($VA2C4-$VA3C4),abs($VA2C5-$VA3C5)); echo $DA2A3?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $DA3A1 = max(abs($VA3C2-$VA1C2),abs($VA3C3-$VA1C3))/max(abs($VA3C1-$VA1C1),abs($VA3C2-$VA1C2),abs($VA3C3-$VA1C3),abs($VA3C4-$VA1C4),abs($VA3C5-$VA1C5)); echo $DA3A1?></td>
                <td><?php $DA3A2 = max(abs($VA3C1-$VA2C1),abs($VA3C3-$VA2C3),abs($VA3C4-$VA3C4))/max(abs($VA3C1-$VA2C1),abs($VA3C2-$VA2C2),abs($VA3C3-$VA2C3),abs($VA3C4-$VA2C4),abs($VA3C5-$VA2C5)); echo $DA3A2?></td>
                <td><?php $DA3A3 = 0; echo $DA3A3?></td>
            </tr>
            <tr>
                <th>JML</th>
                <td><?php $jmlD = $DA1A1 + $DA1A2 + $DA1A3 + $DA2A1 + $DA2A2 + $DA2A3 + $DA3A1 + $DA3A2 + $DA3A3; echo $jmlD;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Threshold D = <?php $thresholdD = $jmlD/(3*(3-1)); echo $thresholdD;?></h5>
    <h5>MATRIX DOMINAN DISCORDANCE G</h5>
    <table class="table">
        <thead>
            <th>G</th>
            <th>A1</th>
            <th>A2</th>
            <th>A3</th>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td>
                    <?php
                        if($DA1A1 > $thresholdD) $FA1A1 = 1;
                        else $GA1A1 = 0;
                        echo $GA1A1;
                    ?>    
                </td>
                <td>
                    <?php
                        if($DA1A2 > $thresholdD) $GA1A2 = 1;
                        else $GA1A2 = 0;
                        echo $GA1A2;
                    ?>   
                </td>
                <td>
                    <?php
                        if($DA1A3 > $thresholdD) $GA1A3 = 1;
                        else $GA1A3 = 0;
                        echo $GA1A3;
                    ?>   
                </td>
            </tr>
            <tr>
                <th>A2</th>
                <td>
                    <?php
                        if($DA2A1 > $thresholdD) $GA2A1 = 1;
                        else $GA2A1 = 0;
                        echo $GA2A1;
                    ?>   
                </td>
                <td>
                    <?php
                        if($DA2A2 > $thresholdD) $GA2A2 = 1;
                        else $GA2A2 = 0;
                        echo $GA2A2;
                    ?>   
                </td>
                <td>
                    <?php
                        if($DA2A3 > $thresholdD) $GA2A3 = 1;
                        else $GA2A3 = 0;
                        echo $GA2A3;
                    ?>   
                </td>
            </tr>
            <tr>
                <th>A3</th>
                <td>
                    <?php
                        if($DA3A1 > $thresholdD) $GA3A1 = 1;
                        else $GA3A1 = 0;
                        echo $GA3A1;
                    ?>   
                </td>
                <td>
                    <?php
                        if($DA3A2 > $thresholdD) $GA3A2 = 1;
                        else $GA3A2 = 0;
                        echo $GA3A2;
                    ?>   
                </td>
                <td>
                    <?php
                        if($DA3A3 > $thresholdD) $GA3A3 = 1;
                        else $GA3A3 = 0;
                        echo $GA3A3;
                    ?>   
                </td>
            </tr>
        </tbody>
    </table>
    <h5>Aggregate dominance matrix dan eleminasi alternatif</h5>
    <table class="table">
        <thead>
            <th>C</th>
            <th>A1</th>
            <th>A2</th>
            <th>A3</th>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $EA1A1 = $FA1A1*$GA1A1; echo $EA1A1?></td>
                <td><?php $EA1A2 = $FA1A2*$GA1A2; echo $EA1A2?></td>
                <td><?php $EA1A3 = $FA1A3*$GA1A3; echo $EA1A3?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $EA2A1 = $FA2A1*$GA2A1; echo $EA2A1?></td>
                <td><?php $EA2A2 = $FA2A2*$GA2A2; echo $EA2A2?></td>
                <td><?php $EA2A3 = $FA2A3*$GA2A3; echo $EA2A3?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $EA3A1 = $FA3A1*$GA3A1; echo $EA3A1?></td>
                <td><?php $EA3A2 = $FA3A2*$GA3A2; echo $EA3A2?></td>
                <td><?php $EA3A3 = $FA3A3*$GA3A3; echo $EA3A3?></td>
            </tr>
        </tbody>
    </table>
    <h5>jadi alternatif yang dipilih adalah A2 dan A3</h5>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>