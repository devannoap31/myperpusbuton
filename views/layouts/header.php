<?php
// Mulai session di header agar bisa digunakan untuk pesan flash (alert)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Perpustakaan</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="../../assets/css/output.css" rel="stylesheet">
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased flex h-screen overflow-hidden" x-data="{ sidebarOpen: false }">

    <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-20 bg-black bg-opacity-50 transition-opacity lg:hidden" style="display: none;"></div>

    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-30 w-64 bg-indigo-900 text-white transition-transform duration-300 transform lg:translate-x-0 lg:static lg:inset-auto flex flex-col shadow-xl">
        <div class="flex items-center justify-center h-16 bg-indigo-950 border-b border-indigo-800">
            <i class="ph ph-books text-2xl mr-2 text-indigo-300"></i>
            <span class="text-xl font-bold tracking-wider">MyPerpus</span>
        </div>
        
        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
            <a href="../dashboard/index.php" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-indigo-800 transition-colors">
                <i class="ph ph-squares-four text-xl text-indigo-300"></i>
                <span class="font-medium">Dashboard</span>
            </a>
            
            <p class="px-4 pt-4 pb-2 text-xs font-semibold text-indigo-400 uppercase tracking-wider">Master Data</p>
            
            <a href="../anggota/index.php" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-indigo-800 transition-colors">
                <i class="ph ph-users text-xl text-indigo-300"></i>
                <span class="font-medium">Anggota</span>
            </a>
            <a href="../buku/index.php" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-indigo-800 transition-colors">
                <i class="ph ph-book-bookmark text-xl text-indigo-300"></i>
                <span class="font-medium">Buku</span>
            </a>
            <a href="../petugas/index.php" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-indigo-800 transition-colors">
                <i class="ph ph-user-circle-gear text-xl text-indigo-300"></i>
                <span class="font-medium">Petugas</span>
            </a>
            </nav>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        
        <header class="flex items-center justify-between h-16 px-6 bg-white border-b border-slate-200">
            <button @click="sidebarOpen = true" class="text-slate-500 focus:outline-none lg:hidden">
                <i class="ph ph-list text-2xl"></i>
            </button>
            
            <div class="flex items-center gap-4 ml-auto">
                <button class="text-slate-400 hover:text-indigo-600 transition">
                    <i class="ph ph-bell text-xl"></i>
                </button>
                <div class="flex items-center gap-2 border-l pl-4 border-slate-200">
                    <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold">
                        A
                    </div>
                    <span class="text-sm font-medium text-slate-700 hidden sm:block">Admin</span>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6">