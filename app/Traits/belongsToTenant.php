<?php

namespace App\Traits;

trait BelongsToTenant {


    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    // protected static function booted(){
    //     static::addGlobalScope('tenant', function($query){
    //         $tenant = app()->make('tenant.active');
    //         $query->where('tenant_id',$tenant->id);
    //     });
    // }

    public static function bootBelongsToTenant (){
        static::addGlobalScope('tenant', function($query){
            $tenant = app()->make('tenant.active');
            $query->where('tenant_id',$tenant->id);
        });
    }


}