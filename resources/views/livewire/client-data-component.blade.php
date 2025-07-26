<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;" wire:ignore.self>
    <div class="row w-100">
        <div class="col-12 col-md-8 d-flex align-items-center justify-content-center mx-auto">
            <div class="form_container w-100 px-2 px-md-4">
                <div class="heading_container text-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center w-100">
                        <h3 style="color: #9dca02; text-transform: uppercase; font-weight: bold;">Bienvenido a Broko</h3>
                        <h1 style="font-weight: bold;">{{ Auth::user()->name }}</h1>
                    </div>
                </div>
                <form wire:submit.prevent="registerData">
                    <div class="row g-0 g-md-3">
                        <!-- Primera fila: Sexo & Edad -->
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label d-block mb-2" for="sexo">Sexo</label>
                            <div class="d-flex justify-content-between w-100">
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="sexo" class="form-check-input" type="radio" name="sexo" id="sexo_masculino" value="masculino" required>
                                    <label class="form-check-label" for="sexo_masculino">Masculino</label>
                                </div>
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="sexo" class="form-check-input" type="radio" name="sexo" id="sexo_femenino" value="femenino" required>
                                    <label class="form-check-label" for="sexo_femenino">Femenino</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input wire:model="edad" type="number" name="edad" class="form-control" id="edad" min="0" required />
                        </div>

                        <!-- Segunda fila: Peso & Altura -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="peso" class="form-label">Peso (kg)</label>
                            <input wire:model="peso" type="number" name="peso" class="form-control" id="peso" min="0" step="0.1" required />
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="altura" class="form-label">Altura (cm)</label>
                            <input wire:model="altura" type="number" name="altura" class="form-control" id="altura" min="0" step="0.1" required />
                        </div>

                        <!-- Tercera fila: Nivel de actividad & Tipo de diabetes -->
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label d-block mb-2" for="nivel_actividad">Nivel de actividad</label>
                            <div class="d-flex justify-content-between w-100">
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="nivel_actividad" class="form-check-input" type="radio" name="nivel_actividad" id="actividad_bajo" value="Bajo" required>
                                    <label class="form-check-label" for="actividad_bajo">Bajo</label>
                                </div>
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="nivel_actividad" class="form-check-input" type="radio" name="nivel_actividad" id="actividad_moderado" value="Moderado" required>
                                    <label class="form-check-label" for="actividad_moderado">Moderado</label>
                                </div>
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="nivel_actividad" class="form-check-input" type="radio" name="nivel_actividad" id="actividad_alto" value="Alto" required>
                                    <label class="form-check-label" for="actividad_alto">Alto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label d-block mb-2" for="tipo_diabetes">Tipo de diabetes</label>
                            <div class="d-flex justify-content-between w-100">
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="tipo_diabetes" class="form-check-input" type="radio" name="tipo_diabetes" id="diabetes_tipo1" value="Tipo 1" required>
                                    <label class="form-check-label" for="diabetes_tipo1">Tipo 1</label>
                                </div>
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="tipo_diabetes" class="form-check-input" type="radio" name="tipo_diabetes" id="diabetes_tipo2" value="Tipo 2" required>
                                    <label class="form-check-label" for="diabetes_tipo2">Tipo 2</label>
                                </div>
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="tipo_diabetes" class="form-check-input" type="radio" name="tipo_diabetes" id="diabetes_tipo3" value="Tipo 3" required>
                                    <label class="form-check-label" for="diabetes_tipo3">Tipo 3</label>
                                </div>
                            </div>
                        </div>

                        <!-- Cuarta fila: Objetivo (col-12) -->
                        <div class="col-12 mb-3">
                            <br>
                            <label class="form-label d-block mb-2" for="objetivo">Objetivo</label>
                            <div class="d-flex justify-content-between w-100">
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="objetivo" class="form-check-input" type="radio" name="objetivo" id="objetivo_mantener" value="Mantener" required>
                                    <label class="form-check-label" for="objetivo_mantener">Mantener</label>
                                </div>
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="objetivo" class="form-check-input" type="radio" name="objetivo" id="objetivo_bajar" value="Bajar de peso" required>
                                    <label class="form-check-label" for="objetivo_bajar">Bajar de peso</label>
                                </div>
                                <div class="form-check flex-fill text-center">
                                    <input wire:model.defer="objetivo" class="form-check-input" type="radio" name="objetivo" id="objetivo_subir" value="Subir masa" required>
                                    <label class="form-check-label" for="objetivo_subir">Subir masa</label>
                                </div>
                            </div>
                        </div>

                        <!-- Quinta fila: Restricciones (col-12) -->
                        <div class="col-12 mb-3">
                            <br>
                            <label for="restricciones" class="form-label">Restricciones (opcional)</label>
                            <input wire:model="restricciones" type="text" name="restricciones" class="form-control" id="restricciones" placeholder="Ej: Sin gluten, sin lactosa" />
                        </div>

                        <!-- Sexta fila: Preferencias (col-12) -->
                        <div class="col-12 mb-3">
                            <label for="preferencias" class="form-label">Preferencias (opcional)</label>
                            <input wire:model="preferencias" type="text" name="preferencias" class="form-control" id="preferencias" placeholder="Ej: Vegetariano, vegano" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-primary px-5">Guardar datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>