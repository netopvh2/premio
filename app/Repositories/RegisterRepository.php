<?php
/**
 * Created by PhpStorm.
 * User: angelo.neto
 * Date: 20/06/2017
 * Time: 18:06
 */

namespace App\Repositories;
use Illuminate\Support\Facades\DB;


class RegisterRepository
{

    public function create(array $attributes)
    {

        $count = DB::table('FIEJORNALISMO')->where('CPF',$attributes['CPF'])->get();

        if (count($count) >= 1){
            return false;
        }

        $data =[];
        foreach ($attributes as $key => $value){
            if ($key == '_token'){
                unset($key);
            }elseif ($key == 'EMAIL'){
                $data[$key] = $value;
            }elseif ($key == 'EMPEMAIL'){
                $data[$key] = $value;
            }
            else{
                $data[$key] = strtoupper($value);
            }
        }

        DB::table('FIEJORNALISMO')->insert($data);

        return true;

    }
    
}