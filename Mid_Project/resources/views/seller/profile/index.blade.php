@extends('seller.layouts.main')

<!-- Main Content -->
@section('main_content')
<br><br><br>
<div class="main-content card-body>
  <section class="section">
<div class="card-body">
  <div class="table-responsive table-invoice">
  <table class="table table-hover table-striped">
     <tr>
            <td>Profile Image:</td>
            <td><img src="{{ asset('images/profile_upload') }}/{{ $person['profile_image'] }}" alt="" width="100px"
            height="100px"></td>
        </tr>
        <tr>
            <td>User ID:</td>
            <td>{{ $person['id'] }}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $person['name'] }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $person['email'] }}</td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>{{ $person['password'] }}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{ $person['gender'] }}</td>
        </tr>
        <tr>
            <td>Type:</td>
            <td>{{ $person['type'] }}</td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>{{ $person['status'] }}</td>
        </tr>
        <tr>
            <td>Salary:</td>
            <td>{{ $person['salary'] }}</td>
        </tr>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td>{{ $person['phone'] }}</td>
        </tr>
        <tr>
            <td>DOB:</td>
            <td>{{ $person['dob'] }}</td>
        </tr>
        <tr>
           <td><a href="{{ route('profile.edit')  }}">Edit Profile</a></td> 
        </tr>  
</table>
</div>
</div>
</section>
</div>
@endsection

