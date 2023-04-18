window.addEventListener('DOMContentLoaded', function () {
  var links = document.getElementsByTagName("a");
  var content = document.getElementsByClassName("intro")[0];

  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function(event) {
      event.preventDefault();
      console.log("clicked");
      
      if (content) {
        content.classList.add("fade-out");
        console.log("start");

        setTimeout(function() {
          content.classList.remove("fade-out");
          window.location.href = event.target.href;
        }, 1000);

        console.log("done");
      }

      // perform some action here
    }, false);
  }
});
