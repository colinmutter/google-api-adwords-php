<?php
/**
 * Contains all client objects for the VideoAdService service.
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

if (!class_exists("ApprovalContext", FALSE)) {
/**
 * A key for referencing approval statuses for sub-components of this ad.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ApprovalContext {
  /**
   * @access public
   * @var tnsTargetingScope
   */
  public $targetingScope;

  /**
   * @access public
   * @var tnsDestinationType
   */
  public $destinationType;

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
    return "ApprovalContext";
  }

  public function __construct($targetingScope = NULL, $destinationType = NULL) {
    $this->targetingScope = $targetingScope;
    $this->destinationType = $destinationType;
  }
}}

if (!class_exists("ApprovalContext_VideoAd_ApprovalLimitMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type ApprovalContext
 * and value of type ApprovalLimit.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ApprovalContext_VideoAd_ApprovalLimitMapEntry {
  /**
   * @access public
   * @var ApprovalContext
   */
  public $key;

  /**
   * @access public
   * @var tnsVideoAdApprovalLimit
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
    return "ApprovalContext_VideoAd_ApprovalLimitMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("ApprovalContext_VideoAd_ApprovalStatusMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type ApprovalContext
 * and value of type ApprovalStatus.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ApprovalContext_VideoAd_ApprovalStatusMapEntry {
  /**
   * @access public
   * @var ApprovalContext
   */
  public $key;

  /**
   * @access public
   * @var tnsVideoAdApprovalStatus
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
    return "ApprovalContext_VideoAd_ApprovalStatusMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
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

if (!class_exists("DisapprovalReason", FALSE)) {
/**
 * The possible reasons for a VideoAd to be disapproved.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class DisapprovalReason {
  /**
   * @access public
   * @var string
   */
  public $reason;

  /**
   * @access public
   * @var integer
   */
  public $helpId;

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
    return "DisapprovalReason";
  }

  public function __construct($reason = NULL, $helpId = NULL) {
    $this->reason = $reason;
    $this->helpId = $helpId;
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

if (!class_exists("VideoImage", FALSE)) {
/**
 * Represents an image within a VideoAd.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoImage {
  /**
   * @access public
   * @var tnsVideoImageType
   */
  public $type;

  /**
   * @access public
   * @var tnsVideoImageType
   */
  public $secondaryType;

  /**
   * @access public
   * @var integer
   */
  public $mediaId;

  /**
   * @access public
   * @var string
   */
  public $url;

  /**
   * @access public
   * @var tnsVideoImageMimeType
   */
  public $mimeType;

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
    return "VideoImage";
  }

  public function __construct($type = NULL, $secondaryType = NULL, $mediaId = NULL, $url = NULL, $mimeType = NULL) {
    $this->type = $type;
    $this->secondaryType = $secondaryType;
    $this->mediaId = $mediaId;
    $this->url = $url;
    $this->mimeType = $mimeType;
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

if (!class_exists("ScopedDisapprovalReason", FALSE)) {
/**
 * A composite {@code DisapprovalReason} with the affected {@code
 * ApprovalContext}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ScopedDisapprovalReason {
  /**
   * @access public
   * @var ApprovalContext
   */
  public $approvalContext;

  /**
   * @access public
   * @var DisapprovalReason
   */
  public $disapprovalReason;

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
    return "ScopedDisapprovalReason";
  }

  public function __construct($approvalContext = NULL, $disapprovalReason = NULL) {
    $this->approvalContext = $approvalContext;
    $this->disapprovalReason = $disapprovalReason;
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

if (!class_exists("ServingIssue", FALSE)) {
/**
 * A serving issue on a particular entity (e.g. VideoCampaign: insufficient funds).
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ServingIssue {
  /**
   * @access public
   * @var tnsServingIssueReason
   */
  public $reason;

  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var integer
   */
  public $targetingGroupId;

  /**
   * @access public
   * @var integer
   */
  public $videoAdId;

  /**
   * @access public
   * @var string
   */
  public $videoId;

  /**
   * @access public
   * @var boolean
   */
  public $hideActionLink;

  /**
   * @access public
   * @var tnsServingIssueSeverity
   */
  public $severity;

  /**
   * @access public
   * @var tnsServingIssueType
   */
  public $type;

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
    return "ServingIssue";
  }

  public function __construct($reason = NULL, $campaignId = NULL, $targetingGroupId = NULL, $videoAdId = NULL, $videoId = NULL, $hideActionLink = NULL, $severity = NULL, $type = NULL) {
    $this->reason = $reason;
    $this->campaignId = $campaignId;
    $this->targetingGroupId = $targetingGroupId;
    $this->videoAdId = $videoAdId;
    $this->videoId = $videoId;
    $this->hideActionLink = $hideActionLink;
    $this->severity = $severity;
    $this->type = $type;
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
   * @var tnsVideoAdSortable
   */
  public $VideoAdSortable;

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

  public function __construct($StatsSortable = NULL, $VideoAdSortable = NULL) {
    $this->StatsSortable = $StatsSortable;
    $this->VideoAdSortable = $VideoAdSortable;
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

if (!class_exists("TargetingGroupAssociation", FALSE)) {
/**
 * An association between a VideoAd and a TargetingGroup, with a mutable
 * for a status for that association.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupAssociation {
  /**
   * @access public
   * @var integer
   */
  public $targetingGroupId;

  /**
   * @access public
   * @var tnsTargetingGroupAssociationStatus
   */
  public $status;

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
    return "TargetingGroupAssociation";
  }

  public function __construct($targetingGroupId = NULL, $status = NULL) {
    $this->targetingGroupId = $targetingGroupId;
    $this->status = $status;
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

if (!class_exists("VideoAdError", FALSE)) {
/**
 * Base error class for VideoAdService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdError extends ApiError {
  /**
   * @access public
   * @var tnsVideoAdErrorReason
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
    return "VideoAdError";
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

if (!class_exists("VideoAdSelector", FALSE)) {
/**
 * A filter for selecting VideoAds.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdSelector {
  /**
   * @access public
   * @var integer[]
   */
  public $campaignIds;

  /**
   * @access public
   * @var integer[]
   */
  public $ids;

  /**
   * @access public
   * @var tnsVideoAdStatus[]
   */
  public $statuses;

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
    return "VideoAdSelector";
  }

  public function __construct($campaignIds = NULL, $ids = NULL, $statuses = NULL, $statsSelector = NULL, $paging = NULL, $sorting = NULL) {
    $this->campaignIds = $campaignIds;
    $this->ids = $ids;
    $this->statuses = $statuses;
    $this->statsSelector = $statsSelector;
    $this->paging = $paging;
    $this->sorting = $sorting;
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

if (!class_exists("ServingInfo", FALSE)) {
/**
 * ServingInfo has all information relative to how an entity (e.g. Campaign, VideoAd,...)
 * serves ads. This includes the {ServingStatus} and optionally a set of {ServingIssue}s.
 * {@link ServingStatus#IMPROVABLE} and {@link ServingStatus#BROKEN} must have a set of issues.
 * When returning from an API service such as VideoAdService, the ServingInfo will always be set
 * to {@link #UNDEFINED}. Only the ServingIssuesService will create real ServingInfo objects.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ServingInfo {
  /**
   * @access public
   * @var ServingIssue[]
   */
  public $issues;

  /**
   * @access public
   * @var tnsServingStatus
   */
  public $servingStatus;

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
    return "ServingInfo";
  }

  public function __construct($issues = NULL, $servingStatus = NULL) {
    $this->issues = $issues;
    $this->servingStatus = $servingStatus;
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

if (!class_exists("VideoAd", FALSE)) {
/**
 * Represents a video ad, which promotes a given video in a variety
 * of display formats on a variety of networks.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAd {
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
   * @access public
   * @var string
   */
  public $videoId;

  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var TargetingGroupAssociation[]
   */
  public $targetingGroupAssociations;

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
   * @var ServingInfo
   */
  public $issues;

  /**
   * @access public
   * @var string
   */
  public $campaignName;

  /**
   * @access public
   * @var string
   */
  public $headline;

  /**
   * @access public
   * @var string
   */
  public $description1;

  /**
   * @access public
   * @var string
   */
  public $description2;

  /**
   * @access public
   * @var VideoImage
   */
  public $image;

  /**
   * @access public
   * @var tnsVideoAdYouTubeDestinationPage
   */
  public $youTubeDestinationPage;

  /**
   * @access public
   * @var string
   */
  public $destinationUrl;

  /**
   * @access public
   * @var string
   */
  public $displayUrl;

  /**
   * @access public
   * @var VideoImage
   */
  public $companionBanner;

  /**
   * @access public
   * @var boolean
   */
  public $showVideoAnnotations;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsDestinationType
   */
  public $inDisplayDestinationType;

  /**
   * @access public
   * @var ApprovalContext_VideoAd_ApprovalStatusMapEntry[]
   */
  public $approvalStatuses;

  /**
   * @access public
   * @var ApprovalContext_VideoAd_ApprovalLimitMapEntry[]
   */
  public $approvalLimits;

  /**
   * @access public
   * @var ScopedDisapprovalReason[]
   */
  public $disapprovalReasons;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $trueViewInSearchOnYouTubeStatus;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $trueViewInSearchOnGoogleStatus;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $trueViewInStreamOnYouTubeStatus;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $trueViewInStreamOnGDNStatus;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $trueViewInDisplayOnYouTubeStatus;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $trueViewInDisplayOnGDNStatus;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $trueViewInSlateOnYouTubeStatus;

  /**
   * @access public
   * @var tnsVideoAdStatus
   */
  public $trueViewInSlateOnGDNStatus;

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
    return "VideoAd";
  }

  public function __construct($id = NULL, $name = NULL, $videoId = NULL, $campaignId = NULL, $targetingGroupAssociations = NULL, $stats = NULL, $segmentedStats = NULL, $issues = NULL, $campaignName = NULL, $headline = NULL, $description1 = NULL, $description2 = NULL, $image = NULL, $youTubeDestinationPage = NULL, $destinationUrl = NULL, $displayUrl = NULL, $companionBanner = NULL, $showVideoAnnotations = NULL, $status = NULL, $inDisplayDestinationType = NULL, $approvalStatuses = NULL, $approvalLimits = NULL, $disapprovalReasons = NULL, $trueViewInSearchOnYouTubeStatus = NULL, $trueViewInSearchOnGoogleStatus = NULL, $trueViewInStreamOnYouTubeStatus = NULL, $trueViewInStreamOnGDNStatus = NULL, $trueViewInDisplayOnYouTubeStatus = NULL, $trueViewInDisplayOnGDNStatus = NULL, $trueViewInSlateOnYouTubeStatus = NULL, $trueViewInSlateOnGDNStatus = NULL) {
    $this->id = $id;
    $this->name = $name;
    $this->videoId = $videoId;
    $this->campaignId = $campaignId;
    $this->targetingGroupAssociations = $targetingGroupAssociations;
    $this->stats = $stats;
    $this->segmentedStats = $segmentedStats;
    $this->issues = $issues;
    $this->campaignName = $campaignName;
    $this->headline = $headline;
    $this->description1 = $description1;
    $this->description2 = $description2;
    $this->image = $image;
    $this->youTubeDestinationPage = $youTubeDestinationPage;
    $this->destinationUrl = $destinationUrl;
    $this->displayUrl = $displayUrl;
    $this->companionBanner = $companionBanner;
    $this->showVideoAnnotations = $showVideoAnnotations;
    $this->status = $status;
    $this->inDisplayDestinationType = $inDisplayDestinationType;
    $this->approvalStatuses = $approvalStatuses;
    $this->approvalLimits = $approvalLimits;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->trueViewInSearchOnYouTubeStatus = $trueViewInSearchOnYouTubeStatus;
    $this->trueViewInSearchOnGoogleStatus = $trueViewInSearchOnGoogleStatus;
    $this->trueViewInStreamOnYouTubeStatus = $trueViewInStreamOnYouTubeStatus;
    $this->trueViewInStreamOnGDNStatus = $trueViewInStreamOnGDNStatus;
    $this->trueViewInDisplayOnYouTubeStatus = $trueViewInDisplayOnYouTubeStatus;
    $this->trueViewInDisplayOnGDNStatus = $trueViewInDisplayOnGDNStatus;
    $this->trueViewInSlateOnYouTubeStatus = $trueViewInSlateOnYouTubeStatus;
    $this->trueViewInSlateOnGDNStatus = $trueViewInSlateOnGDNStatus;
  }
}}

if (!class_exists("VideoAdOperation", FALSE)) {
/**
 * An operation for a VideoAd.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdOperation extends Operation {
  /**
   * @access public
   * @var VideoAd
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
    return "VideoAdOperation";
  }

  public function __construct($operand = NULL, $exemptionRequests = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->exemptionRequests = $exemptionRequests;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("VideoAdPage", FALSE)) {
/**
 * A page of VideoAds.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdPage extends Page {
  /**
   * @access public
   * @var VideoAd[]
   */
  public $entries;

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
    return "VideoAdPage";
  }

  public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
    parent::__construct();
    $this->entries = $entries;
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }
}}

if (!class_exists("VideoAdReturnValue", FALSE)) {
/**
 * A container for return values from the VideoAdService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdReturnValue extends ListReturnValue {
  /**
   * @access public
   * @var VideoAd[]
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
    return "VideoAdReturnValue";
  }

  public function __construct($value = NULL, $ListReturnValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ListReturnValueType = $ListReturnValueType;
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

if (!class_exists("DestinationType", FALSE)) {
/**
 * Classifies ads based on where they lead, e.g. to a YouTube
 * page or to an advertiser page.
 * 
 * This is necessary because only ads with the same domain can
 * be put into the same adgroup (otherwise they will be disapproved),
 * so we must create one adgroup for each destination type.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class DestinationType {
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
    return "DestinationType";
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

if (!class_exists("VideoImageMimeType", FALSE)) {
/**
 * Mime types supported by VideoAd images.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoImageMimeType {
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
    return "VideoImage.MimeType";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoImageType", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoImageType {
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
    return "VideoImage.Type";
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

if (!class_exists("ServingIssueReason", FALSE)) {
/**
 * The main reason for the issue.
 * The {@code Type} provided here gives the default priority of the issue.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ServingIssueReason {
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
    return "ServingIssue.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ServingIssueSeverity", FALSE)) {
/**
 * How severe the issue is.
 * <pre>
 * {@code HIGH} indicates the issue should be displayed in the nag bar for all campaigns.
 * {@code MEDIUM} indicates the issue should be displayed on the page the issue relates to
 * (i.e. the specific campaign, targeting group, etc.)
 * {@code LOW} indicates the issue should be displayed only on the element the issue relates to.
 * </pre>
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ServingIssueSeverity {
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
    return "ServingIssue.Severity";
  }

  public function __construct() {
  }
}}

if (!class_exists("ServingIssueType", FALSE)) {
/**
 * Types of Reason. This informs the priority of the serving issue.
 * 
 * <pre>
 * {@code BLOCKING} indicates the issue prevents the whole campaign from serving.
 * {@code ISSUE} indicates the issue causes problems for one part of a campaign
 * (i.e. a specific Targeting Group)
 * {@code NOTIFICATION} indicates the issue is only notifying the customer to something.
 * {@code PENDING} indicates the issue is notifying the customer the object is pending review or
 * acceptance
 * </pre>
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ServingIssueType {
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
    return "ServingIssue.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("ServingStatus", FALSE)) {
/**
 * General serving status for all entities.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class ServingStatus {
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
    return "ServingStatus";
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

if (!class_exists("TargetingGroupAssociationStatus", FALSE)) {
/**
 * Indicates the status between a VideoAd and a TargetingGroup.  Associations are permanent
 * so cannot be removed, but they can be paused and resumed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class TargetingGroupAssociationStatus {
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
    return "TargetingGroupAssociation.Status";
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

if (!class_exists("VideoAdApprovalLimit", FALSE)) {
/**
 * The approval limit for an ad or sub-component with {@code ApprovalStatus#APPROVED_LIMITED}.
 * 
 * <p>Note the order is from least to most restrictive.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdApprovalLimit {
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
    return "VideoAd.ApprovalLimit";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoAdApprovalStatus", FALSE)) {
/**
 * The approval status of this ad or sub-component of this ad.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdApprovalStatus {
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
    return "VideoAd.ApprovalStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoAdYouTubeDestinationPage", FALSE)) {
/**
 * For display formats that drive to YouTube pages, indicates which page on YouTube
 * the ad should lead to.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdYouTubeDestinationPage {
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
    return "VideoAd.YouTubeDestinationPage";
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

if (!class_exists("VideoAdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdErrorReason {
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
    return "VideoAdError.Reason";
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

if (!class_exists("VideoAdSortable", FALSE)) {
/**
 * Fields on which a page of VideoAds may be sorted.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdSortable {
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
    return "VideoAdSortable";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoAdStatus", FALSE)) {
/**
 * The possible statuses of a VideoAd.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdStatus {
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
    return "VideoAdStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoAdServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of VideoAds that satisfy the filters of the given selector.
 * 
 * @param selector Selector specifying filters for the desired ads.
 * @return The list of VideoAds that satisfy the selector.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdServiceGet {
  /**
   * @access public
   * @var VideoAdSelector
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

if (!class_exists("VideoAdServiceGetResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdServiceGetResponse {
  /**
   * @access public
   * @var VideoAdPage
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

if (!class_exists("VideoAdServiceMutate", FALSE)) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
 * 
 * 
 * 
 * Applies the given list operations, i.e. Add or Set.
 * ADD - Creates the given VideoAds.  Each VideoAd must reference the campaignId of
 * an existing campaign.  Associations with one or more TargetingGroups must be
 * specified before the ad can serve, but these can be optionally omitted and applied later.
 * SET - Updates the VideoAds. Attributes of VideoAds are immutable, only statuses
 * and TargetingGroupAssocations can be modified.
 * 
 * @param operations The operations to apply.
 * @return The VideoAds as they appear after the operations have been applied.
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdServiceMutate {
  /**
   * @access public
   * @var VideoAdOperation[]
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

if (!class_exists("VideoAdServiceMutateResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 */
class VideoAdServiceMutateResponse {
  /**
   * @access public
   * @var VideoAdReturnValue
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

if (!class_exists("VideoAdService", FALSE)) {
/**
 * VideoAdService
 * @package GoogleApiAdsAdWords
 * @subpackage v201302
 * @author WSDLInterpreter
 */
class VideoAdService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "VideoAdServiceGetResponse",
    "get" => "VideoAdServiceGet",
    "mutate" => "VideoAdServiceMutate",
    "mutateResponse" => "VideoAdServiceMutateResponse",
    "mutateCallToAction" => "VideoAdServiceMutateCallToAction",
    "search" => "VideoAdServiceSearch",
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
    "AdsApiError" => "AdsApiError",
    "ApprovalContext" => "ApprovalContext",
    "ApprovalContext_VideoAd_ApprovalLimitMapEntry" => "ApprovalContext_VideoAd_ApprovalLimitMapEntry",
    "ApprovalContext_VideoAd_ApprovalStatusMapEntry" => "ApprovalContext_VideoAd_ApprovalStatusMapEntry",
    "CampaignKey" => "CampaignKey",
    "CountryKey" => "CountryKey",
    "DateKey" => "DateKey",
    "DayOfWeekKey" => "DayOfWeekKey",
    "DeviceKey" => "DeviceKey",
    "DisapprovalReason" => "DisapprovalReason",
    "DisplayFormatKey" => "DisplayFormatKey",
    "DisplayFormatNetworkKey" => "DisplayFormatNetworkKey",
    "DisplayFormatTypeKey" => "DisplayFormatTypeKey",
    "EntityNotFoundError" => "EntityNotFoundError",
    "HourOfDayKey" => "HourOfDayKey",
    "VideoImage" => "VideoImage",
    "Integer_LongMapEntry" => "Integer_LongMapEntry",
    "MetroKey" => "MetroKey",
    "NetworkKey" => "NetworkKey",
    "PaidViewsKey" => "PaidViewsKey",
    "PersistenceError" => "PersistenceError",
    "RegionKey" => "RegionKey",
    "ReportError" => "ReportError",
    "ScopedDisapprovalReason" => "ScopedDisapprovalReason",
    "SegmentationError" => "SegmentationError",
    "ServingIssue" => "ServingIssue",
    "Sortable" => "Sortable",
    "Sorting" => "Sorting",
    "SortingError" => "SortingError",
    "StatsSelector" => "StatsSelector",
    "TargetingGroupAssociation" => "TargetingGroupAssociation",
    "TargetingGroupKey" => "TargetingGroupKey",
    "TimeSeriesError" => "TimeSeriesError",
    "VideoAdError" => "VideoAdError",
    "VideoAdKey" => "VideoAdKey",
    "VideoAdSelector" => "VideoAdSelector",
    "GeoKey" => "GeoKey",
    "SegmentKey" => "SegmentKey",
    "ServingInfo" => "ServingInfo",
    "VideoEntityStats" => "VideoEntityStats",
    "VideoAd" => "VideoAd",
    "VideoAdOperation" => "VideoAdOperation",
    "VideoAdPage" => "VideoAdPage",
    "VideoAdReturnValue" => "VideoAdReturnValue",
    "AccessError.Reason" => "AccessErrorReason",
    "AdsApiError.Reason" => "AdsApiErrorReason",
    "DayOfWeek" => "DayOfWeek",
    "DestinationType" => "DestinationType",
    "DeviceKey.DeviceType" => "DeviceKeyDeviceType",
    "EntityNotFoundError.Reason" => "EntityNotFoundErrorReason",
    "VideoImage.MimeType" => "VideoImageMimeType",
    "VideoImage.Type" => "VideoImageType",
    "Metric" => "Metric",
    "PersistenceError.Reason" => "PersistenceErrorReason",
    "RegionCode" => "RegionCode",
    "ReportError.Reason" => "ReportErrorReason",
    "SegmentationDimension" => "SegmentationDimension",
    "SegmentationError.Reason" => "SegmentationErrorReason",
    "ServingIssue.Reason" => "ServingIssueReason",
    "ServingIssue.Severity" => "ServingIssueSeverity",
    "ServingIssue.Type" => "ServingIssueType",
    "ServingStatus" => "ServingStatus",
    "SortOrder" => "SortOrder",
    "SortingError.Reason" => "SortingErrorReason",
    "VideoEntityStats.SummaryType" => "VideoEntityStatsSummaryType",
    "StatsSelector.AllTimeRestrict" => "StatsSelectorAllTimeRestrict",
    "StatsSortable" => "StatsSortable",
    "TargetingGroupAssociation.Status" => "TargetingGroupAssociationStatus",
    "TargetingScope" => "TargetingScope",
    "TimeSeriesError.Reason" => "TimeSeriesErrorReason",
    "VideoAd.ApprovalLimit" => "VideoAdApprovalLimit",
    "VideoAd.ApprovalStatus" => "VideoAdApprovalStatus",
    "VideoAd.YouTubeDestinationPage" => "VideoAdYouTubeDestinationPage",
    "VideoAdDisplayFormat" => "VideoAdDisplayFormat",
    "VideoAdDisplayFormat.Type" => "VideoAdDisplayFormatType",
    "VideoAdError.Reason" => "VideoAdErrorReason",
    "VideoAdNetwork" => "VideoAdNetwork",
    "VideoAdSortable" => "VideoAdSortable",
    "VideoAdStatus" => "VideoAdStatus",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/video/v201302/VideoAdService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = VideoAdService::$classmap;
    parent::__construct($wsdl, $options, $user, 'VideoAdService', 'https://adwords.google.com/api/adwords/video/v201302');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of VideoAds that satisfy the filters of the given selector.
   * 
   * @param selector Selector specifying filters for the desired ads.
   * @return The list of VideoAds that satisfy the selector.
   */
  public function get($selector) {
    $arg = new VideoAdServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   * 
   * 
   * 
   * Applies the given list operations, i.e. Add or Set.
   * ADD - Creates the given VideoAds.  Each VideoAd must reference the campaignId of
   * an existing campaign.  Associations with one or more TargetingGroups must be
   * specified before the ad can serve, but these can be optionally omitted and applied later.
   * SET - Updates the VideoAds. Attributes of VideoAds are immutable, only statuses
   * and TargetingGroupAssocations can be modified.
   * 
   * @param operations The operations to apply.
   * @return The VideoAds as they appear after the operations have been applied.
   */
  public function mutate($operations) {
    $arg = new VideoAdServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


}}