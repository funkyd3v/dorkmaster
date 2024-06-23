<?php
require_once './factory/DorkHandlerFactory.php';
require_once './factory/SearchUrlStrategyFactory.php';

if (isset($_GET['domain']) && isset($_GET['engine'])) {
    $domain = $_GET['domain'];
    $engine = $_GET['engine'];
    
    $fetcher = DorkHandlerFactory::create($engine);
    $sanitizedDomain = $fetcher->sanitize($domain);
    $dorks = $fetcher->fetchDorks();
    
    $urlStrategy = SearchUrlStrategyFactory::create($engine);
    
    echo "<h2>" . ucfirst($engine) . " dorks for " . $domain . "</h2>";
    foreach ($dorks as $dork) {
        $searchUrl = $urlStrategy->generateUrl($sanitizedDomain, $dork['dorks']);
        echo "<p><a href='" . $searchUrl . "' target='_blank'>" . htmlspecialchars($dork['dorks']) . "</a></p>";
    }
} else {
    echo "No domain or search engine specified.";
}
