<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1/functions.proto

namespace Google\Cloud\Functions\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `CreateFunction` method.
 *
 * Generated from protobuf message <code>google.cloud.functions.v1.CreateFunctionRequest</code>
 */
class CreateFunctionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location in which the function should be created,
     * specified in the format `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $location = '';
    /**
     * Required. Function to be created.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.CloudFunction function = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $function = null;

    /**
     * @param string                                   $location Required. The project and location in which the function should be created,
     *                                                           specified in the format `projects/&#42;/locations/*`
     *                                                           Please see {@see CloudFunctionsServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Functions\V1\CloudFunction $function Required. Function to be created.
     *
     * @return \Google\Cloud\Functions\V1\CreateFunctionRequest
     *
     * @experimental
     */
    public static function build(string $location, \Google\Cloud\Functions\V1\CloudFunction $function): self
    {
        return (new self())
            ->setLocation($location)
            ->setFunction($function);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           Required. The project and location in which the function should be created,
     *           specified in the format `projects/&#42;&#47;locations/&#42;`
     *     @type \Google\Cloud\Functions\V1\CloudFunction $function
     *           Required. Function to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V1\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location in which the function should be created,
     * specified in the format `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Required. The project and location in which the function should be created,
     * specified in the format `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Required. Function to be created.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.CloudFunction function = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Functions\V1\CloudFunction|null
     */
    public function getFunction()
    {
        return $this->function;
    }

    public function hasFunction()
    {
        return isset($this->function);
    }

    public function clearFunction()
    {
        unset($this->function);
    }

    /**
     * Required. Function to be created.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.CloudFunction function = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Functions\V1\CloudFunction $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V1\CloudFunction::class);
        $this->function = $var;

        return $this;
    }

}

