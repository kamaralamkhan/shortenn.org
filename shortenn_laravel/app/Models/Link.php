<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        'url',
        'clicks',
        'expires_at',
        'max_clicks',
        'is_active',
        'note',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function clickLogs()
    {
        return $this->hasMany(ClickLog::class);
    }

    public function isExpired()
    {
        return $this->expires_at && $this->expires_at->isPast();
    }

    public function hasReachedMaxClicks()
    {
        return $this->max_clicks && $this->clicks >= $this->max_clicks;
    }

    public function canRedirect()
    {
        return $this->is_active && !$this->isExpired() && !$this->hasReachedMaxClicks();
    }

    public function getShortUrl()
    {
        return url('/' . $this->code);
    }

    public function getQrCodeUrl()
    {
        return 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=' . urlencode($this->getShortUrl());
    }

    public function uniqueVisitors()
    {
        return $this->clickLogs()->distinct('ip_address')->count('ip_address');
    }
}
