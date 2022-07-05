<?php Core\View::render('layout/header', ['pageTitle' => 'Login']); ?>

<div class="container" style="margin-top: 100px; text-align: center">
    <div class="row">
        <div class="col-md-12" style="max-width: 500px; margin: 0 auto">
            <h1>Log in</h1>
            <form method="POST" action="<?= SITE_URL . '/auth/verify'?>" style="margin-top: 50px">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           value="<?= !empty($data['email']) ? $data['email'] : ''?>"
                    >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           id="exampleInputPassword1"
                           value="<?= !empty($data['password']) ? $data['password'] : ''?>"
                    >
                </div>

                <?php if(!empty($email_error) || !empty($password_error) || !empty($data['email'])):?>
                    <div class="alert alert-danger"><?= 'Email or password invalid' ?></div>
                <?php endif;?>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
               <br><br> <a href="<?= SITE_URL . '/registration'?>">Regitration</a>
            </form>
        </div>
    </div>
</div>

<?php Core\View::render('layout/footer'); ?>

