<?php
/**
 * This example deletes an ad group. To get ad groups, run GetAdGroups.php.
 *
 * Tags: AdGroupService.mutate
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
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the id of the ad group to delete
 */
function DeleteAdGroupExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);

  // Create ad group with DELETED status.
  $adGroup = new AdGroup();
  $adGroup->id = $adGroupId;
  $adGroup->status = 'DELETED';
  // Rename the ad group as you delete it, to avoid future name conflicts.
  $adGroup->name = 'Deleted ' . date('Ymd his');

  // Create operations.
  $operation = new AdGroupOperation();
  $operation->operand = $adGroup;
  $operation->operator = 'SET';

  $operations = array($operation);

  // Make the mutate request.
  $result = $adGroupService->mutate($operations);

  // Display result.
  $adGroup = $result->value[0];
  printf("Ad group with ID '%s' was deleted.\n", $adGroup->id);
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
  DeleteAdGroupExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
