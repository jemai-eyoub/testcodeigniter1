<!--/*--><?php
//
//namespace App\Controllers;
//
//use App\Models\StudentModel;
//use CodeIgniter\Controller;
//use config\Services;
//
//class Home extends Controller
//{
//
//	protected $homeModel;
//	protected $session;
//	protected $db;
//
//	public function __construct()
//	{
//		//$this->db = new Database();
//		helper(['url', 'forms', 'security']);
//		$this->session = Services::session();
//		$this->homeModel = new StudentModel();
//	}
//
//
//	public function index()
//	{
//		var_dump('dd');
//		echo view('home/index');
//
//
//	}
//
//
//	public function login()
//	{
//		$validation = Services::validation();
//		$validation->setRules(
//			['userName' => ['label' => 'first name', 'rules' => 'required|alpha|min_length[8]']],
//			['lastName' => ['label' => 'Last name', 'rules' => 'required|alpha|min_length[8]']]
//		);
//
//
//		if (!$validation->run()) {
//			redirect('home');
//		} else {
//			echo 'success';
//		}
//	}
//
//	public function logout()
//	{
//
//	}
//
//	public function buildLoginForm()
//	{
//		helper('form');
//		echo form_open('/home/login', 'method = "POST"');
//		echo form_hidden('hidden_1', '', true);
//		echo form_input('name[]', 'dd', 'placeholder = "dd"');
//		echo form_input(array('name' => 'dd', 'id' => 'dd', 'class' => '', 'value' => 'dd'));
//		echo form_checkbox('chk_1', 'val_1', TRUE);
//		echo form_dropdown('', '', 'default');;
//		echo form_upload('file[]', '', '');
//		echo form_multiselect('', '', '', '');
//		echo form_close();
//	}
//
//
//
//
//	/*public function _output($output)
//	{
//
//	}*/
//
//	/*public function _remap($method)
//	{
//		if (method_exists(Home::class, $method)) {
//			$this->$method();
//		} else {
//			show404();
//		}
//	}*/
//}*/
