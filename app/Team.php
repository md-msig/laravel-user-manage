<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @package App
 * @property string $team_name
*/
class Team extends Model
{
    protected $table = 'teams';
    protected $fillable = ['team_name'];

    public function members()
    {
        return $this->belongsToMany(::class, 'permission_role');
    }
}
