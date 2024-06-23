<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Upload Dorks</title>
</head>
<body>
    <div class="max-w-md mx-auto m-6">
    <form action="process.php" method="POST">
    <textarea name="user_input" class="w-full p-2 border rounded" placeholder="Enter dorks here..."></textarea>
    <div class="grid grid-cols-3 gap-2 mt-4">
        <button type="submit" name="engine" value="google" class="search-link bg-blue-500 text-white text-center p-2 rounded">Google</button>
        <button type="submit" name="engine" value="bing" class="search-link bg-blue-500 text-white text-center p-2 rounded">Bing</button>
        <button type="submit" name="engine" value="yahoo" class="search-link bg-blue-500 text-white text-center p-2 rounded">Yahoo</button>
        <button type="submit" name="engine" value="baidu" class="search-link bg-blue-500 text-white text-center p-2 rounded">Baidu</button>
        <button type="submit" name="engine" value="duckduckgo" class="search-link bg-blue-500 text-white text-center p-2 rounded">DuckDuck</button>
        <button type="submit" name="engine" value="github" class="search-link bg-blue-500 text-white text-center p-2 rounded">Github</button>
    </div>
</form>

    </div>
</body>
</html>