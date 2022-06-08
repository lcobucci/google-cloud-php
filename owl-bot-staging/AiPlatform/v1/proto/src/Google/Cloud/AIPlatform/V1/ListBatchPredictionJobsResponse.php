<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [JobService.ListBatchPredictionJobs][google.cloud.aiplatform.v1.JobService.ListBatchPredictionJobs]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListBatchPredictionJobsResponse</code>
 */
class ListBatchPredictionJobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of BatchPredictionJobs in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.BatchPredictionJob batch_prediction_jobs = 1;</code>
     */
    private $batch_prediction_jobs;
    /**
     * A token to retrieve the next page of results.
     * Pass to [ListBatchPredictionJobsRequest.page_token][google.cloud.aiplatform.v1.ListBatchPredictionJobsRequest.page_token] to obtain that
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\BatchPredictionJob[]|\Google\Protobuf\Internal\RepeatedField $batch_prediction_jobs
     *           List of BatchPredictionJobs in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to [ListBatchPredictionJobsRequest.page_token][google.cloud.aiplatform.v1.ListBatchPredictionJobsRequest.page_token] to obtain that
     *           page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of BatchPredictionJobs in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.BatchPredictionJob batch_prediction_jobs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBatchPredictionJobs()
    {
        return $this->batch_prediction_jobs;
    }

    /**
     * List of BatchPredictionJobs in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.BatchPredictionJob batch_prediction_jobs = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\BatchPredictionJob[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBatchPredictionJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\BatchPredictionJob::class);
        $this->batch_prediction_jobs = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListBatchPredictionJobsRequest.page_token][google.cloud.aiplatform.v1.ListBatchPredictionJobsRequest.page_token] to obtain that
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListBatchPredictionJobsRequest.page_token][google.cloud.aiplatform.v1.ListBatchPredictionJobsRequest.page_token] to obtain that
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

