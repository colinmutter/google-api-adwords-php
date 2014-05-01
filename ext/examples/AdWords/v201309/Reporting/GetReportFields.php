<?php
/**
 * This example gets the fields available in a campaign report.
 *
 * Tags: ReportDefinitionService.getReportFields
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

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function GetReportFieldsExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $reportDefinitionService =
      $user->GetService('ReportDefinitionService', ADWORDS_VERSION);

  // The type of the report to get fields for.
  $reportType = 'CAMPAIGN_PERFORMANCE_REPORT';

  // Get report fields.
  $reportDefinitionFields =
      $reportDefinitionService->getReportFields($reportType);

  // Display results.
  printf("The report type '%s' contains the following fields:\n", $reportType);
  foreach ($reportDefinitionFields as $reportDefinitionField) {
    printf('  %s (%s)', $reportDefinitionField->fieldName,
        $reportDefinitionField->fieldType);
    if (isset($reportDefinitionField->enumValues)) {
      printf(' := [%s]', implode(', ', $reportDefinitionField->enumValues));
    }
    print "\n";
  }
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
  GetReportFieldsExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
