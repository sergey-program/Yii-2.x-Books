<?php

/**
 * @var \app\components\ViewExtended $this
 * @var string                       $sMessage
 */
?>

<div class="panel panel-default panel-danger">
    <div class="panel-heading">
        <h1 class="panel-title"><?= $this->getPageTitle(); ?></h1>
    </div>

    <div class="panel-body">
        <?= $sMessage; ?>
    </div>
</div>
