<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TambahModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$model = new TambahModel();
		$data['users'] = $model->getUser();
		echo view('templetes/header', $data);
		echo view('dashboard');
		echo view('templetes/footer');
	}

	public function edit($id)
	{
		$model = new TambahModel();
		$data['users'] = $model->getUser($id)->getRow();
		echo view('templetes/header', $data);
		echo view('edit_user_view');
		echo view('templetes/footer');
	}

	public function update()
	{
		$model = new TambahModel();
		$id = $this->request->getPost('id');
		$data = array(
			'firstname' => $this->request->getPost('firstname'),
			'email' => $this->request->getPost('email'),
		);
		$model->updateUser($data, $id);
		return redirect()->to('/Dashboard');
	}

	public function delete($id)
	{
		$model = new TambahModel();
		$model->deleteUser($id);
		session()->setflashdata('danger','Yakin, Anda akan menghapus ?');
		return redirect()->to('/Dashboard');
	}

	//--------------------------------------------------------------------

}