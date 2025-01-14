<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1/functions.proto

namespace Google\Cloud\Functions\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `CallFunction` method.
 *
 * Generated from protobuf message <code>google.cloud.functions.v1.CallFunctionRequest</code>
 */
class CallFunctionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the function to be called.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. Input to be passed to the function.
     *
     * Generated from protobuf field <code>string data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $data = '';

    /**
     * @param string $name Required. The name of the function to be called. Please see
     *                     {@see CloudFunctionsServiceClient::cloudFunctionName()} for help formatting this field.
     * @param string $data Required. Input to be passed to the function.
     *
     * @return \Google\Cloud\Functions\V1\CallFunctionRequest
     *
     * @experimental
     */
    public static function build(string $name, string $data): self
    {
        return (new self())
            ->setName($name)
            ->setData($data);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the function to be called.
     *     @type string $data
     *           Required. Input to be passed to the function.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V1\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the function to be called.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the function to be called.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Input to be passed to the function.
     *
     * Generated from protobuf field <code>string data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Required. Input to be passed to the function.
     *
     * Generated from protobuf field <code>string data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->data = $var;

        return $this;
    }

}

