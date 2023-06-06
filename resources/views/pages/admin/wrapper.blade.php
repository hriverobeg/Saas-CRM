@extends('layout.wrapper') 
@section('content')
<div class="container-fluid">

  <!--page heading-->
  <div class="row page-titles">
      <!-- bread crumbs -->
      @include('misc.crumbs')
      <!-- bread crumbs -->

      <!-- action buttons -->
      @include('pages.admin.actions.page-actions')
      <!-- action buttons -->
  </div>
   <!--page heading-->

  <!-- page content -->
  <div class="row">
    <div class="col-12">
      <!--clients table-->
      @include('pages.admin.table.table')
      <!--clients table-->
    </div>
  </div>
  <!--page content -->

</div>
@endsection