<?php namespace App\Models;

use CodeIgniter\Model;

class ArtigosModel extends Model
{
    protected $table = 'artigos';
    protected $allowedFields = ['img_artigo', 'titulo', 'descricao_artigo'];
	
	public function getArtigos()
    {
        return $this->findAll();
    }
    public function getArtigosRecentes()
    {
        $this->orderBy('id_artigo', 'DESC');
        return $this->findAll(6);
    }
    public function newArtigo($artigo)
    {
        return $this->save($artigo);
    }
    public function deleteArtigo($id)
    {   
        $this->where('id_artigo',$id);
        return $this->delete();
    }
    public function getArtigo($id)
    {
        return $this->where('id_artigo', $id)->findAll();
    }
    public function editArtigo($id,$data)
    {
       return $this->where('id_artigo',$id)->set($data)->update();
    }
}