<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_configuration extends Model
{
    //����� ������ ����-��-������ � ������� ��� �������� ��������
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
