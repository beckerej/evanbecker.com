var ct = 0;
var rubics;

function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
}

function setup() {
    CreateCanvas();
    rubics = new Rubics(75);
}

function draw() {
    background(166);
    tint(255, 127)
    normalMaterial();
    rubics.DrawUpdate();
}

function mouseDragged() {
    rubics.MouseDragged();
}

function mouseReleased() {
    rubics.MouseReleased();
}

// Helper
function CreateCanvas() {
    if (ct++ == 1)
        canv.remove(); // workaround for double setup call
    canv = createCanvas(windowWidth, windowHeight / 2, WEBGL);
    canv.parent('sketch-holder');
    //canv.style('z-index', '-1');
    //canv.position(windowWidth, windowHeight);
}

class Rubics {
    constructor() {
        this._size = 75;
        this._paddedSize = this._size-0.5;
        this._iterations = 3;
        this._isDragging = false;
        this._rotateTick = 0;
    }

    DrawUpdate() {
        this.Rotate();
        this.Iterate((i, j, k)=>{
            this.DrawBox(this.BuildPoint(i, j, k, this._size), this._paddedSize);
        });
    }

    // helper funcs
    Iterate(func, ...args) {
        for(let i = -1; i < this._iterations-1; i++){
            for(let j = -1; j < this._iterations-1; j++){
                for(let k = -1; k < this._iterations-1; k++){
                    func(i,j,k,args);
                }
            }
        }
    }

    DrawBox(pos, size) {
        push();
        translate(pos.x, pos.y, pos.z);
        //noFill();
        stroke(0);
        box(size);
        pop();
    }

    Rotate() {
        if (!this._isDragging)
            this._rotateTick++;
        rotateX(this._rotateTick * 0.002);
        rotateY(this._rotateTick * 0.002);
        rotateZ(this._rotateTick * 0.002);
    }

    BuildPoint(i, j, k, grid=1) {
        return { x: (i * grid), y: (j * grid), z: (k * grid) };
    }

    MouseDragged() {
        this._isDragging = true;
    }

    MouseReleased() {
        this._isDragging = false;
    }
}