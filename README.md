# PHP SDK for Klaviyo Beta API

- SDK version: 1.1.0
- API Revision: 2022-12-15.pre

## Helpful Resources

- [Beta API Reference](https://developers.klaviyo.com/en/v2022-12-15.pre/reference)
- [Latest API Guides](https://developers.klaviyo.com/en/docs)
- [Postman Workspace](https://www.postman.com/klaviyo/workspace/klaviyo-developers)

## Design & Approach

NOTE: This SDK only reflects the endpoints currently in Beta. Once endpoints are promoted from Beta to General Availability (GA), they will be removed from the next version of this SDK, and the version of this SDK corresponding to that Beta release will be deprecated.

This SDK is a thin wrapper around our current Beta API. See our API Reference for full documentation on behavior.

This SDK mirrors the organization and naming convention of the above language-agnostic resources, with a few namespace changes to conform to PHP idioms (details in Appendix).

## Organization

This SDK is organized into the following resources:



- Campaigns



- DataPrivacy



- Flows



- Lists



- Segments



- Tags



## Installation

You can install this package using [our Packagist package](https://packagist.org/packages/klaviyo/api-beta):

```bash
composer require klaviyo/api-beta
```

## Usage Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use KlaviyoAPIBeta\KlaviyoAPIBeta;

$klaviyo_beta = new KlaviyoAPIBeta(
    'YOUR_API_KEY', 
    $num_retries = 3, 
    $wait_seconds = 3);

$response = $klaviyo->Tags->getTags();
```

## Retry behavior

* The SDK retries on resolvable errors, namely: rate limits (common) and server errors on Klaviyo's end (rare).
* The keyword arguments in the example above define retry behavior
  * `wait_seconds` denotes how long to wait per retry, in *seconds*
  * If you wish to disable retries, set `$num_retries = 0`
  * the example is populated with the default values
* non-resolvable errors and resolvable errors which have timed out throw an `ApiException`, detailed below.

## Error Handling

This SDK throws an `ApiException` error when the server returns a non resolvable response, or a resolvable non-`2XX` response times out. 

If you'd like to extend error handling beyond what the SDK supports natively, you can use the following methods to retrieve the corresponding attributes from the `ApiException` object:

* `getCode() : int`
* `getMessage() : str`
* `getReponseBody() : bytes`
* `getResponseHeaders() : string[]`

For example:

```php
try { 
  $klaviyo_beta.Tags.getMetrics();
} catch (Exception $e) {
  if ($e->getCode() == SOME_INTEGER) {
    doSomething();
  }
}
```

## Important Notes

- The main difference between this SDK and the language-agnostic API Docs that the below endpoints link to is that this SDK automatically adds the `revision` header corresponding to the SDK version.
- Organization: Resource groups and functions are listed in alphabetical order, first by Resource name, then by **OpenAPI Summary**. Operation summaries are those listed in the right side bar of the [API Reference](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_events). These summaries link directly to the corresponding section of the API reference.
- For example values / data types, as well as whether parameters are required/optional, please reference the corresponding API Reference link.
- Some keyword args are required for the API call to succeed, the API docs above are the source of truth regarding which keyword args are required.
- JSON payloads should be passed in as associative arrays
- A strange quirk of PHP is that default/optional arguments must be passed in in order, and MUST be included and set as `null`, at least up to the last default value you wish to use. 
  - For example, if a given function has the following optional parameters `someFunction($a=1, $b=2, $c=3)`, and you wish to only set `$b`, you MUST pass in `someFunction($a=null, $b=$YOUR_VALUE)`
  - Otherwise, if you pass in something such as `someFunction($b=$YOUR_VALUE)`, PHP will actually assign the `$YOUR_VALUE` to parameter `$a`, which is wrong.
- `$api_key` is optional, as it is set at client-level. However, you can override the client key wherever by passing in `$api_key` as the LAST optional param. Reminder: **DO NOT** use private API keys client-side / onsite.
- Paging: Where applicable, `$page_cursor` can be passed in either as a parsed string, or as the entire `self.link` response returned by paged API endpoints.

# Comprehensive list of Operations & Parameters





## Campaigns

#### [Assign Campaign Message Template](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/assign_campaign_message_template)

```python
## Positional Arguments

# $body | associative array

$klaviyo_beta->Campaigns->assignCampaignMessageTemplate($body);
```




#### [Create Campaign](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/create_campaign)

```python
## Positional Arguments

# $body | associative array

$klaviyo_beta->Campaigns->createCampaign($body);
```




#### [Create Campaign Clone](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/create_campaign_clone)

```python
## Positional Arguments

# $body | associative array

$klaviyo_beta->Campaigns->createCampaignClone($body);
```




#### [Create Campaign Send Job](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/create_campaign_send_job)

```python
## Positional Arguments

# $body | associative array

$klaviyo_beta->Campaigns->createCampaignSendJob($body);
```




#### [Delete Campaign](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/delete_campaign)

```python
## Positional Arguments

# $id | string

$klaviyo_beta->Campaigns->deleteCampaign($id);
```




#### [Get Campaign](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_campaign)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_campaign | string[]
# $fields_tag | string[]
# $include | string[]

$klaviyo_beta->Campaigns->getCampaign($id, $fields_campaign=$fields_campaign, $fields_tag=$fields_tag, $include=$include);
```




#### [Get Campaign Message](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_campaign_message)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_campaign_message | string[]

$klaviyo_beta->Campaigns->getCampaignMessage($id, $fields_campaign_message=$fields_campaign_message);
```




#### [Get Campaign Relationships](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_campaign_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

$klaviyo_beta->Campaigns->getCampaignRelationships($id, $related_resource);
```




#### [Get Campaign Send Job](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_campaign_send_job)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_campaign_send_job | string[]

$klaviyo_beta->Campaigns->getCampaignSendJob($id, $fields_campaign_send_job=$fields_campaign_send_job);
```




#### [Get Campaign Tags](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_campaign_tags)

```python
## Positional Arguments

# $campaign_id | string

## Keyword Arguments

# $fields_tag | string[]

$klaviyo_beta->Campaigns->getCampaignTags($campaign_id, $fields_tag=$fields_tag);
```




#### [Get Campaigns](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_campaigns)

```python

## Keyword Arguments

# $fields_campaign | string[]
# $fields_tag | string[]
# $filter | string
# $include | string[]
# $sort | string

$klaviyo_beta->Campaigns->getCampaigns($fields_campaign=$fields_campaign, $fields_tag=$fields_tag, $filter=$filter, $include=$include, $sort=$sort);
```




#### [Update Campaign](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/update_campaign)

```python
## Positional Arguments

# $id | string
# $body | associative array

$klaviyo_beta->Campaigns->updateCampaign($id, $body);
```




#### [Update Campaign Message](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/update_campaign_message)

```python
## Positional Arguments

# $id | string
# $body | associative array

$klaviyo_beta->Campaigns->updateCampaignMessage($id, $body);
```




#### [Update Campaign Send Job](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/update_campaign_send_job)

```python
## Positional Arguments

# $id | string
# $body | associative array

$klaviyo_beta->Campaigns->updateCampaignSendJob($id, $body);
```






## DataPrivacy

#### [Request Profile Deletion](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/request_profile_deletion)

```python
## Positional Arguments

# $body | associative array

$klaviyo_beta->DataPrivacy->requestProfileDeletion($body);
```






## Flows

#### [Get Flow Tags](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_flow_tags)

```python
## Positional Arguments

# $flow_id | string

## Keyword Arguments

# $fields_tag | string[]

$klaviyo_beta->Flows->getFlowTags($flow_id, $fields_tag=$fields_tag);
```






## Lists

#### [Get List Tags](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_list_tags)

```python
## Positional Arguments

# $list_id | string

## Keyword Arguments

# $fields_tag | string[]

$klaviyo_beta->Lists->getListTags($list_id, $fields_tag=$fields_tag);
```






## Segments

#### [Get Segment Tags](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_segment_tags)

```python
## Positional Arguments

# $segment_id | string

## Keyword Arguments

# $fields_tag | string[]

$klaviyo_beta->Segments->getSegmentTags($segment_id, $fields_tag=$fields_tag);
```






## Tags

#### [Create Tag](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/create_tag)

```python
## Positional Arguments

# $body | associative array

$klaviyo_beta->Tags->createTag($body);
```




#### [Create Tag Group](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/create_tag_group)

```python
## Positional Arguments

# $body | associative array

$klaviyo_beta->Tags->createTagGroup($body);
```




#### [Create Tag Relationships](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/create_tag_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

$klaviyo_beta->Tags->createTagRelationships($id, $related_resource, $body);
```




#### [Delete Tag](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/delete_tag)

```python
## Positional Arguments

# $id | string

$klaviyo_beta->Tags->deleteTag($id);
```




#### [Delete Tag Group](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/delete_tag_group)

```python
## Positional Arguments

# $id | string

$klaviyo_beta->Tags->deleteTagGroup($id);
```




#### [Delete Tag Relationships](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/delete_tag_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string
# $body | associative array

$klaviyo_beta->Tags->deleteTagRelationships($id, $related_resource, $body);
```




#### [Get Tag](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_tag)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_tag | string[]

$klaviyo_beta->Tags->getTag($id, $fields_tag=$fields_tag);
```




#### [Get Tag Group](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_tag_group)

```python
## Positional Arguments

# $id | string

## Keyword Arguments

# $fields_tag_group | string[]

$klaviyo_beta->Tags->getTagGroup($id, $fields_tag_group=$fields_tag_group);
```




#### [Get Tag Group Relationships](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_tag_group_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

$klaviyo_beta->Tags->getTagGroupRelationships($id, $related_resource);
```




#### [Get Tag Groups](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_tag_groups)

```python

## Keyword Arguments

# $fields_tag_group | string[]
# $filter | string
# $page_cursor | string
# $sort | string

$klaviyo_beta->Tags->getTagGroups($fields_tag_group=$fields_tag_group, $filter=$filter, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Get Tag Relationships](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_tag_relationships)

```python
## Positional Arguments

# $id | string
# $related_resource | string

$klaviyo_beta->Tags->getTagRelationships($id, $related_resource);
```




#### [Get Tags](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/get_tags)

```python

## Keyword Arguments

# $fields_tag | string[]
# $filter | string
# $page_cursor | string
# $sort | string

$klaviyo_beta->Tags->getTags($fields_tag=$fields_tag, $filter=$filter, $page_cursor=$page_cursor, $sort=$sort);
```




#### [Update Tag](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/update_tag)

```python
## Positional Arguments

# $id | string
# $body | associative array

$klaviyo_beta->Tags->updateTag($id, $body);
```




#### [Update Tag Group](https://developers.klaviyo.com/en/v2022-12-15.pre/reference/update_tag_group)

```python
## Positional Arguments

# $id | string
# $body | associative array

$klaviyo_beta->Tags->updateTagGroup($id, $body);
```




# Appendix

## Global Keyword args

NOTES: 
- These are arguments that you can apply to any endpoint call, and which are unique to the SDK.
- They come LAST, AFTER ALL the endpoint-specific keyword args listed above, in the same order they are listed below.
- They are subject to the same quirks as any other PHP keyword args, in that to be included, they need to be preceeded by all keyword args listed before them. This includes all endpoint-specific keyword args for a given endpoint, along with any preceeding global keyword args listed below, if applicable. This holds even if those other keyword args are not being used; in that case, set those to `null`, but again, they must be included.

We currently support the following global keyword args:
- `$apiKey` :  use this to override the client-level `api_key`, which you define upon client instantiation.


## Namespace

In the interest of making the SDK conform to PHP idioms, we made the following namespace changes *relative* to the language agnostic resources up top (API Docs, Guides, etc).

- Underscores are stripped from function names (operation IDs)
- Function names use camelCase (e.g. `getMetrics`)
- Resource names use PascalCase (e.g. `Metrics`)
- Parameter names remain unchanged

## Parameters & Arguments

We stick to the following convention for parameters/arguments

1. All parameters are passed as function args.
2. All optional params, as well as all Body and Form Data params (including required ones), are passed as keyword args.
3. All query and path params that are tagged as `required` in the docs are passed as positional args.
4. `$api_key` is optional, as it is set at client level. However, you can override the client key wherever by passing in `$api_key` as the LAST optional param. Reminder: don't do this client-side.
