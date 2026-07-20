<?php require_once '../layouts/header.php'; ?>

<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Tambah Buku Baru</h1>

    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-slate-200">
        <form action="../../actions/buku_store.php" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Judul Buku</label>
                <input type="text" name="judul_buku" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Pengarang Buku</label>
                <input type="text" name="pengarang_buku" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Stok Buku</label>
                <input type="number" name="stok_buku" min="0" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
            </div>

            <div class="flex items-center gap-4 pt-4">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-lg font-medium transition w-full sm:w-auto">Simpan Data</button>
                <a href="index.php" class="text-slate-600 hover:text-slate-900 font-medium px-4 py-2.5 w-full sm:w-auto text-center">Batal</a>
            </div>
        </form>
    </div>
</div>

<?php require_once '../layouts/footer.php'; ?>