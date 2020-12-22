
// Attach a submit handler to the form
$( "#searchForm" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    term = $form.find( "input[name='nama']" ).val(),
    term1 = $form.find( "input[name='image']" ).val(),
    term2 = $form.find( "input[name='ram']" ).val(),
    term3 = $form.find( "input[name='rom']" ).val(),
    term4 = $form.find( "textarea[name='deskripsi']" ).val(),
    
    url = $form.attr( "action" );
 
  // Send the data using put
  var settings = {
  "url": url,
  "method": "PUT",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/json"
  },
  "data": JSON.stringify({"nama":term,"image":term1,"ram":term2,"rom":term3,"deskripsi":term4}),
};

$.ajax(settings).done(function (response) {
  console.log(response);
  window.location.replace('/adminpanel');
});
 
 
});
