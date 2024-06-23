<?php
require_once './factory/SearchUrlStrategyInterface.php';

class ShodanSearchUrlStrategy implements SearchUrlStrategyInterface {
    public function generateUrl($domain, $dork) {
        return 'https://www.shodan.io/search?query=site%3A%22' . $domain . '%22%20' . $dork;
    }
}
