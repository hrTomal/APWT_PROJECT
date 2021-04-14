<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto" method="post" action={{route('search.product')}}>
               @csrf
               <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('seller.pages.index')}}">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('sms')}}">Messages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('order.order_total')}}">Total Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('order.order_amount')}}">Cash</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('seller.upcoming.products')}}">Upcoming Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('buyer.list')}}">Message Buyer</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link " href="{{route('search.product')}}">Search Products</a>
                  </li> -->
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="search products" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <input type="submit" name="sumit" value="Search">
                    </div>
                  </div>

                </ul>
              </div>                     
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Foyaz Ahmed</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{route('profile')}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav> 
    </div>
</div>