<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="admincss/img/avatar-9.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">The Lunchbox</h1>
        <p>Recipe Admin Dashboard</p>
      </div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
      <!-- Dashboard Link -->
      <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
          <a href="{{ url('dashboard') }}">
              <i class="icon-home"></i> Dashboard
          </a>
      </li>
  
      <!-- Manage Recipes Link -->
      <li class="{{ request()->is('recipe_data') ? 'active' : '' }} dropdown">
          <a href="{{ url('recipe_data') }}">
              <i class="icon-grid"></i> Manage Recipes
          </a>
      </li>

      <!-- Manage review -->

      <li class="{{ request()->is('review_all') ? 'active' : '' }} dropdown">
        <a href="{{ url('review_all') }}">
            <i class="icon-grid"></i> Manage Reviews
        </a>
    </li>


  </ul>
  
</nav>
