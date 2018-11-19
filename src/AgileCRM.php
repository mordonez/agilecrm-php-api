<?php

namespace AgileCRM;

/**
 * AgileCRM Class
 *
 * @package AgileCRM
 */
class AgileCRM
{

    // @var string The AgileCRM API key to be used for requests.
    public static $apiKey;

    // @var string The AgileCRM domain to be used for connect requests.
    public static $clientDomain;

    // @var string The AgileCRM email to be used for connect requests.
    public static $clientEmail;

    // @var string The base URL for the Stripe API.
    public static $apiBase = '.agilecrm.com/dev/api';

    /**
     * Get the value of apiKey
     */
    public function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Get the value of clientDomain
     */
    public function getClientDomain()
    {
        return self::$clientDomain;
    }

    /**
     * Get the value of clientEmail
     */
    public function getClientEmail()
    {
        return self::$clientEmail;
    }

    /**
     * Set the value of ApiKey
     *
     * @param string $apiKey The API Key
     */
    public function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    /**
     * Set the value of clientDomain
     *
     * @return  self
     */
    public function setClientDomain($clientDomain)
    {
        self::$clientDomain = $clientDomain;
    }

    /**
     * Set the value of clientEmail
     *
     * @return  self
     */
    public function setClientEmail($clientEmail)
    {
        self::$clientEmail = $clientEmail;
    }
}
