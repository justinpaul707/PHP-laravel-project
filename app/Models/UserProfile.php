<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use URL;
class UserProfile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
        'user_id',
        'gender',
        'phone_no',
        'age',
        'profile_img',
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
   {
    $filename=$this->attributes['profile_img'];
    $b_url=URL::to('/storage/');

    $path =($b_url.'/'.config('constants.userImageDestinationPath').$filename);
    return $path; 
   }
    use HasFactory;
}
