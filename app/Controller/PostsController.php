<?php

App::uses('AppController', 'Controller');

class PostsController extends AppController{
  public $name = 'Posts';
  public $uses = array('Post');
  //ヘルパーの利用宣言
  public $helper = array('Html', 'Form');

  public function index(){
    $options = array(
       'limit' => '2'
      );
    $this->set('posts', $this->Post->find('all', $options));
  }


  public function view($id = null){
    $this->Post->id = $id;
    $this->set('post', $this->Post->findById($id));//findById:指定したIDのレコードを持ってくる。
  }
}
