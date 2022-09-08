<?php
namespace KlaviyoBeta;

class Subclient {

    public function __construct(
        $api_instance, 
        $wait_seconds = 3,
        $num_retries = 3,
        $retry_codes = [429,503,504,524]
    ) {
        $this->api_instance = $api_instance;
        $this->wait_seconds = $wait_seconds;
        $this->num_retries = $num_retries;
        $this->retry_codes = $retry_codes;
    }

    public function __call($name, $args) {

        $attempts = 0;
        
        do {

            try {
                $result = $this->api_instance->$name(...$args);
                return $result;
            } catch (Exception $e) {
                
                if ( ! in_array($e->getCode(),$this->retry_codes)) {
                    throw $e;
                }
                else {
                    echo "\nretrying...\n";
                    $attempts++;
                    sleep($this->wait_seconds);
                    continue;
    
                }
            }
        
            break;
        
        } while($attempts < ($this->num_retries));

        throw $e;
    }

}