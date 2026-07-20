<?php require_once '../layouts/header.php'; ?>

<h1 class="text-2xl font-bold text-gray-700 mb-6">Tambah Anggota Baru</h1>

<div class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg">
    <form action="../../actions/anggota_store.php" method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Anggota</label>
            <input type="text" name="nama_anggota" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2">Alamat Anggota</label>
            <input type="text" name="alamat_anggota" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div class="pt-4 flex items-center justify-between">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Simpan Data</button>
            <a href="index.php" class="text-gray-500 hover:text-gray-800">Batal</a>
        </div>
    </form>
</div>

<?php require_once '../layouts/footer.php'; ?>