<?php
// Filename: AksesSistemAsupanMakan.php

class AksesSistemAsupanMakan {
    public $dataMakanan = [
        ['id' => 1, 'nama' => 'Nasi Goreng', 'kalori' => 300],
        ['id' => 2, 'nama' => 'Ayam Bakar', 'kalori' => 250],
        ['id' => 3, 'nama' => 'Soto Ayam', 'kalori' => 200],
    ];

    /**
     * @param bool $penggunaaanTrackerOlahraga
     * @return array
     */
    public function getAkses($penggunaaanTrackerOlahraga) {
        if ($penggunaaanTrackerOlahraga) {
            $statusAkses = 'Diizinkan';
            $pesan = 'Akses pada Sistem Asupan Makan telah diizinkan';
        } else {
            $statusAkses = 'Ditolak';
            $pesan = 'Akses pada Sistem Asupan Makan ditolak. Silakan gunakan Sistem Tracker Olahraga terlebih dahulu.';
        }

        return ['status' => $statusAkses, 'pesan' => $pesan];
    }

    /**
     * @return bool
     */
    public function cekRiwayatAktivitas() {
        $dataAktivitas = [
            ['date' => '2024-11-15', 'user_id' => 1],
            ['date' => '2024-11-16', 'user_id' => 2]
        ];

        $today = date('Y-m-d');
        foreach ($dataAktivitas as $aktivitas) {
            if ($aktivitas['date'] === $today) {
                return true; 
            }
        }

        return false; 
    }

    /**
     * @return array
     */
    public function getDataMakanan() {
        return $this->dataMakanan;
    }
}

?>
