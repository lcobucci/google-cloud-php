<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/company_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for updating a specified company.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.UpdateCompanyRequest</code>
 */
class UpdateCompanyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The company resource to replace the current resource in the
     * system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Company company = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $company = null;
    /**
     * Strongly recommended for the best service experience.
     * If
     * [update_mask][google.cloud.talent.v4beta1.UpdateCompanyRequest.update_mask]
     * is provided, only the specified fields in
     * [company][google.cloud.talent.v4beta1.UpdateCompanyRequest.company] are
     * updated. Otherwise all the fields are updated.
     * A field mask to specify the company fields to be updated. Only
     * top level fields of [Company][google.cloud.talent.v4beta1.Company] are
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\Talent\V4beta1\Company $company Required. The company resource to replace the current resource in the
     *                                                      system.
     *
     * @return \Google\Cloud\Talent\V4beta1\UpdateCompanyRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Talent\V4beta1\Company $company): self
    {
        return (new self())
            ->setCompany($company);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4beta1\Company $company
     *           Required. The company resource to replace the current resource in the
     *           system.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Strongly recommended for the best service experience.
     *           If
     *           [update_mask][google.cloud.talent.v4beta1.UpdateCompanyRequest.update_mask]
     *           is provided, only the specified fields in
     *           [company][google.cloud.talent.v4beta1.UpdateCompanyRequest.company] are
     *           updated. Otherwise all the fields are updated.
     *           A field mask to specify the company fields to be updated. Only
     *           top level fields of [Company][google.cloud.talent.v4beta1.Company] are
     *           supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\CompanyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The company resource to replace the current resource in the
     * system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Company company = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Talent\V4beta1\Company|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    public function hasCompany()
    {
        return isset($this->company);
    }

    public function clearCompany()
    {
        unset($this->company);
    }

    /**
     * Required. The company resource to replace the current resource in the
     * system.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Company company = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Talent\V4beta1\Company $var
     * @return $this
     */
    public function setCompany($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Company::class);
        $this->company = $var;

        return $this;
    }

    /**
     * Strongly recommended for the best service experience.
     * If
     * [update_mask][google.cloud.talent.v4beta1.UpdateCompanyRequest.update_mask]
     * is provided, only the specified fields in
     * [company][google.cloud.talent.v4beta1.UpdateCompanyRequest.company] are
     * updated. Otherwise all the fields are updated.
     * A field mask to specify the company fields to be updated. Only
     * top level fields of [Company][google.cloud.talent.v4beta1.Company] are
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Strongly recommended for the best service experience.
     * If
     * [update_mask][google.cloud.talent.v4beta1.UpdateCompanyRequest.update_mask]
     * is provided, only the specified fields in
     * [company][google.cloud.talent.v4beta1.UpdateCompanyRequest.company] are
     * updated. Otherwise all the fields are updated.
     * A field mask to specify the company fields to be updated. Only
     * top level fields of [Company][google.cloud.talent.v4beta1.Company] are
     * supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

