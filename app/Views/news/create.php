<?= $this->extend('templates/base') ?>

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
            <textarea name="body" cols="45" rows="4" class="form-control"></textarea> 
        </div>
            <input type="submit" name="submit" value="Create news item" />
        </form>
    </div>
</div>
<?= $this->endSection() ?>
