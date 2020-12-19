<?=$this->extend('layout/template');?>
<?=$this->section('content');?>  
 <h2>Add Produk</h2>
<form action="https://phoneapideny.herokuapp.com/Phone" id="searchForm">
  <input type="text" name="nama" placeholder="Name" required></br>
  <input type="text" name="image" placeholder="link image" required></br>
  <input type="text" name="ram" placeholder="ram" required></br>
  <input type="text" name="rom" placeholder="rom" required></br>
  <textarea name="deskripsi"placeholder="deskripsi" required></textarea>
  <input type="submit" value="Submit">
</form>
<!-- the result of the search will be rendered inside this div -->
<div id="result"></div>
 
<script>
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
 
  // Send the data using post
  var posting = $.post( url, { nama: term ,image: term1 ,ram: term2 ,rom: term3,deskripsi:term4} );
 
  // Put the results in a div
  posting.done(function( data ) {
    // var content = $( data ).find( "#content" );
    // $( "#result" ).empty().append( content );
    alert("Sukses");
  });
});
</script>
 
