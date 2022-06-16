<?php

use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    protected $table = 'service';

    public static function users($service_id){
        return DB::select("select u.name, u.surname from master_service m join user u
                                      on m.master_id = u.id where m.service_id = {$service_id}");
    }

    public static function insertService($name, $price){
        Service::insert(['name'=>$name, 'price'=>$price]);
    }

}
