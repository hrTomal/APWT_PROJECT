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
        @foreach ($personlist as $personlist)
        <tr>
            <td>{{ $personlist->Name }} </td>
            <td>{{ $personlist->Type }} </td>
            <td>{{ $personlist->Salary }} </td>
        </tr>
        @endforeach        
    </table>
    
@endsection