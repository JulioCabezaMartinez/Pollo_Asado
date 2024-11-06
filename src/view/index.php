<!DOCTYPE html>
<html lang="en">
<?php
    require_once '../view/templates/head.inc.php'
?>
<body>
    <?php
    require "../view/templates/header.php";
    ?>
    <div id="portada" class="green_spartan_letters">
        <div id="pollo_asado">
            <h1>POLLO</h1>
            <h1>ASADO</h1>

            <p>Sabor Autentico desde <span>1978</span></p>
        </div>

        <div id="descubre">
            <p>Descubre por qué somos <br> los favoritos de Barbate</p>
            <a href=""><img src="../../assets/IMG/Botón Banner.webp"></a>
        </div>
    </div>

    <div id="main-1">
        <div id="main-1-1">            
            <div>
                <img id="img_polloAsado" src="../../assets/IMG/Pollo_Asado_Main_AsadorGuillem_AsadorBarbate.webp">
                <img id="img_salsa" src="../../assets/IMG/Salsa_Main_AsadorGuillem_AsadorBarbate.webp">
            </div>
            <div>
                <h3 class="titulo-main">EL SABOR Y EL ESTILO TRADICIONAL DE LA PREPARACIÓN</h3>
                <strong class="strong-main">Nuestro pollo asado no es solo una comida, es una tradición que llevamos perfeccionando desde 1978. Lo que nos hace únicos es la receta original a las finas hierbas, creada por mi padre 
                “don Hilario Guillén”.</strong>
                <p class="text-main">Cada pollo es cuidadosamente preparado con ingredientes de la mejor calidad, asegurando un sabor inigualable y una textura jugosa que te hará volver. No usamos atajos, mantenemos la técnica tradicional de siempre que garantiza no solo un pollo delicioso, sino también saludable. Elegir nuestro asador es apostar por lo auténtico, donde el sabor y la calidad son siempre nuestra prioridad.</p>
                <button class="green_spartan_letters">Saber más</button>
            </div>
        </div>
        <div id="main-1-2">
            <div>
                <h3 class="titulo-main">SABOREA LA DIFERENCIA</h3>
                <div>
                    <strong class="strong-main">Ingredientes frescos</strong>
                    <p class="text-main">Usamos solo los mejores ingredientes para crear un pollo asado que deleitará tu paladar.</p>
                </div>
                <div>
                    <strong class="strong-main">Recogida rápida</strong>
                    <p class="text-main">Disfruta de tu pollo asado, caliente y fresco, listo para su recogida en poco tiempo.</p>
                </div>
                <div>
                    <strong class="strong-main">Recetas familiares</strong>
                    <p class="text-main">Nuestro pollo se prepara siguiendo una receta familiar y elaboración que ha pasado de padre a hijo.</p>
                </div>
                
            </div>
            
            <img src="../../assets/IMG/Trabajador_Main_AsadorGuillem_AsadorBarbate.webp" style="width: 60%;">
            
        </div>
    </div>

    <div id="main-2">
        <div id="main-2-1">
            <a href=""><img src="../../assets/IMG/Botón Banner.webp"></a>
            <h4 class="titulo-main">SIENTE EL SABOR AUTÉNTICO & ORIGINAL CON NOSOTROS</h4>
        </div>
        <div id="main-2-2">
            <div class="main-tripleIzq">
                <h4>Historia y tradicion</h4>
                <p>El Asador de Pollos Hilario Guillén es un legado familiar con casi cinco decadas de tradición, siendo un referente en la calle Pio XII, Barbate.</p>
            </div>
            <div class="main-tripleCen">
                <h4>Especialización</h4>
                <p>Enfocados solo en pollo asado, garantizando una calidad excepcional al dedicar todo nuestro esfuerzo a perfecionarlo.</p>
            </div>
            <div class="main-tripleDer">
                <h4>Calidad y Sabor</h4>
                <p>Nos enorgullece ofrecer una comida que no solo es deliciosa, sino tambien una opción nutritiva y saludable ideal para toda la familia</p>
            </div>
        </div>
    </div>
    <div id="main-3">
        <h2>LO QUE DICEN NUESTROS CLIENTES</h2>
        <div>
            <div>
                <h4>"Mejor Pollo de España"</h4>
                <p>Sin duda, aquí estan los mejores pollos asados de España. Cada vez que vengo me sorprende lo jugosos y sabrosos que son. Recomiento a todos que lo prueben, no se van a arrepentir.</p>

                <hr>

                <div>
                    Perfil
                </div>
            </div>
            <div>
                <h4>"Mi favorito para pollo asado"</h4>
                <p>¡Muy buenos pollos asados, lo mejor de Barbate! Siempre jugosos y llenos de sabor, además la atencion es excelente. Es mi sitio favorito para disfrutar de un buen pollo asado.</p>

                <hr>

                <div>
                    Perfil
                </div>
            </div>
            <div>
                <h4>"El campeón en pollo"</h4>
                <p>El Cristiano Ronaldo del asado. Increíble, piel muy crujiente, carne sabrosa y en su punto tanto de sal como de cocción. Este producto es el resultado de muchísimos años de completa dedicación, lo recomiendo encarecidamente.</p>

                <hr>

                <div>
                    Perfil
                </div>
            </div>
        </div>
    </div>
        
    <?php
    require '../view/templates/footer.inc.php';
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>