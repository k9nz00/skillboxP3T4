<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetWordCommand extends Command
{
    protected static $defaultName = 'command_1';

    protected function configure()
    {
        $this->setName('command_1');
        $this->setDescription('Выполнение команды 1');
        $this->setHelp('Команда выводит входной параметр на экран');
        $this->addArgument('Param', InputArgument::REQUIRED, 'Переменная для вывода', null);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Привет ' . $input->getArgument('Param'));
        return 1;
    }
}