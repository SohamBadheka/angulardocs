<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Storage_BucketLifecycleRule extends Google_Model
{
  protected $actionType = 'Google_Service_Storage_BucketLifecycleRuleAction';
  protected $actionDataType = '';
  protected $conditionType = 'Google_Service_Storage_BucketLifecycleRuleCondition';
  protected $conditionDataType = '';

  public function setAction(Google_Service_Storage_BucketLifecycleRuleAction $action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function setCondition(Google_Service_Storage_BucketLifecycleRuleCondition $condition)
  {
    $this->condition = $condition;
  }
  public function getCondition()
  {
    return $this->condition;
  }
}
