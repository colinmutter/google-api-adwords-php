<?php
/**
 * Contains all client objects for the ConstantDataService
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

if (!class_exists("ProductConditionOperand", false)) {
  /**
   * Attribute for the product condition.
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

if (!class_exists("SoapRequestHeader", false)) {
  /**
   * Defines the required and optional elements within the header of a SOAP request.
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

if (!class_exists("WebpageCondition", false)) {
  /**
   * Logical expression for targeting webpages of an advertiser's website.
   * 
   * <p>A condition is defined as {@code operand OP argument}
   * where {@code operand} is one of the values enumerated in
   * {@link WebpageConditionOperand}, and, based on this value,
   * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
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

if (!class_exists("CriterionParameter", false)) {
  /**
   * Base type of criterion parameters.
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

if (!class_exists("ProductCondition", false)) {
  /**
   * Conditions to filter the products defined in product feed for targeting.
   * The condition is defined as operand=argument.
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

if (!class_exists("ApiError", false)) {
  /**
   * The API error base class that provides details about an error that occurred
   * while processing a service request.
   * 
   * <p>The OGNL field path is provided for parsers to identify the request data
   * element that may have caused the error.</p>
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

if (!class_exists("Criterion", false)) {
  /**
   * Represents a criterion (such as a keyword, placement, or vertical).
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
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

if (!class_exists("AdxErrorReason", false)) {
  /**
   * The reasons for the AdX error.
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

if (!class_exists("AgeRangeAgeRangeType", false)) {
  /**
   * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AgeRangeAgeRangeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AgeRange.AgeRangeType";

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

if (!class_exists("BetaErrorReason", false)) {
  /**
   * The reasons for the beta error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BetaErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BetaError.Reason";

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

if (!class_exists("DatabaseErrorReason", false)) {
  /**
   * The reasons for the database error.
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

if (!class_exists("GenderGenderType", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GenderGenderType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Gender.GenderType";

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

if (!class_exists("MobileDeviceDeviceType", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MobileDeviceDeviceType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MobileDevice.DeviceType";

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

if (!class_exists("OperatingSystemVersionOperatorType", false)) {
  /**
   * The operator type.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperatingSystemVersionOperatorType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperatingSystemVersion.OperatorType";

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

if (!class_exists("RejectedErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RejectedErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RejectedError.Reason";

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

if (!class_exists("SelectorErrorReason", false)) {
  /**
   * The reasons for the target error.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SelectorErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SelectorError.Reason";

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

if (!class_exists("StringLengthErrorReason", false)) {
  /**
   * The reasons for the target error.
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

if (!class_exists("CriterionUserListMembershipStatus", false)) {
  /**
   * Membership status of the user list.
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

if (!class_exists("GetAgeRangeCriterion", false)) {
  /**
   * Returns a list of all age range criteria.
   * 
   * @return A list of age ranges.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetAgeRangeCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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

if (!class_exists("GetAgeRangeCriterionResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetAgeRangeCriterionResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AgeRange[]
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

if (!class_exists("GetCarrierCriterion", false)) {
  /**
   * Returns a list of all carrier criteria.
   * 
   * @return A list of carriers.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetCarrierCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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

if (!class_exists("GetCarrierCriterionResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetCarrierCriterionResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Carrier[]
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

if (!class_exists("GetGenderCriterion", false)) {
  /**
   * Returns a list of all gender criteria.
   * 
   * @return A list of genders.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetGenderCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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

if (!class_exists("GetGenderCriterionResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetGenderCriterionResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Gender[]
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

if (!class_exists("GetLanguageCriterion", false)) {
  /**
   * Returns a list of all language criteria.
   * 
   * @return A list of languages.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetLanguageCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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

if (!class_exists("GetLanguageCriterionResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetLanguageCriterionResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Language[]
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

if (!class_exists("GetMobileDeviceCriterion", false)) {
  /**
   * Returns a list of all mobile devices.
   * 
   * @return A list of mobile devices.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetMobileDeviceCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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

if (!class_exists("GetMobileDeviceCriterionResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetMobileDeviceCriterionResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var MobileDevice[]
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

if (!class_exists("GetOperatingSystemVersionCriterion", false)) {
  /**
   * Returns a list of all operating system version criteria.
   * 
   * @return A list of operating system versions.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetOperatingSystemVersionCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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

if (!class_exists("GetOperatingSystemVersionCriterionResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetOperatingSystemVersionCriterionResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var OperatingSystemVersion[]
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

if (!class_exists("GetUserInterestCriterion", false)) {
  /**
   * Returns a list of user interests.
   * 
   * @return A list of user interests.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetUserInterestCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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

if (!class_exists("GetUserInterestCriterionResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetUserInterestCriterionResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CriterionUserInterest[]
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

if (!class_exists("GetVerticalCriterion", false)) {
  /**
   * Returns a list of content verticals.
   * 
   * @return A list of verticals.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetVerticalCriterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

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

if (!class_exists("GetVerticalCriterionResponse", false)) {
  /**
   * 
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class GetVerticalCriterionResponse {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Vertical[]
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

if (!class_exists("AdxError", false)) {
  /**
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
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

if (!class_exists("AgeRange", false)) {
  /**
   * Represents an Age Range criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only excludable.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class AgeRange extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "AgeRange";

    /**
     * @access public
     * @var tnsAgeRangeAgeRangeType
     */
    public $ageRangeType;

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

    public function __construct($ageRangeType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->ageRangeType = $ageRangeType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("AuthenticationError", false)) {
  /**
   * Errors returned when Authentication failed.
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

if (!class_exists("BetaError", false)) {
  /**
   * Errors that are thrown when a Beta feature is accessed incorrectly.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class BetaError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "BetaError";

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

if (!class_exists("Carrier", false)) {
  /**
   * Represents a Carrier Criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Carrier extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Carrier";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $countryCode;

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

    public function __construct($name = null, $countryCode = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->name = $name;
      $this->countryCode = $countryCode;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("ClientTermsError", false)) {
  /**
   * Error due to user not accepting the AdWords terms of service.
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

if (!class_exists("DateError", false)) {
  /**
   * Errors associated with invalid dates and date ranges.
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

if (!class_exists("Gender", false)) {
  /**
   * Represents a Gender criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only excludable.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class Gender extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "Gender";

    /**
     * @access public
     * @var tnsGenderGenderType
     */
    public $genderType;

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

    public function __construct($genderType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->genderType = $genderType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("IdError", false)) {
  /**
   * Errors associated with the ids.
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

if (!class_exists("MobileAppCategory", false)) {
  /**
   * Represents the mobile app category to be targeted.
   * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
   * available mobile app categories</a>.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
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

if (!class_exists("MobileDevice", false)) {
  /**
   * Represents a Mobile Device Criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class MobileDevice extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "MobileDevice";

    /**
     * @access public
     * @var string
     */
    public $deviceName;

    /**
     * @access public
     * @var string
     */
    public $manufacturerName;

    /**
     * @access public
     * @var tnsMobileDeviceDeviceType
     */
    public $deviceType;

    /**
     * @access public
     * @var string
     */
    public $operatingSystemName;

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

    public function __construct($deviceName = null, $manufacturerName = null, $deviceType = null, $operatingSystemName = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->deviceName = $deviceName;
      $this->manufacturerName = $manufacturerName;
      $this->deviceType = $deviceType;
      $this->operatingSystemName = $operatingSystemName;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("NotEmptyError", false)) {
  /**
   * Errors corresponding with violation of a NOT EMPTY check.
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

if (!class_exists("OperatingSystemVersion", false)) {
  /**
   * Represents a Operating System Version Criterion.
   * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class OperatingSystemVersion extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "OperatingSystemVersion";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $osMajorVersion;

    /**
     * @access public
     * @var integer
     */
    public $osMinorVersion;

    /**
     * @access public
     * @var tnsOperatingSystemVersionOperatorType
     */
    public $operatorType;

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

    public function __construct($name = null, $osMajorVersion = null, $osMinorVersion = null, $operatorType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->name = $name;
      $this->osMajorVersion = $osMajorVersion;
      $this->osMinorVersion = $osMinorVersion;
      $this->operatorType = $operatorType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }
}

if (!class_exists("Placement", false)) {
  /**
   * A placement used for modifying bids for sites when targeting the content
   * network.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
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

if (!class_exists("QuotaCheckError", false)) {
  /**
   * Encapsulates the errors thrown during developer quota checks.
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

if (!class_exists("RejectedError", false)) {
  /**
   * Indicates that a field was rejected due to compatibility issues.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class RejectedError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "RejectedError";

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

if (!class_exists("SelectorError", false)) {
  /**
   * Represents possible error codes for {@link Selector}.
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class SelectorError extends ApiError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const XSI_TYPE = "SelectorError";

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

if (!class_exists("StringLengthError", false)) {
  /**
   * Errors associated with the length of the given string being
   * out of bounds.
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

if (!class_exists("CriterionUserInterest", false)) {
  /**
   * User Interest represents a particular interest-based vertical to be targeted.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
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

if (!class_exists("WebpageParameter", false)) {
  /**
   * Parameter of Webpage criterion, expressed as a list of conditions, or
   * logical expressions, for targeting webpages of an advertiser's website.
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

if (!class_exists("DatabaseError", false)) {
  /**
   * Errors that are thrown due to a database access problem.
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

if (!class_exists("Webpage", false)) {
  /**
   * Criterion for targeting webpages of an advertiser's website. The
   * website domain name is specified at the campaign level.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
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

if (!class_exists("ApiException", false)) {
  /**
   * Exception class for holding a list of service errors.
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

if (!class_exists("Product", false)) {
  /**
   * Product targeting criteria, represents a filter for products in the
   * product feed that is defined by the advertiser. The criteria is used to
   * determine the products in a Merchant Center account to be used with the
   * ProductAds in the AdGroup. This criteria is available only to some advertisers.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
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

if (!class_exists("ConstantDataService", false)) {
  /**
   * ConstantDataService
   * @package Google_Api_Ads_AdWords_v201309
   * @subpackage v201309
   */
  class ConstantDataService extends AdWordsSoapClient {

    const SERVICE_NAME = "ConstantDataService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201309";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201309/ConstantDataService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/ConstantDataService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdxError" => "AdxError",
      "AgeRange" => "AgeRange",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "BetaError" => "BetaError",
      "Carrier" => "Carrier",
      "ClientTermsError" => "ClientTermsError",
      "DateError" => "DateError",
      "DistinctError" => "DistinctError",
      "Gender" => "Gender",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "Keyword" => "Keyword",
      "Language" => "Language",
      "MobileAppCategory" => "MobileAppCategory",
      "MobileApplication" => "MobileApplication",
      "MobileDevice" => "MobileDevice",
      "NotEmptyError" => "NotEmptyError",
      "NotWhitelistedError" => "NotWhitelistedError",
      "NullError" => "NullError",
      "OperatingSystemVersion" => "OperatingSystemVersion",
      "Placement" => "Placement",
      "ProductConditionOperand" => "ProductConditionOperand",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SelectorError" => "SelectorError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "CriterionUserInterest" => "CriterionUserInterest",
      "CriterionUserList" => "CriterionUserList",
      "Vertical" => "Vertical",
      "WebpageCondition" => "WebpageCondition",
      "WebpageParameter" => "WebpageParameter",
      "CriterionParameter" => "CriterionParameter",
      "DatabaseError" => "DatabaseError",
      "ProductCondition" => "ProductCondition",
      "Webpage" => "Webpage",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Product" => "Product",
      "Criterion" => "Criterion",
      "AdxError.Reason" => "AdxErrorReason",
      "AgeRange.AgeRangeType" => "AgeRangeAgeRangeType",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "BetaError.Reason" => "BetaErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "Criterion.Type" => "CriterionType",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "Gender.GenderType" => "GenderGenderType",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "KeywordMatchType" => "KeywordMatchType",
      "MobileDevice.DeviceType" => "MobileDeviceDeviceType",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperatingSystemVersion.OperatorType" => "OperatingSystemVersionOperatorType",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SelectorError.Reason" => "SelectorErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "WebpageConditionOperand" => "WebpageConditionOperand",
      "getAgeRangeCriterion" => "GetAgeRangeCriterion",
      "getAgeRangeCriterionResponse" => "GetAgeRangeCriterionResponse",
      "getCarrierCriterion" => "GetCarrierCriterion",
      "getCarrierCriterionResponse" => "GetCarrierCriterionResponse",
      "getGenderCriterion" => "GetGenderCriterion",
      "getGenderCriterionResponse" => "GetGenderCriterionResponse",
      "getLanguageCriterion" => "GetLanguageCriterion",
      "getLanguageCriterionResponse" => "GetLanguageCriterionResponse",
      "getMobileDeviceCriterion" => "GetMobileDeviceCriterion",
      "getMobileDeviceCriterionResponse" => "GetMobileDeviceCriterionResponse",
      "getOperatingSystemVersionCriterion" => "GetOperatingSystemVersionCriterion",
      "getOperatingSystemVersionCriterionResponse" => "GetOperatingSystemVersionCriterionResponse",
      "getUserInterestCriterion" => "GetUserInterestCriterion",
      "getUserInterestCriterionResponse" => "GetUserInterestCriterionResponse",
      "getVerticalCriterion" => "GetVerticalCriterion",
      "getVerticalCriterionResponse" => "GetVerticalCriterionResponse",
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
     * Returns a list of all age range criteria.
     * 
     * @return A list of age ranges.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getAgeRangeCriterion() {
      $args = new GetAgeRangeCriterion();
      $result = $this->__soapCall("getAgeRangeCriterion", array($args));
      return $result->rval;
    }
    /**
     * Returns a list of all carrier criteria.
     * 
     * @return A list of carriers.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getCarrierCriterion() {
      $args = new GetCarrierCriterion();
      $result = $this->__soapCall("getCarrierCriterion", array($args));
      return $result->rval;
    }
    /**
     * Returns a list of all gender criteria.
     * 
     * @return A list of genders.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getGenderCriterion() {
      $args = new GetGenderCriterion();
      $result = $this->__soapCall("getGenderCriterion", array($args));
      return $result->rval;
    }
    /**
     * Returns a list of all language criteria.
     * 
     * @return A list of languages.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getLanguageCriterion() {
      $args = new GetLanguageCriterion();
      $result = $this->__soapCall("getLanguageCriterion", array($args));
      return $result->rval;
    }
    /**
     * Returns a list of all mobile devices.
     * 
     * @return A list of mobile devices.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getMobileDeviceCriterion() {
      $args = new GetMobileDeviceCriterion();
      $result = $this->__soapCall("getMobileDeviceCriterion", array($args));
      return $result->rval;
    }
    /**
     * Returns a list of all operating system version criteria.
     * 
     * @return A list of operating system versions.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getOperatingSystemVersionCriterion() {
      $args = new GetOperatingSystemVersionCriterion();
      $result = $this->__soapCall("getOperatingSystemVersionCriterion", array($args));
      return $result->rval;
    }
    /**
     * Returns a list of user interests.
     * 
     * @return A list of user interests.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getUserInterestCriterion() {
      $args = new GetUserInterestCriterion();
      $result = $this->__soapCall("getUserInterestCriterion", array($args));
      return $result->rval;
    }
    /**
     * Returns a list of content verticals.
     * 
     * @return A list of verticals.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getVerticalCriterion() {
      $args = new GetVerticalCriterion();
      $result = $this->__soapCall("getVerticalCriterion", array($args));
      return $result->rval;
    }
  }
}