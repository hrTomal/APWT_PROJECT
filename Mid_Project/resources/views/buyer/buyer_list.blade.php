@extends('seller.layouts.main')

@section('title')
 Buyer List Page
@endsection
  <!-- Main Content -->
  @section('main_content')
<br><br><br>
<div class="main-content card-body>
  <section class="section">
<div class="card-body">
  @include('seller.partials.message')
  <div class="table-responsive table-invoice">
  <table class="table table-hover table-striped">
    <tr align="center">
        <th>Employee ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Type</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>Action</th>
    </tr>
    @foreach($person as  $value)
    <tr align="center">
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['email'] }}</td>
        <td>{{ $value['gender'] }}</td>
        <td>{{ $value['type'] }}</td>
        <td>{{ $value['phone'] }}</td>
        <td>{{ $value['dob'] }}</td>
        <td>
       <a  class="btn btn-success" href="{{route('buyer.message', $value['id'])}}">Message</a>
        </td>
    </tr>
    <tr>
    @endforeach  
</table>
@endsection
