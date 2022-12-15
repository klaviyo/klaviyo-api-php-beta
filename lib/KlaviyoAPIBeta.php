<?php
namespace KlaviyoAPIBeta;

use GuzzleHttp\Client as GuzzleClient;
use KlaviyoAPIBeta\ApiException;
use KlaviyoAPIBeta\Configuration;

use KlaviyoAPIBeta\API\CampaignsApi;
use KlaviyoAPIBeta\API\FlowsApi;
use KlaviyoAPIBeta\API\ListsApi;
use KlaviyoAPIBeta\API\SegmentsApi;
use KlaviyoAPIBeta\API\TagsApi;




class KlaviyoAPIBeta {
    public $api_key = "API_KEY";
    public $wait_seconds;
    public $num_retries;
    public $Campaigns;
    public $Flows;
    public $Lists;
    public $Segments;
    public $Tags;
    


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

        
        $this->Campaigns = new Subclient(
                new CampaignsApi(new GuzzleClient(),$this->config),
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
        
        $this->Segments = new Subclient(
                new SegmentsApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        
        $this->Tags = new Subclient(
                new TagsApi(new GuzzleClient(),$this->config),
                $wait_seconds = 3,
                $num_retries = 3,
            );
        

    }
}
