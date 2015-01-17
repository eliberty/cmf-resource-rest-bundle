<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2014 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\ResourceRestBundle\Helper;

class PathHelper
{
    /**
     * Remove the leading "/" from the given path
     * This is required when generating the URL to the resource
     * via. expression language.
     *
     * @param string $path;
     * @return string
     */
    public function relativize($path)

    {
        if (substr($path, 0, 1) == '/') {
            return substr($path, 1);
        }

        return $path;
    }
}
