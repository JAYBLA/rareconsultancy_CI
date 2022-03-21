<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dashboard | SignUp</title>
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/custom.css') ?>">
</head>

<body>
<div class="container">
        <div class="row d-flex align-items-center justify-content-center vh-100">
            <div class="col-5 ">
                <div class="card">
                    <div class="card-header card-header-company"><h2>Register User</h2></div>
                    <div class="card-body">
                        <?php if(isset($validation)):?>
                            <div class="alert alert-warning">
                            <?= $validation->listErrors() ?>
                            </div>
                        <?php endif;?>

                        <form action="<?= base_url('/dashboard/signup') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="form-group mb-3">
                                <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" >
                            </div>

                            <div class="form-group mb-3">
                                <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="Password" class="form-control" >
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-company">Signup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
              
        </div>
    </div>
</body>
</html>