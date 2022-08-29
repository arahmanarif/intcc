<?php
include 'header/header.php';
session_start();
if(!isset($_SESSION['name'])){
  header('location:log.php');
}
?>
<section class="ssn">

<div class="container">
<h4 class="ssn-title">SSN Search</h4>
<div class="col-md-12 col-sm-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Search #</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">DOB</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
      <th scope="col">Zip</th>
      <th scope="col"># Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">New</th>
      <td><input type="text" ></td>
      <td><input type="text"></td>
      <td><input type="text" placeholder="YYYY-MM-DD"></td>
      <td><input type="text" placeholder="TX" style="width:45px;color:red"></td>
      <td><input type="text" placeholder="City"></td>
      <td><input type="text" placeholder="Zip" style="width: 60px;color:blue"></td>
      <td><button class="result" ><a href="">result</a></button></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</section>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="left-side">
                <h2 class="S-heading">Single Search</h2>
                    <ul>
                        <li>search is <b>free of charge</b></li>
                        <li>result have redacted ssn and partial DOB. phone and email</li>
                        <li>to see one full result(with SSN and etc) <b>you pay fee ($5.00)</b></li>
                        <li>you must enter at least first and last names at least one of the other filter(state,city and or they)</li>
                    </ul>
                </div>
                <div class="left-side">
                    <h2 class="S-heading">Filter</h2>
                    <ul>
                        <li><b>Name(s)</b> - space Separate first/middle/last names in any orders.</li>
                        <li><b>DOB</b> - year,year/month or year/month/day in this format.</li>
                        <li><b> State</b> - two-letter code: <em>NY.UT</em>etc.</li>
                        <li><b>City</b> - full name off city.</li>
                        <li><b>ZiP</b> - first 5 digit of a postal code.</li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
              <div class="right-side">
                <h2 class="S-heading">Bulk Search</h2>
                  <p> line format: <b><mark>First_Name | Last_Name | DOB | State | City | Zip</mark></b></p>
               <br>
               <div class="example">
                 <span>Your Result: </span>
                 <p> Cyrus | Burkard || 48108 <br>
                  Jung|Su Lee|TX|Victoria <br>
                  Sarah|Haroon|1998-06</p>

                  <p>pipes in the end can be omitted: <strong><mark>NAME|NAME|DOB|STATE</mark></strong>is the same as <strong><mark>NAME|NAME|DOB|STATE</mark></strong></p>
                  <textarea name="" id="" cols="70" rows="1"></textarea>
                  <button class="btn">Search</button>
              </div>
              </div>
            </div>
        </div>
    </div>
</section>