# Строитель (Builder)

Шаблон позволяет создавать различные варианты объекта без загрязнения конструктора лишним кодом.

## Когда стоит использовать?

Строитель нужен, если объект может существовать в разных вариациях или процесс инстанцирования состоит из нескольких шагов

## Применение

Коннектер к базе данных с разной вариативность входных параметров (таймауты)

```js
class Burger {
    constructor(builder) {
        this.size = builder.size;
        this.cheeze = builder.cheeze || false;
        this.pepperoni = builder.peppetoni || false;
        this.lettuce = builder.lettuce || false;
        this.tomato = builder.tomato || false;
        this.katleta = builder.katleta || true;
    }
}
```
```js
class BurgerBuilder {
    constructor(size) {
        this.size = size;
    }

    build() {
        return new Burger(this);
    }

    addPepperoni() {
        this.peppetony = true;
        return this;
    }

    addCheeze() {
        this.cheeze = true;
        return this;
    }

    addLettuce() {
        this.lettuce = true;
        return this;
    }

    addTomato() {
        this.tomato = true;
        return this;
    }
}
```
## Usage
```js
const burger = (new BurgerBuilder(14))
    .addPepperoni()
    .addCheeze()
    .addLettuce()
    .addTomato()
    .build()

console.log(burger);
```

## Result
```js
Burger {
  size: 14,
  cheeze: true,
  pepperoni: false,
  lettuce: true,
  tomato: true,
  katleta: true
}
```
