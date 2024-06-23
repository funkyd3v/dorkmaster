<?php
require_once './factory/SearchUrlStrategyInterface.php';

class DuckDuckgoSearchUrlStrategy implements SearchUrlStrategyInterface {
    public function generateUrl($domain, $dork) {
        return 'https://duckduckgo.com/?q=site%3A%22' . $domain . '%22%20' . $dork;
    }
}
