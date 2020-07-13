<?php namespace App\Models;

use CodeIgniter\Model;

/**
 * 
 */
class TambahModel extends Model
{

	protected $table = 'users';

	public function getUser($id = false)
	{
		if($id === false)
		{
			return $this->findAll();
		}

		return $this->getWhere( ['id'=>$id] );
	}

	public function updateUser($data, $id)
	{
		$query = $this->db->table($this->table)->update($data, array('id' => $id));
		return $query;
	}


	public function deleteUser($id)
	{
		$query = $this->db->table($this->table)->delete(array('id' => $id));
		return $query;
	}
}