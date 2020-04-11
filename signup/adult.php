<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Parent/Teacher Registration</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/static/favicon.ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/static/favicon.ico/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/static/favicon.ico/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/static/favicon.ico/manifest.json">
    <link rel="mask-icon" href="/static/favicon.ico/safari-pinned-tab.svg">
    <link rel="shortcut icon" href="/static/favicon.ico/favicon.ico">
    <meta name="msapplication-config" content="static/favicon.ico/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Product Sans font -->
    <link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet'
          type='text/css'>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <!-- Bootstrap validator -->
    <script src="/static/js/validator.js"></script>
    <!-- /Bootstrap -->

    <!-- Google reCAPTHA stuff -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="/static/universal.css">
    <link rel="stylesheet" href="/static/deliverables.css">

    <!-- My JS -->
    <script src="/static/js/volunteerRegistration.js"></script>
</head>
<body class="main-body">
<nav class="navbar navbar-fixed navbar-fixed-top">

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="row">
            <div class="col col-xs-4">
                <img src="/static/twu.png" class="navbar-image-left">
            </div>
            <div class="col col-xs-4">
                
            </div>
            <div class="col col-xs-4">
                <img src="/static/eyh.png" class="navbar-image-right">
            </div>
        </div>
            
    </div>
</nav>
<div class="main-container" style="color: white;">
    <div class="container main-container">
        <br>
        <h1 id="title">Parent/Teacher Registration</h1>
        <p>Parent and teacher participation is important to the success of the conference. Thank you for making the day
            special for participants!<br>* $5 registration fee </p>
    </div>
    <!-- End Main Container -->
</div>
<div class="container main-body" style="margin-top: 2em; margin-bottom: 2em;">
    <div class="jumbotron">
        <form id="adult-registration-form" data-toggle="validator" role="form" onsubmit="return validateForm()"
              method="post" action="/signup/adult"><input type='hidden' name='csrfmiddlewaretoken' value='4XmTYJY1I9TzdRMC18AxHGTBzCcFJ94gU8e63z3R1pUWVrVl0e3F6QMocisAf1D8' />

            <fieldset>
                <legend>Parent/Teacher Information</legend>
                <div class="col-sm-offset-2">
                    <!-- First Name -->
                    <div class="form-group has-feedback" id="first-name-form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="first-name">First Name:</label>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" style="border-radius: 0.5em;" class="form-control"
                                       name="first-name" id="first-name"
                                       placeholder="First Name"
                                       data-error="Please enter your first name!" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /First Name -->

                    <!-- Last Name -->
                    <div class="form-group has-feedback" id="last-name-form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="first-name-input">Last Name:</label>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" class="form-control" name="last-name"
                                       id="last-name" style="border-radius: 0.5em;" placeholder="Last Name"
                                       data-error="Please enter your last name!" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Last Name -->

                    <!-- Start Home Address -->
                    <div class="form-group has-feedback">
                        <!-- Address Line 1 -->
                        <div class="row">
                            <div class="col-md-3">
                                <label for="emailInput">Home Address:</label>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" class="form-control" style="border-radius: 0.5em;"
                                       name="home-address-line1" id="home-address-line1"
                                       placeholder="Address Line 1"
                                       data-error="Please enter your address." required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Address Line 2 -->
                    <div class="form-group has-feedback">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" class="form-control" style="border-radius: 0.5em;"
                                       name="home-address-line2" id="home-address-line2"
                                       placeholder="Address Line 2">
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->
                    <div class="form-group has-feedback">
                        <div class="row">
                            <div class="col-md-3" style="text-align: left;">
                                <label for="city-input">City:</label>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" class="form-control" style="border-radius: 0.5em;"
                                       name="city-input" id="city-input" placeholder="City"
                                       data-error="Please enter your city!" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <div class="row">
                            <div class="col-md-3" style="text-align: left;">
                                <label for="city-input">State:</label>
                            </div>
                            <div class="col-md-6 input-group" style="text-align: left;">
                                <select class="form-control" id="state-select" name="state-select">
                                    <option value="TX">Texas</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="IA">Iowa</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MD">Maryland</option>
                                    <option value="ME">Maine</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MT">Montana</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NY">New York</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="UT">Utah</option>
                                    <option value="VA">Virginia</option>
                                    <option value="VT">Vermont</option>
                                    <option value="WA">Washington</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Zip Code -->
                    <div class="form-group has-feedback">
                        <div class="row">
                            <div class="col-md-3" style="text-align: left;">
                                <label for="zip-input">Zip:</label>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" class="form-control" style="border-radius: 0.5em;"
                                       id="zip-input"
                                       name="zip-input" placeholder="Zip Code" pattern="^\d{5}(?:[-\s]\d{4})?$"
                                       data-error="Please enter your zip code!" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->

                    <div class="form-group has-feedback">
                        <div class="row" style="margin-top: 2em;">
                            <div class="col-md-3">
                                <label for="email-input">Email Address</label>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="email" class="form-control"
                                       style="border-radius: 0.5em;"
                                       name="email-input"
                                       id="email-input"
                                       placeholder="email@sample.com"
                                       data-error="Please enter in your email!"
                                       pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"
                                       required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                                <small id="email-help" class="form-text text-muted">We don't send spam or sell your
                                    contact
                                    information to anyone.
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="school-input">School</label>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" class="form-control" style="border-radius: 0.5em;"
                                       name="school-selection" id="school-selection">
                                <small id="school-help" class="form-text text-muted">(If applicable)</small>
                            </div>
                        </div>
                    </div>

                    <!-- T Shirt sizes -->
                    <div class="form-group" id="shirt-size-selection">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="shirt-size-selection">T-Shirt Size:</label>
                            </div>
                            <div class="col-md-1">
                                <label class="custom-control custom-radio">
                                    <input id="tshirt-s-select" name="tshirt-select" type="radio"
                                           class="custom-control-input" value="tshirt-s-select" required>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">S</span>
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="custom-control custom-radio">
                                    <input id="tshirt-m-select" name="tshirt-select" type="radio"
                                           class="custom-control-input" value="tshirt-m-select" required>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">M</span>
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="custom-control custom-radio">
                                    <input id="tshirt-l-select" name="tshirt-select" type="radio"
                                           class="custom-control-input" value="tshirt-l-select" required>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">L</span>
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="custom-control custom-radio">
                                    <input id="tshirt-xl-select" name="tshirt-select"
                                           value="tshirt-xl-select" type="radio" class="custom-control-input"
                                           required>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">XL</span>
                                </label>
                            </div>
                            <div class="col-md-1">
                                <label class="custom-control custom-radio">
                                    <input id="tshirt-xxl-select" name="tshirt-select"
                                           value="tshirt-xxl-select" type="radio" class="custom-control-input"
                                           required>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">XXL</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- End t shirt sizes -->
                    <label>Please select all that apply:</label>
                    <div class="col-sm-offset-3">
                        <!-- Parent? -->
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="checkbox-parent"
                                       value="checkbox-parent" id="checkbox-parent">
                                Parent of one or more student attendees
                            </label>
                        </div>

                        <!-- Teacher? -->
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="checkbox-teacher"
                                       value="checkbox-teacher" id="checkbox-teacher">
                                Teacher of one or more student attendees
                            </label>
                        </div>

                        <!-- Girl Scout Troop Leader? -->
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="checkbox-troopleader"
                                       value="checkbox-troopleader" id="checkbox-troopleader">
                                Girl Scout Troop Leader
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <br>

            <h4 style="font-size: 125%; text-align: center;">
                <u>Adults and teachers DO NOT attend student workshops!</u>
            </h4>
            <h4 style="font-size: 100%; text-align: center;">Parents and teachers attend workshops and assist in general activities (refreshments,
                T-shirt/certificate distribution, etc.)
            </h4>
            <h4 style="font-size: 100%; text-align: center;">
                Make checks payable to <u>Expanding Your Horizons</u>.<br>Mail
                check to:<br><b>Expanding Your Horizons<br>Texas Wesleyan University<br>1201 Wesleyan St.<br>Fort Worth,
                TX 76105</b>
            </h4>
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <input type="text" style="display: none;"
                                       name="captcha"
                                       id="captcha" placeholder=""
                                       >
                    <div class="g-recaptcha pull-right" data-sitekey="6LdjZR0UAAAAALqzivOzJ8iQHpB4COBep3m3btRj
"></div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <button type="submit" id="submit" class="btn btn-lg pull-right" style="vertical-align: text-bottom">Submit</button>
                </div>
            </div>
            <br>
        </form>
    </div>
</div>
</body>
</html>
