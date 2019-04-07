var cluster = document.getElementById("cluster");
  var avns = document.getElementById("avns");
  var looop = document.getElementById("loop");
  var mather = document.getElementById("mather");
  var title = document.getElementById("tl");
  var the42 = document.getElementById("the_42");
  var close = document.getElementById("close");
  var imgs=['cluster.jpg','D1IJ9fwWwAATUtP.jpg','D1v2rG5XcAIgIEX.jpg', 'D1klHriXcAIMqgp.jpg', 'D2DeMdSX0AER8PL.jpg', 'D0vul_VXQAAg80F.jpg', 'D1F5zR-WwAAInIA.jpg', 'D0gQKkRXgAER9aV.jpg'];
  var i = 0;

  avns.addEventListener('click', function(){
      i = i + 1 < 7 ? i + 1 : 0;
      cluster.setAttribute("src", "resources/"+imgs[i]);
  });

  looop.addEventListener('click', function(){
    mather.parentNode.removeChild(mather);
    tl.parentNode.removeChild(tl);
    javascript:document.body.contentEditable='true'; document.designMode='on'; 
    javascript:alert("The actual URL is:\t\t" + location.protocol + "//" + location.hostname + "/" + "\nThe address URL is:\t\t" + location.href + "\n" + "\nIf the server names do not match, this may be a spoof.");
    window.location.href = "https://css-tricks.com/";
});
the42.addEventListener('click', function(){
    window.location.href = "scumm.html";
});
close.addEventListener('click', function(){
    mather.parentNode.removeChild(mather);
});
  