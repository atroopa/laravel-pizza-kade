<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form class="bg-white p-6 rounded shadow-md w-full max-w-sm" method="POST" action="/pizzas">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" required class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type</label>
                <select id="type" name="type" class="mt-1 p-2 w-full border rounded">
                    <option value="margarita">Margarita</option>
                    <option value="vegtable">Vegetable</option>
                    <option value="special">Special</option>
                    <option value="mix">Mix</option>
                    <option value="pepperoni">Pepperoni</option>
                    <option value="steak">Steak</option>
                    <option value="meat and mushrom">Meat and Mushroom</option>
                    <option value="chicke">Chicken</option>
                    <option value="neopolitan">Neopolitan</option>
                </select>

                <fieldset class="py-2">
                    <label>Extra Toppings:</label><br/>
                    <input type="checkbox" name="toppings[]" value="mushrom"> Mushrom
                    <input type="checkbox" name="toppings[]" value="garlic"> Garlic
                    <input type="checkbox" name="toppings[]" value="cheese"> Cheese
                    <input type="checkbox" name="toppings[]" value="tomato"> Tomato
                    <input type="checkbox" name="toppings[]" value="olives"> Olives
                    <input type="checkbox" name="toppings[]" value="pepperoni"> Pepperoni
                </fieldset>

            </div>

            <div class="mb-4">
                <label for="base" class="block text-gray-700">Base</label>
                <select id="base" name="base" class="mt-1 p-2 w-full border rounded">
                    <option value="thick">Thick</option>
                    <option value="thin">Thin</option>
                    <option value="cheese">Cheese</option>
                    <option value="garlic">Garlic</option>
                    <option value="flat">Flat</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" id="price" name="price" step="0.01" required class="mt-1 p-2 w-full border rounded">
            </div>

            <div>
                <input type="submit" value="Order Pizza" class="bg-blue-500 text-white py-2 px-4 rounded cursor-pointer hover:bg-blue-700">
            </div>
        </form>
    </div>
</body>
</html>
