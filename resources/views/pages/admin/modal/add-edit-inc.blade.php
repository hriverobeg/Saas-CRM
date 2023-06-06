<div class="row">
  <div class="col-lg-12">
    <!--Name-->
    <div class="form-group row">
        <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required">Nombre</label>
        <div class="col-sm-12 col-lg-9">
            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre"
                value="{{ $customer->nombre ?? '' }}">
        </div>
    </div>

    <!--Email-->
    <div class="form-group row">
      <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required">Email</label>
      <div class="col-sm-12 col-lg-9">
          <input type="text" class="form-control form-control-sm" id="email" name="email"
              value="{{ $customer->email ?? '' }}">
      </div>
    </div>

    <!--Password-->
    <div class="form-group row">
      <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required">Password</label>
      <div class="col-sm-12 col-lg-9">
          <input type="password" class="form-control form-control-sm" id="password" name="password"
              value="{{ $customer->password ?? '' }}">
      </div>
    </div>
  </div>
</div>