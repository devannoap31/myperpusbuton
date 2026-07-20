<?php
session_start();
require_once '../../config/database.php';
require_once '../layouts/header.php';

// Query JOIN untuk mengambil nama anggota, judul buku, dan nama petugas
$sql = "SELECT tp.*, a.nama_anggota, b.judul_buku, p.nama_petugas 
        FROM transaksi_peminjamanbuku tp
        JOIN masterdata_anggota a ON tp.kode_anggota = a.kode_anggota
        JOIN masterdata_buku b ON tp.kode_buku = b.kode_buku
        JOIN masterdata_petugas p ON tp.kode_petugas = p.kode_petugas
        ORDER BY tp.tanggal_peminjamanbuku DESC";

$stmt = $pdo->query($sql);
$peminjaman = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
    <h1 class="text-2xl font-bold text-slate-800">Transaksi Peminjaman</h1>
    <a href="create.php" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg shadow-sm transition duration-150 ease-in-out text-sm font-medium flex items-center gap-2">
        <i class="ph ph-plus-circle text-lg"></i>
        Input Peminjaman
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
                    <th class="px-6 py-4">ID Transaksi</th>
                    <th class="px-6 py-4">Peminjam</th>
                    <th class="px-6 py-4">Buku</th>
                    <th class="px-6 py-4">Tgl Pinjam</th>
                    <th class="px-6 py-4">Batas Kembali</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                <?php foreach ($peminjaman as $row): ?>
                <tr class="hover:bg-slate-50 transition duration-150">
                    <td class="px-6 py-4 text-sm font-medium text-indigo-600">TRX-<?= htmlspecialchars($row['kode_peminjamanbuku']) ?></td>
                    <td class="px-6 py-4 text-sm font-medium text-slate-900"><?= htmlspecialchars($row['nama_anggota']) ?></td>
                    <td class="px-6 py-4 text-sm text-slate-600"><?= htmlspecialchars($row['judul_buku']) ?></td>
                    <td class="px-6 py-4 text-sm text-slate-600"><?= date('d M Y', strtotime($row['tanggal_peminjamanbuku'])) ?></td>
                    <td class="px-6 py-4 text-sm text-slate-600">
                        <span class="bg-amber-100 text-amber-800 px-2.5 py-0.5 rounded-full text-xs font-medium border border-amber-200">
                            <?= date('d M Y', strtotime($row['tanggal_estimasipengembalianbuku'])) ?>
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center text-sm font-medium">
                        <a href="edit.php?id=<?= $row['kode_peminjamanbuku'] ?>" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                        <a href="../../actions/peminjaman_delete.php?id=<?= $row['kode_peminjamanbuku'] ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Hapus data transaksi ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../layouts/footer.php'; ?>