<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    //

    public function committee_members() {
        return $this->belongsToMany('App\User', 'CommitteeMemberships')->withTimestamps();
    }

    public function committee_subscriptions() {
        return $this->belongsToMany('App\User', 'CommitteeSubscriptions')->withTimestamps();
    }


}
