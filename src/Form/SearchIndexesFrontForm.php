<?php
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */

namespace BcSearchIndex\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use BaserCore\Annotation\UnitTest;
use BaserCore\Annotation\NoTodo;
use BaserCore\Annotation\Checked;

/**
 * SearchIndexesFrontForm
 */
class SearchIndexesFrontForm extends Form
{

    /**
     * サイト内検索フォームのスキーマを生成
     *
     * サイト内検索のフォームにコンテキストとしてセットするために利用する。
     *
     * ### フィールド
     * - f: フォルダID
     * - q: 検索キーワード
     * - s: サイトID
     *
     * @param Schema $schema
     * @return Schema
     * @checked
     * @noTodo
     * @unitTest
     */
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('f', 'string')
            ->addField('q', 'string')
            ->addField('s', 'string');
    }

}
