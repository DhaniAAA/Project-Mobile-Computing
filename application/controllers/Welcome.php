<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load the URL Helper
    }
    public function index1() {
        $this->load->view('welcome_message');
    }

    public function kelompok() {
        $this->load->view('team');
    }

    public function Datasensor() {
        $this->load->view('welcome_message');
    }

	public function index()
	{
		$data1['hujan'] = $this->db->query("SELECT * FROM tsensor")->row();
		$data2['suhu'] = $this->db->query("SELECT * FROM tsensor")->row();

		$this->load->view('welcome_message', array('data1' => $data1, 'data2' => $data2));
	}
	public function updatedata($token = '')
{
    if ($token == '5AKEL2') {
        // Dapatkan data JSON mentah dari permintaan POST
        $rawData = file_get_contents("php://input");

        // Decode data JSON
        $jsonData = json_decode($rawData);

        // Periksa apakah penguraian JSON berhasil
        if ($jsonData !== null) {
            // Akses properti JSON
            $nilai1 = $jsonData->nilai1;
            $nilai2 = $jsonData->nilai2;

            // Data yang akan dimasukkan ke tabel
            $data = array(
                'hujan' => $nilai1,
                'suhu' => $nilai2,
            );

            // Masukkan data ke tabel 'tsensor'
            $this->db->insert('tsensor', $data);

            echo "Berhasil Proses";
        } else {
            echo "Error saat menguraikan data JSON";
        }
    } else {
        echo "Akses ditolak";
    }
}

}
