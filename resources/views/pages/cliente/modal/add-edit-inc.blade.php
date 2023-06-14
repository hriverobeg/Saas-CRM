<div class="row">
  <div class="col-lg-12">
    <!--Name-->
    <div class="form-group row">
        <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required">Nombre</label>
        <div class="col-sm-12 col-lg-9">
            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre"
                value="{{ $cliente->nombre ?? '' }}">
        </div>
    </div>

    <!--Email-->
    <div class="form-group row">
      <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required">Email</label>
      <div class="col-sm-12 col-lg-9">
          <input type="text" class="form-control form-control-sm" id="email" name="email"
              value="{{ $cliente->email ?? '' }}">
      </div>
    </div>

    <!--Telefono-->
    <div class="form-group row">
      <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required">Teléfono</label>
      <div class="col-sm-12 col-lg-9">
          <input type="text" class="form-control form-control-sm" id="telefono" name="telefono"
              value="{{ $cliente->telefono ?? '' }}">
      </div>
    </div>
  </div>
</div>