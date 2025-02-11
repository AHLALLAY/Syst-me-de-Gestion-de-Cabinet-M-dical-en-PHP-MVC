<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cabinet Médical</title>
</head>

<body class="min-h-screen bg-gradient-to-br from-purple-900 to-blue-900 flex items-center justify-center p-4 select-none">
    <div class="w-full max-w-md">
        <!-- En-tête avec logo -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white mb-2">Cabinet Médical</h1>
            <p class="text-purple-200">Votre santé, notre priorité</p>
        </div>

        <!-- Les boutons de connexion et d'inscription -->
        <div class="flex justify-center gap-4 mb-6">
            <button onclick="showForm('login')" class="px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-300 shadow-lg hover:shadow-xl">
                Se connecter
            </button>
            <button onclick="showForm('register')" class="px-6 py-2 bg-purple-600 text-white rounded-full hover:bg-purple-700 transition duration-300 shadow-lg hover:shadow-xl">
                S'inscrire
            </button>
        </div>

        <!-- Formulaire de Login -->
        <div id="login-form" class="hidden bg-white/10 backdrop-blur-md p-8 rounded-xl shadow-2xl">
            <h2 class="text-2xl font-bold text-white mb-6 text-center">Connexion</h2>
            <form method="post" action="./controllers/LoginProcess.php" class="space-y-6">
                <div>
                    <label for="login-email" class="block text-sm font-medium text-purple-100 mb-2">Email</label>
                    <input type="email" name="email" id="login-email"
                        class="w-full px-4 py-3 bg-white/5 border border-purple-300/20 rounded-lg text-white placeholder-purple-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition duration-200"
                        placeholder="Votre email" required>
                </div>
                <div>
                    <label for="login-password" class="block text-sm font-medium text-purple-100 mb-2">Mot de passe</label>
                    <input type="password" name="pwd" id="login-password"
                        class="w-full px-4 py-3 bg-white/5 border border-purple-300/20 rounded-lg text-white placeholder-purple-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition duration-200"
                        placeholder="Votre mot de passe" required>
                </div>
                <button type="submit" name="login_submit"
                    class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transform hover:scale-105 transition duration-200">
                    Se connecter
                </button>
            </form>
        </div>

        <!-- Formulaire d'inscription -->
        <div id="register-form" class="hidden bg-white/10 backdrop-blur-md p-8 rounded-xl shadow-2xl">
            <h2 class="text-2xl font-bold text-white mb-6 text-center">Inscription</h2>
            <form action="./controllers/RegisterProcess.php" method="post" class="space-y-6">
                <div class="flex space-x-4">
                    <div>
                        <label for="f_name" class="block text-sm font-medium text-purple-100 mb-2">Prénom</label>
                        <input type="text" name="f_name" id="f_name"
                            class="w-full px-4 py-3 bg-white/5 border border-purple-300/20 rounded-lg text-white placeholder-purple-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition duration-200"
                            placeholder="Votre prénom" required>
                    </div>
                    <div>
                        <label for="l_name" class="block text-sm font-medium text-purple-100 mb-2">Nom</label>
                        <input type="text" name="l_name" id="l_name"
                            class="w-full px-4 py-3 bg-white/5 border border-purple-300/20 rounded-lg text-white placeholder-purple-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition duration-200"
                            placeholder="Votre nom" required>
                    </div>
                </div>
                <div>
                    <label for="register-email" class="block text-sm font-medium text-purple-100 mb-2">Email</label>
                    <input type="email" name="email" id="register-email"
                        class="w-full px-4 py-3 bg-white/5 border border-purple-300/20 rounded-lg text-white placeholder-purple-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition duration-200"
                        placeholder="Votre email" required>
                </div>
                <div>
                    <label for="register-password" class="block text-sm font-medium text-purple-100 mb-2">Mot de passe</label>
                    <input type="password" name="pwd" id="register-password"
                        class="w-full px-4 py-3 bg-white/5 border border-purple-300/20 rounded-lg text-white placeholder-purple-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition duration-200"
                        placeholder="Votre mot de passe" required>
                </div>
                <div>
                    <label for="role" class="block text-sm font-medium text-purple-100 mb-2">Rôle</label>
                    <select name="role" id="role" onchange="toggleSpeciality()"
                        class="w-full px-4 py-3 bg-white/5 border border-purple-300/20 rounded-lg text-white placeholder-purple-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition duration-200">
                        <option value="">Choisissez...</option>
                        <option value="patient">Patient</option>
                        <option value="doctor">Médecin</option>
                    </select>
                </div>
                <div id="speciality-field" class="hidden">
                    <label for="speciality" class="block text-sm font-medium text-purple-100 mb-2">Spécialité</label>
                    <select name="speciality" id="speciality"
                        class="w-full px-4 py-3 bg-white/5 border border-purple-300/20 rounded-lg text-white placeholder-purple-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition duration-200">
                        <option value="">Choisissez...</option>
                        <option value="generaliste">Médecin généraliste</option>
                        <option value="cardiologue">Cardiologue</option>
                        <option value="dermatologue">Dermatologue</option>
                        <option value="pediatre">Pédiatre</option>
                        <option value="psychiatre">Psychiatre</option>
                        <option value="chirurgien">Chirurgien</option>
                    </select>
                </div>
                <button type="submit" name="register_submit"
                    class="w-full bg-purple-600 text-white py-3 px-4 rounded-lg hover:bg-purple-700 transform hover:scale-105 transition duration-200">
                    S'inscrire
                </button>
            </form>
        </div>

        <?php if (isset($success) && $success): ?>
            <script>showForm('login');</script>
        <?php endif; ?>

    </div>

    <script>
        function showForm(form) {
            document.getElementById('login-form').classList.add('hidden');
            document.getElementById('register-form').classList.add('hidden');
            document.getElementById(`${form}-form`).classList.remove('hidden');
        }

        function toggleSpeciality() {
            const roleSelect = document.getElementById('role');
            const specialityField = document.getElementById('speciality-field');
            
            if (roleSelect.value === 'doctor') {
                specialityField.classList.remove('hidden');
            } else {
                specialityField.classList.add('hidden');
            }
        }
    </script>
</body>

</html>
