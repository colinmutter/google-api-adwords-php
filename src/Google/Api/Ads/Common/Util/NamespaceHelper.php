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
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 * @author     Vincent Tsao
 */

/**
 * A collection of utility methods for working with Namespaces.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class Google_Api_Ads_Common_Util_NamespaceHelper {
  const NAMESPACE_FORMAT = 'Google_Api_Ads_%s_%s_%s';
  const DEFAULT_PROJECT = 'Common';
  const LIB_NAME = 'Lib';
  const UTIL_NAME = 'Util';

  private $project;
  private $user;
  private $version;

  /**
   * Construct a namespace helper.
   * @param Google_Api_Ads_Common_Lib_AdsUser the ads user.
   * @param string|null $project the Ads project.
   */
  public function __construct(Google_Api_Ads_Common_Lib_AdsUser $user,
      $project = null) {
    $this->project = empty($project) ? $project : self::DEFAULT_PROJECT;
    $this->user = $user;
  }

  /**
   * Set the version to use for versioned classes.
   * @param string $project the version to use.
   */
  public function setVersion($version) {
    $this->version = $version;
  }

  /**
   * Get the name of a utility class.
   * @param string $name the short name for the class.
   */
  public function getUtilClass($name) {
    return sprintf(self::NAMESPACE_FORMAT, $this->project, self::UTIL_NAME,
        $name);
  }

  /**
   * Get the name of a library class.
   * @param string $name the short name for the class.
   */
  public function getLibClass($name) {
    return sprintf(self::NAMESPACE_FORMAT, $this->project, self::LIB_NAME,
        $name);
  }

  /**
   * Get the name of a service version class.
   * @param string $name the short name for the class.
   */
  public function getVersionedClass($name) {
    return sprintf(self::NAMESPACE_FORMAT, $this->project, $this->getVersion(),
        $name);
  }

  /**
   * Get an instance of a class, with arguments.
   * @param string $name the full name for the class.
   * @param array $args the array of args to pass to the constructor.
   */
  public function instantiate($name, $args = array()) {
    $reflectionClass = new ReflectionClass($name);
    return $reflectionClass->newInstanceArgs($args);
  }

  /**
   * Get the current service version.
   */
  private function getVersion() {
    if ($this->version) {
      return $this->version;
    }
    return $this->user->GetDefaultVersion();
  }
}

