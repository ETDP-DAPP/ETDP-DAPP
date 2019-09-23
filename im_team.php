<?php
/**
 * Created by yayue__god 
 * User: GOD
 * Date: 2019-05-27 15:48:24
 * Desc: IM战队模型
 */
namespace app\model;


class im_team extends BaseModel
{
    public $title = 'im_team';  


    public function zt()
    {
        $data=[
            '0'=>'不限制',
            '1'=>'10人以上',
            '2'=>'20人以上',
            '3'=>'30人以上',
            '4'=>'40人以上',
            '5'=>'50人以上',
            '6'=>'60人以上',
            '7'=>'70人以上',
            '8'=>'80人以上',
            '9'=>'90人以上',
            '10'=>'100人以上',
        ];
        return $data;
    }

    public function dd()
    {
        $data=[
            '0'=>'不限制',
            '1'=>'10人以上',
            '2'=>'20人以上',
            '3'=>'30人以上',
            '4'=>'40人以上',
            '5'=>'50人以上',
            '6'=>'60人以上',
            '7'=>'70人以上',
            '8'=>'80人以上',
            '9'=>'90人以上',
            '10'=>'100人以上',
        ];
        return $data;
    }
}
