<?php

namespace fully\modules\frontend\controllers;

use yii\web\Controller;
use fully\core\entry\model\Entry;

/**
 * Default controller for the `frontend` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    		var_dump(new Entry());
        return $this->render('index');
    }
}
