<?php
/**
 * Contains all client objects for the TargetingIdeaService
 * service.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 * @package    Google_Api_Ads_AdWords_v201309
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

/** Required classes. **/
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ApiError";

    /**
     * @access public
     * @var string
     */
    public $fieldPath;

    /**
     * @access public
     * @var string
     */
    public $trigger;

    /**
     * @access public
     * @var string
     */
    public $errorString;

    /**
     * @access public
     * @var string
     */
    public $ApiErrorType;
    private $_parameterMap = array(
      "ApiError.Type" => "ApiErrorType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ApplicationException", false)) {
  /**
   * Base class for exceptions.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ApplicationException";

    /**
     * @access public
     * @var string
     */
    public $message;

    /**
     * @access public
     * @var string
     */
    public $ApplicationExceptionType;
    private $_parameterMap = array(
      "ApplicationException.Type" => "ApplicationExceptionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($message = null, $ApplicationExceptionType = null) {
      $this->message = $message;
      $this->ApplicationExceptionType = $ApplicationExceptionType;
    }

  }
}

if (!class_exists("AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthenticationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthenticationError";

    /**
     * @access public
     * @var tnsAuthenticationErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("AuthorizationError", false)) {
  /**
   * Errors encountered when trying to authorize a user.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthorizationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthorizationError";

    /**
     * @access public
     * @var tnsAuthorizationErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("BidLandscapeLandscapePoint", false)) {
  /**
   * A set of estimates for a criterion's performance for a specific bid
   * amount.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BidLandscapeLandscapePoint {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BidLandscape.LandscapePoint";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var integer
     */
    public $clicks;

    /**
     * @access public
     * @var Money
     */
    public $cost;

    /**
     * @access public
     * @var Money
     */
    public $marginalCpc;

    /**
     * @access public
     * @var integer
     */
    public $impressions;

    /**
     * @access public
     * @var integer
     */
    public $promotedImpressions;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($bid = null, $clicks = null, $cost = null, $marginalCpc = null, $impressions = null, $promotedImpressions = null) {
      $this->bid = $bid;
      $this->clicks = $clicks;
      $this->cost = $cost;
      $this->marginalCpc = $marginalCpc;
      $this->impressions = $impressions;
      $this->promotedImpressions = $promotedImpressions;
    }

  }
}

if (!class_exists("BiddingError", false)) {
  /**
   * Represents bidding errors.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BiddingError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BiddingError";

    /**
     * @access public
     * @var tnsBiddingErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("BudgetError", false)) {
  /**
   * A list of all the error codes being used by the common budget domain package.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BudgetError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BudgetError";

    /**
     * @access public
     * @var tnsBudgetErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ClientTermsError", false)) {
  /**
   * Error due to user not accepting the AdWords terms of service.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ClientTermsError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ClientTermsError";

    /**
     * @access public
     * @var tnsClientTermsErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("CollectionSizeError", false)) {
  /**
   * Errors associated with the size of the given collection being
   * out of bounds.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CollectionSizeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CollectionSizeError";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ComparableValue", false)) {
  /**
   * Comparable types for constructing ranges with.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ComparableValue";

    /**
     * @access public
     * @var string
     */
    public $ComparableValueType;
    private $_parameterMap = array(
      "ComparableValue.Type" => "ComparableValueType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ComparableValueType = null) {
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("Criterion", false)) {
  /**
   * Represents a criterion (such as a keyword, placement, or vertical).
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Criterion";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var tnsCriterionType
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $CriterionType;
    private $_parameterMap = array(
      "Criterion.Type" => "CriterionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $type = null, $CriterionType = null) {
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("CriterionError", false)) {
  /**
   * Error class used for reporting criteria related errors.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionError";

    /**
     * @access public
     * @var tnsCriterionErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("CriterionParameter", false)) {
  /**
   * Base type of criterion parameters.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionParameter";

    /**
     * @access public
     * @var string
     */
    public $CriterionParameterType;
    private $_parameterMap = array(
      "CriterionParameter.Type" => "CriterionParameterType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($CriterionParameterType = null) {
      $this->CriterionParameterType = $CriterionParameterType;
    }

  }
}

if (!class_exists("DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DatabaseError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DatabaseError";

    /**
     * @access public
     * @var tnsDatabaseErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DateError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DateError";

    /**
     * @access public
     * @var tnsDateErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("DistinctError", false)) {
  /**
   * Errors related to distinct ids or content.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DistinctError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DistinctError";

    /**
     * @access public
     * @var tnsDistinctErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("EntityCountLimitExceeded", false)) {
  /**
   * Signals that an entity count limit was exceeded for some level.
   * For example, too many criteria for a campaign.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class EntityCountLimitExceeded extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "EntityCountLimitExceeded";

    /**
     * @access public
     * @var tnsEntityCountLimitExceededReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $enclosingId;

    /**
     * @access public
     * @var integer
     */
    public $limit;

    /**
     * @access public
     * @var string
     */
    public $accountLimitType;

    /**
     * @access public
     * @var integer
     */
    public $existingCount;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->enclosingId = $enclosingId;
      $this->limit = $limit;
      $this->accountLimitType = $accountLimitType;
      $this->existingCount = $existingCount;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("EntityNotFound", false)) {
  /**
   * An id did not correspond to an entity, or it referred to an entity which does not belong to the
   * customer.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class EntityNotFound extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "EntityNotFound";

    /**
     * @access public
     * @var tnsEntityNotFoundReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("IdError", false)) {
  /**
   * Errors associated with the ids.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "IdError";

    /**
     * @access public
     * @var tnsIdErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("InternalApiError", false)) {
  /**
   * Indicates that a server-side error has occured. {@code InternalApiError}s
   * are generally not the result of an invalid request or message sent by the
   * client.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InternalApiError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "InternalApiError";

    /**
     * @access public
     * @var tnsInternalApiErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Keyword", false)) {
  /**
   * Represents a keyword.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Keyword extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Keyword";

    /**
     * @access public
     * @var string
     */
    public $text;

    /**
     * @access public
     * @var tnsKeywordMatchType
     */
    public $matchType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($text = null, $matchType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->text = $text;
      $this->matchType = $matchType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Language", false)) {
  /**
   * Represents a Language criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Language extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Language";

    /**
     * @access public
     * @var string
     */
    public $code;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($code = null, $name = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->code = $code;
      $this->name = $name;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Location", false)) {
  /**
   * Represents Location criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type can be either targeted or excluded.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Location extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Location";

    /**
     * @access public
     * @var string
     */
    public $locationName;

    /**
     * @access public
     * @var string
     */
    public $displayType;

    /**
     * @access public
     * @var tnsLocationTargetingStatus
     */
    public $targetingStatus;

    /**
     * @access public
     * @var Location[]
     */
    public $parentLocations;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($locationName = null, $displayType = null, $targetingStatus = null, $parentLocations = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->locationName = $locationName;
      $this->displayType = $displayType;
      $this->targetingStatus = $targetingStatus;
      $this->parentLocations = $parentLocations;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("MobileAppCategory", false)) {
  /**
   * Represents the mobile app category to be targeted.
   * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
   * available mobile app categories</a>.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MobileAppCategory extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MobileAppCategory";

    /**
     * @access public
     * @var integer
     */
    public $mobileAppCategoryId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($mobileAppCategoryId = null, $displayName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->mobileAppCategoryId = $mobileAppCategoryId;
      $this->displayName = $displayName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("MobileApplication", false)) {
  /**
   * Represents the mobile application to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MobileApplication extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MobileApplication";

    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($appId = null, $displayName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->appId = $appId;
      $this->displayName = $displayName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Money", false)) {
  /**
   * Represents a money amount.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Money extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Money";

    /**
     * @access public
     * @var integer
     */
    public $microAmount;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($microAmount = null, $ComparableValueType = null) {
      parent::__construct();
      $this->microAmount = $microAmount;
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("NetworkSetting", false)) {
  /**
   * Network settings for a Campaign.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NetworkSetting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NetworkSetting";

    /**
     * @access public
     * @var boolean
     */
    public $targetGoogleSearch;

    /**
     * @access public
     * @var boolean
     */
    public $targetSearchNetwork;

    /**
     * @access public
     * @var boolean
     */
    public $targetContentNetwork;

    /**
     * @access public
     * @var boolean
     */
    public $targetPartnerSearchNetwork;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($targetGoogleSearch = null, $targetSearchNetwork = null, $targetContentNetwork = null, $targetPartnerSearchNetwork = null) {
      $this->targetGoogleSearch = $targetGoogleSearch;
      $this->targetSearchNetwork = $targetSearchNetwork;
      $this->targetContentNetwork = $targetContentNetwork;
      $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
    }

  }
}

if (!class_exists("NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotEmptyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotEmptyError";

    /**
     * @access public
     * @var tnsNotEmptyErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("NotWhitelistedError", false)) {
  /**
   * Indicates that the customer is not whitelisted for accessing the API.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotWhitelistedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotWhitelistedError";

    /**
     * @access public
     * @var tnsNotWhitelistedErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("NullError", false)) {
  /**
   * Errors associated with violation of a NOT NULL check.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NullError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NullError";

    /**
     * @access public
     * @var tnsNullErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("NumberValue", false)) {
  /**
   * Number value types for constructing number valued ranges.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NumberValue extends ComparableValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NumberValue";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($ComparableValueType = null) {
      parent::__construct();
      $this->ComparableValueType = $ComparableValueType;
    }

  }
}

if (!class_exists("OperationAccessDenied", false)) {
  /**
   * Operation not permitted due to the invoked service's access policy.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperationAccessDenied extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperationAccessDenied";

    /**
     * @access public
     * @var tnsOperationAccessDeniedReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Paging", false)) {
  /**
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Paging {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Paging";

    /**
     * @access public
     * @var integer
     */
    public $startIndex;

    /**
     * @access public
     * @var integer
     */
    public $numberResults;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($startIndex = null, $numberResults = null) {
      $this->startIndex = $startIndex;
      $this->numberResults = $numberResults;
    }

  }
}

if (!class_exists("Placement", false)) {
  /**
   * A placement used for modifying bids for sites when targeting the content
   * network.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Placement extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Placement";

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($url = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->url = $url;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Platform", false)) {
  /**
   * Represents Platform criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Platform extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Platform";

    /**
     * @access public
     * @var string
     */
    public $platformName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($platformName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->platformName = $platformName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("PolicyViolationError", false)) {
  /**
   * Represents violations of a single policy by some text in a field.
   * 
   * Violations of a single policy by the same string in multiple places
   * within a field is reported in one instance of this class and only one
   * exemption needs to be filed.
   * Violations of a single policy by two different strings is reported
   * as two separate instances of this class.
   * 
   * e.g. If 'ACME' violates 'capitalization' and occurs twice in a text ad it
   * would be represented by one instance. If the ad also contains 'INC' which
   * also violates 'capitalization' it would be represented in a separate
   * instance.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PolicyViolationError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "PolicyViolationError";

    /**
     * @access public
     * @var PolicyViolationKey
     */
    public $key;

    /**
     * @access public
     * @var string
     */
    public $externalPolicyName;

    /**
     * @access public
     * @var string
     */
    public $externalPolicyUrl;

    /**
     * @access public
     * @var string
     */
    public $externalPolicyDescription;

    /**
     * @access public
     * @var boolean
     */
    public $isExemptable;

    /**
     * @access public
     * @var PolicyViolationErrorPart[]
     */
    public $violatingParts;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, $violatingParts = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->key = $key;
      $this->externalPolicyName = $externalPolicyName;
      $this->externalPolicyUrl = $externalPolicyUrl;
      $this->externalPolicyDescription = $externalPolicyDescription;
      $this->isExemptable = $isExemptable;
      $this->violatingParts = $violatingParts;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("PolicyViolationErrorPart", false)) {
  /**
   * Points to a substring within an ad field or criterion.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PolicyViolationErrorPart {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "PolicyViolationError.Part";

    /**
     * @access public
     * @var integer
     */
    public $index;

    /**
     * @access public
     * @var integer
     */
    public $length;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($index = null, $length = null) {
      $this->index = $index;
      $this->length = $length;
    }

  }
}

if (!class_exists("PolicyViolationKey", false)) {
  /**
   * Key of the violation. The key is used for referring to a violation when
   * filing an exemption request.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PolicyViolationKey {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "PolicyViolationKey";

    /**
     * @access public
     * @var string
     */
    public $policyName;

    /**
     * @access public
     * @var string
     */
    public $violatingText;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($policyName = null, $violatingText = null) {
      $this->policyName = $policyName;
      $this->violatingText = $violatingText;
    }

  }
}

if (!class_exists("Product", false)) {
  /**
   * Product targeting criteria, represents a filter for products in the
   * product feed that is defined by the advertiser. The criteria is used to
   * determine the products in a Merchant Center account to be used with the
   * ProductAds in the AdGroup. This criteria is available only to some advertisers.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Product extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Product";

    /**
     * @access public
     * @var ProductCondition[]
     */
    public $conditions;

    /**
     * @access public
     * @var string
     */
    public $text;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($conditions = null, $text = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->conditions = $conditions;
      $this->text = $text;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("ProductCondition", false)) {
  /**
   * Conditions to filter the products defined in product feed for targeting.
   * The condition is defined as operand=argument.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ProductCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ProductCondition";

    /**
     * @access public
     * @var string
     */
    public $argument;

    /**
     * @access public
     * @var ProductConditionOperand
     */
    public $operand;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($argument = null, $operand = null) {
      $this->argument = $argument;
      $this->operand = $operand;
    }

  }
}

if (!class_exists("ProductConditionOperand", false)) {
  /**
   * Attribute for the product condition.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ProductConditionOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ProductConditionOperand";

    /**
     * @access public
     * @var string
     */
    public $operand;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operand = null) {
      $this->operand = $operand;
    }

  }
}

if (!class_exists("QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QuotaCheckError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "QuotaCheckError";

    /**
     * @access public
     * @var tnsQuotaCheckErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RangeError", false)) {
  /**
   * A list of all errors associated with the Range constraint.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RangeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RangeError";

    /**
     * @access public
     * @var tnsRangeErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RateExceededError", false)) {
  /**
   * Signals that a call failed because a measured rate exceeded.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RateExceededError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RateExceededError";

    /**
     * @access public
     * @var tnsRateExceededErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $rateName;

    /**
     * @access public
     * @var string
     */
    public $rateScope;

    /**
     * @access public
     * @var integer
     */
    public $retryAfterSeconds;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->rateName = $rateName;
      $this->rateScope = $rateScope;
      $this->retryAfterSeconds = $retryAfterSeconds;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ReadOnlyError", false)) {
  /**
   * Errors from attempting to write to read-only fields.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ReadOnlyError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ReadOnlyError";

    /**
     * @access public
     * @var tnsReadOnlyErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RegionCodeError", false)) {
  /**
   * A list of all errors associated with the @RegionCode constraints.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RegionCodeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RegionCodeError";

    /**
     * @access public
     * @var tnsRegionCodeErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RequestError", false)) {
  /**
   * Encapsulates the generic errors thrown when there's an error with user
   * request.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequestError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequestError";

    /**
     * @access public
     * @var tnsRequestErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("RequiredError", false)) {
  /**
   * Errors due to missing required field.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequiredError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequiredError";

    /**
     * @access public
     * @var tnsRequiredErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("SizeLimitError", false)) {
  /**
   * Indicates that the number of entries in the request or response exceeds the system limit.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SizeLimitError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SizeLimitError";

    /**
     * @access public
     * @var tnsSizeLimitErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SoapRequestHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SoapHeader";

    /**
     * @access public
     * @var string
     */
    public $authToken;

    /**
     * @access public
     * @var string
     */
    public $clientCustomerId;

    /**
     * @access public
     * @var string
     */
    public $developerToken;

    /**
     * @access public
     * @var string
     */
    public $userAgent;

    /**
     * @access public
     * @var boolean
     */
    public $validateOnly;

    /**
     * @access public
     * @var boolean
     */
    public $partialFailure;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($authToken = null, $clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null) {
      $this->authToken = $authToken;
      $this->clientCustomerId = $clientCustomerId;
      $this->developerToken = $developerToken;
      $this->userAgent = $userAgent;
      $this->validateOnly = $validateOnly;
      $this->partialFailure = $partialFailure;
    }

  }
}

if (!class_exists("SoapResponseHeader", false)) {
  /**
   * Defines the elements within the header of a SOAP response.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SoapResponseHeader {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SoapResponseHeader";

    /**
     * @access public
     * @var string
     */
    public $requestId;

    /**
     * @access public
     * @var string
     */
    public $serviceName;

    /**
     * @access public
     * @var string
     */
    public $methodName;

    /**
     * @access public
     * @var integer
     */
    public $operations;

    /**
     * @access public
     * @var integer
     */
    public $responseTime;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null) {
      $this->requestId = $requestId;
      $this->serviceName = $serviceName;
      $this->methodName = $methodName;
      $this->operations = $operations;
      $this->responseTime = $responseTime;
    }

  }
}

if (!class_exists("StatsQueryError", false)) {
  /**
   * Represents possible error codes when querying for stats.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StatsQueryError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "StatsQueryError";

    /**
     * @access public
     * @var tnsStatsQueryErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StringLengthError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "StringLengthError";

    /**
     * @access public
     * @var tnsStringLengthErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("DataEntry", false)) {
  /**
   * The base class of all return types of the table service.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DataEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DataEntry";

    /**
     * @access public
     * @var string
     */
    public $DataEntryType;
    private $_parameterMap = array(
      "DataEntry.Type" => "DataEntryType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($DataEntryType = null) {
      $this->DataEntryType = $DataEntryType;
    }

  }
}

if (!class_exists("TargetError", false)) {
  /**
   * A list of all the error codes being used by the common targeting package.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "TargetError";

    /**
     * @access public
     * @var tnsTargetErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("CriterionUserInterest", false)) {
  /**
   * User Interest represents a particular interest-based vertical to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionUserInterest extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionUserInterest";

    /**
     * @access public
     * @var integer
     */
    public $userInterestId;

    /**
     * @access public
     * @var string
     */
    public $userInterestName;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userInterestId = null, $userInterestName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->userInterestId = $userInterestId;
      $this->userInterestName = $userInterestName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("CriterionUserList", false)) {
  /**
   * UserList - represents a user list that is defined by the advertiser to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionUserList extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionUserList";

    /**
     * @access public
     * @var integer
     */
    public $userListId;

    /**
     * @access public
     * @var string
     */
    public $userListName;

    /**
     * @access public
     * @var tnsCriterionUserListMembershipStatus
     */
    public $userListMembershipStatus;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($userListId = null, $userListName = null, $userListMembershipStatus = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->userListId = $userListId;
      $this->userListName = $userListName;
      $this->userListMembershipStatus = $userListMembershipStatus;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Vertical", false)) {
  /**
   * Use verticals to target or exclude placements in the Google Display Network
   * based on the category into which the placement falls (for example, "Pets &amp;
   * Animals/Pets/Dogs").
   * <a href="/adwords/api/docs/appendix/verticals">View the complete list
   * of available vertical categories.</a>
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Vertical extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Vertical";

    /**
     * @access public
     * @var integer
     */
    public $verticalId;

    /**
     * @access public
     * @var integer
     */
    public $verticalParentId;

    /**
     * @access public
     * @var string[]
     */
    public $path;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($verticalId = null, $verticalParentId = null, $path = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->verticalId = $verticalId;
      $this->verticalParentId = $verticalParentId;
      $this->path = $path;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Webpage", false)) {
  /**
   * Criterion for targeting webpages of an advertiser's website. The
   * website domain name is specified at the campaign level.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Webpage extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Webpage";

    /**
     * @access public
     * @var WebpageParameter
     */
    public $parameter;

    /**
     * @access public
     * @var double
     */
    public $criteriaCoverage;

    /**
     * @access public
     * @var string[]
     */
    public $criteriaSamples;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($parameter = null, $criteriaCoverage = null, $criteriaSamples = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->parameter = $parameter;
      $this->criteriaCoverage = $criteriaCoverage;
      $this->criteriaSamples = $criteriaSamples;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("WebpageCondition", false)) {
  /**
   * Logical expression for targeting webpages of an advertiser's website.
   * 
   * <p>A condition is defined as {@code operand OP argument}
   * where {@code operand} is one of the values enumerated in
   * {@link WebpageConditionOperand}, and, based on this value,
   * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class WebpageCondition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "WebpageCondition";

    /**
     * @access public
     * @var tnsWebpageConditionOperand
     */
    public $operand;

    /**
     * @access public
     * @var string
     */
    public $argument;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operand = null, $argument = null) {
      $this->operand = $operand;
      $this->argument = $argument;
    }

  }
}

if (!class_exists("WebpageParameter", false)) {
  /**
   * Parameter of Webpage criterion, expressed as a list of conditions, or
   * logical expressions, for targeting webpages of an advertiser's website.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class WebpageParameter extends CriterionParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "WebpageParameter";

    /**
     * @access public
     * @var string
     */
    public $criterionName;

    /**
     * @access public
     * @var WebpageCondition[]
     */
    public $conditions;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($criterionName = null, $conditions = null, $CriterionParameterType = null) {
      parent::__construct();
      $this->criterionName = $criterionName;
      $this->conditions = $conditions;
      $this->CriterionParameterType = $CriterionParameterType;
    }

  }
}

if (!class_exists("AdGroupBidLandscapeType", false)) {
  /**
   * Used to specify the type of {@code AdGroupLandscape}
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdGroupBidLandscapeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdGroupBidLandscape.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AdGroupCriterionErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdGroupCriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdGroupCriterionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AdGroupCriterionLimitExceededCriteriaLimitType", false)) {
  /**
   * The entity type that exceeded the limit.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdGroupCriterionLimitExceededCriteriaLimitType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdGroupCriterionLimitExceeded.CriteriaLimitType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AdxErrorReason", false)) {
  /**
   * The reasons for the AdX error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdxErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdxError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AuthenticationErrorReason", false)) {
  /**
   * The single reason for the authentication failure.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthenticationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthenticationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AuthorizationErrorReason", false)) {
  /**
   * The reasons for the database error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AuthorizationErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AuthorizationError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("BiddingErrorReason", false)) {
  /**
   * Reason for bidding error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BiddingErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BiddingError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("BudgetErrorReason", false)) {
  /**
   * The reasons for the budget error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BudgetErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BudgetError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ClientTermsErrorReason", false)) {
  /**
   * Enums for the various reasons an error can be thrown as a result of
   * ClientTerms violation.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ClientTermsErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ClientTermsError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CriterionType", false)) {
  /**
   * The types of criteria.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Criterion.Type";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CriterionErrorReason", false)) {
  /**
   * Concrete type of criterion is required for ADD and SET operations.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DatabaseErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DatabaseError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("DateErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DateErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DateError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("DistinctErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DistinctErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DistinctError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("EntityCountLimitExceededReason", false)) {
  /**
   * Limits at various levels of the account.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class EntityCountLimitExceededReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "EntityCountLimitExceeded.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("EntityNotFoundReason", false)) {
  /**
   * The specified id refered to an entity which either doesn't exist or is not accessible to the
   * customer. e.g. campaign belongs to another customer.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class EntityNotFoundReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "EntityNotFound.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("IdErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "IdError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("InternalApiErrorReason", false)) {
  /**
   * The single reason for the internal API error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InternalApiErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "InternalApiError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("KeywordMatchType", false)) {
  /**
   * Match type of a keyword. i.e. the way we match a keyword string with
   * search queries.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class KeywordMatchType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "KeywordMatchType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("LocationTargetingStatus", false)) {
  /**
   * Enum that represents the different Targeting Status values for a Location criterion.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class LocationTargetingStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "LocationTargetingStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("NotEmptyErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotEmptyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotEmptyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("NotWhitelistedErrorReason", false)) {
  /**
   * The single reason for the whitelist error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NotWhitelistedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NotWhitelistedError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("NullErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NullErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "NullError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("OperationAccessDeniedReason", false)) {
  /**
   * The reasons for the operation access error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperationAccessDeniedReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperationAccessDenied.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("QuotaCheckErrorReason", false)) {
  /**
   * Enums for all the reasons an error can be thrown to the user during
   * billing quota checks.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class QuotaCheckErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "QuotaCheckError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RangeErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RangeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RangeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RateExceededErrorReason", false)) {
  /**
   * The reason for the rate exceeded error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RateExceededErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RateExceededError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("ReadOnlyErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ReadOnlyErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ReadOnlyError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RegionCodeErrorReason", false)) {
  /**
   * The reasons for the validation error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RegionCodeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RegionCodeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequestErrorReason", false)) {
  /**
   * Error reason is unknown.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequestErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequestError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequiredErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequiredErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RequiredError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("SizeLimitErrorReason", false)) {
  /**
   * The reasons for Ad Scheduling errors.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SizeLimitErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SizeLimitError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("StatsQueryErrorReason", false)) {
  /**
   * The reasons for errors when querying for stats.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StatsQueryErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "StatsQueryError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StringLengthErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "StringLengthError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("TargetErrorReason", false)) {
  /**
   * The reasons for the target error.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "TargetError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CriterionUserListMembershipStatus", false)) {
  /**
   * Membership status of the user list.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionUserListMembershipStatus {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionUserList.MembershipStatus";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("WebpageConditionOperand", false)) {
  /**
   * Operand value of {@link WebpageCondition}.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class WebpageConditionOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "WebpageConditionOperand";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("AdFormatSpec", false)) {
  /**
   * A placement response object which provides information about one of the ad formats
   * supported by a placement.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdFormatSpec {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "AdFormatSpec";

    /**
     * @access public
     * @var tnsSiteConstantsAdFormat
     */
    public $format;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($format = null) {
      $this->format = $format;
    }

  }
}

if (!class_exists("AdSpec", false)) {
  /**
   * Interface for ad specifications to implement. See individual spec
   * documentation for more details on how to use each type, and
   * {@link AdSpecListSearchParameter} to understand what these specs are for.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdSpec {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "AdSpec";

    /**
     * @access public
     * @var DisplayAdSpec
     */
    public $DisplayAdSpec;

    /**
     * @access public
     * @var InStreamAdSpec
     */
    public $InStreamAdSpec;

    /**
     * @access public
     * @var TextAdSpec
     */
    public $TextAdSpec;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($DisplayAdSpec = null, $InStreamAdSpec = null, $TextAdSpec = null) {
      $this->DisplayAdSpec = $DisplayAdSpec;
      $this->InStreamAdSpec = $InStreamAdSpec;
      $this->TextAdSpec = $TextAdSpec;
    }

  }
}

if (!class_exists("Attribute", false)) {
  /**
   * {@link Attribute}s encompass the core information about a particular
   * {@link com.google.ads.api.services.targetingideas.TargetingIdea}. Some
   * attributes are for {@code KEYWORD} {@link IdeaType}s, some are for
   * {@code PLACEMENT} {@link IdeaType}s, and some are for both. Ultimately, an
   * {@link Attribute} instance simply wraps an actual value of interest. For
   * example, {@link KeywordAttribute} wraps the keyword itself, while a
   * {@link BooleanAttribute} simply wraps a boolean describing some information
   * about the keyword idea.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "Attribute";

    /**
     * @access public
     * @var string
     */
    public $AttributeType;
    private $_parameterMap = array(
      "Attribute.Type" => "AttributeType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($AttributeType = null) {
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("BidLandscapeAttribute", false)) {
  /**
   * {@link Attribute} type that contains a {@link BidLandscape} value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BidLandscapeAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "BidLandscapeAttribute";

    /**
     * @access public
     * @var BidLandscape
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("BooleanAttribute", false)) {
  /**
   * {@link Attribute} type that contains a boolean value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BooleanAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "BooleanAttribute";

    /**
     * @access public
     * @var boolean
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("CriterionAttribute", false)) {
  /**
   * {@link Attribute} type that contains a {@link Criterion} value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "CriterionAttribute";

    /**
     * @access public
     * @var Criterion
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("CurrencyCodeError", false)) {
  /**
   * Errors for currency codes.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CurrencyCodeError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "CurrencyCodeError";

    /**
     * @access public
     * @var tnsCurrencyCodeErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("DisplayAdSpec", false)) {
  /**
   * Placement request/response object which provides details about display
   * ad types, options, and other available configuration variables.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DisplayAdSpec {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "DisplayAdSpec";

    /**
     * @access public
     * @var DisplayType[]
     */
    public $displayTypes;

    /**
     * @access public
     * @var tnsDisplayAdSpecActivationOption[]
     */
    public $activationOptions;

    /**
     * @access public
     * @var DisplayAdSpecAdSizeSpec[]
     */
    public $adSizeSpecs;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($displayTypes = null, $activationOptions = null, $adSizeSpecs = null) {
      $this->displayTypes = $displayTypes;
      $this->activationOptions = $activationOptions;
      $this->adSizeSpecs = $adSizeSpecs;
    }

  }
}

if (!class_exists("DisplayAdSpecAdSizeSpec", false)) {
  /**
   * Specification for an ad size. This specification allows customization by
   * display options for more fine-grained control over returns, so that
   * customers can associate ad options with specific sizes. For example,
   * suppose the customer in general would like to see placements with
   * {@code DisplayOption.STANDARD} and {@code DisplayOption.POP_UNDER} -
   * except for 300x250 ads which should only be STANDARD. The customer would
   * create a {@code DisplayAdSpec} with {@code DisplayOption.STANDARD} and
   * {@code DisplayOption.POP_UNDER}, and also send in an {@code AdSizeSpec}
   * with {@code width} of 300, {@code} height of 250, and {@code displayOptionFilter}
   * set to {@code DisplayOption.STANDARD}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DisplayAdSpecAdSizeSpec {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "DisplayAdSpec.AdSizeSpec";

    /**
     * @access public
     * @var integer
     */
    public $width;

    /**
     * @access public
     * @var integer
     */
    public $height;

    /**
     * @access public
     * @var tnsDisplayAdSpecActivationOption[]
     */
    public $activationOptionFilter;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($width = null, $height = null, $activationOptionFilter = null) {
      $this->width = $width;
      $this->height = $height;
      $this->activationOptionFilter = $activationOptionFilter;
    }

  }
}

if (!class_exists("DisplayType", false)) {
  /**
   * Base interface for types of display ads.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DisplayType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "DisplayType";

    /**
     * @access public
     * @var FlashDisplayType
     */
    public $FlashDisplayType;

    /**
     * @access public
     * @var HtmlDisplayType
     */
    public $HtmlDisplayType;

    /**
     * @access public
     * @var ImageDisplayType
     */
    public $ImageDisplayType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($FlashDisplayType = null, $HtmlDisplayType = null, $ImageDisplayType = null) {
      $this->FlashDisplayType = $FlashDisplayType;
      $this->HtmlDisplayType = $HtmlDisplayType;
      $this->ImageDisplayType = $ImageDisplayType;
    }

  }
}

if (!class_exists("DoubleAttribute", false)) {
  /**
   * {@link Attribute} type that contains a double value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DoubleAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "DoubleAttribute";

    /**
     * @access public
     * @var double
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("DoubleComparisonOperation", false)) {
  /**
   * Object representing double comparison operations. This is usually used within
   * a particular
   * {@link com.google.ads.api.services.targetingideas.search.SearchParameter} to
   * specify the valid values requested for the specific
   * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DoubleComparisonOperation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "DoubleComparisonOperation";

    /**
     * @access public
     * @var double
     */
    public $minimum;

    /**
     * @access public
     * @var double
     */
    public $maximum;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($minimum = null, $maximum = null) {
      $this->minimum = $minimum;
      $this->maximum = $maximum;
    }

  }
}

if (!class_exists("FlashDisplayType", false)) {
  /**
   * {@link DisplayType} implementation for Flash display ads.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class FlashDisplayType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "FlashDisplayType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("HtmlDisplayType", false)) {
  /**
   * HTML-specific options for display ads are contained within
   * this class.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class HtmlDisplayType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "HtmlDisplayType";

    /**
     * @access public
     * @var tnsHtmlDisplayTypeHtmlOption
     */
    public $htmlOption;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($htmlOption = null) {
      $this->htmlOption = $htmlOption;
    }

  }
}

if (!class_exists("IdeaTypeAttribute", false)) {
  /**
   * {@link Attribute} type that contains an {@link IdeaType} value. For example,
   * if a {@link com.google.ads.api.services.targetingideas.TargetingIdea}
   * represents a keyword idea, its {@link IdeaTypeAttribute} would contain a
   * {@code KEYWORD} {@link IdeaType}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdeaTypeAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "IdeaTypeAttribute";

    /**
     * @access public
     * @var tnsIdeaType
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("ImageDisplayType", false)) {
  /**
   * {@link DisplayType} implementation for images.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ImageDisplayType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "ImageDisplayType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("InStreamAdInfo", false)) {
  /**
   * Information specific to the instream ad format. Instream ads are video ads
   * which play as part of the delivery of video content, either before, during,
   * or after the content itself.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InStreamAdInfo {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "InStreamAdInfo";

    /**
     * @access public
     * @var integer
     */
    public $maxAdDuration;

    /**
     * @access public
     * @var integer
     */
    public $minAdDuration;

    /**
     * @access public
     * @var integer
     */
    public $medianAdDuration;

    /**
     * @access public
     * @var double
     */
    public $preRollPercent;

    /**
     * @access public
     * @var double
     */
    public $midRollPercent;

    /**
     * @access public
     * @var double
     */
    public $postRollPercent;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($maxAdDuration = null, $minAdDuration = null, $medianAdDuration = null, $preRollPercent = null, $midRollPercent = null, $postRollPercent = null) {
      $this->maxAdDuration = $maxAdDuration;
      $this->minAdDuration = $minAdDuration;
      $this->medianAdDuration = $medianAdDuration;
      $this->preRollPercent = $preRollPercent;
      $this->midRollPercent = $midRollPercent;
      $this->postRollPercent = $postRollPercent;
    }

  }
}

if (!class_exists("InStreamAdInfoAttribute", false)) {
  /**
   * {@link Attribute} type that contains an {@link InStreamAdInfo} value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InStreamAdInfoAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "InStreamAdInfoAttribute";

    /**
     * @access public
     * @var InStreamAdInfo
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("InStreamAdSpec", false)) {
  /**
   * Placement request/response object which provides details about instream
   * ad types, options, and other available configuration variables.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InStreamAdSpec {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "InStreamAdSpec";

    /**
     * @access public
     * @var tnsInStreamAdSpecInStreamType[]
     */
    public $inStreamTypes;

    /**
     * @access public
     * @var integer[]
     */
    public $durations;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($inStreamTypes = null, $durations = null) {
      $this->inStreamTypes = $inStreamTypes;
      $this->durations = $durations;
    }

  }
}

if (!class_exists("IntegerAttribute", false)) {
  /**
   * {@link Attribute} type that contains an integer value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IntegerAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "IntegerAttribute";

    /**
     * @access public
     * @var integer
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("IntegerSetAttribute", false)) {
  /**
   * {@link Attribute} type that contains a Set of integer values.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IntegerSetAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "IntegerSetAttribute";

    /**
     * @access public
     * @var integer[]
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("KeywordAttribute", false)) {
  /**
   * {@link Attribute} type that contains a {@link Keyword} value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class KeywordAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "KeywordAttribute";

    /**
     * @access public
     * @var Keyword
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("LongAttribute", false)) {
  /**
   * {@link Attribute} type that contains a long value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class LongAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "LongAttribute";

    /**
     * @access public
     * @var integer
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("LongComparisonOperation", false)) {
  /**
   * Object representing integer comparison operations. This is usually used within
   * a particular
   * {@link com.google.ads.api.services.targetingideas.search.SearchParameter} to
   * specify the valid values requested for the specific
   * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class LongComparisonOperation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "LongComparisonOperation";

    /**
     * @access public
     * @var integer
     */
    public $minimum;

    /**
     * @access public
     * @var integer
     */
    public $maximum;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($minimum = null, $maximum = null) {
      $this->minimum = $minimum;
      $this->maximum = $maximum;
    }

  }
}

if (!class_exists("LongRangeAttribute", false)) {
  /**
   * {@link Attribute} type that contains a {@link Range} of {@link LongValue}
   * values.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class LongRangeAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "LongRangeAttribute";

    /**
     * @access public
     * @var Range
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("MatchesRegexError", false)) {
  /**
   * Errors associated with a given string not matching the provided
   * regular expression.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MatchesRegexError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "MatchesRegexError";

    /**
     * @access public
     * @var tnsMatchesRegexErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("MoneyAttribute", false)) {
  /**
   * {@link Attribute} type that contains a {@link Money} value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MoneyAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "MoneyAttribute";

    /**
     * @access public
     * @var Money
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("MonthlySearchVolume", false)) {
  /**
   * A keyword response value representing search volume for a single month. An
   * instance with a {@code null} count is valid, indicating that the information
   * is unavailable.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MonthlySearchVolume {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "MonthlySearchVolume";

    /**
     * @access public
     * @var integer
     */
    public $year;

    /**
     * @access public
     * @var integer
     */
    public $month;

    /**
     * @access public
     * @var integer
     */
    public $count;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($year = null, $month = null, $count = null) {
      $this->year = $year;
      $this->month = $month;
      $this->count = $count;
    }

  }
}

if (!class_exists("MonthlySearchVolumeAttribute", false)) {
  /**
   * {@link Attribute} type that contains a list of {@link MonthlySearchVolume}
   * values. The list contains the past 12 {@link MonthlySearchVolume}s
   * (excluding the current month). The first item is the data for the most
   * recent month and the last item is the data for the oldest month.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MonthlySearchVolumeAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "MonthlySearchVolumeAttribute";

    /**
     * @access public
     * @var MonthlySearchVolume[]
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("OpportunityIdeaTypeAttribute", false)) {
  /**
   * {@link Attribute} type that contains an {@link OpportunityIdeaType} value.
   * For example, if a
   * {@link com.google.ads.api.services.optimization.bulkopportunity.OpportunityIdea}
   * represents a keyword idea, its {@link OpportunityIdeaTypeAttribute} would
   * contain a {@code KEYWORD} {@link OpportunityIdeaType}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OpportunityIdeaTypeAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "OpportunityIdeaTypeAttribute";

    /**
     * @access public
     * @var tnsOpportunityIdeaType
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("PlacementAttribute", false)) {
  /**
   * {@link Attribute} type that contains a {@link Placement} value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PlacementAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "PlacementAttribute";

    /**
     * @access public
     * @var Placement
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("PlacementTypeAttribute", false)) {
  /**
   * {@link Attribute} type that contains a {@link PlacementType} value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PlacementTypeAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "PlacementTypeAttribute";

    /**
     * @access public
     * @var tnsSiteConstantsPlacementType
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("Range", false)) {
  /**
   * Represents a range of values that has either an upper or a lower bound.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Range {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "Range";

    /**
     * @access public
     * @var ComparableValue
     */
    public $min;

    /**
     * @access public
     * @var ComparableValue
     */
    public $max;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($min = null, $max = null) {
      $this->min = $min;
      $this->max = $max;
    }

  }
}

if (!class_exists("SearchParameter", false)) {
  /**
   * A set of {@link SearchParameter}s are supplied to the
   * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}
   * to specify how the user wants to filter the set of all possible
   * {@link com.google.ads.api.services.targetingideas.TargetingIdea}s.
   * 
   * There is a {@link SearchParameter} for all types of inputs.
   * {@link SearchParameter}s can conceptually be broken down into two types.
   * <ul>
   * <li>Input {@link SearchParameter}s provide the seed information from which
   * ideas should be generated or statistic information is desired
   * (e.g. {@link RelatedToQuerySearchParameter},
   * {@link RelatedToUrlSearchParameter}, etc).
   * Such {@link SearchParameters} are required for valid requests.</li>
   * <li>Filter {@link SearchParameter}s are used to trim down the results based
   * on {@link com.google.ads.api.services.targetingideas.attributes.Attribute}
   * related information (eg. {@link CompetitionSearchParameter}, etc.).</li>
   * </ul><p>
   * 
   * A request should only contain one instance of each {@link SearchParameter}
   * <p>One or more of the following {@link SearchParameter}s are required:<br/>
   * <ul><li>{@link CategoryProductsAndServicesSearchParameter}</li>
   * <li>{@link LocationSearchParameter}</li>
   * <li>{@link RelatedToQuerySearchParameter}</li>
   * <li>{@link RelatedToUrlSearchParameter}</li>
   * <li>{@link SeedAdGroupIdSearchParameter}</li>
   * </ul><p>
   * <p><b>{@link IdeaType} KEYWORD supports following {@link SearchParameter}s:</b><br/>
   * <ul>
   * <li>{@link CategoryProductsAndServicesSearchParameter}</li>
   * <li>{@link CompetitionSearchParameter}</li>
   * <li>{@link ExcludedKeywordSearchParameter}</li>
   * <li>{@link IdeaTextFilterSearchParameter}</li>
   * <li>{@link IncludeAdultContentSearchParameter}</li>
   * <li>{@link LanguageSearchParameter}</li>
   * <li>{@link LocationSearchParameter}</li>
   * <li>{@link NetworkSearchParameter}</li>
   * <li>{@link RelatedToQuerySearchParameter}</li>
   * <li>{@link RelatedToUrlSearchParameter}</li>
   * <li>{@link SearchVolumeDeltaSearchParameter}</li>
   * <li>{@link SearchVolumeSearchParameter}</li>
   * <li>{@link SeedAdGroupIdSearchParameter}</li>
   * </ul><p>
   * <p><b>{@link IdeaType} PLACEMENT supports following {@link SearchParameter}s:</b><br/>
   * <ul>
   * <li>{@link AdSpecListSearchParameter}</li>
   * <li>{@link LanguageSearchParameter}</li>
   * <li>{@link LocationSearchParameter}</li>
   * <li>{@link PlacementTypeSearchParameter}</li>
   * <li>{@link RelatedToQuerySearchParameter}</li>
   * <li>{@link RelatedToUrlSearchParameter}</li>
   * </ul><p>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "SearchParameter";

    /**
     * @access public
     * @var string
     */
    public $SearchParameterType;
    private $_parameterMap = array(
      "SearchParameter.Type" => "SearchParameterType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value) {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var) {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }
      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap() {
      return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($SearchParameterType = null) {
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("SearchVolumeDeltaSearchParameter", false)) {
  /**
   * A {@link SearchParameter} that specifies the level of search volume delta expected in results,
   * and it is directly related to
   * {@link com.google.ads.api.services.targetingideas.external.AttributeType#SEARCH_VOLUME_DELTA}.
   * Absence of a {@link SearchVolumeDeltaSearchParameter} in a
   * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector} is
   * equivalent to having no constraint on search volume delta specified.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: STATS, IDEAS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SearchVolumeDeltaSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "SearchVolumeDeltaSearchParameter";

    /**
     * @access public
     * @var DoubleComparisonOperation
     */
    public $relative;

    /**
     * @access public
     * @var LongComparisonOperation
     */
    public $absolute;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($relative = null, $absolute = null, $SearchParameterType = null) {
      parent::__construct();
      $this->relative = $relative;
      $this->absolute = $absolute;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("SearchVolumeSearchParameter", false)) {
  /**
   * A {@link SearchParameter} that specifies the level of search volume expected in results,
   * and it has a direct relationship to
   * {@link com.google.ads.api.services.targetingideas.external.AttributeType#SEARCH_VOLUME}.
   * Absence of a {@link SearchVolumeSearchParameter} in a
   * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector} is
   * equivalent to having no constraint on search volume specified.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SearchVolumeSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "SearchVolumeSearchParameter";

    /**
     * @access public
     * @var LongComparisonOperation
     */
    public $operation;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($operation = null, $SearchParameterType = null) {
      parent::__construct();
      $this->operation = $operation;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("SeedAdGroupIdSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s
   * that specifies that the supplied AdGroup should be used as a seed
   * for generating new ideas. For example, an AdGroup's keywords
   * would be used to generate new and related keywords.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SeedAdGroupIdSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "SeedAdGroupIdSearchParameter";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adGroupId = null, $SearchParameterType = null) {
      parent::__construct();
      $this->adGroupId = $adGroupId;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("StringAttribute", false)) {
  /**
   * {@link Attribute} type that contains a string value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class StringAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "StringAttribute";

    /**
     * @access public
     * @var string
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("TargetingIdea", false)) {
  /**
   * Represents a {@link TargetingIdea} returned by search criteria specified in
   * the {@link TargetingIdeaSelector}. Targeting ideas are keywords or placements
   * that are similar to those the user inputs.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetingIdea {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "TargetingIdea";

    /**
     * @access public
     * @var Type_AttributeMapEntry[]
     */
    public $data;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($data = null) {
      $this->data = $data;
    }

  }
}

if (!class_exists("TargetingIdeaError", false)) {
  /**
   * Base error class for the
   * {@link com.google.ads.api.services.targetingideas.TargetingIdeaService}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetingIdeaError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "TargetingIdeaError";

    /**
     * @access public
     * @var tnsTargetingIdeaErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("TargetingIdeaPage", false)) {
  /**
   * Contains a subset of {@link TargetingIdea}s from the search criteria
   * specified by a {@link TargetingIdeaSelector}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetingIdeaPage {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "TargetingIdeaPage";

    /**
     * @access public
     * @var integer
     */
    public $totalNumEntries;

    /**
     * @access public
     * @var TargetingIdea[]
     */
    public $entries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($totalNumEntries = null, $entries = null) {
      $this->totalNumEntries = $totalNumEntries;
      $this->entries = $entries;
    }

  }
}

if (!class_exists("TargetingIdeaSelector", false)) {
  /**
   * A descriptor for finding {@link TargetingIdea}s that match the specified criteria.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetingIdeaSelector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "TargetingIdeaSelector";

    /**
     * @access public
     * @var SearchParameter[]
     */
    public $searchParameters;

    /**
     * @access public
     * @var tnsIdeaType
     */
    public $ideaType;

    /**
     * @access public
     * @var tnsRequestType
     */
    public $requestType;

    /**
     * @access public
     * @var tnsAttributeType[]
     */
    public $requestedAttributeTypes;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

    /**
     * @access public
     * @var string
     */
    public $localeCode;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($searchParameters = null, $ideaType = null, $requestType = null, $requestedAttributeTypes = null, $paging = null, $localeCode = null, $currencyCode = null) {
      $this->searchParameters = $searchParameters;
      $this->ideaType = $ideaType;
      $this->requestType = $requestType;
      $this->requestedAttributeTypes = $requestedAttributeTypes;
      $this->paging = $paging;
      $this->localeCode = $localeCode;
      $this->currencyCode = $currencyCode;
    }

  }
}

if (!class_exists("TextAdSpec", false)) {
  /**
   * Specification for a text ad. Currently there are no customizable
   * options on text ads, but the presence of a {@code TextAdSpec} in a
   * request indicates that text ads are a desired result, and the presence
   * of a {@code TextAdSpec} in a response indicates that there are text
   * ads available in the requested inventory.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TextAdSpec {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "TextAdSpec";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("TrafficEstimatorError", false)) {
  /**
   * Base error class for
   * {@link com.google.ads.api.services.trafficestimator.TrafficEstimatorService}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TrafficEstimatorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "TrafficEstimatorError";

    /**
     * @access public
     * @var tnsTrafficEstimatorErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("Type_AttributeMapEntry", false)) {
  /**
   * This represents an entry in a map with a key of type Type
   * and value of type Attribute.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Type_AttributeMapEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "Type_AttributeMapEntry";

    /**
     * @access public
     * @var tnsAttributeType
     */
    public $key;

    /**
     * @access public
     * @var Attribute
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $value = null) {
      $this->key = $key;
      $this->value = $value;
    }

  }
}

if (!class_exists("WebpageDescriptor", false)) {
  /**
   * Basic information about a webpage.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class WebpageDescriptor {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "WebpageDescriptor";

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * @access public
     * @var string
     */
    public $title;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($url = null, $title = null) {
      $this->url = $url;
      $this->title = $title;
    }

  }
}

if (!class_exists("WebpageDescriptorAttribute", false)) {
  /**
   * {@link Attribute} type that contains a {@link WebpageDescriptor} value.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class WebpageDescriptorAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "WebpageDescriptorAttribute";

    /**
     * @access public
     * @var WebpageDescriptor
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("AttributeType", false)) {
  /**
   * Represents the type of
   * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
   * <p><b>{@link IdeaType} KEYWORD supports the following {@link AttributeType}s:</b><br/>
   * <ul><li>{@link #AVERAGE_CPC}</li>
   * <li>{@link #CATEGORY_PRODUCTS_AND_SERVICES}</li>
   * <li>{@link #COMPETITION}</li>
   * <li>{@link #CRITERION}</li>
   * <li>{@link #EXTRACTED_FROM_WEBPAGE}</li>
   * <li>{@link #IDEA_TYPE}</li>
   * <li>{@link #KEYWORD_TEXT}</li>
   * <li>{@link #SEARCH_VOLUME}</li>
   * <li>{@link #TARGETED_MONTHLY_SEARCHES}</li>
   * </ul>
   * <p><b>{@link IdeaType} PLACEMENT supports the following {@link AttributeType}s:</b><br/>
   * <ul><li>{@link #AD_TYPE_SPEC}</li>
   * <li>{@link #APPROX_CONTENT_IMPRESSIONS_PER_DAY}</li>
   * <li>{@link #CRITERION}</li>
   * <li>{@link #IDEA_TYPE}</li>
   * <li>{@link #IN_STREAM_AD_INFO}</li>
   * <li>{@link #PLACEMENT_CATEGORY}</li>
   * <li>{@link #PLACEMENT_NAME}</li>
   * <li>{@link #PLACEMENT_TYPE}</li>
   * <li>{@link #SAMPLE_URL}</li>
   * </ul>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AttributeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "AttributeType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CompetitionSearchParameterLevel", false)) {
  /**
   * An enumeration of possible values to be used in conjunction with the
   * {@link CompetitionSearchParameter} to specify the granularity of
   * competition to be filtered.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CompetitionSearchParameterLevel {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "CompetitionSearchParameter.Level";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("CurrencyCodeErrorReason", false)) {
  /**
   * Encodes the reason (cause) of a particular {@link CurrencyCodeError}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CurrencyCodeErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "CurrencyCodeError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("DisplayAdSpecActivationOption", false)) {
  /**
   * Activation options. Describes the ad's activated mode.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DisplayAdSpecActivationOption {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "DisplayAdSpec.ActivationOption";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("HtmlDisplayTypeHtmlOption", false)) {
  /**
   * Served by a third party.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class HtmlDisplayTypeHtmlOption {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "HtmlDisplayType.HtmlOption";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("IdeaType", false)) {
  /**
   * Represents the type of idea.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdeaType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "IdeaType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("InStreamAdSpecInStreamType", false)) {
  /**
   * Display subtype.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class InStreamAdSpecInStreamType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "InStreamAdSpec.InStreamType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("MatchesRegexErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MatchesRegexErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "MatchesRegexError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("OpportunityIdeaType", false)) {
  /**
   * Represents the type of opportunity.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OpportunityIdeaType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "OpportunityIdeaType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("RequestType", false)) {
  /**
   * Represents the type of the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RequestType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "RequestType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("SiteConstantsAdFormat", false)) {
  /**
   * Enumerates the ad formats which can be reported in search results.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SiteConstantsAdFormat {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "SiteConstants.AdFormat";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("SiteConstantsPlacementType", false)) {
  /**
   * A placement request and response value indicating the type of site or other medium
   * (for example, a web page, in a feed, in a video) where ads will appear.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SiteConstantsPlacementType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "SiteConstants.PlacementType";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("TargetingIdeaErrorReason", false)) {
  /**
   * An enumeration of
   * {@link com.google.ads.api.services.targetingideas.TargetingIdeaService}
   * specific errors.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetingIdeaErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "TargetingIdeaError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("TrafficEstimatorErrorReason", false)) {
  /**
   * When the request with {@code null} campaign ID in
   * {@link com.google.ads.api.services.trafficestimator.CampaignEstimateRequest}
   * contains an
   * {@link com.google.ads.api.services.trafficestimator.AdGroupEstimateRequest}
   * with an ID.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TrafficEstimatorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "TrafficEstimatorError.Reason";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct() {
    }

  }
}

if (!class_exists("TargetingIdeaServiceGet", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a page of ideas that match the query described by the specified
   * {@link TargetingIdeaSelector}.
   * 
   * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
   * less.  Large result sets must be composed through multiple calls to this method, advancing the
   * paging {@code startIndex} value by {@code numberResults} with each call.
   * 
   * <p>Only a relatively small total number of results will be available through this method.
   * Much larger result sets may be available using
   * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
   * selector options.
   * 
   * @param selector Query describing the types of results to return when
   * finding matches (similar keyword ideas/placement ideas).
   * @return A {@link TargetingIdeaPage} of results, that is a subset of the
   * list of possible ideas meeting the criteria of the
   * {@link TargetingIdeaSelector}.
   * @throws ApiException If problems occurred while querying for ideas.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetingIdeaServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TargetingIdeaSelector
     */
    public $selector;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($selector = null) {
      $this->selector = $selector;
    }

  }
}

if (!class_exists("TargetingIdeaServiceGetResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetingIdeaServiceGetResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TargetingIdeaPage
     */
    public $rval;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("GetBulkKeywordIdeas", false)) {
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a page of ideas that match the query described by the specified
   * {@link TargetingIdeaSelector}.  This method is specialized for returning
   * bulk keyword ideas, and thus the selector must be set for
   * {@link com.google.ads.api.services.targetingideas.attributes.RequestType#IDEAS} and
   * {@link com.google.ads.api.services.common.optimization.attributes.IdeaType#KEYWORD}.
   * A limited, fixed set of attributes will be returned.
   * 
   * <p>A single-valued
   * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter}
   * must be supplied.  Single-valued
   * {@link com.google.ads.api.services.targetingideas.search.LanguageSearchParameter} and
   * {@link com.google.ads.api.services.targetingideas.search.LocationSearchParameter} are
   * both optional.  Other search parameters compatible with a keyword query may also be
   * supplied.
   * 
   * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800
   * or less. If a URL based search is performed it will return up to 100 keywords when the site is
   * not owned, or up to 800 if it is. Number of keywords returned on a keyword based search is up
   * to 800. Large result sets must be composed through multiple calls to this method, advancing the
   * paging {@code startIndex} value by {@code numberResults} with each call.
   * 
   * <p>This method can make many more results available than {@link #get(TargetingIdeaSelector)},
   * but allows less control over the query. For fine-tuned queries that do not need large numbers
   * of results, prefer {@link #get(TargetingIdeaSelector)}.
   * 
   * @param selector Query describing the bulk keyword ideas to return.
   * @return A {@link TargetingIdeaPage} of results, that is a subset of the
   * list of possible ideas meeting the criteria of the
   * {@link TargetingIdeaSelector}.
   * @throws ApiException If problems occurred while querying for ideas.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetBulkKeywordIdeas {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TargetingIdeaSelector
     */
    public $selector;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($selector = null) {
      $this->selector = $selector;
    }

  }
}

if (!class_exists("GetBulkKeywordIdeasResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetBulkKeywordIdeasResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TargetingIdeaPage
     */
    public $rval;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($rval = null) {
      $this->rval = $rval;
    }

  }
}

if (!class_exists("AdGroupCriterionError", false)) {
  /**
   * Base error class for Ad Group Criterion Service.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdGroupCriterionError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdGroupCriterionError";

    /**
     * @access public
     * @var tnsAdGroupCriterionErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("AdGroupCriterionLimitExceeded", false)) {
  /**
   * Signals that too many criteria were added to some ad group.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdGroupCriterionLimitExceeded extends EntityCountLimitExceeded {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdGroupCriterionLimitExceeded";

    /**
     * @access public
     * @var tnsAdGroupCriterionLimitExceededCriteriaLimitType
     */
    public $limitType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($limitType = null, $reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null) {
      parent::__construct();
      $this->limitType = $limitType;
      $this->reason = $reason;
      $this->enclosingId = $enclosingId;
      $this->limit = $limit;
      $this->accountLimitType = $accountLimitType;
      $this->existingCount = $existingCount;
    }

  }
}

if (!class_exists("AdxError", false)) {
  /**
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdxError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdxError";

    /**
     * @access public
     * @var tnsAdxErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
      parent::__construct();
      $this->reason = $reason;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
}

if (!class_exists("ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ApiException extends ApplicationException {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "ApiException";

    /**
     * @access public
     * @var ApiError[]
     */
    public $errors;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($errors = null, $message = null, $ApplicationExceptionType = null) {
      parent::__construct();
      $this->errors = $errors;
      $this->message = $message;
      $this->ApplicationExceptionType = $ApplicationExceptionType;
    }

  }
}

if (!class_exists("BidLandscape", false)) {
  /**
   * Represents data about a bid landscape for an ad group or criterion.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BidLandscape extends DataEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BidLandscape";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var string
     */
    public $startDate;

    /**
     * @access public
     * @var string
     */
    public $endDate;

    /**
     * @access public
     * @var BidLandscapeLandscapePoint[]
     */
    public $landscapePoints;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, $landscapePoints = null, $DataEntryType = null) {
      parent::__construct();
      $this->campaignId = $campaignId;
      $this->adGroupId = $adGroupId;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->landscapePoints = $landscapePoints;
      $this->DataEntryType = $DataEntryType;
    }

  }
}

if (!class_exists("CriterionBidLandscape", false)) {
  /**
   * The bid landscape for a criterion.  A bid landscape estimates how a
   * a criterion will perform based on different bid amounts.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionBidLandscape extends BidLandscape {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionBidLandscape";

    /**
     * @access public
     * @var integer
     */
    public $criterionId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($criterionId = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, $landscapePoints = null) {
      parent::__construct();
      $this->criterionId = $criterionId;
      $this->campaignId = $campaignId;
      $this->adGroupId = $adGroupId;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->landscapePoints = $landscapePoints;
    }

  }
}

if (!class_exists("CriterionPolicyError", false)) {
  /**
   * Contains the policy violations for a single BiddableAdGroupCriterion.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CriterionPolicyError extends PolicyViolationError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "CriterionPolicyError";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, $violatingParts = null) {
      parent::__construct();
      $this->key = $key;
      $this->externalPolicyName = $externalPolicyName;
      $this->externalPolicyUrl = $externalPolicyUrl;
      $this->externalPolicyDescription = $externalPolicyDescription;
      $this->isExemptable = $isExemptable;
      $this->violatingParts = $violatingParts;
    }

  }
}

if (!class_exists("DoubleValue", false)) {
  /**
   * Number value type for constructing double valued ranges.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class DoubleValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "DoubleValue";

    /**
     * @access public
     * @var double
     */
    public $number;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($number = null) {
      parent::__construct();
      $this->number = $number;
    }

  }
}

if (!class_exists("LongValue", false)) {
  /**
   * Number value type for constructing long valued ranges.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class LongValue extends NumberValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "LongValue";

    /**
     * @access public
     * @var integer
     */
    public $number;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($number = null) {
      parent::__construct();
      $this->number = $number;
    }

  }
}

if (!class_exists("AdFormatSpecListAttribute", false)) {
  /**
   * {@link Attribute} type that contains a list of {@link AdFormatSpec} values.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdFormatSpecListAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "AdFormatSpecListAttribute";

    /**
     * @access public
     * @var AdFormatSpec[]
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("AdSpecListAttribute", false)) {
  /**
   * {@link Attribute} type that contains a list of {@link AdSpec} values.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdSpecListAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "AdSpecListAttribute";

    /**
     * @access public
     * @var AdSpec[]
     */
    public $value;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }
}

if (!class_exists("AdSpecListSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for {@code PLACEMENT} {@link IdeaType}s used to
   * filter the results by the list of {@link AdSpec}s. See {@link AdSpec}
   * documentation for details on available options.
   * <p>This element is supported by following {@link IdeaType}s: PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdSpecListSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "AdSpecListSearchParameter";

    /**
     * @access public
     * @var AdSpec[]
     */
    public $adSpecs;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($adSpecs = null, $SearchParameterType = null) {
      parent::__construct();
      $this->adSpecs = $adSpecs;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("CategoryProductsAndServicesSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
   * sets a keyword category that all search results should belong to.
   * Uses the newer "Products and Services" taxonomy.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CategoryProductsAndServicesSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "CategoryProductsAndServicesSearchParameter";

    /**
     * @access public
     * @var integer
     */
    public $categoryId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($categoryId = null, $SearchParameterType = null) {
      parent::__construct();
      $this->categoryId = $categoryId;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("CompetitionSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s used to
   * filter the results by the amount of competition (eg: LOW, MEDIUM, HIGH).
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class CompetitionSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "CompetitionSearchParameter";

    /**
     * @access public
     * @var tnsCompetitionSearchParameterLevel[]
     */
    public $levels;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($levels = null, $SearchParameterType = null) {
      parent::__construct();
      $this->levels = $levels;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("ExcludedKeywordSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
   * specifies {@link Keyword}s that should be excluded from the results.<p>
   * 
   * The {@link KeywordMatchType} associated with these keywords is used to
   * provide various filtering strategies. For example, the excluded keyword
   * <b>"brand x player"</b> will exclude ideas from the resulting ideas as
   * described by the table below.
   * 
   * <table border="1">
   * <tr style="font-weight: bold;">
   * <th>Idea</th>
   * <th>{@code BROAD}</th>
   * <th>{@code PHRASE}</th>
   * <th>{@code EXACT}</th>
   * </tr>
   * <tr>
   * <td>brand x player</td>
   * <td>Exclude</td>
   * <td>Exclude</td>
   * <td>Exclude</td>
   * </tr>
   * <tr>
   * <td>blu-ray brand x player</td>
   * <td>Exclude</td>
   * <td>Exclude</td>
   * <td>Include</td>
   * </tr>
   * <tr>
   * <td>brand x dvd player</td>
   * <td>Exclude</td>
   * <td>Include</td>
   * <td>Include</td>
   * </tr>
   * <tr>
   * <td>brand x dvd</td>
   * <td>Include</td>
   * <td>Include</td>
   * <td>Include</td>
   * </tr>
   * </table>
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ExcludedKeywordSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "ExcludedKeywordSearchParameter";

    /**
     * @access public
     * @var Keyword[]
     */
    public $keywords;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($keywords = null, $SearchParameterType = null) {
      parent::__construct();
      $this->keywords = $keywords;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("IdeaTextFilterSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
   * specifies a collection of strings by which the results should be
   * constrained. This guarantees that each idea in the result will match
   * at least one of the {@code included} values.
   * 
   * For this {@link SearchParameter}, excluded items will always take
   * priority over included ones.
   * 
   * This can handle a maximum of 200 (included + excluded) elements.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IdeaTextFilterSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "IdeaTextFilterSearchParameter";

    /**
     * @access public
     * @var string[]
     */
    public $included;

    /**
     * @access public
     * @var string[]
     */
    public $excluded;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($included = null, $excluded = null, $SearchParameterType = null) {
      parent::__construct();
      $this->included = $included;
      $this->excluded = $excluded;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("IncludeAdultContentSearchParameter", false)) {
  /**
   * {@link SearchParameter} that specifies whether adult content should be
   * returned.<p>
   * 
   * Presence of this {@link SearchParameter} will allow adult keywords
   * to be included in the results.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class IncludeAdultContentSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "IncludeAdultContentSearchParameter";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($SearchParameterType = null) {
      parent::__construct();
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("LanguageSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for both {@code PLACEMENT} and {@code KEYWORD}
   * {@link IdeaType}s used to indicate multiple language being targeted. This can
   * be used, for example, to search for {@code KEYWORD} {@link IdeaType}s that
   * are best for Japanese language.
   * 
   * <p>The service allows at most one language to be targeted for KEYWORD requests and 10 languages
   * for PLACEMENT requests.
   * <p>In the {@code KEYWORD} {@link IdeaType} {@code STATS} {@link RequestType} requests, those
   * keywords that are from different language than specified in {@code LanguageSearchParameter} or
   * have unknown language will be filtered out in the response. To avoid filtering, do not include
   * {@code LanguageSearchParameter} in the request.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class LanguageSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "LanguageSearchParameter";

    /**
     * @access public
     * @var Language[]
     */
    public $languages;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($languages = null, $SearchParameterType = null) {
      parent::__construct();
      $this->languages = $languages;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("LocationSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for both {@code PLACEMENT} and {@code KEYWORD}
   * {@link IdeaType}s used to indicate the locations being targeted. This can
   * be used, for example, to search for {@code KEYWORD} {@link IdeaType}s that
   * are best for Japan and Los Angeles.
   * 
   * <p>This parameter replaces the {@code CountryTargetSearchParameter}.
   * 
   * <p>Warning: Not all back-ends support sub-country precision.
   * 
   * <p>The service allows up to 10 locations to be targeted for KEYWORD requests and 50 locations
   * for PLACEMENT requests.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class LocationSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "LocationSearchParameter";

    /**
     * @access public
     * @var Location[]
     */
    public $locations;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($locations = null, $SearchParameterType = null) {
      parent::__construct();
      $this->locations = $locations;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("NetworkSearchParameter", false)) {
  /**
   * <p>A {@link SearchParameter} for setting the search network. Currently we
   * support two network setting options:
   * <ul>
   * <li>Google search network</li>
   * <li>Google search network and AFS</li>
   * </ul>
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class NetworkSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "NetworkSearchParameter";

    /**
     * @access public
     * @var NetworkSetting
     */
    public $networkSetting;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($networkSetting = null, $SearchParameterType = null) {
      parent::__construct();
      $this->networkSetting = $networkSetting;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("PlacementTypeSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for {@code PLACEMENT} {@link IdeaType}s
   * used to filter results based on the type of website, known as
   * {@link com.google.ads.api.services.targetingideas.attributes.Type#PLACEMENT_TYPE},
   * that they appear in. For example, searches may be limited to find
   * results that only appear within mobile websites or feeds.
   * <p>This element is supported by following {@link IdeaType}s: PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class PlacementTypeSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "PlacementTypeSearchParameter";

    /**
     * @access public
     * @var tnsSiteConstantsPlacementType[]
     */
    public $placementTypes;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($placementTypes = null, $SearchParameterType = null) {
      parent::__construct();
      $this->placementTypes = $placementTypes;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("RelatedToQuerySearchParameter", false)) {
  /**
   * A {@link SearchParameter} for a query of {@code String}s.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RelatedToQuerySearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "RelatedToQuerySearchParameter";

    /**
     * @access public
     * @var string[]
     */
    public $queries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($queries = null, $SearchParameterType = null) {
      parent::__construct();
      $this->queries = $queries;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("RelatedToUrlSearchParameter", false)) {
  /**
   * A {@link SearchParameter} for {@code KEYWORD} and {@code PLACEMENT}
   * {@link IdeaType}s that specifies a set of URLs that results should
   * in some way be related too. For example, keyword results would be
   * similar to content keywords found on the related URLs.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RelatedToUrlSearchParameter extends SearchParameter {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const XSI_TYPE = "RelatedToUrlSearchParameter";

    /**
     * @access public
     * @var string[]
     */
    public $urls;

    /**
     * @access public
     * @var boolean
     */
    public $includeSubUrls;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($urls = null, $includeSubUrls = null, $SearchParameterType = null) {
      parent::__construct();
      $this->urls = $urls;
      $this->includeSubUrls = $includeSubUrls;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
}

if (!class_exists("AdGroupBidLandscape", false)) {
  /**
   * Represents data about a bidlandscape for an adgroup.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AdGroupBidLandscape extends BidLandscape {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AdGroupBidLandscape";

    /**
     * @access public
     * @var tnsAdGroupBidLandscapeType
     */
    public $type;

    /**
     * @access public
     * @var boolean
     */
    public $landscapeCurrent;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($type = null, $landscapeCurrent = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, $landscapePoints = null) {
      parent::__construct();
      $this->type = $type;
      $this->landscapeCurrent = $landscapeCurrent;
      $this->campaignId = $campaignId;
      $this->adGroupId = $adGroupId;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->landscapePoints = $landscapePoints;
    }

  }
}

if (!class_exists("TargetingIdeaService", false)) {
  /**
   * TargetingIdeaService
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class TargetingIdeaService extends AdWordsSoapClient {

    const SERVICE_NAME = "TargetingIdeaService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201309";
    const ENDPOINT = "https://adwords.google.com/api/adwords/o/v201309/TargetingIdeaService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/o/v201309/TargetingIdeaService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdGroupBidLandscape" => "AdGroupBidLandscape",
      "AdGroupCriterionError" => "AdGroupCriterionError",
      "AdGroupCriterionLimitExceeded" => "AdGroupCriterionLimitExceeded",
      "AdxError" => "AdxError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "BidLandscape" => "BidLandscape",
      "BidLandscape.LandscapePoint" => "BidLandscapeLandscapePoint",
      "BiddingError" => "BiddingError",
      "BudgetError" => "BudgetError",
      "ClientTermsError" => "ClientTermsError",
      "CollectionSizeError" => "CollectionSizeError",
      "ComparableValue" => "ComparableValue",
      "Criterion" => "Criterion",
      "CriterionBidLandscape" => "CriterionBidLandscape",
      "CriterionError" => "CriterionError",
      "CriterionParameter" => "CriterionParameter",
      "CriterionPolicyError" => "CriterionPolicyError",
      "DatabaseError" => "DatabaseError",
      "DateError" => "DateError",
      "DistinctError" => "DistinctError",
      "DoubleValue" => "DoubleValue",
      "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
      "EntityNotFound" => "EntityNotFound",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "Keyword" => "Keyword",
      "Language" => "Language",
      "Location" => "Location",
      "LongValue" => "LongValue",
      "MobileAppCategory" => "MobileAppCategory",
      "MobileApplication" => "MobileApplication",
      "Money" => "Money",
      "NetworkSetting" => "NetworkSetting",
      "NotEmptyError" => "NotEmptyError",
      "NotWhitelistedError" => "NotWhitelistedError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperationAccessDenied" => "OperationAccessDenied",
      "Paging" => "Paging",
      "Placement" => "Placement",
      "Platform" => "Platform",
      "PolicyViolationError" => "PolicyViolationError",
      "PolicyViolationError.Part" => "PolicyViolationErrorPart",
      "PolicyViolationKey" => "PolicyViolationKey",
      "Product" => "Product",
      "ProductCondition" => "ProductCondition",
      "ProductConditionOperand" => "ProductConditionOperand",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RegionCodeError" => "RegionCodeError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatsQueryError" => "StatsQueryError",
      "StringLengthError" => "StringLengthError",
      "DataEntry" => "DataEntry",
      "TargetError" => "TargetError",
      "CriterionUserInterest" => "CriterionUserInterest",
      "CriterionUserList" => "CriterionUserList",
      "Vertical" => "Vertical",
      "Webpage" => "Webpage",
      "WebpageCondition" => "WebpageCondition",
      "WebpageParameter" => "WebpageParameter",
      "AdGroupBidLandscape.Type" => "AdGroupBidLandscapeType",
      "AdGroupCriterionError.Reason" => "AdGroupCriterionErrorReason",
      "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
      "AdxError.Reason" => "AdxErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "BiddingError.Reason" => "BiddingErrorReason",
      "BudgetError.Reason" => "BudgetErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "Criterion.Type" => "CriterionType",
      "CriterionError.Reason" => "CriterionErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "KeywordMatchType" => "KeywordMatchType",
      "LocationTargetingStatus" => "LocationTargetingStatus",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RegionCodeError.Reason" => "RegionCodeErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "StatsQueryError.Reason" => "StatsQueryErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TargetError.Reason" => "TargetErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "WebpageConditionOperand" => "WebpageConditionOperand",
      "AdFormatSpec" => "AdFormatSpec",
      "AdFormatSpecListAttribute" => "AdFormatSpecListAttribute",
      "AdSpec" => "AdSpec",
      "AdSpecListAttribute" => "AdSpecListAttribute",
      "AdSpecListSearchParameter" => "AdSpecListSearchParameter",
      "Attribute" => "Attribute",
      "BidLandscapeAttribute" => "BidLandscapeAttribute",
      "BooleanAttribute" => "BooleanAttribute",
      "CategoryProductsAndServicesSearchParameter" => "CategoryProductsAndServicesSearchParameter",
      "CompetitionSearchParameter" => "CompetitionSearchParameter",
      "CriterionAttribute" => "CriterionAttribute",
      "CurrencyCodeError" => "CurrencyCodeError",
      "DisplayAdSpec" => "DisplayAdSpec",
      "DisplayAdSpec.AdSizeSpec" => "DisplayAdSpecAdSizeSpec",
      "DisplayType" => "DisplayType",
      "DoubleAttribute" => "DoubleAttribute",
      "DoubleComparisonOperation" => "DoubleComparisonOperation",
      "ExcludedKeywordSearchParameter" => "ExcludedKeywordSearchParameter",
      "FlashDisplayType" => "FlashDisplayType",
      "HtmlDisplayType" => "HtmlDisplayType",
      "IdeaTextFilterSearchParameter" => "IdeaTextFilterSearchParameter",
      "IdeaTypeAttribute" => "IdeaTypeAttribute",
      "ImageDisplayType" => "ImageDisplayType",
      "InStreamAdInfo" => "InStreamAdInfo",
      "InStreamAdInfoAttribute" => "InStreamAdInfoAttribute",
      "InStreamAdSpec" => "InStreamAdSpec",
      "IncludeAdultContentSearchParameter" => "IncludeAdultContentSearchParameter",
      "IntegerAttribute" => "IntegerAttribute",
      "IntegerSetAttribute" => "IntegerSetAttribute",
      "KeywordAttribute" => "KeywordAttribute",
      "LanguageSearchParameter" => "LanguageSearchParameter",
      "LocationSearchParameter" => "LocationSearchParameter",
      "LongAttribute" => "LongAttribute",
      "LongComparisonOperation" => "LongComparisonOperation",
      "LongRangeAttribute" => "LongRangeAttribute",
      "MatchesRegexError" => "MatchesRegexError",
      "MoneyAttribute" => "MoneyAttribute",
      "MonthlySearchVolume" => "MonthlySearchVolume",
      "MonthlySearchVolumeAttribute" => "MonthlySearchVolumeAttribute",
      "NetworkSearchParameter" => "NetworkSearchParameter",
      "OpportunityIdeaTypeAttribute" => "OpportunityIdeaTypeAttribute",
      "PlacementAttribute" => "PlacementAttribute",
      "PlacementTypeAttribute" => "PlacementTypeAttribute",
      "PlacementTypeSearchParameter" => "PlacementTypeSearchParameter",
      "Range" => "Range",
      "RelatedToQuerySearchParameter" => "RelatedToQuerySearchParameter",
      "RelatedToUrlSearchParameter" => "RelatedToUrlSearchParameter",
      "SearchParameter" => "SearchParameter",
      "SearchVolumeDeltaSearchParameter" => "SearchVolumeDeltaSearchParameter",
      "SearchVolumeSearchParameter" => "SearchVolumeSearchParameter",
      "SeedAdGroupIdSearchParameter" => "SeedAdGroupIdSearchParameter",
      "StringAttribute" => "StringAttribute",
      "TargetingIdea" => "TargetingIdea",
      "TargetingIdeaError" => "TargetingIdeaError",
      "TargetingIdeaPage" => "TargetingIdeaPage",
      "TargetingIdeaSelector" => "TargetingIdeaSelector",
      "TextAdSpec" => "TextAdSpec",
      "TrafficEstimatorError" => "TrafficEstimatorError",
      "Type_AttributeMapEntry" => "Type_AttributeMapEntry",
      "WebpageDescriptor" => "WebpageDescriptor",
      "WebpageDescriptorAttribute" => "WebpageDescriptorAttribute",
      "AttributeType" => "AttributeType",
      "CompetitionSearchParameter.Level" => "CompetitionSearchParameterLevel",
      "CurrencyCodeError.Reason" => "CurrencyCodeErrorReason",
      "DisplayAdSpec.ActivationOption" => "DisplayAdSpecActivationOption",
      "HtmlDisplayType.HtmlOption" => "HtmlDisplayTypeHtmlOption",
      "IdeaType" => "IdeaType",
      "InStreamAdSpec.InStreamType" => "InStreamAdSpecInStreamType",
      "MatchesRegexError.Reason" => "MatchesRegexErrorReason",
      "OpportunityIdeaType" => "OpportunityIdeaType",
      "RequestType" => "RequestType",
      "SiteConstants.AdFormat" => "SiteConstantsAdFormat",
      "SiteConstants.PlacementType" => "SiteConstantsPlacementType",
      "TargetingIdeaError.Reason" => "TargetingIdeaErrorReason",
      "TrafficEstimatorError.Reason" => "TrafficEstimatorErrorReason",
      "get" => "TargetingIdeaServiceGet",
      "getResponse" => "TargetingIdeaServiceGetResponse",
      "getBulkKeywordIdeas" => "GetBulkKeywordIdeas",
      "getBulkKeywordIdeasResponse" => "GetBulkKeywordIdeasResponse",
    );


    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user) {
      $options["classmap"] = self::$classmap;
      parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns a page of ideas that match the query described by the specified
     * {@link TargetingIdeaSelector}.
     * 
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
     * less.  Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.
     * 
     * <p>Only a relatively small total number of results will be available through this method.
     * Much larger result sets may be available using
     * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
     * selector options.
     * 
     * @param selector Query describing the types of results to return when
     * finding matches (similar keyword ideas/placement ideas).
     * @return A {@link TargetingIdeaPage} of results, that is a subset of the
     * list of possible ideas meeting the criteria of the
     * {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function get($selector) {
      $args = new TargetingIdeaServiceGet($selector);
      $result = $this->__soapCall("get", array($args));
      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns a page of ideas that match the query described by the specified
     * {@link TargetingIdeaSelector}.  This method is specialized for returning
     * bulk keyword ideas, and thus the selector must be set for
     * {@link com.google.ads.api.services.targetingideas.attributes.RequestType#IDEAS} and
     * {@link com.google.ads.api.services.common.optimization.attributes.IdeaType#KEYWORD}.
     * A limited, fixed set of attributes will be returned.
     * 
     * <p>A single-valued
     * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter}
     * must be supplied.  Single-valued
     * {@link com.google.ads.api.services.targetingideas.search.LanguageSearchParameter} and
     * {@link com.google.ads.api.services.targetingideas.search.LocationSearchParameter} are
     * both optional.  Other search parameters compatible with a keyword query may also be
     * supplied.
     * 
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800
     * or less. If a URL based search is performed it will return up to 100 keywords when the site is
     * not owned, or up to 800 if it is. Number of keywords returned on a keyword based search is up
     * to 800. Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.
     * 
     * <p>This method can make many more results available than {@link #get(TargetingIdeaSelector)},
     * but allows less control over the query. For fine-tuned queries that do not need large numbers
     * of results, prefer {@link #get(TargetingIdeaSelector)}.
     * 
     * @param selector Query describing the bulk keyword ideas to return.
     * @return A {@link TargetingIdeaPage} of results, that is a subset of the
     * list of possible ideas meeting the criteria of the
     * {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function getBulkKeywordIdeas($selector) {
      $args = new GetBulkKeywordIdeas($selector);
      $result = $this->__soapCall("getBulkKeywordIdeas", array($args));
      return $result->rval;
    }
  }
}