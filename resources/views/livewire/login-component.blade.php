<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="row w-100 justify-content-center">
        <div class="col-md-6 col-lg-5 d-flex align-items-center justify-content-center">
            <div class="form_container w-100 px-4">
                <div class="heading_container text-center mb-4">
                    <h2>
                        Bienvenido a
                        <a href="/v2/home" style="color: #9dca02; text-decoration: none;">
                            Broko
                        </a>
                    </h2>
                    <h3 style="color: #9dca02; text-transform: uppercase; font-weight: bold;" class="text-center">INICIAR SESIÓN</h3>
                </div>
                <form wire:submit.prevent="login">
                    <div class="form-group mb-3">
                        <input wire:model="email" type="email" name="email" class="form-control" placeholder="Your Email" required />
                    </div>
                    <div class="form-group mb-4">
                        <input wire:model="password" type="password" name="password" class="form-control" placeholder="Your Password" required />
                    </div>
                    <div class="btn_box text-center mb-3">
                        <button type="submit" class="btn btn-primary px-5">Iniciar Sesión</button>
                    </div>
                    <div class="auth-option text-center pt-3">
                        ¿No tienes una cuenta? <a class="text-link" href="/v2/register">Registrarse</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>