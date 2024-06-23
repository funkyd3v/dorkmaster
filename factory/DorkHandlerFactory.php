<?php
require_once './handler/GoogleDorkHandler.php';
require_once './handler/BingDorkHandler.php';
require_once './handler/YahooDorkHandler.php';
require_once './handler/BaiduDorkHandler.php';
require_once './handler/DuckDuckgoDorkHandler.php';
require_once './handler/ShodanDorkHandler.php';
require_once './handler/GithubDorkHandler.php';

class DorkHandlerFactory {
    public static function create($type) {
        switch ($type) {
            case 'google':
                return new GoogleDorkHandler();
            case 'bing':
                return new BingDorkHandler();
            case 'yahoo':
                return new YahooDorkHandler();
            case 'baidu':
                return new BaiduDorkHandler();
            case 'duckduckgo':
                return new DuckDuckgoDorkHandler();
            case 'duckduckgo':
                return new DuckDuckgoDorkHandler();
            case 'github':
                return new GithubDorkHandler();
            default:
                throw new Exception("Invalid dork handler type");
        }
    }
}
