<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = [
        'title',
        'description',
        'url',
        'published_at',
        'previous',
        'next',
        'series_id',
        'user_id',
    ];

    public function serie()
    {
        return $this->belongsTo(Serie::class, 'series_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function getFormattedPublishedAtAttibute(){
        return Carbon::parse($this->published_at)->format('d m Y');
    }

    function getFormattedForHumansPublishedAtAttribute(){
        return Carbon::parse($this->published_at)->diffForHumans();
    }

    function getPublishedAtTimestampAttribute(){
        return Carbon::parse($this->published_at)->timestamp;
    }

    public function getFormattedPublishedAtDate()
    {
        if ($this->published_at) {
            return date('d/m/Y H:i', strtotime($this->published_at));
        }
        return 'No publicada';
    }
}
