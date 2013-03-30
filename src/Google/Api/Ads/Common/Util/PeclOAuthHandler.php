<?php
/**
 * An OAuth handler that uses the OAuth PECL extension.
 *
 * PHP version 5
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsCommon
 * @subpackage Util
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda <api.ekoleda@gmail.com>
 * @author     Vincent Tsao <api.vtsao@gmail.com>
 * @link       http://www.php.net/manual/en/book.oauth.php
 */
require_once 'Google/Api/Ads/Common/Util/OAuthHandler.php';

/**
 * An OAuth handler that uses the OAuth PECL extension.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class PeclOAuthHandler extends OAuthHandler {
  /**
   * A map from OAuth method names to enum values.
   * @var array
   */
  private static $OAUTH_METHOD_ENUMS = array(
      'GET' => OAUTH_HTTP_METHOD_GET,
      'POST' => OAUTH_HTTP_METHOD_POST,
      'PUT' => OAUTH_HTTP_METHOD_PUT,
      'HEAD' => OAUTH_HTTP_METHOD_HEAD
  );

  /**
   * Constructor.
   */
  public function __construct() {}

  /**
   * @see OAuthHanlder::GetRequestToken()
   */
  public function GetRequestToken($credentials, $scope, $server = NULL,
      $callbackUrl = NULL, $applicationName = NULL) {
    // Must use URI auth type due to bug in version 1.1.0 and earlier.
    $client = $this->GetClient($credentials, OAUTH_AUTH_TYPE_URI);

    $params = array('scope' => $scope);
    if (!isset($callbackUrl)) {
      $callbackUrl = parent::$DEFAULT_CALLBACK_URL;
    }
    if (isset($applicationName)) {
      $params['xoauth_displayname'] = $applicationName;
    }
    $endpoint = $this->GetRequestEndpoint($server, $params);
    $response = $client->getRequestToken($endpoint, $callbackUrl);
    if (!isset($response['oauth_token']) ||
        !isset($response['oauth_token_secret'])) {
      $exception = new OAuthException('Invalid OAuth response.');
      $exception->lastResponse = $client->getLastResponse();
      throw $exception;
    }
    $credentials['oauth_token'] = $response['oauth_token'];
    $credentials['oauth_token_secret'] = $response['oauth_token_secret'];
    return $credentials;
  }

  /**
   * @see OAuthHanlder::GetAccessToken()
   */
  public function GetAccessToken($credentials, $verifier, $server = NULL) {
    // Must use URI auth type due to bug in version 1.1.0 and earlier.
    $client = $this->GetClient($credentials, OAUTH_AUTH_TYPE_URI);
    $endpoint = $this->GetAccessEndpoint($server);
    $response = $client->getAccessToken($endpoint, NULL, $verifier);
    if (!isset($response['oauth_token']) ||
        !isset($response['oauth_token_secret'])) {
      $exception = new OAuthException('Invalid OAuth response.');
      $exception->lastResponse = $client->getLastResponse();
      throw $exception;
    }
    $credentials['oauth_token'] = $response['oauth_token'];
    $credentials['oauth_token_secret'] = $response['oauth_token_secret'];
    return $credentials;
  }

  /**
   * @see OAuthHanlder::GetSignedRequestParameters()
   */
  public function GetSignedRequestParameters($credentials, $url,
      $method = NULL) {
    if (empty($method)) {
      $method = 'POST';
    }

    $params = array();
    $params['oauth_consumer_key'] = $credentials['oauth_consumer_key'];
    $params['oauth_token'] = $credentials['oauth_token'];
    $params['oauth_signature_method'] = 'HMAC-SHA1';
    $params['oauth_timestamp'] = time();
    $params['oauth_nonce'] = uniqid();
    $params['oauth_version'] = '1.0a';

    // Must *NOT* use URI auth type due to bug in version 1.1.0 and earlier.
    $client = $this->GetClient($credentials, OAUTH_AUTH_TYPE_AUTHORIZATION);
    $client->setTimestamp($params['oauth_timestamp']);
    $client->setNonce($params['oauth_nonce']);
    $client->setVersion($params['oauth_version']);

    $signature =
        $client->generateSignature(self::$OAUTH_METHOD_ENUMS[$method], $url);
    $params['oauth_signature'] = $signature;

    return $params;
  }

  /**
   * Constructs a new OAuth client object.
   * @param array $credentials the credentials to use
   * @param string $authorizationType the authorization type to use
   * @return OAuth a new OAuth client
   */
  private function GetClient($credentials, $authorizationType = NULL) {
    $client = new OAuth($credentials['oauth_consumer_key'],
        $credentials['oauth_consumer_secret'], OAUTH_SIG_METHOD_HMACSHA1,
        $authorizationType);
    $client->setRequestEngine(OAUTH_REQENGINE_CURL);
    $client->setVersion('1.0a');
    if (isset($credentials['oauth_token']) &&
        isset($credentials['oauth_token_secret'])) {
      $client->setToken($credentials['oauth_token'],
          $credentials['oauth_token_secret']);
    }

    // SSL settings.
    if (defined('SSL_VERIFY_PEER') && SSL_VERIFY_PEER) {
      $client->setSSLChecks(OAUTH_SSLCHECK_PEER);
    } else {
      $client->setSSLChecks(OAUTH_SSLCHECK_NONE);
    }
    if (defined('SSL_VERIFY_HOST') && SSL_VERIFY_HOST) {
      if ($client->sslChecks == OAUTH_SSLCHECK_PEER) {
        $client->setSSLChecks(OAUTH_SSLCHECK_BOTH);
      } else {
        $client->setSSLChecks(OAUTH_SSLCHECK_HOST);
      }
    }
    if (defined('SSL_CA_PATH') && SSL_CA_PATH != '') {
      // The second parameter must be explicitly set to NULL due to a bug in
      // version 1.2.2 and earlier. See https://bugs.php.net/bug.php?id=60226
      $client->setCAPath(SSL_CA_PATH, NULL);
    }
    if (defined('SSL_CA_FILE') && SSL_CA_FILE != '') {
      $client->setCAPath(NULL, SSL_CA_FILE);
    }
    return $client;
  }
}
