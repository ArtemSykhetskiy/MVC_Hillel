<?php Core\View::render('layout/header', ['pageTitle' => 'Registration']); ?>

<div class="container" style="margin-top: 100px; text-align: center">
    <div class="row">
        <div class="col-md-12" style="max-width: 500px; margin: 0 auto">
            <h1>Registration</h1>
            <form method="POST" action="<?= SITE_URL . '/users/store'?>" style="margin-top: 50px">
                <div class="mb-3">
                    <label class="form-label"><b>Name</b></label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           id="exampleName"
                           aria-describedby="emailHelp"
                            value="<?= !empty($data['name']) ? $data['name'] : ''?>"
                    >

                    <?php if(!empty($name_error)):?>
                        <div class="alert alert-danger"><?= $name_error?></div>
                    <?php endif;?>

                </div>
                <div class="mb-3">
                    <label for="exampleInputSurname1" class="form-label"><b>Surname</b></label>
                    <input type="text"
                           name="surname"
                           class="form-control"
                           id="exampleInputSurname1"
                           value="<?= !empty($data['surname']) ? $data['surname'] : ''?>"
                    >
                    <?php if(!empty($surname_error)):?>
                        <div class="alert alert-danger"><?= $surname_error?></div>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           id="exampleInputPassword1"
                           value="<?= !empty($data['password']) ? $data['password'] : ''?>"
                    >
                    <?php if(!empty($password_error)):?>
                        <div class="alert alert-danger"><?= $password_error?></div>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputBirthdate1" class="form-label"><b>Birthday</b></label>
                    <input type="date"
                           name="birthdate"
                           class="form-control"
                           id="exampleInputBirthdate1"
                           value="<?= !empty($data['birthdate']) ? $data['birthdate'] : ''?>"
                    >
                    <?php if(!empty($birthdate_error)):?>
                        <div class="alert alert-danger"><?= $birthdate_error?></div>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           id="exampleInputEmail1"
                           value="<?= !empty($data['email']) ? $data['email'] : ''?>"
                    >
                    <?php if(!empty($email_error)):?>
                        <div class="alert alert-danger"><?= $email_error?></div>
                    <?php endif;?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              <br><br>  <a href="<?= SITE_URL . '/login'?>">Log In</a>
            </form>
        </div>
    </div>
</div>

<?php Core\View::render('layout/footer'); ?>

