window.onload=function( event ) {
  event.preventDefault();
      term = document.getElementById("cau");
        var settings = {
          "url": term.className,
          "method": "DELETE",
          "timeout": 0,
          "headers": {
            "Content-Type": "application/json"
          },
        };
        $.ajax(settings).done(function (response) {
          console.log(response);
        });
      window.location.replace('/adminpanel');
     
};
