window.addEventListener('DOMContentLoaded', function() {
var mas = [
     src="/wp-content/themes/A2/images/time2.png",
     src="/wp-content/themes/A2/images/time3.png",
     src="/wp-content/themes/A2/images/time4.png"
    ], i=1, a = performance.now();
function csaHead(b){
   if(b - a > 5000) {
    a = b;
    document.getElementById('javchik').style.backgroundImage="url('"+mas[i]+"')";
    i = ++i % mas.length;
  }
 
  requestAnimationFrame(csaHead);
}
function preload(images, callback) {
    if (images.length) {
        var image = new Image();
        image.onload = image.onerror = function() {
            preload(images, callback);
        };
        image.src = images.pop();
    } else {
        callback();
    }
}
preload(mas.slice(0), function(){ requestAnimationFrame(csaHead);});
 
});

