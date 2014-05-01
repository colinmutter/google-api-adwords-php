<?php
/**
 * A utility class for handling PQL objects.
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
 * @package    GoogleApiAdsDfp
 * @subpackage Util
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao
 */
require_once 'Google/Api/Ads/Dfp/Util/DateTimeUtils.php';
require_once 'Google/Api/Ads/Dfp/v201403/PublisherQueryLanguageService.php';

/**
 * A utility class for handling PQL objects.
 *
 * @package GoogleApiAdsDfp
 * @subpackage Util
 */
class Pql {

  /**
   * {@link Pql} is meant to be used statically.
   */
  private function __construct() {}

  /**
   * Creates a {@link Value} from the value i.e. a {@link TextValue} for a
   * value of type {@code String}, {@link BooleanValue} for type
   * {@code Boolean}, {@link NumberValue} for type {@code Double},
   * {@code Long}, or {@code Integer}, {@link DateTimeValue} for type
   * {@link DateTime}, and {@link DateValue} for type
   * {@link Date}. If the value is a {@code Value}, the value is returned.
   * If the value is {@code null}, an empty {@link TextValue} is returned.
   *
   * @param mixed $value the value to convert
   * @return Value the constructed value of the appropriate type
   * @throws InvalidArgumentException if value cannot be converted
   */
  public static function CreateValue($value) {
    if ($value instanceof Value) {
      return $value;
    } else if ($value === null) {
      return new TextValue();
    } else {
      if (is_bool($value)) {
        return new BooleanValue($value);
      } else if (is_float($value) || is_int($value)) {
        return new NumberValue($value);
      } else if (is_string($value)) {
        return new TextValue($value);
      } else if ($value instanceof DfpDateTime) {
        return new DateTimeValue($value);
      } else if (class_exists('Date', false) && $value instanceof Date) {
        return new DateValue($value);
      } else {
        throw new InvalidArgumentException(sprintf("Unsupported value type "
            . "[%s]", get_class($value)));
      }
    }
  }

 /**
   * Creates a String from the Value.
   *
   * @param Value $value the value to convert
   * @return string the string representation of the value
   * @throws InvalidArgumentException if value cannot be converted
   */
  public static function ToString(Value $value) {
    if ($value instanceof BooleanValue) {
      return ($value->value) ? 'true' : 'false';
    } else if ($value instanceof NumberValue || $value instanceof TextValue) {
      return strval($value->value);
    } else if ($value instanceof DateTimeValue) {
      return (isset($value->value))
          ? DateTimeUtils::ToStringWithTimeZone($value->value) : '';
    } else if ($value instanceof DateValue) {
      return DateTimeUtils::ToString($value->value);
    } else {
      throw new InvalidArgumentException(sprintf("Unsupported Value type [%s]",
          get_class($value)));
    }
  }

  /**
   * Gets the column labels for the result set.
   *
   * @param ResultSet $resultSet the result set to get the column labels for
   * @return array the string list of column labels
   */
  public static function GetColumnLabels(ResultSet $resultSet) {
    $columnLabels = array();
    foreach ($resultSet->columnTypes as $columnType) {
      $columnLabels[] = $columnType->labelName;
    }
    return $columnLabels;
  }

  /**
   * Gets the values in a row of the result set in the form of a string list.
   *
   * @param Row $row the row to get the values for
   * @return array the string list of row labels
   */
  public static function GetRowStringValues(Row $row) {
    return array_map(array('Pql', 'ToString'), $row->values);
  }

  /**
   * Combines the first and second result sets, if and only if, the columns
   * of both result sets match.
   *
   * @throws InvalidArgumentException if the result sets to combine do not have
   *     identical column headers
   */
  public static function CombineResultSets(ResultSet $first,
      ResultSet $second) {
    $firstColumns = self::GetColumnLabels($first);
    $secondColumns = self::GetColumnLabels($second);

    if ($firstColumns !== $secondColumns) {
      throw new InvalidArgumentException(sprintf("First result set columns "
          . "[%s] do not match second result set columns [%s]", implode(', ',
          $firstColumns), implode(', ', $secondColumns)));
    }

    $combinedRows = $first->rows;
    if (isset($second->rows)) {
      $combinedRows = array_merge($combinedRows, $second->rows);
    }

    return new ResultSet($first->columnTypes, $combinedRows);
  }
}

