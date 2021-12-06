<?= $this->extend('templates/dashboard') ?>

<?= $this->section('content') ?>
    <div class="row">
        <div class="card mt-4 shadow">
            <div class="row pt-2">
                <div class="col-sm-6"><h4>Articles</h4></div>
                <div class="col-sm-6"><button onclick="add_article()" class="btn btn-outline-primary float-end btn-lg">Add Article</button></div>                
            </div>
            <table class="table table-striped" id="article-table">
                <thead>
                    <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted On</th>                  
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($articles): ?>
                        <?php foreach($articles as $article): ?>
                        <tr>
                            <th scope="row"><?= $article->id; ?></th>
                            <td><?= $article->title; ?></td>
                            <td><?= $article->created_at; ?></td>                         
                            <td>
                                <button class="btn btn-warning" onclick="edit_article(<?= $article->id;?>)">Edit</button>
                                <button class="btn btn-danger" onclick="delete_article(<?= $article->id;?>)">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modal_form" tabindex="-1" aria-labelledby="modal_form" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal_form">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="article-form">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control">                  
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>                
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="save()">Save changes</button>
        </div>
        </div>
    </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script>
        $(document).ready(function() {
            var table = $('#article-table').DataTable( {
            dom: 'Bfrtip',
                buttons: ['excel', 'pdf','print'],
                initComplete: function() {
                $('.buttons-excel').html('<i class="fa table-buttons fa-file-excel-o text-success"/>')
                $('.buttons-pdf').html('<i class="fa table-buttons fa-file-pdf-o text-danger"/>')
                $('.buttons-print').html('<i class="fa table-buttons fa-print text-dark"/>')
                }
            } );

            table.buttons().container()
                .appendTo( '#customer-table_wrapper .col-md-6:eq(0)' );
        } );

        //Show Bootstrap Modal
        var save_method; //for save method string
        var table;
        function add_article(){
            save_method = 'add';
            $('#article-form')[0].reset(); // reset form on modals
            $('.modal').modal('show'); // show bootstrap modal
            $('.modal-title').text('Add Article'); // Set Title to Bootstrap modal title
        }

        function edit_article(id)
        {
            save_method = 'update';
            $('#article-form')[0].reset(); // reset form on modals
            <?php header('Content-type: application/json'); ?>
        //Ajax Load data from ajax
            $.ajax({
                url : "<?= base_url('admin/post-update/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="title"]').val(data.title);
                    $('[name="description"]').val(data.description);                    
                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit Article'); // Set title to Bootstrap modal title
                },
                error: function (jqXHR, textStatus, errorThrown)
                {                    
                    alert('Error in getting data');
                }
            });
        }

        function save()
        {
        var url;
        if(save_method == 'add')
        {
            url = "<?= base_url('admin/post-create')?>";
        }
        else
        {
            url = "<?= base_url('admin/post-update')?>";
        }
        // ajax adding data to database
            $.ajax({
                url : url,
                type: "POST",
                data: $('#article-form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                //if success close modal and reload ajax table
                $('#modal_form').modal('hide');
                location.reload();// for reload a page
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function delete_article(id)
        {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data from database
            $.ajax({
                url : "<?= base_url('admin/article_delete')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                
                location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
        }
    </script>
<?= $this->endSection() ?>
