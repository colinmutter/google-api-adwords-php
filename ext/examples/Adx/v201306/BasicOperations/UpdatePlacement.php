<?php
/**
 * This example updates the destination URL of a placement. To get placements,
 * run GetPlacements.php.
 *
 * Tags: AdGroupCriterionService.mutate
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
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';
$criterionId = 'INSERT_PLACEMENT_CRITERION_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the id of the ad group that contains the placement
 * @param string $criterionId the id of the placement
 */
function UpdatePlacementExample(AdWordsUser $user, $adGroupId, $criterionId) {
  // Get the service, which loads the required classes.
  $adGroupCriterionService =
      $user->GetService('AdGroupCriterionService', ADWORDS_VERSION);

  // Create criterion using an existing ID. Use the base class Criterion
  // instead of Placement to avoid having to set placement-specific fields.
  $criterion = new Placement();
  $criterion->id = $criterionId;

  // Create ad group criterion.
  $adGroupCriterion = new BiddableAdGroupCriterion();
  $adGroupCriterion->adGroupId = $adGroupId;
  $adGroupCriterion->criterion = $criterion;

  // Update destination URL.
  $adGroupCriterion->destinationUrl = 'http://www.example.com/new';

  // Create operation.
  $operation = new AdGroupCriterionOperation();
  $operation->operand = $adGroupCriterion;
  $operation->operator = 'SET';

  $operations = array($operation);

  // Make the mutate request.
  $result = $adGroupCriterionService->mutate($operations);

  // Display result.
  $adGroupCriterion = $result->value[0];
  printf("Placement with ID '%s' has updated destination URL '%s'.\n",
      $adGroupCriterion->criterion->id, $adGroupCriterion->destinationUrl);
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  UpdatePlacementExample($user, $adGroupId, $criterionId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
