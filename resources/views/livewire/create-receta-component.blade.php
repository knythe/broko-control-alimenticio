 <div>
     <div>
         <form wire:submit.prevent="registerReceta">
             <div class="container">
                 <div class="row">
                     <!-- Imagen -->
                     <div class="col-md-6 mb-3">
                         <label>Imagen</label>
                         <input wire:model="imagen" type="file" name="imagen" class="form-control">
                     </div>
                     <!-- Nombre -->
                     <div class="col-md-6 mb-3">
                         <label>Nombre</label>
                         <input wire:model="nombre" type="text" name="nombre" class="form-control">
                     </div>

                     <!-- Calorías -->
                     <div class="col-md-6 mb-3">
                         <label>Calorías</label>
                         <input wire:model="calorias" type="number" name="calorias" class="form-control">
                     </div>
                     <!-- Carbohidratos -->
                     <div class="col-md-6 mb-3">
                         <label>Carbohidratos</label>
                         <input wire:model="carbohidratos" type="number" name="carbohidratos" class="form-control">
                     </div>

                     <!-- Proteínas -->
                     <div class="col-md-6 mb-3">
                         <label>Proteínas</label>
                         <input wire:model="proteinas" type="number" name="proteinas" class="form-control">
                     </div>
                     <!-- Grasas -->
                     <div class="col-md-6 mb-3">
                         <label>Grasas</label>
                         <input wire:model="grasas" type="number" name="grasas" class="form-control">
                     </div>

                     <!-- Día (checkboxes) -->
                     <div class="col-md-6 mb-3">
                         <label class="d-block">Día</label>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="dia" class="form-check-input" type="radio" name="dia" value="Lunes" id="diaL">
                             <label class="form-check-label" for="diaL">L</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="dia" class="form-check-input" type="radio" name="dia" value="Martes" id="diaM">
                             <label class="form-check-label" for="diaM">M</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="dia" class="form-check-input" type="radio" name="dia" value="Miercoles" id="diaMC">
                             <label class="form-check-label" for="diaMC">MC</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="dia" class="form-check-input" type="radio" name="dia" value="Jueves" id="diaJ">
                             <label class="form-check-label" for="diaJ">J</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="dia" class="form-check-input" type="radio" name="dia" value="Viernes" id="diaV">
                             <label class="form-check-label" for="diaV">V</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="dia" class="form-check-input" type="radio" name="dia" value="Sabado" id="diaS">
                             <label class="form-check-label" for="diaS">S</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="dia" class="form-check-input" type="radio" name="dia" value="Domingo" id="diaD">
                             <label class="form-check-label" for="diaD">D</label>
                         </div>
                     </div>


                     <!-- Tipo de comida (Radio buttons D A C) -->
                     <div class="col-md-6 mb-3">
                         <label class="d-block">Tipo de comida</label>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="tipo_comida" class="form-check-input" type="radio" name="tipo_comida" value="Desayuno" id="comidaD">
                             <label class="form-check-label" for="comidaD">Desayuno</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="tipo_comida" class="form-check-input" type="radio" name="tipo_comida" value="Almuerzo" id="comidaA">
                             <label class="form-check-label" for="comidaA">Almuerzo</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input wire:model.defer="tipo_comida" class="form-check-input" type="radio" name="tipo_comida" value="Cena" id="comidaC">
                             <label class="form-check-label" for="comidaC">Cena</label>
                         </div>
                     </div>

                     <!-- Descripción (dos columnas de ancho) -->
                     <div class="col-md-12 mb-3">
                         <label>Descripción</label>
                         <textarea wire:model="descripcion" name="descripcion" class="form-control" rows="3"></textarea>
                     </div>

                     <!-- Ingredientes (dos columnas de ancho) -->
                     <div class="col-md-12 mb-3">
                         <label>Ingredientes</label>
                         <textarea wire:model="ingredientes" name="ingredientes" class="form-control" rows="3"></textarea>
                     </div>

                     <!-- Preparación (dos columnas de ancho) -->
                     <div class="col-md-12 mb-3">
                         <label>Preparación</label>
                         <textarea wire:model="preparacion" name="preparacion" class="form-control" rows="3"></textarea>
                     </div>

                     <!-- Botón -->
                     <div class="col-md-12 text-center">
                         <button type="submit" class="btn btn-success text-white">Guardar</button>
                     </div>
                 </div>
             </div>
         </form>
     </div>
     <hr>
     <div class="tab-content" id="orders-table-tab-content">
         <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
             <div class="app-card app-card-orders-table shadow-sm mb-5">
                 <div class="app-card-body">
                     <div class="table-responsive">
                         <table class="table app-table-hover mb-0 text-left">
                             <thead>
                                 <tr>
                                     <th class="cell">id</th>
                                     <th class="cell">Comida</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach($recetas as $receta)
                                 <tr>
                                     <td>
                                         {{ $receta->id }}
                                     </td>
                                     <td>
                                         {{ $receta->nombre }}
                                     </td>
                                 </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div><!--//table-responsive-->
                 </div><!--//app-card-body-->
             </div><!--//app-card-->
         </div><!--//tab-pane-->
     </div>
 </div>