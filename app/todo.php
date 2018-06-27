<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
protected $table = 'tasklist';
protected $fillable = ['task', 'priority', 'complete_by', 'time_completed'];

const CREATED_AT = 'time_added';
const UPDATED_AT = 'updated_at';
}
?>
