<?php
/**
 * ContentFeedApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\ContentEntity\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ContentFeedApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentFeedApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/content-entity-service');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ContentFeedApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getOrderedRelatedContent
     *
     * get the content related to an entity
     *
     * @param string $wiki_id  (required)
     * @param int $limit  (optional, default to 20)
     * @param bool $include_root_relations  (optional, default to true)
     * @param bool $show_connection_details  (optional, default to false)
     * @param bool $restrict_universe  (optional, default to true)
     * @param string[] $content_order  (optional)
     * @return \Swagger\Client\ContentEntity\Models\MixedRelatedContent
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOrderedRelatedContent($wiki_id, $limit = null, $include_root_relations = null, $show_connection_details = null, $restrict_universe = null, $content_order = null)
    {
        list($response) = $this->getOrderedRelatedContentWithHttpInfo($wiki_id, $limit, $include_root_relations, $show_connection_details, $restrict_universe, $content_order);
        return $response;
    }

    /**
     * Operation getOrderedRelatedContentWithHttpInfo
     *
     * get the content related to an entity
     *
     * @param string $wiki_id  (required)
     * @param int $limit  (optional, default to 20)
     * @param bool $include_root_relations  (optional, default to true)
     * @param bool $show_connection_details  (optional, default to false)
     * @param bool $restrict_universe  (optional, default to true)
     * @param string[] $content_order  (optional)
     * @return Array of \Swagger\Client\ContentEntity\Models\MixedRelatedContent, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOrderedRelatedContentWithHttpInfo($wiki_id, $limit = null, $include_root_relations = null, $show_connection_details = null, $restrict_universe = null, $content_order = null)
    {
        // verify the required parameter 'wiki_id' is set
        if ($wiki_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $wiki_id when calling getOrderedRelatedContent');
        }
        // parse inputs
        $resourcePath = "/content-feed/from-wiki-id/{wikiId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($include_root_relations !== null) {
            $queryParams['includeRootRelations'] = $this->apiClient->getSerializer()->toQueryValue($include_root_relations);
        }
        // query params
        if ($show_connection_details !== null) {
            $queryParams['showConnectionDetails'] = $this->apiClient->getSerializer()->toQueryValue($show_connection_details);
        }
        // query params
        if ($restrict_universe !== null) {
            $queryParams['restrictUniverse'] = $this->apiClient->getSerializer()->toQueryValue($restrict_universe);
        }
        // query params
        if (is_array($content_order)) {
            $content_order = $this->apiClient->getSerializer()->serializeCollection($content_order, 'multi', true);
        }
        if ($content_order !== null) {
            $queryParams['contentOrder'] = $this->apiClient->getSerializer()->toQueryValue($content_order);
        }
        // path params
        if ($wiki_id !== null) {
            $resourcePath = str_replace(
                "{" . "wikiId" . "}",
                $this->apiClient->getSerializer()->toPathValue($wiki_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\ContentEntity\Models\MixedRelatedContent',
                '/content-feed/from-wiki-id/{wikiId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\ContentEntity\Models\MixedRelatedContent', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\MixedRelatedContent', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRelatedContentFromContentId
     *
     * get the content related to another content, using its url
     *
     * @param string $content_id  (required)
     * @param int $limit  (optional, default to 20)
     * @param bool $show_connection_details  (optional, default to false)
     * @param string $restrict_universe  (optional)
     * @return \Swagger\Client\ContentEntity\Models\FilteredRelatedContent
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getRelatedContentFromContentId($content_id, $limit = null, $show_connection_details = null, $restrict_universe = null)
    {
        list($response) = $this->getRelatedContentFromContentIdWithHttpInfo($content_id, $limit, $show_connection_details, $restrict_universe);
        return $response;
    }

    /**
     * Operation getRelatedContentFromContentIdWithHttpInfo
     *
     * get the content related to another content, using its url
     *
     * @param string $content_id  (required)
     * @param int $limit  (optional, default to 20)
     * @param bool $show_connection_details  (optional, default to false)
     * @param string $restrict_universe  (optional)
     * @return Array of \Swagger\Client\ContentEntity\Models\FilteredRelatedContent, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getRelatedContentFromContentIdWithHttpInfo($content_id, $limit = null, $show_connection_details = null, $restrict_universe = null)
    {
        // verify the required parameter 'content_id' is set
        if ($content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_id when calling getRelatedContentFromContentId');
        }
        // parse inputs
        $resourcePath = "/content-feed/from-content-id/{contentId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($show_connection_details !== null) {
            $queryParams['showConnectionDetails'] = $this->apiClient->getSerializer()->toQueryValue($show_connection_details);
        }
        // query params
        if ($restrict_universe !== null) {
            $queryParams['restrictUniverse'] = $this->apiClient->getSerializer()->toQueryValue($restrict_universe);
        }
        // path params
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "contentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent',
                '/content-feed/from-content-id/{contentId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRelatedContentFromContentUrl
     *
     * get the content related to content by url
     *
     * @param string $url  (required)
     * @param int $limit  (optional, default to 20)
     * @param bool $show_connection_details  (optional, default to false)
     * @param string $restrict_universe  (optional)
     * @return \Swagger\Client\ContentEntity\Models\FilteredRelatedContent
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getRelatedContentFromContentUrl($url, $limit = null, $show_connection_details = null, $restrict_universe = null)
    {
        list($response) = $this->getRelatedContentFromContentUrlWithHttpInfo($url, $limit, $show_connection_details, $restrict_universe);
        return $response;
    }

    /**
     * Operation getRelatedContentFromContentUrlWithHttpInfo
     *
     * get the content related to content by url
     *
     * @param string $url  (required)
     * @param int $limit  (optional, default to 20)
     * @param bool $show_connection_details  (optional, default to false)
     * @param string $restrict_universe  (optional)
     * @return Array of \Swagger\Client\ContentEntity\Models\FilteredRelatedContent, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getRelatedContentFromContentUrlWithHttpInfo($url, $limit = null, $show_connection_details = null, $restrict_universe = null)
    {
        // verify the required parameter 'url' is set
        if ($url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $url when calling getRelatedContentFromContentUrl');
        }
        if (!preg_match(".+", $url)) {
            throw new \InvalidArgumentException('invalid value for "url" when calling ContentFeedApi.getRelatedContentFromContentUrl, must conform to the pattern .+.');
        }

        // parse inputs
        $resourcePath = "/content-feed/from-content-url/{url}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($show_connection_details !== null) {
            $queryParams['showConnectionDetails'] = $this->apiClient->getSerializer()->toQueryValue($show_connection_details);
        }
        // query params
        if ($restrict_universe !== null) {
            $queryParams['restrictUniverse'] = $this->apiClient->getSerializer()->toQueryValue($restrict_universe);
        }
        // path params
        if ($url !== null) {
            $resourcePath = str_replace(
                "{" . "url" . "}",
                $this->apiClient->getSerializer()->toPathValue($url),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent',
                '/content-feed/from-content-url/{url}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRelatedContentFromEntityId
     *
     * get the content related to an entity
     *
     * @param string $entity_id  (required)
     * @param int $limit  (optional, default to 20)
     * @param bool $include_root_relations  (optional, default to true)
     * @param bool $show_connection_details  (optional, default to false)
     * @param bool $restrict_universe  (optional, default to true)
     * @return \Swagger\Client\ContentEntity\Models\FilteredRelatedContent
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getRelatedContentFromEntityId($entity_id, $limit = null, $include_root_relations = null, $show_connection_details = null, $restrict_universe = null)
    {
        list($response) = $this->getRelatedContentFromEntityIdWithHttpInfo($entity_id, $limit, $include_root_relations, $show_connection_details, $restrict_universe);
        return $response;
    }

    /**
     * Operation getRelatedContentFromEntityIdWithHttpInfo
     *
     * get the content related to an entity
     *
     * @param string $entity_id  (required)
     * @param int $limit  (optional, default to 20)
     * @param bool $include_root_relations  (optional, default to true)
     * @param bool $show_connection_details  (optional, default to false)
     * @param bool $restrict_universe  (optional, default to true)
     * @return Array of \Swagger\Client\ContentEntity\Models\FilteredRelatedContent, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getRelatedContentFromEntityIdWithHttpInfo($entity_id, $limit = null, $include_root_relations = null, $show_connection_details = null, $restrict_universe = null)
    {
        // verify the required parameter 'entity_id' is set
        if ($entity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entity_id when calling getRelatedContentFromEntityId');
        }
        // parse inputs
        $resourcePath = "/content-feed/from-entity-id/{entityId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($include_root_relations !== null) {
            $queryParams['includeRootRelations'] = $this->apiClient->getSerializer()->toQueryValue($include_root_relations);
        }
        // query params
        if ($show_connection_details !== null) {
            $queryParams['showConnectionDetails'] = $this->apiClient->getSerializer()->toQueryValue($show_connection_details);
        }
        // query params
        if ($restrict_universe !== null) {
            $queryParams['restrictUniverse'] = $this->apiClient->getSerializer()->toQueryValue($restrict_universe);
        }
        // path params
        if ($entity_id !== null) {
            $resourcePath = str_replace(
                "{" . "entityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($entity_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent',
                '/content-feed/from-entity-id/{entityId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRelatedContentFromEntityName
     *
     * get content related to an entity (by name)
     *
     * @param string $name  (required)
     * @param string $entity_universe  (optional)
     * @param int $limit  (optional, default to 20)
     * @param bool $include_root_relations  (optional, default to true)
     * @param bool $show_connection_details  (optional, default to false)
     * @param bool $restrict_universe  (optional, default to true)
     * @return \Swagger\Client\ContentEntity\Models\FilteredRelatedContent
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getRelatedContentFromEntityName($name, $entity_universe = null, $limit = null, $include_root_relations = null, $show_connection_details = null, $restrict_universe = null)
    {
        list($response) = $this->getRelatedContentFromEntityNameWithHttpInfo($name, $entity_universe, $limit, $include_root_relations, $show_connection_details, $restrict_universe);
        return $response;
    }

    /**
     * Operation getRelatedContentFromEntityNameWithHttpInfo
     *
     * get content related to an entity (by name)
     *
     * @param string $name  (required)
     * @param string $entity_universe  (optional)
     * @param int $limit  (optional, default to 20)
     * @param bool $include_root_relations  (optional, default to true)
     * @param bool $show_connection_details  (optional, default to false)
     * @param bool $restrict_universe  (optional, default to true)
     * @return Array of \Swagger\Client\ContentEntity\Models\FilteredRelatedContent, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getRelatedContentFromEntityNameWithHttpInfo($name, $entity_universe = null, $limit = null, $include_root_relations = null, $show_connection_details = null, $restrict_universe = null)
    {
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getRelatedContentFromEntityName');
        }
        // parse inputs
        $resourcePath = "/content-feed/from-entity-name/{name}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($entity_universe !== null) {
            $queryParams['entityUniverse'] = $this->apiClient->getSerializer()->toQueryValue($entity_universe);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($include_root_relations !== null) {
            $queryParams['includeRootRelations'] = $this->apiClient->getSerializer()->toQueryValue($include_root_relations);
        }
        // query params
        if ($show_connection_details !== null) {
            $queryParams['showConnectionDetails'] = $this->apiClient->getSerializer()->toQueryValue($show_connection_details);
        }
        // query params
        if ($restrict_universe !== null) {
            $queryParams['restrictUniverse'] = $this->apiClient->getSerializer()->toQueryValue($restrict_universe);
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                "{" . "name" . "}",
                $this->apiClient->getSerializer()->toPathValue($name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent',
                '/content-feed/from-entity-name/{name}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWikiRelatedContent
     *
     * get content feed for a given community
     *
     * @param string $community_name  (required)
     * @return \Swagger\Client\ContentEntity\Models\FilteredRelatedContent
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getWikiRelatedContent($community_name)
    {
        list($response) = $this->getWikiRelatedContentWithHttpInfo($community_name);
        return $response;
    }

    /**
     * Operation getWikiRelatedContentWithHttpInfo
     *
     * get content feed for a given community
     *
     * @param string $community_name  (required)
     * @return Array of \Swagger\Client\ContentEntity\Models\FilteredRelatedContent, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getWikiRelatedContentWithHttpInfo($community_name)
    {
        // verify the required parameter 'community_name' is set
        if ($community_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $community_name when calling getWikiRelatedContent');
        }
        // parse inputs
        $resourcePath = "/content-feed/community/{communityName}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('text/html', 'application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($community_name !== null) {
            $resourcePath = str_replace(
                "{" . "communityName" . "}",
                $this->apiClient->getSerializer()->toPathValue($community_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent',
                '/content-feed/community/{communityName}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\FilteredRelatedContent', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\ContentEntity\Models\ResponseObj', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
