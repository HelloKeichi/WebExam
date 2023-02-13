<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_group extends Model
{
    use HasFactory;
    
    const TABLE = 'course_groups';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function createdAt(): string
    {
        return $this->created_at->format('m/d/y');
    }

    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('name', 'like', '%' . $search . '%');
    }
}
