<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

enum Status:string
{
    case Uncompleted = 'uncompleted';

    case Awaiting = 'awaiting';

    case Late = 'late';

    case Verified = 'verified';
}

class Homework extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'status',
        'user_id',
        'deadline',
        'completion_timestamp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
