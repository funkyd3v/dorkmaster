<?php
// factory/BingSearchUrlStrategy.php
require_once 'SearchUrlStrategyInterface.php';

class BingSearchUrlStrategy implements SearchUrlStrategyInterface {
    public function generateUrl($domain, $dork) {
        return 'https://www.bing.com/search?&count=100&q=site%3A%22' . $domain . '%22%20' . $dork;
    }
}
