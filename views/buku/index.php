<?php
session_start();
require_once '../../config/database.php';
require_once '../layouts/header.php';

// Ambil data buku urut dari yang terbaru
$stmt = $pdo->query("SELECT * FROM masterdata_buku ORDER BY kode_buku DESC");
$buku = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
    <h1 class="text-2xl font-bold text-slate-800">Manajemen Buku</h1>
    <a href="create.php" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg shadow-sm transition duration-150 ease-in-out text-sm font-medium flex items-center gap-2">
        <i class="ph ph-plus-circle text-lg"></i>
        Tambah Buku
    </a>
</div>

<?php if (isset($_SESSION['success'])): ?>
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-[-10px]"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-[-10px]"
         class="mb-6 flex items-center gap-3 bg-emerald-50 text-emerald-700 border border-emerald-200 px-4 py-3 rounded-lg shadow-sm">
        <i class="ph ph-check-circle text-xl"></i>
        <p class="font-medium text-sm"><?= $_SESSION['success'] ?></p>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto w-full">
        <table class="w-full whitespace-nowrap">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr class="text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">
                    <th class="px-6 py-4">Kode Buku</th>
                    <th class="px-6 py-4">Judul Buku</th>
                    <th class="px-6 py-4">Pengarang</th>
                    <th class="px-6 py-4 text-center">Stok</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                <?php foreach ($buku as $row): ?>
                <tr class="hover:bg-slate-50 transition duration-150">
                    <td class="px-6 py-4 text-sm text-slate-600"><?= htmlspecialchars($row['kode_buku']) ?></td>
                    <td class="px-6 py-4 text-sm font-medium text-slate-900"><?= htmlspecialchars($row['judul_buku']) ?></td>
                    <td class="px-6 py-4 text-sm text-slate-600"><?= htmlspecialchars($row['pengarang_buku']) ?></td>
                    <td class="px-6 py-4 text-center text-sm font-bold text-indigo-600"><?= htmlspecialchars($row['stok_buku']) ?></td>
                    <td class="px-6 py-4 text-center text-sm font-medium">
                        <a href="edit.php?id=<?= $row['kode_buku'] ?>" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                        <a href="../../actions/buku_delete.php?id=<?= $row['kode_buku'] ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../layouts/footer.php'; ?>