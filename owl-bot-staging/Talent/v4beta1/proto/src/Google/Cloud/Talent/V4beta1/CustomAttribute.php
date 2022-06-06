<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Custom attribute values that are either filterable or non-filterable.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.CustomAttribute</code>
 */
class CustomAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Exactly one of [string_values][google.cloud.talent.v4beta1.CustomAttribute.string_values] or [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] must be specified.
     * This field is used to perform a string match (`CASE_SENSITIVE_MATCH` or
     * `CASE_INSENSITIVE_MATCH`) search.
     * For filterable `string_value`s, a maximum total number of 200 values
     * is allowed, with each `string_value` has a byte size of no more than
     * 500B. For unfilterable `string_values`, the maximum total byte size of
     * unfilterable `string_values` is 50KB.
     * Empty string isn't allowed.
     *
     * Generated from protobuf field <code>repeated string string_values = 1;</code>
     */
    private $string_values;
    /**
     * Exactly one of [string_values][google.cloud.talent.v4beta1.CustomAttribute.string_values] or [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] must be specified.
     * This field is used to perform number range search.
     * (`EQ`, `GT`, `GE`, `LE`, `LT`) over filterable `long_value`.
     * Currently at most 1 [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] is supported.
     *
     * Generated from protobuf field <code>repeated int64 long_values = 2;</code>
     */
    private $long_values;
    /**
     * If the `filterable` flag is true, the custom field values may be used for
     * custom attribute filters [JobQuery.custom_attribute_filter][google.cloud.talent.v4beta1.JobQuery.custom_attribute_filter].
     * If false, these values may not be used for custom attribute filters.
     * Default is false.
     *
     * Generated from protobuf field <code>bool filterable = 3;</code>
     */
    protected $filterable = false;
    /**
     * If the `keyword_searchable` flag is true, the keywords in custom fields are
     * searchable by keyword match.
     * If false, the values are not searchable by keyword match.
     * Default is false.
     *
     * Generated from protobuf field <code>bool keyword_searchable = 4;</code>
     */
    protected $keyword_searchable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $string_values
     *           Exactly one of [string_values][google.cloud.talent.v4beta1.CustomAttribute.string_values] or [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] must be specified.
     *           This field is used to perform a string match (`CASE_SENSITIVE_MATCH` or
     *           `CASE_INSENSITIVE_MATCH`) search.
     *           For filterable `string_value`s, a maximum total number of 200 values
     *           is allowed, with each `string_value` has a byte size of no more than
     *           500B. For unfilterable `string_values`, the maximum total byte size of
     *           unfilterable `string_values` is 50KB.
     *           Empty string isn't allowed.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $long_values
     *           Exactly one of [string_values][google.cloud.talent.v4beta1.CustomAttribute.string_values] or [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] must be specified.
     *           This field is used to perform number range search.
     *           (`EQ`, `GT`, `GE`, `LE`, `LT`) over filterable `long_value`.
     *           Currently at most 1 [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] is supported.
     *     @type bool $filterable
     *           If the `filterable` flag is true, the custom field values may be used for
     *           custom attribute filters [JobQuery.custom_attribute_filter][google.cloud.talent.v4beta1.JobQuery.custom_attribute_filter].
     *           If false, these values may not be used for custom attribute filters.
     *           Default is false.
     *     @type bool $keyword_searchable
     *           If the `keyword_searchable` flag is true, the keywords in custom fields are
     *           searchable by keyword match.
     *           If false, the values are not searchable by keyword match.
     *           Default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Exactly one of [string_values][google.cloud.talent.v4beta1.CustomAttribute.string_values] or [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] must be specified.
     * This field is used to perform a string match (`CASE_SENSITIVE_MATCH` or
     * `CASE_INSENSITIVE_MATCH`) search.
     * For filterable `string_value`s, a maximum total number of 200 values
     * is allowed, with each `string_value` has a byte size of no more than
     * 500B. For unfilterable `string_values`, the maximum total byte size of
     * unfilterable `string_values` is 50KB.
     * Empty string isn't allowed.
     *
     * Generated from protobuf field <code>repeated string string_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStringValues()
    {
        return $this->string_values;
    }

    /**
     * Exactly one of [string_values][google.cloud.talent.v4beta1.CustomAttribute.string_values] or [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] must be specified.
     * This field is used to perform a string match (`CASE_SENSITIVE_MATCH` or
     * `CASE_INSENSITIVE_MATCH`) search.
     * For filterable `string_value`s, a maximum total number of 200 values
     * is allowed, with each `string_value` has a byte size of no more than
     * 500B. For unfilterable `string_values`, the maximum total byte size of
     * unfilterable `string_values` is 50KB.
     * Empty string isn't allowed.
     *
     * Generated from protobuf field <code>repeated string string_values = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStringValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->string_values = $arr;

        return $this;
    }

    /**
     * Exactly one of [string_values][google.cloud.talent.v4beta1.CustomAttribute.string_values] or [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] must be specified.
     * This field is used to perform number range search.
     * (`EQ`, `GT`, `GE`, `LE`, `LT`) over filterable `long_value`.
     * Currently at most 1 [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] is supported.
     *
     * Generated from protobuf field <code>repeated int64 long_values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLongValues()
    {
        return $this->long_values;
    }

    /**
     * Exactly one of [string_values][google.cloud.talent.v4beta1.CustomAttribute.string_values] or [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] must be specified.
     * This field is used to perform number range search.
     * (`EQ`, `GT`, `GE`, `LE`, `LT`) over filterable `long_value`.
     * Currently at most 1 [long_values][google.cloud.talent.v4beta1.CustomAttribute.long_values] is supported.
     *
     * Generated from protobuf field <code>repeated int64 long_values = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLongValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->long_values = $arr;

        return $this;
    }

    /**
     * If the `filterable` flag is true, the custom field values may be used for
     * custom attribute filters [JobQuery.custom_attribute_filter][google.cloud.talent.v4beta1.JobQuery.custom_attribute_filter].
     * If false, these values may not be used for custom attribute filters.
     * Default is false.
     *
     * Generated from protobuf field <code>bool filterable = 3;</code>
     * @return bool
     */
    public function getFilterable()
    {
        return $this->filterable;
    }

    /**
     * If the `filterable` flag is true, the custom field values may be used for
     * custom attribute filters [JobQuery.custom_attribute_filter][google.cloud.talent.v4beta1.JobQuery.custom_attribute_filter].
     * If false, these values may not be used for custom attribute filters.
     * Default is false.
     *
     * Generated from protobuf field <code>bool filterable = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFilterable($var)
    {
        GPBUtil::checkBool($var);
        $this->filterable = $var;

        return $this;
    }

    /**
     * If the `keyword_searchable` flag is true, the keywords in custom fields are
     * searchable by keyword match.
     * If false, the values are not searchable by keyword match.
     * Default is false.
     *
     * Generated from protobuf field <code>bool keyword_searchable = 4;</code>
     * @return bool
     */
    public function getKeywordSearchable()
    {
        return $this->keyword_searchable;
    }

    /**
     * If the `keyword_searchable` flag is true, the keywords in custom fields are
     * searchable by keyword match.
     * If false, the values are not searchable by keyword match.
     * Default is false.
     *
     * Generated from protobuf field <code>bool keyword_searchable = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setKeywordSearchable($var)
    {
        GPBUtil::checkBool($var);
        $this->keyword_searchable = $var;

        return $this;
    }

}

