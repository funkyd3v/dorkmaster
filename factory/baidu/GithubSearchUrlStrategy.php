<?php
require_once './factory/SearchUrlStrategyInterface.php';

class DuckDuckgoSearchUrlStrategy implements SearchUrlStrategyInterface {
    public function generateUrl($domain, $dork) {
        return 'https://github.com/search?q=%22' . $domain . '%22%20' . $dork . '&type=code&s=updated&o=desc';
    }
}
