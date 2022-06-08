<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PredictionService.Explain][google.cloud.aiplatform.v1.PredictionService.Explain].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplainRequest</code>
 */
class ExplainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Endpoint requested to serve the explanation.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $endpoint = '';
    /**
     * Required. The instances that are the input to the explanation call.
     * A DeployedModel may have an upper limit on the number of instances it
     * supports per request, and when it is exceeded the explanation call errors
     * in case of AutoML Models, or, in case of customer created Models, the
     * behaviour is as documented by that Model.
     * The schema of any single instance may be specified via Endpoint's
     * DeployedModels' [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instances;
    /**
     * The parameters that govern the prediction. The schema of the parameters may
     * be specified via Endpoint's DeployedModels' [Model's ][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [parameters_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.parameters_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value parameters = 4;</code>
     */
    protected $parameters = null;
    /**
     * If specified, overrides the
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec] of the DeployedModel.
     * Can be used for explaining prediction results with different
     * configurations, such as:
     *  - Explaining top-5 predictions results as opposed to top-1;
     *  - Increasing path count or step count of the attribution methods to reduce
     *    approximate errors;
     *  - Using different baselines for explaining the prediction results.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationSpecOverride explanation_spec_override = 5;</code>
     */
    protected $explanation_spec_override = null;
    /**
     * If specified, this ExplainRequest will be served by the chosen
     * DeployedModel, overriding [Endpoint.traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split].
     *
     * Generated from protobuf field <code>string deployed_model_id = 3;</code>
     */
    protected $deployed_model_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Required. The name of the Endpoint requested to serve the explanation.
     *           Format:
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type \Google\Protobuf\Value[]|\Google\Protobuf\Internal\RepeatedField $instances
     *           Required. The instances that are the input to the explanation call.
     *           A DeployedModel may have an upper limit on the number of instances it
     *           supports per request, and when it is exceeded the explanation call errors
     *           in case of AutoML Models, or, in case of customer created Models, the
     *           behaviour is as documented by that Model.
     *           The schema of any single instance may be specified via Endpoint's
     *           DeployedModels' [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     *           [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     *           [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     *     @type \Google\Protobuf\Value $parameters
     *           The parameters that govern the prediction. The schema of the parameters may
     *           be specified via Endpoint's DeployedModels' [Model's ][google.cloud.aiplatform.v1.DeployedModel.model]
     *           [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     *           [parameters_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.parameters_schema_uri].
     *     @type \Google\Cloud\AIPlatform\V1\ExplanationSpecOverride $explanation_spec_override
     *           If specified, overrides the
     *           [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec] of the DeployedModel.
     *           Can be used for explaining prediction results with different
     *           configurations, such as:
     *            - Explaining top-5 predictions results as opposed to top-1;
     *            - Increasing path count or step count of the attribution methods to reduce
     *              approximate errors;
     *            - Using different baselines for explaining the prediction results.
     *     @type string $deployed_model_id
     *           If specified, this ExplainRequest will be served by the chosen
     *           DeployedModel, overriding [Endpoint.traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Endpoint requested to serve the explanation.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Required. The name of the Endpoint requested to serve the explanation.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Required. The instances that are the input to the explanation call.
     * A DeployedModel may have an upper limit on the number of instances it
     * supports per request, and when it is exceeded the explanation call errors
     * in case of AutoML Models, or, in case of customer created Models, the
     * behaviour is as documented by that Model.
     * The schema of any single instance may be specified via Endpoint's
     * DeployedModels' [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Required. The instances that are the input to the explanation call.
     * A DeployedModel may have an upper limit on the number of instances it
     * supports per request, and when it is exceeded the explanation call errors
     * in case of AutoML Models, or, in case of customer created Models, the
     * behaviour is as documented by that Model.
     * The schema of any single instance may be specified via Endpoint's
     * DeployedModels' [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->instances = $arr;

        return $this;
    }

    /**
     * The parameters that govern the prediction. The schema of the parameters may
     * be specified via Endpoint's DeployedModels' [Model's ][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [parameters_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.parameters_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value parameters = 4;</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * The parameters that govern the prediction. The schema of the parameters may
     * be specified via Endpoint's DeployedModels' [Model's ][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [parameters_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.parameters_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value parameters = 4;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->parameters = $var;

        return $this;
    }

    /**
     * If specified, overrides the
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec] of the DeployedModel.
     * Can be used for explaining prediction results with different
     * configurations, such as:
     *  - Explaining top-5 predictions results as opposed to top-1;
     *  - Increasing path count or step count of the attribution methods to reduce
     *    approximate errors;
     *  - Using different baselines for explaining the prediction results.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationSpecOverride explanation_spec_override = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExplanationSpecOverride|null
     */
    public function getExplanationSpecOverride()
    {
        return $this->explanation_spec_override;
    }

    public function hasExplanationSpecOverride()
    {
        return isset($this->explanation_spec_override);
    }

    public function clearExplanationSpecOverride()
    {
        unset($this->explanation_spec_override);
    }

    /**
     * If specified, overrides the
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec] of the DeployedModel.
     * Can be used for explaining prediction results with different
     * configurations, such as:
     *  - Explaining top-5 predictions results as opposed to top-1;
     *  - Increasing path count or step count of the attribution methods to reduce
     *    approximate errors;
     *  - Using different baselines for explaining the prediction results.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationSpecOverride explanation_spec_override = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExplanationSpecOverride $var
     * @return $this
     */
    public function setExplanationSpecOverride($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExplanationSpecOverride::class);
        $this->explanation_spec_override = $var;

        return $this;
    }

    /**
     * If specified, this ExplainRequest will be served by the chosen
     * DeployedModel, overriding [Endpoint.traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split].
     *
     * Generated from protobuf field <code>string deployed_model_id = 3;</code>
     * @return string
     */
    public function getDeployedModelId()
    {
        return $this->deployed_model_id;
    }

    /**
     * If specified, this ExplainRequest will be served by the chosen
     * DeployedModel, overriding [Endpoint.traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split].
     *
     * Generated from protobuf field <code>string deployed_model_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeployedModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_model_id = $var;

        return $this;
    }

}

