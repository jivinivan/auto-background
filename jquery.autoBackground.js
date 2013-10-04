/*!
 * jQuery autoBackground Plugin
 * Original author: @jivinivan
 * Further changes, comments: @jivinivan
 * Licensed under the MIT license
 */
;(function ( $, window, document, undefined ) {
    $.fn.autoBackground = function(options) {
        //default settings
        var settings = $.extend({
            location: "top-left",
            target: "body"
        }, options );

        //draw a canvas
        this.canvas = $('<canvas/>').css({width:this[0].width + 'px', height: this[0].height + 'px'})[0];
        
        //draw image
        this.canvas.getContext('2d').drawImage(this[0], 0, 0, this[0].width, this[0].height);

        //get pixel data
        switch(settings.location)
        {
            case "top-left":
                x=0;
                y=0;
                break;
            case "top-right":
                x=0;
                y=this.width;
                break;
            case "bottom-left":
                x=this.height;
                y=0;
                break;
            case "bottom-right":
                x=this.height;
                y=this.width;
                break;
        }
        var pixel = this.canvas.getContext('2d').getImageData(x, y, 1, 1).data;
        
        //set target background
        $(settings.target).css("background","rgb("+pixel[0]+","+pixel[1]+","+pixel[2]+")");
    };
}( jQuery ));