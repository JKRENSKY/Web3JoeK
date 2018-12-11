
<?php include 'includes/head.php';?>

<?php include 'includes/nav.php';?> 

<div class="jumbotron2 splash" ">

</div>
<h1 class="title">CHECKOUT</h1>
<br>

    <div class="container chonk">
      

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Cartridge</h6>
                <small class="text-muted">500 ml</small>
                <small class="text-muted">CBD CBG Linalool Pinene Jack</small>
              </div>
              <span class="text-muted">$40</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Topical</h6>
                <small class="text-muted">4 oz </small>
                <small class="text-muted">CBD CBN Pinene </small>
              </div>
              <span class="text-muted">$40</span>
            </li>

            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$80</strong>
            </li>
          </ul>


        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>Austro-Hungary</option>
                  <option>Azerbaijan</option>
                  <option>Brunei</option>
                  <option>Flavour Country</option>
                  <option>Malta</option>
                  <option>Mordor</option>
                  <option>Narnia</option>
                  <option>North Korea</option>
                  <option>Skull Island</option>
                  <option>United States</option>
                  <option>Zambia</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option value="AL">Alabama (AL)</option>
                                    <option value="AK">Alaska (AK)</option>
                                    <option value="AZ">Arizona (AZ)</option>
                                    <option value="AR">Arkansas (AR)</option>
                                    <option value="CA" >California (CA)</option>
                                    <option value="CO">Colorado (CO)</option>
                                    <option value="CT">Connecticut (CT)</option>
                                    <option value="DE">Delaware (DE)</option>
                                    <option value="DE">Denile (DE)</option>
                                    <option value="DC">District Of Columbia (DC)</option>
                                    <option value="FL">Florida (FL)</option>
                                    <option value="GA">Georgia (GA)</option>
                                    <option value="HI">Hawaii (HI)</option>
                                    <option value="ID">Idaho (ID)</option>
                                    <option value="IL">Illinois (IL)</option>
                                    <option value="IN">Indiana (IN)</option>
                                    <option value="IA">Iowa (IA)</option>
                                    <option value="KS">Kansas (KS)</option>
                                    <option value="KY">Kentucky (KY)</option>
                                    <option value="LA">Louisiana (LA)</option>
                                    <option value="ME">Maine (ME)</option>
                                    <option value="MD">Maryland (MD)</option>
                                    <option value="MA">Massachusetts (MA)</option>
                                    <option value="MI">Michigan (MI)</option>
                                    <option value="MN">Minnesota (MN)</option>
                                    <option value="MS">Mississippi (MS)</option>
                                    <option value="MO">Missouri (MO)</option>
                                    <option value="MT">Montana (MT)</option>
                                    <option value="NE">Nebraska (NE)</option>
                                    <option value="NV">Nevada (NV)</option>
                                    <option value="NH">New Hampshire (NH)</option>
                                    <option value="NJ">New Jersey (NJ)</option>
                                    <option value="NM">New Mexico (NM)</option>
                                    <option value="NY">New York (NY)</option>
                                    <option value="NC">North Carolina (NC)</option>
                                    <option value="ND">North Dakota (ND)</option>
                                    <option value="OH">Ohio (OH)</option>
                                    <option value="OK">Oklahoma (OK)</option>
                                    <option value="OR">Oregon (OR)</option>
                                    <option value="PA">Pennsylvania (PA)</option>
                                    <option value="RI">Rhode Island (RI)</option>
                                    <option value="SC">South Carolina (SC)</option>
                                    <option value="SD">South Dakota (SD)</option>
                                    <option value="TN">Tennessee (TN)</option>
                                    <option value="TX">Texas (TX)</option>
                                    <option value="UT">Utah (UT)</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

     
    </div>
    <br>

<?php include 'includes/footer.php';?> 
