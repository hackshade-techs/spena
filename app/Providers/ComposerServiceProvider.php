<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Testimonial;
use App\Models\Klass;
use App\Models\Stream;
use App\Models\Event;
use App\Models\Gallerycategory;
use App\Models\Eventcategory;
use App\Models\Document;
use App\Models\Gallery;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('includes.classes', function($view){
            $view->with('classes', \App\Models\Klass::klasses());
        });

        view()->composer('includes.composers.news', function($view){
            $view->with('articles', \App\Article::articles());
        });

        view()->composer('includes.composers.classes', function($view){
            $view->with('classes', \App\Models\Klass::klasses());
        });

        view()->composer('includes.composers.teaching-staff', function($view){
            $view->with('staffs', \App\Models\Staff::staff());
        });

        view()->composer('includes.composers.non-teaching-staff', function($view){
            $view->with('staffs', \App\Models\Staff::staff());
        });

        view()->composer('includes.composers.alumni', function($view){
            $view->with('alumnis', \App\Models\Alumni::alumnis());
        });

        view()->composer('includes.composers.categories', function($view){
            $view->with('categories', \App\Category::categories());
            $view->with('articles', \App\Article::latestArticles());
        });

        view()->composer('includes.composers.classes-home', function($view){
            $view->with('classes', \App\Models\Klass::klasses());
        });

        view()->composer('includes.composers.testimonials', function($view){
            $view->with('testimonials', \App\Models\Testimonial::testimonials());
        });

        view()->composer('includes.composers.dashboard', function($view){
            $view->with('events', \App\Models\Event::eventCount());
            $view->with('staff', \App\Models\Staff::staffCount());
            $view->with('alumni', \App\Models\Alumni::alumniCount());
            $view->with('documents', \App\Models\Document::documentCount());
            $view->with('recentEvents', \App\Models\Event::recentEvent());
            $view->with('recentAlumnis', \App\Models\Alumni::recentAlumni());
        });


        $events = Event::paginate(3);
        $gallerycategories = Gallerycategory::all();
        $eventcategories = Eventcategory::all();
        $documents = Document::paginate(10);
        $images = Gallery::paginate(6);

        view::share('events',$events);
        view::share('gallerycategories',$gallerycategories);
        view::share('eventcategories',$eventcategories);
        view::share('documents',$documents);
        view::share('images',$images);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
