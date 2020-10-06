<?php

use humhub\widgets\PanelMenu;

/**
 * @var string $role
 * @var array $permissions
 * @var string $memberSince
 */
?>

<div class="panel panel-default panel-my-membership" id="my-membership-panel">
    <?= PanelMenu::widget(['id' => 'space-my-membership-panel']); ?>
    <div class="panel-heading"><?= Yii::t('SpaceModule.base', '<strong>My Membership Info</strong>'); ?></div>
    <div class="panel-body">
        <div><b><?= Yii::t('SpaceModule.base', 'Current Role') ?>: </b><?= ucfirst($role) ?></div>
        <div><b><?= Yii::t('SpaceModule.base', 'Permissions') ?>: </b>
            <div><?= empty($permissions) ? '-' : implode(", ", $permissions) ?></div>
        </div>
        <div><b><?= Yii::t('SpaceModule.base', 'Member Since') ?>: </b><?= $memberSince ?></div>
    </div>
</div>
