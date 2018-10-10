# Usage

```php
$data = new Data('123', 32145, new \DateTime(), Channel::offline());

$sender = new Sender();
$sender->send($data);
```
