<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Shreyas\ElasticSearchMaxResult\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

	const XML_PATH_ELASTIC = 'magento_elastic_max_result/';
    /**
     * Constructor
     *
     * @param string $field
     * @param int $storeId
     * @return void
     */
	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}
    /**
     * to get Config value
     *
     * @param string $code
     * @param int $storeId
     * @return void
     */
	public function getGeneralConfig($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH_ELASTIC .'general/'. $code, $storeId);
	}

}