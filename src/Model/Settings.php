<?php

namespace App\Model;

class Settings
{
    public function __construct(
        private string $notifications,
        private string $theme,
        private string $language,
    ) {
    }

    public function getNotifications(): string
    {
        return $this->notifications;
    }

    public function setNotifications(string $notifications): void
    {
        $this->notifications = $notifications;
    }

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): void
    {
        $this->theme = $theme;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }
}
