<?php
/**
 * AccountsApi
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

namespace AlexBirtwell\ModulrHmacLaravel\Api;

use AlexBirtwell\ModulrHmacLaravel\ApiClient;
use AlexBirtwell\ModulrHmacLaravel\ApiException;

/**
 * AccountsApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApi
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
     * @return AccountsApi
     */
    public function setApiClient(\AlexBirtwell\ModulrHmacLaravel\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;

        return $this;
    }

    /**
     * Operation closeAccountUsingPOST.
     *
     * closeAccount
     *
     * @param string $id Id of Account to close (required)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return void
     */
    public function closeAccountUsingPOST($id)
    {
        list($response) = $this->closeAccountUsingPOSTWithHttpInfo($id);

        return $response;
    }

    /**
     * Operation closeAccountUsingPOSTWithHttpInfo.
     *
     * closeAccount
     *
     * @param string $id Id of Account to close (required)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function closeAccountUsingPOSTWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling closeAccountUsingPOST');
        }
        // parse inputs
        $resourcePath = '/accounts/{id}/close';
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/accounts/{id}/close'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation createAccount.
     *
     * Create Account for a Customer
     *
     * @param string                                                        $cid     Id of Customer to create account for (required)
     * @param \AlexBirtwell\ModulrHmacLaravel\Model\CreateAccountRequest $account Details of Account to create (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return \AlexBirtwell\ModulrHmacLaravel\Model\Account
     */
    public function createAccount($cid, $account = null)
    {
        list($response) = $this->createAccountWithHttpInfo($cid, $account);

        return $response;
    }

    /**
     * Operation createAccountWithHttpInfo.
     *
     * Create Account for a Customer
     *
     * @param string                                                        $cid     Id of Customer to create account for (required)
     * @param \AlexBirtwell\ModulrHmacLaravel\Model\CreateAccountRequest $account Details of Account to create (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return array of \AlexBirtwell\ModulrHmacLaravel\Model\Account, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAccountWithHttpInfo($cid, $account = null)
    {
        // verify the required parameter 'cid' is set
        if ($cid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cid when calling createAccount');
        }
        // parse inputs
        $resourcePath = '/customers/{cid}/accounts';
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=UTF-8']);

        // path params
        if ($cid !== null) {
            $resourcePath = str_replace(
                '{'.'cid'.'}',
                $this->apiClient->getSerializer()->toPathValue($cid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace('{format}', 'json', $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($account)) {
            $_tempBody = $account;
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
                '\AlexBirtwell\ModulrHmacLaravel\Model\Account',
                '/customers/{cid}/accounts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AlexBirtwell\ModulrHmacLaravel\Model\Account', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AlexBirtwell\ModulrHmacLaravel\Model\Account', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation editAccount.
     *
     * Edit Account by id
     *
     * @param string                                                        $id                 Id of Account to be edited (required)
     * @param \AlexBirtwell\ModulrHmacLaravel\Model\UpdateAccountRequest $external_reference New external reference for account (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return \AlexBirtwell\ModulrHmacLaravel\Model\Account
     */
    public function editAccount($id, $external_reference = null)
    {
        list($response) = $this->editAccountWithHttpInfo($id, $external_reference);

        return $response;
    }

    /**
     * Operation editAccountWithHttpInfo.
     *
     * Edit Account by id
     *
     * @param string                                                        $id                 Id of Account to be edited (required)
     * @param \AlexBirtwell\ModulrHmacLaravel\Model\UpdateAccountRequest $external_reference New external reference for account (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return array of \AlexBirtwell\ModulrHmacLaravel\Model\Account, HTTP status code, HTTP response headers (array of strings)
     */
    public function editAccountWithHttpInfo($id, $external_reference = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling editAccount');
        }
        // parse inputs
        $resourcePath = '/accounts/{id}';
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=UTF-8']);

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

        // body params
        $_tempBody = null;
        if (isset($external_reference)) {
            $_tempBody = $external_reference;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AlexBirtwell\ModulrHmacLaravel\Model\Account',
                '/accounts/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AlexBirtwell\ModulrHmacLaravel\Model\Account', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AlexBirtwell\ModulrHmacLaravel\Model\Account', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountUsingGET.
     *
     * getAccount
     *
     * @param string $id Id of Account to fetch (required)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return \AlexBirtwell\ModulrHmacLaravel\Model\Account
     */
    public function getAccountUsingGET($id)
    {
        list($response) = $this->getAccountUsingGETWithHttpInfo($id);

        return $response;
    }

    /**
     * Operation getAccountUsingGETWithHttpInfo.
     *
     * getAccount
     *
     * @param string $id Id of Account to fetch (required)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return array of \AlexBirtwell\ModulrHmacLaravel\Model\Account, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountUsingGETWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getAccountUsingGET');
        }
        // parse inputs
        $resourcePath = '/accounts/{id}';
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                '\AlexBirtwell\ModulrHmacLaravel\Model\Account',
                '/accounts/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AlexBirtwell\ModulrHmacLaravel\Model\Account', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AlexBirtwell\ModulrHmacLaravel\Model\Account', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccounts.
     *
     * Get accounts using filters
     *
     * @param string[] $id                Id of Account(s) to fetch (optional)
     * @param string   $q                 Id or Name of Account to search for (optional)
     * @param float    $min_balance       Accounts with balance equal or more than this amount (optional)
     * @param float    $max_balance       Accounts with balance equal or less than this amount (optional)
     * @param string   $from_created_date Accounts created after and on this date (optional)
     * @param string   $to_created_date   Accounts created before and on this date (optional)
     * @param int      $page              Page to fetch (0 indexed) (optional)
     * @param int      $size              Size of Page to fetch (optional, default to 20)
     * @param string   $sort_field        Sort by field (optional)
     * @param string   $sort_order        Sorting order (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return \AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_
     */
    public function getAccounts($id = null, $q = null, $min_balance = null, $max_balance = null, $from_created_date = null, $to_created_date = null, $page = null, $size = null, $sort_field = null, $sort_order = null)
    {
        list($response) = $this->getAccountsWithHttpInfo($id, $q, $min_balance, $max_balance, $from_created_date, $to_created_date, $page, $size, $sort_field, $sort_order);

        return $response;
    }

    /**
     * Operation getAccountsWithHttpInfo.
     *
     * Get accounts using filters
     *
     * @param string[] $id                Id of Account(s) to fetch (optional)
     * @param string   $q                 Id or Name of Account to search for (optional)
     * @param float    $min_balance       Accounts with balance equal or more than this amount (optional)
     * @param float    $max_balance       Accounts with balance equal or less than this amount (optional)
     * @param string   $from_created_date Accounts created after and on this date (optional)
     * @param string   $to_created_date   Accounts created before and on this date (optional)
     * @param int      $page              Page to fetch (0 indexed) (optional)
     * @param int      $size              Size of Page to fetch (optional, default to 20)
     * @param string   $sort_field        Sort by field (optional)
     * @param string   $sort_order        Sorting order (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return array of \AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountsWithHttpInfo($id = null, $q = null, $min_balance = null, $max_balance = null, $from_created_date = null, $to_created_date = null, $page = null, $size = null, $sort_field = null, $sort_order = null)
    {
        // parse inputs
        $resourcePath = '/accounts';
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
        if (is_array($id)) {
            $id = $this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($q !== null) {
            $queryParams['q'] = $this->apiClient->getSerializer()->toQueryValue($q);
        }
        // query params
        if ($min_balance !== null) {
            $queryParams['minBalance'] = $this->apiClient->getSerializer()->toQueryValue($min_balance);
        }
        // query params
        if ($max_balance !== null) {
            $queryParams['maxBalance'] = $this->apiClient->getSerializer()->toQueryValue($max_balance);
        }
        // query params
        if ($from_created_date !== null) {
            $queryParams['fromCreatedDate'] = $this->apiClient->getSerializer()->toQueryValue($from_created_date);
        }
        // query params
        if ($to_created_date !== null) {
            $queryParams['toCreatedDate'] = $this->apiClient->getSerializer()->toQueryValue($to_created_date);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($size !== null) {
            $queryParams['size'] = $this->apiClient->getSerializer()->toQueryValue($size);
        }
        // query params
        if ($sort_field !== null) {
            $queryParams['sortField'] = $this->apiClient->getSerializer()->toQueryValue($sort_field);
        }
        // query params
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = $this->apiClient->getSerializer()->toQueryValue($sort_order);
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
                '\AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_',
                '/accounts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountsByCustomerUsingGET1.
     *
     * getAccountsByCustomer
     *
     * @param string $cid               Id of Customer to fetch Accounts for (required)
     * @param float  $min_balance       Accounts with balance equal or more than this amount (optional)
     * @param float  $max_balance       Accounts with balance equal or less than this amount (optional)
     * @param string $from_created_date Accounts created after and on this date (optional)
     * @param string $to_created_date   Accounts created before and on this date (optional)
     * @param int    $page              Page to fetch (0 indexed) (optional)
     * @param int    $size              Size of Page to fetch (optional, default to 20)
     * @param string $sort_field        Sort by field (optional)
     * @param string $sort_order        Sorting order (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return \AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_
     */
    public function getAccountsByCustomerUsingGET1($cid, $min_balance = null, $max_balance = null, $from_created_date = null, $to_created_date = null, $page = null, $size = null, $sort_field = null, $sort_order = null)
    {
        list($response) = $this->getAccountsByCustomerUsingGET1WithHttpInfo($cid, $min_balance, $max_balance, $from_created_date, $to_created_date, $page, $size, $sort_field, $sort_order);

        return $response;
    }

    /**
     * Operation getAccountsByCustomerUsingGET1WithHttpInfo.
     *
     * getAccountsByCustomer
     *
     * @param string $cid               Id of Customer to fetch Accounts for (required)
     * @param float  $min_balance       Accounts with balance equal or more than this amount (optional)
     * @param float  $max_balance       Accounts with balance equal or less than this amount (optional)
     * @param string $from_created_date Accounts created after and on this date (optional)
     * @param string $to_created_date   Accounts created before and on this date (optional)
     * @param int    $page              Page to fetch (0 indexed) (optional)
     * @param int    $size              Size of Page to fetch (optional, default to 20)
     * @param string $sort_field        Sort by field (optional)
     * @param string $sort_order        Sorting order (optional)
     *
     * @throws \AlexBirtwell\ModulrHmacLaravel\ApiException on non-2xx response
     *
     * @return array of \AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountsByCustomerUsingGET1WithHttpInfo($cid, $min_balance = null, $max_balance = null, $from_created_date = null, $to_created_date = null, $page = null, $size = null, $sort_field = null, $sort_order = null)
    {
        // verify the required parameter 'cid' is set
        if ($cid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cid when calling getAccountsByCustomerUsingGET1');
        }
        // parse inputs
        $resourcePath = '/customers/{cid}/accounts';
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
        if ($min_balance !== null) {
            $queryParams['minBalance'] = $this->apiClient->getSerializer()->toQueryValue($min_balance);
        }
        // query params
        if ($max_balance !== null) {
            $queryParams['maxBalance'] = $this->apiClient->getSerializer()->toQueryValue($max_balance);
        }
        // query params
        if ($from_created_date !== null) {
            $queryParams['fromCreatedDate'] = $this->apiClient->getSerializer()->toQueryValue($from_created_date);
        }
        // query params
        if ($to_created_date !== null) {
            $queryParams['toCreatedDate'] = $this->apiClient->getSerializer()->toQueryValue($to_created_date);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($size !== null) {
            $queryParams['size'] = $this->apiClient->getSerializer()->toQueryValue($size);
        }
        // query params
        if ($sort_field !== null) {
            $queryParams['sortField'] = $this->apiClient->getSerializer()->toQueryValue($sort_field);
        }
        // query params
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = $this->apiClient->getSerializer()->toQueryValue($sort_order);
        }
        // path params
        if ($cid !== null) {
            $resourcePath = str_replace(
                '{'.'cid'.'}',
                $this->apiClient->getSerializer()->toPathValue($cid),
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
                '\AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_',
                '/customers/{cid}/accounts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AlexBirtwell\ModulrHmacLaravel\Model\PageResponseAccount_', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
