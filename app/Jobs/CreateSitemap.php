<?php

namespace App\Jobs;

use App\Models\Coupons;
use Conf;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateSitemap extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $coupons = Coupons::active()->get();
        $fh = fopen(public_path(Conf::get('sitemap.filename', 'sitemap.xml', false)), 'w');
        fwrite($fh, view('files.sitemap', compact('coupons'))->render());
        fclose($fh);
    }
}
