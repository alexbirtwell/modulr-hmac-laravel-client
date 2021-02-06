<?php
/**
 * TransactionsApi
 * PHP version 5.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Modulr API.
 *
 * Modulo API
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CrowdProperty\ModulrHmacPhpClient\Api;

use CrowdProperty\ModulrHmacPhpClient\ApiClient;
use CrowdProperty\ModulrHmacPhpClient\ApiException;

/**
 * TransactionsApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionsApi
{
    /**
     * API Client.
     *
     * @var \CrowdProperty\ModulrHmacPhpClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor.
     *
     * @param \CrowdProperty\ModulrHmacPhpClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CrowdProperty\ModulrHmacPhpClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client.
     *
     * @return \CrowdProperty\ModulrHmacPhpClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client.
     *
     * @param \CrowdProperty\ModulrHmacPhpClient\ApiClient $apiClient set the API client
     *
     * @return TransactionsApi
     */
    public function setApiClient(\CrowdProperty\ModulrHmacPhpClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;

        return $this;
    }

    /**
     * Operation getTransactions.
     *
     * Get Transactions for Account
     *
     * @param string   $id                    Id of Account to fetch Transactions for (required)
     * @param int      $page                  Page to fetch (0 indexed) (optional)
     * @param int      $size                  Size of Page to fetch (optional, default to 20)
     * @param string   $q                     Partial description text to search for (optional)
     * @param float    $min_amount            Transactions with amount equal or more than this amount (optional)
     * @param float    $max_amount            Transactions with amount equal or less than this amount (optional)
     * @param string   $from_transaction_date Transactions with transaction date equal or after to this date (optional)
     * @param string   $to_transaction_date   Transactions with transaction date equal or before to this date (optional)
     * @param string   $from_posted_date      Transactions with posted date equal or after to this date (optional)
     * @param string   $to_posted_date        Transactions with posted date equal or before to this date (optional)
     * @param string[] $type                  Transactions of this type, multiple types can be specified by repeating the parameter (optional)
     * @param bool     $credit                If true only credit transactions will be returned, if false, only debit transactions will be returned (optional)
     * @param string   $source_id             Transactions with this sourceId (optional)
     *
     * @throws \CrowdProperty\ModulrHmacPhpClient\ApiException on non-2xx response
     *
     * @return \CrowdProperty\ModulrHmacPhpClient\Model\TransactionPageResponse
     */
    public function getTransactions($id, $page = null, $size = null, $q = null, $min_amount = null, $max_amount = null, $from_transaction_date = null, $to_transaction_date = null, $from_posted_date = null, $to_posted_date = null, $type = null, $credit = null, $source_id = null)
    {
        list($response) = $this->getTransactionsWithHttpInfo($id, $page, $size, $q, $min_amount, $max_amount, $from_transaction_date, $to_transaction_date, $from_posted_date, $to_posted_date, $type, $credit, $source_id);

        return $response;
    }

    /**
     * Operation getTransactionsWithHttpInfo.
     *
     * Get Transactions for Account
     *
     * @param string   $id                    Id of Account to fetch Transactions for (required)
     * @param int      $page                  Page to fetch (0 indexed) (optional)
     * @param int      $size                  Size of Page to fetch (optional, default to 20)
     * @param string   $q                     Partial description text to search for (optional)
     * @param float    $min_amount            Transactions with amount equal or more than this amount (optional)
     * @param float    $max_amount            Transactions with amount equal or less than this amount (optional)
     * @param string   $from_transaction_date Transactions with transaction date equal or after to this date (optional)
     * @param string   $to_transaction_date   Transactions with transaction date equal or before to this date (optional)
     * @param string   $from_posted_date      Transactions with posted date equal or after to this date (optional)
     * @param string   $to_posted_date        Transactions with posted date equal or before to this date (optional)
     * @param string[] $type                  Transactions of this type, multiple types can be specified by repeating the parameter (optional)
     * @param bool     $credit                If true only credit transactions will be returned, if false, only debit transactions will be returned (optional)
     * @param string   $source_id             Transactions with this sourceId (optional)
     *
     * @throws \CrowdProperty\ModulrHmacPhpClient\ApiException on non-2xx response
     *
     * @return array of \CrowdProperty\ModulrHmacPhpClient\Model\TransactionPageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionsWithHttpInfo($id, $page = null, $size = null, $q = null, $min_amount = null, $max_amount = null, $from_transaction_date = null, $to_transaction_date = null, $from_posted_date = null, $to_posted_date = null, $type = null, $credit = null, $source_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTransactions');
        }
        // parse inputs
        $resourcePath = '/accounts/{id}/transactions';
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($size !== null) {
            $queryParams['size'] = $this->apiClient->getSerializer()->toQueryValue($size);
        }
        // query params
        if ($q !== null) {
            $queryParams['q'] = $this->apiClient->getSerializer()->toQueryValue($q);
        }
        // query params
        if ($min_amount !== null) {
            $queryParams['minAmount'] = $this->apiClient->getSerializer()->toQueryValue($min_amount);
        }
        // query params
        if ($max_amount !== null) {
            $queryParams['maxAmount'] = $this->apiClient->getSerializer()->toQueryValue($max_amount);
        }
        // query params
        if ($from_transaction_date !== null) {
            $queryParams['fromTransactionDate'] = $this->apiClient->getSerializer()->toQueryValue($from_transaction_date);
        }
        // query params
        if ($to_transaction_date !== null) {
            $queryParams['toTransactionDate'] = $this->apiClient->getSerializer()->toQueryValue($to_transaction_date);
        }
        // query params
        if ($from_posted_date !== null) {
            $queryParams['fromPostedDate'] = $this->apiClient->getSerializer()->toQueryValue($from_posted_date);
        }
        // query params
        if ($to_posted_date !== null) {
            $queryParams['toPostedDate'] = $this->apiClient->getSerializer()->toQueryValue($to_posted_date);
        }
        // query params
        if (is_array($type)) {
            $type = $this->apiClient->getSerializer()->serializeCollection($type, 'multi', true);
        }
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($credit !== null) {
            $queryParams['credit'] = $this->apiClient->getSerializer()->toQueryValue($credit);
        }
        // query params
        if ($source_id !== null) {
            $queryParams['sourceId'] = $this->apiClient->getSerializer()->toQueryValue($source_id);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{'.'id'.'}',
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace('{format}', 'json', $resourcePath);

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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CrowdProperty\ModulrHmacPhpClient\Model\TransactionPageResponse',
                '/accounts/{id}/transactions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CrowdProperty\ModulrHmacPhpClient\Model\TransactionPageResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CrowdProperty\ModulrHmacPhpClient\Model\TransactionPageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
