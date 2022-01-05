<?php

namespace Rusmanab\Shopee\Nodes\GlobalProduct;

use Rusmanab\Shopee\Nodes\NodeAbstract;
use Rusmanab\Shopee\ResponseData;

class GlobalProduct extends NodeAbstract
{
    /**
     * Use this call to get categories of product item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getCategories($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_category', $parameters);
    }


    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getAttributes($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_attributes', $parameters);
    }

    /**
     * Use this call to get brand list of product item.
     *
     */
    public function getBrandList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_brand_list', $parameters);
    }

    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getGlobalItemLimit($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/get_global_item_limit', $parameters);
    }


    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getDtsLimit($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_dts_limit', $parameters);
    }


    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getGlobalItemList($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/get_global_item_list', $parameters);
    }
    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getGlobalItemInfo($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/get_global_item_info', $parameters);
    }


    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function addGlobalItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/add_global_item', $parameters);
    }
    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updateGlobalItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/update_global_item', $parameters);
    }

    public function deleteGlobalItem($parameters = []) : ResponseData
    {
        return $this->post('/api/v2/global_product/delete_global_item', $parameters);
    }

    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function initTierVariation($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/init_tier_variation', $parameters);
    }

    public function UpdateTierVariationList($parameters = []) : ResponseData
    {
        return $this->post('/api/v2/global_product/update_tier_variation', $parameters);
    }

     /**
     * get Model List
     *
     * @return ResponseData
     */
    public function getModelList($parameters = []) : ResponseData
    {
        return $this->get('/api/v2/global_product/get_model_list', $parameters);
    }

     /**
     * Add Model List
     *
     * @return ResponseData
     */
    public function addModel($parameters = []) : ResponseData
    {
        return $this->post('/api/v2/global_product/add_model', $parameters);
    }

    /**
     * Update Model List
     *
     * @return ResponseData
     */
    public function updateModel($parameters = []) : ResponseData
    {
        return $this->post('/api/v2/global_product/update_model', $parameters);
    }

    /**
     * Delete Model
     *
     * @return ResponseData
     */
    public function deleteModel($parameters = []) : ResponseData
    {
        return $this->post('/api/v2/global_product/delete_model', $parameters);
    }


    /**
     * Get category support size chart.
     *
     * @return ResponseData
     */
    public function getCategorySizeCart($parameters = []) : ResponseData
    {
        return $this->post('/api/v2/global_product/support_size_chart', $parameters);
    }


    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updateSizeChart($parameters = []) : ResponseData
    {
        return $this->post('/api/v2/global_product/update_size_chart', $parameters);
    }

    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updateSizeCharts($parameters = []) : ResponseData
    {
        return $this->post('/api/v2/global_product/update_size_chart', $parameters);
    }

     /**
      * Use this api to to search item.
      *
      * @param array $parameters
      * @return ResponseData
     */
    public function getGlobalModelList($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/get_global_model_list', $parameters);
    }

    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function deleteGlobalModel($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/delete_global_model', $parameters);
    }
    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updateGlobalModel($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/update_global_model', $parameters);
    }
    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function addGlobalModel($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/add_global_model', $parameters);
    }

    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updatePrice($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/update_price', $parameters);
    }

    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function updateStock($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/update_stock', $parameters);
    }

    /**
     * Use this api to boost multiple items at once.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function createPublishTask($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/create_publish_task', $parameters);
    }


    /**
     * Use this api to get all boosted items.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getPublishableShop($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_publishable_shop', $parameters);
    }

     /**
     * Use this api to get ongoing and upcoming promotions.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getPublishTaskResult($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_publish_task_result', $parameters);
    }


    /**
     * Use this api to Update sip item price..
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getPublishedList($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_published_list', $parameters);
    }

    /**
     * Use this api to to search item.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function setSyncField($parameters = []): ResponseData
    {
        return $this->post('/api/v2/global_product/set_sync_field', $parameters);
    }
    /**
     * Use this api to get comment by shop_id, item_id, or comment_id.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getGlobalItemId($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_global_item_id', $parameters);
    }
    /**
     * Use this API to get recommended category ids according to item name.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getRecommendCats($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/category_recommend', $parameters);
    }


    /**
     * Use this call to Get recommend attributes.
     *
     * @param array $parameters
     * @return ResponseData
     */
    public function getRecommendAttribute($parameters = []): ResponseData
    {
        return $this->get('/api/v2/global_product/get_recommend_attribute', $parameters);
    }


}
