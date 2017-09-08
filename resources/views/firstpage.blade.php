@extends('layouts.layout')
@section('content')


        <!-- Main component for call to action -->

        <div id="index-banner" class="parallax-container">
          <div class="section no-pad-bot">
            <div class="container">

              <br><br>
              <h1 class="header center teal-text text-lighten-2">NoteWeb</h1>
              <div class="row center">
                <h5 class="header col s12 light">Place To Remember</h5>
              </div>
              <div class="row center">
                <a href="{{route("notebooks.index")}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Your Memo</a>
              </div>
              <br><br>

            </div>
          </div>
          <div class="parallax fixed"><img src="image/flat.jpg" alt="Unsplashed background img 1"></div>
        </div>

        <div class="container">
            <div class="section">

              <div class="row">
                <div class="col s12 center" id="contact">
                  <h3><i class="mdi-content-send brown-text"></i></h3>
                  <h4>About</h4>
                  <p class="center light">What is this? This is the site who save your memories at work or vacation.</p>

                </div>
              </div>

            </div>
          </div>
          <footer class="page-footer teal lighten-3">
           <div class="container">
             <div class="row">
               <div class="col l6 s12">
                 <h5 class="white-text">Address</h5>
                 <p class="grey-text text-lighten-4">Cempaka Molek Street 67th Avenue, Bekasi City Indonesia</p>
               </div>
               <div class="col l4 offset-l2 s12">
                 <h5 class="white-text">Social media</h5>
                 <ul>
                        <a class="fa fa-facebook" href="facebook.com"></a>
                        <a class="fa fa-instagram" href="instagram.com"></a>
                        <a class="fa fa-twitter" href="twitter.com"></a>
                        <a class="fa fa-weibo" href="weibo.com"></a>
                 </ul>
               </div>
             </div>
           </div>
           <div class="footer-copyright">
             <div class="container center">
             © 2016 Hansol. All right reserved
             </div>
           </div>
         </footer>
@endsection
