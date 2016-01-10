<?php debug($posts) ?>

<h2>記事一覧</h2>
<table>
  <tr>
       <th>ID</th>
       <th>タイトル</th>
       <th>投稿日</th>
  </tr>
  <?php foreach ($posts as $post) : ?>
     <tr>
       <th><?php echo h($post['Post']['id']) ?></th>
      <th>
       <?php
           echo $this->Html->link(
               $post['Post']['title'],
               array(
                  'controller' => 'posts',
                  'action' => 'view',
                  $post['Post']['id'])
                  //array中で URLの/以下を指定する。
           )
        ?>
      </th>
      <th><?php echo h($post['Post']['created']) ?></th>
    </tr>
  <?php endforeach ?>
</table>