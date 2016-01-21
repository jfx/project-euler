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

namespace ProjectEuler\Util;

/**
 * Project Euler util math class.
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
class Prime
{
    private $defaultLimit = 100;
    
    /**
     * Get list of primes from 2 to limit.
     *
     * @param int $limit The limit.
     *
     * @return array List of primes
     */
    public function getPrimesList($limit)
    {
        $arrayLimit = $limit - 1;
        $integers = array_fill(2, $arrayLimit, true);

        $start = 2;
        $end = $limit;

        while (($start * $start) <= $end) {
            for ($i = ($start + $start); $i <= $end; ($i += $start)) {
                $integers[$i] = false;
            }
            // Last int is not a prime, define new end check
            while ((!($integers[$end])) && ($start < $end)) {
                --$end;
            }
            ++$start;
            // Get next prime
            while ((!($integers[$start])) && ($start < $end)) {
                ++$start;
            }
        }
        $primes = array();
        foreach ($integers as $int => $value) {
            if ($integers[$int]) {
                $primes[] = $int;
            }
        }

        return $primes;
    }

    /**
     * Get primes factor of an integer.
     *
     * @param int $integer Integer
     *
     * @return array List of primes factor
     */
    public function getPrimesFactor($integer)
    {
        $limit = min(array($integer + 2, $this->defaultLimit));
        $primes = $this->getPrimesList($limit);

        $primesFactor = array();        
        $primeIndex = 0;
        $lastFactor = $integer;
                
        while ($primes[$primeIndex] <= $lastFactor) {
            
            while (($lastFactor % $primes[$primeIndex]) == 0) {
                $lastFactor = $lastFactor / $primes[$primeIndex];
                $primesFactor[] = $primes[$primeIndex];
            }
            $primeIndex++;
            if (!array_key_exists($primeIndex, $primes)) {
                $limit = 10 * $limit;
                $primes = $this->getPrimesList($limit);
            }
        }        
            
        return $primesFactor;   
    }
    
    /**
     * Set default limit.
     *
     * @param int $limit The limit.
     */
    public function setDefaultLimit($limit)
    {
        $this->defaultLimit = $limit;
    }
}
