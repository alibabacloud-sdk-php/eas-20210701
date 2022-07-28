<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $ecsInstanceCount;

    /**
     * @var string
     */
    public $ecsInstanceType;
    protected $_name = [
        'autoRenewal'      => 'AutoRenewal',
        'chargeType'       => 'ChargeType',
        'ecsInstanceCount' => 'EcsInstanceCount',
        'ecsInstanceType'  => 'EcsInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->ecsInstanceCount) {
            $res['EcsInstanceCount'] = $this->ecsInstanceCount;
        }
        if (null !== $this->ecsInstanceType) {
            $res['EcsInstanceType'] = $this->ecsInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['EcsInstanceCount'])) {
            $model->ecsInstanceCount = $map['EcsInstanceCount'];
        }
        if (isset($map['EcsInstanceType'])) {
            $model->ecsInstanceType = $map['EcsInstanceType'];
        }

        return $model;
    }
}
