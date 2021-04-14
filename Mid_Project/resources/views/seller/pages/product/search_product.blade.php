@extends('seller.layouts.main')

@section('title')
 Products Page
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
      <td>{{$product}}</td>
    </tr>
     
       <tr align="center">
        
   </tr>
  </table>
                  </div>
                </div>
        </section>
      </div>

  @endsection