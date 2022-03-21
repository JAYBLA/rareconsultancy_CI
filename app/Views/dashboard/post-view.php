<?= $this->extend('templates/dashboard') ?>

<?= $this->section('stylesheet') ?>
<style>
.post-featured-image {
    height: 190px;
    width: auto;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="col-8 offset-2">
    <div class="card mt-3">
        <div class="card-header card-header-company">
            <h3 class="card-title">Update Post</h3>
        </div>
        <?= session()->getFlashdata('error') ?>
        <?= service('validation')->listErrors() ?>
        <form action="<?= base_url('/dashboard/post-update/'.$post['slug']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" id="id" value="<?= esc($post['id']) ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="input" class="form-control" name="title" value="<?= $post['title'] ?>">
                </div>
                <div class="form-group">
                    <label for="content">Text</label>
                    <textarea name="content" id="content" class="form-control"><?= $post['body'] ?></textarea>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <label for="featured_image">Featured Image</label>
                            <input name="featured_image" type="file" class="form-control" accept="image/*">
                        </div>
                    </div>
                    <div class="col-6">
                        <h6>Current Featured Image</h6>
                        <img src="<?=base_url()?>/uploads/<?= $post['file_name'] ?>" class="post-featured-image">
                    </div>
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
<!-- <script>
        CKEDITOR.replace( 'body' );
    </script> -->
<?= $this->endSection() ?>