@extends('layout.nav_bar')

@section('main_content')
    <form method='post'>
    @csrf
        <table>
            <tr>
                <td>
                    Enter user id: 
                </td>    
            </tr>
            <tr>
                <td>
                    <input type="text" name="search_text">
                </td>    
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Search">
                </td>    
            </tr>
        </table>
    </form>
@endsection