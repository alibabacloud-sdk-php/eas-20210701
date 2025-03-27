<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteAclPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aclPolicyListShrink;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aclPolicyListShrink' => 'AclPolicyList',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclPolicyListShrink) {
            $res['AclPolicyList'] = $this->aclPolicyListShrink;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclPolicyList'])) {
            $model->aclPolicyListShrink = $map['AclPolicyList'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
