@extends('layout.main')

@section('page_content')

@endsection

@section('nav_bar')
<input type='button' onclick="location.href='{{ url()->previous() }}'" value="Back">
<input type='button' onclick="location.href='/logout';" value="Logout">
<!-- <a href="{{ url()->previous() }}"> Back </a> -->
<br>
@endsection
