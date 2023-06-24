<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Lunar\Hub\Models\Staff;

class Admin extends Staff implements HasName, FilamentUser
{
    protected $table = 'staff';

    public function getFilamentName(): string
    {
        return implode(' ', [$this->firstname, $this->lastname]);
    }

    public function canAccessFilament(): bool
    {
        return str_ends_with($this->email, '@admin.com') && $this->hasVerifiedEmail();
    }
}
