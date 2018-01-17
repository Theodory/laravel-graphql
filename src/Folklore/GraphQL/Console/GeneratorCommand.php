<?php

namespace Folklore\GraphQL\Console;

use Illuminate\Console\GeneratorCommand as BaseGeneratorCommand;

abstract class GeneratorCommand extends BaseGeneratorCommand
{
    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }
}
