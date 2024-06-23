<?php
require_once 'SearchUrlStrategyInterface.php';

class GoogleSearchUrlStrategy implements SearchUrlStrategyInterface {
    public function generateUrl($domain, $dork) {
        return 'https://www.google.com/search?num=100&filter=0&q=site%3A%22' . $domain . '%22%20' . $dork;
    }
}
