<div class="container-lg">
  <div class="card shadow-lg  m-4 rounded">
    <div class="card-header shadow-sm bg-white">
      <div class="row">
        <div class="col-2">
          <img src="./recursos/img/logo_1.png" class="img-fluid pt-2" style="width: 120px;">
        </div>
        <div class="col-10" style="padding-right: 160px;">
          <h2 class="style-fs text-center text-white" style="margin-top: 10px;">Formato Inscripción de Beneficiario</h2>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="container mt-3 px-4">
        <form class="row g-3" action="" method="POST">
           <!-- Input Numero de Documento del Titular -->
          <div class="col-12">
            <label for="" class="form-label fw-semibold">Numero de Documento del Titular del Servicio</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId"
              placeholder="Digite un numero de identifiacion">
            <small id="emailHelpId" class="form-text text-muted">Si no ha creado un titular, no complete este
              formulario</small>
          </div>

          <!-- Input Tipo de Documento  -->
          <div class="col-12">
            <label for="tipo_doc" class="form-label fw-semibold">Tipo de Documento</label>
            <select class="form-select form-select-md" name="" id="tipo_doc">
              <option selected>Seleccionar Tipo de Documento</option>
            </select>
          </div>

          <!-- Input Numero de Documento  -->
          <div class="col-12">
            <label for="" class="form-label fw-semibold">Número de Documento</label>
            <input type="text" class="form-control" name="" id="num_doc" aria-describedby="emailHelpId"
              placeholder="Digite su Número de Documento">
          </div>

          <!-- Input Nombres -->
          <div class="col-6">
            <label for="" class="form-label fw-semibold">Nombres</label>
            <input type="text" class="form-control" name="" id="nombre" aria-describedby="emailHelpId"
              placeholder="Digite su Nombre">
          </div>

           <!-- Input Apellidos -->
          <div class="col-6">
            <label for="" class="form-label fw-semibold">Apellidos</label>
            <input type="text" class="form-control" name="" id="apellido" aria-describedby="emailHelpId"
              placeholder="Digite su Apellido">
          </div>

           <!-- Input Fecha de Nacimiento -->
          <div class="col-6">
            <label for="" class="form-label fw-semibold">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="" id="fecha_nacimineto">
          </div>

          <!-- Input Celular de Contacto -->
          <div class="col-6">
            <label for="" class="form-label fw-semibold">Celular de Contacto</label>
            <input type="text" class="form-control" name="" id="celular" aria-describedby="emailHelpId"
              placeholder="Digite su Numero de Contacto">
          </div>

           <!-- Input Departamento -->
          <div class="col-6">
          <label for="dep" class="form-label fw-semibold">Departamento</label>
            <select class="form-select form-select-md" name="" id="dep">
              <option selected>Seleccionar Departamento</option>
            </select>
          </div>

           <!-- Input Municipio -->
          <div class="col-6">
          <label for="mun" class="form-label fw-semibold">Municipio</label>
            <select class="form-select form-select-md" name="" id="mun">
              <option selected>Seleccionar Municipio</option>
            </select>
          </div>

           <!-- Input Direccion de Residencia -->
          <div class="col-12">
            <label for="" class="form-label fw-semibold">Dirección de Residencia</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId"
              placeholder="Digite su Dirección">
          </div>

           <!-- Input EPS -->
          <div class="col-12">
          <label for="eps" class="form-label fw-semibold">EPS</label>
            <select class="form-select form-select-md" name="" id="eps">
              <option selected>Seleccione su EPS</option>
            </select>
          </div>
          <div class="col-12 my-4">
          <button type="submit" class="btn btn-primary"  style="width: 200px;">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>