<?= $this->extend('templates/dashboard') ?>

<?= $this->section('content') ?>

    <!-- Modal -->
<div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="articleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form>                           
                <div class="form-group">
                    <label class="form-label">Title</label><span id="err_title" class="text-danger ms-3"></span>
                    <input type="text" name="title" class="form-control title" placeholder="Article's Title">                  
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label><span id="err_description" class="text-danger ms-3"></span>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control description" placeholder="Article's Description/Content"></textarea>
                </div>                
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary article-save">Save</button>
      </div>
    </div>
  </div>
</div>


    <div class="row">
        <div class="card mt-4 shadow">
            <div class="card-header">
                <h4>Articles
                <a data-bs-toggle="modal" data-bs-target="#articleModal" class="btn btn-outline-primary float-end btn-lg">Add Article</a>
                </h4>                             
            </div>
            <div class="card-body">
                <table class="table table-striped" id="">
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
    </div>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.article-save', function () {
                if($.trim($('.title').val()).length == 0) {
                    err_title = 'Please Enter Title';
                    $('#err_title').text(err_title);
                    console.log(err_title);
                }else{
                    err_title = '';
                    $('#err_title').text(err_title);
                }

                if($.trim($('.description').val()).length == 0) {
                    err_description = 'Please Enter Content';
                    $('#err_description').text(err_description);
                    console.log(err_description );
                }
                else{
                    err_description = '';
                    $('#err_title').text(err_description);
                }

                if(err_title != '' || err_description != ''){
                    return false;
                }
                else{

                    var data={
                        [csrfName]: csrfHash, // adding csrf here
                        'title': $('.title').val(),
                        'description': $('.description').val(),
                    }    

                   $.ajax({
                       method: "POST",
                       url: "<?= base_url('admin/post-create') ?>",
                       data: "data", 
                       dataType: "json",                       
                       success: function (response) {
                           $('#articleModal').modal('hide');
                           $('#articleModal').find('input').val('');
                           alert('Saved!');
                       }
                   });
                }
            });
        });
    </script>
<?= $this->endSection() ?>
