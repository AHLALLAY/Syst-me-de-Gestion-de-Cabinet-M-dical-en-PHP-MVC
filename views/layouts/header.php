<?php 
    $role = $_SESSION['role'];
?>
<header class="w-full flex justify-between items-center mb-8 px-4">
    <h1 class="text-3xl font-bold text-green-900"><?php $role . 'Dashboard'?></h1>
    <form method="post">
        <button class="px-6 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition-colors focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
            Logout
        </button>
    </form>
</header>