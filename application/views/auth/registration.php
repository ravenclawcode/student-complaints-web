   <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-9 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <div class="col-lg-5 d-block d-lg-block">
                                        <img src="<?= base_url(); ?>/assets/img/login.svg" class="m-1" style="width: 100%; height: 100%;">
                                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi Akun!</h1>
                            </div>

                            <form class="user" method="post" action="<?=base_url('auth/registration');?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_instansi" name="nama_instansi"
                                        placeholder="Nama Siswa" value="<?= set_value('nama_instansi');?>">
                                       <?= form_error('nama_instansi','<small class="text-danger pl-3">',' </small>');?>
                                      </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Siswa" value="<?= set_value('email');?>">
                                        <?= form_error('email','<small class="text-danger pl-3">',' </small>');?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat"
                                        placeholder="Alamat Siswa" value="<?= set_value('alamat');?>">
                                        <?= form_error('alamat','<small class="text-danger pl-3">',' </small>');?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username"
                                        placeholder="Masukan Username">
                                        <?= form_error('username','<small class="text-danger pl-3">',' </small>');?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1','<small class="text-danger pl-3">',' </small>');?>

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Repeat Password">
                                        <?= form_error('password2','<small class="text-danger pl-3">',' </small>');?>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth');?>">Sudah punya akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>