<?php

/**
 * TechDivision\Import\Product\Utils\SqlStatements
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Product\Utils;

/**
 * Utility class with the SQL statements to use.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product
 * @link      http://www.techdivision.com
 */
class SqlStatements extends \TechDivision\Import\Utils\SqlStatements
{

    /**
     * The SQL statement to load the product with the passed SKU.
     *
     * @var string
     */
    const PRODUCT = 'product';

    /**
     * The SQL statement to load the product website relations with the passed product/website ID.
     *
     * @var string
     */
    const PRODUCT_WEBSITE = 'product_website';

    /**
     * The SQL statement to load the product datetime attribute with the passed entity/attribute/store ID.
     *
     * @var string
     */
    const PRODUCT_DATETIME = 'product_datetime';

    /**
     * The SQL statement to load the product decimal attribute with the passed entity/attribute/store ID.
     *
     * @var string
     */
    const PRODUCT_DECIMAL = 'product_decimal';

    /**
     * The SQL statement to load the product integer attribute with the passed entity/attribute/store ID.
     *
     * @var string
     */
    const PRODUCT_INT = 'product_int';

    /**
     * The SQL statement to load the product text attribute with the passed entity/attribute/store ID.
     *
     * @var string
     */
    const PRODUCT_TEXT = 'product_text';

    /**
     * The SQL statement to load the product varchar attribute with the passed entity/attribute/store ID.
     *
     * @var string
     */
    const PRODUCT_VARCHAR = 'product_varchar';

    /**
     * The SQL statement to load a product varchar attribute by the passed attribute code,
     * entity typy and store ID as well as the passed value.
     *
     * @var string
     */
    const PRODUCT_VARCHAR_BY_ATTRIBUTE_CODE_AND_ENTITY_TYPE_ID_AND_STORE_ID_AND_VALUE = 'product_varchar.by.attribute_code.and.entity_type_id.and.store_id.and.value';

    /**
     * The SQL statement to load the category product relations with the passed product/website ID.
     *
     * @var string
     */
    const CATEGORY_PRODUCT = 'category_product';

    /**
     * The SQL statement to load the stock status with the passed product/website/stock ID.
     *
     * @var string
     */
    const STOCK_STATUS = 'stock_status';

    /**
     * The SQL statement to load the stock item with the passed product/website/stock ID.
     *
     * @var string
     */
    const STOCK_ITEM = 'stock_item';

    /**
     * The SQL statement to create new products.
     *
     * @var string
     */
    const CREATE_PRODUCT = 'create.product';

    /**
     * The SQL statement to update an existing product.
     *
     * @var string
     */
    const UPDATE_PRODUCT = 'update.product';

    /**
     * The SQL statement to create a new product website relation.
     *
     * @var string
     */
    const CREATE_PRODUCT_WEBSITE = 'create.product_website';

    /**
     * The SQL statement to create a new category product relation.
     *
     * @var string
     */
    const CREATE_CATEGORY_PRODUCT = 'create.category_product';

    /**
     * The SQL statement to update an existing category product relation.
     *
     * @var string
     */
    const UPDATE_CATEGORY_PRODUCT = 'update.category_product';

    /**
     * The SQL statement to create a new product datetime value.
     *
     * @var string
     */
    const CREATE_PRODUCT_DATETIME = 'create.product_datetime';

    /**
     * The SQL statement to update an existing product datetime value.
     *
     * @var string
     */
    const UPDATE_PRODUCT_DATETIME = 'update.product_datetime';

    /**
     * The SQL statement to create a new product decimal value.
     *
     * @var string
     */
    const CREATE_PRODUCT_DECIMAL = 'create.product_decimal';

    /**
     * The SQL statement to update an existing product decimal value.
     *
     * @var string
     */
    const UPDATE_PRODUCT_DECIMAL = 'update.product_decimal';

    /**
     * The SQL statement to create a new product integer value.
     *
     * @var string
     */
    const CREATE_PRODUCT_INT = 'create.product.int';

    /**
     * The SQL statement to update an existing product integer value.
     *
     * @var string
     */
    const UPDATE_PRODUCT_INT = 'update.product_int';

    /**
     * The SQL statement to create a new product varchar value.
     *
     * @var string
     */
    const CREATE_PRODUCT_VARCHAR = 'create.product_varchar';

    /**
     * The SQL statement to update an existing product varchar value.
     *
     * @var string
     */
    const UPDATE_PRODUCT_VARCHAR = 'update.product_varchar';

    /**
     * The SQL statement to create a new product text value.
     *
     * @var string
     */
    const CREATE_PRODUCT_TEXT = 'create.product_text';

    /**
     * The SQL statement to update an existing product text value.
     *
     * @var string
     */
    const UPDATE_PRODUCT_TEXT = 'update.product_text';

    /**
     * The SQL statement to create a product's stock status.
     *
     * @var string
     */
    const CREATE_STOCK_STATUS = 'create.stock_status';

    /**
     * The SQL statement to update an existing stock status.
     *
     * @var string
     */
    const UPDATE_STOCK_STATUS = 'update.stock_status';

    /**
     * The SQL statement to create a product's stock status.
     *
     * @var string
     */
    const CREATE_STOCK_ITEM = 'create.stock_item';

    /**
     * The SQL statement to create a product's stock status.
     *
     * @var string
     */
    const UPDATE_STOCK_ITEM = 'update.stock_item';

    /**
     * The SQL statement to create new URL rewrites.
     *
     * @var string
     */
    const CREATE_URL_REWRITE = 'create.url_rewrite';

    /**
     * The SQL statement to update an existing URL rewrite.
     *
     * @var string
     */
    const UPDATE_URL_REWRITE = 'update.url_rewrite';

    /**
     * The SQL statement to create new URL rewrite product category relations.
     *
     * @var string
     */
    const CREATE_URL_REWRITE_PRODUCT_CATEGORY = 'create.url_rewrite_product_category';

    /**
     * The SQL statement to update an existing URL rewrite product category relation.
     *
     * @var string
     */
    const UPDATE_URL_REWRITE_PRODUCT_CATEGORY = 'update.url_rewrite_product_category';

    /**
     * The SQL statement to remove a existing URL rewrite product category relation.
     *
     * @var string
     */
    const DELETE_URL_REWRITE_PRODUCT_CATEGORY = 'delete.url_rewrite_product_category';

    /**
     * The SQL statement to remove a existing product.
     *
     * @var string
     */
    const DELETE_PRODUCT = 'delete.product';

    /**
     * The SQL statement to remove all existing stock status related with the SKU passed as parameter.
     *
     * @var string
     */
    const DELETE_STOCK_STATUS_BY_SKU = 'delete.stock_status.by.sku';

    /**
     * The SQL statement to remove all existing stock item related with the SKU passed as parameter.
     *
     * @var string
     */
    const DELETE_STOCK_ITEM_BY_SKU = 'delete.stock_item.by.sku';

    /**
     * The SQL statement to remove all product website relations for the product with the SKU passed as parameter.
     *
     * @var string
     */
    const DELETE_PRODUCT_WEBSITE_BY_SKU = 'delete.product_website.by.sku';

    /**
     * The SQL statement to remove all product category relations for the product with the SKU passed as parameter.
     *
     * @var string
     */
    const DELETE_CATEGORY_PRODUCT_BY_SKU = 'delete.category_product.by.sku';

    /**
     * The SQL statement to load the URL rewrite product category relation for the passed product/category ID.
     *
     * @var string
     */
    const URL_REWRITE_PRODUCT_CATEGORY_BY_PRODUCT_ID_AND_CATEGORY_ID = 'ur_rewrite_product_category.by.product_id.and.category_id';

    /**
     * The SQL statements.
     *
     * @var array
     */
    private $statements = array(
        SqlStatements::PRODUCT =>
            'SELECT * FROM catalog_product_entity WHERE sku = :sku',
        SqlStatements::PRODUCT_WEBSITE =>
            'SELECT * FROM catalog_product_website WHERE product_id = :product_id AND website_id = :website_id',
        SqlStatements::PRODUCT_DATETIME =>
            'SELECT *
               FROM catalog_product_entity_datetime
              WHERE entity_id = :entity_id
                AND attribute_id = :attribute_id
                AND store_id = :store_id',
        SqlStatements::PRODUCT_DECIMAL =>
            'SELECT *
               FROM catalog_product_entity_decimal
              WHERE entity_id = :entity_id
                AND attribute_id = :attribute_id
                AND store_id = :store_id',
        SqlStatements::PRODUCT_INT =>
            'SELECT *
               FROM catalog_product_entity_int
              WHERE entity_id = :entity_id
                AND attribute_id = :attribute_id
                AND store_id = :store_id',
        SqlStatements::PRODUCT_TEXT =>
            'SELECT *
               FROM catalog_product_entity_text
              WHERE entity_id = :entity_id
                AND attribute_id = :attribute_id
                AND store_id = :store_id',
        SqlStatements::PRODUCT_VARCHAR =>
            'SELECT *
               FROM catalog_product_entity_varchar
              WHERE entity_id = :entity_id
                AND attribute_id = :attribute_id
                AND store_id = :store_id',
        SqlStatements::PRODUCT_VARCHAR_BY_ATTRIBUTE_CODE_AND_ENTITY_TYPE_ID_AND_STORE_ID_AND_VALUE =>
            'SELECT t1.*
               FROM catalog_product_entity_varchar t1,
                    eav_attribute t2
              WHERE t2.attribute_code = :attribute_code
                AND t2.entity_type_id = :entity_type_id
                AND t1.attribute_id = t2.attribute_id
                AND t1.store_id = :store_id
                AND t1.value = :value',
        SqlStatements::CATEGORY_PRODUCT =>
            'SELECT * FROM catalog_category_product WHERE category_id = :category_id AND product_id = :product_id',
        SqlStatements::STOCK_STATUS =>
            'SELECT * FROM cataloginventory_stock_status WHERE product_id = :product_id AND website_id = :website_id AND stock_id = :stock_id',
        SqlStatements::STOCK_ITEM =>
            'SELECT * FROM cataloginventory_stock_item WHERE product_id = :product_id AND website_id = :website_id AND stock_id = :stock_id',
        SqlStatements::CREATE_PRODUCT =>
            'INSERT
               INTO catalog_product_entity
                    (sku,
                     created_at,
                     updated_at,
                     has_options,
                     required_options,
                     type_id,
                     attribute_set_id)
             VALUES (:sku,
                     :created_at,
                     :updated_at,
                     :has_options,
                     :required_options,
                     :type_id,
                     :attribute_set_id)',
        SqlStatements::UPDATE_PRODUCT =>
            'UPDATE catalog_product_entity
                SET sku = :sku,
                   created_at = :created_at,
                    updated_at = :updated_at,
                    has_options = :has_options,
                    required_options = :required_options,
                    type_id = :type_id,
                    attribute_set_id = :attribute_set_id
              WHERE entity_id = :entity_id',
        SqlStatements::CREATE_PRODUCT_WEBSITE =>
            'INSERT
               INTO catalog_product_website
                    (product_id,
                     website_id)
             VALUES (:product_id,
                     :website_id)',
        SqlStatements::CREATE_CATEGORY_PRODUCT =>
            'INSERT
               INTO catalog_category_product
                    (category_id,
                     product_id,
                     position)
             VALUES (:category_id,
                     :product_id,
                     :position)',
        SqlStatements::UPDATE_CATEGORY_PRODUCT =>
            'UPDATE catalog_category_product
                SET category_id = :category_id,
                    product_id = :product_id,
                    position = :position
             WHERE  entity_id = :entity_id',
        SqlStatements::CREATE_PRODUCT_DATETIME =>
            'INSERT
               INTO catalog_product_entity_datetime
                    (entity_id,
                     attribute_id,
                     store_id,
                     value)
            VALUES (:entity_id,
                    :attribute_id,
                    :store_id,
                    :value)',
        SqlStatements::UPDATE_PRODUCT_DATETIME =>
            'UPDATE catalog_product_entity_datetime
                SET entity_id = :entity_id,
                    attribute_id = :attribute_id,
                    store_id = :store_id,
                    value = :value
              WHERE value_id = :value_id',
        SqlStatements::CREATE_PRODUCT_DECIMAL =>
            'INSERT
               INTO catalog_product_entity_decimal
                    (entity_id,
                     attribute_id,
                     store_id,
                     value)
            VALUES (:entity_id,
                    :attribute_id,
                    :store_id,
                    :value)',
        SqlStatements::UPDATE_PRODUCT_DECIMAL =>
            'UPDATE catalog_product_entity_decimal
                SET entity_id = :entity_id,
                    attribute_id = :attribute_id,
                    store_id = :store_id,
                    value = :value
              WHERE value_id = :value_id',
        SqlStatements::CREATE_PRODUCT_INT =>
            'INSERT
               INTO catalog_product_entity_int
                    (entity_id,
                     attribute_id,
                     store_id,
                     value)
             VALUES (:entity_id,
                     :attribute_id,
                     :store_id,
                     :value)',
        SqlStatements::UPDATE_PRODUCT_INT =>
            'UPDATE catalog_product_entity_int
                SET entity_id = :entity_id,
                    attribute_id = :attribute_id,
                    store_id = :store_id,
                    value = :value
              WHERE value_id = :value_id',
        SqlStatements::CREATE_PRODUCT_VARCHAR =>
            'INSERT
               INTO catalog_product_entity_varchar
                    (entity_id,
                     attribute_id,
                     store_id,
                     value)
             VALUES (:entity_id,
                     :attribute_id,
                     :store_id,
                     :value)',
        SqlStatements::UPDATE_PRODUCT_VARCHAR =>
            'UPDATE catalog_product_entity_varchar
                SET entity_id = :entity_id,
                    attribute_id = :attribute_id,
                    store_id = :store_id,
                    value = :value
              WHERE value_id = :value_id',
        SqlStatements::CREATE_PRODUCT_TEXT =>
            'INSERT
               INTO catalog_product_entity_text
                    (entity_id,
                     attribute_id,
                     store_id,
                     value)
             VALUES (:entity_id,
                     :attribute_id,
                     :store_id,
                     :value)',
        SqlStatements::UPDATE_PRODUCT_TEXT =>
            'UPDATE catalog_product_entity_text
                SET entity_id = :entity_id,
                    attribute_id = :attribute_id,
                    store_id = :store_id,
                    value = :value
              WHERE value_id = :value_id',
        SqlStatements::CREATE_STOCK_STATUS =>
            'INSERT
               INTO cataloginventory_stock_status
                    (product_id,
                     website_id,
                     stock_id,
                     qty,
                     stock_status)
             VALUES (:product_id,
                     :website_id,
                     :stock_id,
                     :qty,
                     :stock_status)',
        SqlStatements::UPDATE_STOCK_STATUS =>
            'UPDATE cataloginventory_stock_status
                SET qty = :qty,
                    stock_status = :stock_status
              WHERE product_id = :product_id
                AND website_id = :website_id
                AND stock_id = :stock_id',
        SqlStatements::CREATE_STOCK_ITEM =>
            'INSERT
               INTO cataloginventory_stock_item
                    (product_id,
                     stock_id,
                     website_id,
                     qty,
                     min_qty,
                     use_config_min_qty,
                     is_qty_decimal,
                     backorders,
                     use_config_backorders,
                     min_sale_qty,
                     use_config_min_sale_qty,
                     max_sale_qty,
                     use_config_max_sale_qty,
                     is_in_stock,
                     notify_stock_qty,
                     use_config_notify_stock_qty,
                     manage_stock,
                     use_config_manage_stock,
                     use_config_qty_increments,
                     qty_increments,
                     use_config_enable_qty_inc,
                     enable_qty_increments,
                     is_decimal_divided)
            VALUES (:product_id,
                    :stock_id,
                    :website_id,
                    :qty,
                    :min_qty,
                    :use_config_min_qty,
                    :is_qty_decimal,
                    :backorders,
                    :use_config_backorders,
                    :min_sale_qty,
                    :use_config_min_sale_qty,
                    :max_sale_qty,
                    :use_config_max_sale_qty,
                    :is_in_stock,
                    :notify_stock_qty,
                    :use_config_notify_stock_qty,
                    :manage_stock,
                    :use_config_manage_stock,
                    :use_config_qty_increments,
                    :qty_increments,
                    :use_config_enable_qty_inc,
                    :enable_qty_increments,
                    :is_decimal_divided)',
        SqlStatements::UPDATE_STOCK_ITEM =>
            'UPDATE cataloginventory_stock_item
                SET product_id = :product_id,
                   stock_id = :stock_id,
                   website_id = :website_id,
                   qty = :qty,
                   min_qty = :min_qty,
                   use_config_min_qty = :use_config_min_qty,
                   is_qty_decimal = :is_qty_decimal,
                   backorders = :backorders,
                   use_config_backorders = :use_config_backorders,
                   min_sale_qty = :min_sale_qty,
                   use_config_min_sale_qty = :use_config_min_sale_qty,
                   max_sale_qty = :max_sale_qty,
                   use_config_max_sale_qty = :use_config_max_sale_qty,
                   is_in_stock = :is_in_stock,
                   low_stock_date = :low_stock_date,
                   notify_stock_qty = :notify_stock_qty,
                   use_config_notify_stock_qty = :use_config_notify_stock_qty,
                   manage_stock = :manage_stock,
                   use_config_manage_stock = :use_config_manage_stock,
                   stock_status_changed_auto = :stock_status_changed_auto,
                   use_config_qty_increments = :use_config_qty_increments,
                   qty_increments = :qty_increments,
                   use_config_enable_qty_inc = :use_config_enable_qty_inc,
                   enable_qty_increments = :enable_qty_increments,
                   is_decimal_divided = :is_decimal_divided
             WHERE item_id = :item_id',
        SqlStatements::CREATE_URL_REWRITE =>
            'INSERT
               INTO url_rewrite
                    (entity_type,
                     entity_id,
                     request_path,
                     target_path,
                     redirect_type,
                     store_id,
                     description,
                     is_autogenerated,
                     metadata)
            VALUES (:entity_type,
                    :entity_id,
                    :request_path,
                    :target_path,
                    :redirect_type,
                    :store_id,
                    :description,
                    :is_autogenerated,
                    :metadata)',
        SqlStatements::UPDATE_URL_REWRITE =>
            'UPDATE url_rewrite
                SET entity_type = :entity_type,
                    entity_id = :entity_id,
                    request_path = :request_path,
                    target_path = :target_path,
                    redirect_type = :redirect_type,
                    store_id = :store_id,
                    description = :description,
                    is_autogenerated = :is_autogenerated,
                    metadata = :metadata
              WHERE url_rewrite_id = :url_rewrite_id',
        SqlStatements::CREATE_URL_REWRITE_PRODUCT_CATEGORY =>
            'INSERT
               INTO catalog_url_rewrite_product_category
                    (url_rewrite_id,
                     category_id,
                     product_id)
             VALUES (:url_rewrite_id,
                     :category_id,
                     :product_id)',
        SqlStatements::UPDATE_URL_REWRITE_PRODUCT_CATEGORY =>
            'UPDATE catalog_url_rewrite_product_category
                SET url_rewrite_id = :url_rewrite_id
              WHERE category_id = :category_id
                AND product_id = :product_id',
        SqlStatements::DELETE_URL_REWRITE_PRODUCT_CATEGORY =>
            'DELETE
               FROM catalog_url_rewrite_product_category
              WHERE url_rewrite_id = :url_rewrite_id',
        SqlStatements::DELETE_PRODUCT =>
            'DELETE
               FROM catalog_product_entity
              WHERE sku = :sku',
        SqlStatements::DELETE_STOCK_STATUS_BY_SKU =>
            'DELETE cataloginventory_stock_status
               FROM cataloginventory_stock_status
         INNER JOIN catalog_product_entity
              WHERE catalog_product_entity.sku = :sku
                AND cataloginventory_stock_status.product_id = catalog_product_entity.entity_id',
        SqlStatements::DELETE_STOCK_ITEM_BY_SKU =>
            'DELETE cataloginventory_stock_item
               FROM cataloginventory_stock_item
         INNER JOIN catalog_product_entity
              WHERE catalog_product_entity.sku = :sku
                AND cataloginventory_stock_item.product_id = catalog_product_entity.entity_id',
        SqlStatements::DELETE_PRODUCT_WEBSITE_BY_SKU =>
            'DELETE catalog_product_website
               FROM catalog_product_website
         INNER JOIN catalog_product_entity
              WHERE catalog_product_entity.sku = :sku
                AND catalog_product_website.product_id = catalog_product_entity.entity_id',
        SqlStatements::DELETE_CATEGORY_PRODUCT_BY_SKU =>
            'DELETE catalog_category_product
               FROM catalog_category_product
         INNER JOIN catalog_product_entity
              WHERE catalog_product_entity.sku = :sku
                AND catalog_category_product.product_id = catalog_product_entity.entity_id',
        SqlStatements::URL_REWRITE_PRODUCT_CATEGORY_BY_PRODUCT_ID_AND_CATEGORY_ID =>
            'SELECT *
               FROM catalog_url_rewrite_product_category
              WHERE product_id = :product_id
                AND category_id = :category_id'
    );

    /**
     * Initialize the the SQL statements.
     */
    public function __construct()
    {

        // call the parent constructor
        parent::__construct();

        // merge the class statements
        foreach ($this->statements as $key => $statement) {
            $this->preparedStatements[$key] = $statement;
        }
    }
}
