<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
       //$this->set('posts', $this->Post->find('all'));
       $this->set('posts', $this->Post->findAll());
    }

    public function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }
}
?>
