<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer_sk_ad_network_conversion_value_schema.proto

namespace Google\Ads\GoogleAds\V14\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a range for event counter values.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.Event.EventOccurrenceRange</code>
 */
class EventOccurrenceRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. For event counter ranges, the minimum of the defined
     * range. A value of 0 will be treated as unset.
     *
     * Generated from protobuf field <code>int64 min_event_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $min_event_count = 0;
    /**
     * Output only. For event counter ranges, the maximum of the defined
     * range. A value of 0 will be treated as unset.
     *
     * Generated from protobuf field <code>int64 max_event_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $max_event_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $min_event_count
     *           Output only. For event counter ranges, the minimum of the defined
     *           range. A value of 0 will be treated as unset.
     *     @type int|string $max_event_count
     *           Output only. For event counter ranges, the maximum of the defined
     *           range. A value of 0 will be treated as unset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\CustomerSkAdNetworkConversionValueSchema::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. For event counter ranges, the minimum of the defined
     * range. A value of 0 will be treated as unset.
     *
     * Generated from protobuf field <code>int64 min_event_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getMinEventCount()
    {
        return $this->min_event_count;
    }

    /**
     * Output only. For event counter ranges, the minimum of the defined
     * range. A value of 0 will be treated as unset.
     *
     * Generated from protobuf field <code>int64 min_event_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_event_count = $var;

        return $this;
    }

    /**
     * Output only. For event counter ranges, the maximum of the defined
     * range. A value of 0 will be treated as unset.
     *
     * Generated from protobuf field <code>int64 max_event_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getMaxEventCount()
    {
        return $this->max_event_count;
    }

    /**
     * Output only. For event counter ranges, the maximum of the defined
     * range. A value of 0 will be treated as unset.
     *
     * Generated from protobuf field <code>int64 max_event_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_event_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EventOccurrenceRange::class, \Google\Ads\GoogleAds\V14\Resources\CustomerSkAdNetworkConversionValueSchema_SkAdNetworkConversionValueSchema_Event_EventOccurrenceRange::class);

