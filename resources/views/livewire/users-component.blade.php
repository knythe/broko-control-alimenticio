<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="row w-100 justify-content-center">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="form_container w-100 px-4">
                <div class="heading_container text-center mb-4">
                    <h2>
                        Bienvenido a
                        <a href="/v2/home" style="color: #9dca02; text-decoration: none;">Broko</a>
                    </h2>
                    <h3 style="color: #9dca02; text-transform: uppercase; font-weight: bold;">REGISTRARSE</h3>
                </div>
                <form wire:submit='register' action="">
                    <div class="mb-3">
                        <input wire:model='name' type="text" name="name" class="form-control" placeholder="Your Name" />
                    </div>
                    <div class="mb-3">
                        <input wire:model='email' type="email" name="email" class="form-control" placeholder="Your Email" />
                    </div>
                    <div class="mb-3">
                        <input wire:model='imagen' type="file" name="imagen" class="form-control" />
                    </div>
                    <div class="mb-4">
                        <input wire:model='password' type="text" name="password" class="form-control" placeholder="Your Password (min. 8 characters)" />
                    </div>
                    <div class="btn_box text-center mb-3">
                        <button type="submit" class="btn btn-primary px-5">Registrarse</button>
                    </div>
                    <div class="auth-option text-center pt-3">
                        ¿Ya tienes una cuenta? <a class="text-link" href="/v2/login">Iniciar Sesión</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>