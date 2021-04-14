@extends('seller.layouts.main')

@section('title')
   Order page
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
      <td>Order Id</td>
      <td>Details</td>
      <td>Quantity</td>
      <td>Payment Status</td>
      <td>Order Date</td>
      <td>Buyer Id</td>
      <td>Buyer Address</td>
      <td>Amount</td>
      <td>Action</td>
    </tr>
     @foreach($order as $value)
     <tr align="center">
        <td><a href="#">{{ $value['id']   }}</a></td>
        <td class="font-weight-600">{{ $value['order_details']   }}</td>
        <td class="font-weight-600">{{ $value['order_quantity']  }}</td>
        @if($value['payment_status']== "pending")
        <td><div class="badge badge-warning">{{ $value['payment_status']  }}</div></td>
        @endif

        @if($value['payment_status'] == "clear")
        <td><div class="badge badge-success">{{$value['payment_status'] }}</div></td>
        @endif

        <td>{{ $value['order_date']  }}</td>
        <td>{{ $value['buyer_id']  }}</td>
        <td>{{ $value['buyer_address']  }}</td>
        <td>{{ $value['Amount']  }}</td>
        <td>
          <a href="{{route('order.order_details', $value['id'])}}" class="btn btn-primary">Detail</a>
          <hr>
          <a class="btn btn-danger" href="#deleteModal{{ $value['id'] }}" data-toggle="modal">Remove</a>
          <hr>

           <!--  modal delete -->

           <div class="modal fade" id="deleteModal{{ $value['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form  action="{!! route('order.order_delete', $value['id']) !!}" method ="post">
                    @csrf
                     <button type="submit" class="btn btn-danger">Cancel Order</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

        </td>

      </tr>
    @endforeach
  </table>
</div>
</div>
</section>
</div>
@endsection

