<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Posts extends BaseController
{
    public function index()
    {
        $model = model(PostsModel::class);

        $data = [
            'posts'  => $model->getPosts(),
            'title' => 'Home',
        ];

        echo view('dashboard/posts', $data);
    }

    public function view($slug = null)
    {
        $model = model(PostsModel::class);

        $data['post'] = $model->getPosts($slug);

        if (empty($data['post'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find that post: ' . $slug);
        }
    
        $data['title'] = $data['post']['title'];    
        
        echo view('dashboard/post-view', $data);        
    }

    public function create()
    {
        $model = model(PostsModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'content'  => 'required',
            "featured_image" => [
                "rules" => "uploaded[featured_image]|max_size[featured_image,1024]|is_image[featured_image]|mime_in[featured_image,image/jpg,image/jpeg,image/gif,image/png]",
                "label" => "featured Image",
              ],
        ])) {
            $imageFile = $this->request->getFile('featured_image');
            $file_name = $imageFile->getRandomName();
            $imageFile->move(ROOTPATH . '../rareconsultancy.co.tz/uploads', $file_name);

            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', true),
                'body'  => $this->request->getPost('content'),
                'file_name' =>  $file_name,
                'file_type'  => $imageFile->getClientMimeType(),
            ]);

            return redirect()->to('/dashboard');
        } else {
            $data = [               
                'title' => 'Create Post',
            ];              
            echo view('dashboard/post-create',$data);                
        }
    }

    public function update($slug = null)
    {
        $model = model(PostsModel::class);

        $id = $this->request->getPost('id');
        $post = $model->getPosts($slug);
        

        $imageFile = $this->request->getFile('featured_image');  

        if($imageFile->isValid() && !$imageFile->hasMoved()){
            $old_image = $post['file_name'];
            if(file_exists("../rareconsultancy.co.tz/uploads". $old_image)){
                unlink("../rareconsultancy.co.tz/uploads". $old_image);                
            }
            $file_name = $imageFile->getRandomName();
            $imageFile->move(ROOTPATH . '../rareconsultancy.co.tz/uploads', $file_name);
        }

        $data= [
            'title' => $this->request->getPost('title'),            
            'body'  => $this->request->getPost('content'),
            'file_name' =>  $file_name,
            'file_type'  => $imageFile->getClientMimeType(),
        ];

        $model->update($id, $data);            

        return redirect()->to('/dashboard');
    }

    public function delete($slug = null)
    {
        $model = model(PostsModel::class);        
        $data['posts'] = $model->where('slug', $slug)->delete();        
        return redirect()->to('/dashboard');
    }
}