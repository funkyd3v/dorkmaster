<?php
require_once './factory/SearchUrlStrategyInterface.php';

class YahooSearchUrlStrategy implements SearchUrlStrategyInterface {
    public function generateUrl($domain, $dork) {
        return 'https://search.yahoo.com/search?n=100&p=site%3A%22' . $domain . '%22%20' . $dork;
    }
}
