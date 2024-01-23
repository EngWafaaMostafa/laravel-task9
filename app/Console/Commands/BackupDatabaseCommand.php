<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Spatie\DbDumper\Databases\MySql;
//use Spatie\Backtrace\File;

class BackupDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backup-database-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this backups the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        File::put(path: 'dump.sql', contents: '');
        MySql::create()
            ->setDbName(env(key: 'DB_DATABASE'))
            ->setUserName(env(key: 'DB_USERNAME'))
            ->setPassword(env(key: 'DB_PASSWORD'))
            ->setHost(env(key: 'DB_HOST'))
            ->setPort(env(key: 'DB_PORT'))
            ->dumpToFile(base_path(path: 'dump.sql'));
    }
}
