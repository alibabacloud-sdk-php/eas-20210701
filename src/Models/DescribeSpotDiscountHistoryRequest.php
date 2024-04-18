<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpotDiscountHistoryRequest extends Model
{
    /**
     * @example ecs.c6.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example false
     *
     * @var bool
     */
    public $isProtect;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'isProtect'    => 'IsProtect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isProtect) {
            $res['IsProtect'] = $this->isProtect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpotDiscountHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsProtect'])) {
            $model->isProtect = $map['IsProtect'];
        }

        return $model;
    }
}
