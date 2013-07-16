<?php
/**
 * Contains all client objects for the VideoCampaignCriterionService service.
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @subpackage awfv
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

/** Required classes. **/
require_once dirname(__FILE__) . "/../Lib/AdWordsSoapClient.php";

if (!class_exists("Paging", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Paging {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Paging";
  }

  public function __construct($startIndex = NULL, $numberResults = NULL) {
    $this->startIndex = $startIndex;
    $this->numberResults = $numberResults;
  }
}}

if (!class_exists("PolicyViolationErrorPart", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class PolicyViolationErrorPart {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PolicyViolationError.Part";
  }

  public function __construct($index = NULL, $length = NULL) {
    $this->index = $index;
    $this->length = $length;
  }
}}

if (!class_exists("PolicyViolationKey", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class PolicyViolationKey {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PolicyViolationKey";
  }

  public function __construct($policyName = NULL, $violatingText = NULL) {
    $this->policyName = $policyName;
    $this->violatingText = $violatingText;
  }
}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SoapRequestHeader {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapHeader";
  }

  public function __construct($authToken = NULL, $clientCustomerId = NULL, $developerToken = NULL, $userAgent = NULL, $validateOnly = NULL, $partialFailure = NULL) {
    $this->authToken = $authToken;
    $this->clientCustomerId = $clientCustomerId;
    $this->developerToken = $developerToken;
    $this->userAgent = $userAgent;
    $this->validateOnly = $validateOnly;
    $this->partialFailure = $partialFailure;
  }
}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SoapResponseHeader {
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
   * @access public
   * @var integer
   */
  public $units;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SoapResponseHeader";
  }

  public function __construct($requestId = NULL, $serviceName = NULL, $methodName = NULL, $operations = NULL, $responseTime = NULL, $units = NULL) {
    $this->requestId = $requestId;
    $this->serviceName = $serviceName;
    $this->methodName = $methodName;
    $this->operations = $operations;
    $this->responseTime = $responseTime;
    $this->units = $units;
  }
}}

if (!class_exists("ComparableValue", FALSE)) {
/**
 * Indicates that this instance is a subtype of ComparableValue.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ComparableValue {
  /**
   * @access public
   * @var string
   */
  public $ComparableValueType;

  private $_parameterMap = array (
    "ComparableValue.Type" => "ComparableValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ComparableValue";
  }

  public function __construct($ComparableValueType = NULL) {
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("ListReturnValue", FALSE)) {
/**
 * Indicates that this instance is a subtype of ListReturnValue.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ListReturnValue {
  /**
   * @access public
   * @var string
   */
  public $ListReturnValueType;

  private $_parameterMap = array (
    "ListReturnValue.Type" => "ListReturnValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ListReturnValue";
  }

  public function __construct($ListReturnValueType = NULL) {
    $this->ListReturnValueType = $ListReturnValueType;
  }
}}

if (!class_exists("Operation", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Operation {
  /**
   * @access public
   * @var tnsOperator
   */
  public $operator;

  /**
   * @access public
   * @var string
   */
  public $OperationType;

  private $_parameterMap = array (
    "Operation.Type" => "OperationType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Operation";
  }

  public function __construct($operator = NULL, $OperationType = NULL) {
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("Page", FALSE)) {
/**
 * Indicates that this instance is a subtype of Page.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Page {
  /**
   * @access public
   * @var integer
   */
  public $totalNumEntries;

  /**
   * @access public
   * @var string
   */
  public $PageType;

  private $_parameterMap = array (
    "Page.Type" => "PageType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Page";
  }

  public function __construct($totalNumEntries = NULL, $PageType = NULL) {
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }
}}

if (!class_exists("ApiError", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ApiError {
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

  private $_parameterMap = array (
    "ApiError.Type" => "ApiErrorType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiError";
  }

  public function __construct($fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Indicates that this instance is a subtype of ApplicationException.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ApplicationException {
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

  private $_parameterMap = array (
    "ApplicationException.Type" => "ApplicationExceptionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApplicationException";
  }

  public function __construct($message = NULL, $ApplicationExceptionType = NULL) {
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AuthorizationErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AuthorizationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthorizationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("BetaErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class BetaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BetaError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ClientTermsErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ClientTermsErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClientTermsError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CollectionSizeErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class CollectionSizeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CollectionSizeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CurrencyCodeErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class CurrencyCodeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CurrencyCodeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DatabaseErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DatabaseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DatabaseError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DateErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DateErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("DistinctErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DistinctErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DistinctError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("IdErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class IdErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IdError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("MatchesRegexErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class MatchesRegexErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MatchesRegexError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NotEmptyErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NotEmptyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotEmptyError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NotWhitelistedErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NotWhitelistedErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotWhitelistedError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NullErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("Operator", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Operator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Operator";
  }

  public function __construct() {
  }
}}

if (!class_exists("OperatorErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class OperatorErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperatorError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("QuotaCheckErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class QuotaCheckErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaCheckError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RangeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RateExceededErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RateExceededErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RateExceededError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ReadOnlyErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ReadOnlyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReadOnlyError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RegionCodeErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RegionCodeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RegionCodeError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RejectedErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RejectedErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RejectedError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequestErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RequestErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequestError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RequiredErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("SelectorErrorReason", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SelectorErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SelectorError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("SizeLimitErrorReason", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 *
 *
 *
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SizeLimitErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SizeLimitError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class StringLengthErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringLengthError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AccessError", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AccessError extends ApiError {
  /**
   * @access public
   * @var tnsAccessErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AccessError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("AdsApiError", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AdsApiError extends ApiError {
  /**
   * @access public
   * @var tnsAdsApiErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdsApiError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("BaseCriterion", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET, REMOVE.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class BaseCriterion {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $BaseCriterionType;

  private $_parameterMap = array (
    "BaseCriterion.Type" => "BaseCriterionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseCriterion";
  }

  public function __construct($id = NULL, $BaseCriterionType = NULL) {
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("CampaignKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class CampaignKey {
  /**
   * @access public
   * @var string
   */
  public $campaignName;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CampaignKey";
  }

  public function __construct($campaignName = NULL) {
    $this->campaignName = $campaignName;
  }
}}

if (!class_exists("Channel", FALSE)) {
/**
 * <span class="constraint ReadOnly">This field is read only and should not be set.  If this field is sent to the API, it will be ignored.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Channel extends BaseCriterion {
  /**
   * @access public
   * @var string
   */
  public $userName;

  /**
   * @access public
   * @var string
   */
  public $userId;

  /**
   * @access public
   * @var string
   */
  public $publicName;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Channel";
  }

  public function __construct($userName = NULL, $userId = NULL, $publicName = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->userName = $userName;
    $this->userId = $userId;
    $this->publicName = $publicName;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("ContentCategoryLabel", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ContentCategoryLabel extends BaseCriterion {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ContentCategoryLabel";
  }

  public function __construct($id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("CountryKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class CountryKey {
  /**
   * @access public
   * @var integer
   */
  public $criterionId;

  /**
   * @access public
   * @var tnsRegionCode
   */
  public $regionCode;

  /**
   * @access public
   * @var string
   */
  public $countryName;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CountryKey";
  }

  public function __construct($criterionId = NULL, $regionCode = NULL, $countryName = NULL) {
    $this->criterionId = $criterionId;
    $this->regionCode = $regionCode;
    $this->countryName = $countryName;
  }
}}

if (!class_exists("DateKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DateKey {
  /**
   * @access public
   * @var string
   */
  public $date;

  /**
   * @access public
   * @var tnsSegmentationDimension
   */
  public $dimension;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateKey";
  }

  public function __construct($date = NULL, $dimension = NULL) {
    $this->date = $date;
    $this->dimension = $dimension;
  }
}}

if (!class_exists("DayOfWeekKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DayOfWeekKey {
  /**
   * @access public
   * @var tnsDayOfWeek
   */
  public $dayOfWeek;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayOfWeekKey";
  }

  public function __construct($dayOfWeek = NULL) {
    $this->dayOfWeek = $dayOfWeek;
  }
}}

if (!class_exists("DeviceKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DeviceKey {
  /**
   * @access public
   * @var tnsDeviceKeyDeviceType
   */
  public $deviceType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeviceKey";
  }

  public function __construct($deviceType = NULL) {
    $this->deviceType = $deviceType;
  }
}}

if (!class_exists("DisplayFormatKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DisplayFormatKey {
  /**
   * @access public
   * @var tnsVideoAdDisplayFormat
   */
  public $displayFormat;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DisplayFormatKey";
  }

  public function __construct($displayFormat = NULL) {
    $this->displayFormat = $displayFormat;
  }
}}

if (!class_exists("DisplayFormatNetworkKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DisplayFormatNetworkKey {
  /**
   * @access public
   * @var tnsVideoAdDisplayFormat
   */
  public $format;

  /**
   * @access public
   * @var tnsVideoAdNetwork
   */
  public $network;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DisplayFormatNetworkKey";
  }

  public function __construct($format = NULL, $network = NULL) {
    $this->format = $format;
    $this->network = $network;
  }
}}

if (!class_exists("DisplayFormatTypeKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DisplayFormatTypeKey {
  /**
   * @access public
   * @var tnsVideoAdDisplayFormatType
   */
  public $displayFormatType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DisplayFormatTypeKey";
  }

  public function __construct($displayFormatType = NULL) {
    $this->displayFormatType = $displayFormatType;
  }
}}

if (!class_exists("EntityNotFoundError", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class EntityNotFoundError extends ApiError {
  /**
   * @access public
   * @var tnsEntityNotFoundErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityNotFoundError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("GeoKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class GeoKey {
  /**
   * @access public
   * @var CountryKey
   */
  public $CountryKey;

  /**
   * @access public
   * @var MetroKey
   */
  public $MetroKey;

  /**
   * @access public
   * @var RegionKey
   */
  public $RegionKey;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "GeoKey";
  }

  public function __construct($CountryKey = NULL, $MetroKey = NULL, $RegionKey = NULL) {
    $this->CountryKey = $CountryKey;
    $this->MetroKey = $MetroKey;
    $this->RegionKey = $RegionKey;
  }
}}

if (!class_exists("HourOfDayKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class HourOfDayKey {
  /**
   * @access public
   * @var integer
   */
  public $hourOfDay;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "HourOfDayKey";
  }

  public function __construct($hourOfDay = NULL) {
    $this->hourOfDay = $hourOfDay;
  }
}}

if (!class_exists("Integer_LongMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Integer
 * and value of type Long.
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Integer_LongMapEntry {
  /**
   * @access public
   * @var integer
   */
  public $key;

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
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Integer_LongMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("BaseKeyword", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class BaseKeyword extends BaseCriterion {
  /**
   * @access public
   * @var string
   */
  public $text;

  /**
   * @access public
   * @var tnsBaseKeywordMatchType
   */
  public $matchType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseKeyword";
  }

  public function __construct($text = NULL, $matchType = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->text = $text;
    $this->matchType = $matchType;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("LanguageVideoCriterion", FALSE)) {
/**
 * <span class="constraint ReadOnly">This field is read only and should not be set.  If this field is sent to the API, it will be ignored.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class LanguageVideoCriterion extends BaseCriterion {
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
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LanguageVideoCriterion";
  }

  public function __construct($code = NULL, $name = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->code = $code;
    $this->name = $name;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("LocationVideoCriterion", FALSE)) {
/**
 * <span class="constraint ReadOnly">This field is read only and should not be set.  If this field is sent to the API, it will be ignored.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class LocationVideoCriterion extends BaseCriterion {
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
   * @var boolean
   */
  public $isObsolete;

  /**
   * @access public
   * @var LocationVideoCriterion[]
   */
  public $parentLocations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LocationVideoCriterion";
  }

  public function __construct($locationName = NULL, $displayType = NULL, $isObsolete = NULL, $parentLocations = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->locationName = $locationName;
    $this->displayType = $displayType;
    $this->isObsolete = $isObsolete;
    $this->parentLocations = $parentLocations;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("MetroKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class MetroKey {
  /**
   * @access public
   * @var integer
   */
  public $criterionId;

  /**
   * @access public
   * @var string
   */
  public $metroCode;

  /**
   * @access public
   * @var string
   */
  public $metroName;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MetroKey";
  }

  public function __construct($criterionId = NULL, $metroCode = NULL, $metroName = NULL) {
    $this->criterionId = $criterionId;
    $this->metroCode = $metroCode;
    $this->metroName = $metroName;
  }
}}

if (!class_exists("NetworkKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NetworkKey {
  /**
   * @access public
   * @var tnsVideoAdNetwork
   */
  public $network;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NetworkKey";
  }

  public function __construct($network = NULL) {
    $this->network = $network;
  }
}}

if (!class_exists("PaidViewsKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class PaidViewsKey {
  /**
   * @access public
   * @var boolean
   */
  public $paidViews;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PaidViewsKey";
  }

  public function __construct($paidViews = NULL) {
    $this->paidViews = $paidViews;
  }
}}

if (!class_exists("RegionKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RegionKey {
  /**
   * @access public
   * @var integer
   */
  public $criterionId;

  /**
   * @access public
   * @var string
   */
  public $regionCode;

  /**
   * @access public
   * @var string
   */
  public $regionName;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RegionKey";
  }

  public function __construct($criterionId = NULL, $regionCode = NULL, $regionName = NULL) {
    $this->criterionId = $criterionId;
    $this->regionCode = $regionCode;
    $this->regionName = $regionName;
  }
}}

if (!class_exists("ReportError", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ReportError extends ApiError {
  /**
   * @access public
   * @var tnsReportErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReportError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RunOfYoutube", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RunOfYoutube extends BaseCriterion {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RunOfYoutube";
  }

  public function __construct($id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("SearchKeyword", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SearchKeyword extends BaseKeyword {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SearchKeyword";
  }

  public function __construct($text = NULL, $matchType = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->text = $text;
    $this->matchType = $matchType;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("SegmentKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SegmentKey {
  /**
   * @access public
   * @var CampaignKey
   */
  public $CampaignKey;

  /**
   * @access public
   * @var CountryKey
   */
  public $CountryKey;

  /**
   * @access public
   * @var DateKey
   */
  public $DateKey;

  /**
   * @access public
   * @var DayOfWeekKey
   */
  public $DayOfWeekKey;

  /**
   * @access public
   * @var DeviceKey
   */
  public $DeviceKey;

  /**
   * @access public
   * @var DisplayFormatKey
   */
  public $DisplayFormatKey;

  /**
   * @access public
   * @var DisplayFormatNetworkKey
   */
  public $DisplayFormatNetworkKey;

  /**
   * @access public
   * @var DisplayFormatTypeKey
   */
  public $DisplayFormatTypeKey;

  /**
   * @access public
   * @var GeoKey
   */
  public $GeoKey;

  /**
   * @access public
   * @var HourOfDayKey
   */
  public $HourOfDayKey;

  /**
   * @access public
   * @var MetroKey
   */
  public $MetroKey;

  /**
   * @access public
   * @var NetworkKey
   */
  public $NetworkKey;

  /**
   * @access public
   * @var PaidViewsKey
   */
  public $PaidViewsKey;

  /**
   * @access public
   * @var RegionKey
   */
  public $RegionKey;

  /**
   * @access public
   * @var TargetingGroupKey
   */
  public $TargetingGroupKey;

  /**
   * @access public
   * @var VideoAdKey
   */
  public $VideoAdKey;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SegmentKey";
  }

  public function __construct($CampaignKey = NULL, $CountryKey = NULL, $DateKey = NULL, $DayOfWeekKey = NULL, $DeviceKey = NULL, $DisplayFormatKey = NULL, $DisplayFormatNetworkKey = NULL, $DisplayFormatTypeKey = NULL, $GeoKey = NULL, $HourOfDayKey = NULL, $MetroKey = NULL, $NetworkKey = NULL, $PaidViewsKey = NULL, $RegionKey = NULL, $TargetingGroupKey = NULL, $VideoAdKey = NULL) {
    $this->CampaignKey = $CampaignKey;
    $this->CountryKey = $CountryKey;
    $this->DateKey = $DateKey;
    $this->DayOfWeekKey = $DayOfWeekKey;
    $this->DeviceKey = $DeviceKey;
    $this->DisplayFormatKey = $DisplayFormatKey;
    $this->DisplayFormatNetworkKey = $DisplayFormatNetworkKey;
    $this->DisplayFormatTypeKey = $DisplayFormatTypeKey;
    $this->GeoKey = $GeoKey;
    $this->HourOfDayKey = $HourOfDayKey;
    $this->MetroKey = $MetroKey;
    $this->NetworkKey = $NetworkKey;
    $this->PaidViewsKey = $PaidViewsKey;
    $this->RegionKey = $RegionKey;
    $this->TargetingGroupKey = $TargetingGroupKey;
    $this->VideoAdKey = $VideoAdKey;
  }
}}

if (!class_exists("SegmentationError", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SegmentationError extends ApiError {
  /**
   * @access public
   * @var tnsSegmentationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SegmentationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Sortable", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Sortable {
  /**
   * @access public
   * @var tnsStatsSortable
   */
  public $StatsSortable;

  /**
   * @access public
   * @var tnsVideoCampaignCriterionSortable
   */
  public $VideoCampaignCriterionSortable;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Sortable";
  }

  public function __construct($StatsSortable = NULL, $VideoCampaignCriterionSortable = NULL) {
    $this->StatsSortable = $StatsSortable;
    $this->VideoCampaignCriterionSortable = $VideoCampaignCriterionSortable;
  }
}}

if (!class_exists("Sorting", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Sorting {
  /**
   * @access public
   * @var Sortable
   */
  public $field;

  /**
   * @access public
   * @var tnsSortOrder
   */
  public $sortOrder;

  /**
   * @access public
   * @var Sortable[]
   */
  public $fields;

  /**
   * @access public
   * @var tnsSortOrder[]
   */
  public $sortOrders;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Sorting";
  }

  public function __construct($field = NULL, $sortOrder = NULL, $fields = NULL, $sortOrders = NULL) {
    $this->field = $field;
    $this->sortOrder = $sortOrder;
    $this->fields = $fields;
    $this->sortOrders = $sortOrders;
  }
}}

if (!class_exists("SortingError", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SortingError extends ApiError {
  /**
   * @access public
   * @var tnsSortingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SortingError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("VideoEntityStats", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoEntityStats {
  /**
   * @access public
   * @var tnsVideoEntityStatsSummaryType
   */
  public $summaryType;

  /**
   * @access public
   * @var SegmentKey
   */
  public $segmentKey;

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
   * @var integer
   */
  public $views;

  /**
   * @access public
   * @var Money
   */
  public $cost;

  /**
   * @access public
   * @var Money
   */
  public $averageCpc;

  /**
   * @access public
   * @var Money
   */
  public $averageCpv;

  /**
   * @access public
   * @var Money
   */
  public $averageCpm;

  /**
   * @access public
   * @var Integer_LongMapEntry[]
   */
  public $impressionReachFrequencies;

  /**
   * @access public
   * @var double
   */
  public $averageImpressionFrequency;

  /**
   * @access public
   * @var double
   */
  public $averageViewFrequency;

  /**
   * @access public
   * @var integer
   */
  public $uniqueViews;

  /**
   * @access public
   * @var integer
   */
  public $thumbnailImpressions;

  /**
   * @access public
   * @var integer
   */
  public $videoImpressions;

  /**
   * @access public
   * @var integer
   */
  public $totalImpressions;

  /**
   * @access public
   * @var integer
   */
  public $websiteClicks;

  /**
   * @access public
   * @var integer
   */
  public $conversions;

  /**
   * @access public
   * @var Money
   */
  public $costPerConversion;

  /**
   * @access public
   * @var double
   */
  public $conversionRate;

  /**
   * @access public
   * @var integer
   */
  public $viewThroughConversions;

  /**
   * @access public
   * @var integer
   */
  public $conversionsManyPerView;

  /**
   * @access public
   * @var Money
   */
  public $costPerConversionManyPerView;

  /**
   * @access public
   * @var double
   */
  public $conversionRateManyPerView;

  /**
   * @access public
   * @var double
   */
  public $totalConversionValue;

  /**
   * @access public
   * @var double
   */
  public $valuePerConv;

  /**
   * @access public
   * @var double
   */
  public $valuePerConvManyPerView;

  /**
   * @access public
   * @var integer
   */
  public $followOnViews;

  /**
   * @access public
   * @var double
   */
  public $followOnViewRate;

  /**
   * @access public
   * @var integer
   */
  public $followOnSubscribes;

  /**
   * @access public
   * @var double
   */
  public $followOnSubscribeRate;

  /**
   * @access public
   * @var double
   */
  public $ctr;

  /**
   * @access public
   * @var double
   */
  public $vtr;

  /**
   * @access public
   * @var integer
   */
  public $videoStarts;

  /**
   * @access public
   * @var integer
   */
  public $quartile25s;

  /**
   * @access public
   * @var integer
   */
  public $quartile50s;

  /**
   * @access public
   * @var integer
   */
  public $quartile75s;

  /**
   * @access public
   * @var integer
   */
  public $quartile100s;

  /**
   * @access public
   * @var double
   */
  public $quartile25Percents;

  /**
   * @access public
   * @var double
   */
  public $quartile50Percents;

  /**
   * @access public
   * @var double
   */
  public $quartile75Percents;

  /**
   * @access public
   * @var double
   */
  public $quartile100Percents;

  /**
   * @access public
   * @var double
   */
  public $percentServed;

  /**
   * @access public
   * @var integer
   */
  public $eligibleFollowOnClicks;

  /**
   * @access public
   * @var double
   */
  public $engagementScore;

  /**
   * @access public
   * @var double
   */
  public $retentionScore;

  /**
   * @access public
   * @var integer
   */
  public $totalViews;

  /**
   * @access public
   * @var integer
   */
  public $ctaImpressions;

  /**
   * @access public
   * @var integer
   */
  public $ctaClicks;

  /**
   * @access public
   * @var double
   */
  public $ctaCtr;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoEntityStats";
  }

  public function __construct($summaryType = NULL, $segmentKey = NULL, $startDate = NULL, $endDate = NULL, $views = NULL, $cost = NULL, $averageCpc = NULL, $averageCpv = NULL, $averageCpm = NULL, $impressionReachFrequencies = NULL, $averageImpressionFrequency = NULL, $averageViewFrequency = NULL, $uniqueViews = NULL, $thumbnailImpressions = NULL, $videoImpressions = NULL, $totalImpressions = NULL, $websiteClicks = NULL, $conversions = NULL, $costPerConversion = NULL, $conversionRate = NULL, $viewThroughConversions = NULL, $conversionsManyPerView = NULL, $costPerConversionManyPerView = NULL, $conversionRateManyPerView = NULL, $totalConversionValue = NULL, $valuePerConv = NULL, $valuePerConvManyPerView = NULL, $followOnViews = NULL, $followOnViewRate = NULL, $followOnSubscribes = NULL, $followOnSubscribeRate = NULL, $ctr = NULL, $vtr = NULL, $videoStarts = NULL, $quartile25s = NULL, $quartile50s = NULL, $quartile75s = NULL, $quartile100s = NULL, $quartile25Percents = NULL, $quartile50Percents = NULL, $quartile75Percents = NULL, $quartile100Percents = NULL, $percentServed = NULL, $eligibleFollowOnClicks = NULL, $engagementScore = NULL, $retentionScore = NULL, $totalViews = NULL, $ctaImpressions = NULL, $ctaClicks = NULL, $ctaCtr = NULL) {
    $this->summaryType = $summaryType;
    $this->segmentKey = $segmentKey;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->views = $views;
    $this->cost = $cost;
    $this->averageCpc = $averageCpc;
    $this->averageCpv = $averageCpv;
    $this->averageCpm = $averageCpm;
    $this->impressionReachFrequencies = $impressionReachFrequencies;
    $this->averageImpressionFrequency = $averageImpressionFrequency;
    $this->averageViewFrequency = $averageViewFrequency;
    $this->uniqueViews = $uniqueViews;
    $this->thumbnailImpressions = $thumbnailImpressions;
    $this->videoImpressions = $videoImpressions;
    $this->totalImpressions = $totalImpressions;
    $this->websiteClicks = $websiteClicks;
    $this->conversions = $conversions;
    $this->costPerConversion = $costPerConversion;
    $this->conversionRate = $conversionRate;
    $this->viewThroughConversions = $viewThroughConversions;
    $this->conversionsManyPerView = $conversionsManyPerView;
    $this->costPerConversionManyPerView = $costPerConversionManyPerView;
    $this->conversionRateManyPerView = $conversionRateManyPerView;
    $this->totalConversionValue = $totalConversionValue;
    $this->valuePerConv = $valuePerConv;
    $this->valuePerConvManyPerView = $valuePerConvManyPerView;
    $this->followOnViews = $followOnViews;
    $this->followOnViewRate = $followOnViewRate;
    $this->followOnSubscribes = $followOnSubscribes;
    $this->followOnSubscribeRate = $followOnSubscribeRate;
    $this->ctr = $ctr;
    $this->vtr = $vtr;
    $this->videoStarts = $videoStarts;
    $this->quartile25s = $quartile25s;
    $this->quartile50s = $quartile50s;
    $this->quartile75s = $quartile75s;
    $this->quartile100s = $quartile100s;
    $this->quartile25Percents = $quartile25Percents;
    $this->quartile50Percents = $quartile50Percents;
    $this->quartile75Percents = $quartile75Percents;
    $this->quartile100Percents = $quartile100Percents;
    $this->percentServed = $percentServed;
    $this->eligibleFollowOnClicks = $eligibleFollowOnClicks;
    $this->engagementScore = $engagementScore;
    $this->retentionScore = $retentionScore;
    $this->totalViews = $totalViews;
    $this->ctaImpressions = $ctaImpressions;
    $this->ctaClicks = $ctaClicks;
    $this->ctaCtr = $ctaCtr;
  }
}}

if (!class_exists("TargetingGroupCriterionError", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class TargetingGroupCriterionError extends ApiError {
  /**
   * @access public
   * @var tnsTargetingGroupCriterionErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("TargetingGroupInfo", FALSE)) {
/**
 * <span class="constraint ReadOnly">This field is read only and should not be set.  If this field is sent to the API, it will be ignored.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class TargetingGroupInfo {
  /**
   * @access public
   * @var integer
   */
  public $id;

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
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupInfo";
  }

  public function __construct($id = NULL, $name = NULL) {
    $this->id = $id;
    $this->name = $name;
  }
}}

if (!class_exists("TargetingGroupKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class TargetingGroupKey {
  /**
   * @access public
   * @var integer
   */
  public $targetingGroupId;

  /**
   * @access public
   * @var string
   */
  public $targetingGroupName;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupKey";
  }

  public function __construct($targetingGroupId = NULL, $targetingGroupName = NULL) {
    $this->targetingGroupId = $targetingGroupId;
    $this->targetingGroupName = $targetingGroupName;
  }
}}

if (!class_exists("Topic", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Topic extends BaseCriterion {
  /**
   * @access public
   * @var integer
   */
  public $verticalId;

  /**
   * @access public
   * @var string[]
   */
  public $verticalPath;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Topic";
  }

  public function __construct($verticalId = NULL, $verticalPath = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->verticalId = $verticalId;
    $this->verticalPath = $verticalPath;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("VideoAdKey", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoAdKey {
  /**
   * @access public
   * @var string
   */
  public $videoAdName;

  /**
   * @access public
   * @var integer
   */
  public $videoAdId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoAdKey";
  }

  public function __construct($videoAdName = NULL, $videoAdId = NULL) {
    $this->videoAdName = $videoAdName;
    $this->videoAdId = $videoAdId;
  }
}}

if (!class_exists("VideoCampaignCriterion", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterion {
  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var BaseCriterion
   */
  public $criterion;

  /**
   * @access public
   * @var string
   */
  public $VideoCampaignCriterionType;

  private $_parameterMap = array (
    "VideoCampaignCriterion.Type" => "VideoCampaignCriterionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get.
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!array_key_exists($var, $this->_parameterMap)) {
      return NULL;
    } else {
      return $this->{$this->_parameterMap[$var]};
    }
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
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignCriterion";
  }

  public function __construct($campaignId = NULL, $criterion = NULL, $VideoCampaignCriterionType = NULL) {
    $this->campaignId = $campaignId;
    $this->criterion = $criterion;
    $this->VideoCampaignCriterionType = $VideoCampaignCriterionType;
  }
}}

if (!class_exists("VideoCampaignCriterionError", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionError extends ApiError {
  /**
   * @access public
   * @var tnsVideoCampaignCriterionErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignCriterionError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("VideoCampaignCriterionOperation", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionOperation extends Operation {
  /**
   * @access public
   * @var VideoCampaignCriterion
   */
  public $operand;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignCriterionOperation";
  }

  public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("VideoCampaignCriterionPage", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionPage extends Page {
  /**
   * @access public
   * @var VideoCampaignCriterion[]
   */
  public $entries;

  /**
   * @access public
   * @var VideoEntityStats[]
   */
  public $summaryStats;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignCriterionPage";
  }

  public function __construct($entries = NULL, $summaryStats = NULL, $totalNumEntries = NULL, $PageType = NULL) {
    parent::__construct();
    $this->entries = $entries;
    $this->summaryStats = $summaryStats;
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }
}}

if (!class_exists("VideoCampaignCriterionReturnValue", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionReturnValue extends ListReturnValue {
  /**
   * @access public
   * @var VideoCampaignCriterion[]
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignCriterionReturnValue";
  }

  public function __construct($value = NULL, $ListReturnValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ListReturnValueType = $ListReturnValueType;
  }
}}

if (!class_exists("VideoCampaignCriterionSelector", FALSE)) {
/**
 * <span class="constraint ContentsDistinct">This field must contain distinct elements.</span>
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionSelector {
  /**
   * @access public
   * @var integer[]
   */
  public $campaignIds;

  /**
   * @access public
   * @var tnsBaseCriterionType[]
   */
  public $criterionTypes;

  /**
   * @access public
   * @var Sorting
   */
  public $sorting;

  /**
   * @access public
   * @var Paging
   */
  public $paging;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignCriterionSelector";
  }

  public function __construct($campaignIds = NULL, $criterionTypes = NULL, $sorting = NULL, $paging = NULL) {
    $this->campaignIds = $campaignIds;
    $this->criterionTypes = $criterionTypes;
    $this->sorting = $sorting;
    $this->paging = $paging;
  }
}}

if (!class_exists("VideoCampaignReportPage", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignReportPage extends Page {
  /**
   * @access public
   * @var ReportedVideoCampaignCriterion[]
   */
  public $entries;

  /**
   * @access public
   * @var VideoEntityStats[]
   */
  public $summaryStats;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignReportPage";
  }

  public function __construct($entries = NULL, $summaryStats = NULL, $totalNumEntries = NULL, $PageType = NULL) {
    parent::__construct();
    $this->entries = $entries;
    $this->summaryStats = $summaryStats;
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }
}}

if (!class_exists("VideoCriterion", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCriterion extends BaseCriterion {
  /**
   * @access public
   * @var string
   */
  public $videoId;

  /**
   * @access public
   * @var string
   */
  public $videoName;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCriterion";
  }

  public function __construct($videoId = NULL, $videoName = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->videoId = $videoId;
    $this->videoName = $videoName;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("WebSite", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class WebSite extends BaseCriterion {
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
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "WebSite";
  }

  public function __construct($url = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->url = $url;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("YouTubePlacement", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class YouTubePlacement extends BaseCriterion {
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
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "YouTubePlacement";
  }

  public function __construct($url = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->url = $url;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("AccessErrorReason", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AccessErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AccessError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdsApiErrorReason", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AdsApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdsApiError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AudienceAgeAgeRange", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AudienceAgeAgeRange {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceAge.AgeRange";
  }

  public function __construct() {
  }
}}

if (!class_exists("AudienceGenderGenderType", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AudienceGenderGenderType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceGender.GenderType";
  }

  public function __construct() {
  }
}}

if (!class_exists("BaseCriterionType", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class BaseCriterionType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseCriterion.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("DayOfWeek", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DayOfWeek {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DayOfWeek";
  }

  public function __construct() {
  }
}}

if (!class_exists("DeviceKeyDeviceType", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DeviceKeyDeviceType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DeviceKey.DeviceType";
  }

  public function __construct() {
  }
}}

if (!class_exists("EntityNotFoundErrorReason", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class EntityNotFoundErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityNotFoundError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("BaseKeywordMatchType", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class BaseKeywordMatchType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BaseKeyword.MatchType";
  }

  public function __construct() {
  }
}}

if (!class_exists("RegionCode", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RegionCode {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RegionCode";
  }

  public function __construct() {
  }
}}

if (!class_exists("ReportErrorReason", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ReportErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReportError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("SegmentationDimension", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SegmentationDimension {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SegmentationDimension";
  }

  public function __construct() {
  }
}}

if (!class_exists("SegmentationErrorReason", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SegmentationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SegmentationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("SortOrder", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SortOrder {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SortOrder";
  }

  public function __construct() {
  }
}}

if (!class_exists("SortingErrorReason", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SortingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SortingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoEntityStatsSummaryType", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoEntityStatsSummaryType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoEntityStats.SummaryType";
  }

  public function __construct() {
  }
}}

if (!class_exists("StatsSortable", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class StatsSortable {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatsSortable";
  }

  public function __construct() {
  }
}}

if (!class_exists("TargetingGroupCriterionErrorReason", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class TargetingGroupCriterionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoAdDisplayFormat", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoAdDisplayFormat {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoAdDisplayFormat";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoAdDisplayFormatType", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoAdDisplayFormatType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoAdDisplayFormat.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoAdNetwork", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoAdNetwork {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoAdNetwork";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoCampaignCriterionErrorReason", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignCriterionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoCampaignCriterionSortable", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionSortable {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoCampaignCriterionSortable";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoCampaignCriterionServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the list of campaign criteria that meet the selector criteria.
 *
 * @param selector Determines which campaign criteria to return.
 * @return A list of campaign criteria.
 * @throws ApiException if problems occurred while fetching data.
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionServiceGet {
  /**
   * @access public
   * @var VideoCampaignCriterionSelector
   */
  public $selector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($selector = NULL) {
    $this->selector = $selector;
  }
}}

if (!class_exists("VideoCampaignCriterionServiceGetResponse", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionServiceGetResponse {
  /**
   * @access public
   * @var VideoCampaignCriterionPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("VideoCampaignCriterionServiceMutate", FALSE)) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
 *
 *
 *
 * Adds or deletes campaign level criteria.
 * NOTE: CampaignCriterionOperation does not support the SET/UPDATE operator.
 *
 * @param operations A list of unique operations.
 * @return List of updated campaign criteria, in the same order as mutated.
 * @throws ApiException if problems occurred while updating targeting group criteria.
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionServiceMutate {
  /**
   * @access public
   * @var VideoCampaignCriterionOperation[]
   */
  public $operations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($operations = NULL) {
    $this->operations = $operations;
  }
}}

if (!class_exists("VideoCampaignCriterionServiceMutateResponse", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class VideoCampaignCriterionServiceMutateResponse {
  /**
   * @access public
   * @var VideoCampaignCriterionReturnValue
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AuthenticationError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthenticationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("AuthorizationError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AuthorizationError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AuthorizationError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("BetaError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class BetaError extends ApiError {
  /**
   * @access public
   * @var tnsBetaErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BetaError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("ClientTermsError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ClientTermsError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ClientTermsError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CollectionSizeError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class CollectionSizeError extends ApiError {
  /**
   * @access public
   * @var tnsCollectionSizeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CollectionSizeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CurrencyCodeError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class CurrencyCodeError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CurrencyCodeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DateError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DateError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DistinctError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DistinctError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DistinctError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("IdError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class IdError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "IdError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class InternalApiError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "InternalApiError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("MatchesRegexError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class MatchesRegexError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MatchesRegexError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("Money", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class Money extends ComparableValue {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Money";
  }

  public function __construct($microAmount = NULL, $ComparableValueType = NULL) {
    parent::__construct();
    $this->microAmount = $microAmount;
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("NotEmptyError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NotEmptyError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotEmptyError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("NotWhitelistedError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NotWhitelistedError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NotWhitelistedError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("NullError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NullError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NullError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("NumberValue", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NumberValue extends ComparableValue {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NumberValue";
  }

  public function __construct($ComparableValueType = NULL) {
    parent::__construct();
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("OperatorError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class OperatorError extends ApiError {
  /**
   * @access public
   * @var tnsOperatorErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperatorError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("QuotaCheckError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class QuotaCheckError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "QuotaCheckError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RangeError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RangeError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RangeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RateExceededError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RateExceededError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RateExceededError";
  }

  public function __construct($reason = NULL, $rateName = NULL, $rateScope = NULL, $retryAfterSeconds = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
}}

if (!class_exists("ReadOnlyError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ReadOnlyError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReadOnlyError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RegionCodeError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RegionCodeError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RegionCodeError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RejectedError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RejectedError extends ApiError {
  /**
   * @access public
   * @var tnsRejectedErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RejectedError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RequestError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RequestError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequestError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RequiredError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class RequiredError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "RequiredError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("SelectorError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SelectorError extends ApiError {
  /**
   * @access public
   * @var tnsSelectorErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SelectorError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("SizeLimitError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class SizeLimitError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SizeLimitError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("StringLengthError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class StringLengthError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StringLengthError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("DatabaseError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DatabaseError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DatabaseError";
  }

  public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("PolicyViolationError", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class PolicyViolationError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PolicyViolationError";
  }

  public function __construct($key = NULL, $externalPolicyName = NULL, $externalPolicyUrl = NULL, $externalPolicyDescription = NULL, $isExemptable = NULL, $violatingParts = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
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
}}

if (!class_exists("ApiException", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ApiException extends ApplicationException {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ApiException";
  }

  public function __construct($errors = NULL, $message = NULL, $ApplicationExceptionType = NULL) {
    parent::__construct();
    $this->errors = $errors;
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }
}}

if (!class_exists("AudienceAge", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AudienceAge extends BaseCriterion {
  /**
   * @access public
   * @var tnsAudienceAgeAgeRange
   */
  public $ageRange;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceAge";
  }

  public function __construct($ageRange = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->ageRange = $ageRange;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("AudienceGender", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AudienceGender extends BaseCriterion {
  /**
   * @access public
   * @var tnsAudienceGenderGenderType
   */
  public $genderType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceGender";
  }

  public function __construct($genderType = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->genderType = $genderType;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("AudienceInterest", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AudienceInterest extends BaseCriterion {
  /**
   * @access public
   * @var integer
   */
  public $interestId;

  /**
   * @access public
   * @var string[]
   */
  public $interestPath;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceInterest";
  }

  public function __construct($interestId = NULL, $interestPath = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->interestId = $interestId;
    $this->interestPath = $interestPath;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("AudienceUserList", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class AudienceUserList extends BaseCriterion {
  /**
   * @access public
   * @var integer
   */
  public $listId;

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
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AudienceUserList";
  }

  public function __construct($listId = NULL, $name = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->listId = $listId;
    $this->name = $name;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("ContentKeyword", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ContentKeyword extends BaseKeyword {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ContentKeyword";
  }

  public function __construct($text = NULL, $matchType = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->text = $text;
    $this->matchType = $matchType;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("GoogleKeyword", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class GoogleKeyword extends BaseKeyword {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "GoogleKeyword";
  }

  public function __construct($text = NULL, $matchType = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->text = $text;
    $this->matchType = $matchType;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("NegativeVideoCampaignCriterion", FALSE)) {
/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class NegativeVideoCampaignCriterion extends VideoCampaignCriterion {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NegativeVideoCampaignCriterion";
  }

  public function __construct($campaignId = NULL, $criterion = NULL, $VideoCampaignCriterionType = NULL) {
    parent::__construct();
    $this->campaignId = $campaignId;
    $this->criterion = $criterion;
    $this->VideoCampaignCriterionType = $VideoCampaignCriterionType;
  }
}}

if (!class_exists("ReportedVideoCampaignCriterion", FALSE)) {
/**
 * <span class="constraint ReadOnly">This field is read only and should not be set.  If this field is sent to the API, it will be ignored.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class ReportedVideoCampaignCriterion extends VideoCampaignCriterion {
  /**
   * @access public
   * @var TargetingGroupInfo[]
   */
  public $targetingGroups;

  /**
   * @access public
   * @var VideoEntityStats
   */
  public $stats;

  /**
   * @access public
   * @var VideoEntityStats[]
   */
  public $segmentedStats;

  /**
   * @access public
   * @var boolean
   */
  public $excluded;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReportedVideoCampaignCriterion";
  }

  public function __construct($targetingGroups = NULL, $stats = NULL, $segmentedStats = NULL, $excluded = NULL, $campaignId = NULL, $criterion = NULL, $VideoCampaignCriterionType = NULL) {
    parent::__construct();
    $this->targetingGroups = $targetingGroups;
    $this->stats = $stats;
    $this->segmentedStats = $segmentedStats;
    $this->excluded = $excluded;
    $this->campaignId = $campaignId;
    $this->criterion = $criterion;
    $this->VideoCampaignCriterionType = $VideoCampaignCriterionType;
  }
}}

if (!class_exists("DoubleValue", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class DoubleValue extends NumberValue {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DoubleValue";
  }

  public function __construct($number = NULL, $ComparableValueType = NULL) {
    parent::__construct();
    $this->number = $number;
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("LongValue", FALSE)) {
/**
 * <span class="constraint InRange">This field must be greater than or equal to 0.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 */
class LongValue extends NumberValue {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "LongValue";
  }

  public function __construct($number = NULL, $ComparableValueType = NULL) {
    parent::__construct();
    $this->number = $number;
    $this->ComparableValueType = $ComparableValueType;
  }
}}

if (!class_exists("VideoCampaignCriterionService", FALSE)) {
/**
 * VideoCampaignCriterionService
 * @package GoogleApiAdsAdWords
 * @subpackage awfv
 * @author WSDLInterpreter
 */
class VideoCampaignCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "VideoCampaignCriterionServiceGetResponse",
    "get" => "VideoCampaignCriterionServiceGet",
    "mutate" => "VideoCampaignCriterionServiceMutate",
    "mutateResponse" => "VideoCampaignCriterionServiceMutateResponse",
    "mutateCallToAction" => "VideoCampaignCriterionServiceMutateCallToAction",
    "search" => "VideoCampaignCriterionServiceSearch",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "Function" => "FeedFunction",
    "AuthenticationError" => "AuthenticationError",
    "ApiError" => "ApiError",
    "AuthorizationError" => "AuthorizationError",
    "BetaError" => "BetaError",
    "ClientTermsError" => "ClientTermsError",
    "CollectionSizeError" => "CollectionSizeError",
    "CurrencyCodeError" => "CurrencyCodeError",
    "DateError" => "DateError",
    "DistinctError" => "DistinctError",
    "DoubleValue" => "DoubleValue",
    "NumberValue" => "NumberValue",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "LongValue" => "LongValue",
    "MatchesRegexError" => "MatchesRegexError",
    "Money" => "Money",
    "ComparableValue" => "ComparableValue",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "OperatorError" => "OperatorError",
    "Paging" => "Paging",
    "PolicyViolationError.Part" => "PolicyViolationErrorPart",
    "PolicyViolationKey" => "PolicyViolationKey",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RegionCodeError" => "RegionCodeError",
    "RejectedError" => "RejectedError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "SelectorError" => "SelectorError",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StringLengthError" => "StringLengthError",
    "DatabaseError" => "DatabaseError",
    "ListReturnValue" => "ListReturnValue",
    "Operation" => "Operation",
    "Page" => "Page",
    "PolicyViolationError" => "PolicyViolationError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BetaError.Reason" => "BetaErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
    "CurrencyCodeError.Reason" => "CurrencyCodeErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "MatchesRegexError.Reason" => "MatchesRegexErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "Operator" => "Operator",
    "OperatorError.Reason" => "OperatorErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RegionCodeError.Reason" => "RegionCodeErrorReason",
    "RejectedError.Reason" => "RejectedErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SelectorError.Reason" => "SelectorErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "AccessError" => "AccessError",
    "AdsApiError" => "AdsApiError",
    "AudienceAge" => "AudienceAge",
    "BaseCriterion" => "BaseCriterion",
    "AudienceGender" => "AudienceGender",
    "AudienceInterest" => "AudienceInterest",
    "AudienceUserList" => "AudienceUserList",
    "CampaignKey" => "CampaignKey",
    "Channel" => "Channel",
    "ContentKeyword" => "ContentKeyword",
    "BaseKeyword" => "BaseKeyword",
    "ContentCategoryLabel" => "ContentCategoryLabel",
    "CountryKey" => "CountryKey",
    "DateKey" => "DateKey",
    "DayOfWeekKey" => "DayOfWeekKey",
    "DeviceKey" => "DeviceKey",
    "DisplayFormatKey" => "DisplayFormatKey",
    "DisplayFormatNetworkKey" => "DisplayFormatNetworkKey",
    "DisplayFormatTypeKey" => "DisplayFormatTypeKey",
    "EntityNotFoundError" => "EntityNotFoundError",
    "GeoKey" => "GeoKey",
    "GoogleKeyword" => "GoogleKeyword",
    "HourOfDayKey" => "HourOfDayKey",
    "Integer_LongMapEntry" => "Integer_LongMapEntry",
    "LanguageVideoCriterion" => "LanguageVideoCriterion",
    "LocationVideoCriterion" => "LocationVideoCriterion",
    "MetroKey" => "MetroKey",
    "NegativeVideoCampaignCriterion" => "NegativeVideoCampaignCriterion",
    "VideoCampaignCriterion" => "VideoCampaignCriterion",
    "NetworkKey" => "NetworkKey",
    "PaidViewsKey" => "PaidViewsKey",
    "RegionKey" => "RegionKey",
    "ReportError" => "ReportError",
    "ReportedVideoCampaignCriterion" => "ReportedVideoCampaignCriterion",
    "RunOfYoutube" => "RunOfYoutube",
    "SearchKeyword" => "SearchKeyword",
    "SegmentKey" => "SegmentKey",
    "SegmentationError" => "SegmentationError",
    "Sortable" => "Sortable",
    "Sorting" => "Sorting",
    "SortingError" => "SortingError",
    "VideoEntityStats" => "VideoEntityStats",
    "TargetingGroupCriterionError" => "TargetingGroupCriterionError",
    "TargetingGroupInfo" => "TargetingGroupInfo",
    "TargetingGroupKey" => "TargetingGroupKey",
    "Topic" => "Topic",
    "VideoAdKey" => "VideoAdKey",
    "VideoCampaignCriterionError" => "VideoCampaignCriterionError",
    "VideoCampaignCriterionOperation" => "VideoCampaignCriterionOperation",
    "VideoCampaignCriterionPage" => "VideoCampaignCriterionPage",
    "VideoCampaignCriterionReturnValue" => "VideoCampaignCriterionReturnValue",
    "VideoCampaignCriterionSelector" => "VideoCampaignCriterionSelector",
    "VideoCampaignReportPage" => "VideoCampaignReportPage",
    "VideoCriterion" => "VideoCriterion",
    "WebSite" => "WebSite",
    "YouTubePlacement" => "YouTubePlacement",
    "AccessError.Reason" => "AccessErrorReason",
    "AdsApiError.Reason" => "AdsApiErrorReason",
    "AudienceAge.AgeRange" => "AudienceAgeAgeRange",
    "AudienceGender.GenderType" => "AudienceGenderGenderType",
    "BaseCriterion.Type" => "BaseCriterionType",
    "DayOfWeek" => "DayOfWeek",
    "DeviceKey.DeviceType" => "DeviceKeyDeviceType",
    "EntityNotFoundError.Reason" => "EntityNotFoundErrorReason",
    "BaseKeyword.MatchType" => "BaseKeywordMatchType",
    "RegionCode" => "RegionCode",
    "ReportError.Reason" => "ReportErrorReason",
    "SegmentationDimension" => "SegmentationDimension",
    "SegmentationError.Reason" => "SegmentationErrorReason",
    "SortOrder" => "SortOrder",
    "SortingError.Reason" => "SortingErrorReason",
    "VideoEntityStats.SummaryType" => "VideoEntityStatsSummaryType",
    "StatsSortable" => "StatsSortable",
    "TargetingGroupCriterionError.Reason" => "TargetingGroupCriterionErrorReason",
    "VideoAdDisplayFormat" => "VideoAdDisplayFormat",
    "VideoAdDisplayFormat.Type" => "VideoAdDisplayFormatType",
    "VideoAdNetwork" => "VideoAdNetwork",
    "VideoCampaignCriterionError.Reason" => "VideoCampaignCriterionErrorReason",
    "VideoCampaignCriterionSortable" => "VideoCampaignCriterionSortable",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/video/v201209/VideoCampaignCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = VideoCampaignCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'VideoCampaignCriterionService', 'https://adwords.google.com/api/adwords/video/v201209');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of campaign criteria that meet the selector criteria.
   *
   * @param selector Determines which campaign criteria to return.
   * @return A list of campaign criteria.
   * @throws ApiException if problems occurred while fetching data.
   */
  public function get($selector) {
    $arg = new VideoCampaignCriterionServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   *
   *
   *
   * Adds or deletes campaign level criteria.
   * NOTE: CampaignCriterionOperation does not support the SET/UPDATE operator.
   *
   * @param operations A list of unique operations.
   * @return List of updated campaign criteria, in the same order as mutated.
   * @throws ApiException if problems occurred while updating targeting group criteria.
   */
  public function mutate($operations) {
    $arg = new VideoCampaignCriterionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


}}

