@extends('layouts.app2')

@section('content')

  
        
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow" style="float:right;width:980px; position: relative;top: -80%;left:50%">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">My account</h3><br>
                    <a href="profile/itemform" class="btn btn-sm btn-primary">Add items</a>
                  </div>
                  <div class="col-4 text-right">
                    <a href="{{"edit/".$user['id']}}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="/logout" class="btn btn-sm btn-primary">Logout</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form>
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">Your name</label>
                          <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" style="background-color: white" value="{{$user['name']}}" readonly>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Email address</label>
                          <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" style="background-color: white" value="{{$user['email']}}" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Gender</label>
                          <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="{{$user['Gender']}}" style="background-color: white" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <hr class="my-4">
                     Address -->
                  <h6 class="heading-small text-muted mb-4">Contact information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-address">Address</label>
                          <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="{{$user['Address']}}" type="text" style="background-color: white" readonly>
                        </div>
                      </div>
                    </div>
               <!--<div class="row">
                      <div class="col-lg-4">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-city">City</label>
                          <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-country">Country</label>
                          <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-country">Postal code</label>
                          <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                   Description -->
                  <!-- <h6 class="heading-small text-muted mb-4">About me</h6>
                  <div class="pl-lg-4">
                    <div class="form-group focused">
                      <label>About Me</label>
                      <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                    </div>
                  </div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
     
@endsection
