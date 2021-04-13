@extends('layout.nav_bar')

@section('main_content')
    <form method="post">
    @csrf
        <fieldset>
            <legend> NOTICE BOARD </legend>
            <table border="1">
                <tr>
                    <td>Notice id </td>
                    <td>Notice </td>
                    @if( session('Type') == "sa")
                    <td>Action </td>
                    @endif
                </tr>
                @foreach ($active_notice as $active_notice)
                <tr>
                    <td>{{ $active_notice->notice_id }} </td>
                    <td>{{ $active_notice->details }} </td>
                    @if( session('Type') == "sa")
                    <td><a href="{{ route('notice.delete', [$active_notice->notice_id]) }}">Delete</a> </td>
                    @endif
                </tr>
                @endforeach
            </table>
        </fieldset>
        <table >
        
            @if( session('Type') == "sa")
                <tr>
                    <td>
                    <!-- <input type="textarea" name="notice_text"> -->
                    <textarea name="notice_text" rows="4" cols="50"> </textarea>
                    </td>
                </tr>
                <tr>
                <td>
                    <input type="submit" Value="Add Notice">
                </td>
            </tr>
            @endif
        </table>
    </form>
    {{session('message')}}

	@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endsection