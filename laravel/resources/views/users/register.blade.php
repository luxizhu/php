/**
 * Created by PhpStorm.
 * User: xizhu
 * Date: 16-9-21
 * Time: 下午10:30
 */
{{Form::open(array('url'=>'users/create','class'=>form-signup))}}
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">welcome register</h3>
                </div>
                <div class="panel-body">
                    {{Form::open(array('url'=>'users/create','class'=>'form-signup'))}}
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    <fieldset>
                        <div class="form-group">
                            {{Form::text('username',null,array('class'=>'form-control','placeholder'=>'username'))}}
                        </div>
                        <div class="form-group">
                            {{Form::text('email',null,array('class'=>'form-control','placeholder'=>'email'))}}
                        </div>
                        <div class="form-group">
                            {{Form::text('password',array('class'=>'form-control','placeholder'=>'password'))}}
                        </div>
                        <div class="form-group">
                            {{Form::text('password_confirmation',array('class'=>'form-control','placeholder'=>'ensurePassword'))}}
                        </div>
                        {{Form::submit('submit',array('class'=>'btn btn-large btn-success btn-block'))}}
                    </fieldset>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>