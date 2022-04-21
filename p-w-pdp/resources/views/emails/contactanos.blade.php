<!DOCTYPE html>
<head>
    <title> contactanos</title>
    <meta charset="UTF-8">

    <style>
        h1{
            color: blue;
        }
    </style>

</head>
<body>
    <h1>correo electronico</h1>
    <p>este es el primer correo que mandare a laravel</p>
    <p> <strong> Nombre :</strong> {{$contacto['name']}} </p>
    <p> <strong> Correo :</strong> {{$contacto['correo']}} </p>
    <p> <strong> Mensaje :</strong> {{$contacto['mensaje']}} </p>
</body>
</html>
