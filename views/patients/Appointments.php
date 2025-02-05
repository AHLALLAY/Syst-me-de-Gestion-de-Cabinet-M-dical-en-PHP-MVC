<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Appointment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen p-8">
    <?php include_once '../layouts/header.php'?>
    
    <main class="max-w-7xl mx-auto">

        <!-- Appointments Table -->
        <div class="bg-white rounded-lg shadow-md border border-green-100 p-6">
            <form method="post">
                <table class="w-full">
                    <thead class="bg-green-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-green-900">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-green-900">Appointment Date</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-green-900">Doctor</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-green-100">
                        <tr class="hover:bg-green-50">
                            <td class="px-6 py-4 text-sm text-gray-900"></td>
                            <td class="px-6 py-4 text-sm text-gray-900"></td>
                            <td class="px-6 py-4 text-sm text-gray-900"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </main>
</body>
</html>