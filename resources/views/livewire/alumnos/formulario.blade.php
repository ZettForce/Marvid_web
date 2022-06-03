<div>
    <form class="bg-img" >
        <div class="form-row">
          <div class="form-group col-md-3">
            <label >Primer Nombre *</label>
            <input wire:model.defer="alumno.nombre" type="text" class="form-control"  placeholder="Jesus">
            @error('alumno.nombre') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-3">
            <label >Segundo Nombre</label>
            <input wire:model.defer="alumno.nombre" type="text" class="form-control"  placeholder="Antonio">
            @error('alumno.nombre2') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-3">
            <label >Apellido Paterno *</label>
            <input wire:model.defer="alumno.apellidoPaterno" type="text" class="form-control" placeholder="Martínez">
            @error('alumno.apellidoPaterno') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-3">
            <label >Apellido Materno *</label>
            <input wire:model.defer="alumno.apellidoMaterno" type="text" class="form-control" placeholder="López">
            @error('alumno.apellidoMaterno') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Domicilio *</label>
            <input wire:model.defer="alumno.domicilio" type="text" class="form-control" placeholder="Calle y Número">
            @error('alumno.domicilio') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-4">
            <label>Colonia *</label>
            <select wire:model.defer="alumno.colonia" class="form-control">
              <option selected>Selecciona...</option>
              <option>Campamento</option>
              <option>Campestre</option>
              <option>Chula Vista I</option>
              <option>Del Bosque</option>
              <option>La Grullita</option>
            </select>
            @error('alumno.colonia') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-2">
            <label>Código Postal</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Télefono Celular *</label>
                <input type="text" class="form-control" placeholder="(653) 123 1234">
            </div>
            <div class="form-group col-md-3">
                <label>Télefono Casa </label>
                <input type="text" class="form-control" placeholder="(653) 123 1234">
            </div>
            <div class="form-group col-md-3">
                <label>* Fecha Nacimiento <i class="fas fa-calendar input-prefix"></i> </label>
                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                    <input placeholder="Select date" type="text" id="example" class="form-control">

                  </div>
            </div>
            <div class="form-group col-md-3">
                <label>Nacionalidad *</label>
                <select wire:model.defer="alumno.colonia" class="form-control">
                    <option selected>México</option>
                    <option>Estados Unidos</option>
                    <option>Guatemala</option>
                    <option>Venezuela</option>
                  </select>
            </div>


        </div>
        <br>
        <br>
        <div class="card-header" style="text-align: center;color:white;background-color:#800000" >
            Datos de escuela de procedencia
        </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Secundaria</label>
                <input type="text" class="form-control" placeholder="Nombre escuela">
            </div>
            <div class="form-group col-md-4">
                <label>Estado</label>
                <input type="text" class="form-control" placeholder="Nombre escuela">
            </div>
            <div class="form-group col-md-4">
                <label>Promedio</label>
                <input type="text" class="form-control" placeholder="100">
            </div>
        </div>
        * campos obligatorios
      </form>
</div>
