 @include('backend.inc.header')

 <div class='photo'><img src={{ asset('/assets/imgs/logo.jpg') }} alt="logo" /></div>


     <div class='py-5'>
         <div class='container'>
             <div class='row'>
                 <div class='col-lg-7 mx-auto'>
                     <div class='reg-top'>
                         Already Have Account ?
                         <a href='{{ route('login') }}' class='sec-btn'>Login</a>
                     </div>
                     <div class='project-name'>Owner register </div>
                     <div class='tabs-m'>

                     </div>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                         <div class='row'>

                             <div class='col-md-6'>
                                 <div class='input-g'>
                                     <label> Name *</label>
                                     <input type='text' id="name"
                                     name="name" />
                                 </div>
                             </div>

                             <div class='col-md-6'>
                                 <div class='input-g'>
                                     <label>Daycare Id *</label>
                                     <input type='number'  name="daycare_id" id="daycare_id"  placeholder="Daycare ID" required>
                                 </div>
                             </div>

                             <div class='col-12'>
                                 <div class='input-g'>
                                     <label>Email *</label>
                                     <input id="email"
                                     type="email" name="email"  />
                                 </div>
                             </div>

                             <div class='col-12'>
                                 <div class='input-g'>
                                     <label>Password *</label>
                                     <input  id="password"
                                     type="password"
                                      name="password"  />
                                 </div>
                             </div>

                             <div class='col-12'>
                                 <div class='input-g'>
                                     <label>Confirm Password *</label>
                                     <input id="password_confirmation"
                                     type="password"
                                    name="password_confirmation"
                                                          />
                                 </div>
                             </div>

                         </div>
                         <button type='submit' class='form-btn up'>Submit</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>


   @include('backend.inc.footer')
