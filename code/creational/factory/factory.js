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
        /** 
         *
         *
         **/
    }
};


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
