<?php

/*
 * This file is part of the Ladybug package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Type;

use Ladybug\Type\Exception\InvalidVariableTypeException;

/**
 * FloatType is an abstraction of a primitive variable of type 'float'
 */
class FloatType extends AbstractType
{

    const TYPE_ID = 'float';

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->type = self::TYPE_ID;
    }

    /**
     * @inheritdoc
     */
    public function load($var, $level = 1)
    {
        if (!is_float($var)) {
            throw new InvalidVariableTypeException();
        }

        parent::load($var, $level);
    }

}
