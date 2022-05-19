<?php

namespace App\Console;
use App\Models\denda;
use App\Models\dipinjam;
use Carbon\Carbon;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function(){
            $now = Carbon::now();
            
            //$telat = denda::whereHas('pinjam',function(Builder $query){
            //     return $query->where('tenggat_pengembalian','<',$now);
            // })->get();
            $telat = dipinjam::where('tenggat_pengembalian','<',$now)->get();
            
            foreach($telat as $terlambat){
                print_r("ada");
                $haritelat = Carbon::parse($terlambat->tenggat_pengembalian);
                $hari = $haritelat->diffinDays($now);
                $data = denda::where('id_pinjam', $terlambat->id)->first();
                if ($data){
                    $data->denda=$data->denda+3000;
                    $data->keterangan="Terlambat $hari hari";
                    $data->save();
                }else {
                    $data=new denda;
                    $data->id_pinjam=$terlambat->id;
                    $data->denda=3000;
                    $data->keterangan="Terlambat $hari hari";
                    $data->save();
                }
            }
        })->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
