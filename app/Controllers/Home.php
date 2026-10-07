<?php

namespace App\Controllers;

use App\Models\namajenis_model;
use App\Models\datakaryawan_model;
use App\Models\datakriteria_model;
use App\Models\databobot_model;
use App\Models\datakonversi_model;
use App\Models\matrikkeputusan_model;
use App\Models\datanormalisasi_model;
use App\Models\dataperankingan_model;
use App\Models\datakeputusan_model;

class Home extends BaseController
{
    protected $yourMode; 
    protected $matrikModel;
    public function index()
    {
        return view('admin_header')
            . view('admin_nav')
            . view('home')
            . view('admin_footer');
    }

    // Jenis Usaha
    public function callviewjenisusaha()
    {
        $model = new namajenis_model();
        $data['dataMb'] = $model->tampiljenis();

        return view('admin_header')
            . view('admin_nav')
            . view('viewjenisusaha', $data)
            . view('admin_footer');
    }

    public function tambahJenisUsaha()
    {
        return view('admin_header')
            . view('admin_nav')
            . view('tambah_jenis_usaha')
            . view('admin_footer');
    }
    public function simpanJenisUsaha()
{
    // Ambil data dari form
    $devisi = $this->request->getPost('devisi');

    // Validasi input
    if (empty($devisi)) {
        return redirect()->to(base_url('home/tambahJenisUsaha'))->with
        ('error', 'Nama jenis usaha tidak boleh kosong!');
    }

    // Simpan data menggunakan model
    $jenis = new \App\Models\namajenis_model();
    $jenis->insert(['devisi' => $devisi]);

    // Redirect ke halaman callviewjenisusaha setelah berhasil menyimpan
    return redirect()->to(base_url('home/callviewjenisusaha'))->
    with('success', 'Data berhasil ditambahkan.');
}

public function formEditJenisUsaha($id)
{
    $jenis = new namajenis_model();
    $dataJenis = $jenis->getJenisById($id);

    return view('admin_header')
        . view('admin_nav')
        . view('edit_jenis', ['dataJenis' => $dataJenis])
        . view('admin_footer');
}
    public function editJenisUsaha($id)
{
    $devisi = trim($this->request->getPost('devisi'));

    if (empty($devisi)) {
        // Jika input kosong, kembalikan ke form edit dengan pesan error
        return redirect()->to("/home/formEditJenisUsaha/$id")->
        with('error', 'Nama jenis usaha tidak boleh kosong!');
    }

    $jenis = new namajenis_model();
    $jenis->updateJenis(['devisi' => $devisi], ['id_usaha' => $id]);

    // Redirect ke halaman jenis_view.php dengan pesan sukses
    return redirect()->to(base_url('home/callviewjenisusaha'))->
    with('success', 'Data berhasil diupdate.');
}

public function deleteJenisUsaha($id)
{
    $jenis = new namajenis_model();
    $result = $jenis->deleteJenis($id);

    if ($result) {
        return redirect()->to('/home/callviewjenisusaha')->with('success', 'Data berhasil dihapus.');
    } else {
        return redirect()->to('/home/callviewjenisusaha')->with('error', 'Gagal menghapus data.');
    }
}
  //bobot 
  public function tambahBobot()
    {
        return view('admin_header')
            . view('admin_nav')
            . view('tambah_bobot')
            . view('admin_footer');
    }

    public function simpanBobot()
{
    // Ambil data dari form
    $kodeKriteria = $this->request->getPost('kode_kriteria');
    $namaKriteria = $this->request->getPost('nama_kriteria');
    $namaBobot = $this->request->getPost('nama_bobot');
    $nilaiBobot = $this->request->getPost('nilai_bobot');

    // Validasi input
    if (empty($kodeKriteria) || empty($namaKriteria) || empty($namaBobot) || empty($nilaiBobot)) {
        return redirect()->to(base_url('home/tambahBobot'))->
        with('error', 'Semua field harus diisi!');
    }

    // Simpan data menggunakan model
    $bobotModel = new databobot_model();
    $data = [
        'kode_kriteria' => $kodeKriteria,
        'nama_kriteria' => $namaKriteria,
        'nama_bobot' => $namaBobot,
        'nilai_bobot' => $nilaiBobot,
    ];

    if ($bobotModel->saveBobot($data)) {
        // Redirect ke halaman daftar dengan pesan sukses
        return redirect()->to(base_url('home/callviewdatabobot'));
        // ->
        // with('success', 'Data berhasil ditambahkan.');
    } else {
        // Redirect kembali ke form dengan pesan error
        return redirect()->to(base_url('home/tambahBobot'));
        // ->
        // with('error', 'Gagal menambahkan data.');
    }
}


   
public function formEditBobot($id)
{
    $bobotModel = new databobot_model();
    $dataBobot = $bobotModel->getBobotById($id); // This returns an object by default

    // Check if data exists
    if (!$dataBobot) {
        return redirect()->to(base_url('home/callviewdatabobot'))->
        with('error', 'Data tidak ditemukan!');
    }

    // Pass data as object
    return view('admin_header')
        . view('admin_nav')
        . view('edit_bobot', ['data' => $dataBobot]) // Pass as object
        . view('admin_footer');
}


public function editBobot($id)
{
    // Ambil data dari request
    $kodeKriteria = trim($this->request->getPost('kode_kriteria'));
    $namaKriteria = trim($this->request->getPost('nama_kriteria'));
    $namaBobot = trim($this->request->getPost('nama_bobot'));
    $nilaiBobot = trim($this->request->getPost('nilai_bobot'));

    // Validasi input
    if (empty($kodeKriteria) || empty($namaKriteria) || empty($namaBobot) || empty($nilaiBobot)) {
        return redirect()->to("/home/formEditBobot/$id")->with('error', 'Semua field harus diisi!');
    }

    // Instance model
    $bobotModel = new databobot_model();

    // Update data di database
    $data = [
        'kode_kriteria' => $kodeKriteria,
        'nama_kriteria' => $namaKriteria,
        'nama_bobot' => $namaBobot,
        'nilai_bobot' => $nilaiBobot,
    ];

    // Update data bobot
    if ($bobotModel->updateBobot($id, $data)) {
        return redirect()->to(base_url('home/callviewdatabobot'))->
        with('success', 'Data berhasil diupdate.');
    } else {
        return redirect()->to("/home/formEditBobot/$id")->with('error', 'Gagal mengupdate data.');
    }
}

// }
public function deleteBobot($id)
{
    $jenis = new databobot_model();
    $result = $jenis->deletebobot($id);

    if ($result) {
        return redirect()->to('/home/callviewdatabobot')->with('success', 'Data berhasil dihapus.');
    } else {
        return redirect()->to('/home/callviewdatabobot')->with('error', 'Gagal menghapus data.');
    }
}



    public function callviewdatabobot()
    {
        $mb = new \App\Models\databobot_model();
        $datamb = $mb->tampilbobot(); // Ambil data menggunakan method tampilbobot
        $data = ['dataMb' => $datamb];
    
        echo view('admin_header');
        echo view('admin_nav');
        echo view('viewdatabobot', $data); // Kirim data ke view
        echo view('admin_footer');
    }

//karyawan
public function callviewdatakaryawan()
{
    $karyawanModel = new datakaryawan_model();
    $data['dataKaryawan'] = $karyawanModel->tampilData(); // Sesuaikan nama variabel

    echo view('admin_header');
    echo view('admin_nav');
    echo view('viewdatakaryawan', $data);
    echo view('admin_footer');
}



public function tambahKaryawan()
{
    // Mengambil data jenis usaha
    $jenisUsahaModel = new datakaryawan_model();
    $jenisUsaha = $jenisUsahaModel->tampiljenis(); 

    // Mengirim data ke view
    echo view('admin_header');
    echo view('admin_nav');
    echo view('tambah_karyawan', ['jenisUsaha' => $jenisUsaha]);
    echo view('admin_footer');
}

    public function simpanKaryawan()
    {
        $namaKaryawan = $this->request->getPost('nama_karyawan');
        $devisi = $this->request->getPost('devisi');
        $kelamin = $this->request->getPost('kelamin');
        $tanggalLahir = $this->request->getPost('tanggal_lahir');
        $alamat = $this->request->getPost('alamat');
        $agama = $this->request->getPost('agama');

        // Menyimpan data ke model
        $data = [
            'nama_karyawan' => $namaKaryawan,
            'devisi' => $devisi,
            'kelamin' => $kelamin,
            'tanggal_lahir' => $tanggalLahir,
            'alamat' => $alamat,
            'agama' => $agama,
        ];

        $datakaryawanModel = new datakaryawan_model();
        $datakaryawanModel->saveKaryawan($data);

        return redirect()->to(base_url('home/callviewdatakaryawan'))->with('success', 'Data karyawan berhasil disimpan.');
    }

public function editKaryawan($id)
{
    $karyawanModel = new Datakaryawan_model();
    $data = [
        'nama_karyawan' => $this->request->getPost('nama_karyawan'),
        'devisi' => $this->request->getPost('devisi'),
        'kelamin' => $this->request->getPost('kelamin'),
        'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        'alamat' => $this->request->getPost('alamat'),
        'agama' => $this->request->getPost('agama'),
    ];

    if ($karyawanModel->update($id, $data)) {
        return redirect()->to(base_url('home/callviewdatakaryawan'))->with('success', 'Data berhasil diperbarui.');
    }
    return redirect()->back()->with('error', 'Gagal memperbarui data.');
}

public function deleteKaryawan($id)
{
    $karyawanModel = new Datakaryawan_model();
    if ($karyawanModel->delete($id)) {
        return redirect()->to(base_url('home/callviewdatakaryawan'))->with('success', 'Data berhasil dihapus.');
    }
    return redirect()->to(base_url('home/callviewdatakaryawan'))->with('error', 'Gagal menghapus data.');
}

    //kriteria
    public function callviewdatakriteria()
    {
        $mb = new datakriteria_model();
        $datamb = $mb->tampilkriteria();
        $data = ['dataMb' => $datamb];

        echo View('admin_header');
        echo View('admin_nav');
        echo View('viewdatakriteria', $data);
        echo View('admin_footer');
    }

    //kriteria
//     public function callviewkriteria()
// {
//     $model = new datakriteria_model();
//     $data['dataKriteria'] = $model->tampilKriteria();

//     return view('admin_header')
//         . view('admin_nav')
//         . view('viewkriteria', $data)
//         . view('admin_footer');
// }

public function tambahKriteria()
{
    return view('admin_header')
        . view('admin_nav')
        . view('tambah_kriteria')
        . view('admin_footer');
}

public function simpanKriteria()
{
    // Ambil data dari form
    $kodeKriteria = $this->request->getPost('kode_kriteria');
    $namaKriteria = $this->request->getPost('nama_kriteria');
    $nilaiKriteria = $this->request->getPost('nilai_kriteria');
    $tipeKriteria = $this->request->getPost('tipe_kriteria');

    // Validasi input
    if (empty($kodeKriteria) || empty($namaKriteria) || empty($nilaiKriteria) || empty($tipeKriteria)) {
        return redirect()->to(base_url('home/tambahKriteria'))->with('error', 'Semua field harus diisi!');
    }

    // Simpan data menggunakan model
    $kriteria = new datakriteria_model();
    $kriteria->insert([
        'kode_kriteria' => $kodeKriteria,
        'nama_kriteria' => $namaKriteria,
        'nilai_kriteria' => $nilaiKriteria,
        'tipe_kriteria' => $tipeKriteria
    ]);

    // Redirect ke halaman callviewkriteria setelah berhasil menyimpan
    return redirect()->to(base_url('home/callviewkriteria'))->with('success', 'Data berhasil ditambahkan.');
}

public function formEditKriteria($id)
{
    $kriteria = new datakriteria_model();
    $dataKriteria = $kriteria->getKriteriaById($id);

    return view('admin_header')
        . view('admin_nav')
        . view('edit_kriteria', ['dataKriteria' => $dataKriteria])
        . view('admin_footer');
}

public function editKriteria($id)
{
    $kodeKriteria = trim($this->request->getPost('kode_kriteria'));
    $namaKriteria = trim($this->request->getPost('nama_kriteria'));
    $nilaiKriteria = trim($this->request->getPost('nilai_kriteria'));
    $tipeKriteria = trim($this->request->getPost('tipe_kriteria'));

    if (empty($kodeKriteria) || empty($namaKriteria) || empty($nilaiKriteria) || empty($tipeKriteria)) {
        // Jika input kosong, kembalikan ke form edit dengan pesan error
        return redirect()->to("/home/formEditKriteria/$id")->with('error', 'Semua field harus diisi!');
    }

    $kriteria = new datakriteria_model();
    $kriteria->updateKriteria([
        'kode_kriteria' => $kodeKriteria,
        'nama_kriteria' => $namaKriteria,
        'nilai_kriteria' => $nilaiKriteria,
        'tipe_kriteria' => $tipeKriteria
    ], ['id_kriteria' => $id]);

    // Redirect ke halaman viewkriteria.php dengan pesan sukses
    return redirect()->to(base_url('home/callviewkriteria'))->with('success', 'Data berhasil diupdate.');
}

public function deleteKriteria($id)
{
    $kriteria = new datakriteria_model();
    $result = $kriteria->deleteKriteria($id);

    if ($result) {
        return redirect()->to('/home/callviewkriteria')->with('success', 'Data berhasil dihapus.');
    } else {
        return redirect()->to('/home/callviewkriteria')->with('error', 'Gagal menghapus data.');
    }
}

    public function callviewhitung()
    {
        // Membuat objek model
        $mb = new \App\Models\datakonversi_model();
    
        // Memanggil metode yang benar (tampilkeputusan) untuk mengambil data
        $datamb = $mb->tampilkeputusan();
    
        // Menyusun data untuk dikirim ke view
        $data = ['dataMb' => $datamb];
    
        // Menampilkan header, navbar, view utama, dan footer
        echo View('admin_header');
        echo View('admin_nav');
        echo View('view_hitung', $data);
        echo View('admin_footer');
    }
    public function viewmatrikkeputusan()
    {
        $model = new matrikkeputusan_model(); // Pastikan model ini sudah ada
        $dataMatrik = $model->getKaryawan(); // Pastikan method getKaryawan() ada di model
        
        $data = ['matrik_keputusan' => $dataMatrik];
        echo view('admin_header');
        echo view('admin_nav');
        echo view('viewmatrikkeputusan', $data);
        echo view('admin_footer');
    }
    
    // Tambah Matriks Keputusan
    public function tambahMatriksKeputusan()
{
    // Mengambil data karyawan, bobot, dan skala dari model
    $model = new matrikkeputusan_model();
    $karyawanData = $model->getKaryawannya(); // Menggunakan metode getKaryawannya
    $bobotData = $model->getBobot();
    $skalaData = $model->getSkala();

    // Menyusun data untuk view
    $data = [
        'karyawan' => $karyawanData,
        'bobot' => $bobotData,
        'skala' => $skalaData
    ];

    // Memuat views
    echo view('admin_header'); // Header admin
    echo view('admin_nav');     // Navigasi admin
    echo view('tambah_matrik_keputusan', $data); // View tambah matrik keputusan
    echo view('admin_footer'); // Footer admin
}

    // Fungsi untuk menghapus matriks keputusan
    // Fungsi untuk menghapus matriks keputusan
    public function hapusMatrikKeputusan($id_matriks)
    {
        $matrik = new matrikkeputusan_model();
        $result = $matrik->hapusMatrikKeputusan($id_matriks);

        if ($result) {
            return redirect()->to('/home/viewmatrikkeputusan')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->to('/home/viewmatrikkeputusan')->with('error', 'Gagal menghapus data.');
        }
    }
    // public function simpanMatriksKeputusan()
    // {
    //     // Ambil data dari form
    //     $id_alternatif = $this->request->getPost('id_alternatif');
    //     $id_bobot = $this->request->getPost('id_bobot');
    //     $id_skala = $this->request->getPost('id_skala');
    
    //     // Simpan data ke database melalui model
    //     $model = new matrikkeputusan_model();
    //     $data = [
    //         'id_alternatif' => $id_alternatif,
    //         'id_bobot' => $id_bobot,
    //         'id_skala' => $id_skala
    //     ];
    
    //     // Insert data menggunakan model
    //     $model->tambahMatrikKeputusan($data);
    
    //     // Redirect ke halaman view matrik keputusan
    //     return redirect()->to('/home/viewmatrikkeputusan');
    // }
    // public function simpanMatrikKeputusan()
    // {
    //     // Ambil data dari form
    //     $id_alternatif = $this->request->getPost('id_alternatif');
    //     $id_bobot = $this->request->getPost('id_bobot');
    //     $id_skala = $this->request->getPost('id_skala');
    
    //     // Simpan data ke database melalui model
    //     $model = new matrikkeputusan_model();
    //     $data = [
    //         'id_alternatif' => $id_alternatif,
    //         'id_bobot' => $id_bobot,
    //         'id_skala' => $id_skala
    //     ];
    
    //     // Insert data menggunakan model
    //     if ($model->tambahMatrikKeputusan($data)) {
    //         // Redirect ke halaman view matrik keputusan
    //         return redirect()->to('/home/viewmatrikkeputusan');
    //     } else {
    //         // Error handling jika insert gagal
    //         return redirect()->to('/home')->with('error', 'Gagal menyimpan matrik keputusan');
    //     }
    // }


    public function simpanMatrikKeputusan()
{
    // Ambil data dari form
    $id_alternatif = $this->request->getPost('id_alternatif');
    $id_bobot = $this->request->getPost('id_bobot');
    $id_skala = $this->request->getPost('id_skala');

    // Validasi data jika diperlukan
    if (!$id_alternatif || !$id_bobot || !$id_skala) {
        return redirect()->to('/home')->with('error', 'Semua data harus diisi!');
    }

    // Simpan data ke database melalui model
    $model = new matrikkeputusan_model();
    $data = [
        'id_alternatif' => $id_alternatif,
        'id_bobot' => $id_bobot,
        'id_skala' => $id_skala
    ];

    // Insert data menggunakan model
    if ($model->tambahMatrikKeputusan($data)) {
        // Redirect ke halaman view matrik keputusan jika sukses
        return redirect()->to('/home/viewmatrikkeputusan')->with('success', 'Matrik keputusan berhasil disimpan');
    } else {
        // Error handling jika insert gagal
        return redirect()->to('/home')->with('error', 'Gagal menyimpan matrik keputusan');
    }
}
// Method untuk halaman edit matrik keputusan
public function editMatrikKeputusan($id_matriks)
{
    $model = new matrikkeputusan_model();
    
    // Ambil data matrik keputusan yang ingin diedit
    $matrikKeputusan = $model->getKaryawan($id_matriks); // Gunakan getRow() jika hanya satu data

    // Jika data tidak ditemukan, redirect ke halaman lain dengan pesan error
    if (!$matrikKeputusan) {
        return redirect()->to('/home/viewmatrikkeputusan')->with('error', 'Matrik Keputusan tidak ditemukan');
    }
    
    // Ambil data untuk dropdown
    $data['karyawan'] = $model->getKaryawannya();
    $data['bobot'] = $model->getBobot();
    $data['skala'] = $model->getSkala();
    $data['matrikKeputusan'] = $matrikKeputusan;  // Pastikan ini objek, bukan array
    // Memuat views
    echo view('admin_header'); // Header admin
    echo view('admin_nav');     // Navigasi admin
    echo view('edit_matrik_keputusan', $data);
    echo view('admin_footer'); // Footer admin
}


// Method untuk menyimpan perubahan matrik keputusan
public function updateMatrikKeputusan()
{
    // Ambil data dari form
    $id_matriks = $this->request->getPost('id_matriks');
    $id_alternatif = $this->request->getPost('id_alternatif');
    $id_bobot = $this->request->getPost('id_bobot');
    $id_skala = $this->request->getPost('id_skala');

    // Validasi data jika diperlukan
    if (!$id_alternatif || !$id_bobot || !$id_skala) {
        return redirect()->to("/home/editMatrikKeputusan/$id_matriks")->with('error', 'Semua data harus diisi!');
    }

    // Update data ke database melalui model
    $model = new matrikkeputusan_model();
    $data = [
        'id_alternatif' => $id_alternatif,
        'id_bobot' => $id_bobot,
        'id_skala' => $id_skala
    ];

    // Update data menggunakan model
    if ($model->update($id_matriks, $data)) {
        // Redirect ke halaman view matrik keputusan jika sukses
        return redirect()->to('/home/viewmatrikkeputusan')->with('success', 'Matrik keputusan berhasil diperbarui');
    } else {
        // Error handling jika update gagal
        return redirect()->to("/home/editMatrikKeputusan/$id_matriks")->with('error', 'Gagal memperbarui matrik keputusan');
    }
}


    public function callviewnormalisasi()
    {
        $mb = new datanormalisasi_model(); // Panggil model
        $datamb = $mb->tampilnormalisasi(); // Ambil data normalisasi
        $data = ['dataMb' => $datamb]; // Kirim data ke view

        // Load views
        echo view('admin_header');
        echo view('admin_nav');
        echo view('viewnormalisasi', $data);
        echo view('admin_footer');
    }

    // public function callviewranking()
    // {
    //     $mb = new dataperankingan_model();
    //     $datamb = $mb->tampilranking();
    //     $data = ['dataMb' => $datamb];

    //     echo View('admin_header');
    //     echo View('admin_nav');
    //     echo View('viewperankingan', $data);
    //     echo View('admin_footer');
    // }

//     public function callviewranking()
// {
//     // Memanggil model untuk mendapatkan data ranking
//     $mb = new dataperankingan_model();
//     $datamb = $mb->tampilranking();  // Memanggil fungsi tampilranking() di model

//     // Mengirimkan data ke view
//     $data = ['dataMb' => $datamb];

//     // Menampilkan view dengan data yang dikirim
//     echo View('admin_header');
//     echo View('admin_nav');
//     echo View('viewperankingan', $data);  // Pastikan 'dataMb' terisi
//     echo View('admin_footer');
// }

public function callviewranking()
{
    $model = new dataperankingan_model();
    $dataRanking = $model->tampilRanking();
    $data = ['ranking' => $dataRanking];

    // Load views dengan data perankingan
    echo View('admin_header'); // Header admin
    echo View('admin_nav');    // Navigasi admin
    echo View('viewperankingan', $data); // View perankingan
    echo View('admin_footer'); // Footer admin
}



    // public function callviewkeputusan()
    // {
    //     $mb = new datakeputusan_model();
    //     $datamb = $mb->tampilkeputusan();
    //     $data = ['dataMb' => $datamb];

    //     echo View('admin_header');
    //     echo View('admin_nav');
    //     echo View('viewkeputusan', $data);
    //     echo View('admin_footer');
    // }
//     public function callviewkeputusan()
// {
//     $mb = new datakeputusan_model();
//     $datamb = $mb->tampilkeputusan();
//     $data = ['dataMb' => $datamb];

//     echo View('admin_header');
//     echo View('admin_nav');
//     echo View('viewkeputusan', $data);
//     echo View('admin_footer');
// }
    // public function callviewkeputusan()
    // {
    //     $mb = new datakeputusan_model();
    //     $datamb = $mb->tampilkeputusan();
    //     $data = ['dataMb' => $datamb];

    //     echo View('admin_header');
    //     echo View('admin_nav');
    //     echo View('viewkeputusan', $data);
    //     echo View('admin_footer');
    // }
    public function callviewkeputusan()
{
    $mb = new \App\Models\datakeputusan_model();
    $datamb = $mb->tampilkeputusan(); // 
    $data = ['ranking' => $datamb]; // 

    echo View('admin_header');
    echo View('admin_nav');
    echo View('viewkeputusan', $data); 
    echo View('admin_footer');
}


    public function savembl()
    {
        $data = [
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'devisi' => $this->request->getPost('devisi'),
            'kelamin' => $this->request->getPost('kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'agama' => $this->request->getPost('agama'),
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
            'tipe_kriteria' => $this->request->getPost('tipe_kriteria'),
            'nama_bobot' => $this->request->getPost('nama_bobot'),
            'nilai_bobot' => $this->request->getPost('nilai_bobot'),
        ];

        // Simpan data ke database
        $this->yourMode->insert($data);

        return redirect()->to('/view/viewdataumkm'); // Redirect ke halaman yang sesuai
    }
}
