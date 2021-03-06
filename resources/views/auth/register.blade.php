<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/img/favicons/favicon.ico">

    <title>إنشاء حساب جديد</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/fonts/fonts.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">


    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/gijgo.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/css/gijgo.min.css') }}" rel="stylesheet" type="text/css" />

  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./assets/img/Hsoub.png" alt="" style="width:  20%;">
        <h2>إملئ البيانات التالية</h2>
        <p >أدخل بياناتك في الاستمارة لإنشاء حساب جديد</p>
      </div>
      <div class="row" style="direction:  rtl;text-align:  right;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <h4 class="mb-3">المعلومات الشخصية</h4>
          <form class="needs-validation" novalidate method="POST" action="{{route('register')}}">
            @csrf
            @method('POST')
                {{csrf_field()}}
            <div class="row">
              	<div class="col-md-6 mb-3">
	                <label for="firstName" class="control-label">الاسم الأول</label>
	                <div class="form-group">
	                    <input id="firstName" type="text" class="form-control" name="first_name"  required autofocus>
	                </div>
	            </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">الاسم الأخير</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" name="last_name">
              </div>
            </div>

            <div class="mb-3" dir="ltr">
              <label for="username">اسم المستخدم</label>
              <div class="input-group  {{$errors->has('name') ? has-error : ''}}"> <!-- التصميم الخاص بالخطأ -->
                <input type="text" class="form-control" id="username" name="name" placeholder="اسم المستخدم" dir="rtl" required value="{{old('name')}}">

                <div  style="width: 100%;">
                     <!-- رسالة الخطأ الخاصة باسم المستخدم -->
                     @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{$errors->first('name')}}</strong>
                            </span> 
                     @endif
                </div>
              </div>
            </div>

    	    <div class="mb-3">
            	<div class="form-group  {{$errors->has('email') ? 'has-error' :  '' }}">  <!-- التصميم الخاص بالخطأ -->
	              <label for="email">البريد الالكتروني </label>
	              <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required>
	              <div  style="width: 100%;">
	                رجاءً أدخل عنوان بريد الكتروني صحيح
	              </div>
                    <!-- رسالة الخطأ الخاصة بالبريد الالكتروني --> 
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                        </span> 
                 @endif
              </div>
            </div>
            
            <div class="mb-3">
            	<div class="form-group {{$errors->has('password') ? 'has-error' : ''}}"> <!-- التصميم الخاص بالخطأ -->
	                <label for="password" class="control-label">كلمة المرور</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    <div  style="width: 100%;">
                      <!-- رسالة الخطأ الخاصة بكلمة المرور -->
                      @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{$errors->first('password')}}</strong>
                        </span> 
                 @endif
                    </div>  
	            </div>
	        </div>

	        <div class="mb-3">
	            <div class="form-group">
	                <label for="password-confirm" class="control-label">تأكيد كلمة المرور</label>
	                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
	            </div>
	        </div>    

            <div class="row" dir="ltr">
              <div class="col-md-12 mb-3">
                <label for="datepicker">تاريخ الميلاد</label><br>
                <input id="datepicker" width="100%" name="birth_date" />
                <div >
                  أدخل قيمة صحيحة ليوم ميلادك
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">إنشاء حساب</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 انستغرام حسوب</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
    </script>
    <script>window.jQuery || document.write('<script src="{{ asset('assets/js/vendor/jquery-slim.min.js') }}"><\/script>')</script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/holder.min.js') }}"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
