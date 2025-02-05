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
            <div class="flex space-x-2">
                <div>
                    <label for="f_name" class="block text-sm font-medium text-green-900">First name *</label>
                    <input type="text" name="f_name" id="f_name" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none">
                </div>
                <div>
                    <label for="l_name" class="block text-sm font-medium text-green-900">Last name *</label>
                    <input type="text" name="l_name" id="l_name" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none">
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="space-y-2 w-1/2">
                    <label for="username" class="block text-sm font-medium text-green-900">Email *</label>
                    <input type="email" name="email" id="username" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none">
                </div>
                <div class="space-y-2 w-1/2">
                    <label for="pwd" class="block text-sm font-medium text-green-900">Password *</label>
                    <input type="password" name="pwd" id="pwd" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none">
                </div>
            </div>
            <div>
                <label for="birthday" class="block text-sm font-medium text-green-900">Birthday *</label>
                <input type="date" name="birthday" id="birthday" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none">
            </div>
            <div class="flex space-x-2">
                <div class="space-y-2 w-1/2">
                    <label for="sex" class="block text-sm font-medium text-green-900">Sex *</label>
                    <select name="sex" id="sex" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none">
                        <option value="choix">Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="space-y-2 w-1/2">
                    <label for="role" class="block text-sm font-medium text-green-900">Role *</label>
                    <select name="roles" id="role" class="w-full p-2 border border-green-200 rounded-md focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 outline-none" onchange="togglePatientFields()">
                        <option value="choix">Choose...</option>
                        <option value="pat">Patient</option>
                        <option value="doc">Doctor</option>
                    </select>
                </div>
            </div>
            <button class="w-full bg-cyan-600 text-white py-2 px-4 rounded-md hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 transition-colors">
                Sign up
            </button>
            <span class="text-red-500 text-xs">(*) required field</span>
        </form>
    </main>
</body>

</html>