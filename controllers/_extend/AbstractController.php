<?php

namespace app\controllers\_extend;

use yii\web\Controller;

/**
 * Class AbstractController
 *
 * @package app\controllers\_extend
 */
abstract class AbstractController extends Controller
{
    /**
     * @return bool
     */
    public function isAjaxRequest()
    {
        return \Yii::$app->getRequest()->getIsAjax();
    }

    /**
     * @return bool
     */
    public function isPostRequest()
    {
        return \Yii::$app->getRequest()->getIsPost();
    }

    /**
     * Return $_POST data.
     *
     * @param string|null $sVarName
     * @param string|null $sDefaultValue
     *
     * @return array|mixed
     */

    public function getPostData($sVarName = null, $sDefaultValue = null)
    {
        return \Yii::$app->getRequest()->post($sVarName, $sDefaultValue);
    }

    /**
     * Return $_GET data.
     *
     * @param string|null $sVarName
     * @param string|null $sDefaultValue
     *
     * @return array|mixed
     */
    public function getGetData($sVarName = null, $sDefaultValue = null)
    {
        return \Yii::$app->getRequest()->get($sVarName, $sDefaultValue);
    }

    /**
     * @return $this
     */
    public function disableLayout()
    {
        $this->layout = false;

        return $this;
    }

    /**
     * @return \yii\web\Session
     */
    public function getSession()
    {
        return \Yii::$app->getSession();
    }

    /**
     * @return \yii\web\User|\app\components\UserExtended
     */
    public function getUser()
    {
        return \Yii::$app->getUser();
    }
}