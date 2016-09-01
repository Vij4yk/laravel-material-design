<?php namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
		'event.name' => [
			'EventListener',
		],
	    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
	        'SocialiteProviders\YouTube\YouTubeExtendSocialite@handle',
	        'SocialiteProviders\Twitch\TwitchExtendSocialite@handle',
	        'SocialiteProviders\Instagram\InstagramExtendSocialite@handle',
	        'SocialiteProviders\ThirtySevenSignals\ThirtySevenSignalsExtendSocialite@handle',
	    ],

	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
    public function boot()
    {
        parent::boot();
        //
    }

}