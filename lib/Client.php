<?php
namespace KlaviyoBeta;

use GuzzleHttp\Client as GuzzleClient;
use KlaviyoBeta\ApiException;
use KlaviyoBeta\Configuration;

use KlaviyoBeta\API\CatalogsApi;
use KlaviyoBeta\API\ClientApi;
use KlaviyoBeta\API\EventsApi;
use KlaviyoBeta\API\FlowsApi;
use KlaviyoBeta\API\ListsApi;
use KlaviyoBeta\API\MetricsApi;
use KlaviyoBeta\API\ProfilesApi;
use KlaviyoBeta\API\SegmentsApi;
use KlaviyoBeta\API\TemplatesApi;




class Client {
    public $api_key = "API_KEY";
    public $wait_seconds;
    public $num_retries;
    public $Catalogs;
    public $Client;
    public $Events;
    public $Flows;
    public $Lists;
    public $Metrics;
    public $Profiles;
    public $Segments;
    public $Templates;
    


    public function __construct($api_key, $num_retries = 3, $wait_seconds = 3) {

        if (gettype($num_retries) == 'NULL'){
            $num_retries = 3;
        } 

        if (gettype($wait_seconds) == 'NULL'){
            $wait_seconds = 3;
        } 

        $this->api_key = $api_key;
        $this->num_retries = $num_retries;
        $this->wait_seconds = $wait_seconds;

        $this->config = clone Configuration::getDefaultConfiguration();
        $this->config->setApiKey('Authorization',"Klaviyo-API-Key $this->api_key");

        
        $this->Catalogs = new Subclient(
                new CatalogsApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Client = new Subclient(
                new ClientApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Events = new Subclient(
                new EventsApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Flows = new Subclient(
                new FlowsApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Lists = new Subclient(
                new ListsApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Metrics = new Subclient(
                new MetricsApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Profiles = new Subclient(
                new ProfilesApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Segments = new Subclient(
                new SegmentsApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Templates = new Subclient(
                new TemplatesApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        

    }
}
