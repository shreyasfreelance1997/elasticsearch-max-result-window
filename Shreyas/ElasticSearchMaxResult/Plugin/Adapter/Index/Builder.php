<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Shreyas\ElasticSearchMaxResult\Plugin\Adapter\Index;


use \Shreyas\ElasticSearchMaxResult\Helper\Data;
class Builder
{
    
    /**
     * @var \Magento\Framework\App\DeploymentConfig
     */
    protected $_helperData;
    /**
     * Constructor
     *
     * @param Data $helperData
     */
    public function __construct(
        Data $helperData
    ) {
    
        $this->_helperData = $helperData;
    }
    /**
     * Plugin to set max_result_window value form env
     *
     * @param \Magento\Elasticsearch\Model\Adapter\Index\Builder $subject
     * @param array $result
     * @return array
     */
    public function afterBuild(\Magento\Elasticsearch\Model\Adapter\Index\Builder $subject, $result)
	{
        $enable = $this->_helperData->getGeneralConfig('enable');
        if ($enable) {
            $max_result_window = $this->_helperData->getGeneralConfig('magento_max_result_limit');
            if(isset($max_result_window) && !empty($max_result_window))
            {
                $result['max_result_window'] = $max_result_window;
            }        
            
        }
        return $result;
		
	}
}