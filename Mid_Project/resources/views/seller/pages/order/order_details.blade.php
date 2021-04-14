@extends('seller.layouts.main')

@section('title')
   Order Details page
@endsection
<!-- Main Content -->
@section('main_content')
<br><br><br>
<div class="main-content card-body>
  <section class="section">
<div class="card-body">
  <div class="table-responsive table-invoice">
  <table class="table table-hover table-striped">
        <tr>
            <td>Order ID:</td>
            <td>{{ $order['id'] }}</td>
        </tr>
        <tr>
            <td>Order Details:</td>
            <td>{{ $order['order_details'] }}</td>
        </tr>
        <tr>
            <td>Payment Status:</td>
            <td>{{ $order['payment_status'] }}</td>
        </tr>
        <tr>
            <td>Order Quantity:</td>
            <td>{{ $order['order_quantity'] }}</td>
        </tr>
        <tr>
            <td>Order Date:</td>
            <td>{{ $order['order_date'] }}</td>
        </tr>
        <tr>
            <td>Buyer Id:</td>
            <td>{{ $order['buyer_id'] }}</td>
        </tr>
        <tr>
            <td>Buyer Address:</td>
            <td>{{ $order['buyer_address'] }}</td>
        </tr>
</table>
</div>
</div>
</section>
</div>
@endsection


