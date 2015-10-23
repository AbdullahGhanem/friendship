# Laravel Friendship
This package will allow you to add a full report system into your Laravel application.

## Installation

First, pull in the package through Composer.

```js
composer require ghanem\friendship
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
    Ghanem\Friendship\FriendshipServiceProvider::class
];
```

At last you need to publish

```
php artisan vendor:publish --provider="Ghanem\Friendship\FriendshipServiceProvider" 
```

and run the migration.

```
php artisan migrate
```

## Setup a Model
```php
<?php

namespace App;

use Ghanem\Friendship\Contracts\Friendable;
use Ghanem\Friendship\Traits\Friendable as FriendableTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Friendable
{
    use FriendableTrait;
}
```

## Examples

#### Send a Friend-Request to a Model
```php
$user->befriend($userToBeFriendsWith);
```

#### Unfriend a Model
```php
$user->unfriend($userToBeFriendsWith);
```

#### Deny a Friend-Request from a Model
```php
$user->denyFriendRequest($userToBeFriendsWith);
```

#### Accept a Friend-Request from a Model
```php
$user->acceptFriendRequest($userToBeFriendsWith);
```

#### Block a Model
```php
$user->blockFriendRequest($userToBeFriendsWith);
```

#### Unblock a Model
```php
$user->unblockFriendRequest($userToBeFriendsWith);
```

#### Check if the Model has blocked another Model
```php
$user->hasBlocked($userToBeFriendsWith);
```

#### Check if one Model is blocked by another Model
```php
$user->isBlockedBy($userToBeFriendsWith);
```

#### Check if a Friendship exists between two models
```php
$user->isFriendsWith($userToBeFriendsWith);
```

#### Get a single friendship
```php
$user->getFriendship($userToBeFriendsWith);
```

#### Get a list of all Friendships
```php
$user->getAllFriendships();
```

#### Get a list of pending Friendships
```php
$user->getPendingFriendships();
```

#### Get a list of accepted Friendships
```php
$user->getAcceptedFriendships();
```

#### Get a list of denied Friendships
```php
$user->getDeniedFriendships();
```

#### Get a list of blocked Friendships
```php
$user->getBlockedFriendships();
```

#### Get a list of pending Friend-Requests
```php
$user->getFriendRequests();
```
