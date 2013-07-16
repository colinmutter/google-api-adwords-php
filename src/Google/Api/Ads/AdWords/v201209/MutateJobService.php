<?php
/**
 * Contains all client objects for the MutateJobService service.
 *
 * PHP version 5
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201209
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

/** Required classes. **/
require_once dirname(__FILE__) . "/../Lib/AdWordsSoapClient.php";

if (!class_exists("Ad", FALSE)) {
/**
 * The base class of all ad types. To update basic ad fields,
 * you can construct an {@code Ad} object (instead of
 * the ad's concrete type) with the appropriate fields set.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Ad {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $url;

  /**
   * @access public
   * @var string
   */
  public $displayUrl;

  /**
   * @access public
   * @var string[]
   */
  public $disapprovalReasons;

  /**
   * @access public
   * @var string
   */
  public $AdType;

  private $_parameterMap = array (
    "Ad.Type" => "AdType",
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
    return "Ad";
  }

  public function __construct($id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("AdExtension", FALSE)) {
/**
 * Base class for AdExtension objects. An AdExtension is an extension to
 * an existing ad or metadata that will process into an extension.
 * The class is concrete, so ad extensions can be added/removed to campaigns
 * by referring to the id.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtension {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $AdExtensionType;

  private $_parameterMap = array (
    "AdExtension.Type" => "AdExtensionType",
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
    return "AdExtension";
  }

  public function __construct($id = NULL, $AdExtensionType = NULL) {
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }
}}

if (!class_exists("AdExtensionOverride", FALSE)) {
/**
 * Represents an ad level ad extension override. An ad extension override
 * specifies the ad extension that must be used if the ad is served with
 * any ad extension data.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionOverride {
  /**
   * @access public
   * @var integer
   */
  public $adId;

  /**
   * @access public
   * @var AdExtension
   */
  public $adExtension;

  /**
   * @access public
   * @var OverrideInfo
   */
  public $overrideInfo;

  /**
   * @access public
   * @var tnsAdExtensionOverrideStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsAdExtensionOverrideApprovalStatus
   */
  public $approvalStatus;

  /**
   * @access public
   * @var AdExtensionOverrideStats
   */
  public $stats;

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
    return "AdExtensionOverride";
  }

  public function __construct($adId = NULL, $adExtension = NULL, $overrideInfo = NULL, $status = NULL, $approvalStatus = NULL, $stats = NULL) {
    $this->adId = $adId;
    $this->adExtension = $adExtension;
    $this->overrideInfo = $overrideInfo;
    $this->status = $status;
    $this->approvalStatus = $approvalStatus;
    $this->stats = $stats;
  }
}}

if (!class_exists("AdGroup", FALSE)) {
/**
 * Represents an ad group.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroup {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var string
   */
  public $campaignName;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsAdGroupStatus
   */
  public $status;

  /**
   * @access public
   * @var Setting[]
   */
  public $settings;

  /**
   * @access public
   * @var AdGroupBids
   */
  public $bids;

  /**
   * @access public
   * @var AdGroupExperimentData
   */
  public $experimentData;

  /**
   * @access public
   * @var Stats
   */
  public $stats;

  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

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
    return "AdGroup";
  }

  public function __construct($id = NULL, $campaignId = NULL, $campaignName = NULL, $name = NULL, $status = NULL, $settings = NULL, $bids = NULL, $experimentData = NULL, $stats = NULL, $forwardCompatibilityMap = NULL) {
    $this->id = $id;
    $this->campaignId = $campaignId;
    $this->campaignName = $campaignName;
    $this->name = $name;
    $this->status = $status;
    $this->settings = $settings;
    $this->bids = $bids;
    $this->experimentData = $experimentData;
    $this->stats = $stats;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
  }
}}

if (!class_exists("AdGroupAd", FALSE)) {
/**
 * Represents an ad in an ad group.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupAd {
  /**
   * @access public
   * @var integer
   */
  public $adGroupId;

  /**
   * @access public
   * @var Ad
   */
  public $ad;

  /**
   * @access public
   * @var AdGroupAdExperimentData
   */
  public $experimentData;

  /**
   * @access public
   * @var tnsAdGroupAdStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsAdGroupAdApprovalStatus
   */
  public $approvalStatus;

  /**
   * @access public
   * @var boolean
   */
  public $trademarkDisapproved;

  /**
   * @access public
   * @var AdStats
   */
  public $stats;

  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

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
    return "AdGroupAd";
  }

  public function __construct($adGroupId = NULL, $ad = NULL, $experimentData = NULL, $status = NULL, $approvalStatus = NULL, $trademarkDisapproved = NULL, $stats = NULL, $forwardCompatibilityMap = NULL) {
    $this->adGroupId = $adGroupId;
    $this->ad = $ad;
    $this->experimentData = $experimentData;
    $this->status = $status;
    $this->approvalStatus = $approvalStatus;
    $this->trademarkDisapproved = $trademarkDisapproved;
    $this->stats = $stats;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
  }
}}

if (!class_exists("AdGroupAdExperimentData", FALSE)) {
/**
 * Data associated with an advertiser experiment for an AdGroupAd
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupAdExperimentData {
  /**
   * @access public
   * @var integer
   */
  public $experimentId;

  /**
   * @access public
   * @var tnsExperimentDeltaStatus
   */
  public $experimentDeltaStatus;

  /**
   * @access public
   * @var tnsExperimentDataStatus
   */
  public $experimentDataStatus;

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
    return "AdGroupAdExperimentData";
  }

  public function __construct($experimentId = NULL, $experimentDeltaStatus = NULL, $experimentDataStatus = NULL) {
    $this->experimentId = $experimentId;
    $this->experimentDeltaStatus = $experimentDeltaStatus;
    $this->experimentDataStatus = $experimentDataStatus;
  }
}}

if (!class_exists("AdGroupBids", FALSE)) {
/**
 * Represents bids at the adgroup level, which could be of different subtypes based on
 * campaign's bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupBids {
  /**
   * @access public
   * @var InteractionBid[]
   */
  public $interactionBids;

  /**
   * @access public
   * @var string
   */
  public $AdGroupBidsType;

  private $_parameterMap = array (
    "AdGroupBids.Type" => "AdGroupBidsType",
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
    return "AdGroupBids";
  }

  public function __construct($interactionBids = NULL, $AdGroupBidsType = NULL) {
    $this->interactionBids = $interactionBids;
    $this->AdGroupBidsType = $AdGroupBidsType;
  }
}}

if (!class_exists("AdGroupCriterion", FALSE)) {
/**
 * Represents a criterion in an ad group, used with AdGroupCriterionService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupCriterion {
  /**
   * @access public
   * @var integer
   */
  public $adGroupId;

  /**
   * @access public
   * @var tnsCriterionUse
   */
  public $criterionUse;

  /**
   * @access public
   * @var Criterion
   */
  public $criterion;

  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

  /**
   * @access public
   * @var string
   */
  public $AdGroupCriterionType;

  private $_parameterMap = array (
    "AdGroupCriterion.Type" => "AdGroupCriterionType",
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
    return "AdGroupCriterion";
  }

  public function __construct($adGroupId = NULL, $criterionUse = NULL, $criterion = NULL, $forwardCompatibilityMap = NULL, $AdGroupCriterionType = NULL) {
    $this->adGroupId = $adGroupId;
    $this->criterionUse = $criterionUse;
    $this->criterion = $criterion;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    $this->AdGroupCriterionType = $AdGroupCriterionType;
  }
}}

if (!class_exists("AdGroupCriterionBids", FALSE)) {
/**
 * Represents criterion level bids.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupCriterionBids {
  /**
   * @access public
   * @var string
   */
  public $AdGroupCriterionBidsType;

  private $_parameterMap = array (
    "AdGroupCriterionBids.Type" => "AdGroupCriterionBidsType",
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
    return "AdGroupCriterionBids";
  }

  public function __construct($AdGroupCriterionBidsType = NULL) {
    $this->AdGroupCriterionBidsType = $AdGroupCriterionBidsType;
  }
}}

if (!class_exists("AdGroupCriterionExperimentBidMultiplier", FALSE)) {
/**
 * Bid multiplier used to modify the bid of a criterion while running
 * an experiment.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupCriterionExperimentBidMultiplier {
  /**
   * @access public
   * @var string
   */
  public $AdGroupCriterionExperimentBidMultiplierType;

  private $_parameterMap = array (
    "AdGroupCriterionExperimentBidMultiplier.Type" => "AdGroupCriterionExperimentBidMultiplierType",
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
    return "AdGroupCriterionExperimentBidMultiplier";
  }

  public function __construct($AdGroupCriterionExperimentBidMultiplierType = NULL) {
    $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
  }
}}

if (!class_exists("AdGroupExperimentBidMultipliers", FALSE)) {
/**
 * Bid multiplier used to modify the bid of an adgroup while running
 * an experiment.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupExperimentBidMultipliers {
  /**
   * @access public
   * @var string
   */
  public $AdGroupExperimentBidMultipliersType;

  private $_parameterMap = array (
    "AdGroupExperimentBidMultipliers.Type" => "AdGroupExperimentBidMultipliersType",
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
    return "AdGroupExperimentBidMultipliers";
  }

  public function __construct($AdGroupExperimentBidMultipliersType = NULL) {
    $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
  }
}}

if (!class_exists("AdGroupExperimentData", FALSE)) {
/**
 * Data associated with an advertiser experiment for this adgroup.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupExperimentData {
  /**
   * @access public
   * @var integer
   */
  public $experimentId;

  /**
   * @access public
   * @var tnsExperimentDeltaStatus
   */
  public $experimentDeltaStatus;

  /**
   * @access public
   * @var tnsExperimentDataStatus
   */
  public $experimentDataStatus;

  /**
   * @access public
   * @var AdGroupExperimentBidMultipliers
   */
  public $experimentBidMultipliers;

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
    return "AdGroupExperimentData";
  }

  public function __construct($experimentId = NULL, $experimentDeltaStatus = NULL, $experimentDataStatus = NULL, $experimentBidMultipliers = NULL) {
    $this->experimentId = $experimentId;
    $this->experimentDeltaStatus = $experimentDeltaStatus;
    $this->experimentDataStatus = $experimentDataStatus;
    $this->experimentBidMultipliers = $experimentBidMultipliers;
  }
}}

if (!class_exists("AdUnionId", FALSE)) {
/**
 * Represents an id indicating a grouping of Ads under some heuristic.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdUnionId {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $AdUnionIdType;

  private $_parameterMap = array (
    "AdUnionId.Type" => "AdUnionIdType",
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
    return "AdUnionId";
  }

  public function __construct($id = NULL, $AdUnionIdType = NULL) {
    $this->id = $id;
    $this->AdUnionIdType = $AdUnionIdType;
  }
}}

if (!class_exists("Address", FALSE)) {
/**
 * Structure to specify an address location.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Address {
  /**
   * @access public
   * @var string
   */
  public $streetAddress;

  /**
   * @access public
   * @var string
   */
  public $streetAddress2;

  /**
   * @access public
   * @var string
   */
  public $cityName;

  /**
   * @access public
   * @var string
   */
  public $provinceCode;

  /**
   * @access public
   * @var string
   */
  public $provinceName;

  /**
   * @access public
   * @var string
   */
  public $postalCode;

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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Address";
  }

  public function __construct($streetAddress = NULL, $streetAddress2 = NULL, $cityName = NULL, $provinceCode = NULL, $provinceName = NULL, $postalCode = NULL, $countryCode = NULL) {
    $this->streetAddress = $streetAddress;
    $this->streetAddress2 = $streetAddress2;
    $this->cityName = $cityName;
    $this->provinceCode = $provinceCode;
    $this->provinceName = $provinceName;
    $this->postalCode = $postalCode;
    $this->countryCode = $countryCode;
  }
}}

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("ApiErrorReason", FALSE)) {
/**
 * Interface that has a reason return an associated service error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ApiErrorReason {
  /**
   * @access public
   * @var tnsAdErrorReason
   */
  public $AdErrorReason;

  /**
   * @access public
   * @var tnsAdExtensionErrorReason
   */
  public $AdExtensionErrorReason;

  /**
   * @access public
   * @var tnsAdExtensionOverrideErrorReason
   */
  public $AdExtensionOverrideErrorReason;

  /**
   * @access public
   * @var tnsAdGroupAdErrorReason
   */
  public $AdGroupAdErrorReason;

  /**
   * @access public
   * @var tnsAdGroupCriterionErrorReason
   */
  public $AdGroupCriterionErrorReason;

  /**
   * @access public
   * @var tnsAdGroupServiceErrorReason
   */
  public $AdGroupServiceErrorReason;

  /**
   * @access public
   * @var tnsAdxErrorReason
   */
  public $AdxErrorReason;

  /**
   * @access public
   * @var tnsAuthenticationErrorReason
   */
  public $AuthenticationErrorReason;

  /**
   * @access public
   * @var tnsAuthorizationErrorReason
   */
  public $AuthorizationErrorReason;

  /**
   * @access public
   * @var tnsBetaErrorReason
   */
  public $BetaErrorReason;

  /**
   * @access public
   * @var tnsBiddingErrorReason
   */
  public $BiddingErrorReason;

  /**
   * @access public
   * @var tnsBiddingTransitionErrorReason
   */
  public $BiddingTransitionErrorReason;

  /**
   * @access public
   * @var tnsBudgetErrorReason
   */
  public $BudgetErrorReason;

  /**
   * @access public
   * @var tnsBulkMutateJobErrorReason
   */
  public $BulkMutateJobErrorReason;

  /**
   * @access public
   * @var tnsCampaignAdExtensionErrorReason
   */
  public $CampaignAdExtensionErrorReason;

  /**
   * @access public
   * @var tnsCampaignCriterionErrorReason
   */
  public $CampaignCriterionErrorReason;

  /**
   * @access public
   * @var tnsCampaignErrorReason
   */
  public $CampaignErrorReason;

  /**
   * @access public
   * @var tnsClientTermsErrorReason
   */
  public $ClientTermsErrorReason;

  /**
   * @access public
   * @var tnsCriterionErrorReason
   */
  public $CriterionErrorReason;

  /**
   * @access public
   * @var tnsDatabaseErrorReason
   */
  public $DatabaseErrorReason;

  /**
   * @access public
   * @var tnsDateErrorReason
   */
  public $DateErrorReason;

  /**
   * @access public
   * @var tnsDistinctErrorReason
   */
  public $DistinctErrorReason;

  /**
   * @access public
   * @var tnsEntityAccessDeniedReason
   */
  public $EntityAccessDeniedReason;

  /**
   * @access public
   * @var tnsEntityCountLimitExceededReason
   */
  public $EntityCountLimitExceededReason;

  /**
   * @access public
   * @var tnsEntityNotFoundReason
   */
  public $EntityNotFoundReason;

  /**
   * @access public
   * @var tnsIdErrorReason
   */
  public $IdErrorReason;

  /**
   * @access public
   * @var tnsImageErrorReason
   */
  public $ImageErrorReason;

  /**
   * @access public
   * @var tnsInternalApiErrorReason
   */
  public $InternalApiErrorReason;

  /**
   * @access public
   * @var tnsJobErrorReason
   */
  public $JobErrorReason;

  /**
   * @access public
   * @var tnsMediaErrorReason
   */
  public $MediaErrorReason;

  /**
   * @access public
   * @var tnsNewEntityCreationErrorReason
   */
  public $NewEntityCreationErrorReason;

  /**
   * @access public
   * @var tnsNotEmptyErrorReason
   */
  public $NotEmptyErrorReason;

  /**
   * @access public
   * @var tnsNotWhitelistedErrorReason
   */
  public $NotWhitelistedErrorReason;

  /**
   * @access public
   * @var tnsNullErrorReason
   */
  public $NullErrorReason;

  /**
   * @access public
   * @var tnsOperationAccessDeniedReason
   */
  public $OperationAccessDeniedReason;

  /**
   * @access public
   * @var tnsOperatorErrorReason
   */
  public $OperatorErrorReason;

  /**
   * @access public
   * @var tnsPagingErrorReason
   */
  public $PagingErrorReason;

  /**
   * @access public
   * @var tnsPolicyViolationErrorReason
   */
  public $PolicyViolationErrorReason;

  /**
   * @access public
   * @var tnsQueryErrorReason
   */
  public $QueryErrorReason;

  /**
   * @access public
   * @var tnsQuotaCheckErrorReason
   */
  public $QuotaCheckErrorReason;

  /**
   * @access public
   * @var tnsQuotaErrorReason
   */
  public $QuotaErrorReason;

  /**
   * @access public
   * @var tnsRangeErrorReason
   */
  public $RangeErrorReason;

  /**
   * @access public
   * @var tnsRateExceededErrorReason
   */
  public $RateExceededErrorReason;

  /**
   * @access public
   * @var tnsReadOnlyErrorReason
   */
  public $ReadOnlyErrorReason;

  /**
   * @access public
   * @var tnsRegionCodeErrorReason
   */
  public $RegionCodeErrorReason;

  /**
   * @access public
   * @var tnsRejectedErrorReason
   */
  public $RejectedErrorReason;

  /**
   * @access public
   * @var tnsRequestErrorReason
   */
  public $RequestErrorReason;

  /**
   * @access public
   * @var tnsRequiredErrorReason
   */
  public $RequiredErrorReason;

  /**
   * @access public
   * @var tnsSelectorErrorReason
   */
  public $SelectorErrorReason;

  /**
   * @access public
   * @var tnsSettingErrorReason
   */
  public $SettingErrorReason;

  /**
   * @access public
   * @var tnsSizeLimitErrorReason
   */
  public $SizeLimitErrorReason;

  /**
   * @access public
   * @var tnsStatsQueryErrorReason
   */
  public $StatsQueryErrorReason;

  /**
   * @access public
   * @var tnsStringLengthErrorReason
   */
  public $StringLengthErrorReason;

  /**
   * @access public
   * @var tnsTargetErrorReason
   */
  public $TargetErrorReason;

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
    return "ApiErrorReason";
  }

  public function __construct($AdErrorReason = NULL, $AdExtensionErrorReason = NULL, $AdExtensionOverrideErrorReason = NULL, $AdGroupAdErrorReason = NULL, $AdGroupCriterionErrorReason = NULL, $AdGroupServiceErrorReason = NULL, $AdxErrorReason = NULL, $AuthenticationErrorReason = NULL, $AuthorizationErrorReason = NULL, $BetaErrorReason = NULL, $BiddingErrorReason = NULL, $BiddingTransitionErrorReason = NULL, $BudgetErrorReason = NULL, $BulkMutateJobErrorReason = NULL, $CampaignAdExtensionErrorReason = NULL, $CampaignCriterionErrorReason = NULL, $CampaignErrorReason = NULL, $ClientTermsErrorReason = NULL, $CriterionErrorReason = NULL, $DatabaseErrorReason = NULL, $DateErrorReason = NULL, $DistinctErrorReason = NULL, $EntityAccessDeniedReason = NULL, $EntityCountLimitExceededReason = NULL, $EntityNotFoundReason = NULL, $IdErrorReason = NULL, $ImageErrorReason = NULL, $InternalApiErrorReason = NULL, $JobErrorReason = NULL, $MediaErrorReason = NULL, $NewEntityCreationErrorReason = NULL, $NotEmptyErrorReason = NULL, $NotWhitelistedErrorReason = NULL, $NullErrorReason = NULL, $OperationAccessDeniedReason = NULL, $OperatorErrorReason = NULL, $PagingErrorReason = NULL, $PolicyViolationErrorReason = NULL, $QueryErrorReason = NULL, $QuotaCheckErrorReason = NULL, $QuotaErrorReason = NULL, $RangeErrorReason = NULL, $RateExceededErrorReason = NULL, $ReadOnlyErrorReason = NULL, $RegionCodeErrorReason = NULL, $RejectedErrorReason = NULL, $RequestErrorReason = NULL, $RequiredErrorReason = NULL, $SelectorErrorReason = NULL, $SettingErrorReason = NULL, $SizeLimitErrorReason = NULL, $StatsQueryErrorReason = NULL, $StringLengthErrorReason = NULL, $TargetErrorReason = NULL) {
    $this->AdErrorReason = $AdErrorReason;
    $this->AdExtensionErrorReason = $AdExtensionErrorReason;
    $this->AdExtensionOverrideErrorReason = $AdExtensionOverrideErrorReason;
    $this->AdGroupAdErrorReason = $AdGroupAdErrorReason;
    $this->AdGroupCriterionErrorReason = $AdGroupCriterionErrorReason;
    $this->AdGroupServiceErrorReason = $AdGroupServiceErrorReason;
    $this->AdxErrorReason = $AdxErrorReason;
    $this->AuthenticationErrorReason = $AuthenticationErrorReason;
    $this->AuthorizationErrorReason = $AuthorizationErrorReason;
    $this->BetaErrorReason = $BetaErrorReason;
    $this->BiddingErrorReason = $BiddingErrorReason;
    $this->BiddingTransitionErrorReason = $BiddingTransitionErrorReason;
    $this->BudgetErrorReason = $BudgetErrorReason;
    $this->BulkMutateJobErrorReason = $BulkMutateJobErrorReason;
    $this->CampaignAdExtensionErrorReason = $CampaignAdExtensionErrorReason;
    $this->CampaignCriterionErrorReason = $CampaignCriterionErrorReason;
    $this->CampaignErrorReason = $CampaignErrorReason;
    $this->ClientTermsErrorReason = $ClientTermsErrorReason;
    $this->CriterionErrorReason = $CriterionErrorReason;
    $this->DatabaseErrorReason = $DatabaseErrorReason;
    $this->DateErrorReason = $DateErrorReason;
    $this->DistinctErrorReason = $DistinctErrorReason;
    $this->EntityAccessDeniedReason = $EntityAccessDeniedReason;
    $this->EntityCountLimitExceededReason = $EntityCountLimitExceededReason;
    $this->EntityNotFoundReason = $EntityNotFoundReason;
    $this->IdErrorReason = $IdErrorReason;
    $this->ImageErrorReason = $ImageErrorReason;
    $this->InternalApiErrorReason = $InternalApiErrorReason;
    $this->JobErrorReason = $JobErrorReason;
    $this->MediaErrorReason = $MediaErrorReason;
    $this->NewEntityCreationErrorReason = $NewEntityCreationErrorReason;
    $this->NotEmptyErrorReason = $NotEmptyErrorReason;
    $this->NotWhitelistedErrorReason = $NotWhitelistedErrorReason;
    $this->NullErrorReason = $NullErrorReason;
    $this->OperationAccessDeniedReason = $OperationAccessDeniedReason;
    $this->OperatorErrorReason = $OperatorErrorReason;
    $this->PagingErrorReason = $PagingErrorReason;
    $this->PolicyViolationErrorReason = $PolicyViolationErrorReason;
    $this->QueryErrorReason = $QueryErrorReason;
    $this->QuotaCheckErrorReason = $QuotaCheckErrorReason;
    $this->QuotaErrorReason = $QuotaErrorReason;
    $this->RangeErrorReason = $RangeErrorReason;
    $this->RateExceededErrorReason = $RateExceededErrorReason;
    $this->ReadOnlyErrorReason = $ReadOnlyErrorReason;
    $this->RegionCodeErrorReason = $RegionCodeErrorReason;
    $this->RejectedErrorReason = $RejectedErrorReason;
    $this->RequestErrorReason = $RequestErrorReason;
    $this->RequiredErrorReason = $RequiredErrorReason;
    $this->SelectorErrorReason = $SelectorErrorReason;
    $this->SettingErrorReason = $SettingErrorReason;
    $this->SizeLimitErrorReason = $SizeLimitErrorReason;
    $this->StatsQueryErrorReason = $StatsQueryErrorReason;
    $this->StringLengthErrorReason = $StringLengthErrorReason;
    $this->TargetErrorReason = $TargetErrorReason;
  }
}}

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Base class for exceptions.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * Errors returned when Authentication failed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Errors encountered when trying to authorize a user.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Errors that are thrown when a Beta feature is accessed incorrectly.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("Bid", FALSE)) {
/**
 * Represents a bid of a certain amount.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Bid {
  /**
   * @access public
   * @var Money
   */
  public $amount;

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
    return "Bid";
  }

  public function __construct($amount = NULL) {
    $this->amount = $amount;
  }
}}

if (!class_exists("BidMultiplier", FALSE)) {
/**
 * Represents a multiplier to modify a bid. The final value after
 * modification is represented by the multiplied bid value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BidMultiplier {
  /**
   * @access public
   * @var double
   */
  public $multiplier;

  /**
   * @access public
   * @var Bid
   */
  public $multipliedBid;

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
    return "BidMultiplier";
  }

  public function __construct($multiplier = NULL, $multipliedBid = NULL) {
    $this->multiplier = $multiplier;
    $this->multipliedBid = $multipliedBid;
  }
}}

if (!class_exists("BiddableAdGroupCriterion", FALSE)) {
/**
 * A biddable (positive) criterion in an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BiddableAdGroupCriterion extends AdGroupCriterion {
  /**
   * @access public
   * @var tnsUserStatus
   */
  public $userStatus;

  /**
   * @access public
   * @var tnsSystemServingStatus
   */
  public $systemServingStatus;

  /**
   * @access public
   * @var tnsApprovalStatus
   */
  public $approvalStatus;

  /**
   * @access public
   * @var string[]
   */
  public $disapprovalReasons;

  /**
   * @access public
   * @var string
   */
  public $destinationUrl;

  /**
   * @access public
   * @var AdGroupCriterionBids
   */
  public $bids;

  /**
   * @access public
   * @var BiddableAdGroupCriterionExperimentData
   */
  public $experimentData;

  /**
   * @access public
   * @var Bid
   */
  public $firstPageCpc;

  /**
   * @access public
   * @var Bid
   */
  public $topOfPageCpc;

  /**
   * @access public
   * @var QualityInfo
   */
  public $qualityInfo;

  /**
   * @access public
   * @var Stats
   */
  public $stats;

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
    return "BiddableAdGroupCriterion";
  }

  public function __construct($userStatus = NULL, $systemServingStatus = NULL, $approvalStatus = NULL, $disapprovalReasons = NULL, $destinationUrl = NULL, $bids = NULL, $experimentData = NULL, $firstPageCpc = NULL, $topOfPageCpc = NULL, $qualityInfo = NULL, $stats = NULL, $adGroupId = NULL, $criterionUse = NULL, $criterion = NULL, $forwardCompatibilityMap = NULL, $AdGroupCriterionType = NULL) {
    parent::__construct();
    $this->userStatus = $userStatus;
    $this->systemServingStatus = $systemServingStatus;
    $this->approvalStatus = $approvalStatus;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->destinationUrl = $destinationUrl;
    $this->bids = $bids;
    $this->experimentData = $experimentData;
    $this->firstPageCpc = $firstPageCpc;
    $this->topOfPageCpc = $topOfPageCpc;
    $this->qualityInfo = $qualityInfo;
    $this->stats = $stats;
    $this->adGroupId = $adGroupId;
    $this->criterionUse = $criterionUse;
    $this->criterion = $criterion;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    $this->AdGroupCriterionType = $AdGroupCriterionType;
  }
}}

if (!class_exists("BiddableAdGroupCriterionExperimentData", FALSE)) {
/**
 * Data associated with an advertiser experiment for this {@link BiddableAdGroupCriterion}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BiddableAdGroupCriterionExperimentData {
  /**
   * @access public
   * @var integer
   */
  public $experimentId;

  /**
   * @access public
   * @var tnsExperimentDeltaStatus
   */
  public $experimentDeltaStatus;

  /**
   * @access public
   * @var tnsExperimentDataStatus
   */
  public $experimentDataStatus;

  /**
   * @access public
   * @var AdGroupCriterionExperimentBidMultiplier
   */
  public $experimentBidMultiplier;

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
    return "BiddableAdGroupCriterionExperimentData";
  }

  public function __construct($experimentId = NULL, $experimentDeltaStatus = NULL, $experimentDataStatus = NULL, $experimentBidMultiplier = NULL) {
    $this->experimentId = $experimentId;
    $this->experimentDeltaStatus = $experimentDeltaStatus;
    $this->experimentDataStatus = $experimentDataStatus;
    $this->experimentBidMultiplier = $experimentBidMultiplier;
  }
}}

if (!class_exists("BiddingError", FALSE)) {
/**
 * Represents bidding errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BiddingError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BiddingError";
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

if (!class_exists("BiddingStrategy", FALSE)) {
/**
 * A campaign's bidding strategy, such as manual CPC, manual CPM, budget optimizer, etc.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BiddingStrategy {
  /**
   * @access public
   * @var string
   */
  public $BiddingStrategyType;

  private $_parameterMap = array (
    "BiddingStrategy.Type" => "BiddingStrategyType",
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
    return "BiddingStrategy";
  }

  public function __construct($BiddingStrategyType = NULL) {
    $this->BiddingStrategyType = $BiddingStrategyType;
  }
}}

if (!class_exists("BiddingTransition", FALSE)) {
/**
 * Used to switch a campaign's bidding strategy.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BiddingTransition {
  /**
   * @access public
   * @var BiddingStrategy
   */
  public $targetBiddingStrategy;

  /**
   * @access public
   * @var string
   */
  public $BiddingTransitionType;

  private $_parameterMap = array (
    "BiddingTransition.Type" => "BiddingTransitionType",
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
    return "BiddingTransition";
  }

  public function __construct($targetBiddingStrategy = NULL, $BiddingTransitionType = NULL) {
    $this->targetBiddingStrategy = $targetBiddingStrategy;
    $this->BiddingTransitionType = $BiddingTransitionType;
  }
}}

if (!class_exists("BiddingTransitionError", FALSE)) {
/**
 * Bidding transition errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BiddingTransitionError extends ApiError {
  /**
   * @access public
   * @var tnsBiddingTransitionErrorReason
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
    return "BiddingTransitionError";
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

if (!class_exists("BillingSummary", FALSE)) {
/**
 * Represents the billing summary of the job that provides the overall cost of
 * the job's operations, i.e., for the work done <i>by</i> the job. This
 * therefore excludes the cost of operating on the job itself - setting up the
 * job, polling for its status, retrieving the result, etc.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BillingSummary {
  /**
   * @access public
   * @var integer
   */
  public $numOperations;

  /**
   * @access public
   * @var integer
   */
  public $numUnits;

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
    return "BillingSummary";
  }

  public function __construct($numOperations = NULL, $numUnits = NULL) {
    $this->numOperations = $numOperations;
    $this->numUnits = $numUnits;
  }
}}

if (!class_exists("Budget", FALSE)) {
/**
 * Budgets are used for managing the amount of money spent on AdWords.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Budget {
  /**
   * @access public
   * @var integer
   */
  public $budgetId;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsBudgetBudgetPeriod
   */
  public $period;

  /**
   * @access public
   * @var Money
   */
  public $amount;

  /**
   * @access public
   * @var tnsBudgetBudgetDeliveryMethod
   */
  public $deliveryMethod;

  /**
   * @access public
   * @var integer
   */
  public $referenceCount;

  /**
   * @access public
   * @var tnsBudgetBudgetStatus
   */
  public $status;

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
    return "Budget";
  }

  public function __construct($budgetId = NULL, $name = NULL, $period = NULL, $amount = NULL, $deliveryMethod = NULL, $referenceCount = NULL, $status = NULL) {
    $this->budgetId = $budgetId;
    $this->name = $name;
    $this->period = $period;
    $this->amount = $amount;
    $this->deliveryMethod = $deliveryMethod;
    $this->referenceCount = $referenceCount;
    $this->status = $status;
  }
}}

if (!class_exists("BudgetError", FALSE)) {
/**
 * A list of all the error codes being used by the common budget domain package.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BudgetError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BudgetError";
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

if (!class_exists("BudgetOptimizer", FALSE)) {
/**
 * In budget optimizer, Google automatically places bids for the user
 * based on their daily/monthly budget.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BudgetOptimizer extends BiddingStrategy {
  /**
   * @access public
   * @var boolean
   */
  public $enhancedCpcEnabled;

  /**
   * @access public
   * @var Money
   */
  public $bidCeiling;

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
    return "BudgetOptimizer";
  }

  public function __construct($enhancedCpcEnabled = NULL, $bidCeiling = NULL, $BiddingStrategyType = NULL) {
    parent::__construct();
    $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    $this->bidCeiling = $bidCeiling;
    $this->BiddingStrategyType = $BiddingStrategyType;
  }
}}

if (!class_exists("BudgetOptimizerAdGroupBids", FALSE)) {
/**
 * Adgroup level bids used in budget optimizer bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BudgetOptimizerAdGroupBids extends AdGroupBids {
  /**
   * @access public
   * @var Bid
   */
  public $proxyKeywordMaxCpc;

  /**
   * @access public
   * @var boolean
   */
  public $enhancedCpcEnabled;

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
    return "BudgetOptimizerAdGroupBids";
  }

  public function __construct($proxyKeywordMaxCpc = NULL, $enhancedCpcEnabled = NULL, $interactionBids = NULL, $AdGroupBidsType = NULL) {
    parent::__construct();
    $this->proxyKeywordMaxCpc = $proxyKeywordMaxCpc;
    $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    $this->interactionBids = $interactionBids;
    $this->AdGroupBidsType = $AdGroupBidsType;
  }
}}

if (!class_exists("BudgetOptimizerAdGroupCriterionBids", FALSE)) {
/**
 * AdGroupCriterion level bids used in budget optimizer bidding strategy.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BudgetOptimizerAdGroupCriterionBids extends AdGroupCriterionBids {
  /**
   * @access public
   * @var Bid
   */
  public $proxyBid;

  /**
   * @access public
   * @var boolean
   */
  public $enhancedCpcEnabled;

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
    return "BudgetOptimizerAdGroupCriterionBids";
  }

  public function __construct($proxyBid = NULL, $enhancedCpcEnabled = NULL, $AdGroupCriterionBidsType = NULL) {
    parent::__construct();
    $this->proxyBid = $proxyBid;
    $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    $this->AdGroupCriterionBidsType = $AdGroupCriterionBidsType;
  }
}}

if (!class_exists("BulkMutateJobError", FALSE)) {
/**
 * Bulk mutate job handling errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateJobError extends ApiError {
  /**
   * @access public
   * @var tnsBulkMutateJobErrorReason
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
    return "BulkMutateJobError";
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

if (!class_exists("BulkMutateJobPolicy", FALSE)) {
/**
 * A basic job policy.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateJobPolicy {
  /**
   * @access public
   * @var integer[]
   */
  public $prerequisiteJobIds;

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
    return "BulkMutateJobPolicy";
  }

  public function __construct($prerequisiteJobIds = NULL) {
    $this->prerequisiteJobIds = $prerequisiteJobIds;
  }
}}

if (!class_exists("BulkMutateRequest", FALSE)) {
/**
 * A request part of a {@link BulkMutateJob}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateRequest {
  /**
   * @access public
   * @var integer
   */
  public $partIndex;

  /**
   * @access public
   * @var OperationStream[]
   */
  public $operationStreams;

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
    return "BulkMutateRequest";
  }

  public function __construct($partIndex = NULL, $operationStreams = NULL) {
    $this->partIndex = $partIndex;
    $this->operationStreams = $operationStreams;
  }
}}

if (!class_exists("BulkMutateResult", FALSE)) {
/**
 * Represents a result part of a {@link BulkMutateJob}.
 * 
 * <p>Once one or more mutate operations have been processed, the bulk mutate
 * job will eventually be completed. This means that the job will have a result
 * corresponding to each operation. The types of results for an operation are:
 * <ul>
 * <li>{@link ReturnValueResult}: the corresponding operation was successfully
 * processed and this result contains the return value of that operation;
 * </li>
 * <li>{@link FailureResult} or {@link BatchFailureResult}: the corresponding
 * operation was in a batch that failed with errors. Please inspect these
 * errors to determine if the operation itself was faulty and if so what
 * errors need to be fixed before you submit this operation as part of a
 * future job.</li>
 * <li>{@link LostResult}: the corresponding operation was processed - it was
 * either successful and had a return value, or it was a part of a failed
 * batch. Unfortunately, despite our best efforts, we were unable to
 * durably save the result. You may have to retrieve the related state of
 * your account to determine if this operation actually succeeded.</li>
 * <li>{@link UnprocessedResult}: the corresponding operation was not processed
 * because the job was aborted <i>Note: The job's status will be
 * {@code COMPLETED}, signifying that although it may have some operations
 * that were processed, it cannot be resumed.</i></li></p>
 * 
 * <p>The results of a job are structured so that the each operation can be
 * easily matched to its corresponding result. So for every
 * {@link BulkMutateRequest} in a job, there is a corresponding
 * {@code BulkMutateResult}; For every {@link OperationStream} in a request
 * part, there is a corresponding {@link OperationStreamResult}; And, for
 * every {@link Operation} in an operation stream, there is an
 * {@link OperationResult}.</p>
 * 
 * <p>Within an operation stream, the operations are processed in atomic
 * batches. So even one faulty operation may cause its neighboring non-faulty
 * operations to fail just because they happened to be processed in the same
 * batch. It is important to keep this batch failure reporting scheme in mind
 * when handling operation failures.</p>
 * 
 * <p>There will be a single {@link ApiException} returned for each failing
 * batch of operations, and it will have a similar structure and
 * interpretation to the exceptions returned by the synchronous AdWords API
 * services. This exception is returned in a {@link FailureResult} that
 * corresponds to the first operation of the failing batch.</p>
 * 
 * <p>The exception may contain multiple errors, and each error may have
 * {@code OGNL path}s that identify the faulty operation(s) by index (or
 * position within the batch). The first operation in the batch has an
 * implicit index of 0. The subsequent operations in the batch have a
 * corresponding {@link BatchFailureResult} which explicitly specifies the
 * index of the operation within the batch.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateResult {
  /**
   * @access public
   * @var integer
   */
  public $partIndex;

  /**
   * @access public
   * @var OperationStreamResult[]
   */
  public $operationStreamResults;

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
    return "BulkMutateResult";
  }

  public function __construct($partIndex = NULL, $operationStreamResults = NULL) {
    $this->partIndex = $partIndex;
    $this->operationStreamResults = $operationStreamResults;
  }
}}

if (!class_exists("Campaign", FALSE)) {
/**
 * Data representing an AdWords campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Campaign {
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
   * @var tnsCampaignStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsServingStatus
   */
  public $servingStatus;

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
   * @var Budget
   */
  public $budget;

  /**
   * @access public
   * @var BiddingStrategy
   */
  public $biddingStrategy;

  /**
   * @access public
   * @var ConversionOptimizerEligibility
   */
  public $conversionOptimizerEligibility;

  /**
   * @access public
   * @var CampaignStats
   */
  public $campaignStats;

  /**
   * @access public
   * @var tnsAdServingOptimizationStatus
   */
  public $adServingOptimizationStatus;

  /**
   * @access public
   * @var FrequencyCap
   */
  public $frequencyCap;

  /**
   * @access public
   * @var Setting[]
   */
  public $settings;

  /**
   * @access public
   * @var NetworkSetting
   */
  public $networkSetting;

  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

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
    return "Campaign";
  }

  public function __construct($id = NULL, $name = NULL, $status = NULL, $servingStatus = NULL, $startDate = NULL, $endDate = NULL, $budget = NULL, $biddingStrategy = NULL, $conversionOptimizerEligibility = NULL, $campaignStats = NULL, $adServingOptimizationStatus = NULL, $frequencyCap = NULL, $settings = NULL, $networkSetting = NULL, $forwardCompatibilityMap = NULL) {
    $this->id = $id;
    $this->name = $name;
    $this->status = $status;
    $this->servingStatus = $servingStatus;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->budget = $budget;
    $this->biddingStrategy = $biddingStrategy;
    $this->conversionOptimizerEligibility = $conversionOptimizerEligibility;
    $this->campaignStats = $campaignStats;
    $this->adServingOptimizationStatus = $adServingOptimizationStatus;
    $this->frequencyCap = $frequencyCap;
    $this->settings = $settings;
    $this->networkSetting = $networkSetting;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
  }
}}

if (!class_exists("CampaignAdExtension", FALSE)) {
/**
 * Represents a campaign level ad extension. A campaign ad extension specifies
 * a campaign and an ad extension which can extend any ad under that campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignAdExtension {
  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var AdExtension
   */
  public $adExtension;

  /**
   * @access public
   * @var tnsCampaignAdExtensionStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsCampaignAdExtensionApprovalStatus
   */
  public $approvalStatus;

  /**
   * @access public
   * @var CampaignAdExtensionStats
   */
  public $stats;

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
    return "CampaignAdExtension";
  }

  public function __construct($campaignId = NULL, $adExtension = NULL, $status = NULL, $approvalStatus = NULL, $stats = NULL) {
    $this->campaignId = $campaignId;
    $this->adExtension = $adExtension;
    $this->status = $status;
    $this->approvalStatus = $approvalStatus;
    $this->stats = $stats;
  }
}}

if (!class_exists("CampaignAdExtensionError", FALSE)) {
/**
 * CampaignAdExtension errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignAdExtensionError extends ApiError {
  /**
   * @access public
   * @var tnsCampaignAdExtensionErrorReason
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
    return "CampaignAdExtensionError";
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

if (!class_exists("CampaignCriterion", FALSE)) {
/**
 * Represents a campaign level criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignCriterion {
  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var boolean
   */
  public $isNegative;

  /**
   * @access public
   * @var Criterion
   */
  public $criterion;

  /**
   * @access public
   * @var double
   */
  public $bidModifier;

  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

  /**
   * @access public
   * @var string
   */
  public $CampaignCriterionType;

  private $_parameterMap = array (
    "CampaignCriterion.Type" => "CampaignCriterionType",
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
    return "CampaignCriterion";
  }

  public function __construct($campaignId = NULL, $isNegative = NULL, $criterion = NULL, $bidModifier = NULL, $forwardCompatibilityMap = NULL, $CampaignCriterionType = NULL) {
    $this->campaignId = $campaignId;
    $this->isNegative = $isNegative;
    $this->criterion = $criterion;
    $this->bidModifier = $bidModifier;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    $this->CampaignCriterionType = $CampaignCriterionType;
  }
}}

if (!class_exists("CampaignCriterionError", FALSE)) {
/**
 * Base error class for Campaign Criterion Service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignCriterionError extends ApiError {
  /**
   * @access public
   * @var tnsCampaignCriterionErrorReason
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
    return "CampaignCriterionError";
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

if (!class_exists("CampaignError", FALSE)) {
/**
 * Base error class for Campaign Service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignError extends ApiError {
  /**
   * @access public
   * @var tnsCampaignErrorReason
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
    return "CampaignError";
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
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("ComparableValue", FALSE)) {
/**
 * Comparable types for constructing ranges with.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("ConversionOptimizer", FALSE)) {
/**
 * Conversion optimizer bidding strategy. For more information, visit the
 * <a href="http://www.google.com/adwords/conversionoptimizer/index.html"
 * >Conversion Optimizer site</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ConversionOptimizer extends BiddingStrategy {
  /**
   * @access public
   * @var tnsPricingModel
   */
  public $pricingModel;

  /**
   * @access public
   * @var tnsConversionOptimizerBidType
   */
  public $conversionOptimizerBidType;

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
    return "ConversionOptimizer";
  }

  public function __construct($pricingModel = NULL, $conversionOptimizerBidType = NULL, $BiddingStrategyType = NULL) {
    parent::__construct();
    $this->pricingModel = $pricingModel;
    $this->conversionOptimizerBidType = $conversionOptimizerBidType;
    $this->BiddingStrategyType = $BiddingStrategyType;
  }
}}

if (!class_exists("ConversionOptimizerAdGroupBids", FALSE)) {
/**
 * Adgroup level bids used in conversion optimizer bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ConversionOptimizerAdGroupBids extends AdGroupBids {
  /**
   * @access public
   * @var Bid
   */
  public $targetCpa;

  /**
   * @access public
   * @var tnsConversionOptimizerBidType
   */
  public $conversionOptimizerBidType;

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
    return "ConversionOptimizerAdGroupBids";
  }

  public function __construct($targetCpa = NULL, $conversionOptimizerBidType = NULL, $interactionBids = NULL, $AdGroupBidsType = NULL) {
    parent::__construct();
    $this->targetCpa = $targetCpa;
    $this->conversionOptimizerBidType = $conversionOptimizerBidType;
    $this->interactionBids = $interactionBids;
    $this->AdGroupBidsType = $AdGroupBidsType;
  }
}}

if (!class_exists("ConversionOptimizerAdGroupCriterionBids", FALSE)) {
/**
 * AdGroupCriterion level bids used in conversion optimizer bidding strategy.
 * This bidding strategy does not contain any bid information at the
 * AGC level.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ConversionOptimizerAdGroupCriterionBids extends AdGroupCriterionBids {
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
    return "ConversionOptimizerAdGroupCriterionBids";
  }

  public function __construct($AdGroupCriterionBidsType = NULL) {
    parent::__construct();
    $this->AdGroupCriterionBidsType = $AdGroupCriterionBidsType;
  }
}}

if (!class_exists("ConversionOptimizerBiddingTransition", FALSE)) {
/**
 * Used to switch a campaign's bidding strategy to conversion optimizer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ConversionOptimizerBiddingTransition extends BiddingTransition {
  /**
   * @access public
   * @var boolean
   */
  public $useSavedBids;

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
    return "ConversionOptimizerBiddingTransition";
  }

  public function __construct($useSavedBids = NULL, $targetBiddingStrategy = NULL, $BiddingTransitionType = NULL) {
    parent::__construct();
    $this->useSavedBids = $useSavedBids;
    $this->targetBiddingStrategy = $targetBiddingStrategy;
    $this->BiddingTransitionType = $BiddingTransitionType;
  }
}}

if (!class_exists("ConversionOptimizerEligibility", FALSE)) {
/**
 * Eligibility data for Campaign to transition to Conversion Optimizer
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ConversionOptimizerEligibility {
  /**
   * @access public
   * @var boolean
   */
  public $eligible;

  /**
   * @access public
   * @var tnsConversionOptimizerEligibilityRejectionReason[]
   */
  public $rejectionReasons;

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
    return "ConversionOptimizerEligibility";
  }

  public function __construct($eligible = NULL, $rejectionReasons = NULL) {
    $this->eligible = $eligible;
    $this->rejectionReasons = $rejectionReasons;
  }
}}

if (!class_exists("Criterion", FALSE)) {
/**
 * Represents a criterion (such as a keyword, placement, or vertical).
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Criterion {
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

  private $_parameterMap = array (
    "Criterion.Type" => "CriterionType",
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
    return "Criterion";
  }

  public function __construct($id = NULL, $type = NULL, $CriterionType = NULL) {
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("CriterionError", FALSE)) {
/**
 * Error class used for reporting criteria related errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CriterionError";
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

if (!class_exists("CriterionParameter", FALSE)) {
/**
 * Base type of criterion parameters.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionParameter {
  /**
   * @access public
   * @var string
   */
  public $CriterionParameterType;

  private $_parameterMap = array (
    "CriterionParameter.Type" => "CriterionParameterType",
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
    return "CriterionParameter";
  }

  public function __construct($CriterionParameterType = NULL) {
    $this->CriterionParameterType = $CriterionParameterType;
  }
}}

if (!class_exists("DatabaseError", FALSE)) {
/**
 * Errors that are thrown due to a database access problem.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("DateError", FALSE)) {
/**
 * Errors associated with invalid dates and date ranges.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("DeprecatedAd", FALSE)) {
/**
 * Represents a deprecated ad.
 * 
 * Deprecated ads can be deleted, but cannot be created.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class DeprecatedAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsDeprecatedAdType
   */
  public $type;

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
    return "DeprecatedAd";
  }

  public function __construct($name = NULL, $type = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->name = $name;
    $this->type = $type;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("Dimensions", FALSE)) {
/**
 * Represents a simple height-width dimension.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Dimensions {
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
    return "Dimensions";
  }

  public function __construct($width = NULL, $height = NULL) {
    $this->width = $width;
    $this->height = $height;
  }
}}

if (!class_exists("DistinctError", FALSE)) {
/**
 * Errors related to distinct ids or content.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("DomainInfoExtension", FALSE)) {
/**
 * Domain extension, which adds domain info to ads.
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class DomainInfoExtension extends AdExtension {
  /**
   * @access public
   * @var string
   */
  public $domainName;

  /**
   * @access public
   * @var string
   */
  public $languageCode;

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
    return "DomainInfoExtension";
  }

  public function __construct($domainName = NULL, $languageCode = NULL, $id = NULL, $AdExtensionType = NULL) {
    parent::__construct();
    $this->domainName = $domainName;
    $this->languageCode = $languageCode;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }
}}

if (!class_exists("EntityAccessDenied", FALSE)) {
/**
 * Reports permission problems trying to access an entity.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class EntityAccessDenied extends ApiError {
  /**
   * @access public
   * @var tnsEntityAccessDeniedReason
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
    return "EntityAccessDenied";
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

if (!class_exists("EntityCountLimitExceeded", FALSE)) {
/**
 * Signals that an entity count limit was exceeded for some level.
 * For example, too many criteria for a campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class EntityCountLimitExceeded extends ApiError {
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
    return "EntityCountLimitExceeded";
  }

  public function __construct($reason = NULL, $enclosingId = NULL, $limit = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("EntityId", FALSE)) {
/**
 * A qualified long-valued identity that can identify different types of
 * AdWords entities such as campaigns and ad-groups.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class EntityId {
  /**
   * @access public
   * @var tnsEntityIdType
   */
  public $type;

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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityId";
  }

  public function __construct($type = NULL, $value = NULL) {
    $this->type = $type;
    $this->value = $value;
  }
}}

if (!class_exists("EntityNotFound", FALSE)) {
/**
 * An id did not correspond to an entity, or it referred to an entity which does not belong to the
 * customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class EntityNotFound extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "EntityNotFound";
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

if (!class_exists("ExemptionRequest", FALSE)) {
/**
 * A request to be exempted from a {@link PolicyViolationError}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
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

if (!class_exists("FrequencyCap", FALSE)) {
/**
 * A frequency cap is the maximum number of times an ad (or some set of ads) can
 * be shown to a user over a particular time period.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class FrequencyCap {
  /**
   * @access public
   * @var integer
   */
  public $impressions;

  /**
   * @access public
   * @var tnsTimeUnit
   */
  public $timeUnit;

  /**
   * @access public
   * @var tnsLevel
   */
  public $level;

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
    return "FrequencyCap";
  }

  public function __construct($impressions = NULL, $timeUnit = NULL, $level = NULL) {
    $this->impressions = $impressions;
    $this->timeUnit = $timeUnit;
    $this->level = $level;
  }
}}

if (!class_exists("Gender", FALSE)) {
/**
 * Represents a Gender criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only excludable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Gender extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Gender";
  }

  public function __construct($genderType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->genderType = $genderType;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("GeoPoint", FALSE)) {
/**
 * Specifies a geo location with the supplied latitude/longitude.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class GeoPoint {
  /**
   * @access public
   * @var integer
   */
  public $latitudeInMicroDegrees;

  /**
   * @access public
   * @var integer
   */
  public $longitudeInMicroDegrees;

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
    return "GeoPoint";
  }

  public function __construct($latitudeInMicroDegrees = NULL, $longitudeInMicroDegrees = NULL) {
    $this->latitudeInMicroDegrees = $latitudeInMicroDegrees;
    $this->longitudeInMicroDegrees = $longitudeInMicroDegrees;
  }
}}

if (!class_exists("IdError", FALSE)) {
/**
 * Errors associated with the ids.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("ImageAd", FALSE)) {
/**
 * Represents an ImageAd.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ImageAd extends Ad {
  /**
   * @access public
   * @var Image
   */
  public $image;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $adToCopyImageFrom;

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
    return "ImageAd";
  }

  public function __construct($image = NULL, $name = NULL, $adToCopyImageFrom = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->image = $image;
    $this->name = $name;
    $this->adToCopyImageFrom = $adToCopyImageFrom;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("ImageError", FALSE)) {
/**
 * Error class for errors associated with parsing image data.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ImageError extends ApiError {
  /**
   * @access public
   * @var tnsImageErrorReason
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
    return "ImageError";
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

if (!class_exists("InAppLinkExtension", FALSE)) {
/**
 * <p>This extension is useful for advertisers who wish to provide users with a
 * link that points to the advertiser's mobile application in addition to their
 * website.
 * 
 * <p>It is also known as Mobile App Extension.
 * 
 * <p>The API allows one InAppLinkExtension per {@code AppStore} per campaign.
 * Only the extension for a given {@code AppStore} will render on the device
 * relevant to that {@code AppStore} (e.g. iPhones for {@code AppStore.ITUNES}
 * and Android phones for {@code AppStore.GOOGLE_PLAY}).
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class InAppLinkExtension extends AdExtension {
  /**
   * @access public
   * @var string
   */
  public $inAppLinkText;

  /**
   * @access public
   * @var string
   */
  public $inAppLinkUrl;

  /**
   * @access public
   * @var tnsInAppLinkExtensionAppStore
   */
  public $appStore;

  /**
   * @access public
   * @var string
   */
  public $appId;

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
    return "InAppLinkExtension";
  }

  public function __construct($inAppLinkText = NULL, $inAppLinkUrl = NULL, $appStore = NULL, $appId = NULL, $id = NULL, $AdExtensionType = NULL) {
    parent::__construct();
    $this->inAppLinkText = $inAppLinkText;
    $this->inAppLinkUrl = $inAppLinkUrl;
    $this->appStore = $appStore;
    $this->appId = $appId;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }
}}

if (!class_exists("InteractionBid", FALSE)) {
/**
 * Abstract base type for interaction bids. Represents bids for interactions other than clicks
 * on the ad url, such as phone calls.
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class InteractionBid {
  /**
   * @access public
   * @var Bid
   */
  public $interactionBidAmount;

  /**
   * @access public
   * @var Bid
   */
  public $minimumBid;

  /**
   * @access public
   * @var tnsInteractionBidBidStatus
   */
  public $bidStatus;

  /**
   * @access public
   * @var string
   */
  public $InteractionBidType;

  private $_parameterMap = array (
    "InteractionBid.Type" => "InteractionBidType",
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
    return "InteractionBid";
  }

  public function __construct($interactionBidAmount = NULL, $minimumBid = NULL, $bidStatus = NULL, $InteractionBidType = NULL) {
    $this->interactionBidAmount = $interactionBidAmount;
    $this->minimumBid = $minimumBid;
    $this->bidStatus = $bidStatus;
    $this->InteractionBidType = $InteractionBidType;
  }
}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("Job", FALSE)) {
/**
 * Represents an asynchronous macro unit of work.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Job {
  /**
   * @access public
   * @var ApiErrorReason
   */
  public $failureReason;

  /**
   * @access public
   * @var JobStats
   */
  public $stats;

  /**
   * @access public
   * @var BillingSummary
   */
  public $billingSummary;

  /**
   * @access public
   * @var string
   */
  public $JobType;

  private $_parameterMap = array (
    "Job.Type" => "JobType",
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
    return "Job";
  }

  public function __construct($failureReason = NULL, $stats = NULL, $billingSummary = NULL, $JobType = NULL) {
    $this->failureReason = $failureReason;
    $this->stats = $stats;
    $this->billingSummary = $billingSummary;
    $this->JobType = $JobType;
  }
}}

if (!class_exists("JobError", FALSE)) {
/**
 * Job handling errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class JobError extends ApiError {
  /**
   * @access public
   * @var tnsJobErrorReason
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
    return "JobError";
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

if (!class_exists("JobEvent", FALSE)) {
/**
 * An event defined by a status change of a job.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class JobEvent {
  /**
   * @access public
   * @var string
   */
  public $dateTime;

  /**
   * @access public
   * @var string
   */
  public $JobEventType;

  private $_parameterMap = array (
    "JobEvent.Type" => "JobEventType",
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
    return "JobEvent";
  }

  public function __construct($dateTime = NULL, $JobEventType = NULL) {
    $this->dateTime = $dateTime;
    $this->JobEventType = $JobEventType;
  }
}}

if (!class_exists("JobResult", FALSE)) {
/**
 * Represents the result data of a job. This contains both the results of
 * successfully processed operations as well as errors returned by failed
 * operations.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class JobResult {
  /**
   * @access public
   * @var BulkMutateResult
   */
  public $BulkMutateResult;

  /**
   * @access public
   * @var SimpleMutateResult
   */
  public $SimpleMutateResult;

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
    return "JobResult";
  }

  public function __construct($BulkMutateResult = NULL, $SimpleMutateResult = NULL) {
    $this->BulkMutateResult = $BulkMutateResult;
    $this->SimpleMutateResult = $SimpleMutateResult;
  }
}}

if (!class_exists("JobSelector", FALSE)) {
/**
 * For selecting jobs whose information will be returned from a get method call
 * of a job service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class JobSelector {
  /**
   * @access public
   * @var boolean
   */
  public $includeHistory;

  /**
   * @access public
   * @var boolean
   */
  public $includeStats;

  /**
   * @access public
   * @var string
   */
  public $JobSelectorType;

  private $_parameterMap = array (
    "JobSelector.Type" => "JobSelectorType",
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
    return "JobSelector";
  }

  public function __construct($includeHistory = NULL, $includeStats = NULL, $JobSelectorType = NULL) {
    $this->includeHistory = $includeHistory;
    $this->includeStats = $includeStats;
    $this->JobSelectorType = $JobSelectorType;
  }
}}

if (!class_exists("JobStats", FALSE)) {
/**
 * Job-handling statistics.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class JobStats {
  /**
   * @access public
   * @var integer
   */
  public $progressPercent;

  /**
   * @access public
   * @var integer
   */
  public $pendingTimeMillis;

  /**
   * @access public
   * @var integer
   */
  public $processingTimeMillis;

  /**
   * @access public
   * @var string
   */
  public $JobStatsType;

  private $_parameterMap = array (
    "JobStats.Type" => "JobStatsType",
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
    return "JobStats";
  }

  public function __construct($progressPercent = NULL, $pendingTimeMillis = NULL, $processingTimeMillis = NULL, $JobStatsType = NULL) {
    $this->progressPercent = $progressPercent;
    $this->pendingTimeMillis = $pendingTimeMillis;
    $this->processingTimeMillis = $processingTimeMillis;
    $this->JobStatsType = $JobStatsType;
  }
}}

if (!class_exists("Keyword", FALSE)) {
/**
 * Represents a keyword.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Keyword extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Keyword";
  }

  public function __construct($text = NULL, $matchType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->text = $text;
    $this->matchType = $matchType;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Language", FALSE)) {
/**
 * Represents a Language criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Language extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Language";
  }

  public function __construct($code = NULL, $name = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->code = $code;
    $this->name = $name;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Location", FALSE)) {
/**
 * Represents Location criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type can be either targeted or excluded.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Location extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Location";
  }

  public function __construct($locationName = NULL, $displayType = NULL, $targetingStatus = NULL, $parentLocations = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->locationName = $locationName;
    $this->displayType = $displayType;
    $this->targetingStatus = $targetingStatus;
    $this->parentLocations = $parentLocations;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("LocationExtension", FALSE)) {
/**
 * Location based ad extension.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class LocationExtension extends AdExtension {
  /**
   * @access public
   * @var Address
   */
  public $address;

  /**
   * @access public
   * @var GeoPoint
   */
  public $geoPoint;

  /**
   * @access public
   * @var base64Binary
   */
  public $encodedLocation;

  /**
   * @access public
   * @var string
   */
  public $companyName;

  /**
   * @access public
   * @var string
   */
  public $phoneNumber;

  /**
   * @access public
   * @var tnsLocationExtensionSource
   */
  public $source;

  /**
   * @access public
   * @var integer
   */
  public $iconMediaId;

  /**
   * @access public
   * @var integer
   */
  public $imageMediaId;

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
    return "LocationExtension";
  }

  public function __construct($address = NULL, $geoPoint = NULL, $encodedLocation = NULL, $companyName = NULL, $phoneNumber = NULL, $source = NULL, $iconMediaId = NULL, $imageMediaId = NULL, $id = NULL, $AdExtensionType = NULL) {
    parent::__construct();
    $this->address = $address;
    $this->geoPoint = $geoPoint;
    $this->encodedLocation = $encodedLocation;
    $this->companyName = $companyName;
    $this->phoneNumber = $phoneNumber;
    $this->source = $source;
    $this->iconMediaId = $iconMediaId;
    $this->imageMediaId = $imageMediaId;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }
}}

if (!class_exists("LocationOverrideInfo", FALSE)) {
/**
 * Represents override info for ad level LocationExtension overrides.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class LocationOverrideInfo {
  /**
   * @access public
   * @var integer
   */
  public $radius;

  /**
   * @access public
   * @var tnsLocationOverrideInfoRadiusUnits
   */
  public $radiusUnits;

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
    return "LocationOverrideInfo";
  }

  public function __construct($radius = NULL, $radiusUnits = NULL) {
    $this->radius = $radius;
    $this->radiusUnits = $radiusUnits;
  }
}}

if (!class_exists("LocationSyncExtension", FALSE)) {
/**
 * Local business center(LBC) sync extension that ties a LBC account with a campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class LocationSyncExtension extends AdExtension {
  /**
   * @access public
   * @var string
   */
  public $email;

  /**
   * @access public
   * @var string
   */
  public $authToken;

  /**
   * @access public
   * @var OAuthInfo
   */
  public $oAuthInfo;

  /**
   * @access public
   * @var integer
   */
  public $iconMediaId;

  /**
   * @access public
   * @var boolean
   */
  public $shouldSyncUrl;

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
    return "LocationSyncExtension";
  }

  public function __construct($email = NULL, $authToken = NULL, $oAuthInfo = NULL, $iconMediaId = NULL, $shouldSyncUrl = NULL, $id = NULL, $AdExtensionType = NULL) {
    parent::__construct();
    $this->email = $email;
    $this->authToken = $authToken;
    $this->oAuthInfo = $oAuthInfo;
    $this->iconMediaId = $iconMediaId;
    $this->shouldSyncUrl = $shouldSyncUrl;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }
}}

if (!class_exists("ManualCPC", FALSE)) {
/**
 * Manual click based bidding where user pays per click. For more
 * information, see the
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2464964"
 * >AdWords Help Center</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPC extends BiddingStrategy {
  /**
   * @access public
   * @var boolean
   */
  public $enhancedCpcEnabled;

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
    return "ManualCPC";
  }

  public function __construct($enhancedCpcEnabled = NULL, $BiddingStrategyType = NULL) {
    parent::__construct();
    $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    $this->BiddingStrategyType = $BiddingStrategyType;
  }
}}

if (!class_exists("ManualCPCAdGroupBids", FALSE)) {
/**
 * Adgroup level bids used in manual CPC bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPCAdGroupBids extends AdGroupBids {
  /**
   * @access public
   * @var Bid
   */
  public $keywordMaxCpc;

  /**
   * @access public
   * @var Bid
   */
  public $keywordContentMaxCpc;

  /**
   * @access public
   * @var boolean
   */
  public $enhancedCpcEnabled;

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
    return "ManualCPCAdGroupBids";
  }

  public function __construct($keywordMaxCpc = NULL, $keywordContentMaxCpc = NULL, $enhancedCpcEnabled = NULL, $interactionBids = NULL, $AdGroupBidsType = NULL) {
    parent::__construct();
    $this->keywordMaxCpc = $keywordMaxCpc;
    $this->keywordContentMaxCpc = $keywordContentMaxCpc;
    $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    $this->interactionBids = $interactionBids;
    $this->AdGroupBidsType = $AdGroupBidsType;
  }
}}

if (!class_exists("ManualCPCAdGroupCriterionBids", FALSE)) {
/**
 * Data representing a criterion level cost-per-click bid.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPCAdGroupCriterionBids extends AdGroupCriterionBids {
  /**
   * @access public
   * @var Bid
   */
  public $maxCpc;

  /**
   * @access public
   * @var tnsBidSource
   */
  public $bidSource;

  /**
   * @access public
   * @var boolean
   */
  public $enhancedCpcEnabled;

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
    return "ManualCPCAdGroupCriterionBids";
  }

  public function __construct($maxCpc = NULL, $bidSource = NULL, $enhancedCpcEnabled = NULL, $AdGroupCriterionBidsType = NULL) {
    parent::__construct();
    $this->maxCpc = $maxCpc;
    $this->bidSource = $bidSource;
    $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    $this->AdGroupCriterionBidsType = $AdGroupCriterionBidsType;
  }
}}

if (!class_exists("ManualCPCAdGroupCriterionExperimentBidMultiplier", FALSE)) {
/**
 * AdGroupCriterion level bid multiplier used in manual CPC bidding strategies.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPCAdGroupCriterionExperimentBidMultiplier extends AdGroupCriterionExperimentBidMultiplier {
  /**
   * @access public
   * @var BidMultiplier
   */
  public $maxCpcMultiplier;

  /**
   * @access public
   * @var tnsMultiplierSource
   */
  public $multiplierSource;

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
    return "ManualCPCAdGroupCriterionExperimentBidMultiplier";
  }

  public function __construct($maxCpcMultiplier = NULL, $multiplierSource = NULL, $AdGroupCriterionExperimentBidMultiplierType = NULL) {
    parent::__construct();
    $this->maxCpcMultiplier = $maxCpcMultiplier;
    $this->multiplierSource = $multiplierSource;
    $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
  }
}}

if (!class_exists("ManualCPCAdGroupExperimentBidMultipliers", FALSE)) {
/**
 * Adgroup level bid multipliers used in manual CPC bidding strategies.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPCAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers {
  /**
   * @access public
   * @var BidMultiplier
   */
  public $maxCpcMultiplier;

  /**
   * @access public
   * @var BidMultiplier
   */
  public $maxContentCpcMultiplier;

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
    return "ManualCPCAdGroupExperimentBidMultipliers";
  }

  public function __construct($maxCpcMultiplier = NULL, $maxContentCpcMultiplier = NULL, $AdGroupExperimentBidMultipliersType = NULL) {
    parent::__construct();
    $this->maxCpcMultiplier = $maxCpcMultiplier;
    $this->maxContentCpcMultiplier = $maxContentCpcMultiplier;
    $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
  }
}}

if (!class_exists("ManualCPM", FALSE)) {
/**
 * Manual impression based bidding where user pays per thousand impressions.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPM extends BiddingStrategy {
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
    return "ManualCPM";
  }

  public function __construct($BiddingStrategyType = NULL) {
    parent::__construct();
    $this->BiddingStrategyType = $BiddingStrategyType;
  }
}}

if (!class_exists("ManualCPMAdGroupBids", FALSE)) {
/**
 * Adgroup level bids used in manual CPM bidding strategy.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPMAdGroupBids extends AdGroupBids {
  /**
   * @access public
   * @var Bid
   */
  public $maxCpm;

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
    return "ManualCPMAdGroupBids";
  }

  public function __construct($maxCpm = NULL, $interactionBids = NULL, $AdGroupBidsType = NULL) {
    parent::__construct();
    $this->maxCpm = $maxCpm;
    $this->interactionBids = $interactionBids;
    $this->AdGroupBidsType = $AdGroupBidsType;
  }
}}

if (!class_exists("ManualCPMAdGroupCriterionBids", FALSE)) {
/**
 * Data representing a criterion-level CPM bid.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPMAdGroupCriterionBids extends AdGroupCriterionBids {
  /**
   * @access public
   * @var Bid
   */
  public $maxCpm;

  /**
   * @access public
   * @var tnsBidSource
   */
  public $bidSource;

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
    return "ManualCPMAdGroupCriterionBids";
  }

  public function __construct($maxCpm = NULL, $bidSource = NULL, $AdGroupCriterionBidsType = NULL) {
    parent::__construct();
    $this->maxCpm = $maxCpm;
    $this->bidSource = $bidSource;
    $this->AdGroupCriterionBidsType = $AdGroupCriterionBidsType;
  }
}}

if (!class_exists("ManualCPMAdGroupExperimentBidMultipliers", FALSE)) {
/**
 * Adgroup level bid multipliers used in manual CPM bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ManualCPMAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers {
  /**
   * @access public
   * @var BidMultiplier
   */
  public $maxCpmMultiplier;

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
    return "ManualCPMAdGroupExperimentBidMultipliers";
  }

  public function __construct($maxCpmMultiplier = NULL, $AdGroupExperimentBidMultipliersType = NULL) {
    parent::__construct();
    $this->maxCpmMultiplier = $maxCpmMultiplier;
    $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
  }
}}

if (!class_exists("Media", FALSE)) {
/**
 * Represents some kind of media.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Media {
  /**
   * @access public
   * @var integer
   */
  public $mediaId;

  /**
   * @access public
   * @var tnsMediaMediaType
   */
  public $type;

  /**
   * @access public
   * @var integer
   */
  public $referenceId;

  /**
   * @access public
   * @var Media_Size_DimensionsMapEntry[]
   */
  public $dimensions;

  /**
   * @access public
   * @var Media_Size_StringMapEntry[]
   */
  public $urls;

  /**
   * @access public
   * @var tnsMediaMimeType
   */
  public $mimeType;

  /**
   * @access public
   * @var string
   */
  public $sourceUrl;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $fileSize;

  /**
   * @access public
   * @var string
   */
  public $creationTime;

  /**
   * @access public
   * @var string
   */
  public $MediaType;

  private $_parameterMap = array (
    "Media.Type" => "MediaType",
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
    return "Media";
  }

  public function __construct($mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }
}}

if (!class_exists("MediaError", FALSE)) {
/**
 * Error class for media related errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MediaError extends ApiError {
  /**
   * @access public
   * @var tnsMediaErrorReason
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
    return "MediaError";
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

if (!class_exists("Media_Size_DimensionsMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Size
 * and value of type Dimensions.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Media_Size_DimensionsMapEntry {
  /**
   * @access public
   * @var tnsMediaSize
   */
  public $key;

  /**
   * @access public
   * @var Dimensions
   */
  public $value;

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
    return "Media_Size_DimensionsMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("Media_Size_StringMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Size
 * and value of type String.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Media_Size_StringMapEntry {
  /**
   * @access public
   * @var tnsMediaSize
   */
  public $key;

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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Media_Size_StringMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("MobileAd", FALSE)) {
/**
 * Represents a mobile ad.
 * 
 * <p>
 * A mobile ad can contain a click-to-call phone number, a link to a website,
 * or both.  You specify which features you want by setting certain fields, as
 * shown in the following table.  For example, to create a click-to-call mobile
 * ad, set the fields in the <b>Click-to-call</b> column. A hyphen indicates
 * that you should not set the corresponding field.
 * </p>
 * <p>
 * For more information, see
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
 * Create a mobile ad</a>.
 * </p>
 * 
 * <table summary="" style="clear: none">
 * <tr> <th scope="col"> Click-to-call </th>
 * <th scope="col"> Website       </th>
 * <th scope="col"> Both          </th></tr>
 * <tr> <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * phoneNumber     <br />
 * countryCode     <br />
 * businessName    <br />
 * -               <br />
 * -               <br />
 * -               <br />
 * </td>
 * <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * -               <br />
 * -               <br />
 * -               <br />
 * displayUrl      <br />
 * destinationUrl  <br />
 * markupLanguages <br />
 * </td>
 * <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * phoneNumber     <br />
 * countryCode     <br />
 * businessName    <br />
 * displayUrl      <br />
 * destinationUrl  <br />
 * markupLanguages <br />
 * </td></tr>
 * </table>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MobileAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $headline;

  /**
   * @access public
   * @var string
   */
  public $description;

  /**
   * @access public
   * @var tnsMarkupLanguageType[]
   */
  public $markupLanguages;

  /**
   * @access public
   * @var string[]
   */
  public $mobileCarriers;

  /**
   * @access public
   * @var string
   */
  public $businessName;

  /**
   * @access public
   * @var string
   */
  public $countryCode;

  /**
   * @access public
   * @var string
   */
  public $phoneNumber;

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
    return "MobileAd";
  }

  public function __construct($headline = NULL, $description = NULL, $markupLanguages = NULL, $mobileCarriers = NULL, $businessName = NULL, $countryCode = NULL, $phoneNumber = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->headline = $headline;
    $this->description = $description;
    $this->markupLanguages = $markupLanguages;
    $this->mobileCarriers = $mobileCarriers;
    $this->businessName = $businessName;
    $this->countryCode = $countryCode;
    $this->phoneNumber = $phoneNumber;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("MobileAppCategory", FALSE)) {
/**
 * Represents the mobile app category to be targeted.
 * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
 * available mobile app categories</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MobileAppCategory extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileAppCategory";
  }

  public function __construct($mobileAppCategoryId = NULL, $displayName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->mobileAppCategoryId = $mobileAppCategoryId;
    $this->displayName = $displayName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("MobileApplication", FALSE)) {
/**
 * Represents the mobile application to be targeted.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MobileApplication extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileApplication";
  }

  public function __construct($appId = NULL, $displayName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->appId = $appId;
    $this->displayName = $displayName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("MobileDevice", FALSE)) {
/**
 * Represents a Mobile Device Criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MobileDevice extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "MobileDevice";
  }

  public function __construct($deviceName = NULL, $manufacturerName = NULL, $deviceType = NULL, $operatingSystemName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->deviceName = $deviceName;
    $this->manufacturerName = $manufacturerName;
    $this->deviceType = $deviceType;
    $this->operatingSystemName = $operatingSystemName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("MobileExtension", FALSE)) {
/**
 * Represents a phone extension.
 * 
 * <p>This type of ad extension attaches a phone number
 * to a text ad, which lets customers call the advertiser directly from the ad.
 * Phone extensions will appear as clickable phone numbers beneath the main text ad,
 * and will be visible to high-end mobile device users who access google.com search,
 * Voice search, Google Mobile App, or Google Maps for Mobile from their phone.
 * </p>
 * <p>Learn more about
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2453991">
 * phone extensions</a>.
 * </p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MobileExtension extends AdExtension {
  /**
   * @access public
   * @var string
   */
  public $phoneNumber;

  /**
   * @access public
   * @var string
   */
  public $countryCode;

  /**
   * @access public
   * @var boolean
   */
  public $isCallTrackingEnabled;

  /**
   * @access public
   * @var boolean
   */
  public $isCallOnly;

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
    return "MobileExtension";
  }

  public function __construct($phoneNumber = NULL, $countryCode = NULL, $isCallTrackingEnabled = NULL, $isCallOnly = NULL, $id = NULL, $AdExtensionType = NULL) {
    parent::__construct();
    $this->phoneNumber = $phoneNumber;
    $this->countryCode = $countryCode;
    $this->isCallTrackingEnabled = $isCallTrackingEnabled;
    $this->isCallOnly = $isCallOnly;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }
}}

if (!class_exists("MobileImageAd", FALSE)) {
/**
 * Represents a mobile image ad.
 * 
 * <p>For more information, see
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
 * Create a mobile ad</a>.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MobileImageAd extends Ad {
  /**
   * @access public
   * @var tnsMarkupLanguageType[]
   */
  public $markupLanguages;

  /**
   * @access public
   * @var string[]
   */
  public $mobileCarriers;

  /**
   * @access public
   * @var Image
   */
  public $image;

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
    return "MobileImageAd";
  }

  public function __construct($markupLanguages = NULL, $mobileCarriers = NULL, $image = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->markupLanguages = $markupLanguages;
    $this->mobileCarriers = $mobileCarriers;
    $this->image = $image;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("Money", FALSE)) {
/**
 * Represents a money amount.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("NegativeAdGroupCriterion", FALSE)) {
/**
 * A negative criterion in an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class NegativeAdGroupCriterion extends AdGroupCriterion {
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
    return "NegativeAdGroupCriterion";
  }

  public function __construct($adGroupId = NULL, $criterionUse = NULL, $criterion = NULL, $forwardCompatibilityMap = NULL, $AdGroupCriterionType = NULL) {
    parent::__construct();
    $this->adGroupId = $adGroupId;
    $this->criterionUse = $criterionUse;
    $this->criterion = $criterion;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    $this->AdGroupCriterionType = $AdGroupCriterionType;
  }
}}

if (!class_exists("NegativeCampaignCriterion", FALSE)) {
/**
 * A negative campaign criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class NegativeCampaignCriterion extends CampaignCriterion {
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
    return "NegativeCampaignCriterion";
  }

  public function __construct($campaignId = NULL, $isNegative = NULL, $criterion = NULL, $bidModifier = NULL, $forwardCompatibilityMap = NULL, $CampaignCriterionType = NULL) {
    parent::__construct();
    $this->campaignId = $campaignId;
    $this->isNegative = $isNegative;
    $this->criterion = $criterion;
    $this->bidModifier = $bidModifier;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    $this->CampaignCriterionType = $CampaignCriterionType;
  }
}}

if (!class_exists("NetworkSetting", FALSE)) {
/**
 * Network settings for a Campaign.
 * <p class="caution"><b>Note:</b>
 * Setting {@code targetContentContextual} for new campaigns or
 * existing campaigns that have enabled Flexible Reach
 * ({@code TargetRestrictSetting.useAdGroup=true}) will fail with
 * {@code TargetError.CANNOT_MODIFY_CONTENT_CONTEXTUAL}.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class NetworkSetting {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "NetworkSetting";
  }

  public function __construct($targetGoogleSearch = NULL, $targetSearchNetwork = NULL, $targetContentNetwork = NULL, $targetPartnerSearchNetwork = NULL) {
    $this->targetGoogleSearch = $targetGoogleSearch;
    $this->targetSearchNetwork = $targetSearchNetwork;
    $this->targetContentNetwork = $targetContentNetwork;
    $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
  }
}}

if (!class_exists("NewEntityCreationError", FALSE)) {
/**
 * Error associated with creation of new entities using
 * {@link com.google.ads.api.services.common.id.TempId}s.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class NewEntityCreationError extends ApiError {
  /**
   * @access public
   * @var tnsNewEntityCreationErrorReason
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
    return "NewEntityCreationError";
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

if (!class_exists("NotEmptyError", FALSE)) {
/**
 * Errors corresponding with violation of a NOT EMPTY check.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Indicates that the customer is not whitelisted for accessing the API.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Errors associated with violation of a NOT NULL check.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Number value types for constructing number valued ranges.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("OAuthInfo", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OAuthInfo {
  /**
   * @access public
   * @var string
   */
  public $httpMethod;

  /**
   * @access public
   * @var string
   */
  public $httpRequestUrl;

  /**
   * @access public
   * @var string
   */
  public $httpAuthorizationHeader;

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
    return "OAuthInfo";
  }

  public function __construct($httpMethod = NULL, $httpRequestUrl = NULL, $httpAuthorizationHeader = NULL) {
    $this->httpMethod = $httpMethod;
    $this->httpRequestUrl = $httpRequestUrl;
    $this->httpAuthorizationHeader = $httpAuthorizationHeader;
  }
}}

if (!class_exists("Operand", FALSE)) {
/**
 * A marker interface for entities that can be operated upon in mutate
 * operations.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Operand {
  /**
   * @access public
   * @var AdExtensionOverride
   */
  public $AdExtensionOverride;

  /**
   * @access public
   * @var AdGroupAd
   */
  public $AdGroupAd;

  /**
   * @access public
   * @var AdGroupCriterion
   */
  public $AdGroupCriterion;

  /**
   * @access public
   * @var AdGroup
   */
  public $AdGroup;

  /**
   * @access public
   * @var Ad
   */
  public $Ad;

  /**
   * @access public
   * @var Budget
   */
  public $Budget;

  /**
   * @access public
   * @var CampaignAdExtension
   */
  public $CampaignAdExtension;

  /**
   * @access public
   * @var CampaignCriterion
   */
  public $CampaignCriterion;

  /**
   * @access public
   * @var Campaign
   */
  public $Campaign;

  /**
   * @access public
   * @var Job
   */
  public $Job;

  /**
   * @access public
   * @var Media
   */
  public $Media;

  /**
   * @access public
   * @var PlaceHolder
   */
  public $PlaceHolder;

  /**
   * @access public
   * @var TargetList
   */
  public $TargetList;

  /**
   * @access public
   * @var Target
   */
  public $Target;

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
    return "Operand";
  }

  public function __construct($AdExtensionOverride = NULL, $AdGroupAd = NULL, $AdGroupCriterion = NULL, $AdGroup = NULL, $Ad = NULL, $Budget = NULL, $CampaignAdExtension = NULL, $CampaignCriterion = NULL, $Campaign = NULL, $Job = NULL, $Media = NULL, $PlaceHolder = NULL, $TargetList = NULL, $Target = NULL) {
    $this->AdExtensionOverride = $AdExtensionOverride;
    $this->AdGroupAd = $AdGroupAd;
    $this->AdGroupCriterion = $AdGroupCriterion;
    $this->AdGroup = $AdGroup;
    $this->Ad = $Ad;
    $this->Budget = $Budget;
    $this->CampaignAdExtension = $CampaignAdExtension;
    $this->CampaignCriterion = $CampaignCriterion;
    $this->Campaign = $Campaign;
    $this->Job = $Job;
    $this->Media = $Media;
    $this->PlaceHolder = $PlaceHolder;
    $this->TargetList = $TargetList;
    $this->Target = $Target;
  }
}}

if (!class_exists("OperatingSystemVersion", FALSE)) {
/**
 * Represents a Operating System Version Criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OperatingSystemVersion extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperatingSystemVersion";
  }

  public function __construct($name = NULL, $osMajorVersion = NULL, $osMinorVersion = NULL, $operatorType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->name = $name;
    $this->osMajorVersion = $osMajorVersion;
    $this->osMinorVersion = $osMinorVersion;
    $this->operatorType = $operatorType;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Operation", FALSE)) {
/**
 * This represents an operation that includes an operator and an operand
 * specified type.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("OperationAccessDenied", FALSE)) {
/**
 * Operation not permitted due to the invoked service's access policy.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OperationAccessDenied extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "OperationAccessDenied";
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

if (!class_exists("OperationResult", FALSE)) {
/**
 * Represents the result of an individual mutate operation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OperationResult {
  /**
   * @access public
   * @var string
   */
  public $OperationResultType;

  private $_parameterMap = array (
    "OperationResult.Type" => "OperationResultType",
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
    return "OperationResult";
  }

  public function __construct($OperationResultType = NULL) {
    $this->OperationResultType = $OperationResultType;
  }
}}

if (!class_exists("OperationStream", FALSE)) {
/**
 * A stream of AdWords API mutate operations that must be performed serially.
 * Further, this operation stream must be processed serially with all other
 * operation streams in a bulk mutate job that specify the same scoping
 * entity.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OperationStream {
  /**
   * @access public
   * @var EntityId
   */
  public $scopingEntityId;

  /**
   * @access public
   * @var Operation[]
   */
  public $operations;

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
    return "OperationStream";
  }

  public function __construct($scopingEntityId = NULL, $operations = NULL) {
    $this->scopingEntityId = $scopingEntityId;
    $this->operations = $operations;
  }
}}

if (!class_exists("OperationStreamResult", FALSE)) {
/**
 * The result of processing an {@link OperationStream}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OperationStreamResult {
  /**
   * @access public
   * @var OperationResult[]
   */
  public $operationResults;

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
    return "OperationStreamResult";
  }

  public function __construct($operationResults = NULL) {
    $this->operationResults = $operationResults;
  }
}}

if (!class_exists("OperatorError", FALSE)) {
/**
 * Errors due to the use of unsupported operations.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("OverrideInfo", FALSE)) {
/**
 * Represents additional override info with which to augment the override
 * extension.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OverrideInfo {
  /**
   * @access public
   * @var LocationOverrideInfo
   */
  public $LocationOverrideInfo;

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
    return "OverrideInfo";
  }

  public function __construct($LocationOverrideInfo = NULL) {
    $this->LocationOverrideInfo = $LocationOverrideInfo;
  }
}}

if (!class_exists("PagingError", FALSE)) {
/**
 * Error codes for pagination.
 * See {@link com.google.ads.api.services.common.pagination.Paging}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PagingError extends ApiError {
  /**
   * @access public
   * @var tnsPagingErrorReason
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
    return "PagingError";
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

if (!class_exists("PercentCPA", FALSE)) {
/**
 * Percentage CPA based bidding where user pays a percent of conversions.
 * This bidding strategy is available only to some advertisers.
 * <p>A campaign can only be created with PercentCPA bidding strategy.
 * Existing campaigns with a different bidding strategy cannot be transitioned to
 * PercentCPA.
 * <p>Similarly, once created as a PercentCPA, a campaign cannot be transitioned to
 * any other bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PercentCPA extends BiddingStrategy {
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
    return "PercentCPA";
  }

  public function __construct($BiddingStrategyType = NULL) {
    parent::__construct();
    $this->BiddingStrategyType = $BiddingStrategyType;
  }
}}

if (!class_exists("PercentCPAAdGroupBids", FALSE)) {
/**
 * AdGroup level bids used in percent CPA bidding strategy.
 * {@link PercentCPA} bidding strategy and bids are available
 * only to some advertisers.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PercentCPAAdGroupBids extends AdGroupBids {
  /**
   * @access public
   * @var integer
   */
  public $percentCpa;

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
    return "PercentCPAAdGroupBids";
  }

  public function __construct($percentCpa = NULL, $interactionBids = NULL, $AdGroupBidsType = NULL) {
    parent::__construct();
    $this->percentCpa = $percentCpa;
    $this->interactionBids = $interactionBids;
    $this->AdGroupBidsType = $AdGroupBidsType;
  }
}}

if (!class_exists("PercentCPAAdGroupCriterionBids", FALSE)) {
/**
 * Criterion-level Percent cost-per-conversion(acquisition) bid for Product criteria type.
 * {@link PercentCPA} bidding strategy and bids are available only
 * to some advertisers.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PercentCPAAdGroupCriterionBids extends AdGroupCriterionBids {
  /**
   * @access public
   * @var integer
   */
  public $percentCpa;

  /**
   * @access public
   * @var tnsBidSource
   */
  public $source;

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
    return "PercentCPAAdGroupCriterionBids";
  }

  public function __construct($percentCpa = NULL, $source = NULL, $AdGroupCriterionBidsType = NULL) {
    parent::__construct();
    $this->percentCpa = $percentCpa;
    $this->source = $source;
    $this->AdGroupCriterionBidsType = $AdGroupCriterionBidsType;
  }
}}

if (!class_exists("PhoneInteractionBid", FALSE)) {
/**
 * PhoneInteractionBid applicable for phone calls.
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PhoneInteractionBid extends InteractionBid {
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
    return "PhoneInteractionBid";
  }

  public function __construct($interactionBidAmount = NULL, $minimumBid = NULL, $bidStatus = NULL, $InteractionBidType = NULL) {
    parent::__construct();
    $this->interactionBidAmount = $interactionBidAmount;
    $this->minimumBid = $minimumBid;
    $this->bidStatus = $bidStatus;
    $this->InteractionBidType = $InteractionBidType;
  }
}}

if (!class_exists("PlaceHolder", FALSE)) {
/**
 * A place holder for a result which is not available.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PlaceHolder {
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
    return "PlaceHolder";
  }

  public function __construct() {
  }
}}

if (!class_exists("Placement", FALSE)) {
/**
 * A placement used for modifying bids for sites when targeting the content
 * network.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Placement extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Placement";
  }

  public function __construct($url = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->url = $url;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Platform", FALSE)) {
/**
 * Represents Platform criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Platform extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Platform";
  }

  public function __construct($platformName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->platformName = $platformName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
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
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("PolicyViolationErrorPart", FALSE)) {
/**
 * Points to a substring within an ad field or criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Key of the violation. The key is used for referring to a violation when
 * filing an exemption request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("Polygon", FALSE)) {
/**
 * Represents a Polygon Criterion.
 * 
 * A polygon is described by a list of at least three points, where each point is a
 * (<var>latitude</var>, <var>longitude</var>) ordered pair. No point can be more than 400km
 * from the center of the polygon. The points are specified in microdegrees, the precison
 * for the value is 1 second of angle which is equal to 277 microdegrees.<p>
 * 
 * <p>Please note that Polygons are deprecated. This means that Polygon targets cannot be added
 * through the API, though existing targets can be retrieved and deleted.
 * <p>
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Polygon extends Criterion {
  /**
   * @access public
   * @var GeoPoint[]
   */
  public $vertices;

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
    return "Polygon";
  }

  public function __construct($vertices = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->vertices = $vertices;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Product", FALSE)) {
/**
 * Product targeting criteria, represents a filter for products in the
 * product feed that is defined by the advertiser. The criteria is used to
 * determine the products in a Merchant Center account to be used with the
 * ProductAds in the AdGroup. This criteria is available only to some advertisers.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Product extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Product";
  }

  public function __construct($conditions = NULL, $text = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->conditions = $conditions;
    $this->text = $text;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("ProductAd", FALSE)) {
/**
 * Represents a product ad (known as a <a href=
 * "//support.google.com/adwords/bin/answer.py?answer=2456103">product
 * listing ad</a> in the AdWords user interface). A product ad displays
 * product data (managed using the Google Merchant Center) that is
 * pulled from the Google base product feed specified in the parent campaign's
 * {@linkplain ProductExtension product extension}.
 * 
 * <p>Product ads are only available to a limited set of advertisers. If you
 * are not eligible to use product ads, they will not serve.</p>
 * 
 * <p class="caution"><b>Caution:</b> Product ads do not use {@link #url url} or
 * {@link #displayUrl displayUrl}; setting these fields on a product ad will
 * cause an error.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ProductAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $promotionLine;

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
    return "ProductAd";
  }

  public function __construct($promotionLine = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->promotionLine = $promotionLine;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("ProductCondition", FALSE)) {
/**
 * Conditions to filter the products defined in product feed for targeting.
 * The condition is defined as operand=argument.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ProductCondition {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ProductCondition";
  }

  public function __construct($argument = NULL, $operand = NULL) {
    $this->argument = $argument;
    $this->operand = $operand;
  }
}}

if (!class_exists("ProductConditionAndGroup", FALSE)) {
/**
 * Groups a list of product conditions to be evaluated together as an AND condition
 * (ie. true if all conditions are true, false otherwise).
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ProductConditionAndGroup {
  /**
   * @access public
   * @var ProductCondition[]
   */
  public $conditions;

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
    return "ProductConditionAndGroup";
  }

  public function __construct($conditions = NULL) {
    $this->conditions = $conditions;
  }
}}

if (!class_exists("ProductConditionOperand", FALSE)) {
/**
 * Attribute for the product condition.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ProductConditionOperand {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ProductConditionOperand";
  }

  public function __construct($operand = NULL) {
    $this->operand = $operand;
  }
}}

if (!class_exists("ProductExtension", FALSE)) {
/**
 * Metadata to be used for retrieving offers from Google Base.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ProductExtension extends AdExtension {
  /**
   * @access public
   * @var integer
   */
  public $googleBaseCustomerId;

  /**
   * @access public
   * @var string
   */
  public $advertiserName;

  /**
   * @access public
   * @var ProductConditionAndGroup[]
   */
  public $productSelection;

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
    return "ProductExtension";
  }

  public function __construct($googleBaseCustomerId = NULL, $advertiserName = NULL, $productSelection = NULL, $id = NULL, $AdExtensionType = NULL) {
    parent::__construct();
    $this->googleBaseCustomerId = $googleBaseCustomerId;
    $this->advertiserName = $advertiserName;
    $this->productSelection = $productSelection;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }
}}

if (!class_exists("Proximity", FALSE)) {
/**
 * Represents a Proximity Criterion.
 * 
 * A proximity is an area within a certain radius of a point with the center point being described
 * by a lat/long pair. The caller may also alternatively provide address fields which will be
 * geocoded into a lat/long pair. Note: If a geoPoint value is provided, the address is not
 * used for calculating the lat/long to target.
 * <p> A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Proximity extends Criterion {
  /**
   * @access public
   * @var GeoPoint
   */
  public $geoPoint;

  /**
   * @access public
   * @var tnsProximityDistanceUnits
   */
  public $radiusDistanceUnits;

  /**
   * @access public
   * @var double
   */
  public $radiusInUnits;

  /**
   * @access public
   * @var Address
   */
  public $address;

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
    return "Proximity";
  }

  public function __construct($geoPoint = NULL, $radiusDistanceUnits = NULL, $radiusInUnits = NULL, $address = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->geoPoint = $geoPoint;
    $this->radiusDistanceUnits = $radiusDistanceUnits;
    $this->radiusInUnits = $radiusInUnits;
    $this->address = $address;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("QualityInfo", FALSE)) {
/**
 * Container for criterion quality information.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class QualityInfo {
  /**
   * @access public
   * @var boolean
   */
  public $isKeywordAdRelevanceAcceptable;

  /**
   * @access public
   * @var boolean
   */
  public $isLandingPageQualityAcceptable;

  /**
   * @access public
   * @var boolean
   */
  public $isLandingPageLatencyAcceptable;

  /**
   * @access public
   * @var integer
   */
  public $qualityScore;

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
    return "QualityInfo";
  }

  public function __construct($isKeywordAdRelevanceAcceptable = NULL, $isLandingPageQualityAcceptable = NULL, $isLandingPageLatencyAcceptable = NULL, $qualityScore = NULL) {
    $this->isKeywordAdRelevanceAcceptable = $isKeywordAdRelevanceAcceptable;
    $this->isLandingPageQualityAcceptable = $isLandingPageQualityAcceptable;
    $this->isLandingPageLatencyAcceptable = $isLandingPageLatencyAcceptable;
    $this->qualityScore = $qualityScore;
  }
}}

if (!class_exists("QueryError", FALSE)) {
/**
 * A QueryError represents possible errors for query parsing and execution.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class QueryError extends ApiError {
  /**
   * @access public
   * @var tnsQueryErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $message;

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
    return "QueryError";
  }

  public function __construct($reason = NULL, $message = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->message = $message;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("QuotaCheckError", FALSE)) {
/**
 * Encapsulates the errors thrown during developer quota checks.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("QuotaError", FALSE)) {
/**
 * Errors that are thrown if a quota limit is exceeded.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class QuotaError extends ApiError {
  /**
   * @access public
   * @var tnsQuotaErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var integer
   */
  public $limit;

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
    return "QuotaError";
  }

  public function __construct($reason = NULL, $limit = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->limit = $limit;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("RangeError", FALSE)) {
/**
 * A list of all errors associated with the Range constraint.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Signals that a call failed because a measured rate exceeded.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Errors from attempting to write to read-only fields.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * A list of all errors associated with the @RegionCode constraints.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The error reason represented by an enum.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Encapsulates the generic errors thrown when there's an error with user
 * request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Errors due to missing required field.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("ReturnValueResult", FALSE)) {
/**
 * Represents a success result of processing a mutate operation that returned
 * a value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ReturnValueResult extends OperationResult {
  /**
   * @access public
   * @var Operand
   */
  public $returnValue;

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
    return "ReturnValueResult";
  }

  public function __construct($returnValue = NULL, $OperationResultType = NULL) {
    parent::__construct();
    $this->returnValue = $returnValue;
    $this->OperationResultType = $OperationResultType;
  }
}}

if (!class_exists("RichMediaAd", FALSE)) {
/**
 * Data associated with a rich media ad.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class RichMediaAd extends Ad {
  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var Dimensions
   */
  public $dimensions;

  /**
   * @access public
   * @var string
   */
  public $snippet;

  /**
   * @access public
   * @var string
   */
  public $impressionBeaconUrl;

  /**
   * @access public
   * @var integer
   */
  public $adDuration;

  /**
   * @access public
   * @var integer
   */
  public $certifiedVendorFormatId;

  /**
   * @access public
   * @var string
   */
  public $sourceUrl;

  /**
   * @access public
   * @var tnsRichMediaAdRichMediaAdType
   */
  public $richMediaAdType;

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
    return "RichMediaAd";
  }

  public function __construct($name = NULL, $dimensions = NULL, $snippet = NULL, $impressionBeaconUrl = NULL, $adDuration = NULL, $certifiedVendorFormatId = NULL, $sourceUrl = NULL, $richMediaAdType = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->name = $name;
    $this->dimensions = $dimensions;
    $this->snippet = $snippet;
    $this->impressionBeaconUrl = $impressionBeaconUrl;
    $this->adDuration = $adDuration;
    $this->certifiedVendorFormatId = $certifiedVendorFormatId;
    $this->sourceUrl = $sourceUrl;
    $this->richMediaAdType = $richMediaAdType;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("SelectorError", FALSE)) {
/**
 * Represents possible error codes for {@link Selector}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("Setting", FALSE)) {
/**
 * Base type for AdWords campaign settings.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Setting {
  /**
   * @access public
   * @var string
   */
  public $SettingType;

  private $_parameterMap = array (
    "Setting.Type" => "SettingType",
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
    return "Setting";
  }

  public function __construct($SettingType = NULL) {
    $this->SettingType = $SettingType;
  }
}}

if (!class_exists("SettingError", FALSE)) {
/**
 * Indicates a problem with campaign settings.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class SettingError extends ApiError {
  /**
   * @access public
   * @var tnsSettingErrorReason
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
    return "SettingError";
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

if (!class_exists("SimpleMutateJob", FALSE)) {
/**
 * A mutation job, which was submitted using
 * {@link MutateJobService#mutate}, and will execute asynchronously
 * sometime after submission.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class SimpleMutateJob extends Job {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var tnsBasicJobStatus
   */
  public $status;

  /**
   * @access public
   * @var JobEvent[]
   */
  public $history;

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
    return "SimpleMutateJob";
  }

  public function __construct($id = NULL, $status = NULL, $history = NULL, $failureReason = NULL, $stats = NULL, $billingSummary = NULL, $JobType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->status = $status;
    $this->history = $history;
    $this->failureReason = $failureReason;
    $this->stats = $stats;
    $this->billingSummary = $billingSummary;
    $this->JobType = $JobType;
  }
}}

if (!class_exists("SimpleMutateResult", FALSE)) {
/**
 * The results of a simple mutation job.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class SimpleMutateResult {
  /**
   * @access public
   * @var Operand[]
   */
  public $results;

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
    return "SimpleMutateResult";
  }

  public function __construct($results = NULL, $errors = NULL) {
    $this->results = $results;
    $this->errors = $errors;
  }
}}

if (!class_exists("Sitelink", FALSE)) {
/**
 * Class to represent a single sitelink
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Sitelink {
  /**
   * @access public
   * @var string
   */
  public $displayText;

  /**
   * @access public
   * @var string
   */
  public $destinationUrl;

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
    return "Sitelink";
  }

  public function __construct($displayText = NULL, $destinationUrl = NULL) {
    $this->displayText = $displayText;
    $this->destinationUrl = $destinationUrl;
  }
}}

if (!class_exists("SitelinksExtension", FALSE)) {
/**
 * Class to represent a set of sitelinks and their order of preference.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class SitelinksExtension extends AdExtension {
  /**
   * @access public
   * @var Sitelink[]
   */
  public $sitelinks;

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
    return "SitelinksExtension";
  }

  public function __construct($sitelinks = NULL, $id = NULL, $AdExtensionType = NULL) {
    parent::__construct();
    $this->sitelinks = $sitelinks;
    $this->id = $id;
    $this->AdExtensionType = $AdExtensionType;
  }
}}

if (!class_exists("SizeLimitError", FALSE)) {
/**
 * Indicates that the number of entries in the request or response exceeds the system limit.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Defines the required and optional elements within the header of a SOAP request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Defines the elements within the header of a SOAP response.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("Stats", FALSE)) {
/**
 * Statistics about an ad or criterion within an ad group or campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Stats {
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
   * @var tnsStatsNetwork
   */
  public $network;

  /**
   * @access public
   * @var integer
   */
  public $clicks;

  /**
   * @access public
   * @var integer
   */
  public $impressions;

  /**
   * @access public
   * @var Money
   */
  public $cost;

  /**
   * @access public
   * @var double
   */
  public $averagePosition;

  /**
   * @access public
   * @var Money
   */
  public $averageCpc;

  /**
   * @access public
   * @var Money
   */
  public $averageCpm;

  /**
   * @access public
   * @var double
   */
  public $ctr;

  /**
   * @access public
   * @var integer
   */
  public $conversions;

  /**
   * @access public
   * @var integer
   */
  public $viewThroughConversions;

  /**
   * @access public
   * @var string
   */
  public $StatsType;

  private $_parameterMap = array (
    "Stats.Type" => "StatsType",
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
    return "Stats";
  }

  public function __construct($startDate = NULL, $endDate = NULL, $network = NULL, $clicks = NULL, $impressions = NULL, $cost = NULL, $averagePosition = NULL, $averageCpc = NULL, $averageCpm = NULL, $ctr = NULL, $conversions = NULL, $viewThroughConversions = NULL, $StatsType = NULL) {
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->network = $network;
    $this->clicks = $clicks;
    $this->impressions = $impressions;
    $this->cost = $cost;
    $this->averagePosition = $averagePosition;
    $this->averageCpc = $averageCpc;
    $this->averageCpm = $averageCpm;
    $this->ctr = $ctr;
    $this->conversions = $conversions;
    $this->viewThroughConversions = $viewThroughConversions;
    $this->StatsType = $StatsType;
  }
}}

if (!class_exists("StatsQueryError", FALSE)) {
/**
 * Represents possible error codes when querying for stats.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class StatsQueryError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "StatsQueryError";
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
 * A list of all errors associated with the @ContentsString constraint.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("String_StringMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type String.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class String_StringMapEntry {
  /**
   * @access public
   * @var string
   */
  public $key;

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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "String_StringMapEntry";
  }

  public function __construct($key = NULL, $value = NULL) {
    $this->key = $key;
    $this->value = $value;
  }
}}

if (!class_exists("Target", FALSE)) {
/**
 * Target abstract class.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Target {
  /**
   * @access public
   * @var string
   */
  public $TargetType;

  private $_parameterMap = array (
    "Target.Type" => "TargetType",
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
    return "Target";
  }

  public function __construct($TargetType = NULL) {
    $this->TargetType = $TargetType;
  }
}}

if (!class_exists("TargetError", FALSE)) {
/**
 * A list of all the error codes being used by the common targeting package.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TargetError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "TargetError";
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

if (!class_exists("TargetList", FALSE)) {
/**
 * Targets list abstract class (a list of a given type of targets along with their campaign ID).
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TargetList {
  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var string
   */
  public $TargetListType;

  private $_parameterMap = array (
    "TargetList.Type" => "TargetListType",
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
    return "TargetList";
  }

  public function __construct($campaignId = NULL, $TargetListType = NULL) {
    $this->campaignId = $campaignId;
    $this->TargetListType = $TargetListType;
  }
}}

if (!class_exists("TargetRestrictSetting", FALSE)) {
/**
 * Target restrict setting. Set useAdGroup to true to indicate the use of adgroup
 * level targeting settings. Set useAdGroup to false to use the old campaign level
 * broad/restrict setting.
 * 
 * Choosing this option will be a one-way transition: once you choose it, you
 * cannot go back to the old broad/specific settings.
 * 
 * This setting is automatically added to all campaigns created with API v201206 with useAdGroup
 * set to true. Any passed value will be ignored.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TargetRestrictSetting extends Setting {
  /**
   * @access public
   * @var boolean
   */
  public $useAdGroup;

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
    return "TargetRestrictSetting";
  }

  public function __construct($useAdGroup = NULL, $SettingType = NULL) {
    parent::__construct();
    $this->useAdGroup = $useAdGroup;
    $this->SettingType = $SettingType;
  }
}}

if (!class_exists("TargetingSettingDetail", FALSE)) {
/**
 * Specifies if we should serve ads broadly, ignoring positive criteria of this
 * type group, or if we should restrict to only serve ads that match the
 * criteria of this type group specified in the AdGroup or Campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TargetingSettingDetail {
  /**
   * @access public
   * @var tnsCriterionTypeGroup
   */
  public $criterionTypeGroup;

  /**
   * @access public
   * @var boolean
   */
  public $targetAll;

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
    return "TargetingSettingDetail";
  }

  public function __construct($criterionTypeGroup = NULL, $targetAll = NULL) {
    $this->criterionTypeGroup = $criterionTypeGroup;
    $this->targetAll = $targetAll;
  }
}}

if (!class_exists("TargetingSetting", FALSE)) {
/**
 * Setting for targeting related features.
 * This is applicable at Campaign and AdGroup level.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TargetingSetting extends Setting {
  /**
   * @access public
   * @var TargetingSettingDetail[]
   */
  public $details;

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
    return "TargetingSetting";
  }

  public function __construct($details = NULL, $SettingType = NULL) {
    parent::__construct();
    $this->details = $details;
    $this->SettingType = $SettingType;
  }
}}

if (!class_exists("TempAdUnionId", FALSE)) {
/**
 * Represents the temporary id for an ad union id, which the user can specify.
 * The temporary id can be used to group ads together during ad creation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TempAdUnionId extends AdUnionId {
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
    return "TempAdUnionId";
  }

  public function __construct($id = NULL, $AdUnionIdType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->AdUnionIdType = $AdUnionIdType;
  }
}}

if (!class_exists("TemplateAd", FALSE)) {
/**
 * Represents a <a href=
 * "//www.google.com/adwords/displaynetwork/plan-creative-campaigns/display-ad-builder.html"
 * >Display Ad Builder</a> template ad. A template ad is
 * composed of a template (specified by its ID) and the data that populates
 * the template's fields. For a list of available templates and their required
 * fields, see <a href="/adwords/api/docs/appendix/templateads">Template Ads</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TemplateAd extends Ad {
  /**
   * @access public
   * @var integer
   */
  public $templateId;

  /**
   * @access public
   * @var AdUnionId
   */
  public $adUnionId;

  /**
   * @access public
   * @var TemplateElement[]
   */
  public $templateElements;

  /**
   * @access public
   * @var Dimensions
   */
  public $dimensions;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $duration;

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
    return "TemplateAd";
  }

  public function __construct($templateId = NULL, $adUnionId = NULL, $templateElements = NULL, $dimensions = NULL, $name = NULL, $duration = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->templateId = $templateId;
    $this->adUnionId = $adUnionId;
    $this->templateElements = $templateElements;
    $this->dimensions = $dimensions;
    $this->name = $name;
    $this->duration = $duration;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("TemplateElement", FALSE)) {
/**
 * Represents an element in a template. Each template element is composed
 * of a list of fields (actual value data).
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TemplateElement {
  /**
   * @access public
   * @var string
   */
  public $uniqueName;

  /**
   * @access public
   * @var TemplateElementField[]
   */
  public $fields;

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
    return "TemplateElement";
  }

  public function __construct($uniqueName = NULL, $fields = NULL) {
    $this->uniqueName = $uniqueName;
    $this->fields = $fields;
  }
}}

if (!class_exists("TemplateElementField", FALSE)) {
/**
 * Represents a field in a template element.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TemplateElementField {
  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsTemplateElementFieldType
   */
  public $type;

  /**
   * @access public
   * @var string
   */
  public $fieldText;

  /**
   * @access public
   * @var Media
   */
  public $fieldMedia;

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
    return "TemplateElementField";
  }

  public function __construct($name = NULL, $type = NULL, $fieldText = NULL, $fieldMedia = NULL) {
    $this->name = $name;
    $this->type = $type;
    $this->fieldText = $fieldText;
    $this->fieldMedia = $fieldMedia;
  }
}}

if (!class_exists("TextAd", FALSE)) {
/**
 * Represents a TextAd.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TextAd extends Ad {
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
    return "TextAd";
  }

  public function __construct($headline = NULL, $description1 = NULL, $description2 = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->headline = $headline;
    $this->description1 = $description1;
    $this->description2 = $description2;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("ThirdPartyRedirectAd", FALSE)) {
/**
 * Data associated with rich media extension attributes.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ThirdPartyRedirectAd extends RichMediaAd {
  /**
   * @access public
   * @var boolean
   */
  public $isCookieTargeted;

  /**
   * @access public
   * @var boolean
   */
  public $isUserInterestTargeted;

  /**
   * @access public
   * @var boolean
   */
  public $isTagged;

  /**
   * @access public
   * @var tnsVideoType[]
   */
  public $videoTypes;

  /**
   * @access public
   * @var tnsThirdPartyRedirectAdExpandingDirection[]
   */
  public $expandingDirections;

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
    return "ThirdPartyRedirectAd";
  }

  public function __construct($isCookieTargeted = NULL, $isUserInterestTargeted = NULL, $isTagged = NULL, $videoTypes = NULL, $expandingDirections = NULL, $name = NULL, $dimensions = NULL, $snippet = NULL, $impressionBeaconUrl = NULL, $adDuration = NULL, $certifiedVendorFormatId = NULL, $sourceUrl = NULL, $richMediaAdType = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->isCookieTargeted = $isCookieTargeted;
    $this->isUserInterestTargeted = $isUserInterestTargeted;
    $this->isTagged = $isTagged;
    $this->videoTypes = $videoTypes;
    $this->expandingDirections = $expandingDirections;
    $this->name = $name;
    $this->dimensions = $dimensions;
    $this->snippet = $snippet;
    $this->impressionBeaconUrl = $impressionBeaconUrl;
    $this->adDuration = $adDuration;
    $this->certifiedVendorFormatId = $certifiedVendorFormatId;
    $this->sourceUrl = $sourceUrl;
    $this->richMediaAdType = $richMediaAdType;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("TrackingSetting", FALSE)) {
/**
 * Campaign level settings for tracking information.
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TrackingSetting extends Setting {
  /**
   * @access public
   * @var string
   */
  public $trackingUrl;

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
    return "TrackingSetting";
  }

  public function __construct($trackingUrl = NULL, $SettingType = NULL) {
    parent::__construct();
    $this->trackingUrl = $trackingUrl;
    $this->SettingType = $SettingType;
  }
}}

if (!class_exists("UnknownBiddingStrategy", FALSE)) {
/**
 * This bidding strategy is used for return value only. This will be returned typically
 * due to incompatibility with your WSDL version.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class UnknownBiddingStrategy extends BiddingStrategy {
  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

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
    return "UnknownBiddingStrategy";
  }

  public function __construct($forwardCompatibilityMap = NULL, $BiddingStrategyType = NULL) {
    parent::__construct();
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    $this->BiddingStrategyType = $BiddingStrategyType;
  }
}}

if (!class_exists("UnprocessedResult", FALSE)) {
/**
 * Indicates that the mutate operation was not processed. This could result
 * if the job was aborted by the back-end workflow because the developer's API
 * quota was exceeded or if the job encountered some severe workflow system
 * failure.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class UnprocessedResult extends OperationResult {
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
    return "UnprocessedResult";
  }

  public function __construct($OperationResultType = NULL) {
    parent::__construct();
    $this->OperationResultType = $OperationResultType;
  }
}}

if (!class_exists("CriterionUserInterest", FALSE)) {
/**
 * User Interest - represents a particular interest based vertical to be targeted.
 * Targeting UserInterest is currently in a limited beta.  If you'd like access
 * please speak with your account representative.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionUserInterest extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CriterionUserInterest";
  }

  public function __construct($userInterestId = NULL, $userInterestName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->userInterestId = $userInterestId;
    $this->userInterestName = $userInterestName;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("CriterionUserList", FALSE)) {
/**
 * UserList - represents a user list that is defined by the advertiser to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionUserList extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CriterionUserList";
  }

  public function __construct($userListId = NULL, $userListName = NULL, $userListMembershipStatus = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->userListId = $userListId;
    $this->userListName = $userListName;
    $this->userListMembershipStatus = $userListMembershipStatus;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Vertical", FALSE)) {
/**
 * Use verticals to target or exclude placements in the Google Display Network
 * based on the category into which the placement falls (for example, "Pets &amp;
 * Animals/Pets/Dogs").
 * <a href="/adwords/api/docs/appendix/verticals">View the complete list
 * of available vertical categories.</a>
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Vertical extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Vertical";
  }

  public function __construct($verticalId = NULL, $verticalParentId = NULL, $path = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->verticalId = $verticalId;
    $this->verticalParentId = $verticalParentId;
    $this->path = $path;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("Video", FALSE)) {
/**
 * Encapsulates a Video media identified by a MediaId
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Video extends Media {
  /**
   * @access public
   * @var integer
   */
  public $durationMillis;

  /**
   * @access public
   * @var string
   */
  public $streamingUrl;

  /**
   * @access public
   * @var boolean
   */
  public $readyToPlayOnTheWeb;

  /**
   * @access public
   * @var string
   */
  public $industryStandardCommercialIdentifier;

  /**
   * @access public
   * @var string
   */
  public $advertisingId;

  /**
   * @access public
   * @var string
   */
  public $youTubeVideoIdString;

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
    return "Video";
  }

  public function __construct($durationMillis = NULL, $streamingUrl = NULL, $readyToPlayOnTheWeb = NULL, $industryStandardCommercialIdentifier = NULL, $advertisingId = NULL, $youTubeVideoIdString = NULL, $mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
    parent::__construct();
    $this->durationMillis = $durationMillis;
    $this->streamingUrl = $streamingUrl;
    $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
    $this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
    $this->advertisingId = $advertisingId;
    $this->youTubeVideoIdString = $youTubeVideoIdString;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }
}}

if (!class_exists("Webpage", FALSE)) {
/**
 * Criterion for targeting webpages of an advertiser's website. The
 * website domain name is specified at the campaign level.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Webpage extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Webpage";
  }

  public function __construct($parameter = NULL, $criteriaCoverage = NULL, $criteriaSamples = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->parameter = $parameter;
    $this->criteriaCoverage = $criteriaCoverage;
    $this->criteriaSamples = $criteriaSamples;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("WebpageCondition", FALSE)) {
/**
 * Logical expression for targeting webpages of an advertiser's website.
 * 
 * <p>A condition is defined as {@code operand OP argument}
 * where {@code operand} is one of the values enumerated in
 * {@link WebpageConditionOperand}, and, based on this value,
 * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class WebpageCondition {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "WebpageCondition";
  }

  public function __construct($operand = NULL, $argument = NULL) {
    $this->operand = $operand;
    $this->argument = $argument;
  }
}}

if (!class_exists("WebpageParameter", FALSE)) {
/**
 * Parameter of Webpage criterion, expressed as a list of conditions, or
 * logical expressions, for targeting webpages of an advertiser's website.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class WebpageParameter extends CriterionParameter {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "WebpageParameter";
  }

  public function __construct($criterionName = NULL, $conditions = NULL, $CriterionParameterType = NULL) {
    parent::__construct();
    $this->criterionName = $criterionName;
    $this->conditions = $conditions;
    $this->CriterionParameterType = $CriterionParameterType;
  }
}}

if (!class_exists("DynamicSearchAd", FALSE)) {
/**
 * Represents a dynamic search ad. This ad will have its headline and
 * destination URL auto-generated at serving time according to domain name
 * specific information provided by {@link DomainInfoExtension} linked at the
 * campaign level.
 * 
 * <p class="caution">Your account must first be whitelisted for Dynamic Search
 * Ads to use the feature in the API.
 * <a href="//www.google.com/ads/innovations/dynamicsearchads.html">Find out more
 * and sign up for the beta</a>.</p>
 * 
 * <p>Auto-generated fields: headline and destination URL (may contain an optional
 * tracking URL)</p>
 * 
 * <p>Required fields: description1, description2, displayUrl</p>
 * 
 * <p>The url field must contain at least one of the following placeholder tags
 * (URL parameters): {unescapedlpurl}, {escapedlpurl}, {lpurlpath}. If no URL is
 * specified, {unescapedlpurl} will be used as default.</p>
 * 
 * <p>{unescapedlpurl} can only be used at the beginning of the url field. It
 * will be replaced with the full landing page URL of the displayed ad. Extra query
 * parameters can be added to the end, e.g. "{unescapedlpurl}?lang=en".</p>
 * 
 * <p>{escapedlpurl} will be replaced with the URL-encoded version of the full
 * landing page URL. This makes it suitable for use as a query parameter
 * value (e.g. "http://www.3rdpartytracker.com/?lp={escapedlpurl}") but
 * not at the beginning of the url field.</p>
 * 
 * <p>{lpurlpath} will be replaced with the path and query part of the landing
 * page URL and can be added to a different URL, e.g.
 * "http://www.mygoodbusiness.com/tracking/{lpurlpath}".</p>
 * 
 * <p>There are also special rules that come into play depending on whether the
 * destination URL uses local click tracking or third-party click tracking.<p>
 * 
 * <p>For more information, see the article <a href="//support.google.com/adwords/bin/answer.py?answer=2549100">Using dynamic tracking URLs</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class DynamicSearchAd extends Ad {
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
    return "DynamicSearchAd";
  }

  public function __construct($description1 = NULL, $description2 = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
    parent::__construct();
    $this->description1 = $description1;
    $this->description2 = $description2;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->AdType = $AdType;
  }
}}

if (!class_exists("AdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdErrorReason {
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
    return "AdError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdExtensionErrorReason", FALSE)) {
/**
 * Account has been deleted
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionErrorReason {
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
    return "AdExtensionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdExtensionOverrideApprovalStatus", FALSE)) {
/**
 * Approval status for the AdExtensionOverride
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionOverrideApprovalStatus {
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
    return "AdExtensionOverride.ApprovalStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdExtensionOverrideStatus", FALSE)) {
/**
 * Status of the AdExtensionOverride
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionOverrideStatus {
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
    return "AdExtensionOverride.Status";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdExtensionOverrideErrorReason", FALSE)) {
/**
 * Cannot override an ad that is already overriden with an adextension
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionOverrideErrorReason {
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
    return "AdExtensionOverrideError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupStatus", FALSE)) {
/**
 * Status of this ad group.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupStatus {
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
    return "AdGroup.Status";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupAdApprovalStatus", FALSE)) {
/**
 * Represents the possible approval statuses.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupAdApprovalStatus {
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
    return "AdGroupAd.ApprovalStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupAdStatus", FALSE)) {
/**
 * The current status of an Ad.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupAdStatus {
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
    return "AdGroupAd.Status";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupAdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupAdErrorReason {
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
    return "AdGroupAdError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupCriterionErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupCriterionErrorReason {
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
    return "AdGroupCriterionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupCriterionLimitExceededCriteriaLimitType", FALSE)) {
/**
 * The entity type that exceeded the limit.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupCriterionLimitExceededCriteriaLimitType {
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
    return "AdGroupCriterionLimitExceeded.CriteriaLimitType";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdGroupServiceErrorReason", FALSE)) {
/**
 * The reasons for the adgroup service error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupServiceErrorReason {
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
    return "AdGroupServiceError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdServingOptimizationStatus", FALSE)) {
/**
 * Ad serving status of campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdServingOptimizationStatus {
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
    return "AdServingOptimizationStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("AdxErrorReason", FALSE)) {
/**
 * The reasons for the AdX error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdxErrorReason {
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
    return "AdxError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("AgeRangeAgeRangeType", FALSE)) {
/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AgeRangeAgeRangeType {
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
    return "AgeRange.AgeRangeType";
  }

  public function __construct() {
  }
}}

if (!class_exists("ApprovalStatus", FALSE)) {
/**
 * Approval status for the criterion.
 * Note: there are more states involved but we only expose two to users.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ApprovalStatus {
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
    return "ApprovalStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * The single reason for the authentication failure.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reasons for the database error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("BasicJobStatus", FALSE)) {
/**
 * A basic set of job statuses.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BasicJobStatus {
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
    return "BasicJobStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("BetaErrorReason", FALSE)) {
/**
 * The reasons for the beta error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("BidSource", FALSE)) {
/**
 * Indicate where a criterion's bid came from: criterion or the adgroup it
 * belongs to.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BidSource {
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
    return "BidSource";
  }

  public function __construct() {
  }
}}

if (!class_exists("BiddingErrorReason", FALSE)) {
/**
 * Reason for bidding error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BiddingErrorReason {
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
    return "BiddingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("BiddingTransitionErrorReason", FALSE)) {
/**
 * Reason for bidding transition error.
 * It is used by capability service as denial reasons, for bidding transition
 * capability.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BiddingTransitionErrorReason {
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
    return "BiddingTransitionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("BudgetBudgetDeliveryMethod", FALSE)) {
/**
 * Budget delivery methods.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BudgetBudgetDeliveryMethod {
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
    return "Budget.BudgetDeliveryMethod";
  }

  public function __construct() {
  }
}}

if (!class_exists("BudgetBudgetPeriod", FALSE)) {
/**
 * Budget periods.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BudgetBudgetPeriod {
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
    return "Budget.BudgetPeriod";
  }

  public function __construct() {
  }
}}

if (!class_exists("BudgetBudgetStatus", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BudgetBudgetStatus {
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
    return "Budget.BudgetStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("BudgetErrorReason", FALSE)) {
/**
 * The reasons for the budget error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BudgetErrorReason {
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
    return "BudgetError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("BulkMutateJobErrorReason", FALSE)) {
/**
 * The reasons for the bulk mutate job handling error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateJobErrorReason {
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
    return "BulkMutateJobError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CampaignAdExtensionApprovalStatus", FALSE)) {
/**
 * Approval status of the CampaignAdExtension.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignAdExtensionApprovalStatus {
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
    return "CampaignAdExtension.ApprovalStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("CampaignAdExtensionStatus", FALSE)) {
/**
 * Status of the CampaignAdExtension.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignAdExtensionStatus {
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
    return "CampaignAdExtension.Status";
  }

  public function __construct() {
  }
}}

if (!class_exists("CampaignAdExtensionErrorReason", FALSE)) {
/**
 * Cannot operate on an adextensions under the wrong campaign
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignAdExtensionErrorReason {
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
    return "CampaignAdExtensionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CampaignCriterionErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignCriterionErrorReason {
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
    return "CampaignCriterionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CampaignCriterionLimitExceededCriteriaLimitType", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignCriterionLimitExceededCriteriaLimitType {
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
    return "CampaignCriterionLimitExceeded.CriteriaLimitType";
  }

  public function __construct() {
  }
}}

if (!class_exists("CampaignErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignErrorReason {
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
    return "CampaignError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CampaignStatus", FALSE)) {
/**
 * Campaign status.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignStatus {
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
    return "CampaignStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("ClientTermsErrorReason", FALSE)) {
/**
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("ContentLabelType", FALSE)) {
/**
 * Content label type.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ContentLabelType {
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
    return "ContentLabelType";
  }

  public function __construct() {
  }
}}

if (!class_exists("ConversionOptimizerBidType", FALSE)) {
/**
 * Bid type for the conversion optimizer bidding strategy.
 * This classifies the adgroup level bid for the conversion optimizer
 * campaign as an average cost-per-acquisition (targetCPA) bid or a Max CPA bid.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ConversionOptimizerBidType {
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
    return "ConversionOptimizerBidType";
  }

  public function __construct() {
  }
}}

if (!class_exists("ConversionOptimizerEligibilityRejectionReason", FALSE)) {
/**
 * Campaign is not active
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ConversionOptimizerEligibilityRejectionReason {
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
    return "ConversionOptimizerEligibility.RejectionReason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CriterionType", FALSE)) {
/**
 * The types of criteria.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionType {
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
    return "Criterion.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("CriterionErrorReason", FALSE)) {
/**
 * Concrete type of criterion is required for ADD and SET operations.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionErrorReason {
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
    return "CriterionError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("CriterionTypeGroup", FALSE)) {
/**
 * The list of groupings of criteria types.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionTypeGroup {
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
    return "CriterionTypeGroup";
  }

  public function __construct() {
  }
}}

if (!class_exists("CriterionUse", FALSE)) {
/**
 * The way a criterion is used - biddable or negative.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionUse {
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
    return "CriterionUse";
  }

  public function __construct() {
  }
}}

if (!class_exists("DatabaseErrorReason", FALSE)) {
/**
 * The reasons for the database error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("DayOfWeek", FALSE)) {
/**
 * Days of the week.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class DayOfWeek {
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
    return "DayOfWeek";
  }

  public function __construct() {
  }
}}

if (!class_exists("DeprecatedAdType", FALSE)) {
/**
 * Video ad.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class DeprecatedAdType {
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
    return "DeprecatedAd.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("DistinctErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("EntityAccessDeniedReason", FALSE)) {
/**
 * User did not have read access.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class EntityAccessDeniedReason {
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
    return "EntityAccessDenied.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("EntityCountLimitExceededReason", FALSE)) {
/**
 * Limits at various levels of the account.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class EntityCountLimitExceededReason {
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
    return "EntityCountLimitExceeded.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("EntityIdType", FALSE)) {
/**
 * Type of entity identity.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class EntityIdType {
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
    return "EntityId.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("EntityNotFoundReason", FALSE)) {
/**
 * The specified id refered to an entity which either doesn't exist or is not accessible to the
 * customer. e.g. campaign belongs to another customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class EntityNotFoundReason {
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
    return "EntityNotFound.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("ExperimentDataStatus", FALSE)) {
/**
 * Status of the experimental change associated with an entity.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ExperimentDataStatus {
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
    return "ExperimentDataStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("ExperimentDeltaStatus", FALSE)) {
/**
 * Status of an entity denoting its type of experimental change in a campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ExperimentDeltaStatus {
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
    return "ExperimentDeltaStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("GenderGenderType", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class GenderGenderType {
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
    return "Gender.GenderType";
  }

  public function __construct() {
  }
}}

if (!class_exists("GeoTargetTypeSettingNegativeGeoTargetType", FALSE)) {
/**
 * The various signals a negative location target may use.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class GeoTargetTypeSettingNegativeGeoTargetType {
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
    return "GeoTargetTypeSetting.NegativeGeoTargetType";
  }

  public function __construct() {
  }
}}

if (!class_exists("GeoTargetTypeSettingPositiveGeoTargetType", FALSE)) {
/**
 * The various signals a positive location target may use.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class GeoTargetTypeSettingPositiveGeoTargetType {
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
    return "GeoTargetTypeSetting.PositiveGeoTargetType";
  }

  public function __construct() {
  }
}}

if (!class_exists("IdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("ImageErrorReason", FALSE)) {
/**
 * The image is not valid.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ImageErrorReason {
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
    return "ImageError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("InAppLinkExtensionAppStore", FALSE)) {
/**
 * The AppStore this extension will render for.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class InAppLinkExtensionAppStore {
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
    return "InAppLinkExtension.AppStore";
  }

  public function __construct() {
  }
}}

if (!class_exists("InteractionBidBidStatus", FALSE)) {
/**
 * The {@code minimumBid} is used.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class InteractionBidBidStatus {
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
    return "InteractionBid.BidStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("JobErrorReason", FALSE)) {
/**
 * The reasons for the job handling error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class JobErrorReason {
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
    return "JobError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("KeywordMatchType", FALSE)) {
/**
 * Match type of a keyword. i.e. the way we match a keyword string with
 * search queries.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class KeywordMatchType {
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
    return "KeywordMatchType";
  }

  public function __construct() {
  }
}}

if (!class_exists("Level", FALSE)) {
/**
 * The level on which the cap is to be applied.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Level {
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
    return "Level";
  }

  public function __construct() {
  }
}}

if (!class_exists("LocationExtensionSource", FALSE)) {
/**
 * From manual entry in adwords frontend
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class LocationExtensionSource {
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
    return "LocationExtension.Source";
  }

  public function __construct() {
  }
}}

if (!class_exists("LocationOverrideInfoRadiusUnits", FALSE)) {
/**
 * Radius units
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class LocationOverrideInfoRadiusUnits {
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
    return "LocationOverrideInfo.RadiusUnits";
  }

  public function __construct() {
  }
}}

if (!class_exists("LocationTargetingStatus", FALSE)) {
/**
 * Enum that represents the different Targeting Status values for a Location criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class LocationTargetingStatus {
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
    return "LocationTargetingStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("MarkupLanguageType", FALSE)) {
/**
 * Markup languages to use for mobile ads.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MarkupLanguageType {
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
    return "MarkupLanguageType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MediaMediaType", FALSE)) {
/**
 * Media types
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MediaMediaType {
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
    return "Media.MediaType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MediaMimeType", FALSE)) {
/**
 * Mime types
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MediaMimeType {
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
    return "Media.MimeType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MediaSize", FALSE)) {
/**
 * Sizes for retrieving the original media
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MediaSize {
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
    return "Media.Size";
  }

  public function __construct() {
  }
}}

if (!class_exists("MediaErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MediaErrorReason {
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
    return "MediaError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("MinuteOfHour", FALSE)) {
/**
 * Minutes in an hour.  Currently only 0, 15, 30, and 45 are supported
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MinuteOfHour {
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
    return "MinuteOfHour";
  }

  public function __construct() {
  }
}}

if (!class_exists("MobileDeviceDeviceType", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MobileDeviceDeviceType {
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
    return "MobileDevice.DeviceType";
  }

  public function __construct() {
  }
}}

if (!class_exists("MultiplierSource", FALSE)) {
/**
 * Denotes whether the bid multiplier is derived from the adgroup
 * or the criterion
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MultiplierSource {
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
    return "MultiplierSource";
  }

  public function __construct() {
  }
}}

if (!class_exists("NewEntityCreationErrorReason", FALSE)) {
/**
 * Do not set the id field while creating new entities.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class NewEntityCreationErrorReason {
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
    return "NewEntityCreationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("NotEmptyErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The single reason for the whitelist error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reasons for the validation error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("OperatingSystemVersionOperatorType", FALSE)) {
/**
 * The operator type.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OperatingSystemVersionOperatorType {
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
    return "OperatingSystemVersion.OperatorType";
  }

  public function __construct() {
  }
}}

if (!class_exists("OperationAccessDeniedReason", FALSE)) {
/**
 * The reasons for the operation access error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class OperationAccessDeniedReason {
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
    return "OperationAccessDenied.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("Operator", FALSE)) {
/**
 * This represents an operator that may be presented to an adsapi service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reasons for the validation error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("PagingErrorReason", FALSE)) {
/**
 * The reasons for errors when using pagination.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PagingErrorReason {
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
    return "PagingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("PolicyViolationErrorReason", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PolicyViolationErrorReason {
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
    return "PolicyViolationError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("PricingModel", FALSE)) {
/**
 * Campaign's pricing model indicates whether it is a pay per clicks,
 * pay per impressions, or play per conversions campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class PricingModel {
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
    return "PricingModel";
  }

  public function __construct() {
  }
}}

if (!class_exists("ProximityDistanceUnits", FALSE)) {
/**
 * The radius distance is expressed in either kilometers or miles.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ProximityDistanceUnits {
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
    return "Proximity.DistanceUnits";
  }

  public function __construct() {
  }
}}

if (!class_exists("QueryErrorReason", FALSE)) {
/**
 * The reason for the query error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class QueryErrorReason {
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
    return "QueryError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("QuotaCheckErrorReason", FALSE)) {
/**
 * Enums for all the reasons an error can be thrown to the user during
 * billing quota checks.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("QuotaErrorReason", FALSE)) {
/**
 * The reasons for the quota error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class QuotaErrorReason {
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
    return "QuotaError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reason for the rate exceeded error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reasons for the validation error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * Error reason is unknown.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("RichMediaAdRichMediaAdType", FALSE)) {
/**
 * Different types of rich media ad that are available to customers.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class RichMediaAdRichMediaAdType {
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
    return "RichMediaAd.RichMediaAdType";
  }

  public function __construct() {
  }
}}

if (!class_exists("SelectorErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("ServingStatus", FALSE)) {
/**
 * Campaign serving status.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ServingStatus {
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
    return "ServingStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("SettingErrorReason", FALSE)) {
/**
 * The reasons for the setting error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class SettingErrorReason {
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
    return "SettingError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("SizeLimitErrorReason", FALSE)) {
/**
 * The reasons for Ad Scheduling errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("StatsNetwork", FALSE)) {
/**
 * Ad network.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class StatsNetwork {
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
    return "Stats.Network";
  }

  public function __construct() {
  }
}}

if (!class_exists("StatsQueryErrorReason", FALSE)) {
/**
 * The reasons for errors when querying for stats.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class StatsQueryErrorReason {
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
    return "StatsQueryError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("SystemServingStatus", FALSE)) {
/**
 * Reported by system to reflect the criterion's serving status.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class SystemServingStatus {
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
    return "SystemServingStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("TargetErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TargetErrorReason {
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
    return "TargetError.Reason";
  }

  public function __construct() {
  }
}}

if (!class_exists("TemplateElementFieldType", FALSE)) {
/**
 * Possible field types of template element fields.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TemplateElementFieldType {
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
    return "TemplateElementField.Type";
  }

  public function __construct() {
  }
}}

if (!class_exists("ThirdPartyRedirectAdExpandingDirection", FALSE)) {
/**
 * Allowed expanding directions for ads that are expandable.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ThirdPartyRedirectAdExpandingDirection {
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
    return "ThirdPartyRedirectAd.ExpandingDirection";
  }

  public function __construct() {
  }
}}

if (!class_exists("TimeUnit", FALSE)) {
/**
 * Unit of time the cap is defined at.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class TimeUnit {
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
    return "TimeUnit";
  }

  public function __construct() {
  }
}}

if (!class_exists("CriterionUserListMembershipStatus", FALSE)) {
/**
 * Membership status of the user list.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionUserListMembershipStatus {
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
    return "CriterionUserList.MembershipStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("UserStatus", FALSE)) {
/**
 * Specified by user to pause or unpause a criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class UserStatus {
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
    return "UserStatus";
  }

  public function __construct() {
  }
}}

if (!class_exists("VideoType", FALSE)) {
/**
 * VideoType enum values that are permitted for video filterable
 * creative attribute IDs.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class VideoType {
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
    return "VideoType";
  }

  public function __construct() {
  }
}}

if (!class_exists("WebpageConditionOperand", FALSE)) {
/**
 * Operand value of {@link WebpageCondition}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class WebpageConditionOperand {
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
    return "WebpageConditionOperand";
  }

  public function __construct() {
  }
}}

if (!class_exists("MutateJobServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Query the status of existing jobs, both simple and bulk API.
 * <p>Use a {@link JobSelector} to query and return a list which may
 * contain both {@link BulkMutateJob} and/or {@link SimpleMutateJob}.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MutateJobServiceGet {
  /**
   * @access public
   * @var JobSelector
   */
  public $selector;

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
    return "";
  }

  public function __construct($selector = NULL) {
    $this->selector = $selector;
  }
}}

if (!class_exists("MutateJobServiceGetResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MutateJobServiceGetResponse {
  /**
   * @access public
   * @var Job[]
   */
  public $rval;

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
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("getResult", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Query mutation results, of a {@code COMPLETED} job.
 * <p>Use a {@link JobSelector} to query and return either a
 * {@link BulkMutateResult} or a {@link SimpleMutateResult}. Submit only one job ID
 * at a time.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class getResult {
  /**
   * @access public
   * @var JobSelector
   */
  public $selector;

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
    return "";
  }

  public function __construct($selector = NULL) {
    $this->selector = $selector;
  }
}}

if (!class_exists("getResultResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class getResultResponse {
  /**
   * @access public
   * @var JobResult
   */
  public $rval;

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
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("MutateJobServiceMutate", FALSE)) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Simplified way of submitting a mutation job. The provided list of
 * operations, if valid, will create a new job with a unique id, which will
 * be returned. This id can later be used in invocations of
 * {@link #get} and {@link #getResult}. Policy can optionally be specified.
 * 
 * <p>When this method returns with success, the job will be in
 * {@code PROCESSING} or {@code PENDING} state and no further action is
 * needed for the job to get executed.</p>
 * 
 * <p>You should not use the returned {@link BulkMutateJobId} with bulk API
 * {@link BulkMutateJobService#mutate} method.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MutateJobServiceMutate {
  /**
   * @access public
   * @var Operation[]
   */
  public $operations;

  /**
   * @access public
   * @var BulkMutateJobPolicy
   */
  public $policy;

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
    return "";
  }

  public function __construct($operations = NULL, $policy = NULL) {
    $this->operations = $operations;
    $this->policy = $policy;
  }
}}

if (!class_exists("MutateJobServiceMutateResponse", FALSE)) {
/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class MutateJobServiceMutateResponse {
  /**
   * @access public
   * @var SimpleMutateJob
   */
  public $rval;

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
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }
}}

if (!class_exists("AdError", FALSE)) {
/**
 * Base error class for Ad Service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdError extends ApiError {
  /**
   * @access public
   * @var tnsAdErrorReason
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
    return "AdError";
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

if (!class_exists("AdExtensionError", FALSE)) {
/**
 * AdExtension errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionError extends ApiError {
  /**
   * @access public
   * @var tnsAdExtensionErrorReason
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
    return "AdExtensionError";
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

if (!class_exists("AdExtensionOverrideError", FALSE)) {
/**
 * AdExtensionOverride errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionOverrideError extends ApiError {
  /**
   * @access public
   * @var tnsAdExtensionOverrideErrorReason
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
    return "AdExtensionOverrideError";
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

if (!class_exists("AdExtensionOverrideOperation", FALSE)) {
/**
 * AdExtensionOverride service operation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionOverrideOperation extends Operation {
  /**
   * @access public
   * @var AdExtensionOverride
   */
  public $operand;

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
    return "AdExtensionOverrideOperation";
  }

  public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("AdExtensionOverrideStats", FALSE)) {
/**
 * Represents stats specific to AdExtensionOverrides.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdExtensionOverrideStats extends Stats {
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
    return "AdExtensionOverrideStats";
  }

  public function __construct($startDate = NULL, $endDate = NULL, $network = NULL, $clicks = NULL, $impressions = NULL, $cost = NULL, $averagePosition = NULL, $averageCpc = NULL, $averageCpm = NULL, $ctr = NULL, $conversions = NULL, $viewThroughConversions = NULL, $StatsType = NULL) {
    parent::__construct();
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->network = $network;
    $this->clicks = $clicks;
    $this->impressions = $impressions;
    $this->cost = $cost;
    $this->averagePosition = $averagePosition;
    $this->averageCpc = $averageCpc;
    $this->averageCpm = $averageCpm;
    $this->ctr = $ctr;
    $this->conversions = $conversions;
    $this->viewThroughConversions = $viewThroughConversions;
    $this->StatsType = $StatsType;
  }
}}

if (!class_exists("AdGroupAdCountLimitExceeded", FALSE)) {
/**
 * Indicates too many ads were added/enabled under the specified adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupAdCountLimitExceeded extends EntityCountLimitExceeded {
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
    return "AdGroupAdCountLimitExceeded";
  }

  public function __construct($reason = NULL, $enclosingId = NULL, $limit = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("AdGroupAdError", FALSE)) {
/**
 * Error information for AdGroupAdService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupAdError extends ApiError {
  /**
   * @access public
   * @var tnsAdGroupAdErrorReason
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
    return "AdGroupAdError";
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

if (!class_exists("AdGroupAdOperation", FALSE)) {
/**
 * AdGroupAd service operations.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupAdOperation extends Operation {
  /**
   * @access public
   * @var AdGroupAd
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupAdOperation";
  }

  public function __construct($operand = NULL, $exemptionRequests = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->exemptionRequests = $exemptionRequests;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("AdGroupCriterionError", FALSE)) {
/**
 * Base error class for Ad Group Criterion Service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupCriterionError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupCriterionError";
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

if (!class_exists("AdGroupCriterionLimitExceeded", FALSE)) {
/**
 * Signals that too many criteria were added to some ad group.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupCriterionLimitExceeded extends EntityCountLimitExceeded {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupCriterionLimitExceeded";
  }

  public function __construct($limitType = NULL, $reason = NULL, $enclosingId = NULL, $limit = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->limitType = $limitType;
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("AdGroupCriterionOperation", FALSE)) {
/**
 * Operation (add, remove and set) on adgroup criteria.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupCriterionOperation extends Operation {
  /**
   * @access public
   * @var AdGroupCriterion
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupCriterionOperation";
  }

  public function __construct($operand = NULL, $exemptionRequests = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->exemptionRequests = $exemptionRequests;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("AdGroupOperation", FALSE)) {
/**
 * AdGroup operations for adding/updating/removing adgroups.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupOperation extends Operation {
  /**
   * @access public
   * @var AdGroup
   */
  public $operand;

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
    return "AdGroupOperation";
  }

  public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("AdGroupServiceError", FALSE)) {
/**
 * Represents possible error codes in AdGroupService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdGroupServiceError extends ApiError {
  /**
   * @access public
   * @var tnsAdGroupServiceErrorReason
   */
  public $reason;

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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdGroupServiceError";
  }

  public function __construct($reason = NULL, $adGroupId = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->reason = $reason;
    $this->adGroupId = $adGroupId;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("AdSchedule", FALSE)) {
/**
 * Represents an AdSchedule Criterion.
 * AdSchedule is specified as day and time of the week criteria to target
 * the Ads.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdSchedule extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdSchedule";
  }

  public function __construct($dayOfWeek = NULL, $startHour = NULL, $startMinute = NULL, $endHour = NULL, $endMinute = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->dayOfWeek = $dayOfWeek;
    $this->startHour = $startHour;
    $this->startMinute = $startMinute;
    $this->endHour = $endHour;
    $this->endMinute = $endMinute;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("AdScheduleTarget", FALSE)) {
/**
 * Immutable structure to hold an ad schedule target.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdScheduleTarget extends Target {
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
   * @access public
   * @var double
   */
  public $bidMultiplier;

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
    return "AdScheduleTarget";
  }

  public function __construct($dayOfWeek = NULL, $startHour = NULL, $startMinute = NULL, $endHour = NULL, $endMinute = NULL, $bidMultiplier = NULL, $TargetType = NULL) {
    parent::__construct();
    $this->dayOfWeek = $dayOfWeek;
    $this->startHour = $startHour;
    $this->startMinute = $startMinute;
    $this->endHour = $endHour;
    $this->endMinute = $endMinute;
    $this->bidMultiplier = $bidMultiplier;
    $this->TargetType = $TargetType;
  }
}}

if (!class_exists("AdScheduleTargetList", FALSE)) {
/**
 * List of ad schedule targets.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdScheduleTargetList extends TargetList {
  /**
   * @access public
   * @var AdScheduleTarget[]
   */
  public $targets;

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
    return "AdScheduleTargetList";
  }

  public function __construct($targets = NULL, $campaignId = NULL, $TargetListType = NULL) {
    parent::__construct();
    $this->targets = $targets;
    $this->campaignId = $campaignId;
    $this->TargetListType = $TargetListType;
  }
}}

if (!class_exists("AdStats", FALSE)) {
/**
 * Represents stats specific to Ads.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdStats extends Stats {
  /**
   * @access public
   * @var double
   */
  public $percentServed;

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
    return "AdStats";
  }

  public function __construct($percentServed = NULL, $startDate = NULL, $endDate = NULL, $network = NULL, $clicks = NULL, $impressions = NULL, $cost = NULL, $averagePosition = NULL, $averageCpc = NULL, $averageCpm = NULL, $ctr = NULL, $conversions = NULL, $viewThroughConversions = NULL, $StatsType = NULL) {
    parent::__construct();
    $this->percentServed = $percentServed;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->network = $network;
    $this->clicks = $clicks;
    $this->impressions = $impressions;
    $this->cost = $cost;
    $this->averagePosition = $averagePosition;
    $this->averageCpc = $averageCpc;
    $this->averageCpm = $averageCpm;
    $this->ctr = $ctr;
    $this->conversions = $conversions;
    $this->viewThroughConversions = $viewThroughConversions;
    $this->StatsType = $StatsType;
  }
}}

if (!class_exists("AdxError", FALSE)) {
/**
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AdxError extends ApiError {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AdxError";
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

if (!class_exists("AgeRange", FALSE)) {
/**
 * Represents an Age Range criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only excludable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class AgeRange extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AgeRange";
  }

  public function __construct($ageRangeType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->ageRangeType = $ageRangeType;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("Audio", FALSE)) {
/**
 * Encapsulates an Audio media identified by a MediaId.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Audio extends Media {
  /**
   * @access public
   * @var integer
   */
  public $durationMillis;

  /**
   * @access public
   * @var string
   */
  public $streamingUrl;

  /**
   * @access public
   * @var boolean
   */
  public $readyToPlayOnTheWeb;

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
    return "Audio";
  }

  public function __construct($durationMillis = NULL, $streamingUrl = NULL, $readyToPlayOnTheWeb = NULL, $mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
    parent::__construct();
    $this->durationMillis = $durationMillis;
    $this->streamingUrl = $streamingUrl;
    $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }
}}

if (!class_exists("BatchFailureResult", FALSE)) {
/**
 * Represents a failure result for a mutate operation that was applied in a
 * transactional batch. It does not imply that the corresponding operation
 * for this result itself caused the failure. To determine that, please see
 * the {@link FailureResult} provided for the first operation of the batch.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BatchFailureResult extends OperationResult {
  /**
   * @access public
   * @var integer
   */
  public $operationIndexInBatch;

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
    return "BatchFailureResult";
  }

  public function __construct($operationIndexInBatch = NULL, $OperationResultType = NULL) {
    parent::__construct();
    $this->operationIndexInBatch = $operationIndexInBatch;
    $this->OperationResultType = $OperationResultType;
  }
}}

if (!class_exists("BulkMutateJob", FALSE)) {
/**
 * A {@code BulkMutateJob} is essentially a mixed collection of mutate
 * operations from the following AdWords API campaign management services:
 * <ul>
 * <li>{@link CampaignService}</li>
 * <li>{@link CampaignTargetService}</li>
 * <li>{@link CampaignCriterionService}</li>
 * <li>{@link AdGroupService}</li>
 * <li>{@link AdGroupAdService}</li>
 * <li>{@link AdGroupCriterionService}</li>
 * </ul>
 * 
 * <p>The mutate operations in a job's request are constructed in exactly the
 * same way as they are for synchronous calls to these services.</p>
 * 
 * <p>The mutate operations are grouped by their scoping entity in the
 * AdWords customer tree. Currently, mutate operations can be grouped either
 * by the customer or by their parent campaign. However, they cannot be
 * grouped both ways - some by customer and others by campaigns - in the same
 * job.</p>
 * 
 * <p class="note"><b>Note:</b> A job may have no more than 500,000 mutate
 * operations in total, and no more than 10 different scoping campaigns.</p>
 * 
 * <p>The mutate operations must be packaged into containers called
 * {@code Operation Streams}, each tagged with the ID of the scoping entity of
 * its operations.</p>
 * 
 * <p>To facilitate the building of very large bulk mutate jobs, the operation
 * streams of a job can be submitted using multiple request parts. A job is
 * queued for processing as soon as it can be determined that all of its
 * request parts have been received.</p>
 * 
 * <p class="note"><b>Note:</b> A job may have no more than 100 request parts.
 * Each part may have no more than 25 operation streams and no more than 10,000
 * operations in total.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateJob extends Job {
  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var BulkMutateJobPolicy
   */
  public $policy;

  /**
   * @access public
   * @var BulkMutateRequest
   */
  public $request;

  /**
   * @access public
   * @var tnsBasicJobStatus
   */
  public $status;

  /**
   * @access public
   * @var BulkMutateJobEvent[]
   */
  public $history;

  /**
   * @access public
   * @var BulkMutateResult
   */
  public $result;

  /**
   * @access public
   * @var integer
   */
  public $numRequestParts;

  /**
   * @access public
   * @var integer
   */
  public $numRequestPartsReceived;

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
    return "BulkMutateJob";
  }

  public function __construct($id = NULL, $policy = NULL, $request = NULL, $status = NULL, $history = NULL, $result = NULL, $numRequestParts = NULL, $numRequestPartsReceived = NULL, $failureReason = NULL, $stats = NULL, $billingSummary = NULL, $JobType = NULL) {
    parent::__construct();
    $this->id = $id;
    $this->policy = $policy;
    $this->request = $request;
    $this->status = $status;
    $this->history = $history;
    $this->result = $result;
    $this->numRequestParts = $numRequestParts;
    $this->numRequestPartsReceived = $numRequestPartsReceived;
    $this->failureReason = $failureReason;
    $this->stats = $stats;
    $this->billingSummary = $billingSummary;
    $this->JobType = $JobType;
  }
}}

if (!class_exists("BulkMutateJobEvent", FALSE)) {
/**
 * An event defined by a status change of a bulk mutate job.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateJobEvent extends JobEvent {
  /**
   * @access public
   * @var tnsBasicJobStatus
   */
  public $status;

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
    return "BulkMutateJobEvent";
  }

  public function __construct($status = NULL, $dateTime = NULL, $JobEventType = NULL) {
    parent::__construct();
    $this->status = $status;
    $this->dateTime = $dateTime;
    $this->JobEventType = $JobEventType;
  }
}}

if (!class_exists("BulkMutateJobSelector", FALSE)) {
/**
 * Specifies additional criteria for selecting bulk mutate jobs.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateJobSelector extends JobSelector {
  /**
   * @access public
   * @var integer[]
   */
  public $jobIds;

  /**
   * @access public
   * @var integer
   */
  public $resultPartIndex;

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
    return "BulkMutateJobSelector";
  }

  public function __construct($jobIds = NULL, $resultPartIndex = NULL, $includeHistory = NULL, $includeStats = NULL, $JobSelectorType = NULL) {
    parent::__construct();
    $this->jobIds = $jobIds;
    $this->resultPartIndex = $resultPartIndex;
    $this->includeHistory = $includeHistory;
    $this->includeStats = $includeStats;
    $this->JobSelectorType = $JobSelectorType;
  }
}}

if (!class_exists("BulkMutateJobStats", FALSE)) {
/**
 * Bulk mutate job-handling statistics.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class BulkMutateJobStats extends JobStats {
  /**
   * @access public
   * @var integer
   */
  public $numOperations;

  /**
   * @access public
   * @var integer
   */
  public $numFailedOperations;

  /**
   * @access public
   * @var integer
   */
  public $numUnprocessedOperations;

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
    return "BulkMutateJobStats";
  }

  public function __construct($numOperations = NULL, $numFailedOperations = NULL, $numUnprocessedOperations = NULL, $progressPercent = NULL, $pendingTimeMillis = NULL, $processingTimeMillis = NULL, $JobStatsType = NULL) {
    parent::__construct();
    $this->numOperations = $numOperations;
    $this->numFailedOperations = $numFailedOperations;
    $this->numUnprocessedOperations = $numUnprocessedOperations;
    $this->progressPercent = $progressPercent;
    $this->pendingTimeMillis = $pendingTimeMillis;
    $this->processingTimeMillis = $processingTimeMillis;
    $this->JobStatsType = $JobStatsType;
  }
}}

if (!class_exists("CampaignAdExtensionOperation", FALSE)) {
/**
 * CampaignAdExtension service operation. <b>Note:</b> The {@code SET} operator
 * is not supported.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignAdExtensionOperation extends Operation {
  /**
   * @access public
   * @var CampaignAdExtension
   */
  public $operand;

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
    return "CampaignAdExtensionOperation";
  }

  public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("CampaignAdExtensionStats", FALSE)) {
/**
 * Represents stats specific to CampaignAdExtensions.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignAdExtensionStats extends Stats {
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
    return "CampaignAdExtensionStats";
  }

  public function __construct($startDate = NULL, $endDate = NULL, $network = NULL, $clicks = NULL, $impressions = NULL, $cost = NULL, $averagePosition = NULL, $averageCpc = NULL, $averageCpm = NULL, $ctr = NULL, $conversions = NULL, $viewThroughConversions = NULL, $StatsType = NULL) {
    parent::__construct();
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->network = $network;
    $this->clicks = $clicks;
    $this->impressions = $impressions;
    $this->cost = $cost;
    $this->averagePosition = $averagePosition;
    $this->averageCpc = $averageCpc;
    $this->averageCpm = $averageCpm;
    $this->ctr = $ctr;
    $this->conversions = $conversions;
    $this->viewThroughConversions = $viewThroughConversions;
    $this->StatsType = $StatsType;
  }
}}

if (!class_exists("CampaignCriterionLimitExceeded", FALSE)) {
/**
 * Error to indicate that too many negative criteria added to some campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignCriterionLimitExceeded extends EntityCountLimitExceeded {
  /**
   * @access public
   * @var tnsCampaignCriterionLimitExceededCriteriaLimitType
   */
  public $limitType;

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
    return "CampaignCriterionLimitExceeded";
  }

  public function __construct($limitType = NULL, $reason = NULL, $enclosingId = NULL, $limit = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
    parent::__construct();
    $this->limitType = $limitType;
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}}

if (!class_exists("CampaignCriterionOperation", FALSE)) {
/**
 * Generic operation (add, remove and set) for campaign criteria.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignCriterionOperation extends Operation {
  /**
   * @access public
   * @var CampaignCriterion
   */
  public $operand;

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
    return "CampaignCriterionOperation";
  }

  public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("CampaignOperation", FALSE)) {
/**
 * An operation on an AdWords campaign.
 * <p class="note"><b>Note:</b> The <code>REMOVE</code> operator is not
 * supported. To remove a campaign, set its {@link Campaign#status status}
 * to <code>DELETED</code>.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignOperation extends Operation {
  /**
   * @access public
   * @var BiddingTransition
   */
  public $biddingTransition;

  /**
   * @access public
   * @var Campaign
   */
  public $operand;

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
    return "CampaignOperation";
  }

  public function __construct($biddingTransition = NULL, $operand = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->biddingTransition = $biddingTransition;
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("CampaignStats", FALSE)) {
/**
 * Represents stats specific to Campaigns.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignStats extends Stats {
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
    return "CampaignStats";
  }

  public function __construct($startDate = NULL, $endDate = NULL, $network = NULL, $clicks = NULL, $impressions = NULL, $cost = NULL, $averagePosition = NULL, $averageCpc = NULL, $averageCpm = NULL, $ctr = NULL, $conversions = NULL, $viewThroughConversions = NULL, $StatsType = NULL) {
    parent::__construct();
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->network = $network;
    $this->clicks = $clicks;
    $this->impressions = $impressions;
    $this->cost = $cost;
    $this->averagePosition = $averagePosition;
    $this->averageCpc = $averageCpc;
    $this->averageCpm = $averageCpm;
    $this->ctr = $ctr;
    $this->conversions = $conversions;
    $this->viewThroughConversions = $viewThroughConversions;
    $this->StatsType = $StatsType;
  }
}}

if (!class_exists("CampaignTargetOperation", FALSE)) {
/**
 * Sets a list of targets on a specified campaign.
 * <p class="note"><b>Note:</b> Only the <code>SET</code> operator is supported.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CampaignTargetOperation extends Operation {
  /**
   * @access public
   * @var TargetList
   */
  public $operand;

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
    return "CampaignTargetOperation";
  }

  public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}}

if (!class_exists("Carrier", FALSE)) {
/**
 * Represents a Carrier Criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Carrier extends Criterion {
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
    return "https://adwords.google.com/api/adwords/cm/v201209";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "Carrier";
  }

  public function __construct($name = NULL, $countryCode = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->name = $name;
    $this->countryCode = $countryCode;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("ContentLabel", FALSE)) {
/**
 * Content Label for category exclusion.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class ContentLabel extends Criterion {
  /**
   * @access public
   * @var tnsContentLabelType
   */
  public $contentLabelType;

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
    return "ContentLabel";
  }

  public function __construct($contentLabelType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
    parent::__construct();
    $this->contentLabelType = $contentLabelType;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}}

if (!class_exists("CriterionPolicyError", FALSE)) {
/**
 * Contains the policy violations for a single BiddableAdGroupCriterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class CriterionPolicyError extends PolicyViolationError {
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
    return "CriterionPolicyError";
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

if (!class_exists("DoubleValue", FALSE)) {
/**
 * Number value type for constructing double valued ranges.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("FailureResult", FALSE)) {
/**
 * Represents a failure result for an individual mutate operation.
 * 
 * <p>Currently, operations are applied in transactional batches, so the
 * corresponding operation for this result may not itself be faulty.</p>
 * 
 * <p>The errors in the exception may contain {@code OGNL path}s that identify
 * the faulty operations in the batch. Please see the subsequent
 * {@link BatchFailureResult}s to determine the remaining operations that were
 * also applied in the batch and their positions within the batch.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class FailureResult extends OperationResult {
  /**
   * @access public
   * @var ApiException
   */
  public $cause;

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
    return "FailureResult";
  }

  public function __construct($cause = NULL, $OperationResultType = NULL) {
    parent::__construct();
    $this->cause = $cause;
    $this->OperationResultType = $OperationResultType;
  }
}}

if (!class_exists("GeoTargetTypeSetting", FALSE)) {
/**
 * Represents a collection of settings related to ads geotargeting.
 * 
 * <p>AdWords ads can be geotargeted using <b>Location of Presence</b> (<b>LOP</b>),
 * <b>Area of Interest</b> (<b>AOI</b>), or both. LOP is the physical location
 * of the user performing the search; AOI is the geographical region
 * in which the searcher is interested. For example, if a user in
 * New York City performs a search "hotels california", their LOP
 * is New York City and their AOI is California.
 * 
 * <p>Additionally, ads can be <b>positively</b> or <b>negatively</b> geotargeted.
 * An ad that is positively geotargeted to New York City only appears
 * to users whose location is related (via AOI or LOP) to New York City. An ad
 * that is negatively geotargeted to New York City appears for <i>all</i>
 * users <i>except</i> those whose location is related to New York City. Ads can
 * only be negatively geotargeted if a positive geotargeting is also supplied, and
 * the negatively geotargeted region must be contained within the positive
 * region.
 * 
 * <p>Geotargeting settings allow ads to be targeted in the following way:
 * <ul>
 * <li> Positively geotargeted using solely AOI, solely LOP, or either.
 * <li> Negatively geotargeted using solely LOP, or both.
 * </ul>
 * 
 * <p>This setting applies only to ads shown on the search network, and does
 * not affect ads shown on the Google Display Network.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class GeoTargetTypeSetting extends Setting {
  /**
   * @access public
   * @var tnsGeoTargetTypeSettingPositiveGeoTargetType
   */
  public $positiveGeoTargetType;

  /**
   * @access public
   * @var tnsGeoTargetTypeSettingNegativeGeoTargetType
   */
  public $negativeGeoTargetType;

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
    return "GeoTargetTypeSetting";
  }

  public function __construct($positiveGeoTargetType = NULL, $negativeGeoTargetType = NULL, $SettingType = NULL) {
    parent::__construct();
    $this->positiveGeoTargetType = $positiveGeoTargetType;
    $this->negativeGeoTargetType = $negativeGeoTargetType;
    $this->SettingType = $SettingType;
  }
}}

if (!class_exists("Image", FALSE)) {
/**
 * Raw image data.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class Image extends Media {
  /**
   * @access public
   * @var base64Binary
   */
  public $data;

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
    return "Image";
  }

  public function __construct($data = NULL, $mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
    parent::__construct();
    $this->data = $data;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }
}}

if (!class_exists("KeywordMatchSetting", FALSE)) {
/**
 * Improved exact and phrase match option includes misspellings, plurals,
 * and other close variants of your keywords.
 * 
 * Default value set to {@code true} to include close variants. For more
 * information, see the article
 * <a href="https://support.google.com/adwords/bin/answer.py?answer=6100">
 * What are keyword matching options?</a>.
 * 
 * This setting is required when creating new campaigns.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class KeywordMatchSetting extends Setting {
  /**
   * @access public
   * @var boolean
   */
  public $optIn;

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
    return "KeywordMatchSetting";
  }

  public function __construct($optIn = NULL, $SettingType = NULL) {
    parent::__construct();
    $this->optIn = $optIn;
    $this->SettingType = $SettingType;
  }
}}

if (!class_exists("LongValue", FALSE)) {
/**
 * Number value type for constructing long valued ranges.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
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

if (!class_exists("LostResult", FALSE)) {
/**
 * Represents the result of processing an individual mutate operation that
 * however failed to get durably saved despite the service's best efforts.
 * 
 * <p>The operation is considered to have completed processing because it
 * either was successfully performed or failed with validation errors, and
 * cannot be retried without the risk of doing duplicate work.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class LostResult extends OperationResult {
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
    return "LostResult";
  }

  public function __construct($OperationResultType = NULL) {
    parent::__construct();
    $this->OperationResultType = $OperationResultType;
  }
}}

if (!class_exists("RealTimeBiddingSetting", FALSE)) {
/**
 * Settings for Real-Time Bidding, a feature only available for campaigns
 * targeting the Ad Exchange network.
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 */
class RealTimeBiddingSetting extends Setting {
  /**
   * @access public
   * @var boolean
   */
  public $optIn;

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
    return "RealTimeBiddingSetting";
  }

  public function __construct($optIn = NULL, $SettingType = NULL) {
    parent::__construct();
    $this->optIn = $optIn;
    $this->SettingType = $SettingType;
  }
}}

if (!class_exists("MutateJobService", FALSE)) {
/**
 * MutateJobService
 * @package GoogleApiAdsAdWords
 * @subpackage v201209
 * @author WSDLInterpreter
 */
class MutateJobService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "MutateJobServiceGetResponse",
    "get" => "MutateJobServiceGet",
    "mutate" => "MutateJobServiceMutate",
    "mutateResponse" => "MutateJobServiceMutateResponse",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "Ad" => "Ad",
    "AdError" => "AdError",
    "ApiError" => "ApiError",
    "AdExtension" => "AdExtension",
    "AdExtensionError" => "AdExtensionError",
    "AdExtensionOverride" => "AdExtensionOverride",
    "AdExtensionOverrideError" => "AdExtensionOverrideError",
    "AdExtensionOverrideOperation" => "AdExtensionOverrideOperation",
    "Operation" => "Operation",
    "AdExtensionOverrideStats" => "AdExtensionOverrideStats",
    "Stats" => "Stats",
    "AdGroup" => "AdGroup",
    "AdGroupAd" => "AdGroupAd",
    "AdGroupAdCountLimitExceeded" => "AdGroupAdCountLimitExceeded",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "AdGroupAdError" => "AdGroupAdError",
    "AdGroupAdExperimentData" => "AdGroupAdExperimentData",
    "AdGroupAdOperation" => "AdGroupAdOperation",
    "AdGroupBids" => "AdGroupBids",
    "AdGroupCriterion" => "AdGroupCriterion",
    "AdGroupCriterionBids" => "AdGroupCriterionBids",
    "AdGroupCriterionError" => "AdGroupCriterionError",
    "AdGroupCriterionExperimentBidMultiplier" => "AdGroupCriterionExperimentBidMultiplier",
    "AdGroupCriterionLimitExceeded" => "AdGroupCriterionLimitExceeded",
    "AdGroupCriterionOperation" => "AdGroupCriterionOperation",
    "AdGroupExperimentBidMultipliers" => "AdGroupExperimentBidMultipliers",
    "AdGroupExperimentData" => "AdGroupExperimentData",
    "AdGroupOperation" => "AdGroupOperation",
    "AdGroupServiceError" => "AdGroupServiceError",
    "AdSchedule" => "AdSchedule",
    "Criterion" => "Criterion",
    "AdScheduleTarget" => "AdScheduleTarget",
    "Target" => "Target",
    "AdScheduleTargetList" => "AdScheduleTargetList",
    "TargetList" => "TargetList",
    "AdStats" => "AdStats",
    "AdUnionId" => "AdUnionId",
    "Address" => "Address",
    "AdxError" => "AdxError",
    "AgeRange" => "AgeRange",
    "ApiErrorReason" => "ApiErrorReason",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "Audio" => "Audio",
    "Media" => "Media",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "BatchFailureResult" => "BatchFailureResult",
    "OperationResult" => "OperationResult",
    "BetaError" => "BetaError",
    "Bid" => "Bid",
    "BidMultiplier" => "BidMultiplier",
    "BiddableAdGroupCriterion" => "BiddableAdGroupCriterion",
    "BiddableAdGroupCriterionExperimentData" => "BiddableAdGroupCriterionExperimentData",
    "BiddingError" => "BiddingError",
    "BiddingStrategy" => "BiddingStrategy",
    "BiddingTransition" => "BiddingTransition",
    "BiddingTransitionError" => "BiddingTransitionError",
    "BillingSummary" => "BillingSummary",
    "Budget" => "Budget",
    "BudgetError" => "BudgetError",
    "BudgetOptimizer" => "BudgetOptimizer",
    "BudgetOptimizerAdGroupBids" => "BudgetOptimizerAdGroupBids",
    "BudgetOptimizerAdGroupCriterionBids" => "BudgetOptimizerAdGroupCriterionBids",
    "BulkMutateJob" => "BulkMutateJob",
    "Job" => "Job",
    "BulkMutateJobError" => "BulkMutateJobError",
    "BulkMutateJobEvent" => "BulkMutateJobEvent",
    "JobEvent" => "JobEvent",
    "BulkMutateJobPolicy" => "BulkMutateJobPolicy",
    "BulkMutateJobSelector" => "BulkMutateJobSelector",
    "JobSelector" => "JobSelector",
    "BulkMutateJobStats" => "BulkMutateJobStats",
    "JobStats" => "JobStats",
    "BulkMutateRequest" => "BulkMutateRequest",
    "BulkMutateResult" => "BulkMutateResult",
    "Campaign" => "Campaign",
    "CampaignAdExtension" => "CampaignAdExtension",
    "CampaignAdExtensionError" => "CampaignAdExtensionError",
    "CampaignAdExtensionOperation" => "CampaignAdExtensionOperation",
    "CampaignAdExtensionStats" => "CampaignAdExtensionStats",
    "CampaignCriterion" => "CampaignCriterion",
    "CampaignCriterionError" => "CampaignCriterionError",
    "CampaignCriterionLimitExceeded" => "CampaignCriterionLimitExceeded",
    "CampaignCriterionOperation" => "CampaignCriterionOperation",
    "CampaignError" => "CampaignError",
    "CampaignOperation" => "CampaignOperation",
    "CampaignStats" => "CampaignStats",
    "CampaignTargetOperation" => "CampaignTargetOperation",
    "Carrier" => "Carrier",
    "ClientTermsError" => "ClientTermsError",
    "ComparableValue" => "ComparableValue",
    "ContentLabel" => "ContentLabel",
    "ConversionOptimizer" => "ConversionOptimizer",
    "ConversionOptimizerAdGroupBids" => "ConversionOptimizerAdGroupBids",
    "ConversionOptimizerAdGroupCriterionBids" => "ConversionOptimizerAdGroupCriterionBids",
    "ConversionOptimizerBiddingTransition" => "ConversionOptimizerBiddingTransition",
    "ConversionOptimizerEligibility" => "ConversionOptimizerEligibility",
    "CriterionError" => "CriterionError",
    "CriterionParameter" => "CriterionParameter",
    "CriterionPolicyError" => "CriterionPolicyError",
    "PolicyViolationError" => "PolicyViolationError",
    "DatabaseError" => "DatabaseError",
    "DateError" => "DateError",
    "DeprecatedAd" => "DeprecatedAd",
    "Dimensions" => "Dimensions",
    "DistinctError" => "DistinctError",
    "DomainInfoExtension" => "DomainInfoExtension",
    "DoubleValue" => "DoubleValue",
    "NumberValue" => "NumberValue",
    "EntityAccessDenied" => "EntityAccessDenied",
    "EntityId" => "EntityId",
    "EntityNotFound" => "EntityNotFound",
    "ExemptionRequest" => "ExemptionRequest",
    "FailureResult" => "FailureResult",
    "FrequencyCap" => "FrequencyCap",
    "Gender" => "Gender",
    "GeoPoint" => "GeoPoint",
    "GeoTargetTypeSetting" => "GeoTargetTypeSetting",
    "Setting" => "Setting",
    "IdError" => "IdError",
    "Image" => "Image",
    "ImageAd" => "ImageAd",
    "ImageError" => "ImageError",
    "InAppLinkExtension" => "InAppLinkExtension",
    "InteractionBid" => "InteractionBid",
    "InternalApiError" => "InternalApiError",
    "JobError" => "JobError",
    "JobResult" => "JobResult",
    "Keyword" => "Keyword",
    "KeywordMatchSetting" => "KeywordMatchSetting",
    "Language" => "Language",
    "Location" => "Location",
    "LocationExtension" => "LocationExtension",
    "LocationOverrideInfo" => "LocationOverrideInfo",
    "LocationSyncExtension" => "LocationSyncExtension",
    "LongValue" => "LongValue",
    "LostResult" => "LostResult",
    "ManualCPC" => "ManualCPC",
    "ManualCPCAdGroupBids" => "ManualCPCAdGroupBids",
    "ManualCPCAdGroupCriterionBids" => "ManualCPCAdGroupCriterionBids",
    "ManualCPCAdGroupCriterionExperimentBidMultiplier" => "ManualCPCAdGroupCriterionExperimentBidMultiplier",
    "ManualCPCAdGroupExperimentBidMultipliers" => "ManualCPCAdGroupExperimentBidMultipliers",
    "ManualCPM" => "ManualCPM",
    "ManualCPMAdGroupBids" => "ManualCPMAdGroupBids",
    "ManualCPMAdGroupCriterionBids" => "ManualCPMAdGroupCriterionBids",
    "ManualCPMAdGroupExperimentBidMultipliers" => "ManualCPMAdGroupExperimentBidMultipliers",
    "MediaError" => "MediaError",
    "Media_Size_DimensionsMapEntry" => "Media_Size_DimensionsMapEntry",
    "Media_Size_StringMapEntry" => "Media_Size_StringMapEntry",
    "MobileAd" => "MobileAd",
    "MobileAppCategory" => "MobileAppCategory",
    "MobileApplication" => "MobileApplication",
    "MobileDevice" => "MobileDevice",
    "MobileExtension" => "MobileExtension",
    "MobileImageAd" => "MobileImageAd",
    "Money" => "Money",
    "NegativeAdGroupCriterion" => "NegativeAdGroupCriterion",
    "NegativeCampaignCriterion" => "NegativeCampaignCriterion",
    "NetworkSetting" => "NetworkSetting",
    "NewEntityCreationError" => "NewEntityCreationError",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "OAuthInfo" => "OAuthInfo",
    "Operand" => "Operand",
    "OperatingSystemVersion" => "OperatingSystemVersion",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OperationStream" => "OperationStream",
    "OperationStreamResult" => "OperationStreamResult",
    "OperatorError" => "OperatorError",
    "OverrideInfo" => "OverrideInfo",
    "PagingError" => "PagingError",
    "PercentCPA" => "PercentCPA",
    "PercentCPAAdGroupBids" => "PercentCPAAdGroupBids",
    "PercentCPAAdGroupCriterionBids" => "PercentCPAAdGroupCriterionBids",
    "PhoneInteractionBid" => "PhoneInteractionBid",
    "PlaceHolder" => "PlaceHolder",
    "Placement" => "Placement",
    "Platform" => "Platform",
    "PolicyViolationError.Part" => "PolicyViolationErrorPart",
    "PolicyViolationKey" => "PolicyViolationKey",
    "Polygon" => "Polygon",
    "Product" => "Product",
    "ProductAd" => "ProductAd",
    "ProductCondition" => "ProductCondition",
    "ProductConditionAndGroup" => "ProductConditionAndGroup",
    "ProductConditionOperand" => "ProductConditionOperand",
    "ProductExtension" => "ProductExtension",
    "Proximity" => "Proximity",
    "QualityInfo" => "QualityInfo",
    "QueryError" => "QueryError",
    "QuotaCheckError" => "QuotaCheckError",
    "QuotaError" => "QuotaError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RealTimeBiddingSetting" => "RealTimeBiddingSetting",
    "RegionCodeError" => "RegionCodeError",
    "RejectedError" => "RejectedError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "ReturnValueResult" => "ReturnValueResult",
    "RichMediaAd" => "RichMediaAd",
    "SelectorError" => "SelectorError",
    "SettingError" => "SettingError",
    "SimpleMutateJob" => "SimpleMutateJob",
    "SimpleMutateResult" => "SimpleMutateResult",
    "Sitelink" => "Sitelink",
    "SitelinksExtension" => "SitelinksExtension",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatsQueryError" => "StatsQueryError",
    "StringLengthError" => "StringLengthError",
    "String_StringMapEntry" => "String_StringMapEntry",
    "TargetError" => "TargetError",
    "TargetRestrictSetting" => "TargetRestrictSetting",
    "TargetingSettingDetail" => "TargetingSettingDetail",
    "TargetingSetting" => "TargetingSetting",
    "TempAdUnionId" => "TempAdUnionId",
    "TemplateAd" => "TemplateAd",
    "TemplateElement" => "TemplateElement",
    "TemplateElementField" => "TemplateElementField",
    "TextAd" => "TextAd",
    "ThirdPartyRedirectAd" => "ThirdPartyRedirectAd",
    "TrackingSetting" => "TrackingSetting",
    "UnknownBiddingStrategy" => "UnknownBiddingStrategy",
    "UnprocessedResult" => "UnprocessedResult",
    "CriterionUserInterest" => "CriterionUserInterest",
    "CriterionUserList" => "CriterionUserList",
    "Vertical" => "Vertical",
    "Video" => "Video",
    "Webpage" => "Webpage",
    "WebpageCondition" => "WebpageCondition",
    "WebpageParameter" => "WebpageParameter",
    "DynamicSearchAd" => "DynamicSearchAd",
    "AdError.Reason" => "AdErrorReason",
    "AdExtensionError.Reason" => "AdExtensionErrorReason",
    "AdExtensionOverride.ApprovalStatus" => "AdExtensionOverrideApprovalStatus",
    "AdExtensionOverride.Status" => "AdExtensionOverrideStatus",
    "AdExtensionOverrideError.Reason" => "AdExtensionOverrideErrorReason",
    "AdGroup.Status" => "AdGroupStatus",
    "AdGroupAd.ApprovalStatus" => "AdGroupAdApprovalStatus",
    "AdGroupAd.Status" => "AdGroupAdStatus",
    "AdGroupAdError.Reason" => "AdGroupAdErrorReason",
    "AdGroupCriterionError.Reason" => "AdGroupCriterionErrorReason",
    "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
    "AdGroupServiceError.Reason" => "AdGroupServiceErrorReason",
    "AdServingOptimizationStatus" => "AdServingOptimizationStatus",
    "AdxError.Reason" => "AdxErrorReason",
    "AgeRange.AgeRangeType" => "AgeRangeAgeRangeType",
    "ApprovalStatus" => "ApprovalStatus",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BasicJobStatus" => "BasicJobStatus",
    "BetaError.Reason" => "BetaErrorReason",
    "BidSource" => "BidSource",
    "BiddingError.Reason" => "BiddingErrorReason",
    "BiddingTransitionError.Reason" => "BiddingTransitionErrorReason",
    "Budget.BudgetDeliveryMethod" => "BudgetBudgetDeliveryMethod",
    "Budget.BudgetPeriod" => "BudgetBudgetPeriod",
    "Budget.BudgetStatus" => "BudgetBudgetStatus",
    "BudgetError.Reason" => "BudgetErrorReason",
    "BulkMutateJobError.Reason" => "BulkMutateJobErrorReason",
    "CampaignAdExtension.ApprovalStatus" => "CampaignAdExtensionApprovalStatus",
    "CampaignAdExtension.Status" => "CampaignAdExtensionStatus",
    "CampaignAdExtensionError.Reason" => "CampaignAdExtensionErrorReason",
    "CampaignCriterionError.Reason" => "CampaignCriterionErrorReason",
    "CampaignCriterionLimitExceeded.CriteriaLimitType" => "CampaignCriterionLimitExceededCriteriaLimitType",
    "CampaignError.Reason" => "CampaignErrorReason",
    "CampaignStatus" => "CampaignStatus",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "ContentLabelType" => "ContentLabelType",
    "ConversionOptimizerBidType" => "ConversionOptimizerBidType",
    "ConversionOptimizerEligibility.RejectionReason" => "ConversionOptimizerEligibilityRejectionReason",
    "Criterion.Type" => "CriterionType",
    "CriterionError.Reason" => "CriterionErrorReason",
    "CriterionTypeGroup" => "CriterionTypeGroup",
    "CriterionUse" => "CriterionUse",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DayOfWeek" => "DayOfWeek",
    "DeprecatedAd.Type" => "DeprecatedAdType",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityId.Type" => "EntityIdType",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "ExperimentDataStatus" => "ExperimentDataStatus",
    "ExperimentDeltaStatus" => "ExperimentDeltaStatus",
    "Gender.GenderType" => "GenderGenderType",
    "GeoTargetTypeSetting.NegativeGeoTargetType" => "GeoTargetTypeSettingNegativeGeoTargetType",
    "GeoTargetTypeSetting.PositiveGeoTargetType" => "GeoTargetTypeSettingPositiveGeoTargetType",
    "IdError.Reason" => "IdErrorReason",
    "ImageError.Reason" => "ImageErrorReason",
    "InAppLinkExtension.AppStore" => "InAppLinkExtensionAppStore",
    "InteractionBid.BidStatus" => "InteractionBidBidStatus",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "JobError.Reason" => "JobErrorReason",
    "KeywordMatchType" => "KeywordMatchType",
    "Level" => "Level",
    "LocationExtension.Source" => "LocationExtensionSource",
    "LocationOverrideInfo.RadiusUnits" => "LocationOverrideInfoRadiusUnits",
    "LocationTargetingStatus" => "LocationTargetingStatus",
    "MarkupLanguageType" => "MarkupLanguageType",
    "Media.MediaType" => "MediaMediaType",
    "Media.MimeType" => "MediaMimeType",
    "Media.Size" => "MediaSize",
    "MediaError.Reason" => "MediaErrorReason",
    "MinuteOfHour" => "MinuteOfHour",
    "MobileDevice.DeviceType" => "MobileDeviceDeviceType",
    "MultiplierSource" => "MultiplierSource",
    "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperatingSystemVersion.OperatorType" => "OperatingSystemVersionOperatorType",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "OperatorError.Reason" => "OperatorErrorReason",
    "PagingError.Reason" => "PagingErrorReason",
    "PolicyViolationError.Reason" => "PolicyViolationErrorReason",
    "PricingModel" => "PricingModel",
    "Proximity.DistanceUnits" => "ProximityDistanceUnits",
    "QueryError.Reason" => "QueryErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RegionCodeError.Reason" => "RegionCodeErrorReason",
    "RejectedError.Reason" => "RejectedErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RichMediaAd.RichMediaAdType" => "RichMediaAdRichMediaAdType",
    "SelectorError.Reason" => "SelectorErrorReason",
    "ServingStatus" => "ServingStatus",
    "SettingError.Reason" => "SettingErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "Stats.Network" => "StatsNetwork",
    "StatsQueryError.Reason" => "StatsQueryErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "SystemServingStatus" => "SystemServingStatus",
    "TargetError.Reason" => "TargetErrorReason",
    "TemplateElementField.Type" => "TemplateElementFieldType",
    "ThirdPartyRedirectAd.ExpandingDirection" => "ThirdPartyRedirectAdExpandingDirection",
    "TimeUnit" => "TimeUnit",
    "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
    "UserStatus" => "UserStatus",
    "VideoType" => "VideoType",
    "WebpageConditionOperand" => "WebpageConditionOperand",
    "getResult" => "getResult",
    "getResultResponse" => "getResultResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201209/MutateJobService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = MutateJobService::$classmap;
    parent::__construct($wsdl, $options, $user, 'MutateJobService', 'https://adwords.google.com/api/adwords/cm/v201209');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Query the status of existing jobs, both simple and bulk API.
   * <p>Use a {@link JobSelector} to query and return a list which may
   * contain both {@link BulkMutateJob} and/or {@link SimpleMutateJob}.</p>
   */
  public function get($selector) {
    $arg = new MutateJobServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Query mutation results, of a {@code COMPLETED} job.
   * <p>Use a {@link JobSelector} to query and return either a
   * {@link BulkMutateResult} or a {@link SimpleMutateResult}. Submit only one job ID
   * at a time.</p>
   */
  public function getResult($selector) {
    $arg = new getResult($selector);
    $result = $this->__soapCall("getResult", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Simplified way of submitting a mutation job. The provided list of
   * operations, if valid, will create a new job with a unique id, which will
   * be returned. This id can later be used in invocations of
   * {@link #get} and {@link #getResult}. Policy can optionally be specified.
   * 
   * <p>When this method returns with success, the job will be in
   * {@code PROCESSING} or {@code PENDING} state and no further action is
   * needed for the job to get executed.</p>
   * 
   * <p>You should not use the returned {@link BulkMutateJobId} with bulk API
   * {@link BulkMutateJobService#mutate} method.</p>
   */
  public function mutate($operations, $policy) {
    $arg = new MutateJobServiceMutate($operations, $policy);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


}}