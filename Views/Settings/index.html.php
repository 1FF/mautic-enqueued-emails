<?php declare(strict_types=1);
/** @var integer $count */

$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('headerTitle', 'Emails in Queue');
?>

<div class="container-fluid">
  <div class="row mt-15">
    <div class="col-md-3">
      <input class="form-control" style="width: 100%;" type="text" disabled
             value="<?= $count ?>">
    </div>
  </div>
</div>

