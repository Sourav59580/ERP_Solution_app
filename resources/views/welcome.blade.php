@extends("template.default")


@section("title")
Wap Erp Solutions
@endsection


@section("custom-css")
<link rel="stylesheet" href="lang/css/welcome.css?cache=<?php echo time(); ?>">
@endsection


@section("custom-js")
<script src="lang/js/welcome.js?cache=<?php echo time(); ?>"></script>
@endsection


@section("content")

<div class="container shadow-lg my-4 bg-white">
  <div class="row">
    <div class="col-md-6 p-0 welcome-image">

    </div>
    <div class="col-md-6 py-5 overflow-hidden">

      <div class="branding">
        <h1>WES</h1>
        <p>WAP ERP SOLUTIONS</p>
      </div>

      <div class="welcome-form p-4">
        <form class="signup-form" autocomplete="on" action="/api/company" method="POST">
        @csrf
          <!-- start step 1 -->
          <div class="step-1">
            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">Company name</label>
              <input type="text" name="company_name" class="form-control welcome-form-input rounded-0 required company-name" placeholder="COMPANY NAME" maxlength="80" />
            </div>
            <div class="d-none form-group mb-4 overflow-hidden">
              <label class="d-none">Erp url</label>
              <input type="url" name="erp_url" class="form-control welcome-form-input rounded-0 erp_url" placeholder="ERP URL" maxlength="80" />
            </div>
            <div class="form-group mb-4 overflow-hidden d-none">
              <label class="d-none">Password</label>
              <input type="password" name="password" class="form-control welcome-form-input rounded-0 password" placeholder="PASSWORD" maxlength="10" />
            </div>

            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">Tagline</label>
              <input type="text" name="tagline" class="form-control welcome-form-input rounded-0" placeholder="TAGLINE" maxlength="95"/>
            </div>
            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">Website</label>
              <input type="website" name="website" class="form-control welcome-form-input rounded-0 url" placeholder="WEBSITE" maxlength="95"/>
            </div>

            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">Email id</label>
              <input type="email" name="company_email" class="form-control welcome-form-input rounded-0 required" placeholder="EMAIL ID" maxlength="95"/>
            </div>

            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">Founder</label>
              <input type="text" name="founder" class="form-control welcome-form-input rounded-0 required" placeholder="FOUNDER" maxlength="80"/>
            </div>

            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">Founder Email Id</label>
              <input type="email" name="founder_email" class="form-control welcome-form-input rounded-0 required" placeholder="FOUNDER EMAIL ID" maxlength="95"/>
            </div>

            <div class="form-group">
              <button type="submit" class="btn float-right next-btn step-1-next-btn">NEXT <i class="fa fa-angle-double-right"></i></button>
            </div>

          </div>
          <!-- end step 1 -->
          <!-- start step 2 -->
          <div class="step-2 d-none">
            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">Contact number</label>
              <input type="number" name="contact_number" class="form-control welcome-form-input rounded-0 required" placeholder="CONTACT NUMBER" />
            </div>

            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">Street Address</label>
              <input type="text" name="street_address" class="form-control welcome-form-input rounded-0 required" placeholder="STREET ADDRESS" />
            </div>

            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">City</label>
              <input type="text" name="city" class="form-control welcome-form-input rounded-0 required" placeholder="CITY" maxlength="80" />
            </div>

            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">State</label>
              <input type="text" name="state" class="form-control welcome-form-input rounded-0 required" placeholder="STATE" maxlength="80"/>
            </div>

            <div class="form-group mb-4 overflow-hidden">
              <label class="d-none">Country</label>
              <input type="text" name="country" class="form-control welcome-form-input rounded-0 required" placeholder="COUNTRY" maxlength="80"/>
            </div>

            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">Pincode</label>
              <input type="number" name="pincode" class="form-control welcome-form-input rounded-0 required" placeholder="PINCODE" />
            </div>

            <div class="form-group">
              <button type="submit" class="btn float-left back-btn step-2-back-btn"><i class="fa fa-angle-double-left"> </i> BACK </button>
            </div>

            <div class="form-group">
              <button type="submit" class="btn float-right next-btn step-2-next-btn">NEXT <i class="fa fa-angle-double-right"></i></button>
            </div>
          </div>
          <!-- end step 2-->
          <!-- start step 3-->
          <div class="step-3 d-none">
            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">GSTIN</label>
              <input type="text" name="gstin" class="form-control welcome-form-input rounded-0" placeholder="GSTIN" maxlength="15"/>
            </div>
            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">Ofice start at</label>
              <input type="time" name="office_starts_at" class="form-control welcome-form-input rounded-0 required" />
            </div>
            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">Ofice ends at</label>
              <input type="time" name="office_ends_at" class="form-control welcome-form-input rounded-0 required" />
            </div>
            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">Established in</label>
              <input type="date" name="company_estd" class="form-control welcome-form-input rounded-0 required" />
            </div>
            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">Facebook page url</label>
              <input type="url" name="facebook_url" class="form-control welcome-form-input rounded-0 url" placeholder="FACEBOOK PAGE URL" />
            </div>
            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">Twitter page url</label>
              <input type="url" name="twitter_url" class="form-control welcome-form-input rounded-0 url" placeholder="TWITTER PAGE URL" />
            </div>
            <div class="form-group">
              <button type="submit" class="btn float-left back-btn step-3-back-btn"><i class="fa fa-angle-double-left"> </i> BACK </button>
            </div>

            <div class="form-group">
              <button type="submit" class="btn float-right next-btn step-3-next-btn">NEXT <i class="fa fa-angle-double-right"></i></button>
            </div>
          </div>
          <!-- end step 3 -->
          <!-- start step 4-->
          <div class="step-4 d-none">
            <div class="form-group mb-5 overflow-hidden">
              <label class="d-none">What's app number</label>
              <input type="number" name="whatsApp" class="form-control welcome-form-input rounded-0" placeholder="WHATS APP NUMBER" />
            </div>
            <div class="form-group mb-5 overflow-hidden">
              <label>Category</label>
              <select class="form-control required" name="category">
                <option>Education</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn float-left back-btn step-4-back-btn"><i class="fa fa-angle-double-left"> </i> BACK </button>
            </div>

            <div class="form-group">
              <button type="submit" class="btn float-right submit-btn">SUBMIT</button>
            </div>


          </div>

          <!-- end step 4-->
        </form>
      </div>


      <div>

      </div>

    </div>
  </div>
</div>


@endsection