<?= $this->extend('templates/dashboard') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="card p-5">
        <h2><?= esc($title) ?></h2>

        <?= service('validation')->listErrors() ?>

        <form action="/news/create" method="post">
            <?= csrf_field() ?>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="input" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Text</label>
            <textarea name="body" cols="45" rows="4" class="form-control" id="editor1"></textarea>
            
        </div>
            <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Create Post" />
        </form>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
ClassicEditor
.create( document.querySelector( '#editor1' ) )
.then( editor => {
console.log( editor );
} )
.catch( error => {
console.error( error );
} );
</script>
<?= $this->endSection() ?>