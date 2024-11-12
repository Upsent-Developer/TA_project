<?php
include_once 'app/models/LogBimbinganModel.php';

class LogBimbinganController {
    private $model;

    public function __construct($db) {
        $this->model = new LogBimbinganModel($db);
    }

    // Display all log entries
    public function index() {
        $result = $this->model->getAll();
        include 'app/views/log_bimbingan/index.php';
    }

    // Add a new log entry
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_tugas_akhir = $_POST['id_tugas_akhir'];
            $this->model->tanggal = $_POST['tanggal'];
            $this->model->catatan = $_POST['catatan'];
            if ($this->model->create()) {
                header("Location: /log_bimbingan");
                exit;
            }
        }
        include 'app/views/log_bimbingan/create.php';
    }

    // Edit an existing log entry
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id = $id;
            $this->model->id_tugas_akhir = $_POST['id_tugas_akhir'];
            $this->model->tanggal = $_POST['tanggal'];
            $this->model->catatan = $_POST['catatan'];
            if ($this->model->update()) {
                header("Location: /log_bimbingan");
                exit;
            }
        }
        $logBimbingan = $this->model->getById($id);
        include 'app/views/log_bimbingan/edit.php';
    }

    // Delete a log entry by ID
    public function delete($id) {
        $this->model->id = $id;
        if ($this->model->delete()) {
            header("Location: /log_bimbingan");
            exit;
        }
    }

    // View a specific log entry by ID
    public function view($id) {
        $logBimbingan = $this->model->getById($id);
        include 'app/views/log_bimbingan/view.php';
    }
}
