<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Models\User;
use App\Models\Company;


class Document extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'documents';

    protected $guarded = [];

    public function getAuthorAttribute($value) {
        $author = User::find($this->user_id);
        return $author->name.' '.strtoupper($author->lastname);
    }







    // protected function bedel(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => number_format($value, 2, ',', '.'),
    //         set: fn (string $value) => $value,
    //     );
    // }

    public function getBedelFormattedAttribute($value) {
        return number_format($this->bedel, 2, ',', '.');
    }





}
