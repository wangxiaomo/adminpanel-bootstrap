<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AdminUser;

class AddAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:admin_user {name} {email} {password} {admin_type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add admin user by console';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $args = $this->arguments();
        $args['password'] = md5($args['password']);
        dump($args);
        $u = AdminUser::create($args);
    }
}
