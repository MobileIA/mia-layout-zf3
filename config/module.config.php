<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */
namespace MIALayout;

use Zend\ServiceManager\Factory\InvokableFactory;

return array(
    'view_helpers' => [
        'aliases' => [
            'miaLayout' => View\Helper\Layout::class,
        ],
        'factories' => [
            View\Helper\Layout::class => View\Helper\LayoutFactory::class,
        ],
    ],
    'mia_layout' => [
        'title' => 'AdminElite',
        'title_part_one' => 'Admin',
        'title_part_two' => 'LTE',
    ]
);