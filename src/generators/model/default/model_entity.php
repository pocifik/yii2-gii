<?php

/**
 * This is the template for generating the model class of a specified table.
 */

/** @var $enum array list of ENUM fields */
/** @var yii\web\View $this */
/** @var yii\gii\generators\model\Generator $generator */
/** @var string $tableName full table name */
/** @var string $className class name */
/** @var string $queryClassName query class name */
/** @var yii\db\TableSchema $tableSchema */
/** @var array $properties list of properties (property => [type, name. comment]) */
/** @var string[] $labels list of attribute labels (name => label) */
/** @var string[] $rules list of validation rules */
/** @var array $relations list of relations (name => relation declaration) */
/** @var array $relationsClassHints */

echo "<?php\n";
?>

namespace <?= $generator->ns . '/entity/' . $generator->nsSuffix ?>;

use Yii;
use <?= $generator->ns . '/base/' . $generator->nsSuffix . '/' . $className . ' as ' . $className . 'Base' ?>

/**
 * This is the entity model class for table "<?= $generator->generateTableName($tableName) ?>".
 */
class <?= $className ?> extends <?= $className . 'Base' ?>
{

}
