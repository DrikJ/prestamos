<!DOCTYPE html>
<html lang="en">
<head>
    <!-- importar las librerías de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- importar los archivos JavaScript de Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- importar librerías de estilos y javascript de datatables para manipular tablas desde el
navegador del usuario-->
    <link href={{ URL::asset('DataTables/datatables.min.css')}} rel="stylesheet"/>
    <script src={{ URL::asset('DataTables/datatables.min.js')}}></script>
    <link href={{URL::asset("assets/style.css")}} rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos Coliman</title>
</head>
<body>
    <div class="row">
        <div class="col-2">
        @component("componentes.sidebar")
        @endcomponent
</div>
    <div class="col-10">
        <div class="container">
        @section("content")
        @show
    </div>
    </div>
    </div>
</body>
</html>