<?php
require_once 'GoogleSearchUrlStrategy.php';
require_once 'BingSearchUrlStrategy.php';
require_once './factory/yahoo/YahooSearchUrlStrategy.php';
require_once './factory/baidu/BaiduSearchUrlStrategy.php';
require_once './factory/duckduckgo/DuckDuckgoSearchUrlStrategy.php';
require_once './factory/github/GithubSearchUrlStrategy.php';

class SearchUrlStrategyFactory {
    public static function create($engine) {
        switch ($engine) {
            case 'google':
                return new GoogleSearchUrlStrategy();
            case 'bing':
                return new BingSearchUrlStrategy();
            case 'yahoo':
                return new BingSearchUrlStrategy();
            case 'baidu':
                return new BaiduSearchUrlStrategy();
            case 'duckduckgo':
                return new DuckDuckgoSearchUrlStrategy();
            case 'github':
                return new GithubSearchUrlStrategy();
            default:
                throw new Exception("Invalid search engine type");
        }
    }
}
