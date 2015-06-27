jQuery(document).ready(function() {
	// select the canvas element with jQuery, and set up
// a click handler for the whole canvas
$('#canvas1').click(function(e) {
    // utility function for finding the position of the clicked pixel
    function findPos(obj) {
        var curleft = 0, curtop = 0;
        if (obj.offsetParent) {
            do {
                curleft += obj.offsetLeft;
                curtop += obj.offsetTop;
            } while (obj = obj.offsetParent);
            return { x: curleft, y: curtop };
        }
        return undefined;
    }
    // get the position of clicked pixel
    var pos = findPos(this);
    var x = e.pageX - pos.x;
    var y = e.pageY - pos.y;
    // get reference to canvas element clicked on
    var canvas = this.getContext('2d');
    // return array of [RED,GREEN,BLUE,ALPHA] as 0-255 of clicked pixel
    var pixel = canvas.getImageData(x, y, 1, 1).data;
    // if the alpha is not 0, we clicked a non-transparent pixel
    // could be easily adjusted to detect other features of the clicked pixel
    if(pixel[3] != 0){
        // do something when clicking on image...
        alert("Clicked the dice!");
		
    }
});

// get reference to canvas DOM element
var canvas = $('#canvas1')[0];
// get reference to canvas context
var context = canvas.getContext('2d');

// create an empty image
var img = new Image();
// after loading...
img.onload = function() {
    // draw the image onto the canvas
    context.drawImage(img, 0, 0);
    context.drawImage(img,300, 200);
}

// set the image source (can be any url - I used data URI to keep demo self contained)
img.src ='test.png';
	
});	





