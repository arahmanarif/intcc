<?php
include 'header/header.php';
if(!isset($_SESSION['name'])){
  header('location:log.php');
}
?>
<section class="banner">
    <img src="img/index.jpg">
    <div class="container">
        <div class="row">
            <h2 class="profit">We Work For Your Profit</h2>
        </div>
    </div>
</section>
<section class="ALert">
    <div class="container">
        <div class="alert-area">
                <h6>Greetings friends and welcome to UNICCSHOP <br>
                  Your account is inactive at the moment. <br>
                  You can't observe available materials and use service in full. <br>
                  Please top up the account for 100$ for New Activation. <br></h6>
              </div>
    </div>
    
</section>

<section class="payment">
      <div class="container">
        <div class="col-md-12 col-sm-12">
        <div class="row">
            <div class="col-md-4 col-sm-4 ">
              <div class="paymet-box">
                <div class="p-heading">
                  <h2>LTC</h2>
                  <span class="p-span">Litecoin address to transfer funds:</span>
                 
                  <div class="alert alert-block alert-success pAddress" id="ltcAddressBlock"><p>MNEhULCqGFQD4DjAnjJNKQKjwTp8g354TQ</p></div>
                  <span class="Bns">After more than 1k$+ topup, you will get 10% bonus!</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
              <div class="paymet-box">
                <div class="p-heading">
                  <h2>DOGE</h2>
                  <span class="p-span">Dogecoin address to transfer funds:</span>
                 
                  <div class="alert alert-block alert-success pAddress" id="ltcAddressBlock"><p>D7rGP5exSR8Wu2jMguUBu8QDqArNF72SR7</p></div>
                  <span class="Bns">After more than 1k$+ topup, you will get 10% bonus!</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
              <div class="paymet-box">
                <div class="p-heading">
                  <h2>BTC</h2>
                  <span class="p-span">Bitcoin address to transfer funds:</span>
                 
                  <div class="alert alert-block alert-success pAddress" id="ltcAddressBlock"><p>3BCYZzsCt5sTecD5deLnLVXPVonZMsgh5u</p></div>
                  <span class="Bns">After more than 2k$+ topup, you will get 20% bonus!</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4 ">
                <div class="paymet-box">
                  <div class="p-heading">
                    <h2>ETH</h2>
                    <span class="p-span">Ethereum address to transfer funds:</span>
                   
                    <div class="alert alert-block alert-success pAddress" id="ltcAddressBlock"><p>0x6de32427D11D665EB4a57BE93AD5B9586A682E1B</p></div>
                    <span class="Bns">After more than 1k$+ topup, you will get 10% bonus!</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>