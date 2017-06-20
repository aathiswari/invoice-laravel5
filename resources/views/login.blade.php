@extends ('layouts.plane')
@section ('body')
<?//https://selftaughtcoders.com/from-idea-to-launch/lesson-20/creating-a-laravel-5-blade-layout-to-standardize-your-pages-appearance/ ?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Please Sign In Meena')
               @section ('login_panel_body')
                        <form role="form" method="post" action="">
                              <!--input type='hidden' name='_token' value='".csrf_token()."'-->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>  
                                <!-- Change this to a button or input when using this as a form --
                                <a href="{{ url ('') }}" class="btn btn-lg btn-success btn-block">Login</a--->
                                     <input type='submit' name='submit' value='submit' class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
                <!--http://itsolutionstuff.com/post/how-to-create-laravel-5-widgets-example.html--->
            </div>
        </div>
    </div>
@stop