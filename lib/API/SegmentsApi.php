<?php
/**
 * SegmentsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPIBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API (Beta)
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2022-12-15.pre
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPIBeta\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use KlaviyoAPIBeta\ApiException;
use KlaviyoAPIBeta\Configuration;
use KlaviyoAPIBeta\HeaderSelector;
use KlaviyoAPIBeta\ObjectSerializer;

/**
 * SegmentsApi Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPIBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SegmentsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getSegmentTags
     *
     * Get Segment Tags
     *
     * @param  string $segment_id  (required)
     * @param  string[] $fields_tag For more information please visit https://developers.klaviyo.com/en/v/reference/api-overview#sparse-fieldsets (optional)
     *
     * @throws \KlaviyoAPIBeta\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array<string,mixed>|\KlaviyoAPIBeta\Model\GetCampaigns400Response|\KlaviyoAPIBeta\Model\GetCampaigns400Response
     */
    public function getSegmentTags($segment_id, $fields_tag = null, $apiKey = null)
    {
        list($response) = $this->getSegmentTagsWithHttpInfo($segment_id, $fields_tag, $apiKey);
        return $response;
    }

    /**
     * Operation getSegmentTagsWithHttpInfo
     *
     * Get Segment Tags
     *
     * @param  string $segment_id  (required)
     * @param  string[] $fields_tag For more information please visit https://developers.klaviyo.com/en/v/reference/api-overview#sparse-fieldsets (optional)
     *
     * @throws \KlaviyoAPIBeta\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of array<string,mixed>|\KlaviyoAPIBeta\Model\GetCampaigns400Response|\KlaviyoAPIBeta\Model\GetCampaigns400Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSegmentTagsWithHttpInfo($segment_id, $fields_tag = null, $apiKey = null)
    {
        $request = $this->getSegmentTagsRequest($segment_id, $fields_tag, $apiKey);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('array<string,mixed>' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('array&lt;string,mixed&gt;' !== 'string') {
                            $content = json_decode($content);
                        }
                    }


                    $parsed_content = json_decode(json_encode($content), TRUE);
                    if (json_last_error() != JSON_ERROR_NONE) {
                        $parsed_content = $content;
                    }

                    return [
                        $parsed_content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\KlaviyoAPIBeta\Model\GetCampaigns400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\KlaviyoAPIBeta\Model\GetCampaigns400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }


                    $parsed_content = json_decode(json_encode($content), TRUE);
                    if (json_last_error() != JSON_ERROR_NONE) {
                        $parsed_content = $content;
                    }

                    return [
                        $parsed_content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\KlaviyoAPIBeta\Model\GetCampaigns400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\KlaviyoAPIBeta\Model\GetCampaigns400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }


                    $parsed_content = json_decode(json_encode($content), TRUE);
                    if (json_last_error() != JSON_ERROR_NONE) {
                        $parsed_content = $content;
                    }

                    return [
                        $parsed_content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'array<string,mixed>';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            $parsed_content = json_decode(json_encode($content), TRUE);
            if (json_last_error() != JSON_ERROR_NONE) {
                $parsed_content = $content;
            }

            return [
                $parsed_content,
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'array<string,mixed>',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\KlaviyoAPIBeta\Model\GetCampaigns400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\KlaviyoAPIBeta\Model\GetCampaigns400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSegmentTagsAsync
     *
     * Get Segment Tags
     *
     * @param  string $segment_id  (required)
     * @param  string[] $fields_tag For more information please visit https://developers.klaviyo.com/en/v/reference/api-overview#sparse-fieldsets (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentTagsAsync($segment_id, $fields_tag = null, $apiKey = null)
    {
        return $this->getSegmentTagsAsyncWithHttpInfo($segment_id, $fields_tag, $apiKey)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSegmentTagsAsyncWithHttpInfo
     *
     * Get Segment Tags
     *
     * @param  string $segment_id  (required)
     * @param  string[] $fields_tag For more information please visit https://developers.klaviyo.com/en/v/reference/api-overview#sparse-fieldsets (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentTagsAsyncWithHttpInfo($segment_id, $fields_tag = null, $apiKey = null)
    {
        $returnType = 'array<string,mixed>';
        $request = $this->getSegmentTagsRequest($segment_id, $fields_tag, $apiKey);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    $parsed_content = json_decode(json_encode($content), TRUE);
                    if (json_last_error() != JSON_ERROR_NONE) {
                        $parsed_content = $content;
                    }

                    return [
                        $parsed_content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSegmentTags'
     *
     * @param  string $segment_id  (required)
     * @param  string[] $fields_tag For more information please visit https://developers.klaviyo.com/en/v/reference/api-overview#sparse-fieldsets (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSegmentTagsRequest($segment_id, $fields_tag = null, $apiKey = null)
    {
        // verify the required parameter 'segment_id' is set
        if ($segment_id === null || (is_array($segment_id) && count($segment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $segment_id when calling getSegmentTags'
            );
        }

        $resourcePath = '/api/segments/{segment_id}/tags/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $fields_tag,
            'fields[tag]', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($segment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'segment_id' . '}',
                ObjectSerializer::toPathValue($segment_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        if ($apiKey == null) {
            $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        } else {
            $apiKey = 'Klaviyo-API-Key '.$apiKey;
        }

        $headers['Authorization'] = $apiKey;


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $defaultHeaders['revision'] = ['2022-12-15.pre'];

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
