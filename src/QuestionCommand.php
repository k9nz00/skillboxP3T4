<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class QuestionCommand extends Command
{
    protected static $defaultName = 'command_3';

    protected function configure()
    {
        $this->setName('command_3')
            ->setDescription('Выполнение команды 3')
            ->setHelp(
                'Команда в интерактивном режиме задает вопрос и
                      получает ответ от пользователя его имя, возраст и пол,
                       а затем выводит их одной строкой');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $yourNameQuestion = new Question('Введите ваше имя: ', null);
        $yourAgeQuestion = new Question('Введите ваш возраст:', null);
        $yourSexQuestion = new ChoiceQuestion(
            'Ваш пол:',
            ['м', 'ж',],
            0
        );

        $yourNameAnswer = $helper->ask($input, $output, $yourNameQuestion);
        $yourAgeAnswer = $helper->ask($input, $output, $yourAgeQuestion);
        $yourSexAnswer = $helper->ask($input, $output, $yourSexQuestion);

        $output->writeln('Здравствуйте' . $yourNameAnswer.' ! Ваш возраст - '. $yourAgeAnswer. ', ваш пол - '. $yourSexAnswer);
        return 1;
    }
}