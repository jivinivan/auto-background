autoBackground = (element) ->
	c = document.getElementById(element);
	ctx = c.getContext("2d");
	img = document.getElementById("preview");
	ctx.drawImage(img, 10, 10);

	pixel = context.getImageData(x, y, 1, 1).data
