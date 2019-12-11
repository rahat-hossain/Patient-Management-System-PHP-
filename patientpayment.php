<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PAYMENT</title>
</head>
<body>

 
    <div class="container">
        <div class="card">
        <div class="card-body" style="background-color:#D6EAF8">
            <div class="row">
                <div class="col-md-1">
            <a href="padmin-panel.php" class="btn btn-light"> Go Back</a>

        </div>
        
        <div class="col-md-11" style="text-align: right">
            <a href="allsignup.php" class="btn btn-light"> LOG OUT </a>
            
    </div>
</div>
</div>
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;text-align: center;">
          <h1>Payment</h1>
   
</div>
<br><br>
<section>
<form id=payment>
    <fieldset>
        <ol>
            <li>
                <label for=name>Name</label>
 
                <input id=name name=name type=text placeholder="First and last name" required autofocus />
            </li>
            <li>
                <label for=email>Email</label>
                <input id=email name=email type=email placeholder="example@domain.com" required />
            </li>
            <li>
                <label for=phone>Phone</label>
                <input id=phone name=phone type=tel placeholder="Eg. +14445556666" required />
            </li>
        </ol>
    </fieldset>

    <fieldset>
        <legend>Card Details</legend>
        <ol>
            <li>
            <fieldset>
                <legend>Card Type</legend>
                <ol>
                    <li>
                        <input id=visa name=cardtype type=radio />
                        <label for=visa>bKash</label>
                    </li>
                    <li>
                        <input id=amex name=cardtype type=radio />
                        <label for=amex>Credi-Card</label>
                    </li>
                  
                </ol>
            </fieldset>
            </li>
            <li>
                <label for=cardnumber>Card Number</label>
                <input id=cardnumber name=cardnumber type=number required />
            </li>
            <li>
                <label for=secure>Security Code</label>
                <input id=secure name=secure type=number required />
            </li>
            <li>
                <label for=namecard>Name on Card</label>
                <input id=namecard name=namecard type=text placeholder="Exact namne as on the card" required />
            </li>
        </ol>
    </fieldset>
    <fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>
</section>


<div class="col-md-1"></div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>