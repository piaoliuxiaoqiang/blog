<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class StudentModel extends Model{
    const SEX_UN ="10";  //未知
    const SEX_BOY='20';  // 女
    const SEX_GIRL='30';  //男


    protected $table = 'student';
    protected $primarKey='id';
    public $timestamps = true;
    protected $fillable=['name','age','sex'];
    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }

    public function getsex($ind = null)
    {
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男1',
            self::SEX_GIRL => '女',
        ];

        if ($ind !== null) {
            return array_key_exists($ind, $arr) ? $arr[$ind] : $arr[self::SEX_UN];
        }

        return $arr;
    }

}