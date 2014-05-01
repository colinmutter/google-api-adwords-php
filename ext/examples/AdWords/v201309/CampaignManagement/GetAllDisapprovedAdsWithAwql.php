<?php
/**
 * This example gets all disapproved ads in an ad group with AWQL. To add ads,
 * run BasicOperations/AddTextAds.php. To get ad groups, run
 * BasicOperation/GetAdGroups.php.
 *
 * Tags: AdGroupAdService.query
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
 * @author     Danial Klimkin <api.dklimkin@gmail.com>
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the parent ad group id of the ads to retrieve
 */
function GetAllDisapprovedAdsWithAwqlExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  // Create a query.
  $query = sprintf('SELECT Id, AdGroupAdDisapprovalReasons WHERE AdGroupId = '
      . '%d AND AdGroupCreativeApprovalStatus = DISAPPROVED ORDER BY Id',
      $adGroupId);

  // Create paging controls.
  $offset = 0;

  do {
    $pageQuery = sprintf('%s LIMIT %d,%d', $query, $offset,
        AdWordsConstants::RECOMMENDED_PAGE_SIZE);

    // Make the query request.
    $page = $adGroupAdService->query($pageQuery);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $adGroupAd) {
        printf("Ad with ID '%.0f', and type '%s' was disapproved for the "
            . "following reasons:\n", $adGroupAd->ad->id,
            $adGroupAd->ad->AdType);
        if (!empty($adGroupAd->disapprovalReasons)) {
          foreach ($adGroupAd->disapprovalReasons as $reason) {
            printf("\t'%s'\n", $reason);
          }
        }
      }
    } else {
      print "No disapproved ads were found.\n";
    }

    // Advance the paging offset.
    $offset += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while ($page->totalNumEntries > $offset);
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
  GetAllDisapprovedAdsWithAwqlExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
