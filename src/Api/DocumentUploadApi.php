<?php

namespace AlexBirtwell\ModulrHmacLaravel\Api;

use AlexBirtwell\ModulrHmacLaravel\ApiClient;
use AlexBirtwell\ModulrHmacLaravel\ApiException;

/**
 * Documents Class Doc Comment.
 *
 * @category Class
 *
 * @author   CrowdProperty
 */
class DocumentUploadApi
{
    /**
     * API Client.
     *
     * @var \AlexBirtwell\ModulrHmacLaravel\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor.
     *
     * @param \AlexBirtwell\ModulrHmacLaravel\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\AlexBirtwell\ModulrHmacLaravel\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client.
     *
     * @return \AlexBirtwell\ModulrHmacLaravel\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client.
     *
     * @param \AlexBirtwell\ModulrHmacLaravel\ApiClient $apiClient set the API client
     *
     * @return DocumentUploadApi
     */
    public function setApiClient(\AlexBirtwell\ModulrHmacLaravel\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;

        return $this;
    }

    /**
     * Operation createAccountWithHttpInfo.
     *
     * Create Account for a Customer
     *
     * @param \AlexBirtwell\ModulrHmacLaravel\Model\DocumentUpload $account Details of Account to create (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return array of \AlexBirtwell\ModulrHmacLaravel\Model\Account, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadDocument($document)
    {
        // parse inputs
        $resourcePath = '/documents';
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=UTF-8']);

        // default format to json
        $resourcePath = str_replace('{format}', 'json', $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($document)) {
            $_tempBody = $document;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AlexBirtwell\ModulrHmacLaravel\Model\Document',
                '/documents/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AlexBirtwell\ModulrHmacLaravel\Model\Document', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AlexBirtwell\ModulrHmacLaravel\Model\Document', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
