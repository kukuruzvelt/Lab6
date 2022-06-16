<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'user';

    public static function services($user_id){
        return DB::select("select s.name, s.price from master_service m join service s
                                      on m.service_id = s.id where m.master_id = {$user_id}");
    }

    public static function insertUser($name, $surname){
        User::insert(['name'=>$name, 'surname'=>$surname]);
    }


}
