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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiskConfigs请求参数结构体
 *
 * @method array getFilters() 获取过滤器列表。
<li>zone</li>按照【可用区】进行过滤。
类型：String
必选：否
 * @method void setFilters(array $Filters) 设置过滤器列表。
<li>zone</li>按照【可用区】进行过滤。
类型：String
必选：否
 */
class DescribeDiskConfigsRequest extends AbstractModel
{
    /**
     * @var array 过滤器列表。
<li>zone</li>按照【可用区】进行过滤。
类型：String
必选：否
     */
    public $Filters;

    /**
     * @param array $Filters 过滤器列表。
<li>zone</li>按照【可用区】进行过滤。
类型：String
必选：否
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
