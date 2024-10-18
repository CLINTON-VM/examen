<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio02</title>
    <link rel="stylesheet" href="<?php echo asset ('resources/css/bootstrap.min.css')?>">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->
        <!-- escribir el codigo del ejercicio -->
        <h2 class="text-center">CALCULADORA</h2>
        <H4 class="bg-info px-3">DATOS</H4>
        <div class="row">

            <div class="col-sm-12 col-md-6">
              
                <form method="POST" action="">
                    <div class="form-group">
                      
                        <label for="numero 1">numero 1</label>
                        <input name="n1" type="number" class="form-control" placeholder="Introduce el primer numero" required>

                        <label for="numero 2" class="mt-3">numero</label>
                        <input name="n2" type="number" class="form-control" placeholder="Introduce el segundo numero" required>

                        <button type="submit" class="btn btn-info mt-4">Enviar</button>
                    </div>
                </form>
            </div>
            
            <div class="col-sm-12 col-md-6 mt-5">
                <?php if (isset($_POST['n1']) && isset($_POST['n2'])) { ?>
                    <h3 class="tex-center">resultados de las operaciones</h3>
                    <p><strong> suma:</strong> <?php echo $resultado = $_POST['n1'] + $_POST['n2']; ?></p>
                    <p><strong>resta:</strong> <?php echo $resultado = $_POST['n1'] - $_POST['n2']; ?></p>
                    <p><strong>multiplicacion:</strong> <?php echo $resultado = $_POST['n1'] * $_POST['n2']; ?></p>
                    <p><strong>division:</strong> <?php echo $resultado = $_POST['n1'] / $_POST['n2']; ?></p>
                <?php }; ?>
            </div>
        </div>


    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>

</html>