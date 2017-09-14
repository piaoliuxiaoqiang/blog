<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class StudentModel extends Model{
    const SEX_UN ="10";  //未知
    const SEX_BOY='20';  // 女
    const SEX_GIRL='30';  //男


    protected $table = 'student'; //连接那个表
    protected $primarKey='id';    //确定表中的主键 默认是ID
    public $timestamps = true;    //是否开启laravel 自动维护时间戳功能 默认开始
    protected $fillable=['name','age','sex']; //开启可以批量赋值的字段
    protected $guarded=[];                    //关闭批量赋值的字段
    protected function getDateFormat()        //把时间戳变成Linux时间戳
    {
        return time();
    }

    protected function asDateTime($val)      //laravel默认输出格式化好的时间 如需要输出linux时间戳则设定
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