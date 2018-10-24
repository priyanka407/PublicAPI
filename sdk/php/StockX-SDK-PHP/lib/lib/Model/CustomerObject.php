<?php
/**
 * CustomerObject
 *
 * PHP version 5
 *
 * @category Class
 * @package  StockX\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * StockX API
 *
 * Provides access to StockX's public services, allowing end users to query for product and order information.
 *
 * OpenAPI spec version: final32218.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace StockX\Client\Model;

use \ArrayAccess;
use \StockX\Client\ObjectSerializer;

/**
 * CustomerObject Class Doc Comment
 *
 * @category Class
 * @package  StockX\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Customer Object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'uuid' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'full_name' => 'string',
        'email' => 'string',
        'username' => 'string',
        'email_verified' => 'bool',
        'default_size' => 'string',
        'categories' => 'string[]',
        'default_category' => 'string',
        'vacation_date' => 'string',
        'is_active' => 'bool',
        'flagged' => 'bool',
        'hide_portfolio_banner' => 'bool',
        'refer_url' => 'string',
        'created_at' => 'string',
        'created_at_time' => 'float',
        'is_trader' => 'bool',
        'ship_by_date' => 'bool',
        'is_buying' => 'bool',
        'is_selling' => 'bool',
        'billing' => '\StockX\Client\Model\BillingObject',
        'shipping' => '\StockX\Client\Model\CustomerObjectShipping',
        'cc_only' => '\StockX\Client\Model\BillingObject',
        'merchant' => '\StockX\Client\Model\CustomerObjectMerchant',
        'promotion_code' => 'string',
        'paypal_emails' => 'string',
        'authorization_method' => 'string',
        'security_override' => 'bool',
        'team_member' => 'bool',
        'password_locked' => 'bool',
        'address_normalize_override' => 'bool',
        'early_payout_enabled' => 'bool',
        'early_payout_eligible' => 'bool',
        'security' => '\StockX\Client\Model\CustomerObjectSecurity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'uuid' => null,
        'first_name' => null,
        'last_name' => null,
        'full_name' => null,
        'email' => null,
        'username' => null,
        'email_verified' => null,
        'default_size' => null,
        'categories' => null,
        'default_category' => null,
        'vacation_date' => null,
        'is_active' => null,
        'flagged' => null,
        'hide_portfolio_banner' => null,
        'refer_url' => null,
        'created_at' => null,
        'created_at_time' => null,
        'is_trader' => null,
        'ship_by_date' => null,
        'is_buying' => null,
        'is_selling' => null,
        'billing' => null,
        'shipping' => null,
        'cc_only' => null,
        'merchant' => null,
        'promotion_code' => null,
        'paypal_emails' => null,
        'authorization_method' => null,
        'security_override' => null,
        'team_member' => null,
        'password_locked' => null,
        'address_normalize_override' => null,
        'early_payout_enabled' => null,
        'early_payout_eligible' => null,
        'security' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'uuid' => 'uuid',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'full_name' => 'fullName',
        'email' => 'email',
        'username' => 'username',
        'email_verified' => 'emailVerified',
        'default_size' => 'defaultSize',
        'categories' => 'categories',
        'default_category' => 'defaultCategory',
        'vacation_date' => 'vacationDate',
        'is_active' => 'isActive',
        'flagged' => 'flagged',
        'hide_portfolio_banner' => 'hidePortfolioBanner',
        'refer_url' => 'referUrl',
        'created_at' => 'createdAt',
        'created_at_time' => 'createdAtTime',
        'is_trader' => 'isTrader',
        'ship_by_date' => 'shipByDate',
        'is_buying' => 'isBuying',
        'is_selling' => 'isSelling',
        'billing' => 'Billing',
        'shipping' => 'Shipping',
        'cc_only' => 'CCOnly',
        'merchant' => 'Merchant',
        'promotion_code' => 'promotionCode',
        'paypal_emails' => 'paypalEmails',
        'authorization_method' => 'authorizationMethod',
        'security_override' => 'securityOverride',
        'team_member' => 'teamMember',
        'password_locked' => 'passwordLocked',
        'address_normalize_override' => 'addressNormalizeOverride',
        'early_payout_enabled' => 'earlyPayoutEnabled',
        'early_payout_eligible' => 'earlyPayoutEligible',
        'security' => 'security'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'full_name' => 'setFullName',
        'email' => 'setEmail',
        'username' => 'setUsername',
        'email_verified' => 'setEmailVerified',
        'default_size' => 'setDefaultSize',
        'categories' => 'setCategories',
        'default_category' => 'setDefaultCategory',
        'vacation_date' => 'setVacationDate',
        'is_active' => 'setIsActive',
        'flagged' => 'setFlagged',
        'hide_portfolio_banner' => 'setHidePortfolioBanner',
        'refer_url' => 'setReferUrl',
        'created_at' => 'setCreatedAt',
        'created_at_time' => 'setCreatedAtTime',
        'is_trader' => 'setIsTrader',
        'ship_by_date' => 'setShipByDate',
        'is_buying' => 'setIsBuying',
        'is_selling' => 'setIsSelling',
        'billing' => 'setBilling',
        'shipping' => 'setShipping',
        'cc_only' => 'setCcOnly',
        'merchant' => 'setMerchant',
        'promotion_code' => 'setPromotionCode',
        'paypal_emails' => 'setPaypalEmails',
        'authorization_method' => 'setAuthorizationMethod',
        'security_override' => 'setSecurityOverride',
        'team_member' => 'setTeamMember',
        'password_locked' => 'setPasswordLocked',
        'address_normalize_override' => 'setAddressNormalizeOverride',
        'early_payout_enabled' => 'setEarlyPayoutEnabled',
        'early_payout_eligible' => 'setEarlyPayoutEligible',
        'security' => 'setSecurity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'full_name' => 'getFullName',
        'email' => 'getEmail',
        'username' => 'getUsername',
        'email_verified' => 'getEmailVerified',
        'default_size' => 'getDefaultSize',
        'categories' => 'getCategories',
        'default_category' => 'getDefaultCategory',
        'vacation_date' => 'getVacationDate',
        'is_active' => 'getIsActive',
        'flagged' => 'getFlagged',
        'hide_portfolio_banner' => 'getHidePortfolioBanner',
        'refer_url' => 'getReferUrl',
        'created_at' => 'getCreatedAt',
        'created_at_time' => 'getCreatedAtTime',
        'is_trader' => 'getIsTrader',
        'ship_by_date' => 'getShipByDate',
        'is_buying' => 'getIsBuying',
        'is_selling' => 'getIsSelling',
        'billing' => 'getBilling',
        'shipping' => 'getShipping',
        'cc_only' => 'getCcOnly',
        'merchant' => 'getMerchant',
        'promotion_code' => 'getPromotionCode',
        'paypal_emails' => 'getPaypalEmails',
        'authorization_method' => 'getAuthorizationMethod',
        'security_override' => 'getSecurityOverride',
        'team_member' => 'getTeamMember',
        'password_locked' => 'getPasswordLocked',
        'address_normalize_override' => 'getAddressNormalizeOverride',
        'early_payout_enabled' => 'getEarlyPayoutEnabled',
        'early_payout_eligible' => 'getEarlyPayoutEligible',
        'security' => 'getSecurity'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['email_verified'] = isset($data['email_verified']) ? $data['email_verified'] : null;
        $this->container['default_size'] = isset($data['default_size']) ? $data['default_size'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['default_category'] = isset($data['default_category']) ? $data['default_category'] : null;
        $this->container['vacation_date'] = isset($data['vacation_date']) ? $data['vacation_date'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['flagged'] = isset($data['flagged']) ? $data['flagged'] : null;
        $this->container['hide_portfolio_banner'] = isset($data['hide_portfolio_banner']) ? $data['hide_portfolio_banner'] : null;
        $this->container['refer_url'] = isset($data['refer_url']) ? $data['refer_url'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['created_at_time'] = isset($data['created_at_time']) ? $data['created_at_time'] : null;
        $this->container['is_trader'] = isset($data['is_trader']) ? $data['is_trader'] : null;
        $this->container['ship_by_date'] = isset($data['ship_by_date']) ? $data['ship_by_date'] : null;
        $this->container['is_buying'] = isset($data['is_buying']) ? $data['is_buying'] : null;
        $this->container['is_selling'] = isset($data['is_selling']) ? $data['is_selling'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['cc_only'] = isset($data['cc_only']) ? $data['cc_only'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['paypal_emails'] = isset($data['paypal_emails']) ? $data['paypal_emails'] : null;
        $this->container['authorization_method'] = isset($data['authorization_method']) ? $data['authorization_method'] : null;
        $this->container['security_override'] = isset($data['security_override']) ? $data['security_override'] : null;
        $this->container['team_member'] = isset($data['team_member']) ? $data['team_member'] : null;
        $this->container['password_locked'] = isset($data['password_locked']) ? $data['password_locked'] : null;
        $this->container['address_normalize_override'] = isset($data['address_normalize_override']) ? $data['address_normalize_override'] : null;
        $this->container['early_payout_enabled'] = isset($data['early_payout_enabled']) ? $data['early_payout_enabled'] : null;
        $this->container['early_payout_eligible'] = isset($data['early_payout_eligible']) ? $data['early_payout_eligible'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email_verified
     *
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->container['email_verified'];
    }

    /**
     * Sets email_verified
     *
     * @param bool $email_verified email_verified
     *
     * @return $this
     */
    public function setEmailVerified($email_verified)
    {
        $this->container['email_verified'] = $email_verified;

        return $this;
    }

    /**
     * Gets default_size
     *
     * @return string
     */
    public function getDefaultSize()
    {
        return $this->container['default_size'];
    }

    /**
     * Sets default_size
     *
     * @param string $default_size default_size
     *
     * @return $this
     */
    public function setDefaultSize($default_size)
    {
        $this->container['default_size'] = $default_size;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets default_category
     *
     * @return string
     */
    public function getDefaultCategory()
    {
        return $this->container['default_category'];
    }

    /**
     * Sets default_category
     *
     * @param string $default_category default_category
     *
     * @return $this
     */
    public function setDefaultCategory($default_category)
    {
        $this->container['default_category'] = $default_category;

        return $this;
    }

    /**
     * Gets vacation_date
     *
     * @return string
     */
    public function getVacationDate()
    {
        return $this->container['vacation_date'];
    }

    /**
     * Sets vacation_date
     *
     * @param string $vacation_date vacation_date
     *
     * @return $this
     */
    public function setVacationDate($vacation_date)
    {
        $this->container['vacation_date'] = $vacation_date;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets flagged
     *
     * @return bool
     */
    public function getFlagged()
    {
        return $this->container['flagged'];
    }

    /**
     * Sets flagged
     *
     * @param bool $flagged flagged
     *
     * @return $this
     */
    public function setFlagged($flagged)
    {
        $this->container['flagged'] = $flagged;

        return $this;
    }

    /**
     * Gets hide_portfolio_banner
     *
     * @return bool
     */
    public function getHidePortfolioBanner()
    {
        return $this->container['hide_portfolio_banner'];
    }

    /**
     * Sets hide_portfolio_banner
     *
     * @param bool $hide_portfolio_banner hide_portfolio_banner
     *
     * @return $this
     */
    public function setHidePortfolioBanner($hide_portfolio_banner)
    {
        $this->container['hide_portfolio_banner'] = $hide_portfolio_banner;

        return $this;
    }

    /**
     * Gets refer_url
     *
     * @return string
     */
    public function getReferUrl()
    {
        return $this->container['refer_url'];
    }

    /**
     * Sets refer_url
     *
     * @param string $refer_url refer_url
     *
     * @return $this
     */
    public function setReferUrl($refer_url)
    {
        $this->container['refer_url'] = $refer_url;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets created_at_time
     *
     * @return float
     */
    public function getCreatedAtTime()
    {
        return $this->container['created_at_time'];
    }

    /**
     * Sets created_at_time
     *
     * @param float $created_at_time created_at_time
     *
     * @return $this
     */
    public function setCreatedAtTime($created_at_time)
    {
        $this->container['created_at_time'] = $created_at_time;

        return $this;
    }

    /**
     * Gets is_trader
     *
     * @return bool
     */
    public function getIsTrader()
    {
        return $this->container['is_trader'];
    }

    /**
     * Sets is_trader
     *
     * @param bool $is_trader is_trader
     *
     * @return $this
     */
    public function setIsTrader($is_trader)
    {
        $this->container['is_trader'] = $is_trader;

        return $this;
    }

    /**
     * Gets ship_by_date
     *
     * @return bool
     */
    public function getShipByDate()
    {
        return $this->container['ship_by_date'];
    }

    /**
     * Sets ship_by_date
     *
     * @param bool $ship_by_date ship_by_date
     *
     * @return $this
     */
    public function setShipByDate($ship_by_date)
    {
        $this->container['ship_by_date'] = $ship_by_date;

        return $this;
    }

    /**
     * Gets is_buying
     *
     * @return bool
     */
    public function getIsBuying()
    {
        return $this->container['is_buying'];
    }

    /**
     * Sets is_buying
     *
     * @param bool $is_buying is_buying
     *
     * @return $this
     */
    public function setIsBuying($is_buying)
    {
        $this->container['is_buying'] = $is_buying;

        return $this;
    }

    /**
     * Gets is_selling
     *
     * @return bool
     */
    public function getIsSelling()
    {
        return $this->container['is_selling'];
    }

    /**
     * Sets is_selling
     *
     * @param bool $is_selling is_selling
     *
     * @return $this
     */
    public function setIsSelling($is_selling)
    {
        $this->container['is_selling'] = $is_selling;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \StockX\Client\Model\BillingObject
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \StockX\Client\Model\BillingObject $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \StockX\Client\Model\CustomerObjectShipping
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \StockX\Client\Model\CustomerObjectShipping $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets cc_only
     *
     * @return \StockX\Client\Model\BillingObject
     */
    public function getCcOnly()
    {
        return $this->container['cc_only'];
    }

    /**
     * Sets cc_only
     *
     * @param \StockX\Client\Model\BillingObject $cc_only cc_only
     *
     * @return $this
     */
    public function setCcOnly($cc_only)
    {
        $this->container['cc_only'] = $cc_only;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \StockX\Client\Model\CustomerObjectMerchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \StockX\Client\Model\CustomerObjectMerchant $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets promotion_code
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->container['promotion_code'];
    }

    /**
     * Sets promotion_code
     *
     * @param string $promotion_code promotion_code
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets paypal_emails
     *
     * @return string
     */
    public function getPaypalEmails()
    {
        return $this->container['paypal_emails'];
    }

    /**
     * Sets paypal_emails
     *
     * @param string $paypal_emails paypal_emails
     *
     * @return $this
     */
    public function setPaypalEmails($paypal_emails)
    {
        $this->container['paypal_emails'] = $paypal_emails;

        return $this;
    }

    /**
     * Gets authorization_method
     *
     * @return string
     */
    public function getAuthorizationMethod()
    {
        return $this->container['authorization_method'];
    }

    /**
     * Sets authorization_method
     *
     * @param string $authorization_method authorization_method
     *
     * @return $this
     */
    public function setAuthorizationMethod($authorization_method)
    {
        $this->container['authorization_method'] = $authorization_method;

        return $this;
    }

    /**
     * Gets security_override
     *
     * @return bool
     */
    public function getSecurityOverride()
    {
        return $this->container['security_override'];
    }

    /**
     * Sets security_override
     *
     * @param bool $security_override security_override
     *
     * @return $this
     */
    public function setSecurityOverride($security_override)
    {
        $this->container['security_override'] = $security_override;

        return $this;
    }

    /**
     * Gets team_member
     *
     * @return bool
     */
    public function getTeamMember()
    {
        return $this->container['team_member'];
    }

    /**
     * Sets team_member
     *
     * @param bool $team_member team_member
     *
     * @return $this
     */
    public function setTeamMember($team_member)
    {
        $this->container['team_member'] = $team_member;

        return $this;
    }

    /**
     * Gets password_locked
     *
     * @return bool
     */
    public function getPasswordLocked()
    {
        return $this->container['password_locked'];
    }

    /**
     * Sets password_locked
     *
     * @param bool $password_locked password_locked
     *
     * @return $this
     */
    public function setPasswordLocked($password_locked)
    {
        $this->container['password_locked'] = $password_locked;

        return $this;
    }

    /**
     * Gets address_normalize_override
     *
     * @return bool
     */
    public function getAddressNormalizeOverride()
    {
        return $this->container['address_normalize_override'];
    }

    /**
     * Sets address_normalize_override
     *
     * @param bool $address_normalize_override address_normalize_override
     *
     * @return $this
     */
    public function setAddressNormalizeOverride($address_normalize_override)
    {
        $this->container['address_normalize_override'] = $address_normalize_override;

        return $this;
    }

    /**
     * Gets early_payout_enabled
     *
     * @return bool
     */
    public function getEarlyPayoutEnabled()
    {
        return $this->container['early_payout_enabled'];
    }

    /**
     * Sets early_payout_enabled
     *
     * @param bool $early_payout_enabled early_payout_enabled
     *
     * @return $this
     */
    public function setEarlyPayoutEnabled($early_payout_enabled)
    {
        $this->container['early_payout_enabled'] = $early_payout_enabled;

        return $this;
    }

    /**
     * Gets early_payout_eligible
     *
     * @return bool
     */
    public function getEarlyPayoutEligible()
    {
        return $this->container['early_payout_eligible'];
    }

    /**
     * Sets early_payout_eligible
     *
     * @param bool $early_payout_eligible early_payout_eligible
     *
     * @return $this
     */
    public function setEarlyPayoutEligible($early_payout_eligible)
    {
        $this->container['early_payout_eligible'] = $early_payout_eligible;

        return $this;
    }

    /**
     * Gets security
     *
     * @return \StockX\Client\Model\CustomerObjectSecurity
     */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
     * Sets security
     *
     * @param \StockX\Client\Model\CustomerObjectSecurity $security security
     *
     * @return $this
     */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


