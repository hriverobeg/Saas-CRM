<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" id="js-trigger-nav-team">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar" id="main-scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav" id="main-sidenav">
          <ul id="sidebarnav">

              <!--home-->
              <li class="sidenav-menu-item menu-tooltip menu-with-tooltip" title="Home">
                  <a class="waves-effect waves-dark" href="/app-admin/home" aria-expanded="false" target="_self">
                      <i class="ti-home"></i>
                      <span class="hide-menu">Dashboard</span>
                  </a>
              </li>

              <!--customer-->
              <li class="sidenav-menu-item {{ $page['mainmenu_admin'] ?? '' }} menu-tooltip menu-with-tooltip"
                  title="Customers">
                  <a class="waves-effect waves-dark" href="/admin" aria-expanded="false" target="_self">
                      <i class="sl-icon-people"></i>
                      <span class="hide-menu">Admin</span>
                  </a>
              </li>

              <li class="sidenav-menu-item {{ $page['mainmenu_cliente'] ?? '' }} menu-tooltip menu-with-tooltip"
                  title="Customers">
                  <a class="waves-effect waves-dark" href="/cliente" aria-expanded="false" target="_self">
                        <i class="sl-icon-user-follow"></i>
                      <span class="hide-menu">Cliente</span>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>