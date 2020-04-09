<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TeamMembers
 *
 * @package App
 * @property string $team_name
*/
class TeamMembers extends Model
{
    protected $table = 'team_members';
    protected $fillable = ['team_id', 'user_id'];
}
