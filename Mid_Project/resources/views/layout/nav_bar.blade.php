@extends('layout.main')

@section('page_content')

@endsection

@section('nav_bar')
<input type='button' onclick="back();" value="Back">
<input type='button' onclick="location.href='/logout';" value="Logout">
<br>
@endsection
