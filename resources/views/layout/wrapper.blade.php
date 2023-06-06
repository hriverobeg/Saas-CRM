<!DOCTYPE html>
<html lang="en" class="app-admin">

<!--html header-->
@include('layout.header')
<!--html header-->

<body id="main-body" class="loggedin fix-header card-no-border fix-sidebar {{ $page['page'] ?? '' }}">
    <!--main wrapper-->
    <div id="main-wrapper">

       <!--top nav-->
       @include('layout.topnav') @include('layout.leftmenu')
       <!--top nav-->

       <!--page wrapper-->
       <div class="page-wrapper">
          <!--overlay-->
          <div class="page-wrapper-overlay js-close-side-panels hidden" data-target=""></div>
          <!--overlay-->

          <!--preloader-->
          <div class="preloader">
            <div class="loader">
                <div class="loader-loading"></div>
            </div>
          </div>
          <!--preloader-->

          <!-- main content -->
          @yield('content')
          <!-- /#main content -->

       </div>
        <!--page wrapper-->
    </div>
    <!--main wrapper-->

    <!--common modals-->
    @include('modals.common-modal-wrapper')
    <!--common modals-->

     <!--js footer-->
     @include('layout.footerjs')
</html>