<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;

class HomeController extends Controller {
    public function index() {
        $pdo = $this->c->get(\PDO::class);
        $posts = (new Post($pdo))->all();
        $this->view('home.index', ['title'=>'Home','posts'=>$posts]);
    }
    public function show(int $id) {
        $pdo = $this->c->get(\PDO::class);
        $post = (new Post($pdo))->find($id);
        if (!$post) { http_response_code(404); echo 'Not found'; return; }
        $this->view('home.index', ['title'=>$post['title'],'posts'=>[$post]]);
    }
}