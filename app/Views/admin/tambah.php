
<!-- 
<script>
    $('#form').on('submit', function(event){

    var obj = $('form').serializeJSON();

    $.ajax({
        type: 'POST',
        url: '',
        dataType: 'json',
        data: JSON.stringify(obj),
        contentType : 'application/json',
        success: function(data) {
            alert(data)
        }
    });

    return false;
    });
</script> -->
<!-- atau -->
<!-- <form name="myform" id="myform">
    <div class="form-group">
      <label for="fullName">Name:</label>
      <input type="text" name="fullName" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="subject">Subject:</label>
      <input type="text" name="subject" class="form-control">
    </div>
    <div class="form-group">
      <label for="mark">Mark:</label>
      <input type="number" name="mark" class="form-control">
  </form>
  <button type="submit" class="btn btn-success " id="submitform">Submit</button> -->


  <!-- <script>
  $(document).ready(function () {
      $("#submitform").click(function (e) {
          var MyForm = JSON.stringify($("#myform").serializeJSON());
          console.log(MyForm);
          $.ajax(
              {
                  url: "http://localhost:3000/Phone",
                  type: "POST",
                  data: MyForm,
              });
          e.preventDefault(); //STOP default action
      });
  });
  </script> -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="" method="POST" id="form">
    <input type="text" name="first-name" id="first-name">
    <input type="text" name="last-name" id="last-name">
    <input type="submit" value="submit">
  </form>
  


<script>
    $('#form').submit(function (event) {
        event.preventDefault();
        let req = new XMLHttpRequest();
    req.onreadystatechange = () => {
    if (req.readyState == XMLHttpRequest.DONE) {
        console.log(req.responseText);
    }
    };
    $form=$(this);
    term = $form.find("input[name='first-name']" ).val();
    req.open("POST", "https://api.jsonbin.io/c", true);
    req.setRequestHeader("Content-Type", "application/json");
    req.setRequestHeader("secret-key", "$2b$10$cJuTWOPEIOfz3JZ12pNtEeXSxlVHXfB.DLtbAgBnHbxrNTxulphL2");
    req.send('{"nama": "tai"}');
    });
   
</script>
 