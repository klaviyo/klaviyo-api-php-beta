# Klaviyo PHP SDK (Beta API)

- SDK version: 1.0.1.20220907

## Signup Form for Beta API Access

This SDK is for our new API, currently in closed Beta.

To sign-up for the Beta and gain access to these gated endpoints, please fill out [this form](https://manage.kmail-lists.com/subscriptions/subscribe?a=9BX3wh&g=VSyTC6).

## Helpful Resources

- [API Reference](https://developers.klaviyo.com/en/v2022-09-07.pre/reference)
- [API Guides](https://developers.klaviyo.com/en/v2022-09-07.pre/docs)
- [Postman Workspace](https://www.postman.com/klaviyo/workspace/klaviyo-developers)

## Design & Approach

This SDK is a thin wrapper around our Beta API. See our Beta API Reference for full documentation on behavior.

This SDK mirrors the organization and naming convention of the above language-agnostic resources, with a few namespace changes to conform to PHP idioms (details in Appendix).

## Organization

This SDK is organized into the following resources:



- Catalogs



- Client



- Events



- Flows



- Lists



- Metrics



- Profiles



- Segments



- Templates



# Installation

You can install this package using either [our Packagist package](https://packagist.org/packages/klaviyo/sdk-beta), or this source code.

## Option 1: Packagist

You can install this library using Packagist.

If you have composer installed, you can run: `composer require klaviyo/sdk-beta`

## Option 2: Source code

You can also install this library directly from source code, without using the Packagist package, as follows:

1. cloning this repo
2. running `composer update`

# Usage Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use KlaviyoBeta\Client;

$client = new Client(
    'YOUR_API_KEY', 
    $num_retries = 3, 
    $wait_seconds = 3);

$response = $client->Metrics->getMetrics();
```

# Retry behavior

* The SDK retries on resolvable errors, namely: rate limits (common) and server errors on Klaviyo's end (rare).
* The keyword arguments in the example above define retry behavior
  * `wait_seconds` denotes how long to wait per retry, in *seconds*
  * If you wish to disable retries, set `$num_retries = 0`
  * the example is populated with the default values
* non-resolvable errors and resolvable errors which have timed out throw an `ApiException`, detailed below.

# Error Handling

This SDK throws an `ApiException` error when the server returns a non resolvable response, or a resolvable non-`2XX` response times out. 

If you'd like to extend error handling beyond what the SDK supports natively, you can use the following methods to retrieve the corresponding attributes from the `ApiException` object:

* `getCode() : int`
* `getMessage() : str`
* `getReponseBody() : bytes`
* `getResponseHeaders() : string[]`

For example:

```php
try { 
  $client.Metrics.getMetrics();
} catch (Exception $e) {
  if ($e->getCode() == SOME_INTEGER) {
    doSomething();
  }
}
```

# Comprehensive list of Operations & Parameters

_**NOTE:**_
- The main difference between this SDK and the language-agnostic API Docs that the below endpoints link to is that this SDK automatically adds the `revision` header corresponding to the SDK version.
- Organization: Resource groups and functions are listed in alphabetical order, first by Resource name, then by **OpenAPI Summary**. Operation summaries are those listed in the right side bar of the [API Reference](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_items). These summaries link directly to the corresponding section of the API reference.
- For example values / data types, as well as whether parameters are required/optional, please reference the corresponding API Reference link.
- Some keyword args are required for the API call to succeed, the API docs above are the source of truth regarding which keyword args are required.
- JSON payloads should be passed in as associative arrays
- A strange quirk of PHP is that default/optional arguments must be passed in in order, and MUST be included and set as `null`, at least up to the last default value you wish to use. 
  - For example, if a given function has the following optional parameters `someFunction($a=1, $b=2, $c=3)`, and you wish to only set `$b`, you MUST pass in `someFunction($a=null, $b=$YOUR_VALUE)`
  - Otherwise, if you pass in something such as `someFunction($b=$YOUR_VALUE)`, PHP will actually assign the `$YOUR_VALUE` to parameter `$a`, which is wrong.
- `$api_key` is optional, as it is set at client level. However, you can override the client key wherever by passing in `$api_key` as the LAST optional param. Reminder: don't do this client-side.
- Paging: Where applicable, `$page_cursor` can be passed in either as a parsed string, or as the entire `self.link` response returned by paged API endpoints.




## Catalogs

#### [Create Catalog Category](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_catalog_category)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->createCatalogCategory($body);
```




#### [Create Catalog Category Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_catalog_category_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

client->Catalogs->createCatalogCategoryRelationships($id, $related_resource, $body);
```




#### [Create Catalog Item](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_catalog_item)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->createCatalogItem($body);
```




#### [Create Catalog Item Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_catalog_item_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

client->Catalogs->createCatalogItemRelationships($id, $related_resource, $body);
```




#### [Create Catalog Variant](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_catalog_variant)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->createCatalogVariant($body);
```




#### [Delete Catalog Category](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/delete_catalog_category)

```python
## Positional Arguments

# $id | string

client->Catalogs->deleteCatalogCategory($id);
```




#### [Delete Catalog Category Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/delete_catalog_category_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

client->Catalogs->deleteCatalogCategoryRelationships($id, $related_resource, $body);
```




#### [Delete Catalog Item](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/delete_catalog_item)

```python
## Positional Arguments

# $id | string

client->Catalogs->deleteCatalogItem($id);
```




#### [Delete Catalog Item Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/delete_catalog_item_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

client->Catalogs->deleteCatalogItemRelationships($id, $related_resource, $body);
```




#### [Delete Catalog Variant](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/delete_catalog_variant)

```python
## Positional Arguments

# $id | string

client->Catalogs->deleteCatalogVariant($id);
```




#### [Get Catalog Categories](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_categories)

```python

## Keyword Arguments

# $fields_catalog_category | string[]
# $filter | string
# $page_cursor | string
# $sort | string

client->Catalogs->getCatalogCategories($fields_catalog_category=$fields_catalog_category, $filter=$filter, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Get Catalog Category](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_category)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_catalog_category | string[]

client->Catalogs->getCatalogCategory($id, $fields_catalog_category=$fields_catalog_category);
```




#### [Get Catalog Category Items](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_category_items)

```python
## Positional Arguments

# $category_id | string

## Keyword Arguments

# $fields_catalog_item | string[]
# $fields_catalog_variant | string[]
# $filter | string
# $include | string[]
# $page_cursor | string
# $sort | string

client->Catalogs->getCatalogCategoryItems($category_id, $fields_catalog_item=$fields_catalog_item, $fields_catalog_variant=$fields_catalog_variant, $filter=$filter, $include=$include, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Get Catalog Category Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_category_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

## Keyword Arguments

# $page_cursor | string

client->Catalogs->getCatalogCategoryRelationships($id, $related_resource, $page_cursor=$page_cursor);
```




#### [Get Catalog Item](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_item)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_catalog_item | string[]
# $fields_catalog_variant | string[]
# $include | string[]

client->Catalogs->getCatalogItem($id, $fields_catalog_item=$fields_catalog_item, $fields_catalog_variant=$fields_catalog_variant, $include=$include);
```




#### [Get Catalog Item Categories](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_item_categories)

```python
## Positional Arguments

# $item_id | string

## Keyword Arguments

# $fields_catalog_category | string[]
# $filter | string
# $page_cursor | string
# $sort | string

client->Catalogs->getCatalogItemCategories($item_id, $fields_catalog_category=$fields_catalog_category, $filter=$filter, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Get Catalog Item Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_item_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

## Keyword Arguments

# $page_cursor | string

client->Catalogs->getCatalogItemRelationships($id, $related_resource, $page_cursor=$page_cursor);
```




#### [Get Catalog Item Variants](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_item_variants)

```python
## Positional Arguments

# $item_id | string

## Keyword Arguments

# $fields_catalog_variant | string[]
# $filter | string
# $page_cursor | string
# $sort | string

client->Catalogs->getCatalogItemVariants($item_id, $fields_catalog_variant=$fields_catalog_variant, $filter=$filter, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Get Catalog Items](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_items)

```python

## Keyword Arguments

# $fields_catalog_item | string[]
# $fields_catalog_variant | string[]
# $filter | string
# $include | string[]
# $page_cursor | string
# $sort | string

client->Catalogs->getCatalogItems($fields_catalog_item=$fields_catalog_item, $fields_catalog_variant=$fields_catalog_variant, $filter=$filter, $include=$include, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Get Catalog Variant](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_variant)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_catalog_variant | string[]

client->Catalogs->getCatalogVariant($id, $fields_catalog_variant=$fields_catalog_variant);
```




#### [Get Catalog Variants](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_catalog_variants)

```python

## Keyword Arguments

# $fields_catalog_variant | string[]
# $filter | string
# $page_cursor | string
# $sort | string

client->Catalogs->getCatalogVariants($fields_catalog_variant=$fields_catalog_variant, $filter=$filter, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Get Create Categories Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_create_categories_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_category_bulk_create_job | string[]
# $fields_catalog_category | string[]
# $include | string[]

client->Catalogs->getCreateCategoriesJob($job_id, $fields_catalog_category_bulk_create_job=$fields_catalog_category_bulk_create_job, $fields_catalog_category=$fields_catalog_category, $include=$include);
```




#### [Get Create Categories Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_create_categories_jobs)

```python

## Keyword Arguments

# $fields_catalog_category_bulk_create_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getCreateCategoriesJobs($fields_catalog_category_bulk_create_job=$fields_catalog_category_bulk_create_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Create Items Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_create_items_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_item_bulk_create_job | string[]
# $fields_catalog_item | string[]
# $include | string[]

client->Catalogs->getCreateItemsJob($job_id, $fields_catalog_item_bulk_create_job=$fields_catalog_item_bulk_create_job, $fields_catalog_item=$fields_catalog_item, $include=$include);
```




#### [Get Create Items Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_create_items_jobs)

```python

## Keyword Arguments

# $fields_catalog_item_bulk_create_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getCreateItemsJobs($fields_catalog_item_bulk_create_job=$fields_catalog_item_bulk_create_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Create Variants Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_create_variants_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_variant_bulk_create_job | string[]
# $fields_catalog_variant | string[]
# $include | string[]

client->Catalogs->getCreateVariantsJob($job_id, $fields_catalog_variant_bulk_create_job=$fields_catalog_variant_bulk_create_job, $fields_catalog_variant=$fields_catalog_variant, $include=$include);
```




#### [Get Create Variants Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_create_variants_jobs)

```python

## Keyword Arguments

# $fields_catalog_variant_bulk_create_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getCreateVariantsJobs($fields_catalog_variant_bulk_create_job=$fields_catalog_variant_bulk_create_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Delete Categories Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_delete_categories_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_category_bulk_delete_job | string[]

client->Catalogs->getDeleteCategoriesJob($job_id, $fields_catalog_category_bulk_delete_job=$fields_catalog_category_bulk_delete_job);
```




#### [Get Delete Categories Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_delete_categories_jobs)

```python

## Keyword Arguments

# $fields_catalog_category_bulk_delete_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getDeleteCategoriesJobs($fields_catalog_category_bulk_delete_job=$fields_catalog_category_bulk_delete_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Delete Items Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_delete_items_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_item_bulk_delete_job | string[]

client->Catalogs->getDeleteItemsJob($job_id, $fields_catalog_item_bulk_delete_job=$fields_catalog_item_bulk_delete_job);
```




#### [Get Delete Items Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_delete_items_jobs)

```python

## Keyword Arguments

# $fields_catalog_item_bulk_delete_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getDeleteItemsJobs($fields_catalog_item_bulk_delete_job=$fields_catalog_item_bulk_delete_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Delete Variants Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_delete_variants_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_variant_bulk_delete_job | string[]

client->Catalogs->getDeleteVariantsJob($job_id, $fields_catalog_variant_bulk_delete_job=$fields_catalog_variant_bulk_delete_job);
```




#### [Get Delete Variants Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_delete_variants_jobs)

```python

## Keyword Arguments

# $fields_catalog_variant_bulk_delete_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getDeleteVariantsJobs($fields_catalog_variant_bulk_delete_job=$fields_catalog_variant_bulk_delete_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Update Categories Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_update_categories_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_category_bulk_update_job | string[]
# $fields_catalog_category | string[]
# $include | string[]

client->Catalogs->getUpdateCategoriesJob($job_id, $fields_catalog_category_bulk_update_job=$fields_catalog_category_bulk_update_job, $fields_catalog_category=$fields_catalog_category, $include=$include);
```




#### [Get Update Categories Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_update_categories_jobs)

```python

## Keyword Arguments

# $fields_catalog_category_bulk_update_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getUpdateCategoriesJobs($fields_catalog_category_bulk_update_job=$fields_catalog_category_bulk_update_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Update Items Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_update_items_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_item_bulk_update_job | string[]
# $fields_catalog_item | string[]
# $include | string[]

client->Catalogs->getUpdateItemsJob($job_id, $fields_catalog_item_bulk_update_job=$fields_catalog_item_bulk_update_job, $fields_catalog_item=$fields_catalog_item, $include=$include);
```




#### [Get Update Items Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_update_items_jobs)

```python

## Keyword Arguments

# $fields_catalog_item_bulk_update_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getUpdateItemsJobs($fields_catalog_item_bulk_update_job=$fields_catalog_item_bulk_update_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Update Variants Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_update_variants_job)

```python
## Positional Arguments

# $job_id | string

## Keyword Arguments

# $fields_catalog_variant_bulk_update_job | string[]
# $fields_catalog_variant | string[]
# $include | string[]

client->Catalogs->getUpdateVariantsJob($job_id, $fields_catalog_variant_bulk_update_job=$fields_catalog_variant_bulk_update_job, $fields_catalog_variant=$fields_catalog_variant, $include=$include);
```




#### [Get Update Variants Jobs](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_update_variants_jobs)

```python

## Keyword Arguments

# $fields_catalog_variant_bulk_update_job | string[]
# $filter | string
# $page_cursor | string

client->Catalogs->getUpdateVariantsJobs($fields_catalog_variant_bulk_update_job=$fields_catalog_variant_bulk_update_job, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Spawn Create Categories Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_create_categories_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnCreateCategoriesJob($body);
```




#### [Spawn Create Items Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_create_items_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnCreateItemsJob($body);
```




#### [Spawn Create Variants Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_create_variants_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnCreateVariantsJob($body);
```




#### [Spawn Delete Categories Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_delete_categories_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnDeleteCategoriesJob($body);
```




#### [Spawn Delete Items Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_delete_items_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnDeleteItemsJob($body);
```




#### [Spawn Delete Variants Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_delete_variants_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnDeleteVariantsJob($body);
```




#### [Spawn Update Categories Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_update_categories_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnUpdateCategoriesJob($body);
```




#### [Spawn Update Items Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_update_items_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnUpdateItemsJob($body);
```




#### [Spawn Update Variants Job](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/spawn_update_variants_job)

```python
## Positional Arguments

# $body | associative array

client->Catalogs->spawnUpdateVariantsJob($body);
```




#### [Update Catalog Category](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_catalog_category)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Catalogs->updateCatalogCategory($id, $body);
```




#### [Update Catalog Category Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_catalog_category_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

client->Catalogs->updateCatalogCategoryRelationships($id, $related_resource, $body);
```




#### [Update Catalog Item](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_catalog_item)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Catalogs->updateCatalogItem($id, $body);
```




#### [Update Catalog Item Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_catalog_item_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

client->Catalogs->updateCatalogItemRelationships($id, $related_resource, $body);
```




#### [Update Catalog Variant](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_catalog_variant)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Catalogs->updateCatalogVariant($id, $body);
```






## Client

#### [Create Client Event](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_client_event)

```python
## Positional Arguments

# $company_id | string
# $body | associative array

client->Client->createClientEvent($company_id, $body);
```




#### [Create Client Profile](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_client_profile)

```python
## Positional Arguments

# $company_id | string
# $body | associative array

client->Client->createClientProfile($company_id, $body);
```




#### [Create Client Subscription](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_client_subscription)

```python
## Positional Arguments

# $company_id | string
# $body | associative array

client->Client->createClientSubscription($company_id, $body);
```






## Events

#### [Create Event](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_event)

```python
## Positional Arguments

# $body | associative array

client->Events->createEvent($body);
```




#### [Get Event](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_event)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_event | string[]
# $fields_metric | string[]
# $fields_profile | string[]
# $include | string[]

client->Events->getEvent($id, $fields_event=$fields_event, $fields_metric=$fields_metric, $fields_profile=$fields_profile, $include=$include);
```




#### [Get Event Metrics](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_event_metrics)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_metric | string[]

client->Events->getEventMetrics($id, $fields_metric=$fields_metric);
```




#### [Get Event Profiles](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_event_profiles)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_profile | string[]

client->Events->getEventProfiles($id, $fields_profile=$fields_profile);
```




#### [Get Event Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_event_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

client->Events->getEventRelationships($id, $related_resource);
```




#### [Get Events](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_events)

```python

## Keyword Arguments

# $fields_event | string[]
# $fields_metric | string[]
# $fields_profile | string[]
# $filter | string
# $include | string[]
# $page_cursor | string
# $sort | string

client->Events->getEvents($fields_event=$fields_event, $fields_metric=$fields_metric, $fields_profile=$fields_profile, $filter=$filter, $include=$include, $page_cursor=$page_cursor, $sort=$sort);
```






## Flows

#### [Get Flow](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_flow_action | string[]
# $fields_flow | string[]
# $include | string[]

client->Flows->getFlow($id, $fields_flow_action=$fields_flow_action, $fields_flow=$fields_flow, $include=$include);
```




#### [Get Flow Action](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_action)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_flow_action | string[]
# $fields_flow_message | string[]
# $fields_flow | string[]
# $include | string[]

client->Flows->getFlowAction($id, $fields_flow_action=$fields_flow_action, $fields_flow_message=$fields_flow_message, $fields_flow=$fields_flow, $include=$include);
```




#### [Get Flow Action Flow](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_action_flow)

```python
## Positional Arguments

# $action_id | string

## Keyword Arguments

# $fields_flow | string[]

client->Flows->getFlowActionFlow($action_id, $fields_flow=$fields_flow);
```




#### [Get Flow Action Messages](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_action_messages)

```python
## Positional Arguments

# $action_id | string

## Keyword Arguments

# $fields_flow_message | string[]
# $filter | string
# $sort | string

client->Flows->getFlowActionMessages($action_id, $fields_flow_message=$fields_flow_message, $filter=$filter, $sort=$sort);
```




#### [Get Flow Action Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_action_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

## Keyword Arguments

# $filter | string
# $sort | string

client->Flows->getFlowActionRelationships($id, $related_resource, $filter=$filter, $sort=$sort);
```




#### [Get Flow Flow Actions](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_flow_actions)

```python
## Positional Arguments

# $flow_id | string

## Keyword Arguments

# $fields_flow_action | string[]
# $filter | string
# $sort | string

client->Flows->getFlowFlowActions($flow_id, $fields_flow_action=$fields_flow_action, $filter=$filter, $sort=$sort);
```




#### [Get Flow Message](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_message)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_flow_action | string[]
# $fields_flow_message | string[]
# $include | string[]

client->Flows->getFlowMessage($id, $fields_flow_action=$fields_flow_action, $fields_flow_message=$fields_flow_message, $include=$include);
```




#### [Get Flow Message Action](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_message_action)

```python
## Positional Arguments

# $message_id | string

## Keyword Arguments

# $fields_flow_action | string[]

client->Flows->getFlowMessageAction($message_id, $fields_flow_action=$fields_flow_action);
```




#### [Get Flow Message Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_message_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

client->Flows->getFlowMessageRelationships($id, $related_resource);
```




#### [Get Flow Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flow_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

## Keyword Arguments

# $filter | string
# $sort | string

client->Flows->getFlowRelationships($id, $related_resource, $filter=$filter, $sort=$sort);
```




#### [Get Flows](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_flows)

```python

## Keyword Arguments

# $fields_flow_action | string[]
# $fields_flow | string[]
# $filter | string
# $include | string[]
# $sort | string

client->Flows->getFlows($fields_flow_action=$fields_flow_action, $fields_flow=$fields_flow, $filter=$filter, $include=$include, $sort=$sort);
```




#### [Update Flow](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_flow)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Flows->updateFlow($id, $body);
```






## Lists

#### [Create List](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_list)

```python
## Positional Arguments

# $body | associative array

client->Lists->createList($body);
```




#### [Add Profile to List](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_list_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

client->Lists->createListRelationships($id, $related_resource, $body);
```




#### [Delete List](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/delete_list)

```python
## Positional Arguments

# $id | string

client->Lists->deleteList($id);
```




#### [Remove Profile from List](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/delete_list_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

client->Lists->deleteListRelationships($id, $related_resource, $body);
```




#### [Get List](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_list)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_list | string[]

client->Lists->getList($id, $fields_list=$fields_list);
```




#### [Get List Profiles](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_list_profiles)

```python
## Positional Arguments

# $list_id | string

## Keyword Arguments

# $fields_profile | string[]
# $filter | string
# $page_cursor | string

client->Lists->getListProfiles($list_id, $fields_profile=$fields_profile, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get List Profile Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_list_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

## Keyword Arguments

# $page_cursor | string

client->Lists->getListRelationships($id, $related_resource, $page_cursor=$page_cursor);
```




#### [Get Lists](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_lists)

```python

## Keyword Arguments

# $fields_list | string[]
# $filter | string
# $page_cursor | string

client->Lists->getLists($fields_list=$fields_list, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Update List](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_list)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Lists->updateList($id, $body);
```






## Metrics

#### [Get Metric](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_metric)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_metric | string[]

client->Metrics->getMetric($id, $fields_metric=$fields_metric);
```




#### [Get Metric Aggregate](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_metric_aggregate)

```python
## Positional Arguments

# $body | associative array

client->Metrics->getMetricAggregate($body);
```




#### [Get Metrics](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_metrics)

```python

## Keyword Arguments

# $fields_metric | string[]
# $page_cursor | string

client->Metrics->getMetrics($fields_metric=$fields_metric, $page_cursor=$page_cursor);
```






## Profiles

#### [Create Profile](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_profile)

```python
## Positional Arguments

# $body | associative array

client->Profiles->createProfile($body);
```




#### [Get Profile](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_profile)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_list | string[]
# $fields_profile | string[]
# $fields_segment | string[]
# $include | string[]

client->Profiles->getProfile($id, $fields_list=$fields_list, $fields_profile=$fields_profile, $fields_segment=$fields_segment, $include=$include);
```




#### [Get Profile Lists](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_profile_lists)

```python
## Positional Arguments

# $profile_id | string

## Keyword Arguments

# $fields_list | string[]

client->Profiles->getProfileLists($profile_id, $fields_list=$fields_list);
```




#### [Get Profile Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_profile_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

client->Profiles->getProfileRelationships($id, $related_resource);
```




#### [Get Profile Segments](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_profile_segments)

```python
## Positional Arguments

# $profile_id | string

## Keyword Arguments

# $fields_segment | string[]

client->Profiles->getProfileSegments($profile_id, $fields_segment=$fields_segment);
```




#### [Get Profiles](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_profiles)

```python

## Keyword Arguments

# $fields_profile | string[]
# $filter | string
# $page_cursor | string
# $sort | string

client->Profiles->getProfiles($fields_profile=$fields_profile, $filter=$filter, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Subscribe Profiles](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/subscribe_profiles)

```python
## Positional Arguments

# $body | associative array

client->Profiles->subscribeProfiles($body);
```




#### [Suppress Profiles](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/suppress_profiles)

```python
## Positional Arguments

# $body | associative array

client->Profiles->suppressProfiles($body);
```




#### [Unsubscribe Profiles](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/unsubscribe_profiles)

```python
## Positional Arguments

# $body | associative array

client->Profiles->unsubscribeProfiles($body);
```




#### [Unsuppress Profiles](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/unsuppress_profiles)

```python
## Positional Arguments

# $body | associative array

client->Profiles->unsuppressProfiles($body);
```




#### [Update Profile](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_profile)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Profiles->updateProfile($id, $body);
```






## Segments

#### [Get Segment](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_segment)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_segment | string[]

client->Segments->getSegment($id, $fields_segment=$fields_segment);
```




#### [Get Segment Profiles](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_segment_profiles)

```python
## Positional Arguments

# $segment_id | string

## Keyword Arguments

# $filter | string
# $page_cursor | string

client->Segments->getSegmentProfiles($segment_id, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Get Segment Relationships](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_segment_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

## Keyword Arguments

# $page_cursor | string

client->Segments->getSegmentRelationships($id, $related_resource, $page_cursor=$page_cursor);
```




#### [Get Segments](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_segments)

```python

## Keyword Arguments

# $fields_segment | string[]
# $filter | string
# $page_cursor | string

client->Segments->getSegments($fields_segment=$fields_segment, $filter=$filter, $page_cursor=$page_cursor);
```




#### [Update Segment](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_segment)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Segments->updateSegment($id, $body);
```






## Templates

#### [Create Template](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_template)

```python
## Positional Arguments

# $body | associative array

client->Templates->createTemplate($body);
```




#### [Create Template Clone](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_template_clone)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Templates->createTemplateClone($id, $body);
```




#### [Create Template Render](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/create_template_render)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Templates->createTemplateRender($id, $body);
```




#### [Delete Template](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/delete_template)

```python
## Positional Arguments

# $id | string

client->Templates->deleteTemplate($id);
```




#### [Get Template](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_template)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_template | string[]

client->Templates->getTemplate($id, $fields_template=$fields_template);
```




#### [Get Templates](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/get_templates)

```python

## Keyword Arguments

# $fields_template | string[]
# $filter | string
# $page_cursor | string
# $sort | string

client->Templates->getTemplates($fields_template=$fields_template, $filter=$filter, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Update Template](https://developers.klaviyo.com/en/v2022-09-07.pre/reference/update_template)

```python
## Positional Arguments

# $id | string
# $body | associative array

client->Templates->updateTemplate($id, $body);
```




# Global Keyword args

NOTES: 
- These are arguments that you can apply to any endpoint call, and which are unique to the SDK.
- They come LAST, AFTER ALL the endpoint-specific keyword args listed above, in the same order they are listed below.
- They are subject to the same quirks as any other PHP keyword args, in that to be included, they need to be preceeded by all keyword args listed before them. This includes all endpoint-specific keyword args for a given endpoint, along with any preceeding global keyword args listed below, if applicable. This holds even if those other keyword args are not being used; in that case, set those to `null`, but again, they must be included.

- `$apiKey` :  use this to override the client-level `api_key`, which you define upon client instantiation.

# Appendix

## Namespace

In the interest of making the SDK conform to PHP idioms, we made the following namespace changes *relative* to the language agnostic resources up top (API Docs, Guides, etc).

- non-alphanumeric symbols (spaces, dashes, underscore, ampersand etc) stripped from resource names (tags) and function names (operation IDs)
- Resource names and function names use camelCase
- NOTE: this does not apply to parameter names

For example:
* `get_metrics` becomes `getMetrics`
* `item_id` *remains* unchanged

## Parameters & Arguments

The parameters follow the same naming conventions as the resource groups and operations.

We stick to the following convention for parameters/arguments

1. All parameters are passed as function args.
2. All optional params, as well as all Body and Form Data params (including required ones), are passed as keyword args.
3. All query and path params that are tagged as `required` in the docs are passed as positional args.
4. `$api_key` is optional, as it is set at client level. However, you can override the client key wherever by passing in `$api_key` as the LAST optional param. Reminder: don't do this client-side.
