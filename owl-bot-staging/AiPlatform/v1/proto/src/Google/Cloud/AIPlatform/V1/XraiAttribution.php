<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An explanation method that redistributes Integrated Gradients
 * attributions to segmented regions, taking advantage of the model's fully
 * differentiable structure. Refer to this paper for more details:
 * https://arxiv.org/abs/1906.02825
 * Supported only by image Models.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.XraiAttribution</code>
 */
class XraiAttribution extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The number of steps for approximating the path integral.
     * A good value to start is 50 and gradually increase until the
     * sum to diff property is met within the desired error range.
     * Valid range of its value is [1, 100], inclusively.
     *
     * Generated from protobuf field <code>int32 step_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $step_count = 0;
    /**
     * Config for SmoothGrad approximation of gradients.
     * When enabled, the gradients are approximated by averaging the gradients
     * from noisy samples in the vicinity of the inputs. Adding
     * noise can help improve the computed gradients. Refer to this paper for more
     * details: https://arxiv.org/pdf/1706.03825.pdf
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SmoothGradConfig smooth_grad_config = 2;</code>
     */
    protected $smooth_grad_config = null;
    /**
     * Config for XRAI with blur baseline.
     * When enabled, a linear path from the maximally blurred image to the input
     * image is created. Using a blurred baseline instead of zero (black image) is
     * motivated by the BlurIG approach explained here:
     * https://arxiv.org/abs/2004.03383
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BlurBaselineConfig blur_baseline_config = 3;</code>
     */
    protected $blur_baseline_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $step_count
     *           Required. The number of steps for approximating the path integral.
     *           A good value to start is 50 and gradually increase until the
     *           sum to diff property is met within the desired error range.
     *           Valid range of its value is [1, 100], inclusively.
     *     @type \Google\Cloud\AIPlatform\V1\SmoothGradConfig $smooth_grad_config
     *           Config for SmoothGrad approximation of gradients.
     *           When enabled, the gradients are approximated by averaging the gradients
     *           from noisy samples in the vicinity of the inputs. Adding
     *           noise can help improve the computed gradients. Refer to this paper for more
     *           details: https://arxiv.org/pdf/1706.03825.pdf
     *     @type \Google\Cloud\AIPlatform\V1\BlurBaselineConfig $blur_baseline_config
     *           Config for XRAI with blur baseline.
     *           When enabled, a linear path from the maximally blurred image to the input
     *           image is created. Using a blurred baseline instead of zero (black image) is
     *           motivated by the BlurIG approach explained here:
     *           https://arxiv.org/abs/2004.03383
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The number of steps for approximating the path integral.
     * A good value to start is 50 and gradually increase until the
     * sum to diff property is met within the desired error range.
     * Valid range of its value is [1, 100], inclusively.
     *
     * Generated from protobuf field <code>int32 step_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getStepCount()
    {
        return $this->step_count;
    }

    /**
     * Required. The number of steps for approximating the path integral.
     * A good value to start is 50 and gradually increase until the
     * sum to diff property is met within the desired error range.
     * Valid range of its value is [1, 100], inclusively.
     *
     * Generated from protobuf field <code>int32 step_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setStepCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->step_count = $var;

        return $this;
    }

    /**
     * Config for SmoothGrad approximation of gradients.
     * When enabled, the gradients are approximated by averaging the gradients
     * from noisy samples in the vicinity of the inputs. Adding
     * noise can help improve the computed gradients. Refer to this paper for more
     * details: https://arxiv.org/pdf/1706.03825.pdf
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SmoothGradConfig smooth_grad_config = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\SmoothGradConfig|null
     */
    public function getSmoothGradConfig()
    {
        return $this->smooth_grad_config;
    }

    public function hasSmoothGradConfig()
    {
        return isset($this->smooth_grad_config);
    }

    public function clearSmoothGradConfig()
    {
        unset($this->smooth_grad_config);
    }

    /**
     * Config for SmoothGrad approximation of gradients.
     * When enabled, the gradients are approximated by averaging the gradients
     * from noisy samples in the vicinity of the inputs. Adding
     * noise can help improve the computed gradients. Refer to this paper for more
     * details: https://arxiv.org/pdf/1706.03825.pdf
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SmoothGradConfig smooth_grad_config = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\SmoothGradConfig $var
     * @return $this
     */
    public function setSmoothGradConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SmoothGradConfig::class);
        $this->smooth_grad_config = $var;

        return $this;
    }

    /**
     * Config for XRAI with blur baseline.
     * When enabled, a linear path from the maximally blurred image to the input
     * image is created. Using a blurred baseline instead of zero (black image) is
     * motivated by the BlurIG approach explained here:
     * https://arxiv.org/abs/2004.03383
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BlurBaselineConfig blur_baseline_config = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\BlurBaselineConfig|null
     */
    public function getBlurBaselineConfig()
    {
        return $this->blur_baseline_config;
    }

    public function hasBlurBaselineConfig()
    {
        return isset($this->blur_baseline_config);
    }

    public function clearBlurBaselineConfig()
    {
        unset($this->blur_baseline_config);
    }

    /**
     * Config for XRAI with blur baseline.
     * When enabled, a linear path from the maximally blurred image to the input
     * image is created. Using a blurred baseline instead of zero (black image) is
     * motivated by the BlurIG approach explained here:
     * https://arxiv.org/abs/2004.03383
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BlurBaselineConfig blur_baseline_config = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\BlurBaselineConfig $var
     * @return $this
     */
    public function setBlurBaselineConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\BlurBaselineConfig::class);
        $this->blur_baseline_config = $var;

        return $this;
    }

}

