# Reference jQuery
$ = jQuery

# Add plugin object to jQuery
$.fn.extend

 autoBackground: (options) ->
    # Default settings
    settings =
      location: "top-left"
      target: "body"

    # Merge default settings with options.
    settings = $.extend settings, options

    this.load ->

        canvas = document.createElement("canvas")
        context = canvas.getContext("2d")
        context.drawImage(this,0,0)

        switch settings.location
            when "top-left"
            	x=0
            	y=0
            when "top-right"
            	x=0
            	y=this.width
            when "bottom-left"
            	x=this.height 
            	y=0
            when "bottom-right"
            	x=this.height
            	y=this.width

        pixel = context.getImageData(x, y, 1, 1).data
        
        #set target background
        $(settings.target).css("background","rgb("+pixel[0]+","+pixel[1]+","+pixel[2]+")");
        true

    true
