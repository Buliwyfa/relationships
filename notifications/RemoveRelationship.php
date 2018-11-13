<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace conerd\humhub\modules\relationships\notifications;

use Yii;
use yii\bootstrap\Html;
use humhub\modules\notification\components\BaseNotification;

/**
 * @author CO_Nerd
 * Remove Relationship Notification
 *
 * @since 1.1
 */
class RemoveRelationship extends BaseNotification
{

    /**
     * @inheritdoc
     */
    public $moduleId = "relationships";

    /**
     * @inheritdoc
     */
    public $viewName = 'removeRelationship';

    /**
     * @inheritdoc
     */
    public $markAsSeenOnClick = true;

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return $this->originator->getUrl();
    }

    /**
     * @inheritdoc
     */
    public function category()
    {
        return new RelationshipNotificationCategory();
    }

    /**
     * @inheritdoc
     */
    public function getMailSubject()
    {
        return strip_tags($this->html());
    }

    /**
     * @inheritdoc
     */
    public function html()
    {
        return Html::tag('strong', Html::encode($this->originator->displayName)) . ' has removed your relationship status.';
    }

}

?>
