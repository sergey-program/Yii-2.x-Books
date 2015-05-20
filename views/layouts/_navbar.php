<?php

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

/**
 * @var \app\components\ViewExtended $this
 */
?>

<?php

NavBar::begin([
    'brandLabel' => \Yii::$app->name,
    'brandUrl' => \Yii::$app->getHomeUrl(),
    'options' => ['class' => 'navbar-default navbar-fixed-top']
]);

if ($this->getUser()->isGuest) {
    $aItems[] = ['label' => \Yii::t('', 'Login'), 'url' => ['/auth/login']];
    $aItems[] = ['label' => \Yii::t('', 'Register'), 'url' => ['/auth/register']];
} else {
    if ($this->getUser()->hasRole('admin')) {
        $aItems[] = [
            'label' => \Yii::t('', 'Admin'),
            'items' => [
                ['label' => \Yii::t('', 'Books'), 'url' => ['/backend-feedbacks/index/index']]
            ]
        ];
    }

    $aItems[] = [
        'label' => $this->getUser()->getUsername(),
        'items' => [
            ['label' => \Yii::t('', 'Profile'), 'url' => ['/my-profile/index/index']],
            '<li role="presentation" class="divider"></li>',
            ['label' => \Yii::t('', 'Logout') . ' (' . $this->getUser()->getUsername() . ')', 'url' => ['/auth/logout']]
        ]
    ];
}

echo Nav::widget(['options' => ['class' => 'navbar-nav navbar-right'], 'items' => $aItems]);

NavBar::end();