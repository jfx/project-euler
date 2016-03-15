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
declare (strict_types = 1);

namespace ProjectEuler\Problem;

use ReflectionClass;

/**
 * Project Euler problem abstract class.
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
abstract class AbstractProblem
{
    protected $jsonData;

    protected $time = 0;

    /**
     * Default constructor.
     */
    public function __construct()
    {
        $classInfo = new ReflectionClass($this);
        $dir = dirname($classInfo->getFileName());
        $file = file_get_contents($dir.'/problem.json');
        $this->jsonData = json_decode($file);
    }

    /**
     * Return id of the problem.
     *
     * @return string Id of the problem
     */
    public function getId(): int
    {
        return intval($this->jsonData->id);
    }

    /**
     * Return title of the problem.
     *
     * @return string Title of the problem
     */
    public function getTitle(): string
    {
        return $this->jsonData->title;
    }

    /**
     * Return description of the problem.
     *
     * @return string Description of the problem
     */
    public function getDescription(): string
    {
        return $this->jsonData->description;
    }

    /**
     * Return solution of the problem.
     *
     * @return string Solution of the problem
     */
    public function getSolution(): string
    {
        $start = microtime(true);

        $solution = $this->resolution();

        $end = microtime(true);
        $this->time = $end - $start;

        return $solution;
    }

    /**
     * Return the time to resolve the problem rounded to 3 digits.
     *
     * @return float Time in second
     */
    public function getRoundTime(): float
    {
        return round($this->time, 3);
    }

    /**
     * Return the time to resolve the problem.
     *
     * @return float Time in second
     */
    public function getTime(): float
    {
        return $this->time;
    }

    /**
     * Return the json representation of the problem.
     *
     * @return string The json string
     */
    public function toJson(): string
    {
        $array = array(
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'solution' => $this->getSolution(),
            'time' => $this->getTime(),
            'roundTime' => $this->getRoundTime(),
        );

        return json_encode($array);
    }

    /**
     * Resolve the problem.
     *
     * @return string Solution of the problem
     */
    abstract protected function resolution(): string;
}
