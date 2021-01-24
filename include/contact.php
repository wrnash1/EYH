<!-- contact DIV START -->
<div class="container text-white">
  <div class="row">
    <h4>Student Information</h4>
    <hr />
    <div id="form-div">
      <form class="was-validated">
        <div class="form-outline">
          <div class="form-row">
            <div class="col">
              <label for="name">Full Name:</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" name="name" placeholder="Full Name" required />
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <label for="address">Street Address:</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" name="address" placeholder="Home Address" required />
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <label for="city">City:</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" name="city" placeholder="City" required />
            </div>
          </div>

          <div>
            <div class="form-row">
              <div class="col">
                <label for="State">State:</label>
              </div>
              <input name="state" list="state" placeholder="State">
              <datalist id="state">
                <option value="Alabama"></option>
                <option value="Alaska"></option>
                <option value="Arizona"></option>
                <option value="Arkansas"></option>
                <option value="California"></option>
                <option value="Colorado"></option>
                <option value="Connecticut"></option>
                <option value="Delaware"></option>
                <option value="District Of Columbia"></option>
                <option value="Florida"></option>
                <option value="Georgia"></option>
                <option value="Hawaii"></option>
                <option value="Idaho"></option>
                <option value="Illinois"></option>
                <option value="Indiana"></option>
                <option value="Iowa"></option>
                <option value="Kansas"></option>
                <option value="Kentucky"></option>
                <option value="Louisiana"></option>
                <option value="Maine"></option>
                <option value="Maryland"></option>
                <option value="Massachusetts"></option>
                <option value="Michigan"></option>
                <option value="Minnesota"></option>
                <option value="Mississippi"></option>
                <option value="Missouri"></option>
                <option value="Montana"></option>
                <option value="Nebraska"></option>
                <option value="Nevada"></option>
                <option value="New Hampshire"></option>
                <option value="New Jersey"></option>
                <option value="New Mexico"></option>
                <option value="New York"></option>
                <option value="North Carolina"></option>
                <option value="North Dakota"></option>
                <option value="Ohio"></option>
                <option value="Oklahoma"></option>
                <option value="Oregon"></option>
                <option value="Pennsylvania"></option>
                <option value="Rhode Island"></option>
                <option value="South Carolina"></option>
                <option value="South Dakota"></option>
                <option value="Tennessee"></option>
                <option value="Texas"></option>
                <option value="Utah"></option>
                <option value="Vermont"></option>
                <option value="Virginia"></option>
                <option value="Washington"></option>
                <option value="West Virginia"></option>
                <option value="Wisconsin"></option>
                <option value="Wyoming"></option>
              </datalist>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="zip">Zip:</label>
          </div>
          <div class="col">
            <input class="form-control" type="number" name="zip" placeholder="Zip Code" required />
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="email">Email Address:</label>
          </div>
          <div class="col">
            <input class="form-control" type="email" name="email" placeholder="email@sample.com" required />
            <p id="text-hint">
              We don't send spam or sell your contact information to anyone.
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Contact DIV END -->