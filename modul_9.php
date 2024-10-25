<html>
<head>
    <title>Kalkulator Penghitung Luas Persegi Panjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row text-center" style="display:flex; justify-content: center; align-items: center; padding: 40px 40px;">
        <div class="col-sm-2">
        <div class="container-sm" style="background-color: #0cafff; padding: 10px 10px;">
                <h2 style="font-size: 20px; color: white;">Kalkulator Luas Persegi Panjang</h2>
                <form method="post" action="modul_9.php">
                    <label>Panjang:</label>
                    <input class="form-control" type="number" name="panjang" step="0.01" required>
                    <br><br>
                    <label>Lebar:</label>
                    <input class="form-control" type="number" name="lebar" step="0.01" required>
                    <br><br>
                    <input class="form-control" type="submit" value="Hitung" action="">
                </form>
                </div>
        </div>

        <div class="col-sm-2" style=" border: 2px solid #0cafff; height: 350px; padding-top: 150px; ">
            <h3 style="font-size: 20px;">
                <?php
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $luas = $panjang * $lebar;
                echo "Luas Persegi Panjang = $luas";
                ?>
             </h3>
        </div>
    </div>
   
   


</body>
</html>
