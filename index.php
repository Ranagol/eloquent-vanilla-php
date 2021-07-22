<?php

/**
 * Tutorial: https://www.youtube.com/watch?v=wpUCFpNXCpk
 * Source code: https://github.com/polodev/illuminate_database_eloquent_outside_laravel_yt_english
 * This tutorial is not MVC, so we have logic in views, no controllers...
 * When index.php is activated, it will pull in all data from db, and display it. 
 * It will also display the navbar. The navbar's a tags will activate the other pages
 * or views, if necesarry. The node_modules is only used because of the boostrap, which is installed
 * through npm.
 * 
 */

require 'vendor/autoload.php';

$departments = Department::all();

?>

<!-- HEADER -->
<?php require 'partial/header.php';?>

<div class="container">
  <h2>All departments with subject</h2>
  <hr>

  <?php foreach ($departments as $department): ?>
    <h4><?=$department->name?></h4>

    <?php foreach ($department->subjects as $subject): ?>
      <li class="list-group-item mb-2"><?=$subject->name?></li>
    <?php endforeach;?>

  <?php endforeach;?>
</div>

<!-- FOOTER -->
<?php require 'partial/footer.php';?>