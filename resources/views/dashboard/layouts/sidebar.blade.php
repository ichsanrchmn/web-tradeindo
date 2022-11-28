<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-5 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            My Posts
          </a>
        </li>
        @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid" class="align-text-bottom"></span>
            Post Categories
          </a>
        </li>
      </ul>
      @endcan
      <hr>
        <li class="nav-item">
          <a class="nav-link">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3 border-0"><span data-feather="power"></span> Logout</button>
            </form>
          </a>
        </li>
      </ul>
    </div>
</nav>