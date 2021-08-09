<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../Resources/Images/circle-flia.png">
    <title>Tapazo</title>
    <link rel="stylesheet" href="../Resources/Libraries/Css/estilos.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" id="frm_add">
        <div class="card w-50 mt-4">
            <div class="card-header">
                <div class="row" id="image_flia">
                    <div class="col-8 text-center">
                        <h5 class="card-title">Agregar participante</h5>
                    </div>
                    <div class="col-4">
                        <img src="../Resources/Images/circle-flia.png" class="img-fluid" width="100px">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="../Controller/ControllerCompetitor.php" method="post">
                    <input type="hidden" name="opcion" value="1">
                    <div class="row">
                        <div class="col-sm-9">
                            <label for="exampleFormControlInput1" class="form-label">Nombre completo:</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="col-sm-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Número:</label>
                            <input type="number" class="form-control" min="0" id="score" required>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button type="submit" class="btn btn-success mt-4" name="btnAgregar" id="btnAgregar">Agregar</button>
                        <button type="reset" class="btn btn-secondary mt-4">Cancelar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>