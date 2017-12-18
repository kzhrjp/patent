@extends('layouts.app')
@section('content')


    <div id="main_contents" class="clearfix">
        <div id="cb_0" class="cb_content cb_content-introduce inview-fadein">
            <div class="inner">
                <h2 class="cb_headline rich_font">お問い合わせ</h2>
            </div>
        </div>
        <div id="comments">
            <fieldset class="comment_form_wrapper" id="respond">
                <div id="cancel_comment_reply"><a rel="nofollow" id="cancel-comment-reply-link" href="/c/2017/08/01/%e3%83%ac%e3%82%a4%e3%83%86%e3%82%a3%e3%83%b3%e3%82%b0%e3%82%bf%e3%82%a4%e3%83%88%e3%83%ab/#respond" style="display:none;">返信をキャンセルする。</a></div>
                {!! Form::open(['url' => 'products',
                            'class' => 'form-horizontal',
                            'id' => 'review-input']) !!}
                <div id="comment_user_login">
                    <div id="guest_info">
                        {!! Form::label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div><!-- #comment-user-login END -->
                <div id="comment_textarea">
                    {!! Form::label('comment', 'comment:', ['class' => 'col-sm-2 control-label']) !!}
                    <textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
                </div>
                <div id="submit_comment_wrapper">
                    <input name="submit" type="submit" id="submit_comment" tabindex="5" value="確認する" title="確認する" alt="確認する" />
                </div>
                <div id="input_hidden_field">
                </div>
                {!! Form::close() !!}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


            </fieldset><!-- #comment-form-area END -->

        </div><!-- #comment end -->



    </div><!-- END #main_contents -->
@endsection