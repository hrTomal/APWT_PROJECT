@extends('layout.nav_bar')

@section('main_content')
    <form method='post' enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Number of months: </td>
                <td><input type='text' name='numberOfMonths'></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate"></td>
            </tr>
            <tr>
                <td>Total : </td>
                <td><input type='text' name='total' value="{{ session('total_salary') }}" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='button' onclick="location.href='/send_for_salary_approval';" value="Send for Approval"></input></td>
            </tr>
        </table>
    </form>
@endsection