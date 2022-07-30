<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费资源
 *
 * @method string getId() 获取资源 ID
 * @method void setId(string $Id) 设置资源 ID
 * @method integer getPayMode() 获取付费模式
0 为后付费
1 为预付费
 * @method void setPayMode(integer $PayMode) 设置付费模式
0 为后付费
1 为预付费
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getEnableTime() 获取生效时间
 * @method void setEnableTime(string $EnableTime) 设置生效时间
 * @method string getExpireTime() 获取失效时间
 * @method void setExpireTime(string $ExpireTime) 设置失效时间
 * @method string getStatus() 获取套餐状态
 * @method void setStatus(string $Status) 设置套餐状态
 * @method array getSv() 获取询价参数
 * @method void setSv(array $Sv) 设置询价参数
 * @method integer getAutoRenewFlag() 获取是否自动续费
0 表示默认状态
1 表示自动续费
2 表示不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否自动续费
0 表示默认状态
1 表示自动续费
2 表示不自动续费
 * @method string getPlanId() 获取套餐关联资源ID
 * @method void setPlanId(string $PlanId) 设置套餐关联资源ID
 */
class Resource extends AbstractModel
{
    /**
     * @var string 资源 ID
     */
    public $Id;

    /**
     * @var integer 付费模式
0 为后付费
1 为预付费
     */
    public $PayMode;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 生效时间
     */
    public $EnableTime;

    /**
     * @var string 失效时间
     */
    public $ExpireTime;

    /**
     * @var string 套餐状态
     */
    public $Status;

    /**
     * @var array 询价参数
     */
    public $Sv;

    /**
     * @var integer 是否自动续费
0 表示默认状态
1 表示自动续费
2 表示不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 套餐关联资源ID
     */
    public $PlanId;

    /**
     * @param string $Id 资源 ID
     * @param integer $PayMode 付费模式
0 为后付费
1 为预付费
     * @param string $CreateTime 创建时间
     * @param string $EnableTime 生效时间
     * @param string $ExpireTime 失效时间
     * @param string $Status 套餐状态
     * @param array $Sv 询价参数
     * @param integer $AutoRenewFlag 是否自动续费
0 表示默认状态
1 表示自动续费
2 表示不自动续费
     * @param string $PlanId 套餐关联资源ID
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EnableTime",$param) and $param["EnableTime"] !== null) {
            $this->EnableTime = $param["EnableTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Sv",$param) and $param["Sv"] !== null) {
            $this->Sv = [];
            foreach ($param["Sv"] as $key => $value){
                $obj = new Sv();
                $obj->deserialize($value);
                array_push($this->Sv, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }
    }
}
