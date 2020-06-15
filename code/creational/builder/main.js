/**
 * Шаблон позволяет создавать различные варианты объекта без загрязнения конструктора лишним кодом.
 * Строитель нужен, если объект может существовать в разных вариациях или процесс инстанцирования состоит из нескольких шагов
 */

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

const burger = (new BurgerBuilder(14))
    .addPepperoni()
    .addCheeze()
    .addLettuce()
    .addTomato()
    .build()

console.log(burger)
/**
 * Burger {
 *  size: 14,
 *  cheeze: true,
 *  pepperoni: false,
 *  lettuce: true,
 *  tomato: true
 *  }
 */
