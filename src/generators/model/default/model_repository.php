<?php

/**
 * This is the template for generating the ActiveQuery class.
 */

/** @var yii\web\View $this */
/** @var yii\gii\generators\model\Generator $generator */
/** @var string $tableName full table name */
/** @var string $className class name */
/** @var yii\db\TableSchema $tableSchema */
/** @var string[] $labels list of attribute labels (name => label) */
/** @var string[] $rules list of validation rules */
/** @var array $relations list of relations (name => relation declaration) */
/** @var string $className class name */
/** @var string $modelClassName related model class name */

$modelFullClassName = $modelClassName;
$modelFullClassName = $generator->ns . '\entity\\' . $generator->nsSuffix . '\\' . $modelFullClassName;

echo "<?php\n";
?>

namespace <?= $generator->queryNs ?>;

use common\base\BaseRepository;
use <?= $modelFullClassName . ';' ?>;

/**
 * This is the Repository class for [[<?= $modelClassName ?>]].
 *
 * @see <?= $modelClassName . "\n" ?>
 */
class <?= $className ?> extends BaseRepository
{
    public static function getById(int $id): ?<?= $modelClassName . "\n" ?>
    {
        return <?= $modelClassName ?>::find()->where(['id' => $id])->one();
    }
}
