<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Actividad Integradora Obligatoria Módulo 1</title>
</head>
<body>
    <div class="card">
        <h1>Formulario con metodo GET</h1>

        <!--FORMULARIO CON EL METODO GET-->
        <form method="get">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" maxlength="30" required>
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" minlength="8" required>
            </div>
            
            <div class="checkbox-group">
                <input type="checkbox" id="mayor18" name="mayor18" value="true">
                <label for="mayor18">Soy mayor de 18 años</label>
            </div>
            
            <div class="checkbox-group">
                <input type="checkbox" id="tyc" name="tyc" value="true">
                <label for="tyc">Acepto los <a href="#" target="_blank">Términos y Condiciones</a></label>
            </div>
            
            <div>
                <input type="submit" value="Ingresar" class="btn-submit">
            </div>
        </form> 

        <!--ESTRUCTURA DE CONTROL EN PHP-->
        <?php
        if (!empty($_GET)) {
            $esMayor   = isset($_GET['mayor18']);
            $aceptoTyc = isset($_GET['tyc']);

            if ($esMayor && $aceptoTyc) {
                echo '<div class="alert alert-success">Bienvenido al sitio</div>';
            } elseif (!$esMayor && $aceptoTyc) {
                echo '<div class="alert alert-error">No puede ingresar al sitio (Debe ser mayor de edad)</div>';
            } elseif ($esMayor && !$aceptoTyc) {
                echo '<div class="alert alert-error">Debe aceptar los términos y condiciones</div>';
            } else {
                echo '<div class="alert alert-error">Confirme mayoría de edad y acepte los términos y condiciones</div>';
            }
        }
        ?>
    </div>

</body>
</html>