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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBinlogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method integer getOffset() 获取偏移量，最小值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，最小值为0。
 * @method integer getLimit() 获取分页大小，默认值为20，最小值为1，最大值为100。
 * @method void setLimit(integer $Limit) 设置分页大小，默认值为20，最小值为1，最大值为100。
 * @method string getMinStartTime() 获取binlog开始时间，筛选大于等于此值，时间格式：2016-03-17 02:10:37
 * @method void setMinStartTime(string $MinStartTime) 设置binlog开始时间，筛选大于等于此值，时间格式：2016-03-17 02:10:37
 * @method string getMaxStartTime() 获取binlog开始时间，筛选小于等于此值，时间格式：2016-03-17 02:10:37
 * @method void setMaxStartTime(string $MaxStartTime) 设置binlog开始时间，筛选小于等于此值，时间格式：2016-03-17 02:10:37
 */
class DescribeBinlogsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var integer 偏移量，最小值为0。
     */
    public $Offset;

    /**
     * @var integer 分页大小，默认值为20，最小值为1，最大值为100。
     */
    public $Limit;

    /**
     * @var string binlog开始时间，筛选大于等于此值，时间格式：2016-03-17 02:10:37
     */
    public $MinStartTime;

    /**
     * @var string binlog开始时间，筛选小于等于此值，时间格式：2016-03-17 02:10:37
     */
    public $MaxStartTime;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     * @param integer $Offset 偏移量，最小值为0。
     * @param integer $Limit 分页大小，默认值为20，最小值为1，最大值为100。
     * @param string $MinStartTime binlog开始时间，筛选大于等于此值，时间格式：2016-03-17 02:10:37
     * @param string $MaxStartTime binlog开始时间，筛选小于等于此值，时间格式：2016-03-17 02:10:37
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MinStartTime",$param) and $param["MinStartTime"] !== null) {
            $this->MinStartTime = $param["MinStartTime"];
        }

        if (array_key_exists("MaxStartTime",$param) and $param["MaxStartTime"] !== null) {
            $this->MaxStartTime = $param["MaxStartTime"];
        }
    }
}
