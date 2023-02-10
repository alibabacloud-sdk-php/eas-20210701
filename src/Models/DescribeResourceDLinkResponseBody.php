<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceDLinkResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $auxVSwitchList;

    /**
     * @example 72.16.0.0/16
     *
     * @var string
     */
    public $destinationCIDRs;

    /**
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example sg-bp1j1z7297hcink9d****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vsw-8vbqn2at0kljjxxxx****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-uf66uio7md****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'auxVSwitchList'   => 'AuxVSwitchList',
        'destinationCIDRs' => 'DestinationCIDRs',
        'requestId'        => 'RequestId',
        'securityGroupId'  => 'SecurityGroupId',
        'vSwitchId'        => 'VSwitchId',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auxVSwitchList) {
            $res['AuxVSwitchList'] = $this->auxVSwitchList;
        }
        if (null !== $this->destinationCIDRs) {
            $res['DestinationCIDRs'] = $this->destinationCIDRs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceDLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuxVSwitchList'])) {
            if (!empty($map['AuxVSwitchList'])) {
                $model->auxVSwitchList = $map['AuxVSwitchList'];
            }
        }
        if (isset($map['DestinationCIDRs'])) {
            $model->destinationCIDRs = $map['DestinationCIDRs'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
