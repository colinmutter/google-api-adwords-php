<?php
/**
 * A collection of utility methods for working with Namespaces.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */
require_once 'Google/Api/Ads/Common/Util/NamespaceHelper.php';

/**
 * A collection of utility methods for working with Namespaces.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class Google_Api_Ads_AdWords_Util_NamespaceHelper
    extends Google_Api_Ads_Common_Util_NamespaceHelper {

  const DEFAULT_PROJECT = 'AdWords';

  /**
   * Construct a namespace helper.
   * @param Google_Api_Ads_Common_Lib_AdsUser the ads user.
   */
  public function __construct($user) {
    parent::__construct($user, self::DEFAULT_PROJECT);
  }
}
