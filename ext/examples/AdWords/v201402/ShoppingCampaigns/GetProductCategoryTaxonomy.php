<?php
/**
 * This example fetches the set of valid ProductBiddingCategories.
 *
 * Tags: ConstantDataService.getProductBiddingCategoryData
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201402
 * @category   WebServices
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function getProductCategoryTaxonomyExample(AdWordsUser $user) {
  // Get the ConstantDataService, which loads the required classes.
  $constantDataService = $user->GetService('ConstantDataService',
        ADWORDS_VERSION);

  $selector = new Selector();
  $selector->predicates[] = new Predicate('Country', 'IN', array('US'));

  $results = $constantDataService->getProductBiddingCategoryData($selector);

  $biddingCategories = array();
  $rootCategories = array();

  foreach ($results as $productBiddingCategory) {
    $id = $productBiddingCategory->dimensionValue->value;
    $parentId = null;
    $name = $productBiddingCategory->displayValue[0]->value;

    if ($productBiddingCategory->parentDimensionValue) {
      $parentId = $productBiddingCategory->parentDimensionValue->value;
    }

    if (!isset($biddingCategories[$id])) {
      $biddingCategories[$id] = new StdClass();
    }

    $category = $biddingCategories[$id];

    if ($parentId) {
      if (!isset($biddingCategories[$parentId])) {
        $biddingCategories[$parentId] = new StdClass();
      }
      $parent = $biddingCategories[$parentId];
      if (!isset($parent->children)) {
        $parent->children = array();
      }
      $parent->children[] = $category;
    } else {
      $rootCategories[] = $category;
    }

    $category->id = $id;
    $category->name = $name;
  }

  displayCategories($rootCategories);
}

function displayCategories($categories, $prefix = "") {
  foreach ($categories as $category) {
    printf("%s%s [%s]\n", $prefix, $category->name, $category->id);
    if (isset($category->children)) {
      displayCategories($category->children, "{$prefix}{$category->name} > ");
    }
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
  getProductCategoryTaxonomyExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
