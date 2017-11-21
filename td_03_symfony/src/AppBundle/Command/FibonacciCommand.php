<?php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use AppBundle\Service\FibonacciService;

class FibonacciCommand extends Command
{

    protected function configure()
    {
        $this->setName('app:fibonacci')
            ->setDescription('Compute Fibonacci number.')
            ->addArgument('n', InputArgument::REQUIRED, 'Number to compute.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $service = new FibonacciService();
        
        $n = $input->getArgument('n');
        $output->writeln('Fibonacci number of ' . $n . ' is ' . $service->compute($n));
    }
}
