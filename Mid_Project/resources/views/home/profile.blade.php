<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">

</head>
<body>
<!-- 
<h2 style="text-align:center">User profile</h2> -->

<div class="card">
  <img src="{{asset('img/profile.png')}}" alt="profile picture" style="width:55%">
  <h1>{{ $user['Name']}}</h1>
  <p class="title">{{ $user['Type'] }}</p>
  <hr>
  <p>User Id: {{ $user['UserId'] }}</p>
  <p>Email: {{ $user['Email'] }}</p>
  <p>Gender: {{ $user['Gender'] }}</p>
  <p>Phone: {{ $user['PhoneNo'] }}</p>
  <p>Date of Birth: {{ $user['DOB'] }}</p>
  <p>Salary: {{ $user['Salary'] }}</p>
  <hr>

  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="location.href='/change_password/{{ session('UserId') }}';">Change Password</button></p>
</div>

</body>
</html>
@extends('layout.nav_bar')
