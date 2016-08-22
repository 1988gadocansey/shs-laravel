@extends('frontend.layouts.auth_layout')

@section('content')
<div class="md-card-content large-padding" id="login_password_reset"  >

         <div class="heading_a uk-margin-large-bottom">{{ trans('labels.frontend.passwords.reset_password_box_title') }}</div>

                
                    @if (session('status'))
                        <div class="uk-alert  alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Form::open(['route' => 'auth.password.email' ]) }}

                    <div class="uk-form-row">
                        {{ Form::label('email', trans('validation.attributes.frontend.email'), [ ]) }}
                        
                            {{ Form::input('email', 'email', null, [ 'class'=>'md-input', 'required'=>'','placeholder' => trans('validation.attributes.frontend.email')]) }}
                        
                    </div><!--uk-form-row-->

                    <div class="uk-margin-medium-top">
                        
                            {{ Form::submit(trans('labels.frontend.passwords.send_password_reset_link_button'), ['class' => 'md-btn md-btn-primary md-btn-block']) }}
                         
                    </div><!--uk-form-row-->

                    {{ Form::close() }}

               

            </div><!-- panel -->
     
 
@endsection
