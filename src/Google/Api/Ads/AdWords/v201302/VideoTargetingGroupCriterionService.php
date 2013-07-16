<?php
/**
 * Contains all client objects for the VideoTargetingGroupCriterionService service.
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
 * @subpackage v201302
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

/** Required classes. **/
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("DateRange", FALSE)) {
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class DateRange {
  /**
   * @access public
   * @var string
   */
  public $min;

  /**
   * @access public
   * @var string
   */
  public $max;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "DateRange";
  }

  public function __construct($min = NULL, $max = NULL) {
    $this->min = $min;
    $this->max = $max;
  }
}}

if (!class_exists("Paging", FALSE)) {
/**
 * Specifies the page of results to return in the response. A page is specified
 * by the result position to start at and the maximum number of results to
 * return.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Points to a substring within an ad field or criterion.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Key of the violation. The key is used for referring to a violation when
 * filing an exemption request.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Defines the required and optional elements within the header of a SOAP request.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Defines the elements within the header of a SOAP response.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Comparable types for constructing ranges with.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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

if (!class_exists("ExemptionRequest", FALSE)) {
/**
 * A request to be exempted from a {@link PolicyViolationError}.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ExemptionRequest {
  /**
   * @access public
   * @var PolicyViolationKey
   */
  public $key;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ExemptionRequest";
  }

  public function __construct($key = NULL) {
    $this->key = $key;
  }
}}

if (!class_exists("ListReturnValue", FALSE)) {
/**
 * Base list return value type.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * This represents an operation that includes an operator and an operand
 * specified type.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Contains the results from a get call.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Base class for exceptions.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The single reason for the authentication failure.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class AuthenticationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the database error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class AuthorizationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the beta error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class BetaErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ClientTermsErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class CollectionSizeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Encodes the reason (cause) of a particular {@link CurrencyCodeError}.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class CurrencyCodeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the database error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class DatabaseErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class DateErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the validation error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class DistinctErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class IdErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The single reason for the internal API error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class InternalApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class MatchesRegexErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the validation error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class NotEmptyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The single reason for the whitelist error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class NotWhitelistedErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the validation error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class NullErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * This represents an operator that may be presented to an adsapi service.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class Operator {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the validation error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class OperatorErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Enums for all the reasons an error can be thrown to the user during
 * billing quota checks.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class QuotaCheckErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class RangeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reason for the rate exceeded error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class RateExceededErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ReadOnlyErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the validation error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class RegionCodeErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class RejectedErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Error reason is unknown.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class RequestErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class RequiredErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class SelectorErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for Ad Scheduling errors.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class SizeLimitErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * The reasons for the target error.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class StringLengthErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * A class representing unauthorized access errors as determined by the
 * invoked service's access policy.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A class for wrapping errors returned by underlying Ads API
 * calls for which we haven't explicitly created mappings into
 * video service error objects.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents a criterion (such as a keyword, videos, or vertical).
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for segmenting by Campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents a youtube channel to be targeted. A youtube channel
 * will match any playback of a video of that youtube channel.
 * 
 * To target a channel, you create a channel with
 * - either the userId (which is the ugly id in the standard channel url
 * youtube.com/channel/[userId]
 * - or the userName (which is the
 * part of the url you see in a vanity url like youtube.com/user/[userName]
 * 
 * To display to an end user, publicName should be used.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents a content label criterion
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ContentCategoryLabel extends BaseCriterion {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for country segmentation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Segment key for segmenting by a time-based dimension.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Segment key for segmenting by day of week.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Segment key for segmenting by device.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for segmenting by {@link VideoAdDisplayFormat}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for segmenting by {@link VideoAdDisplayFormat.Type}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for segmenting by {@link VideoAdDisplayFormat.Type}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * An id did not correspond to an entity, or it referred to an entity
 * which does not belong to the customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for geographical segmentation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Segmentation key for hour-of-day dimension.  The hour should be an integer from 0 to 23.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents a base class for keywords targeting.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents the language criterion used for audience targeting.
 * This criterion is immutable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents the country criterion used for audience targeting.
 * This criterion is immutable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for metro segmentation
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for segmenting by {@link VideoAdNetwork}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for paid vs non-paid segmentation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("PersistenceError", FALSE)) {
/**
 * Error related to the AWV persistence layer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class PersistenceError extends ApiError {
  /**
   * @access public
   * @var tnsPersistenceErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PersistenceError";
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

if (!class_exists("RegionKey", FALSE)) {
/**
 * A SegmentKey for region segmentation
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Encapsulates error for reporting methods at targeting group and campaign level.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * The criterion to target all non-search pages of youtube.com.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class RunOfYoutube extends BaseCriterion {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * SearchKeyword represents a keyword to be used for targeting YouTube search
 * network exclusively.
 * 
 * Note that this is a specialization of Keyword, except that it has different
 * scopes, returned only when explicitly asking for SEARCH_KEYWORD type.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class SearchKeyword extends BaseKeyword {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents one value in a dimension for a segmented entity (e.g. one country in the dimension
 * Geo for a campaign segmented by Geo).
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Errors based on segmentations.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Marker interface for enums that represent sortable fields.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class Sortable {
  /**
   * @access public
   * @var tnsStatsSortable
   */
  public $StatsSortable;

  /**
   * @access public
   * @var tnsTargetingGroupCriterionSortable
   */
  public $TargetingGroupCriterionSortable;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Sortable";
  }

  public function __construct($StatsSortable = NULL, $TargetingGroupCriterionSortable = NULL) {
    $this->StatsSortable = $StatsSortable;
    $this->TargetingGroupCriterionSortable = $TargetingGroupCriterionSortable;
  }
}}

if (!class_exists("Sorting", FALSE)) {
/**
 * Specifies the sorting of the results of a get.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A class representing common errors related to sorting arguments of a request.
 * These are persistent request errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Statistics about video API entities.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("StatsSelector", FALSE)) {
/**
 * Selects statistics for date range.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class StatsSelector {
  /**
   * @access public
   * @var DateRange
   */
  public $dateRange;

  /**
   * @access public
   * @var tnsSegmentationDimension[]
   */
  public $segmentationDimensions;

  /**
   * @access public
   * @var tnsMetric[]
   */
  public $metrics;

  /**
   * @access public
   * @var tnsVideoEntityStatsSummaryType[]
   */
  public $summaryTypes;

  /**
   * @access public
   * @var tnsVideoEntityStatsSummaryType
   */
  public $segmentedSummaryType;

  /**
   * @access public
   * @var tnsStatsSelectorAllTimeRestrict
   */
  public $allTimeRestrict;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatsSelector";
  }

  public function __construct($dateRange = NULL, $segmentationDimensions = NULL, $metrics = NULL, $summaryTypes = NULL, $segmentedSummaryType = NULL, $allTimeRestrict = NULL) {
    $this->dateRange = $dateRange;
    $this->segmentationDimensions = $segmentationDimensions;
    $this->metrics = $metrics;
    $this->summaryTypes = $summaryTypes;
    $this->segmentedSummaryType = $segmentedSummaryType;
    $this->allTimeRestrict = $allTimeRestrict;
  }
}}

if (!class_exists("TargetingGroupCriterion", FALSE)) {
/**
 * Represents the association between a {@link TargetingGroup} and a targeting
 * {@link BaseCriterion}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupCriterion {
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
   * @access public
   * @var BaseCriterion
   */
  public $criterion;

  /**
   * @access public
   * @var tnsTargetingScope[]
   */
  public $targetingGroupScopes;

  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var string
   */
  public $TargetingGroupCriterionType;

  private $_parameterMap = array (
    "TargetingGroupCriterion.Type" => "TargetingGroupCriterionType",
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
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterion";
  }

  public function __construct($targetingGroupId = NULL, $targetingGroupName = NULL, $criterion = NULL, $targetingGroupScopes = NULL, $campaignId = NULL, $TargetingGroupCriterionType = NULL) {
    $this->targetingGroupId = $targetingGroupId;
    $this->targetingGroupName = $targetingGroupName;
    $this->criterion = $criterion;
    $this->targetingGroupScopes = $targetingGroupScopes;
    $this->campaignId = $campaignId;
    $this->TargetingGroupCriterionType = $TargetingGroupCriterionType;
  }
}}

if (!class_exists("TargetingGroupCriterionError", FALSE)) {
/**
 * Base error class for VideoTargetingGroupCriterionService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("TargetingGroupCriterionOperation", FALSE)) {
/**
 * An operation on a targeting group criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupCriterionOperation extends Operation {
  /**
   * @access public
   * @var TargetingGroupCriterion
   */
  public $operand;

  /**
   * @access public
   * @var ExemptionRequest[]
   */
  public $exemptionRequests;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterionOperation";
  }

  public function __construct($operand = NULL, $exemptionRequests = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->exemptionRequests = $exemptionRequests;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("TargetingGroupCriterionPage", FALSE)) {
/**
 * Contains the set of TargetingGroupCriteria matching filtering and paging options
 * of the VideoTargetingGroupCriterionService.get() call.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupCriterionPage extends Page {
  /**
   * @access public
   * @var TargetingGroupCriterion[]
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
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterionPage";
  }

  public function __construct($entries = NULL, $summaryStats = NULL, $totalNumEntries = NULL, $PageType = NULL) {
    parent::__construct();
    $this->entries = $entries;
    $this->summaryStats = $summaryStats;
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }
}}

if (!class_exists("TargetingGroupCriterionReturnValue", FALSE)) {
/**
 * A container for return values from the VideoTargetingGroupCriterionService.mutate call.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupCriterionReturnValue extends ListReturnValue {
  /**
   * @access public
   * @var TargetingGroupCriterion[]
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterionReturnValue";
  }

  public function __construct($value = NULL, $ListReturnValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ListReturnValueType = $ListReturnValueType;
  }
}}

if (!class_exists("TargetingGroupCriterionSelector", FALSE)) {
/**
 * A filter for selecting video campaign criterions for a customer.
 * Only those criterions that match all filters will be returned.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupCriterionSelector {
  /**
   * @access public
   * @var tnsBaseCriterionType[]
   */
  public $criterionTypes;

  /**
   * @access public
   * @var tnsUserStatus[]
   */
  public $userStatuses;

  /**
   * @access public
   * @var StatsSelector
   */
  public $statsSelector;

  /**
   * @access public
   * @var Paging
   */
  public $paging;

  /**
   * @access public
   * @var Sorting
   */
  public $sorting;

  /**
   * @access public
   * @var integer[]
   */
  public $campaignIds;

  /**
   * @access public
   * @var integer[]
   */
  public $targetingGroupIds;

  /**
   * @access public
   * @var integer[]
   */
  public $criterionIds;

  /**
   * @access public
   * @var tnsTargetingGroupCriterionSelectorCriterionUse
   */
  public $criterionUse;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterionSelector";
  }

  public function __construct($criterionTypes = NULL, $userStatuses = NULL, $statsSelector = NULL, $paging = NULL, $sorting = NULL, $campaignIds = NULL, $targetingGroupIds = NULL, $criterionIds = NULL, $criterionUse = NULL) {
    $this->criterionTypes = $criterionTypes;
    $this->userStatuses = $userStatuses;
    $this->statsSelector = $statsSelector;
    $this->paging = $paging;
    $this->sorting = $sorting;
    $this->campaignIds = $campaignIds;
    $this->targetingGroupIds = $targetingGroupIds;
    $this->criterionIds = $criterionIds;
    $this->criterionUse = $criterionUse;
  }
}}

if (!class_exists("TargetingGroupKey", FALSE)) {
/**
 * A SegmentKey for segmenting by TargetingGroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("TargetingGroupReportPage", FALSE)) {
/**
 * Contains the set of ReportedTargetingGroupCriterion matching filtering and
 * paging options of the VideoTargetingGroupCriterionService.report() call.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupReportPage extends Page {
  /**
   * @access public
   * @var ReportedTargetingGroupCriterion[]
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
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupReportPage";
  }

  public function __construct($entries = NULL, $summaryStats = NULL, $totalNumEntries = NULL, $PageType = NULL) {
    parent::__construct();
    $this->entries = $entries;
    $this->summaryStats = $summaryStats;
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }
}}

if (!class_exists("TimeSeriesError", FALSE)) {
/**
 * Base error class for time series related errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TimeSeriesError extends ApiError {
  /**
   * @access public
   * @var tnsTimeSeriesErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TimeSeriesError";
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

if (!class_exists("Topic", FALSE)) {
/**
 * Use verticals to target videos based on the category into which the
 * video falls (for example, "Pets &amp; Animals/Pets/Dogs"). <a href=
 * "/adwords/api/docs/appendix/verticals">
 * View the complete list of available vertical categories.</a>
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * A SegmentKey for segmenting by VideoAd.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("VideoBiddingError", FALSE)) {
/**
 * A list of all the common error codes being used by the video BuySide.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoBiddingError extends ApiError {
  /**
   * @access public
   * @var tnsVideoBiddingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoBiddingError";
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

if (!class_exists("VideoCriterion", FALSE)) {
/**
 * Use the Video criterion to target a particular video. Currently, only youtube videos
 * can be targeted.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents a website to be targeted.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents an arbitrary placement url on YouTube pages, other then the standard
 * YouTube placements: Video, Channel, RunOfYouTube.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Unauthorized invocation of a service's method (get, mutate, etc.)
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class AccessErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Error from ads api that is not handled/converted to video api error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class AdsApiErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Possible values for age.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class AudienceAgeAgeRange {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Possible values for gender.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class AudienceGenderGenderType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * The types of criteria usable for targeting for video campaigns.
 * 
 * A TargetingGroup with criteria of multiple types is eligible in an auction
 * if at least one criterion for each semantic type matches request parameters.
 * The semantic type of a criterion is the actual criterion type for all types,
 * except for VIDEO, CHANNEL, RUN_OF_YOUTUBE and WEB_SITE, which are all
 * placements and semantically equivalent.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class BaseCriterionType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Days of the week.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class DayOfWeek {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * The types of devices we can represent with a DeviceKey.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class DeviceKeyDeviceType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * The specified id refered to an entity which either doesn't exist or is not accessible to the
 * customer. e.g. campaign belongs to another customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class EntityNotFoundErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Match type of a keyword. i.e. the way we match a keyword string with search queries.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class BaseKeywordMatchType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("Metric", FALSE)) {
/**
 * Possible metrics to select in a time series.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class Metric {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Metric";
  }

  public function __construct() {
  }
}}

if (!class_exists("MinuteOfHour", FALSE)) {
/**
 * Minutes in an hour.  Currently only 0, 15, 30, and 45 are supported
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class MinuteOfHour {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MinuteOfHour";
  }

  public function __construct() {
  }
}}

if (!class_exists("PersistenceErrorReason", FALSE)) {
/**
 * Currently a backend being down is the only error we propagate.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class PersistenceErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PersistenceError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RegionCode", FALSE)) {
/**
 * A region (country, territory, continent, etc), as defined by Unicode's
 * "CLDR", itself based on ISO 3166 (UN country codes).
 * 
 * <p>See:
 * 
 * http://unicode.org/cldr/charts/supplemental/territory_containment_un_m_49.html
 * 
 * <p>It contains no behavior, but is the authoritative definition of Region
 * <em>identity</em> in java Google code.
 * 
 * <p>Do:
 * <ul>
 * <li>use it everywhere you need to compare regions</li>
 * <li>use it in all APIs that take/return a region (such as a country),
 * particularly all public APIs</li>
 * <li>get the instance corresponding to an CLDR code using {@link #forString}
 * </li>
 * <li>get the String CLDR code with {@link #toString}</li>
 * <li>use the String CLDR code in your DB as a key to currencies</li>
 * <li>if your API supports only a subset of these codes, make sure to
 * validate (e.g. by creating an EnumSet and using Precondition)
 * <li>put your project-specific region-related information in a class under
 * your project root, using an EnumMap or BiMap to map these Regions to your
 * objects.
 * </li>
 * </ul>
 * 
 * Do <em>not</em>:
 * <ul>
 * <li>depend on the ordinal of a region, for example using {@link #ordinal()}
 * or depending on the index of a particular region in the {@link #values}
 * array.
 * <li>depend on the comparison order of regions, via
 * {@link Enum#compareTo(Enum)}), or via the iteration order of an
 * EnumSet, etc.
 * <li>use {@link #valueOf} or {@link #name()}. The CLDR numeric codes aren't
 * valid for java, so they were prepended by "UN" (as in "UN001" for the
 * CLDR code "001").
 * <li>assume that these are the same as the two-letter ISO codes. Oftentimes
 * they will be, but CLDR guarantees stability, so ISO codes that change
 * will be different from the entries in this enum.
 * </ul>
 * 
 * This enum does not:
 * <ul>
 * <li>have i18n features</li>
 * <li>have application-specific data</li>
 * </ul>
 * 
 * These concerns will be addressed by other classes, some in
 * application-specific packages, others in common.base.i18n. The latter ones
 * will be listed with "see" tags in this class.
 * This class does not supply methods for getting information about regions.
 * For those methods, see {@link RegionInfo}.
 * 
 * <p>Note that not all regions have a "two-letter" country code. Instead, some
 * have a three digit number -- the UN M.49 (United Nations) area code.
 * These are the enum items prepended with "UN". See:
 * 
 * <ul>
 * <li>http://unstats.un.org/unsd/methods/m49/m49alpha.htm
 * <li>http://unstats.un.org/unsd/methods/m49/m49.htm
 * </ul>
 * 
 * <p>Also note that CLDR -- contrary to ISO -- <em>guarantees</em> non-reuse of
 * country codes. Thus, though most times CLDR codes are the same as the ISO
 * codes, sometimes they are not.
 * 
 * 
 * -team@google.com
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class RegionCode {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ReportErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * The dimension (or combination thereof) used for segmenting the stats.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class SegmentationDimension {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Segmentation error reasons.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class SegmentationErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Possible orders of sorting.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class SortOrder {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Mismatch between the lists of fields specified for sorting and
 * corresponding sort order.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class SortingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Identifies the type of summary rollup returned
 * in a list of summary stats.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoEntityStatsSummaryType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("StatsSelectorAllTimeRestrict", FALSE)) {
/**
 * Additional restrictions when requesting "All time" stats, i.e. when date range is not set.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class StatsSelectorAllTimeRestrict {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatsSelector.AllTimeRestrict";
  }

  public function __construct() {
  }
}}

if (!class_exists("StatsSortable", FALSE)) {
/**
 * Sortable fields for video Stats.  Most of these apply to all service
 * objects, but some may not and will be ignored.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class StatsSortable {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupCriterionErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("TargetingGroupCriterionSelectorCriterionUse", FALSE)) {
/**
 * Relation based filtering options for TargetingGroupCriterion(s).
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupCriterionSelectorCriterionUse {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterionSelector.CriterionUse";
  }

  public function __construct() {
  }
}}

if (!class_exists("TargetingGroupCriterionSortable", FALSE)) {
/**
 * Sortable TargetingGroupCriterion fields.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupCriterionSortable {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingGroupCriterionSortable";
  }

  public function __construct() {
  }
}}

if (!class_exists("TargetingScope", FALSE)) {
/**
 * A targeting scope is a combination of a VideoAdDisplayFormat and
 * a VideoAdNetwork. This enumeration lists all eligible TargetingScopes.
 * 
 * We use TargetingScopes to limit the scope of a TargetingGroup and / or
 * TargetingGroupCriterions.
 * 
 * This allows to tailor a TargetingGroup towards a particular
 * VideoAdNetwork (and / or VideoAdDisplayFormat).
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingScope {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetingScope";
  }

  public function __construct() {
  }
}}

if (!class_exists("TimeSeriesErrorReason", FALSE)) {
/**
 * Possible reasons for errors in timeseries fetching.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TimeSeriesErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TimeSeriesError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("UserStatus", FALSE)) {
/**
 * Specified by user to pause or unpause a criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class UserStatus {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "UserStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoAdDisplayFormat", FALSE)) {
/**
 * This enumerates all supported video ad formats that we expose in the UI.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdDisplayFormat {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Subtypes of VideoAdDisplayFormat.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdDisplayFormatType {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * This enumerates all supported networks.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdNetwork {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("VideoBiddingErrorReason", FALSE)) {
/**
 * The reasons for the bidding error.
 * This enum must be called Reason because the enum name is used to identify messages.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoBiddingErrorReason {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "VideoBiddingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoTargetingGroupCriterionServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns the list of targeting group criteria that meet the selector criteria.
 * 
 * @param selector Determines which targeting group criterions to return.
 * If empty, all targeting groups are returned.
 * @return A list of targeting group criteria.
 * @throws ApiException if problems occurred while fetching targeting group information.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoTargetingGroupCriterionServiceGet {
  /**
   * @access public
   * @var TargetingGroupCriterionSelector
   */
  public $selector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("VideoTargetingGroupCriterionServiceGetResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoTargetingGroupCriterionServiceGetResponse {
  /**
   * @access public
   * @var TargetingGroupCriterionPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("VideoTargetingGroupCriterionServiceMutate", FALSE)) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
 * 
 * 
 * 
 * Adds, updates, or deletes targeting group criteria.
 * Note: TargetingGroupCriterionOperation does not support the REMOVE operator. To
 * delete a targeting group, set its status to DELETED.
 * @param operations A list of unique operations.
 * @return The list of updated targeting group criteria, returned in the same order as the
 * operations array.
 * @throws ApiException if problems occurred while updating targeting group criteria.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoTargetingGroupCriterionServiceMutate {
  /**
   * @access public
   * @var TargetingGroupCriterionOperation[]
   */
  public $operations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("VideoTargetingGroupCriterionServiceMutateResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoTargetingGroupCriterionServiceMutateResponse {
  /**
   * @access public
   * @var TargetingGroupCriterionReturnValue
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Errors returned when Authentication failed.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors encountered when trying to authorize a user.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors that are thrown when a Beta feature is accessed incorrectly.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Error due to user not accepting the AdWords terms of service.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors associated with the size of the given collection being
 * out of bounds.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors for currency codes.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors associated with invalid dates and date ranges.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors related to distinct ids or content.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors associated with the ids.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors associated with a given string not matching the provided
 * regular expression.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Represents a money amount.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors corresponding with violation of a NOT EMPTY check.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Indicates that the customer is not whitelisted for accessing the API.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors associated with violation of a NOT NULL check.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Number value types for constructing number valued ranges.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class NumberValue extends ComparableValue {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors due to the use of unsupported operations.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Encapsulates the errors thrown during developer quota checks.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * A list of all errors associated with the Range constraint.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Signals that a call failed because a measured rate exceeded.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors from attempting to write to read-only fields.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * A list of all errors associated with the @RegionCode constraints.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Indicates that a field was rejected due to compatibility issues.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Encapsulates the generic errors thrown when there's an error with user
 * request.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors due to missing required field.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Represents possible error codes for {@link Selector}.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Indicates that the number of entries in the request or response exceeds the system limit.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors associated with the length of the given string being
 * out of bounds.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors that are thrown due to a database access problem.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Exception class for holding a list of service errors.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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

if (!class_exists("AdScheduleVideoCriterion", FALSE)) {
/**
 * Represents the ad schedule criterion used for campaign scheduling.
 * This criterion is immutable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class AdScheduleVideoCriterion extends BaseCriterion {
  /**
   * @access public
   * @var tnsDayOfWeek
   */
  public $dayOfWeek;

  /**
   * @access public
   * @var integer
   */
  public $startHour;

  /**
   * @access public
   * @var tnsMinuteOfHour
   */
  public $startMinute;

  /**
   * @access public
   * @var integer
   */
  public $endHour;

  /**
   * @access public
   * @var tnsMinuteOfHour
   */
  public $endMinute;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdScheduleVideoCriterion";
  }

  public function __construct($dayOfWeek = NULL, $startHour = NULL, $startMinute = NULL, $endHour = NULL, $endMinute = NULL, $id = NULL, $BaseCriterionType = NULL) {
    parent::__construct();
    $this->dayOfWeek = $dayOfWeek;
    $this->startHour = $startHour;
    $this->startMinute = $startMinute;
    $this->endHour = $endHour;
    $this->endMinute = $endMinute;
    $this->id = $id;
    $this->BaseCriterionType = $BaseCriterionType;
  }
}}

if (!class_exists("AudienceAge", FALSE)) {
/**
 * Represents age criterion used for audience targeting.
 * Age criterion is immutable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents gender criterion used for audience targeting.
 * Gender criterion is immutable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents interest criterion used for audience targeting.
 * Interest criterion is immutable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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
 * Represents user list criterion used for audience targeting.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("BiddableTargetingGroupCriterion", FALSE)) {
/**
 * Represents a biddable (positive) targeting group criterion.
 * 
 * Binds bid override, user specified status and stats to a {@link TargetingGroupCriterion}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class BiddableTargetingGroupCriterion extends TargetingGroupCriterion {
  /**
   * @access public
   * @var tnsUserStatus
   */
  public $userStatus;

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
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BiddableTargetingGroupCriterion";
  }

  public function __construct($userStatus = NULL, $stats = NULL, $segmentedStats = NULL, $targetingGroupId = NULL, $targetingGroupName = NULL, $criterion = NULL, $targetingGroupScopes = NULL, $campaignId = NULL, $TargetingGroupCriterionType = NULL) {
    parent::__construct();
    $this->userStatus = $userStatus;
    $this->stats = $stats;
    $this->segmentedStats = $segmentedStats;
    $this->targetingGroupId = $targetingGroupId;
    $this->targetingGroupName = $targetingGroupName;
    $this->criterion = $criterion;
    $this->targetingGroupScopes = $targetingGroupScopes;
    $this->campaignId = $campaignId;
    $this->TargetingGroupCriterionType = $TargetingGroupCriterionType;
  }
}}

if (!class_exists("ContentKeyword", FALSE)) {
/**
 * ContentKeyword represents a keyword to be used for contextual targeting on
 * display networks (YouTube watch and Google Display Network).
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ContentKeyword extends BaseKeyword {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
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

if (!class_exists("NegativeTargetingGroupCriterion", FALSE)) {
/**
 * Represents an exclusion of a targeting {@link BaseCriterion} in a
 * {@link TargetingGroup}.
 * 
 * A negative criterion doesn't have stats or status.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class NegativeTargetingGroupCriterion extends TargetingGroupCriterion {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NegativeTargetingGroupCriterion";
  }

  public function __construct($targetingGroupId = NULL, $targetingGroupName = NULL, $criterion = NULL, $targetingGroupScopes = NULL, $campaignId = NULL, $TargetingGroupCriterionType = NULL) {
    parent::__construct();
    $this->targetingGroupId = $targetingGroupId;
    $this->targetingGroupName = $targetingGroupName;
    $this->criterion = $criterion;
    $this->targetingGroupScopes = $targetingGroupScopes;
    $this->campaignId = $campaignId;
    $this->TargetingGroupCriterionType = $TargetingGroupCriterionType;
  }
}}

if (!class_exists("ReportedTargetingGroupCriterion", FALSE)) {
/**
 * Represents a criterion in the context of a targeting group for performance
 * reports. The criterion may not be explicitly targeted by the targeting group,
 * but implicitly included.
 * 
 * In particular, if you have a targeting group with only one placement being
 * "youtube.com", your targeting group will run on all watch pages. Some of them
 * will be reported as "ReportedTargetingGroupCriterion" when you ask for a
 * performance report.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ReportedTargetingGroupCriterion extends TargetingGroupCriterion {
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
   * @access public
   * @var boolean
   */
  public $partiallyExcluded;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/video/v201302";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ReportedTargetingGroupCriterion";
  }

  public function __construct($stats = NULL, $segmentedStats = NULL, $excluded = NULL, $partiallyExcluded = NULL, $targetingGroupId = NULL, $targetingGroupName = NULL, $criterion = NULL, $targetingGroupScopes = NULL, $campaignId = NULL, $TargetingGroupCriterionType = NULL) {
    parent::__construct();
    $this->stats = $stats;
    $this->segmentedStats = $segmentedStats;
    $this->excluded = $excluded;
    $this->partiallyExcluded = $partiallyExcluded;
    $this->targetingGroupId = $targetingGroupId;
    $this->targetingGroupName = $targetingGroupName;
    $this->criterion = $criterion;
    $this->targetingGroupScopes = $targetingGroupScopes;
    $this->campaignId = $campaignId;
    $this->TargetingGroupCriterionType = $TargetingGroupCriterionType;
  }
}}

if (!class_exists("DoubleValue", FALSE)) {
/**
 * Number value type for constructing double valued ranges.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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
 * Number value type for constructing long valued ranges.
 * 
 * 
 * 
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
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
    return "https://adwords.google.com/api/adwords/cm/v201302";
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

if (!class_exists("VideoTargetingGroupCriterionService", FALSE)) {
/**
 * VideoTargetingGroupCriterionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 * @author WSDLInterpreter
 */
class VideoTargetingGroupCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "VideoTargetingGroupCriterionServiceGetResponse",
    "get" => "VideoTargetingGroupCriterionServiceGet",
    "mutate" => "VideoTargetingGroupCriterionServiceMutate",
    "mutateResponse" => "VideoTargetingGroupCriterionServiceMutateResponse",
    "mutateCallToAction" => "VideoTargetingGroupCriterionServiceMutateCallToAction",
    "search" => "VideoTargetingGroupCriterionServiceSearch",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "AuthenticationError" => "AuthenticationError",
    "ApiError" => "ApiError",
    "AuthorizationError" => "AuthorizationError",
    "BetaError" => "BetaError",
    "ClientTermsError" => "ClientTermsError",
    "CollectionSizeError" => "CollectionSizeError",
    "CurrencyCodeError" => "CurrencyCodeError",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
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
    "ExemptionRequest" => "ExemptionRequest",
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
    "AdScheduleVideoCriterion" => "AdScheduleVideoCriterion",
    "BaseCriterion" => "BaseCriterion",
    "AdsApiError" => "AdsApiError",
    "AudienceAge" => "AudienceAge",
    "AudienceGender" => "AudienceGender",
    "AudienceInterest" => "AudienceInterest",
    "AudienceUserList" => "AudienceUserList",
    "BiddableTargetingGroupCriterion" => "BiddableTargetingGroupCriterion",
    "TargetingGroupCriterion" => "TargetingGroupCriterion",
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
    "HourOfDayKey" => "HourOfDayKey",
    "Integer_LongMapEntry" => "Integer_LongMapEntry",
    "LanguageVideoCriterion" => "LanguageVideoCriterion",
    "LocationVideoCriterion" => "LocationVideoCriterion",
    "MetroKey" => "MetroKey",
    "NegativeTargetingGroupCriterion" => "NegativeTargetingGroupCriterion",
    "NetworkKey" => "NetworkKey",
    "PaidViewsKey" => "PaidViewsKey",
    "PersistenceError" => "PersistenceError",
    "RegionKey" => "RegionKey",
    "ReportError" => "ReportError",
    "ReportedTargetingGroupCriterion" => "ReportedTargetingGroupCriterion",
    "RunOfYoutube" => "RunOfYoutube",
    "SearchKeyword" => "SearchKeyword",
    "SegmentKey" => "SegmentKey",
    "SegmentationError" => "SegmentationError",
    "Sortable" => "Sortable",
    "Sorting" => "Sorting",
    "SortingError" => "SortingError",
    "VideoEntityStats" => "VideoEntityStats",
    "StatsSelector" => "StatsSelector",
    "TargetingGroupCriterionError" => "TargetingGroupCriterionError",
    "TargetingGroupCriterionOperation" => "TargetingGroupCriterionOperation",
    "TargetingGroupCriterionPage" => "TargetingGroupCriterionPage",
    "TargetingGroupCriterionReturnValue" => "TargetingGroupCriterionReturnValue",
    "TargetingGroupCriterionSelector" => "TargetingGroupCriterionSelector",
    "TargetingGroupKey" => "TargetingGroupKey",
    "TargetingGroupReportPage" => "TargetingGroupReportPage",
    "TimeSeriesError" => "TimeSeriesError",
    "Topic" => "Topic",
    "VideoAdKey" => "VideoAdKey",
    "VideoBiddingError" => "VideoBiddingError",
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
    "Metric" => "Metric",
    "MinuteOfHour" => "MinuteOfHour",
    "PersistenceError.Reason" => "PersistenceErrorReason",
    "RegionCode" => "RegionCode",
    "ReportError.Reason" => "ReportErrorReason",
    "SegmentationDimension" => "SegmentationDimension",
    "SegmentationError.Reason" => "SegmentationErrorReason",
    "SortOrder" => "SortOrder",
    "SortingError.Reason" => "SortingErrorReason",
    "VideoEntityStats.SummaryType" => "VideoEntityStatsSummaryType",
    "StatsSelector.AllTimeRestrict" => "StatsSelectorAllTimeRestrict",
    "StatsSortable" => "StatsSortable",
    "TargetingGroupCriterionError.Reason" => "TargetingGroupCriterionErrorReason",
    "TargetingGroupCriterionSelector.CriterionUse" => "TargetingGroupCriterionSelectorCriterionUse",
    "TargetingGroupCriterionSortable" => "TargetingGroupCriterionSortable",
    "TargetingScope" => "TargetingScope",
    "TimeSeriesError.Reason" => "TimeSeriesErrorReason",
    "UserStatus" => "UserStatus",
    "VideoAdDisplayFormat" => "VideoAdDisplayFormat",
    "VideoAdDisplayFormat.Type" => "VideoAdDisplayFormatType",
    "VideoAdNetwork" => "VideoAdNetwork",
    "VideoBiddingError.Reason" => "VideoBiddingErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/video/v201302/VideoTargetingGroupCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = VideoTargetingGroupCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'VideoTargetingGroupCriterionService', 'https://adwords.google.com/api/adwords/video/v201302');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of targeting group criteria that meet the selector criteria.
   * 
   * @param selector Determines which targeting group criterions to return.
   * If empty, all targeting groups are returned.
   * @return A list of targeting group criteria.
   * @throws ApiException if problems occurred while fetching targeting group information.
   */
  public function get($selector) {
    $arg = new VideoTargetingGroupCriterionServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
   * 
   * 
   * 
   * Adds, updates, or deletes targeting group criteria.
   * Note: TargetingGroupCriterionOperation does not support the REMOVE operator. To
   * delete a targeting group, set its status to DELETED.
   * @param operations A list of unique operations.
   * @return The list of updated targeting group criteria, returned in the same order as the
   * operations array.
   * @throws ApiException if problems occurred while updating targeting group criteria.
   */
  public function mutate($operations) {
    $arg = new VideoTargetingGroupCriterionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


}}