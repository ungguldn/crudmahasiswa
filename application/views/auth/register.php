<html>
    <head>
        <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Signup</header>
                    <form class ="user" method="POST" action="<?= base_url('Auth/tes'); ?> ">
                        <div class="field input-field">
                            <input name="nama" value="<?= set_value('nama')?>" type="name" placeholder="Nama" class="input">
                            <?= form_error('nama', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                        </div>
                        <div class="field input-field">
                            <input name="email" value="<?= set_value('email')?>" type="email" placeholder="Email" class="input">
                            <?= form_error('email', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                        </div>

                        <div class="field input-field">
                            <input name="password" value="<?= set_value('password')?>" type="password" placeholder="Create password" class="password">
                            <?= form_error('password', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                        </div>
                        <div class="field input-field">
                            <input type="password1" value="<?= set_value('password1')?>" placeholder="Confirm password" class="password">
                            <?= form_error('password1', '<small class="text-danger pl-3" style="color:red;">', '</small>'); ?>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="field button-field">
                            <button>Signup</button>
                        </div>
                    </form>
                    <div class="form-link">
                        <span>Don't have an account?  </span> <a href="<?= base_url('Auth') ?>">Login</a>
                    </div>
                    
        </body>
    </head>
</html>