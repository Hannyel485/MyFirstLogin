
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ass/styles.css">
    <title>Registro</title>
</head>
<body>
<div class="wrapper">
            <div class="fondo">
                <section>
                    <form id="form" method="POST" action="../includes/registrar.php">
                        <h2 class="tittle">Bienvenido</h2>
                        <div class="inpus">
                            <input type="email" name="mail" placeholder="Correo" class="mail form-in" id="mail">
                            <input type="password" name="pass" placeholder="Contraseña" class="pass form-in" id="password">
                        </div>
                        <div class="cont-btn">
                            <input type="submit" class="btn" value="Registrat" id="submit">
                        </div>
                        <ul id="warnings" class="warnings"></ul>
                    </form>
                </section>
            </div>
        </div>
    <script src="ass/app.js"></script>
</body>
</html>