    <!-- BLOCK DIV START -->
    <div class="container text-white">
      <div class="row">
        <h4>Student Information</h4>
        <hr />

        <!-- FORM DIV START -->
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
                    <option value="Alabama">
                    <option value="Alaska">
                    <option value="Arizona">
                    <option value="Arkansas">
                    <option value="California">
                    <option value="Colorado">
                    <option value="Connecticut">
                    <option value="Delaware">
                    <option value="District Of Columbia">
                    <option value="Florida">
                    <option value="Georgia">
                    <option value="Hawaii">
                    <option value="Idaho">
                    <option value="Illinois">
                    <option value="Indiana">
                    <option value="Iowa">
                    <option value="Kansas">
                    <option value="Kentucky">
                    <option value="Louisiana">
                    <option value="Maine">
                    <option value="Maryland">
                    <option value="Massachusetts">
                    <option value="Michigan">
                    <option value="Minnesota">
                    <option value="Mississippi">
                    <option value="Missouri">
                    <option value="Montana">
                    <option value="Nebraska">
                    <option value="Nevada">
                    <option value="New Hampshire">
                    <option value="New Jersey">
                    <option value="New Mexico">
                    <option value="New York">
                    <option value="North Carolina">
                    <option value="North Dakota">
                    <option value="Ohio">
                    <option value="Oklahoma">
                    <option value="Oregon">
                    <option value="Pennsylvania">
                    <option value="Rhode Island">
                    <option value="South Carolina">
                    <option value="South Dakota">
                    <option value="Tennessee">
                    <option value="Texas">
                    <option value="Utah">
                    <option value="Vermont">
                    <option value="Virginia">
                    <option value="Washington">
                    <option value="West Virginia">
                    <option value="Wisconsin">
                    <option value="Wyoming">
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
    </div>