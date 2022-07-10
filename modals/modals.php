<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade searchedItem" id="exampleModalCenter" tabindex="" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">You searched : <label for="" class="searchedInput"></label></h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
        </button> 
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" id="closeModel" class="btn eMaloutBtn" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
<!-- SEARCH ITEMS MODAL -->
<div class="searchModal">
  <div class="contentOfModal">
    <div class="row">
      <div class="col-md-6 modalHeading">
          <h3 class="searchedItemheading">You searched : <label for="" class="searchedInput"></label>
          </h3>
      </div>
      <div class="col-md-6 closeBtn">
          <button type="button" id="closeModel" class="eMaloutBtn" data-dismiss="modal" aria-label="Close">&times;</button>
        
      </div>

      
    </div>
    <div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body searchedItemList">
        <div class="row">
          <div class="col-md-2">
            <img src="img/em-news-img/blog.png" width="100" alt="shopname">
          </div>
          <div class="col-md-10">
          <h5 class="card-title">Special title treatment</h5>
          <p class="newsOrShop">news</p>
        <p class="card-text">With supporting text below as a natural lead-in to additional content...</p>
        <a href="#" class="btn eMaloutBtn">Read More</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
    

  </div>
</div>

<!-- ADD STARTUP FORM MODAL -->
<div class="addStartupModal">
  <div class="submitFormContent">
    <div class="row">
      <div class="col-md-6 modalHeading">
          <h3 class="searchedItemheading">Add Your Business</h3>
      </div>
      <div class="col-md-6 closeBtn">
          <button type="button" id="closeAddFormModal" class="eMaloutBtn" data-dismiss="modal" aria-label="Close">&times;</button>
      </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control"  name="businessName" id="" placeholder="Business Name">
        </div>
        <div class="col-md-6">
          <input type="number" class="form-control" name="businessMobileNumber" id="" placeholder="Business Mobile Number">
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="ownerName" id="" placeholder="Owner Name">
        </div>
        
        <div class="col-md-6">
          <input type="number" class="form-control" name="ownerMobileNumber" id="" placeholder="Owner Mobile Number">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <input type="email" class="form-control" name="emailAddress" id="" placeholder="Email Address">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
            <!-- <input type="text" class="form-control" id="ownerName" placeholder="Owner Name"> -->
          <h5 class="formTitles">Upload Images:</h5>
            
          </div>
          <div class="col-md-4">
          <input type="file"  id="" name="image1[]" multiple accept=".jpg,.png,.jpeg">
          </div>
          
          
      <div class="row">
        <div class="col-md-4 ">
            <!-- <input type="text" class="form-control" id="ownerName" placeholder="Owner Name"> -->
          <h5 class="formTitles">Upload Visiting Card:</h5>
            
          </div>
          <div class="col-md-4">
            <!-- <input type="text" class="form-control" id="ownerName" placeholder="Owner Name"> -->
          <!-- <h5 class="formTitles">Add Your Startup</h5> -->
          <input type="file" name="visitingCards" class="" id=""/>
          
            
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <!-- <input type="text" class="form-control" id="ownerName" placeholder="Owner Name"> -->
            <select class="form-select" name="categoryName" aria-label="">
              <option selected>Select Category</option>
              <option value="anythingonrentorgs">Any thing on rent</option>
              <option value="Automotive">Automotive</option>
              <option value="Booking">Booking</option>
              <option value="Daily Needs">Daily Needs</option>
              <option value="Doctory & Medical">Doctory & Medical</option>
              <option value="Education">Education</option>
              <option value="Garment & Fashions">Garment & Fashions</option>
              <option value="Health & Beauty">Health & Beauty</option>
              <option value="Home & office Needs">Home & office Needs</option>
              <option value="Hotel & Restaurant">Hotel & Restaurant</option>
              <option value="On Demand Service">On Demand Service</option>
              <option value="Personal">Personal</option>
              <option value="Services">Services</option>
              <option value="Shop & Store">Shop & Store</option>
              <option value="Showroom">Showroom</option>
              <option value="Wedding">Wedding</option>
            </select>
          </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
            <!-- <input type="submit" class="eMaloutBtn" id="ownerName" placeholder="Owner Name"> -->
            <h5 class="formTitles">
                  Features:
            </h5>
          </div>
      </div>
      <div class="row" style="text-align:left;">
        <div class="col-md-3">
            <input type="checkbox" value = "24/7 Service" name="feature[]" id=""><label for="" class="featuresLabel">24/7 Service</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="Air Conditioner " ><label for="" class="featuresLabel">Air Conditioner</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="Billing Invoices"><label for="" class="featuresLabel">Billing Invoices</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="Credit Card" ><label for="" class="featuresLabel">Credit Card</label>            
          </div>
      </div>
      <div class="row" style="text-align:left;">
        <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="EMI"><label for="" class="featuresLabel">EMI</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value ="Fresh Stock"><label for="" class="featuresLabel">Fresh Stock</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="Parking"><label for="" class="featuresLabel">Parking</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="PayTM" ><label for="" class="featuresLabel">PayTM</label>            
          </div>
      </div>
      <div class="row" style="text-align:left;">
        <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value ="Phone Helpline"><label for="" class="featuresLabel">Phone Helpline</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="Product Demo"><label for="" class="featuresLabel">Product Demo</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="Quick Service" ><label for="" class="featuresLabel">Quick Service</label>            
          </div>
          <div class="col-md-3">
            <input type="checkbox" name="feature[]" id="" value="Waiting Room" ><label for="" class="featuresLabel">Waitting Room</label>            
          </div>
      </div>
      <div class="row" style="text-align:left;">
        <div class="col-md-4">
            <input type="checkbox" name="feature[]" id="" value="Free Home Delivery"><label for="" class="featuresLabel">Free Home Delivery</label>            
          </div>
         
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
            <!-- <input type="submit" class="eMaloutBtn" id="ownerName" placeholder="Owner Name"> -->
            <h5 class="formTitles">
                  Opening Hours:
            </h5>
          </div>
      </div>
      <div class="row " style="text-align:left;">
        <div class="col-md-4">
          <h6>Days</h6>
        </div>
        <div class="col-md-4">
          <h6>Opening Time</h6>
        </div>
        <div class="col-md-4">
          <h6>Closing Time</h6>
        </div>
        
      </div>
      <div class="row" style="text-align:left;">
         <div class="col-md-3">
           <input type="checkbox" value="Monday" name="mondayTiming[]" class="monday" id=""><Label for="monday">Monday</Label>
         </div>
         <div class="col-md-4">
           <input type="time" name="mondayTiming[]" class="form-control" id="">
         </div>
         <div class="col-md-4">
           <input type="time" name="mondayTiming[]" class="form-control" id="">
         </div>
      </div>
      <div class="row" style="text-align:left;">
         <div class="col-md-3">
           <input type="checkbox" value="Tuesday" name="tuesdayTiming[]" class="tuesday" id=""><Label for="tuesday">Tuesday</Label>
         </div>
         <div class="col-md-4">
           <input type="time" name="tuesdayTiming[]" class="form-control" id="">
         </div>
         <div class="col-md-4">
           <input type="time" name="tuesdayTiming[]" class="form-control" id="">
         </div>
      </div>
      <div class="row" style="text-align:left;">
         <div class="col-md-3">
           <input type="checkbox" value="Wednesday" name="wednesdayTiming[]" class="Wednesday" id=""><Label for="wednesday">Wednesday</Label>
         </div>
         <div class="col-md-4">
           <input type="time"  name="wednesdayTiming[]" class="form-control" id="">
         </div>
         <div class="col-md-4">
           <input type="time" name="wednesdayTiming[]" class="form-control" id="">
         </div>
      </div>
      <div class="row" style="text-align:left;">
         <div class="col-md-3">
           <input type="checkbox" value="Thursday" name="thursdayTiming[]" class="Thursday" id=""><Label for="Thursday">Thursday</Label>
         </div>
         <div class="col-md-4">
           <input type="time" name="thursdayTiming[]" class="form-control" id="">
         </div>
         <div class="col-md-4">
           <input type="time" name="thursdayTiming[]" class="form-control" id="">
         </div>
      </div>
      <div class="row" style="text-align:left;">
         <div class="col-md-3">
           <input type="checkbox" value="Friday" name="fridayTiming[]" class="Friday" id=""><Label for="friday">Friday</Label>
         </div>
         <div class="col-md-4">
           <input type="time" name="fridayTiming[]" class="form-control" id="">
         </div>
         <div class="col-md-4">
           <input type="time" name="fridayTiming[]" class="form-control" id="">
         </div>
      </div>
      <div class="row" style="text-align:left;">
         <div class="col-md-3">
           <input type="checkbox" value ="Sunday" name="saturdayTiming[]" class="Saturday" id=""><Label for="saturday">Saturday</Label>
         </div>
         <div class="col-md-4">
           <input type="time" name="saturdayTiming[]" class="form-control" id="">
         </div>
         <div class="col-md-4">
           <input type="time" name="saturdayTiming[]" class="form-control" id="">
         </div>
      </div>
      <div class="row" style="text-align:left;">
         <div class="col-md-3">
           <input type="checkbox" value="Sunday" name="sundayTiming[]" class="sunday" id=""><Label for="sunday">Sunday</Label>
         </div>
         <div class="col-md-4">
           <input type="time" name="sundayTiming[]" class="form-control" id="">
         </div>
         <div class="col-md-4">
           <input type="time" name="sundayTiming[]" class="form-control" id="">
         </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <textarea name="description" class="form-control" placeholder="Description" id="" cols="30" rows="5"></textarea>
        </div>
      </div>

<hr>
      <div class="row">
        <div class="col-md-12">
            <!-- <input type="submit" class="eMaloutBtn" id="ownerName" placeholder="Owner Name"> -->
            <h5 class="formTitles">
                  Location:
            </h5>
          </div>
      </div>
      <div class="row">
        <div class="col-6">
          <input type="text" name ="city" class="form-control" id="cityName" value="Malout" placeholder="City">
        </div>
        <div class="col-6">
          <input type="text" name="distt" class="form-control" id="distName" value="Sri Muktser Sahib" placeholder="District">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          </div>
        </div>
        
        <textarea name="address" class="form-control" placeholder="Address" id="" cols="30" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 submitBtn">
            <input type="submit" name="addBusiness" class="eMaloutBtn" value="Submit" id="ownerName" placeholder="Owner Name">
          </div>
      </div>
    </form>

   
  </div>
</div>
    

  </div>
</div>
<!-- Uploading business form backend file -->

<?php require_once "./backend/uploadBusiness.php"; ?>


<!-- ADMIN LOGIN FORM MODAL -->

<div class="adminLoginFromModal">
  <div class="contentOfModal loginFormContent">
    <div class="row">
      <div class="col-md-6 modalHeading">
          <h3 class="searchedItemheading">Login</h3>
      </div>
      <div class="col-md-6 closeBtn">
          <button type="button" id="closeAdminFormModal" class="eMaloutBtn" data-dismiss="modal" aria-label="Close">&times;</button>
        
      </div>

      
    </div>
 <form method="post"  class="adminloginForm">
  <div class="mb-3">
    <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
    <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
  </div>
  <div class="mb-3 ">
  <select class="form-select" aria-label="Default select example">
  <option selected>Select User</option>
  <option value="Admin">Admin</option>
  <option value="Channel">Channel</option>
</select>
  </div>
  <button type="button" id="adminLoginBtn" class="btn eMaloutBtn">Submit</button>
</form> 
  </div>
</div>
    

  </div>
</div>


<!-- loading screen MODAL -->
<div class="loadingScreenModal">
  <div class="modalImage">
  <img src="img/loading/loading-96.gif"/>
    
    <!-- <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
  </div>
</div>







