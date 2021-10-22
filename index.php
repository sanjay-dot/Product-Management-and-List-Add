<html>
    <head>
        <title>Mobile database</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <div class="bg-dark">
        <div class="col-sm-2 p-0"><img src="logo.png" class="img-fluid" alt=""></div>
    </div>

    <div class="container-fluid p-0">


      <div class="row p-0 m-0 ">
        <div class="col-md-8 m-0 p-1">
          <table class="table table-success table-striped" id="mytable">
          
          <thead>
            <tr>
              <th scope="col" id= model>Model Name</th>
              <th scope="col">Brand</th>
              <th scope="col">Price</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody id='mytablebody'>

          </tbody>
      </table>
        </div>

        <div id='form' class="col-md border border-1 p-0 m-0 h-100">
          
        <p class="head">Enter your mobile details</p> 

        <form id='mobile_data' method="POST" class="form-group" enctype="multipart/form-data"> 
        
          <div class="input-group mb-3">
            <span class="input-group-text" id="form_left">#</span>
            <input type="text" name="model" class="form-control" id="details"  placeholder="Model Number">
            <p id="message1"></p>
          </div>  

          <div class="input-group mb-3">
          <span class="input-group-text" id="form_left">Mobile</span>
            <input type="text" class="form-control" name="name"  id="details2" placeholder="Brand">
            <p id="message2"></p>
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="form_left">$</span>
            <input type="text" class="form-control" name="price" id="details3" placeholder="Price">
            <p id="message3"></p>
          </div>

          <label for="image"class="form-label"></label>
          <input class="form-control" id="details4" type="file" id="file" name="file"/>
          <span id="message"></span>

          <button type="submit" name="submit" id="update"  class="btn btn-primary btn-lg btn-block p-3 m-2">Update</button>
      
          </form>

          <script type='text/javascript' src="index.js"></script>
          
        </div>
      </div>
    </div>
</body>
</html>