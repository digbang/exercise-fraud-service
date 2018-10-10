# Components

### Channel
* `OFFLINE`: Movements made with client presence.
* `ONLINE`: Movements made by electronic/digital means.

### Data
* `clientUniqueIdentificationCode`: Client fiscal identification.
* `movementAmount`: In cents. Positive if client is gaining that amount, negative if client is losing it.
* `date`: date and time of movement.
* `channel`: see Channel.


# Usage

```php
$data = new Data('123', 32145, new \DateTime(), Channel::offline());

$sender = new Sender();
$sender->send($data);
```
