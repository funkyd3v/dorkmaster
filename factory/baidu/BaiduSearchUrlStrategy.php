<?php
require_once './factory/SearchUrlStrategyInterface.php';

class BaiduSearchUrlStrategy implements SearchUrlStrategyInterface {
    public function generateUrl($domain, $dork) {
        return 'https://www.baidu.com/s?wd=site%3A%22' . $domain . '%22%20' . $dork;
    }
}
