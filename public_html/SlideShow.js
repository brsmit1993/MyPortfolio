function overlayOn(e) {
	var comp = e.querySelector("img.slideshow-image");
	document.getElementById("OverlayImage").src = comp.src;
	document.getElementById("ProjectOverlay").style.display = "block";
}

function overlayOff() {
	document.getElementById("ProjectOverlay").style.display = "none";
}