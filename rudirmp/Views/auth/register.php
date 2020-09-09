<?= $this->extend('Rudi\Views\auth\layout'); ?>
<?= $this->section('auth'); ?>

<p class="login-box-msg">Register a new membership</p>
<form action="<?= base_url($title) ?>" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Full name">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
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
    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Retype password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                    I agree to the <a href="#">terms</a>
                </label>
            </div>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
    </div>
</form>
<p class="mt-3">
  <a href="login" class="text-center">I already have a membership</a>
</p>

<?= $this->endSection(); ?>