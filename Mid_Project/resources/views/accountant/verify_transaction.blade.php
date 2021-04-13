@extends('layout.nav_bar')

@section('main_content')
    <hr>
    <form method='post'>
    @csrf
        <table>
            <tr>
                <td>
                    Enter Transaction id: 
                </td>
                <td>
                    <input type="text" name="transaction_id">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
        {{session('transaction_message')}}
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </form>
    
@endsection