<?php

declare(strict_types=1);
/**
 * This file is part of TAnt.
 * @link     https://github.com/edenleung/think-admin
 * @document https://www.kancloud.cn/manual/thinkphp6_0
 * @contact  QQ Group 996887666
 * @author   Eden Leung 758861884@qq.com
 * @copyright 2019 Eden Leung
 * @license  https://github.com/edenleung/think-admin/blob/6.0/LICENSE.txt
 */

use think\migration\Migrator;

/**
 * 规则表.
 */
class Permission extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('permission', ['engine' => 'InnoDB']);
        $table->addColumn('name', 'string', ['limit' => 100, 'comment' => '规则名称'])
            ->addColumn('title', 'string', ['limit' => 100, 'comment' => '名称'])
            ->addColumn('pid', 'integer', ['limit' => 11, 'default' => 0, 'comment' => '父级标识'])
            ->addColumn('status', 'integer', ['limit' => 11, 'default' => 0, 'comment' => '状态'])
            ->addIndex(['name'], ['unique' => true])
            ->create();
    }
}
