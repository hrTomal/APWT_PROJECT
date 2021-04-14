 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Seller Dashboard &mdash; Foyaz </title>

  @include('seller.partials.style')
  <style>
    .card{
        margin-left:300px;
        margin-top:100px;
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
 
  @include('seller.partials.navbar')
  @include('seller.partials.sidebar_content')
  <br><br><br>
    <div class = "card">

        <div class="card-header">
            Profile Edit
        </div>
        <div class="card-body">
            <form method ="post" enctype="multipart/form-data">
                @csrf
                @include('seller.partials.message')
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" name="name" value="{{ $person['name'] }}">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" name="email" value="{{ $person['email'] }}" >
              </div>     
              <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" name="password" value="{{ $person['password'] }}">
              </div> 
              <div class="form-group">
                <label for="">Gender</label>
                <br>
                <input type="radio" name="gender" value="Male" @if ($person['gender'] == "Male") checked @endif   }}">Male
                <input type="radio" name="gender" value="Female" @if ($person['gender'] == "Female") checked @endif   }}">Female

              </div>

              <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control" id="" name="status" value="{{ $person['status'] }}">
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="" name="phone" value="{{ $person['phone'] }}">
              </div>
              <div class="form-group">
                <label for="">Salary</label>
                <input type="text" class="form-control" id="" name="salary" value="{{ $person['salary'] }}">
              </div>
              <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="text" class="form-control" id="" name="DOB" value="{{ $person['dob'] }}">
              </div>     

              <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
  </div>
  @include('seller.partials.footer')
  @include('seller.partials.scripts')

</div>
</div>
