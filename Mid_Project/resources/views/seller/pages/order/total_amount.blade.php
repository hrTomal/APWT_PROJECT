@extends('seller.layouts.main')
@section('title')
   Amount Page
@endsection
<!-- Main Content -->
@section('main_content')
<br><br><br>
<div class="main-content card-body>
  <section class="section">
<div class="card-body">
  <div class="table-responsive table-invoice">
  <table class="table table-hover table-striped">
   		 <tr align="center">
        <th>Total Cash:</th>
        <th>{{ $sum }}</th>
    </tr>
	</table>
</div>
</div>
</section>
</div>

@endsection