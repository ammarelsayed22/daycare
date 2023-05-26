
 @include('backend.inc.header')

 <div class="navbar navbar-expand-md text-danger">
     <div class="container">
       <a to="/" class='navbar-brand'>
         <div class='logo'><img src="{{ asset('assets/image/logo.jpg') }} " alt="logo" /></div>
       </a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
         <span class="navbar-toggler-icon">
       </button>
       @include('backend.inc.teacher_navbar')
     </div>
     </div>

   <div class='teacher w-100 m-auto'>

     <section class="top">
             <div>
               <h1> Teacher </h1>
               <a href="index.html">Home &gt;</a>
               <span> teacher </span>
             </div>
     </section>


    <section class='d-sm-flex d-md-flex d-lg-flex align-items-center justify-content-evenly flex-wrap mx-5'>
@foreach ( $teachers as $teacher )
       <div class='parca'>

         <div class="teacher-card">
                   <div class="header">
                    <div class="teacher-header" style="background: url('{{ asset('assets/img/teacher/' . $teacher->image) }}'); background-size: 100% 100%; background-repeat: no-repeat">
                    </div>

                     <div class="teacher-hover">
                             <p>
                                 <strong>Name:</strong>
                                 {{ $teacher->name }}
                             </p>

                             <p>
                               <strong>email  :</strong>
                               {{ $teacher->email }}
                             </p>

                             <p>
                                 <strong>telphone number:</strong>
                                 {{ $teacher->phone_number }}
                             </p>

                             <hr/>

                             <p class="mb-0">
                                 <strong>Social media Channel:</strong>
                                 <div class="social-icons m-3 pr-5 text-center">
                                   <a href="{{ $teacher->facebook }}"><span style="margin-right: 15px;margin-left: 15px;"><i class="fa-brands fa-square-facebook fa-2xl"></i></span></a>
                                   <a href="{{ $teacher->twitter }}"><span style="margin-right: 15px;margin-left: 15px;"><i class="fa-brands fa-square-twitter fa-2xl"></i></span></a>
                                   <a href="{{ $teacher->instagram }}"><span style="margin-right: 15px;margin-left: 15px;"><i class="fa-brands fa-square-instagram fa-2xl"></i></span></a>
                                 </div>
                             </p>
                         </div>
                     </div>
                 <div class="teacher-content">

                     <div class="teacher-info">
                         <h5 class="mt-3 mb-0">{{ $teacher->name }}</h5>
                         <div class="hline"></div>
                         <small>{{ $teacher->subject }}</small>
                     </div>

                 </div>
               </div>

       </div>@endforeach



    </section>

 </div>


   <div>

@include('backend.inc.teacher_footer')
