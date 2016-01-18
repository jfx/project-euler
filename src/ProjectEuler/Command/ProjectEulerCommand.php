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

namespace ProjectEuler\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

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
class ProjectEulerCommand extends Command
{
    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this
            ->setName('resolve')
            ->setDescription('Resolve a Project Euler problem')
            ->addArgument(
                'num',
                InputArgument::REQUIRED,
                'Which problem do you want to resolve ?'
            )
        ;
    }

    /**
     * Executes the current command.
     *
     * This method is not abstract because you can use this class
     * as a concrete class. In this case, instead of defining the
     * execute() method, you set the code to execute by passing
     * a Closure to the setCode() method.
     *
     * @param InputInterface  $input  An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     *
     * @return null|int null or 0 if everything went fine, or an error code
     *
     * @throws LogicException When this abstract method is not implemented
     *
     * @see setCode()
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $num = $input->getArgument('num');
        if (strlen($num) == 1) {
            $num = '00'.$num;
        } elseif (strlen($num) == 2) {
            $num = '0'.$num;
        }
        
        $className = '\ProjectEuler\Problem\N'.$num.'\Problem';
        $pb = new $className;

        $output->writeln('Problem #'.$pb->getId().': '.$pb->getTitle());
        $output->writeln('<comment>'.$pb->getDescription().'</comment>');
        $output->writeln('');

        $start = microtime(true);
        $output->writeln('<info>Result: '.$pb->getSolution().'</info>');
        $end = microtime(true);

        $time = round($end - $start, 3);
        $output->writeln('Time: '.$time.' s');
    }
}
