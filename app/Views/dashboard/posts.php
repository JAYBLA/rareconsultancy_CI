<?= $this->extend('templates/dashboard') ?>

<?= $this->section('stylesheet') ?>
<style>
.dataTables_filter {
    float: right !important;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="col-12 tinymce">
    <div class="card mt-3">
        <div class="card-header card-header-company">
            <h4>Posts List
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="example">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Posted On</th>
                            <th width="280px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (! empty($posts) && is_array($posts)): ?>
                            <?php foreach($posts as $posts_item): ?>
                                <tr>
                                    <td><?= $count++ +1 ?></td>
                                    <td><?= $posts_item['title'] ?></td>
                                    <td><?= date('Y-m-d', strtotime($posts_item['created_at'])) ?></td>
                                    <td class="text-center">
                                        <a href="/dashboard/posts/<?= $posts_item['slug'] ?>"><i
                                                class="fa fs-22 fa-edit text-warning"></i></a>
                                        <a href="/dashboard/post-delete/<?= $posts_item['slug'] ?>"><i
                                                class="fa fs-22 fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                            <p>No Posts Available Yet!</p>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
<?= $this->endSection() ?>