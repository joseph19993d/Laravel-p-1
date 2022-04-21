<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title> @yield("title") </title>


    <!-- favicon -->
    <!-- estilos -->
   <!-- <script src="https://cdn.tailwindcss.com"></script> -->
   <style>
       .active{
           color: red;
       }
   </style>


</head>
<body>
    @include('layouts.partials.header')
    <!-- nav -->

    <div class=body>
        @yield('content')
    </div>

    @include('layouts.partials.footer')
    <!-- script -->

</body>
</html>
