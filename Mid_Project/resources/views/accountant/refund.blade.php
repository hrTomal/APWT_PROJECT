@extends('layout/nav_bar')

@section('main_content')
    <table border="1">
        <tr>
            <td>SALE ID</td>
            <td>Details</td>
            <td>Status</td>
        </tr>

        @for($i=0; $i < count($sale); $i++)
        <tr>
            <td>{{ $sale[$i]['sale_id'] }}</td>
            <td>{{ $sale[$i]['details'] }}</td>
            <td>{{ $sale[$i]['status'] }}</td>
            <td>
                <a href="{{ route('sale_refund', [$sale[$i]['sale_id']]) }}">Refund</a>
            </td>
        </tr>
        @endfor
    </table>
@endsection