<?php

namespace DoeSangue\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'donors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filliable = [
                            'blood_type_id', 'user_id'
                            ];

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $hidden = [ 'created_at', 'updated_at', 'user_id', 'blood_type_id' ];

    protected $dates = [
      'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * Related.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Related.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bloodType()
    {
        return $this->belongsTo(BloodType::class, 'blood_type_id');
    }
}
