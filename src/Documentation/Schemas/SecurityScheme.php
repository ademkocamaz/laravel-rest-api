<?php

namespace Lomkit\Rest\Documentation\Schemas;

class SecurityScheme extends Schema
{
    /**
     * The type of the security scheme. Valid values are "apiKey", "http", "mutualTLS", "oauth2", "openIdConnect".
     * @var string
     */
    protected string $type;

    /**
     * A description for security scheme. CommonMark syntax MAY be used for rich text representation.
     * @var string
     */
    protected string $description;

    /**
     * The name of the header, query or cookie parameter to be used.
     * @var string
     */
    protected string $name;

    /**
     * The location of the API key. Valid values are "query", "header" or "cookie".
     * @var string
     */
    protected string $in;

    /**
     * The name of the HTTP Authorization scheme to be used in the Authorization header as defined in [RFC7235]. The values used SHOULD be registered in the IANA Authentication Scheme registry.
     * @var string
     */
    protected string $scheme;

    /**
     * A hint to the client to identify how the bearer token is formatted. Bearer tokens are usually generated by an authorization server, so this information is primarily for documentation purposes.
     * @var string
     */
    protected string $bearerFormat;

    /**
     * An object containing configuration information for the flow types supported.
     * @var OauthFlows
     */
    protected OauthFlows $flows;

    /**
     * OpenId Connect URL to discover OAuth2 configuration values. This MUST be in the form of a URL. The OpenID Connect standard requires the use of TLS.
     * @var string
     */
    protected string $openIdConnectUrl;

    /**
     * Set the type of the security scheme.
     *
     * @param string $type
     * @return SecurityScheme
     *
     * This method allows setting the type of the security scheme, such as "apiKey", "http", "oauth2", etc.
     */
    public function withType(string $type): SecurityScheme
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get the type of the security scheme.
     *
     * @return string
     *
     * This method retrieves the type of the security scheme.
     */
    public function type(): string
    {
        return $this->type;
    }

    /**
     * Set a description for the security scheme.
     *
     * @param string $description
     * @return SecurityScheme
     *
     * This method allows setting a description for the security scheme, which can include rich text representation using CommonMark syntax.
     */
    public function withDescription(string $description): SecurityScheme
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get the description of the security scheme.
     *
     * @return string
     *
     * This method retrieves the description of the security scheme.
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * Set the name of the header, query, or cookie parameter to be used.
     *
     * @param string $name
     * @return SecurityScheme
     *
     * This method allows setting the name of the header, query, or cookie parameter to be used in the security scheme.
     */
    public function withName(string $name): SecurityScheme
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the name of the header, query, or cookie parameter to be used.
     *
     * @return string
     *
     * This method retrieves the name of the header, query, or cookie parameter used in the security scheme.
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Set the location of the API key.
     *
     * @param string $in
     * @return SecurityScheme
     *
     * This method allows setting the location of the API key, which can be "query", "header", or "cookie".
     */
    public function withIn(string $in): SecurityScheme
    {
        $this->in = $in;
        return $this;
    }

    /**
     * Get the location of the API key.
     *
     * @return string
     *
     * This method retrieves the location of the API key, which can be "query", "header", or "cookie".
     */
    public function in(): string
    {
        return $this->in;
    }

    /**
     * Set the name of the HTTP Authorization scheme.
     *
     * @param string $scheme
     * @return SecurityScheme
     *
     * This method allows setting the name of the HTTP Authorization scheme to be used in the Authorization header.
     */
    public function withScheme(string $scheme): SecurityScheme
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     * Get the name of the HTTP Authorization scheme.
     *
     * @return string
     *
     * This method retrieves the name of the HTTP Authorization scheme used in the Authorization header.
     */
    public function scheme(): string
    {
        return $this->scheme;
    }

    /**
     * Set the bearer token format hint.
     *
     * @param string $bearerFormat
     * @return SecurityScheme
     *
     * This method allows setting a hint to identify how the bearer token is formatted.
     */
    public function withBearerFormat(string $bearerFormat): SecurityScheme
    {
        $this->bearerFormat = $bearerFormat;
        return $this;
    }

    /**
     * Get the bearer token format hint.
     *
     * @return string
     *
     * This method retrieves the hint for identifying how the bearer token is formatted.
     */
    public function bearerFormat(): string
    {
        return $this->bearerFormat;
    }

    /**
     * Set the OAuth2 flows configuration.
     *
     * @param OauthFlows $flows
     * @return SecurityScheme
     *
     * This method allows setting the configuration information for the OAuth2 flows supported by the security scheme.
     */
    public function withFlows(OauthFlows $flows): SecurityScheme
    {
        $this->flows = $flows;
        return $this;
    }

    /**
     * Get the OAuth2 flows configuration.
     *
     * @return OauthFlows
     *
     * This method retrieves the configuration information for the OAuth2 flows supported by the security scheme.
     */
    public function flows(): OauthFlows
    {
        return $this->flows;
    }

    /**
     * Set the OpenID Connect URL to discover OAuth2 configuration values.
     *
     * @param string $openIdConnectUrl
     * @return SecurityScheme
     *
     * This method allows setting the URL for discovering OAuth2 configuration values in the context of OpenID Connect.
     */
    public function withOpenIdConnectUrl(string $openIdConnectUrl): SecurityScheme
    {
        $this->openIdConnectUrl = $openIdConnectUrl;
        return $this;
    }

    /**
     * Get the OpenID Connect URL for discovering OAuth2 configuration values.
     *
     * @return string
     *
     * This method retrieves the URL used to discover OAuth2 configuration values in the context of OpenID Connect.
     */
    public function openIdConnectUrl(): string
    {
        return $this->openIdConnectUrl;
    }

    /**
     * Generate and return the current instance of SecurityScheme.
     *
     * @return SecurityScheme
     *
     * This method allows generating and returning the current instance of the SecurityScheme.
     */
    public function generate(): SecurityScheme
    {
        return $this;
    }

    /**
     * Serialize the SecurityScheme instance to a JSON-serializable array.
     *
     * @return mixed
     *
     * This method serializes the SecurityScheme instance to a JSON-serializable array, which can be used to represent the security scheme in JSON format.
     */
    public function jsonSerialize(): mixed
    {
        return array_merge(
            isset($this->scheme) ? ['scheme' => $this->scheme()] : [],
            isset($this->in) ? ['in' => $this->in()] : [],
            isset($this->flows) ? ['flows' => $this->flows()->jsonSerialize()] : [],
            isset($this->description) ? ['description' => $this->description()] : [],
            isset($this->type) ? ['type' => $this->type()] : [],
            isset($this->name) ? ['name' => $this->name()] : [],
            isset($this->openIdConnectUrl) ? ['openIdConnectUrl' => $this->openIdConnectUrl()] : [],
        );
    }
}