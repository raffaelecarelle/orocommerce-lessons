<?php

namespace Algoritma\Bundle\TrainingBundle\Command;

use Algoritma\Bundle\TrainingBundle\Service\HelloService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'hello', description: 'Say hello')]
class HelloCommand extends Command
{
    public function __construct(
        private HelloService $helloService
    )
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->helloService->sayHello());

        return Command::SUCCESS;
    }
}