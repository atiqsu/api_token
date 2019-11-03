<?php

namespace App\Model;

use App\AppConfig;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = AppConfig::DB_TABLE_NAME_CATEGORY;

}
