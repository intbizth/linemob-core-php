<?php

/*
 * This file is part of the LineMob package.
 *
 * (c) Ishmael Doss <nukboon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LineMob\Core\Template\Flex;

use LINE\LINEBot\MessageBuilder\FlexMessageBuilder;
use LineMob\Core\Template\AbstractTemplate;

/**
 * @author Ishmael Doss <nukboon@gmail.com>
 */
class FlexTemplate extends AbstractTemplate
{
    /**
     * @var ContainerBuilder
     */
    public $containerBuilder;

    /**
     * @var string
     */
    public $altText = 'This is flex template.';

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        return new FlexMessageBuilder($this->altText, $this->containerBuilder);
    }
}
