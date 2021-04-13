@extends('layout.nav_bar')

@section('title')
Employee list...
@endsection

@section('page_title')
<h1>Employee list</h1>
@endsection

@section('main_content')
    <table border="1">
        <tr>
            <td>ID </td>
            <td>Name </td>
            <td>Designation</td>
            <td>Salary</td>
            <td>Action</td>
        </tr>
        @foreach ($employee as $employee)
        <tr>
            <td>{{ $employee->UserId }} </td>
            <td>{{ $employee->Name }} </td>
            <td>{{ $employee->Type }} </td>
            <td>{{ $employee->Salary }} </td>
        </tr>
        @endforeach        
    </table>
    
@endsection