<?php

use App\Importers\CsvImporter;
use Illuminate\Database\Connection;
use App\Console\Commands\ImportCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ImportCommandTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test the CSV files are imported correctly.
     *
     * No assertions are made here, any issues with the CSV files will result
     * in an error.
     *
     * @return void
     */
    public function testHandleCsvImporter()
    {
        $db = $this->app->make(Connection::class);
        $output = new NullOutput;
        $importer = new CsvImporter($db, $output);

        $command = new ImportCommand($importer);
        $command->setLaravel($this->app);
        $command->run(
            new ArrayInput([]),
            $output
        );
    }
}
