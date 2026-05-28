<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:populate', description: 'Hello PhpStorm')]
class PopulateCommand
{
    public function __invoke(SymfonyStyle $io): int
    {
        //@todo code ici


        return Command::SUCCESS;
    }
}
