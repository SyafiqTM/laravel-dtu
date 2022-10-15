<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class Pizza extends Model
{
    use HasFactory;

    protected $table = 'pizza';
    // public $timestamps = false;

    public function add_duration($minute){
        $this->duration = $minute;
        $this->save();
    }

    public function complete(){
        $this->finished_at = Carbon::now()->addMinutes($this->duration);
        $this->save();
    }
}
