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

declare(strict_types=1);

require_once '../vendor/autoload.php';

use ProjectEuler\Problem\ProblemFactory;
use ProjectEuler\Problem\ProblemFactoryException;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

/**
 * Project Euler command class.
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

$app = new Application();

// define route for /resolve/{id}
$app->get('/resolve/{id}', function ($id) {
        
    try {
    	$pb = ProblemFactory::get(intval($id));
    }
    catch (ProblemFactoryException $e) {
    	return new Response("Problem #{$id} not found.", 404);
    }
    return $pb->toJson();
    
})->assert('id', '\d+');

// default route
$app->get('/', function () {
  return "List of available methods:
  - /resolve/{id} - Resolution for Project Euler problem id";
});

$app->run();
