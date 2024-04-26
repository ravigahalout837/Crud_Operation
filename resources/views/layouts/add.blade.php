@include('layouts.header')
@include('components.mycss')
<form action="/store" method="post">
  @csrf
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="inputEmail4">Name</label>
        <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Enter Your Name">
      </div>
      <div class="form-group col-md-5">
        <label for="inputPassword4">Last Name</label>
        <input type="text" name="lastname" class="form-control" id="inputPassword4" placeholder="Enter Your Last Name">
      </div>
    </div>
    <div class="form-group col-md-5">
      <label for="inputAddress">Address</label>
      <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
   
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="inputCity">City</label>
        <input name="city" type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-row">
        <div class="form-group col-md-7">
          <label for="inputCity">state</label>
          <input name="state" type="text" class="form-control" id="inputCity">
        </div>
        <br>
        <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    
    </div>
  <center>  <button type="submit" class="btn btn-primary">Sign in</button> </center>
  </form>
