<?php
/**
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
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao <api.vtsao@gmail.com>
 */

/**
 * A collection of utility methods for reading API property files.
 */
class ApiPropertiesUtils {

  /**
   * Parses the specified API properties file.
   * @param string $propsFilePath the path to the API properties file to parse
   * @return array the parsed properties
   */
  public static function ParseApiPropertiesFile($propsFilePath) {
    return ApiPropertiesUtils::ParseApiPropertiesString(file_get_contents(
        $propsFilePath));
  }

  /**
   * Parses the specified API properties string.
   * @param string $propsFileStr the API properties to parse as a string
   * @return array the parsed properties
   */
  public static function ParseApiPropertiesString($propsFileStr) {
    return parse_ini_string(preg_replace("/#.*\n/", "", $propsFileStr));
  }
}

