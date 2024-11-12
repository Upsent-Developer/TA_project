<?php
include_once 'app/models/TugasAkhirModel.php';

class TugasAkhirController {
    private $model;

    public function __construct($db) {
        $this->model = new TugasAkhirModel($db);
    }

    // Display all Tugas Akhir
    public function index() {
        $result = $this->model->getAll();
        include 'app/views/tugas_akhir/index.php';
    }

    // Add a new Tugas Akhir
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->judul = $_POST['judul'];
            $this->model->deskripsi = $_POST['deskripsi'];
            $this->model->id_mahasiswa = $_POST['id_mahasiswa'];
            $this->model->id_pembimbing = $_POST['id_pembimbing'];
            $this->model->id_penguji = $_POST['id_penguji'];
            $this->model->status = $_POST['status'];
            $this->model->tanggal_pengajuan = $_POST['tanggal_pengajuan'];
            $this->model->tanggal_selesai = $_POST['tanggal_selesai'];
            if ($this->model->create()) {
                header("Location: /tugas_akhir");
                exit;
            }
        }
        include 'app/views/tugas_akhir/create.php';
    }

    // Edit an existing Tugas Akhir
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id = $id;
            $this->model->judul = $_POST['judul'];
            $this->model->deskripsi = $_POST['deskripsi'];
            $this->model->id_mahasiswa = $_POST['id_mahasiswa'];
            $this->model->id_pembimbing = $_POST['id_pembimbing'];
            $this->model->id_penguji = $_POST['id_penguji'];
            $this->model->status = $_POST['status'];
            $this->model->tanggal_pengajuan = $_POST['tanggal_pengajuan'];
            $this->model->tanggal_selesai = $_POST['tanggal_selesai'];
            if ($this->model->update()) {
                header("Location: /tugas_akhir");
                exit;
            }
        }
        $tugasAkhir = $this->model->getById($id);
        include 'app/views/tugas_akhir/edit.php';
    }

    // Delete a Tugas Akhir by ID
    public function delete($id) {
        $this->model->id = $id;
        if ($this->model->delete()) {
            header("Location: /tugas_akhir");
            exit;
        }
    }

    // Provide assessment for Tugas Akhir
    public function beriPenilaian($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nilai = $_POST['nilai'];
            $feedback = $_POST['feedback'];
            if ($this->model->beriPenilaian($id, $nilai, $feedback)) {
                header("Location: /tugas_akhir");
                exit;
            }
        }
        $tugasAkhir = $this->model->getById($id);
        include 'app/views/tugas_akhir/beriPenilaian.php';
    }

    // Update Tugas Akhir sidang status
    public function updateStatusSidang($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $status_sidang = $_POST['status_sidang'];
            if ($this->model->updateStatusSidang($id, $status_sidang)) {
                header("Location: /tugas_akhir");
                exit;
            }
        }
        $tugasAkhir = $this->model->getById($id);
        include 'app/views/tugas_akhir/updateStatusSidang.php';
    }

    // View history of Tugas Akhir based on semester
    public function getRiwayatSidang($semester) {
        $riwayatSidang = $this->model->getRiwayatSidang($semester);
        include 'app/views/tugas_akhir/riwayatSidang.php';
    }

    // Verify attendance for Tugas Akhir
    public function verifikasiKehadiran($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $kehadiran = $_POST['kehadiran'];
            if ($this->model->verifikasiKehadiran($id, $kehadiran)) {
                header("Location: /tugas_akhir");
                exit;
            }
        }
        $tugasAkhir = $this->model->getById($id);
        include 'app/views/tugas_akhir/verifikasiKehadiran.php';
    }
}
