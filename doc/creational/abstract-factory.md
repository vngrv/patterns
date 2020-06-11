# Абстрактная фабрика (Abstract Factory) 

Порождающий паттерн, позволяющий создавать семейства связанных объектов, без привязки к конкретным классам создаваемых объектов.

## Ключевая особенность

Базируется на паттерне Фабрика и является совокупностью нескольких объектов одного семества.

## Применение

```js
class WoodenDoor {
    getDescription() {
        console.log('Я деревянная дверь');
    }
};

class IronDoor {
    getDescription() {
        console.log('Я железная дверь');
    }
};
```

```js
class Welder {
    getDescription() {
        console.log('Я устанавливаю деревянные двери');
    }
};

class Carpenter {
    getDescription() {
        console.log('Я устанавливаю железные двери');
    }
};
```

```js
class WoodenDoorFactory {
    makeDoor() {
        return new WoodenDoor();
    }

    makeFittingExpert() {
        return new Carpenter();
    }
};


class IronDoorFactory {
    makeDoor(){
        return new IronDoor()
    }

    makeFittingExpert() {
        return new Welder()
    }
};
```
## Usage

```js
woodenFactory = new WoodenDoorFactory()

door = woodenFactory.makeDoor()
expert = woodenFactory.makeFittingExpert()

door.getDescription()   // Я деревянная дверь
expert.getDescription() // Я устанавливаю деревянные двери
```
```js
ironFactory = new IronDoorFactory()

door = ironFactory.makeDoor()
expert = ironFactory.makeFittingExpert()

door.getDescription()   // Я железная дверь
expert.getDescription() // Я устанавливаю железные двери
```
