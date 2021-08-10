<?php include('Model/connection.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/af-2.3.7/date-1.1.0/r-2.2.9/rg-1.1.3/sc-2.0.4/sp-1.3.0/datatables.min.css" />
    <title>Tapazo</title>
    <link rel="shortcut icon" type="image/x-icon" href="Resources/Images/circle-flia.png">
    <link rel="stylesheet" href="Resources/Libraries/Css/estilos.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="jumbotron" id="jumb">
                <div class="row mt-4">
                    <div class="col-sm-10">
                        <h1 class="display-5">Parroquia Sagrada Familia</h1>
                    </div>
                    <div class="col-sm-2">
                        <img src="Resources/Images/circle-flia.png" class="img-fluid" width="180px">
                        <br><br>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-2"></div>
                    
                    <div class="col-md-8">
                    <h4 class="text-center">Listado de participantes</h4>
                        <table id="exampleList" class="table">
                            <thead>
                                <th>#</th>
                                <th>Nombre </th>
                                <th>Número de tapa</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/af-2.3.7/date-1.1.0/r-2.2.9/rg-1.1.3/sc-2.0.4/sp-1.3.0/datatables.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  -->
    <script src="Resources/Libraries/Js/funciones.js"></script>

</body>

</html>
<script type="text/javascript">
    //var table = $('#example').DataTable();
</script>