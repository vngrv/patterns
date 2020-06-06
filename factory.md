# Фабрика (Factory)

Порождающий паттерн проектирования, который определяет общий интерфейс для создания объектов в суперклассе, позволяя подклассам изменять тип создаваемых объектов.

## Ключевая особенность 
* Продукт определяет общий интерфейс объектов, которые может произвести создатель и его подклассы 

* Конкретные продукты содержат код различных продуктов. Продукты будут отличаться реализацией, но интерфейс у них будет общий

* Создатель объявляет фабричный метод, который должен возвращать новые объекты продуктов. Важно, чтобы тип результата совпадал с общим интерфейсом продуктов.

## Применение

* Система должна оставаться расширяемой путем добавления объектов новых типов. Непосредственное использование выражения new является нежелательным, так как в этом случае код создания объектов с указанием конкретных типов может получиться разбросанным по всему приложению.
* Заранее известно, когда нужно создавать объект, но неизвестен его тип.

```js
class TailFactory {
    constructor(props) {
        this.tailLenght = props.tailLength;
    }
};

class TorsoFactory {
    constructor() {
        this.color = props.color;
    }
};

class HeadFactory {
    constuctor(props) {
        this.snoutLenth = props.snotLenth;
    }
};
```
```js
class ReptilePartFactory {
    consructor(type, props) {
        if(type === 'tail') {
            return new TailFactory(props);
        }
        if(type === 'torso') {
            return new TorsoFactory(props);
        }
        if(type === 'head') {
            return new HeadFactory(props);
        }
    }
};
```

## Usage 

```js 
let alligator = {};
let alligatorProps = {
    tailLength : 2.5,
    color: "green",
    shoutLenth: 1
};

alligator.tail  = new ReptilePartFactory('tail',  alligatorProps);
alligator.torso = new ReptilePartFactory('torso', alligatorProps);
alligator.head  = new ReptilePartFactory('head',  alligatorProps);

console.log(alligator);
```
## Result 

```
{
  tail: ReptilePartFactory {},
  torso: ReptilePartFactory {},
  head: ReptilePartFactory {}
}
```

