<?php
/**
 * Created by PhpStorm.
 * User: Zjalen
 * Date: 2018/11/26
 * Time: 20:51
 */

namespace Zjalen\Leadmin\Auth\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}