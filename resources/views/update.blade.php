@extends('layouts.app1')

@section('content')

  <div class="c-wrapper c-fixed-components">
    <div class="c-body">
      <main class="c-main">
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow" style="float:right;position: relative;top: -80%;width: 64rem;left: 23rem;right: 11rem;">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">My account</h3>
                  </div>
                  {{-- <div class="col-4 text-right">
                    <a href="#!" class="btn btn=sm btn-primary">Edit</a>
                    <a href="#!" class="btn btn-sm btn-primary">Cancel</a>
                  </div> --}}
              <form action="/update" method="POST" enctype="multipart/form-data"> 
                @csrf 
                  {{-- <div class="form-row-last">
                    <input type="submit" name="action" class="register" value="update">
                    <input type="submit" name="action" class="register" value="cancel"  style="text-align:center;">
                    
                  </div> --}}
                  
                </div>
              </div>
              <div class="card-body">
                
                 
                   <input type='hidden' name='id' value="{{$user['id']}}">  
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                   <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">Your name</label>
                          <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" name="name" value="{{$user['name']}}">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Email address</label>
                          <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" name="email" value="{{$user['email']}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Your Address</label>
                          <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Address" name="Address" value="{{$user['Address']}}">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Gender</label>
                          <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Gender" name="Gender" value="{{$user['Gender']}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-last-name">Image</label>
                              {{-- <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse"> --}}
                              <input type="file" name="image" id="image" placholder="Your image" >
                            </div>
                          </div>
                      
                        
                    </div> 


                  </div>
                </form>  
                  <!-- <hr class="my-4">
                     Address -->
                  {{-- <h6 class="heading-small text-muted mb-4">Contact information</h6> --}}
                  <div class="pl-lg-4">
                    {{-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-address">Address</label>
                          <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                        </div>
                      </div>
                    </div> --}}
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
                
              </div>
              <div class="card-footer bg-white border-0 " style="padding:0.75rem 1.25rem;margin: 0rem -1.25rem -1.25rem -1.25rem;">
                  <div class="row align-items-center">
                    <div class="form-row-last offset-5">
                      <button class="btn btn-primary mr-2" type="submit" name="action" class="register" value="update">update</button>
                      <button class="btn btn-primary" type="submit" name="action" class="register" value="cancel"  style="text-align:center;">cancel</button>
                      {{-- <button type="submit" name="register" class="register" style="padding:14px">Cancel</button>  --}}
                    </div>
                  </div>                  
              </div>
            </div>
          </div>
        </div>
        
      </main>
      <footer class="c-footer">
        <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
        <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
      </footer>
    </div>
  </div>
@endsection
