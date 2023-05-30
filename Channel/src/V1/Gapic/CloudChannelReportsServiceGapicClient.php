<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/channel/v1/reports_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Channel\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Channel\V1\DateRange;
use Google\Cloud\Channel\V1\FetchReportResultsRequest;
use Google\Cloud\Channel\V1\FetchReportResultsResponse;
use Google\Cloud\Channel\V1\ListReportsRequest;
use Google\Cloud\Channel\V1\ListReportsResponse;
use Google\Cloud\Channel\V1\OperationMetadata;
use Google\Cloud\Channel\V1\RunReportJobRequest;
use Google\Cloud\Channel\V1\RunReportJobResponse;
use Google\LongRunning\Operation;

/**
 * Service Description: CloudChannelReportsService lets Google Cloud resellers and
 * distributors retrieve and combine a variety of data in Cloud Channel for
 * multiple products (Google Cloud, Google Voice, and Google Workspace.)
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $cloudChannelReportsServiceClient = new CloudChannelReportsServiceClient();
 * try {
 *     $formattedReportJob = $cloudChannelReportsServiceClient->reportJobName('[ACCOUNT]', '[REPORT_JOB]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $cloudChannelReportsServiceClient->fetchReportResults($formattedReportJob);
 *     foreach ($pagedResponse->iteratePages() as $page) {
 *         foreach ($page as $element) {
 *             // doSomethingWith($element);
 *         }
 *     }
 *     // Alternatively:
 *     // Iterate through all elements
 *     $pagedResponse = $cloudChannelReportsServiceClient->fetchReportResults($formattedReportJob);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $cloudChannelReportsServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class CloudChannelReportsServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.channel.v1.CloudChannelReportsService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'cloudchannel.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/apps.reports.usage.readonly',
    ];

    private static $reportNameTemplate;

    private static $reportJobNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cloud_channel_reports_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_channel_reports_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_channel_reports_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cloud_channel_reports_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getReportNameTemplate()
    {
        if (self::$reportNameTemplate == null) {
            self::$reportNameTemplate = new PathTemplate('accounts/{account}/reports/{report}');
        }

        return self::$reportNameTemplate;
    }

    private static function getReportJobNameTemplate()
    {
        if (self::$reportJobNameTemplate == null) {
            self::$reportJobNameTemplate = new PathTemplate('accounts/{account}/reportJobs/{report_job}');
        }

        return self::$reportJobNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'report' => self::getReportNameTemplate(),
                'reportJob' => self::getReportJobNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a report
     * resource.
     *
     * @param string $account
     * @param string $report
     *
     * @return string The formatted report resource.
     */
    public static function reportName($account, $report)
    {
        return self::getReportNameTemplate()->render([
            'account' => $account,
            'report' => $report,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a report_job
     * resource.
     *
     * @param string $account
     * @param string $reportJob
     *
     * @return string The formatted report_job resource.
     */
    public static function reportJobName($account, $reportJob)
    {
        return self::getReportJobNameTemplate()->render([
            'account' => $account,
            'report_job' => $reportJob,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - report: accounts/{account}/reports/{report}
     * - reportJob: accounts/{account}/reportJobs/{report_job}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudchannel.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Retrieves data generated by
     * [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
     *
     * Sample code:
     * ```
     * $cloudChannelReportsServiceClient = new CloudChannelReportsServiceClient();
     * try {
     *     $formattedReportJob = $cloudChannelReportsServiceClient->reportJobName('[ACCOUNT]', '[REPORT_JOB]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $cloudChannelReportsServiceClient->fetchReportResults($formattedReportJob);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $cloudChannelReportsServiceClient->fetchReportResults($formattedReportJob);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $cloudChannelReportsServiceClient->close();
     * }
     * ```
     *
     * @param string $reportJob    Required. The report job created by
     *                             [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
     *                             Report_job uses the format:
     *                             accounts/{account_id}/reportJobs/{report_job_id}
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type string[] $partitionKeys
     *           Optional. List of keys specifying which report partitions to return.
     *           If empty, returns all partitions.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function fetchReportResults($reportJob, array $optionalArgs = [])
    {
        $request = new FetchReportResultsRequest();
        $requestParamHeaders = [];
        $request->setReportJob($reportJob);
        $requestParamHeaders['report_job'] = $reportJob;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['partitionKeys'])) {
            $request->setPartitionKeys($optionalArgs['partitionKeys']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('FetchReportResults', $optionalArgs, FetchReportResultsResponse::class, $request);
    }

    /**
     * Lists the reports that RunReportJob can run. These reports include an ID,
     * a description, and the list of columns that will be in the result.
     *
     * Sample code:
     * ```
     * $cloudChannelReportsServiceClient = new CloudChannelReportsServiceClient();
     * try {
     *     $parent = 'parent';
     *     // Iterate over pages of elements
     *     $pagedResponse = $cloudChannelReportsServiceClient->listReports($parent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $cloudChannelReportsServiceClient->listReports($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $cloudChannelReportsServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the partner account to list available
     *                             reports for. Parent uses the format: accounts/{account_id}
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type string $languageCode
     *           Optional. The BCP-47 language code, such as "en-US".  If specified, the
     *           response is localized to the corresponding language code if the
     *           original data sources support it.
     *           Default is "en-US".
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listReports($parent, array $optionalArgs = [])
    {
        $request = new ListReportsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListReports', $optionalArgs, ListReportsResponse::class, $request);
    }

    /**
     * Begins generation of data for a given report. The report
     * identifier is a UID (for example, `613bf59q`).
     *
     * Possible error codes:
     *
     * * PERMISSION_DENIED: The user doesn't have access to this report.
     * * INVALID_ARGUMENT: Required request parameters are missing
     * or invalid.
     * * NOT_FOUND: The report identifier was not found.
     * * INTERNAL: Any non-user error related to a technical issue
     * in the backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue
     * in the backend. Contact Cloud Channel support.
     *
     * Return value:
     * The ID of a long-running operation.
     *
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata contains an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     *
     * To get the results of report generation, call
     * [CloudChannelReportsService.FetchReportResults][google.cloud.channel.v1.CloudChannelReportsService.FetchReportResults]
     * with the
     * [RunReportJobResponse.report_job][google.cloud.channel.v1.RunReportJobResponse.report_job].
     *
     * Sample code:
     * ```
     * $cloudChannelReportsServiceClient = new CloudChannelReportsServiceClient();
     * try {
     *     $formattedName = $cloudChannelReportsServiceClient->reportName('[ACCOUNT]', '[REPORT]');
     *     $operationResponse = $cloudChannelReportsServiceClient->runReportJob($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudChannelReportsServiceClient->runReportJob($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudChannelReportsServiceClient->resumeOperation($operationName, 'runReportJob');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $cloudChannelReportsServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The report's resource name. Specifies the account and report used
     *                             to generate report data. The report_id identifier is a UID (for example,
     *                             `613bf59q`).
     *                             Name uses the format:
     *                             accounts/{account_id}/reports/{report_id}
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type DateRange $dateRange
     *           Optional. The range of usage or invoice dates to include in the result.
     *     @type string $filter
     *           Optional. A structured string that defines conditions on dimension columns
     *           to restrict the report output.
     *
     *           Filters support logical operators (AND, OR, NOT) and conditional operators
     *           (=, !=, <, >, <=, and >=) using `column_id` as keys.
     *
     *           For example:
     *           `(customer:"accounts/C123abc/customers/S456def" OR
     *           customer:"accounts/C123abc/customers/S789ghi") AND
     *           invoice_start_date.year >= 2022`
     *     @type string $languageCode
     *           Optional. The BCP-47 language code, such as "en-US".  If specified, the
     *           response is localized to the corresponding language code if the
     *           original data sources support it.
     *           Default is "en-US".
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function runReportJob($name, array $optionalArgs = [])
    {
        $request = new RunReportJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['dateRange'])) {
            $request->setDateRange($optionalArgs['dateRange']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('RunReportJob', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
