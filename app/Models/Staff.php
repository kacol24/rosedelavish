<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;

class Staff extends \Lunar\Hub\Models\Staff implements HasName, FilamentUser
{
    public function getFilamentName(): string
    {
        return implode(' ', [$this->firstname, $this->lastname]);
    }

    public function canAccessFilament(): bool
    {
        return str_ends_with($this->email, '@admin.com');
    }
}
