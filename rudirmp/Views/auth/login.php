<?= $this->extend('Rudi\Views\auth\layout'); ?>
<?= $this->section('auth'); ?>

<p class="login-box-msg">Sign in to start your session</p>
<form action="../../index3" method="post">
    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
            </div>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
    </div>
</form>

<p class="mb-1 mt-3">
    <a href="forgot-password">I forgot my password</a>
</p>
<p class="mb-0">
    <a href="register" class="text-center">Register a new membership</a>
</p>

<?= $this->endSection(); ?>