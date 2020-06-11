# Прототип (Prototype)

Порождающий паттерн, позволяющий копировать объект без подробностей реализации.

## Ключевая особенность

Базируется на магическом методе __clone(), копирующий объект/класс исходного класса с сохранением интерфейса.

## Применение 
```php
class Single
{
    public function __clone()
    {

    }
}
 
class Prototype
{
    public function getClone(Single $single)
    {
        return clone $single;
    }
}

```

## Usage

```php
$prototype = new Prototype();
$singleArray[] = $prototype->getClone(new Single());
```

## Result 
```php
array(1) {
  [0]=>
  object(Single)#3 (0) {
  }
}

```

