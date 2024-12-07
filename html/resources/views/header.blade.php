<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-white mt-2">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand text-center fw-bold" href="#" style="font-size: 1.5rem;">
                Central de Gerenciamento de Contactos
            </a>
        </div>
    </nav>
    
    <div class="container mt-4">
        <p style="text-align: justify; margin-left: auto; margin-right: auto; width: 80%;">A nossa <strong>Central de Contactos</strong> está disponível para oferecer suporte eficiente e rápido a todas as suas necessidades. </p>
    </div>

    <main>
        @yield('content')
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>