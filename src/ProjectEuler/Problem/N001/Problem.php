<?php

/**
 * LICENSE : This file is part of Project Euler in PHP.
 *
 * My Agile Product is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * My Agile Product is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace ProjectEuler\Problem\N001;

/**
 * Project Euler problem class.
 *
 * @category  Project Euler in PHP
 *
 * @author    Francois-Xavier Soubirou <soubirou@yahoo.fr>
 * @copyright 2016 Francois-Xavier Soubirou
 * @license   http://www.gnu.org/licenses/   GPLv3
 *
 * @link      https://projecteuler.net/
 * @since     1
 */
class Problem
{
    protected $jsonData;

    /**
     * Default constructor.
     */
    public function __construct()
    {
        $file = file_get_contents(__DIR__.'/problem.json');
        $this->jsonData = json_decode($file);
    }

    /**
     * Return id of the problem.
     *
     * @return string Id of the problem
     */
    public function getId()
    {
        return $this->jsonData->id;
    }

    /**
     * Return title of the problem.
     *
     * @return string Title of the problem
     */
    public function getTitle()
    {
        return $this->jsonData->title;
    }

    /**
     * Return description of the problem.
     *
     * @return string Description of the problem
     */
    public function getDescription()
    {
        return $this->jsonData->description;
    }

    /**
     * Resolve the problem.
     *
     * @param int $max Maximum
     *
     * @return int Sum of the multiples of 3 and 5
     */
    public function resolve($max)
    {
        $sum = 0;
        for ($i = 1; $i < $max; ++$i) {
            if ((($i % 3) == 0) || (($i % 5) == 0)) {
                $sum += $i;
            }
        }

        return $sum;
    }

    /**
     * Return solution of the problem.
     *
     * @return string Solution of the problem
     */
    public function getSolution()
    {
        return ''.$this->resolve(1000);
    }
}
