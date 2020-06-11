# Одиночка (Singleton)

Одиночка (Singleton, Синглтон) - порождающий паттерн, который гарантирует, что для определенного класса будет создан только один объект, а также предоставит к этому объекту точку доступа.

## Ключевая особенность

Приватный конструктор и проверка на существование инстанса класса (ООП).
Статичный метод getInstance() возвращает единственный экземпляр класса

## Применение

Коннектор к базе данных в едином эндпоинте

```php
class Singleton {
    public $data;
    private static $instance = null;

    public function __construct() {
        $this->data = rand();
    }

    private static function getInstance() {
        if(is_null(self::$instance)) {
            self::$instance = new self:
        }
    }
}
```
```js
class Singleton = {
    data: Math.random(),
    getInstance() {
        return this;
    }
};
```

## Usage

```php
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

var_dump($singleton1);
var_dump($singleton2);
```
```js
let object1 = Singleton.getInstance();
let object2 = Singleton.getInstance();

console.log(object1);
console.log(object2);
```

## Result

```
object(Singleton)#1 (1) {
  ["data"]=>
  int(532791758)
}
object(Singleton)#1 (1) {
  ["data"]=>
  int(532791758)
}
```

```
{ data: 0.7496542053983359, getInstance: [Function: getInstance] }
{ data: 0.7496542053983359, getInstance: [Function: getInstance] }
```

