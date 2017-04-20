<?php
/*
 * This file is part of the Related Product plugin
 *
 * Copyright (C) 2017 LOCKON CO.,LTD. All Rights Reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CsvSql\Validator;

use Symfony\Component\Validator\Constraint;

class SqlCheck extends Constraint
{
    public $message = 'SQL文が不正です。SQL文を見直してください';
}