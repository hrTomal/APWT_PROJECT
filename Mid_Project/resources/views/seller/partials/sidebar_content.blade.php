<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <h5>Welcome to Id:{{ session('name') }}</h5>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="{{ route('notice') }}"><i class="fas fa-columns"></i> <span>Notice</span></a>

              </li>
              
              <li class="nav-item dropdown">
                <a href="{{ route('order.order_view') }}"><i class="fas fa-columns"></i> <span>Manage Order</span></a>

              </li>
              <li class="nav-item dropdown">
                <a href="{{ route('seller.products.quantity') }}"><i class="fas fa-columns"></i> <span>Products Quantity</span></a>
              </li>

              <li class="menu-header">Products</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Manage Products</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('seller.products.view') }}">Product view</a></li>
                  <li><a class="nav-link" href="{{ route('seller.product.create') }}">Add Product</a></li>
                </ul>
              </li>
              <br><br>
              <li class="menu-header">Category</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Manage Catagory</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('seller.category.category_view') }}">Category view</a></li>
                  <li><a class="nav-link" href="{{ route('seller.category.create_category') }}">Add category</a></li>
                </ul>
              </li>

              <br><br>
              
    </aside>
</div>