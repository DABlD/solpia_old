<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Composers\GlobalComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        //Composer - Rendered before view is about to be rendered.
        //Creator - Rendered immediately


        // Using class based composers...
        View::composer(
            'layouts.*', GlobalComposer::class
        );

        // Using Closure based composers...
        // View::composer(
        //     [
        //          array of view directories
        //     ], GlobalComposer::class
        // );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}