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
if ($generator->ns !== $generator->queryNs) {
    $modelFullClassName = '\\' . $generator->ns . '\\' . $modelFullClassName;
}

echo "<?php\n";
?>

namespace <?= $generator->queryNs ?>;

use common\base\BaseRepository;

/**
 * This is the Repository class for [[<?= $modelFullClassName ?>]].
 *
 * @see <?= $modelFullClassName . "\n" ?>
 */
class <?= $className ?> extends BaseRepository
{
    public static function getById(int $id): ?<?= $modelFullClassName ?>
    {
        return <?= $modelFullClassName ?>::find()->where(['id' => $id])->one();
    }
}
