<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <title>Game</title>
</head>
<body>
<!-- TODO: add a form for the user to play the game -->
    <a href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <fieldset>
            <legend class="sr-only">Countries</legend>

            <div class="flex items-center mb-4">
                <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    United States
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input id="country-option-2" type="radio" name="countries" value="Germany" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Germany
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input id="country-option-3" type="radio" name="countries" value="Spain" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="country-option-3" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Spain
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input id="country-option-4" type="radio" name="countries" value="United Kingdom" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring:blue-300 dark:focus-ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="country-option-4" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    United Kingdom
                </label>
            </div>

            <div class="flex items-center">
                <input id="option-disabled" type="radio" name="countries" value="China" class="w-4 h-4 border-gray-200 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600" disabled>
                <label for="option-disabled" class="block ml-2 text-sm font-medium text-gray-300 dark:text-gray-700">
                    China (disabled)
                </label>
            </div>
        </fieldset>
    </a>
</body>
</html>
