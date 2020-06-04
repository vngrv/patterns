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


woodenFactory = new WoodenDoorFactory()

door = woodenFactory.makeDoor()
expert = woodenFactory.makeFittingExpert()

door.getDescription()  // I am a wooden door
expert.getDescription() // I can only fit wooden doors

ironFactory = new IronDoorFactory()

door = ironFactory.makeDoor()
expert = ironFactory.makeFittingExpert()

door.getDescription()  // I am an iron door
expert.getDescription() // I can only fit iron doors


