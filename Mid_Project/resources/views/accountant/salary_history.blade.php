@extends('layout.nav_bar')

@section('title')
Salary History...
@endsection

@section('page_title')
<h1>Salary History</h1>
@endsection

@section('main_content')
    <table border="2">
        <tr>
            <td>Salary Id</td>
            <td>Total salary</td>
            <td>Details</td>
            <td>Status</td>
        </tr>
        @for($i=0; $i < count($transactionlist); $i++)
        <tr>
            <td>{{ $transactionlist[$i]['salary_id'] }} </td>
            <td>{{ $transactionlist[$i]['total_salary'] }}</td>
            <td>{{ $transactionlist[$i]['details'] }}</td>
            <td>{{ $transactionlist[$i]['status'] }}</td>
        </tr>
        @endfor
        
    </table>
    {{ $transactionlist->links() }}
@endsection