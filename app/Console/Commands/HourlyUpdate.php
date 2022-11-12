<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'command:name';
    protected $signature = 'hour:update';
    
    

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';
        protected $description = 'Send an hourly email to all the users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user)
        {
            
            Mail::raw("This is automatically generated Hourly Update", function($message) use ($user)
            {
            $message->from('saquib.gt@gmail.com');
            $message->to($user->email)->subject('Hourly Update');
            });
            




        }

        $this->info('Hourly Update has been send successfully');
        // return Command::SUCCESS;
    }

}
