<?php 
namespace App\Observers;

use App\Events\CreateEntityEvent;
use App\Events\HistoryCorrectionEvent;
use App\Models\Client;
use App\Observers\Traits\ObserverTrait;

class CleintObserver 
{
    use ObserverTrait;

    /**
     * updating - handle the client "updating" event
     * 
     * @param \App\Models\Client $client
     */

     public function updating(Client $client)
     {
        if($this->appropriateURL($client)){
            // Prevent duplicates
            if(!isset(request()->all()['logInitiated'])){
                //Set the log initiated
                request()->merge(['logInitiated' => 'initiated']);
                event(new HistoryCorrectionEvent($client));
            }
        }
     }
}

class EventServiceProvide extends ServiceProvide
{
    /**
     * The event listener mappings for the application
     * @var array
     */

     protected $listen = [
        'App\Events\HsitoryCorrectionEvent' => [
            'App\Listener\Log\HistoryCorrectionListener',
        ]
     ];

     /**
      * Register any events for your application
      * @return void
      */

      public function boot()
      {
        parent::boot();
        Client::observer(ClientObserver::class);
      }
}
