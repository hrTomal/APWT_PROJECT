@extends('layout.nav_bar')

@section('title')
Salary Details...
@endsection

@section('page_title')
<h1>Salary details</h1>
@endsection

@section('main_content')
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Designation</td>
            <td>Salary</td>
        </tr>
        @for($i=0; $i < count($personlist); $i++)
        <tr>
            <td>{{ $personlist[$i]['Name'] }} </td>
            <td>{{ $personlist[$i]['Type'] }}</td>
            <td>{{ $personlist[$i]['Salary'] }}</td>
        </tr>
        @endfor
        
    </table>
    {{ $personlist->links() }}
@endsection