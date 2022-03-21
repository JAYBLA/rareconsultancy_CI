<?= $this->extend('templates/dashboard') ?>

<?= $this->section('stylesheet') ?>
 <style>
     .dataTables_filter{
         float: right !important;
     }
 </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
            <div class="col-8 offset-2">                           
                <div class="card mt-3">
                    <div class="card-header card-header-company">
                        <h2>Create A Post</h2>
                    </div>
                    <?= session()->getFlashdata('error') ?>
                    <?= service('validation')->listErrors() ?>
                    <form action="<?= base_url('/dashboard/post-create') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="input" class="form-control" name="title" />                    
                            </div>
                            <div class="form-group">
                                    <label for="body">Text</label>
                                    <textarea id="content" name="content" class="form-control" ></textarea><br />
                            </div>
                            <div class="form-group mb-3">
                                <label for="featured_image">Featured Image</label>
                                <input name="featured_image" type="file" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-company">Submit</button>
                        </div>
                    </form>
                </div>
            </div> 
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>

<?= $this->endSection() ?>