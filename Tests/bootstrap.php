<?php
/**
 * Copyright 2009-2010 Zikula Foundation - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package FileSystem
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

spl_autoload_register(function ($class) {
        if (0 === strpos(ltrim($class, '/'), 'Zikula\Component\FileSystem')) {
            if (file_exists($file = __DIR__.'/../'.substr(str_replace('\\', '/', $class), strlen('Zikula\Component\FileSystem')).'.php')) {
                require_once $file;
            }
        }
    });
