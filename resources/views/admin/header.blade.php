<header class="header">   
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="Search recipes...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header-->
          <a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase">
              <strong class="text-primary">The</strong><strong>Lunchbox</strong>
            </div>
            <div class="brand-text brand-sm">
              <strong class="text-primary">T</strong><strong>L</strong>
            </div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">    
          
          <!-- Log out               -->
          <div class="list-inline-item logout">          
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button type="submit" class="btn btn-link" style="text-decoration: none; color: inherit;">
                    {{ __('Log Out') }}
                </button>
            </form>     
        </div>        
        </div>
      </div>
    </nav>
</header>
