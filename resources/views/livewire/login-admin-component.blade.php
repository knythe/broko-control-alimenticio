 <div class="app-auth-body mx-auto">
     <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
     <h2 class="auth-heading text-center mb-5">Log in to Panel</h2>
     <div class="auth-form-container text-start">
         <form wire:submit='login' class="auth-form login-form">
             <div class="email mb-3">
                 <label class="sr-only" for="signin-email">Email</label>
                 <input wire:model='email' id="signin-email" name="signin-email" type="email" class="form-control signin-email" placeholder="Email address" required="required">
             </div><!--//form-group-->
             <div class="password mb-3">
                 <label class="sr-only" for="signin-password">Password</label>
                 <input wire:model='password' id="signin-password" name="signin-password" type="password" class="form-control signin-password" placeholder="Password" required="required">
             </div><!--//form-group-->
             <div class="text-center">
                 <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
             </div>
         </form>

     </div><!--//auth-form-container-->

 </div><!--//auth-body-->