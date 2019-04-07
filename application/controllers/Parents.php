<?php

class Parents extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("CalendarModel");
	}
	public function index(){
		$data['test_cal'] = $this->getTestCalendar();
		$this->load->view('parents/index', $data);
	}
	public function register(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->load->model('ParentsModel');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Pnone Number', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
				echo json_encode(
					array(
						'status' => false,
						'data' => validation_errors()
					)
				);
		}else{
			$cekExistUsername = $this->ParentsModel->checkUserName($this->input->post('username'));
			if(is_array($cekExistUsername) && count($cekExistUsername) > 0){
				echo json_encode(
					array(
						'status' => false,
						'data' => 'username already exists'
					)
				);
				return;
			}
			if($this->ParentsModel->register($this->input->post('username'), $this->input->post('fullname'), 
				$this->input->post('email'), $this->input->post('phone'), $this->input->post('password'))){
				echo json_encode(
					array(
						'status' => true
					)
				);
			}else{
				echo json_encode(
					array(
						'status' => false,
						'data' => 'data input failed'
					)
				);
			}
		}

	}

	function testCalPdf(){


		$this->load->library('Pdf');
		
		$pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(69,7,'JIMBOREE KINDERLAND',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(55,7,date('Y').' TESTING CALENDAR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,6,'Date',1,0);
        $pdf->Cell(240,6,'Description',1,0);
        //$pdf->Cell(27,6,'NO HP',1,0);
        //$pdf->Cell(25,6,'TANGGAL LHR',1,1);
        $pdf->SetFont('Arial','',10);
        //$mahasiswa = $this->db->get('mahasiswa')->result();
        /*foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->nim,1,0);
            $pdf->Cell(85,6,$row->nama_lengkap,1,0);
            $pdf->Cell(27,6,$row->no_hp,1,0);
            $pdf->Cell(25,6,$row->tanggal_lahir,1,1); 
		}*/
		$data = $this->getTestCalendar();
		$pdf->Cell(10,7,'',0,1);
		foreach($data as $k => $v){
			$pdf->Cell(40, 7, date('F d', strtotime($v->start_date)).' - '.date('d', strtotime($v->end_date)) , 1, 0);
			$pdf->MultiCell(240, 7,$v->description,1);
			$pdf->Cell(10,7,'',0,1);
		}
		$pdf->Output('D', 'JIMBOREE_TEST_CALENDAR_'.date('Y').'.pdf');
		
	}

	private function getTestCalendar(){
		$where = array(
			'DATE_FORMAT(start_date, "%Y")=' => date('Y'),
			'DATE_FORMAT(end_date, "%Y")=' => date('Y')
		);
		return $this->CalendarModel->getTest(0, 10, $where);
	}
}
?>