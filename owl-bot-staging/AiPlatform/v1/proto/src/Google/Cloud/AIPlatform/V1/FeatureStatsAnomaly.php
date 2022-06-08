<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_monitoring_stats.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stats and Anomaly generated at specific timestamp for specific Feature.
 * The start_time and end_time are used to define the time range of the dataset
 * that current stats belongs to, e.g. prediction traffic is bucketed into
 * prediction datasets by time window. If the Dataset is not defined by time
 * window, start_time = end_time. Timestamp of the stats and anomalies always
 * refers to end_time. Raw stats and anomalies are stored in stats_uri or
 * anomaly_uri in the tensorflow defined protos. Field data_stats contains
 * almost identical information with the raw stats in Vertex AI
 * defined proto, for UI to display.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureStatsAnomaly</code>
 */
class FeatureStatsAnomaly extends \Google\Protobuf\Internal\Message
{
    /**
     * Feature importance score, only populated when cross-feature monitoring is
     * enabled. For now only used to represent feature attribution score within
     * range [0, 1] for
     * [ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_SKEW][google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_SKEW] and
     * [ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_DRIFT][google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_DRIFT].
     *
     * Generated from protobuf field <code>double score = 1;</code>
     */
    protected $score = 0.0;
    /**
     * Path of the stats file for current feature values in Cloud Storage bucket.
     * Format: gs://<bucket_name>/<object_name>/stats.
     * Example: gs://monitoring_bucket/feature_name/stats.
     * Stats are stored as binary format with Protobuf message
     * [tensorflow.metadata.v0.FeatureNameStatistics](https://github.com/tensorflow/metadata/blob/master/tensorflow_metadata/proto/v0/statistics.proto).
     *
     * Generated from protobuf field <code>string stats_uri = 3;</code>
     */
    protected $stats_uri = '';
    /**
     * Path of the anomaly file for current feature values in Cloud Storage
     * bucket.
     * Format: gs://<bucket_name>/<object_name>/anomalies.
     * Example: gs://monitoring_bucket/feature_name/anomalies.
     * Stats are stored as binary format with Protobuf message
     * Anoamlies are stored as binary format with Protobuf message
     * [tensorflow.metadata.v0.AnomalyInfo]
     * (https://github.com/tensorflow/metadata/blob/master/tensorflow_metadata/proto/v0/anomalies.proto).
     *
     * Generated from protobuf field <code>string anomaly_uri = 4;</code>
     */
    protected $anomaly_uri = '';
    /**
     * Deviation from the current stats to baseline stats.
     *   1. For categorical feature, the distribution distance is calculated by
     *      L-inifinity norm.
     *   2. For numerical feature, the distribution distance is calculated by
     *      Jensen–Shannon divergence.
     *
     * Generated from protobuf field <code>double distribution_deviation = 5;</code>
     */
    protected $distribution_deviation = 0.0;
    /**
     * This is the threshold used when detecting anomalies.
     * The threshold can be changed by user, so this one might be different from
     * [ThresholdConfig.value][google.cloud.aiplatform.v1.ThresholdConfig.value].
     *
     * Generated from protobuf field <code>double anomaly_detection_threshold = 9;</code>
     */
    protected $anomaly_detection_threshold = 0.0;
    /**
     * The start timestamp of window where stats were generated.
     * For objectives where time window doesn't make sense (e.g. Featurestore
     * Snapshot Monitoring), start_time is only used to indicate the monitoring
     * intervals, so it always equals to (end_time - monitoring_interval).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     */
    protected $start_time = null;
    /**
     * The end timestamp of window where stats were generated.
     * For objectives where time window doesn't make sense (e.g. Featurestore
     * Snapshot Monitoring), end_time indicates the timestamp of the data used to
     * generate stats (e.g. timestamp we take snapshots for feature values).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8;</code>
     */
    protected $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *           Feature importance score, only populated when cross-feature monitoring is
     *           enabled. For now only used to represent feature attribution score within
     *           range [0, 1] for
     *           [ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_SKEW][google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_SKEW] and
     *           [ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_DRIFT][google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_DRIFT].
     *     @type string $stats_uri
     *           Path of the stats file for current feature values in Cloud Storage bucket.
     *           Format: gs://<bucket_name>/<object_name>/stats.
     *           Example: gs://monitoring_bucket/feature_name/stats.
     *           Stats are stored as binary format with Protobuf message
     *           [tensorflow.metadata.v0.FeatureNameStatistics](https://github.com/tensorflow/metadata/blob/master/tensorflow_metadata/proto/v0/statistics.proto).
     *     @type string $anomaly_uri
     *           Path of the anomaly file for current feature values in Cloud Storage
     *           bucket.
     *           Format: gs://<bucket_name>/<object_name>/anomalies.
     *           Example: gs://monitoring_bucket/feature_name/anomalies.
     *           Stats are stored as binary format with Protobuf message
     *           Anoamlies are stored as binary format with Protobuf message
     *           [tensorflow.metadata.v0.AnomalyInfo]
     *           (https://github.com/tensorflow/metadata/blob/master/tensorflow_metadata/proto/v0/anomalies.proto).
     *     @type float $distribution_deviation
     *           Deviation from the current stats to baseline stats.
     *             1. For categorical feature, the distribution distance is calculated by
     *                L-inifinity norm.
     *             2. For numerical feature, the distribution distance is calculated by
     *                Jensen–Shannon divergence.
     *     @type float $anomaly_detection_threshold
     *           This is the threshold used when detecting anomalies.
     *           The threshold can be changed by user, so this one might be different from
     *           [ThresholdConfig.value][google.cloud.aiplatform.v1.ThresholdConfig.value].
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The start timestamp of window where stats were generated.
     *           For objectives where time window doesn't make sense (e.g. Featurestore
     *           Snapshot Monitoring), start_time is only used to indicate the monitoring
     *           intervals, so it always equals to (end_time - monitoring_interval).
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The end timestamp of window where stats were generated.
     *           For objectives where time window doesn't make sense (e.g. Featurestore
     *           Snapshot Monitoring), end_time indicates the timestamp of the data used to
     *           generate stats (e.g. timestamp we take snapshots for feature values).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureMonitoringStats::initOnce();
        parent::__construct($data);
    }

    /**
     * Feature importance score, only populated when cross-feature monitoring is
     * enabled. For now only used to represent feature attribution score within
     * range [0, 1] for
     * [ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_SKEW][google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_SKEW] and
     * [ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_DRIFT][google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_DRIFT].
     *
     * Generated from protobuf field <code>double score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Feature importance score, only populated when cross-feature monitoring is
     * enabled. For now only used to represent feature attribution score within
     * range [0, 1] for
     * [ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_SKEW][google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_SKEW] and
     * [ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_DRIFT][google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType.FEATURE_ATTRIBUTION_DRIFT].
     *
     * Generated from protobuf field <code>double score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Path of the stats file for current feature values in Cloud Storage bucket.
     * Format: gs://<bucket_name>/<object_name>/stats.
     * Example: gs://monitoring_bucket/feature_name/stats.
     * Stats are stored as binary format with Protobuf message
     * [tensorflow.metadata.v0.FeatureNameStatistics](https://github.com/tensorflow/metadata/blob/master/tensorflow_metadata/proto/v0/statistics.proto).
     *
     * Generated from protobuf field <code>string stats_uri = 3;</code>
     * @return string
     */
    public function getStatsUri()
    {
        return $this->stats_uri;
    }

    /**
     * Path of the stats file for current feature values in Cloud Storage bucket.
     * Format: gs://<bucket_name>/<object_name>/stats.
     * Example: gs://monitoring_bucket/feature_name/stats.
     * Stats are stored as binary format with Protobuf message
     * [tensorflow.metadata.v0.FeatureNameStatistics](https://github.com/tensorflow/metadata/blob/master/tensorflow_metadata/proto/v0/statistics.proto).
     *
     * Generated from protobuf field <code>string stats_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStatsUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->stats_uri = $var;

        return $this;
    }

    /**
     * Path of the anomaly file for current feature values in Cloud Storage
     * bucket.
     * Format: gs://<bucket_name>/<object_name>/anomalies.
     * Example: gs://monitoring_bucket/feature_name/anomalies.
     * Stats are stored as binary format with Protobuf message
     * Anoamlies are stored as binary format with Protobuf message
     * [tensorflow.metadata.v0.AnomalyInfo]
     * (https://github.com/tensorflow/metadata/blob/master/tensorflow_metadata/proto/v0/anomalies.proto).
     *
     * Generated from protobuf field <code>string anomaly_uri = 4;</code>
     * @return string
     */
    public function getAnomalyUri()
    {
        return $this->anomaly_uri;
    }

    /**
     * Path of the anomaly file for current feature values in Cloud Storage
     * bucket.
     * Format: gs://<bucket_name>/<object_name>/anomalies.
     * Example: gs://monitoring_bucket/feature_name/anomalies.
     * Stats are stored as binary format with Protobuf message
     * Anoamlies are stored as binary format with Protobuf message
     * [tensorflow.metadata.v0.AnomalyInfo]
     * (https://github.com/tensorflow/metadata/blob/master/tensorflow_metadata/proto/v0/anomalies.proto).
     *
     * Generated from protobuf field <code>string anomaly_uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAnomalyUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->anomaly_uri = $var;

        return $this;
    }

    /**
     * Deviation from the current stats to baseline stats.
     *   1. For categorical feature, the distribution distance is calculated by
     *      L-inifinity norm.
     *   2. For numerical feature, the distribution distance is calculated by
     *      Jensen–Shannon divergence.
     *
     * Generated from protobuf field <code>double distribution_deviation = 5;</code>
     * @return float
     */
    public function getDistributionDeviation()
    {
        return $this->distribution_deviation;
    }

    /**
     * Deviation from the current stats to baseline stats.
     *   1. For categorical feature, the distribution distance is calculated by
     *      L-inifinity norm.
     *   2. For numerical feature, the distribution distance is calculated by
     *      Jensen–Shannon divergence.
     *
     * Generated from protobuf field <code>double distribution_deviation = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setDistributionDeviation($var)
    {
        GPBUtil::checkDouble($var);
        $this->distribution_deviation = $var;

        return $this;
    }

    /**
     * This is the threshold used when detecting anomalies.
     * The threshold can be changed by user, so this one might be different from
     * [ThresholdConfig.value][google.cloud.aiplatform.v1.ThresholdConfig.value].
     *
     * Generated from protobuf field <code>double anomaly_detection_threshold = 9;</code>
     * @return float
     */
    public function getAnomalyDetectionThreshold()
    {
        return $this->anomaly_detection_threshold;
    }

    /**
     * This is the threshold used when detecting anomalies.
     * The threshold can be changed by user, so this one might be different from
     * [ThresholdConfig.value][google.cloud.aiplatform.v1.ThresholdConfig.value].
     *
     * Generated from protobuf field <code>double anomaly_detection_threshold = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setAnomalyDetectionThreshold($var)
    {
        GPBUtil::checkDouble($var);
        $this->anomaly_detection_threshold = $var;

        return $this;
    }

    /**
     * The start timestamp of window where stats were generated.
     * For objectives where time window doesn't make sense (e.g. Featurestore
     * Snapshot Monitoring), start_time is only used to indicate the monitoring
     * intervals, so it always equals to (end_time - monitoring_interval).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The start timestamp of window where stats were generated.
     * For objectives where time window doesn't make sense (e.g. Featurestore
     * Snapshot Monitoring), start_time is only used to indicate the monitoring
     * intervals, so it always equals to (end_time - monitoring_interval).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The end timestamp of window where stats were generated.
     * For objectives where time window doesn't make sense (e.g. Featurestore
     * Snapshot Monitoring), end_time indicates the timestamp of the data used to
     * generate stats (e.g. timestamp we take snapshots for feature values).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The end timestamp of window where stats were generated.
     * For objectives where time window doesn't make sense (e.g. Featurestore
     * Snapshot Monitoring), end_time indicates the timestamp of the data used to
     * generate stats (e.g. timestamp we take snapshots for feature values).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

