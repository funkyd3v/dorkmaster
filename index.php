<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dorkmaster</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function appendDomainToLinks() {
            var domain = document.querySelector('input[name="domain"]').value;
            var links = document.querySelectorAll('.search-link');
            links.forEach(function(link) {
                var baseUrl = link.getAttribute('data-base-url');
                var engine = link.getAttribute('data-engine');
                link.href = `${baseUrl}?domain=${encodeURIComponent(domain)}&engine=${encodeURIComponent(engine)}`;
            });
        }
    </script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-4">
        <h1 class="text-center text-xl font-bold mb-4">Enter Domain</h1>
        <div class="my-4">
            <input type="text" name="domain" class="w-full p-2 border rounded" placeholder="Enter domain here...">
        </div>
        <div class="grid grid-cols-3 gap-2">
            <a href="#" data-base-url="result.php" data-engine="google" class="search-link bg-blue-500 text-white text-center p-2 rounded" onclick="appendDomainToLinks()" target="_blank">Google</a>
            <a href="#" data-base-url="result.php" data-engine="bing" class="search-link bg-blue-500 text-white text-center p-2 rounded" onclick="appendDomainToLinks()" target="_blank">Bing</a>
            <a href="#" data-base-url="result.php" data-engine="yahoo" class="search-link bg-blue-500 text-white text-center p-2 rounded" onclick="appendDomainToLinks()" target="_blank">Yahoo</a>
            <a href="#" data-base-url="result.php" data-engine="baidu" class="search-link bg-blue-500 text-white text-center p-2 rounded" onclick="appendDomainToLinks()" target="_blank">Baidu</a>
            <a href="#" data-base-url="result.php" data-engine="duckduckgo" class="search-link bg-blue-500 text-white text-center p-2 rounded" onclick="appendDomainToLinks()" target="_blank">DuckDuck</a>
            <br/>
            <a href="#" data-base-url="result.php" data-engine="github" class="search-link bg-blue-500 text-white text-center p-2 rounded" onclick="appendDomainToLinks()" target="_blank">Github</a>
        </div>
    </div>
</body>
</html>
