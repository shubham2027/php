<?php
session_start();
$pageTitle = "FolioForge - Create Your Portfolio";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <!-- Basic Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #181818;
            color: white;
        }
        .accent-color {
            color: #8758FF;
        }
        .accent-bg {
            background-color: #8758FF;
        }
        .dark-bg {
            background-color: #121212;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-black border-b border-purple-600 py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="index.php" class="flex items-center gap-2">
                <svg class="w-8 h-8 accent-color" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                </svg>
                <span class="text-xl font-bold">FolioForge</span>
            </a>
            <a href="index.php" class="accent-color hover:text-white">Home</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Welcome to FolioForge</h1>
            <p class="text-xl accent-color">Create your professional portfolio</p>
        </div>

        <!-- Form Section -->
        <div class="max-w-3xl mx-auto dark-bg rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-semibold mb-6">Enter Your Details</h2>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="bg-green-900 border border-green-600 text-green-200 px-4 py-3 rounded mb-6">
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="bg-red-900 border border-red-600 text-red-200 px-4 py-3 rounded mb-6">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>

            <form id="portfolioForm" class="space-y-6">
                <!-- Personal Info Section -->
                <div class="dark-bg p-4 rounded-lg border border-purple-600">
                    <h3 class="text-xl accent-color mb-4">Personal Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-400 mb-2">Full Name*</label>
                            <input type="text" name="fullName" class="w-full p-2 bg-gray-800 border border-gray-700 rounded" required>
                        </div>
                        <div>
                            <label class="block text-gray-400 mb-2">Profession*</label>
                            <input type="text" name="profession" class="w-full p-2 bg-gray-800 border border-gray-700 rounded" required>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-gray-400 mb-2">About Me*</label>
                        <textarea name="aboutMe" rows="4" class="w-full p-2 bg-gray-800 border border-gray-700 rounded" required></textarea>
                    </div>
                </div>

                <!-- Skills Section -->
                <div class="dark-bg p-4 rounded-lg border border-purple-600">
                    <h3 class="text-xl accent-color mb-4">Skills</h3>
                    <div id="skillsContainer">
                        <div class="flex gap-2 mb-2">
                            <input type="text" name="skills[]" class="flex-grow p-2 bg-gray-800 border border-gray-700 rounded">
                        </div>
                    </div>
                    <button type="button" id="addSkill" class="mt-2 accent-bg text-white px-4 py-2 rounded">
                        Add Skill
                    </button>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="accent-bg text-white px-8 py-3 rounded text-lg">
                        Create Portfolio
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; <?php echo date('Y'); ?> FolioForge. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>