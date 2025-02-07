
</html>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generador de Textos Legales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="mb-3 container">
        <h1 class="mx-auto">Generador de Textos Legales</h1>
        <form id="myForm" action="" method="POST" target="_blank">
            <div class="row mb-3 ">
                <div class="col-sm-2">
                    <label for="razonSocial" class="col-form-label">Razon Social:</label>
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="razonSocial" id="razonSocial" class="form-control"><br>
                </div>
            </div>
            <div class="row mb-3 ">
                <div class="col-sm-2">
                    <label for="NombreComercial" class="col-form-label">Nombre Comercial:</label>
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="nombreComercial" id="nombreComercial" class="form-control"><br>
                </div>
            </div>
            <div class="row mb-3 justify-content-start">
                <div class="col-sm-2">
                    <label for="NIF" class="col-form-label">NIF:</label>
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="NIF" id="NIF" class="form-control"><br>
                </div>
            </div>
            <div class="row mb-3 justify-content-start">
                <div class="col-sm-2">
                    <label for="domicilio" class="col-form-label">Domicilio:</label>
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="domicilio" id="domicilio" class="form-control"><br>
                </div>
            </div>
            <div class="row mb-3 justify-content-start">
                <div class="col-sm-2">
                    <label for="website" class="col-form-label">Sitio web:</label>
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="website" id="website" class="form-control"><br>
                </div>
            </div>
            <div class="row mb-3 justify-content-start">
                <div class="col-sm-2">
                    <label for="correo" class="col-form-label">Correo:</label>
                </div>
                <div class="col-sm-8 ">
                <input type="text" name="correo" id="correo" class="form-control"><br>
                </div>
            </div>
            <div class="row mb-3 justify-content-start">
                <div class="col-sm-2">
                <label for="fecha" class="col-form-label">Fecha</label>
                </div>
                <div class="col-sm-8 ">
                <input type="text" name="fecha" id="fecha" class="form-control"><br>
                </div>
            </div>
            <button type="submit" data-action="./textos-legales/cookies.php" class="btn btn-primary m-1">Política de cookies</button><br>
            <button type="submit" data-action="./textos-legales/accesibilidad.php" class="btn btn-success m-1">Declaración de Accesibilidad</button><br>
            <button type="submit" data-action="./textos-legales/privacidad.php" class="btn btn-info m-1">Política de privacidad</button>
        </form>
    </div>
  

        <script>
            document.getElementById('myForm').addEventListener('submit', function(e) {
                var action = e.submitter.getAttribute('data-action');
                e.target.action = action;
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"          crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>