<?php
require_once '../../controllers/getAppointment.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Liste des Rendez-vous</title>
</head>

<body class="min-h-screen bg-gradient-to-br from-purple-900 to-blue-900">
    <!-- Header -->
    <header class="bg-white/10 backdrop-blur-md shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <h1 class="text-2xl font-bold text-white">Cabinet Médical</h1>
                <div class="flex gap-4">
                    <form method="post">
                        <button name="docs" type="submit"
                            class="px-6 py-2.5 bg-gradient-to-r from-purple-500 to-purple-600 text-white font-medium rounded-full
      hover:from-purple-600 hover:to-purple-700 focus:ring-4 focus:ring-purple-500/50
      transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-purple-500/30
      flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                            <span>Doctors</span>
                        </button>
                    </form>

                    <form action="../../controllers/LogoutProcess.php" method="post">
                        <button name="logout_btn" type="submit"
                            class="px-6 py-2.5 bg-gradient-to-r from-red-500 to-red-600 text-white font-medium rounded-full
      hover:from-red-600 hover:to-red-700 focus:ring-4 focus:ring-red-500/50
      transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-red-500/30
      flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                            </svg>
                            <span>Déconnexion</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white/10 backdrop-blur-md rounded-xl shadow-2xl p-6">
            <h2 class="text-2xl font-bold text-white mb-6">Mes Rendez-vous</h2>

            <!-- Tableau des médecins with adjusted dimensions -->
            <div class="overflow-x-auto rounded-lg">
                <table class="w-full min-w-[768px]">
                    <thead>
                        <tr class="text-purple-100 border-b border-purple-300/20">
                            <th class="w-1/4 px-8 py-4 text-left font-semibold">Date</th>
                            <th class="w-1/4 px-8 py-4 text-left font-semibold">Doctor</th>
                            <th class="w-1/4 px-8 py-4 text-left font-semibold">Speciality</th>
                            <th class="w-1/4 px-8 py-4 text-left font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-purple-300/20">
                        <?php foreach ($appointment as $app): ?>
                            <tr class="text-white hover:bg-white/5 transition-colors">
                                <td class="px-8 py-6"><?= $app['created_at'] ?></td>
                                <td class="px-8 py-6"><?= $app['doctor'] ?></td>
                                <td class="px-8 py-6"><?= $app['specialite'] ?></td>
                                <td class="px-8 py-6">
                                    <form method="post">
                                        <input type="hidden" name="doctor_id" value="<?= $app['id'] ?>">
                                        <button type="submit" name="cancelApp" 
                                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 
                                            transition duration-200 focus:ring-4 focus:ring-red-500/50">
                                            Annuler RDV
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>