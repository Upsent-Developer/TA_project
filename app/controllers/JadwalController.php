<?php
include_once 'app/models/JadwalModel.php';

class JadwalController {
    private $model;

    public function __construct($db) {
        $this->model = new JadwalModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include 'app/views/jadwal/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_tugas_akhir = $_POST['id_tugas_akhir'];
            $this->model->jenis = $_POST['jenis'];
            $this->model->tanggal = $_POST['tanggal'];
            $this->model->waktu = $_POST['waktu'];
            $this->model->tempat = $_POST['tempat'];
            if ($this->model->create()) {
                header("Location: /siptam/jadwal");
                exit;
            }
        }
        include 'app/views/jadwal/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id = $id;
            $this->model->id_tugas_akhir = $_POST['id_tugas_akhir'];
            $this->model->jenis = $_POST['jenis'];
            $this->model->tanggal = $_POST['tanggal'];
            $this->model->waktu = $_POST['waktu'];
            $this->model->tempat = $_POST['tempat'];
            if ($this->model->update()) {
                header("Location: /siptam/jadwal");
                exit;
            }
        }
        $jadwal = $this->model->getById($id);
        include 'app/views/jadwal/edit.php';
    }

    public function delete($id) {
        $this->model->id = $id;
        if ($this->model->delete()) {
            header("Location: /siptam/jadwal");
            exit;
        }
    }
}
