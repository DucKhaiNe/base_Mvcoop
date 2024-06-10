<?php

namespace Khaind\MvcOop\Controllers\Admin;

use Khaind\MvcOop\Commons\Controller;
use Khaind\MvcOop\Commons\Helper;
use Khaind\MvcOop\Models\User;
use Khaind\MvcOop\Models\Post;
use Rakit\Validation\Validator;

class PostController extends Controller
{
    private Post $post;
    private User $user;

    public function __construct()
    {
        $this->post = new Post();
        $this->user = new User();
    }

    public function index()
    {
        $posts = $this->post->all();

        $this->renderViewAdmin('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {

        $users = $this->user->all();

        $userPluck = array_column($users, 'name', 'id');
        $this->renderViewAdmin('posts.create', [
            'userPluck' => $userPluck
        ]);
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'users_id'           => 'required',
            'tieu_de'            => 'required|max:100',
            'mo_ta'              => 'required|max:325',
            'hinh_anh'           => 'uploaded_file:0,2048K,png,jpeg,jpg',
            'noi_dung'           => 'max:65000',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/posts/create'));
            exit;
        } else {
            $data = [
                'users_id'        => $_POST['users_id'],
                'tieu_de'       => $_POST['tieu_de'],
                'mo_ta'      => $_POST['mo_ta'],
                'noi_dung'  => $_POST['noi_dung'],
            ];

            if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['size'] > 0) {

                $from = $_FILES['hinh_anh']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['hinh_anh']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['hinh_anh'] = $to;
                } else {
                    $_SESSION['errors']['hinh_anh'] = 'Upload Không thành công';

                    header('Location: ' . url('admin/posts/create'));
                    exit;
                }
            }

            $this->user->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/posts'));
            exit;
        }
    }

    public function show($id)
    {
        $post = $this->post->findByID($id);

        $this->renderViewAdmin('posts.show', [
            'post' => $post
        ]);
    }

    public function edit($id)
    {
        $post = $this->post->findByID($id);
        $users = $this->user->all();

        $userPluck = array_column($users, 'name', 'id');
        $this->renderViewAdmin('posts.edit', [
            'post' => $post,
            'userPluck' => $userPluck,
        ]);
    }

    public function update($id)
    {
        $post = $this->post->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'users_id'           => 'required',
            'tieu_de'            => 'required|max:100',
            'mo_ta'              => 'required|max:325',
            'hinh_anh'           => 'uploaded_file:0,2048K,png,jpeg,jpg',
            'noi_dung'           => 'max:65000',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/posts/$id/edit"));
            exit;
        } else {
            $data = [
                'users_id'           => 'required',
                'tieu_de'            => 'required|max:100',
                'mo_ta'              => 'required|max:325',
                'ngay_sua'           => date('Y-m-d H:i:s'),
                'noi_dung'           => 'max:65000',
            ];

            $flagUpload = false;
            if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['size'] > 0) {

                $flagUpload = true;

                $from = $_FILES['hinh_anh']['tmp_name'];
                $to = 'assets/uploads/' . time() . $_FILES['hinh_anh']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['hinh_anh'] = $to;
                } else {
                    $_SESSION['errors']['hinh_anh'] = 'Upload Không thành công';

                    header('Location: ' . url("admin/posts/$id/edit"));
                    exit;
                }
            }

            $this->post->update($id, $data);

            if (
                $flagUpload
                && $post['hinh_anh']
                && file_exists(PATH_ROOT . $post['hinh_anh'])
            ) {
                unlink(PATH_ROOT . $post['hinh_anh']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url("admin/posts/$id/edit"));
            exit;
        }
    }

    public function delete($id)
    {
        try {
            $post = $this->post->findByID($id);

            $this->post->delete($id);

            if ($post['hinh_anh'] && file_exists(PATH_ROOT . $post['hinh_anh'])) {
                unlink(PATH_ROOT . $post['hinh_anh']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/posts'));
        exit();
    }
}
