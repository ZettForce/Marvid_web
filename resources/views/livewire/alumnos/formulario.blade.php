<div>
    <form>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label >Nombres</label>
            <input wire:model.defer="alumno.nombre" type="text" class="form-control"  placeholder="Jesus Antonio">
            @error('alumno.nombre') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-4">
            <label >Apellido Paterno</label>
            <input wire:model.defer="alumno.apellidoPaterno" type="text" class="form-control" placeholder="Martínez">
            @error('alumno.apellidoPaterno') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-4">
            <label >Apellido Materno</label>
            <input wire:model.defer="alumno.apellidoMaterno" type="text" class="form-control" placeholder="López">
            @error('alumno.apellidoMaterno') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Domicilio</label>
            <input wire:model.defer="alumno.domicilio" type="text" class="form-control" placeholder="Calle y Número">
            @error('alumno.domicilio') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-4">
            <label>Colonia</label>
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
      </form>
</div>
