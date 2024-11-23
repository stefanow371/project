<?php

namespace App\Repository;

use App\Model\Settings;
use App\Model\User;
use Psr\Log\LoggerInterface;

class DataRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Find all users');

        return [
            new User(
                id: 1,
                name: 'test',
                email: 'email',
                settings: new Settings(
                    notifications: 'notifications',
                    theme: 'theme',
                    language: 'language'
                )
            ),
        ];
    }

    public function findOne(int $id): ?User
    {
        foreach ($this->findAll() as $user) {
            if ($user->getId() == $id) {
                return $user;
            }
        }

        return null;
    }
}
