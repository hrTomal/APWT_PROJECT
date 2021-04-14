@extends('seller.layouts.main')

<!-- Main Content -->
@section('main_content')
<br><br><br>
<div class="main-content card-body>
  <section class="section">
<div class="card-body">
  <div class="table-responsive table-invoice">
  <table class="table table-hover table-striped">
    <tr align="center">
      <td>Notice Details</td>
      <td>Date</td>
    </tr>
     @foreach($notice as $value)
     <tr align="center">
        <td><a href="#">{{ $value['noticedetails']   }}</a></td>
        <td class="font-weight-600">{{ $value['date']}}</td>
       
      

      </tr>
    @endforeach
  </table>
</div>
</div>
</section>
</div>
@endsection

