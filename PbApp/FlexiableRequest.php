<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: msg.proto

namespace PbApp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PbApp.FlexiableRequest</code>
 */
class FlexiableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * proto class to parser
     *
     * Generated from protobuf field <code>string ProtoClass = 1;</code>
     */
    private $ProtoClass = '';
    /**
     * bytes protobuf data
     *
     * Generated from protobuf field <code>bytes ProtoData = 2;</code>
     */
    private $ProtoData = '';

    public function __construct() {
        \GPBMetadata\Msg::initOnce();
        parent::__construct();
    }

    /**
     * proto class to parser
     *
     * Generated from protobuf field <code>string ProtoClass = 1;</code>
     * @return string
     */
    public function getProtoClass()
    {
        return $this->ProtoClass;
    }

    /**
     * proto class to parser
     *
     * Generated from protobuf field <code>string ProtoClass = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProtoClass($var)
    {
        GPBUtil::checkString($var, True);
        $this->ProtoClass = $var;

        return $this;
    }

    /**
     * bytes protobuf data
     *
     * Generated from protobuf field <code>bytes ProtoData = 2;</code>
     * @return string
     */
    public function getProtoData()
    {
        return $this->ProtoData;
    }

    /**
     * bytes protobuf data
     *
     * Generated from protobuf field <code>bytes ProtoData = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProtoData($var)
    {
        GPBUtil::checkString($var, False);
        $this->ProtoData = $var;

        return $this;
    }

}

