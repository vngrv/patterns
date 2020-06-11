# Адаптер (Adapter)

Структурный паттер, позволяющий несовместивым объектам работать вместе.

## Ключевая особенность

Паттерн подразумевает обертку на служебный объект/метод.

## Применение

```php
interface Lion
{
    public function roar();
}

class AfricanLion implements Lion
{
    public function roar()
    {
    }
}

class AsianLion implements Lion
{
    public function roar()
    {
    }
}
```

```php
class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}

class WildDog
{
    public function bark()
    {  
        var_dump("WildDog::bark()");
    }
}
```

```php
class WildDogAdapter implements Lion 
{ 
    private $_dog;
    
    public function __construct(WildDog $dog) 
    { 
        $this->_dog = $dog;
    } 
    
    public function roar() // method wrapper
    { 
        $this->_dog->bark(); 
    } 
}
```

## Usage
```php
$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);

$wildDog->bark();
$wildDogAdapter->roar();
$hunter->hunt($wildDogAdapter);
```

## Result
```php
string(15) "WildDog::bark()"
string(15) "WildDog::bark()"
string(15) "WildDog::bark()"
```