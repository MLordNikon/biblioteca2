<?php
include("conexion.php");
$id = $_GET["id"];
$query = $conexion->query("SELECT * FROM `libros` WHERE id=$id");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Editar libro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h1 class="text-center mt-5 mb-5">EDITAR LIBROS</h1>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="editar.php" method="post">
                    <div class="card">
                        <div class="card-header text-center fw-bold">DATOS A EDITAR LIBRO</div>
                        <div class="card-body">
                            <?php while ($libros = $query->fetch_object()) { ?>
                                <div class="mb-3" style="display: none;">
                                    <label for="" class="form-label fw-bold">ID</label>
                                    <input type="text" class="form-control" name="id" id="id" / value="<?= $libros->id  ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Nombre del libro</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" / value="<?= $libros->titulo_libro  ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Autor del libro</label>
                                    <input type="text" class="form-control" name="autor" id="autor" value="<?= $libros->nombre_autor ?>" />
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold">Reseña</label>
                                    <input type="text" class="form-control" name="resumen" id="resumen" value="<?= $libros->resumen_libro ?>" />
                                </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-primary">
                                Editar libro
                            </button>
                            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
                        </div>
                        <div class="card-footer text-muted"></div>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>