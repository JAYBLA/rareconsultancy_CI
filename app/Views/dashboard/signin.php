<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard | Login</title>
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/custom.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center vh-100">
            <div class="col-5 ">
                <div class="card">
                    <div class="card-header card-header-company"><h2>Login</h2></div>
                    <div class="card-body">
                        <?php if(session()->getFlashdata('msg')):?>
                            <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg') ?>
                            </div>
                        <?php endif;?>

                        <form action="<?= base_url('/dashboard/signin')?>" method="post">
                            <?= csrf_field() ?>
                            <div class="form-group mb-3">
                                <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="Password" class="form-control" >
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-company">Signin</button>
                            </div>     
                        </form>
                    </div>
                </div>
            </div>
              
        </div>
    </div>
  </body>
</html>