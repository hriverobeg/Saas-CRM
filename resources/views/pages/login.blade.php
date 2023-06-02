@extends('layout.wrapperplain') 
@section('content')

<div class="login-logo m-t-30 p-b-5">
  <a href="javascript:void(0)" class="text-center db">
      <img src="/storage/logos/app/logo-landlord.png" alt="Home">
  </a>
</div>

<div class="login-box m-t-20">
  <form class="form-horizontal form-material" id="loginForm">
      <div class="title">
          <h4 class="box-title m-t-10 text-center">Login</h4>
          <div class="text-center  m-b-20 ">
          </div>
      </div>
      <div class="form-group">
          <div class="col-xs-12">
              <input class="form-control" type="text" name="email" id="email"
                  placeholder="Email">
          </div>
      </div>
      <div class="form-group">
          <div class="col-xs-12">
              <input class="form-control" type="password" name="password" id="password"
                  placeholder="Password">
          </div>
      </div>
      <div class="form-group text-center p-b-10">
          <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block" id="loginSubmitButton" type="submit">Login</button>
          </div>
      </div>
  </form>
</div>

<div class="login-background">
  <div class="x-left">
      <img src="/images/login-1.png" class="login-images" />
  </div>
  <div class="x-right hidden">
      <img src="/images/login-2.png" alt="404 - Not found" />
  </div>
</div>
@endsection