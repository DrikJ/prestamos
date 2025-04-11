@extends("componentes.layout")
@section("content")
@component("componentes.breadcrumbs",["breadcrumbs"=>$breadcrumbs])
@endcomponent

<div class="row my-4">
    <div class="col">
        <h1>Reportes</h1>
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="col-md-4">
    <a href="{{ route('prestamosVigentes') }}" class="btn-menu">Préstamos Vigentes</a>
</div>
<div class="col-md-4">
    <a href="{{ route('matrizAbonos') }}" class="btn-menu">Resumen de Abonos Cobrados</a>
</div>

    </div>
</div>

@endsection

