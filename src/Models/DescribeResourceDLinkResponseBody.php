<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceDLinkResponseBody extends Model
{
    /**
     * @description 已打通直连的副VSwitch ID
     *
     * @var string[]
     */
    public $auxVSwitchList;

    /**
     * @description 要打通的客户端的网段信息，会将该网段加入到服务端的回包路由中，与VSwitchIdList可二选一
     *
     * @var string
     */
    public $destinationCIDRs;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 已打通直连的安全组
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 已打通直连的主VSwitch ID
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description 已打通直接的Vpc ID
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
