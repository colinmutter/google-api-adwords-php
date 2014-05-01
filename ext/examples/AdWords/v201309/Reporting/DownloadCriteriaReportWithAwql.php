<?php
/**
 * This example downloads a criteria report to a file.
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

error_reporting(E_STRICT | E_ALL);

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

require_once ADWORDS_UTIL_PATH . '/ReportUtils.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $filePath the path of the file to download the report to
 */
function DownloadCriteriaReportWithAwqlExample(AdWordsUser $user, $filePath,
    $reportFormat) {
  // Prepare a date range for the last week. Instead you can use 'LAST_7_DAYS'.
  $dateRange = sprintf('%d,%d',
      date('Ymd', strtotime('-7 day')), date('Ymd', strtotime('-1 day')));

  // Create report query.
  $reportQuery = 'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
      . 'Impressions, Clicks, Cost FROM CRITERIA_PERFORMANCE_REPORT '
      . 'WHERE Status IN [ACTIVE, PAUSED] DURING ' . $dateRange;

  // Set additional options.
  $options = array('version' => ADWORDS_VERSION);

  // Download report.
  ReportUtils::DownloadReportWithAwql($reportQuery, $filePath, $user,
      $reportFormat, $options);

  printf("Report was downloaded to '%s'.\n", $filePath);
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

  // Download the report to a file in the same directory as the example.
  $filePath = dirname(__FILE__) . '/report.csv';
  $reportFormat = 'CSV';

  // Run the example.
  DownloadCriteriaReportWithAwqlExample($user, $filePath, $reportFormat);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
