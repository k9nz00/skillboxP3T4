<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GetWordLoopCommand extends Command
{
    protected static $defaultName = 'command_2';

    protected function configure()
    {
        $this->setName('command_2')
            ->setDescription('Выполнение команды 1')
            ->setHelp('Команда выводит входной обязательный параметр параметр на экран.
                             Количество поаторений вывода равно второму необязательном параметру.
                             По умолчанию 2 раза ')
            ->addArgument(
                'requiredParam',
                InputArgument::IS_ARRAY,
                'Переменная для вывода',
                null)
            ->addOption(
                'iteration',
                'i',
                InputOption::VALUE_OPTIONAL,
                'Количество повторений вывода аргумента',
                2);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $outputStr = '';
        foreach ($input->getArgument('requiredParam') as $str) {
            $outputStr .= $str . ' ';
        }

        for ($i = 0; $i < $input->getOption('iteration'); $i++) {
            $output->writeln($outputStr);
        }
        return 1;
    }
}