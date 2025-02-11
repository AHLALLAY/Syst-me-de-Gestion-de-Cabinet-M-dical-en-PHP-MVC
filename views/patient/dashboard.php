<?php
require_once '../../controllers/getDoctors.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Liste des Médecins</title>
</head>

<body class="min-h-screen bg-gradient-to-br from-purple-900 to-blue-900 select-none">
    <!-- Header -->
    <header class="bg-white/10 backdrop-blur-md shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <h1 class="text-2xl font-bold text-white">Cabinet Médical</h1>
                <div class="flex gap-4">
                    <form action="appointment.php" method="post">
                        <button name="appointment" type="submit"
                            class="px-6 py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium rounded-full 
      hover:from-blue-600 hover:to-blue-700 focus:ring-4 focus:ring-blue-500/50 
      transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-blue-500/30
      flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span>Appointment</span>
                        </button>
                    </form>
                    <form action="../../controllers/LogoutProcess.php" method="post"
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
            <h2 class="text-2xl font-bold text-white mb-6">Médecins Disponibles</h2>

            <!-- Tableau des médecins -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-purple-100 border-b border-purple-300/20">
                            <th class="px-6 py-3 text-left">Doctor</th>
                            <th class="px-6 py-3 text-left">speciality</th>
                            <th class="px-6 py-3 text-left">Avalaible</th>
                            <th class="px-6 py-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($doctors as $doc): ?>
                            <tr class="text-white border-b border-purple-300/20">
                                <td class="px-6 py-4"><?= $doc['f_name'] . ' ' . $doc['l_name'] ?></td>
                                <td class="px-6 py-4"><?= $doc['speciality'] ?></td>
                                <td class="px-6 py-4"><?= $doc['avaliable'] ?></td>
                                <td class="px-6 py-4">
                                    <form method="post" action="../../controllers/addAppointmrnt.php">
                                        <input type="hidden" name="doctor_id" value="<?= $doc['user_id'] ?>">
                                        <input type="hidden" name="spe" value="<?= $doc['speciality'] ?>">
                                        <button type="submit" name="getAppBtn" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                                            Prendre RDV
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