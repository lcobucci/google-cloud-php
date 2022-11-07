<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification that applies to a table resource. Valid only
 * for entries with the `TABLE` type.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.DatabaseTableSpec</code>
 */
class DatabaseTableSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of this table.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DatabaseTableSpec.TableType type = 1;</code>
     */
    private $type = 0;
    /**
     * Output only. Fields specific to a Dataplex table and present only in the
     * Dataplex table entries.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DataplexTableSpec dataplex_table = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $dataplex_table = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of this table.
     *     @type \Google\Cloud\DataCatalog\V1\DataplexTableSpec $dataplex_table
     *           Output only. Fields specific to a Dataplex table and present only in the
     *           Dataplex table entries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of this table.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DatabaseTableSpec.TableType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of this table.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DatabaseTableSpec.TableType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\DatabaseTableSpec\TableType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. Fields specific to a Dataplex table and present only in the
     * Dataplex table entries.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DataplexTableSpec dataplex_table = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DataCatalog\V1\DataplexTableSpec|null
     */
    public function getDataplexTable()
    {
        return $this->dataplex_table;
    }

    public function hasDataplexTable()
    {
        return isset($this->dataplex_table);
    }

    public function clearDataplexTable()
    {
        unset($this->dataplex_table);
    }

    /**
     * Output only. Fields specific to a Dataplex table and present only in the
     * Dataplex table entries.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DataplexTableSpec dataplex_table = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DataCatalog\V1\DataplexTableSpec $var
     * @return $this
     */
    public function setDataplexTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\DataplexTableSpec::class);
        $this->dataplex_table = $var;

        return $this;
    }

}

