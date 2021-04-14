@extends('seller.layouts.main')

@section('title')
 Dashboard Page
@endsection

  <!-- Main Content -->
  @section('main_content')
      <br><br><br>
      <div class="main-content card-body>
        <section class="section">
                 <div class="card-body">
                  <div class="table-responsive table-invoice">
                    @include('seller.partials.message')
                  </div>
                </div>
        </section>
      </div>

  @endsection