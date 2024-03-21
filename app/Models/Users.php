<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use DB;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function getAllUsers(){
        $users = DB::select('SELECT * FROM users ORDER BY create_at DESC');
        return $users;

    }

    public function addUser($data){
        DB::insert('INSERT INTO users (fullname, email, create_at) values (?, ?, ?)', $data);
    }
    public function getDetail($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id = ?', [$id]);
    }

    public function updateUser($data, $id){
        $data[] = $id;
        return DB::update('UPDATE '.$this->table.' SET fullname = ?, email=?, update_at=? WHERE id = ?', $data);
    }

    public function deleteUser($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?", [$id]);
    }

    public function statemenUser($sql){
        return DB::statement($sql);
    }

    public function learnQueryBuider(){
        DB::enableQueryLog();
        //Lấy tất cả bản ghi của table
        //$id = 20;
        //$lists = DB::table($this->table)
        //->select('fullname as hoten', 'email', 'id', 'update_at')
        //->where('id', 18)
        //->where(function ($query) use ($id){
        //   $query->where('id', '<', $id)->orWhere('id', '>', $id);
        //})
        //->where('fullname as hoten', 'like', '%rina%')
        //whereBetween('id', [18, 20])
        //->whereNotBetween('id', [18, 20])
        //->whereNotIn('id', [18, 20])
        //->whereNotNull('update_at')
        //->whereYear('create_at', '2021')
        //->whereColum('create_at', '<>', 'update_at')


        //->get();
        //->toSql();

        //Join bang
        $lists = DB::table('users')
        ->select('users.*', 'groups.name as group_name')
        ->rightJoin('groups', 'users.group_id', '=', 'groups.id')
        ->get();


        dd($lists);
        $sql = DB::getQueryLog();
        dd($sql);

        //Lấy 1 bản ghi đầu tiên của table (lấy thông tin chi tiết)
        $detail = DB::table($this->table)->first();
    }
}
