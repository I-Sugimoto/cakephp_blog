<?php

App::uses('AppController', 'Controller');

class PostsController extends AppController {
  public $name = 'Posts';
  public $uses = array('Post');
  //ヘルパーの利用宣言
  public $helper = array('Html', 'Form');

  public function index() {
    $this->set('posts', $this->Post->find('all'));
  }


  public function view($id = null) {
    $this->Post->id = $id;
    $this->set('post', $this->Post->findById($id));//findById:指定したIDのレコードを持ってくる。
  }

  public function add() {
    if ($this->request->is('post')) {
        $this->Post->create();
        if ($this->Post->Save($this->request->data)){
            $this->Session->setFlash('Saved!!!');
            $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash('Failed...');
            }
    }
  }
}

?>
