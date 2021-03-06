<?php
/**
 * Created by PhpStorm.
 * User: jeremiah
 * Date: 10/10/2018
 * Time: 7:47 PM
 */
namespace conerd\humhub\modules\relationships\migration;

use yii\db\Migration;
use Yii;

class Uninstall extends Migration
{

    public function up()
    {
        $tables = Yii::$app->db->schema->getTableNames();

        if (in_array('relationship', $tables)){
            $this->dropTable('relationship');
        }

        if (in_array('relationship_type', $tables))
        {
            $this->dropTable('relationship_type');
        }

        if (in_array('relationship_category', $tables))
        {
            $this->dropTable('relationship_category');
        }
    }

    public function down()
    {
        echo "uninstall does not support migration down.\n";
        return false;
    }

}