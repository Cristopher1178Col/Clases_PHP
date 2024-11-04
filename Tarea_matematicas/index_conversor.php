<?php
function caracterizarTriangulo($lado1, $lado2, $lado3) {
    
    if ($lado1 + $lado2 <= $lado3 || $lado1 + $lado3 <= $lado2 || $lado2 + $lado3 <= $lado1) {
        return "Los lados ingresados no forman un triángulo válido.";
    }

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        $tipoLado = "Equilátero";
    } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
        $tipoLado = "Isósceles";
    } else {
        $tipoLado = "Escaleno";
    }

    // Calcular angulos (GPT)
    $angulo1 = rad2deg(acos(($lado2**2 + $lado3**2 - $lado1**2) / (2 * $lado2 * $lado3)));
    $angulo2 = rad2deg(acos(($lado1**2 + $lado3**2 - $lado2**2) / (2 * $lado1 * $lado3)));
    $angulo3 = 180 - $angulo1 - $angulo2;


    if ($angulo1 < 90 && $angulo2 < 90 && $angulo3 < 90) {
        $tipoAngulo = "Acutángulo";
    } elseif ($angulo1 == 90 || $angulo2 == 90 || $angulo3 == 90) { 
        $tipoAngulo = "Rectángulo";
    } else {
        $tipoAngulo = "Obtusángulo";
    }

    return "El triángulo es: $tipoLado y $tipoAngulo.<br>Ángulos: <br>A " . round($angulo1, 2) . "°. <br>B " . round($angulo2, 2) . "°. <br>C " . round($angulo3, 2) . "°." ."<br>Lados:<br>a: " . round($lado1) . "<br>b: " . round($lado2) . "<br>c: " . round($lado3);
}

$resultado = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];
    $resultado = caracterizarTriangulo($lado1, $lado2, $lado3);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <title>Caracterización de Triángulo</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Caracterización de Triángulo</h1>

        <form method="POST" class="mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="lado1" class="form-label">Lado 1</label>
                        <input type="number" id="lado1" name="lado1" class="form-control" placeholder="Ingrese el lado 1 (cm)" required>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="lado2" class="form-label">Lado 2</label>
                        <input type="number" id="lado2" name="lado2" class="form-control" placeholder="Ingrese el lado 2 (cm)" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="lado3" class="form-label">Lado 3</label>
                        <input type="number" id="lado3" name="lado3" class="form-control" placeholder="Ingrese el lado 3 (cm)" required>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100">Caracterizar Triángulo</button>
                </div>
            </div>
        </form>

        <?php if ($resultado): ?>
            <div class="mt-4 alert alert-info">
                <h4>Resultado:</h4>
                <?php echo $resultado; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
