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
    protected $signature = 'add:admin_user';

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
        $name = $this->ask('admin name?');
        $email = $this->ask('email address?');
        $password = $this->secret('admin password?');
        $type = $this->ask('admin type[0,1,2]?');
        $this->info('begin to add admin user');
        $this->line("username: $name");
        $this->line("email: $email");
        $this->line("password: $password");
        $this->line("admin type: $type");
        if($this->confirm('Do you wish to CONTINUE???')){
            $u = AdminUser::create([
                'name'  =>  $name, 'email' => $email, 'password' => md5($password),
                'admin_type'    =>  $type,
            ]);
            $this->info("Done!!!");
        }
    }
}
