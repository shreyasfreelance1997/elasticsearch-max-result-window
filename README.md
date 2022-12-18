# elasticsearch-max-result-window
Feature to set Max Result Window Size on Reindexing

Issue:- Elastic Search have default parameter is set to 10000 but incase if you have products more than 10000 in particular category and if you are using any plugin in quick search field then the elastic search will thrown an error to increase the max result window size or else use scroll API. For example if category watches having 12000 products and you did search for watches then it will fetch all 12000 products in quick search field if your not used any pagination or scrop API then it will break the site and you will not get the results.

Solution : - Hence even through if you set the max result value from the server team then after you run reindex command it will reset the value to 10000 this is because every reindexing magento is creating new index with default parameter . So In this module we have set the max result value from admin configuration at the time of building elastic search index while doing reindexing.

Installation Setps:- 
1) add the module in app/code
2) do php bin/magento module:enable Shreyas_ElasticSearchMaxResult, php bin/magento setu:di:compile, php bin/magento indexer:reindex, php bin/magento cache:flush, php bin/magento cache:clean
3) set the desired value from Admin->Store->Configuraion-> Elastic Max Result Configuration -> Max Result Limit 
Note:- Please read the instruction below the field

If you face any issue feel free to raise the issue in git..

Happy Coding.
