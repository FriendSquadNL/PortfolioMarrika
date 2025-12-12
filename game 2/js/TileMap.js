export default class TileMap {
    constructor(tileSize) {
      this.tileSize = tileSize;
  
      this.yellowDot = new Image();
      this.yellowDot.src = "images/yellowDot.png";
  
      this.pinkDot = new Image();
      this.pinkDot.src = "images/pinkDot.png";
  
      this.wall = new Image();
      this.wall.src = "images/wall.png";
  
      this.powerDot = this.pinkDot;
      this.powerDotAnmationTimerDefault = 30;
      this.powerDotAnmationTimer = this.powerDotAnmationTimerDefault;
    }

    #image(fileName){
        const img = new Image();
        img.src = `images/${fileName}`;
        return img;

    }

    //0-dots
    //1-wall
    //2-pacman
    //3-ghost

    map = [
        [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,],
        [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,]

    ]

    draw(ctx) {
        this.#setCanvasSize(canvas);
        // console.log("draw");
    }


    #setCanvasSize(canvas){
        canvas.width = this.map[0].length * this.tileSize;
        canvas.height = this.map.lenght *  this.tileSize;
    }
}
