<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/CSS/header-footer.css">
    <link rel="stylesheet" href="../../assets/CSS/map.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6af6746610.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fahkwang&family=League+Spartan:wght@100..900&family=Mr+Bedfort&family=Syne&display=swap" rel="stylesheet">
    <title>Asador Guillén</title>
</head>
<body class="espartano">
    <?php
    require "../view/templates/header.php";
    ?>
    <div class="d-flex justify-content-center my-5">
        <div class="contacto-map">
            <div id="horario-map">
                <h1>HORARIO</h1>
                <p><strong>Lun - Mar - Vie:</strong> 19:30 a 23:00</p>
                <p><strong>Sáb:</strong> 12:00 a 15:00 / 20:00 a 23:00</p>
                <p><strong>Dom:</strong> 11:00 a 15:00 / 20:00 a 23:00</p>
                <p><strong>Mié - Jue:</strong> OFF</p>
            </div>
            <div>
                <h1>CONTACTO</h1>
                <p><strong>Tlf:</strong> 956 43 14 45</p>
                <p><strong>Email:</strong> asadorguillen@hotmail.com</p>
            </div>
            <div>
                <h1>DIRECCIÓN</h1>
                <p>C.Pío XII, 10, 11160, Barbate, Cadíz, España</p>
                <strong style="width:100%;"><i style="padding-right: 1%;" class="fa-solid fa-location-dot"></i>Localización</strong>
            </div>
        </div>
    </div>
    <?php
    require '../view/templates/footer.inc.php';
    ?>
</body>

</html>