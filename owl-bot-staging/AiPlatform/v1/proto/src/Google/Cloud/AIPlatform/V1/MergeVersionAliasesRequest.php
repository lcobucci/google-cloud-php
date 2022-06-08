<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [ModelService.MergeVersionAliases][google.cloud.aiplatform.v1.ModelService.MergeVersionAliases].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.MergeVersionAliasesRequest</code>
 */
class MergeVersionAliasesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the model version to merge aliases, with a version ID
     * explicitly included.
     * Example: `projects/{project}/locations/{location}/models/{model}&#64;1234`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The set of version aliases to merge.
     * The alias should be at most 128 characters, and match
     * `[a-z][a-z0-9-]{0,126}[a-z-0-9]`.
     * Add the `-` prefix to an alias means removing that alias from the version.
     * `-` is NOT counted in the 128 characters. Example: `-golden` means removing
     * the `golden` alias from the version.
     * There is NO ordering in aliases, which means
     * 1) The aliases returned from GetModel API might not have the exactly same
     * order from this MergeVersionAliases API. 2) Adding and deleting the same
     * alias in the request is not recommended, and the 2 operations will be
     * cancelled out.
     *
     * Generated from protobuf field <code>repeated string version_aliases = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $version_aliases;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the model version to merge aliases, with a version ID
     *           explicitly included.
     *           Example: `projects/{project}/locations/{location}/models/{model}&#64;1234`
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $version_aliases
     *           Required. The set of version aliases to merge.
     *           The alias should be at most 128 characters, and match
     *           `[a-z][a-z0-9-]{0,126}[a-z-0-9]`.
     *           Add the `-` prefix to an alias means removing that alias from the version.
     *           `-` is NOT counted in the 128 characters. Example: `-golden` means removing
     *           the `golden` alias from the version.
     *           There is NO ordering in aliases, which means
     *           1) The aliases returned from GetModel API might not have the exactly same
     *           order from this MergeVersionAliases API. 2) Adding and deleting the same
     *           alias in the request is not recommended, and the 2 operations will be
     *           cancelled out.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the model version to merge aliases, with a version ID
     * explicitly included.
     * Example: `projects/{project}/locations/{location}/models/{model}&#64;1234`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the model version to merge aliases, with a version ID
     * explicitly included.
     * Example: `projects/{project}/locations/{location}/models/{model}&#64;1234`
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
     * Required. The set of version aliases to merge.
     * The alias should be at most 128 characters, and match
     * `[a-z][a-z0-9-]{0,126}[a-z-0-9]`.
     * Add the `-` prefix to an alias means removing that alias from the version.
     * `-` is NOT counted in the 128 characters. Example: `-golden` means removing
     * the `golden` alias from the version.
     * There is NO ordering in aliases, which means
     * 1) The aliases returned from GetModel API might not have the exactly same
     * order from this MergeVersionAliases API. 2) Adding and deleting the same
     * alias in the request is not recommended, and the 2 operations will be
     * cancelled out.
     *
     * Generated from protobuf field <code>repeated string version_aliases = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVersionAliases()
    {
        return $this->version_aliases;
    }

    /**
     * Required. The set of version aliases to merge.
     * The alias should be at most 128 characters, and match
     * `[a-z][a-z0-9-]{0,126}[a-z-0-9]`.
     * Add the `-` prefix to an alias means removing that alias from the version.
     * `-` is NOT counted in the 128 characters. Example: `-golden` means removing
     * the `golden` alias from the version.
     * There is NO ordering in aliases, which means
     * 1) The aliases returned from GetModel API might not have the exactly same
     * order from this MergeVersionAliases API. 2) Adding and deleting the same
     * alias in the request is not recommended, and the 2 operations will be
     * cancelled out.
     *
     * Generated from protobuf field <code>repeated string version_aliases = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVersionAliases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->version_aliases = $arr;

        return $this;
    }

}

