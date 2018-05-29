<?php

namespace MatMage\System\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CustomCommand extends Command
{

    protected function configure()
    {
        $this->setName('name:action');
        $this->setDescription('Description about command');

        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /*

            (Functionality of command)

        */

        $output->writeln(" - Operation Complete - ");
    }
}