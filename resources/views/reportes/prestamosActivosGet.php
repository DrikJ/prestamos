@extends("componentes.layout")

@section("content")

    @component("componentes.breadcrumbs", ["breadcrumbs" => $breadcrumbs])
    @endcomponent

    <h2>Préstamos Activos</h2>

    @if ($prestamos->count() > 0)
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRESTADO</th>
                    <th>CAPITAL</th>
                    <th>INTERÉS</th>
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
