# gamee/nette-rabbitmq-example

## Install dependencies

```
composer install
```

## How to add data to queue

```
$ php bin/producer
```

## How to consume queue items

```
$ php bin/console rabbitmq:consumer myConsumer 10
```
