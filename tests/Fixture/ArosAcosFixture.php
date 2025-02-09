<?php

/**
 * CakePHP(tm) Tests <http://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/2.0/en/development/testing.html CakePHP(tm) Tests
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Acl\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Short description for class.
 */
class ArosAcosFixture extends TestFixture
{
    /**
     * fields property
     *
     * @var array
     */
    public $fields = [
        'id' => ['type' => 'integer'],
        'aro_id' => ['type' => 'integer', 'length' => 10, 'null' => false],
        'aco_id' => ['type' => 'integer', 'length' => 10, 'null' => false],
        '_create' => ['type' => 'string', 'length' => 2, 'default' => 0],
        '_read' => ['type' => 'string', 'length' => 2, 'default' => 0],
        '_update' => ['type' => 'string', 'length' => 2, 'default' => 0],
        '_delete' => ['type' => 'string', 'length' => 2, 'default' => 0],
        '_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']]],
    ];

    /**
     * records property
     *
     * @var array
     */
    public $records = [];
}
