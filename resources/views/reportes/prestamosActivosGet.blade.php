@extends('componentes.layout')

@section('content')
    @component('componentes.breadcrumbs', ["breadcrumbs" => $breadcrumbs])
    @endcomponent

    <div class="row my-4">
        <div class="col">
            <h1>Préstamos Activos</h1>
        </div>
    </div>

    <form class="card p-4 my-4" action="{{ url('/reportes/prestamos-activos') }}" method="get">
        <div class="row">
            <div class="col form-group">
                <label for="txtfecha">Fecha</label>
                <input class="form-control" type="date" name="fecha" id="txtfecha" value="{{ $fecha }}">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn-primary btn">Filtrar</button>
            </div>
        </div>
    </form>

    @if ($prestamos->count())
        <table class="table" id="maintable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRESTADO</th>
                    <th>CAPITAL</th>
                    <th>INTERES</th>
                    <th>COBRADO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestamos as $prestamo)
                    <tr>
                        <td>{{ $prestamo->id_prestamo }}</td>
                        <td>{{ $prestamo->nombre }}</td>
                        <td>{{ number_format($prestamo->monto, 2) }}</td>
                        <td>{{ number_format($prestamo->total_capital ?? 0, 2) }}</td>
                        <td>{{ number_format($prestamo->total_interes ?? 0, 2) }}</td>
                        <td>{{ number_format($prestamo->total_cobrado ?? 0, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">TOTAL</th>
                    <th>{{ number_format($prestamos->sum('monto'), 2) }}</th>
                    <th>{{ number_format($prestamos->sum('total_capital'), 2) }}</th>
                    <th>{{ number_format($prestamos->sum('total_interes'), 2) }}</th>
                    <th>{{ number_format($prestamos->sum('total_cobrado'), 2) }}</th>
                </tr>
            </tfoot>
        </table>
    @else
        <p>No hay préstamos activos en este momento.</p>
    @endif
@endsection
