<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 min-h-screen flex flex-col items-center justify-start pt-8 select-none">
    <header class="w-full text-center mb-8">
        <h1 class="text-3xl font-bold text-green-900">Medical Practice Management System</h1>
    </header>
    <main class="bg-white p-8 rounded-lg shadow-md w-96 border border-green-100">
        <form class="space-y-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-violet-900">Login</h2>
                <span class="text-violet-900 text-2xl cursor-pointer hover:text-violet-700">&times;</span>
            </div>
            <div class="space-y-2">
                <label for="username" class="block text-sm font-medium text-green-900">Email</label>
                <input type="text" name="email" id="username" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none">
            </div>
            <div class="space-y-2">
                <label for="pwd" class="block text-sm font-medium text-green-900">Password</label>
                <input type="password" name="pwd" id="pwd" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none">
            </div>
            <button class="w-full bg-cyan-600 text-white py-2 px-4 rounded-md hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 transition-colors">
                Sign in
            </button>
        </form>
    </main>
</body>

</html>