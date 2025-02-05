<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 min-h-screen p-8">
    <?php include_once '../layouts/header.php' ?>
    <main class="max-w-7xl mx-auto">
        <form action="">
            <div class="p-8 rounded-full shadow-md border border-green-100">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-6 bg-white rounded-lg shadow-md border border-green-100 hover:shadow-lg hover:border-cyan-500 transition-all cursor-pointer">
                        <div class="flex items-center justify-center h-full">
                            <span class="text-xl font-medium text-green-900 hover:text-cyan-600">Display My Appointments</span>
                        </div>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-md border border-green-100 hover:shadow-lg hover:border-cyan-500 transition-all cursor-pointer">
                        <div class="flex items-center justify-center h-full">
                            <span class="text-xl font-medium text-green-900 hover:text-cyan-600">Display Doctors</span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>

</html>