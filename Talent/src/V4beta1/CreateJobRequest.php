<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create job request.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.CreateJobRequest</code>
 */
class CreateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenant/bar". If tenant id is unspecified a default tenant
     * is created. For example, "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The Job to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Job job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $job = null;

    /**
     * @param string                           $parent Required. The resource name of the tenant under which the job is created.
     *
     *                                                 The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     *                                                 "projects/foo/tenant/bar". If tenant id is unspecified a default tenant
     *                                                 is created. For example, "projects/foo". Please see
     *                                                 {@see JobServiceClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\Talent\V4beta1\Job $job    Required. The Job to be created.
     *
     * @return \Google\Cloud\Talent\V4beta1\CreateJobRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Talent\V4beta1\Job $job): self
    {
        return (new self())
            ->setParent($parent)
            ->setJob($job);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the tenant under which the job is created.
     *           The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     *           "projects/foo/tenant/bar". If tenant id is unspecified a default tenant
     *           is created. For example, "projects/foo".
     *     @type \Google\Cloud\Talent\V4beta1\Job $job
     *           Required. The Job to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenant/bar". If tenant id is unspecified a default tenant
     * is created. For example, "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenant/bar". If tenant id is unspecified a default tenant
     * is created. For example, "projects/foo".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The Job to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Job job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Talent\V4beta1\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * Required. The Job to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Job job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Talent\V4beta1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Job::class);
        $this->job = $var;

        return $this;
    }

}

