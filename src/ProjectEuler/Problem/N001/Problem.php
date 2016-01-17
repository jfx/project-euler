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
 * Project Euler problem.
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
    protected $id = '001';

    protected $title = 'Multiples of 3 and 5';

    protected $description = <<<EOT
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.    
EOT;
    
    /**
     * Return id of the problem.
     * 
     * @return string Id of the problem
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Return title of the problem.
     * 
     * @return string Title of the problem
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Return description of the problem.
     * 
     * @return string Description of the problem
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Return solution of the problem.
     * 
     * @return string Solution of the problem
     */
    public function getSolution()
    {
        return '233168';
    }
}
