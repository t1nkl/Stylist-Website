@extends('layouts.app')


@section('title')
Контакты
@endsection


@section('style_css')
@endsection


@section('style_javascript')
<script type="text/javascript">
    jQuery('.contact-form').submit( function mailCallback( event ) {
        event.preventDefault();
        var name = $('#name').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var content = $('#content').val();
        if (name === "") {
            $('#name').addClass('form-error');
            return;
        }
        if (email === "") {
            $('#email').addClass('form-error');
            return;
        }
        if (content === "") {
            $('#content').addClass('form-error');
            return;
        }
        $.ajax({
            type: "POST",
            url: '/contact',
            data: {name: name, phone: phone, email: email, content: content, },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                $('.form-itself').slideUp();
                jQuery('.nesto-response').html('Спасибо, ваша заявка успешно оставленна.');
            },
            error: function(data){
                setTimeout(mailCallback, 2000);
            }
        });
        $('#name').removeClass('form-error');
        $('#email').removeClass('form-error');
        $('#phone').removeClass('form-error');
    });
</script>
@endsection


@section('content')

<div class="row">
    <div id="contacts"  data-offset="150" class="col-md-12 contact-form-block">
        <header class="heading">
            <h2 class="heading-txt">@lang('messages.contact.title')</h2>
            <p class="description-bl">@lang('messages.contact.descr')</p>
        </header>
        <div class="social-media">
            <a href="@lang('messages.footer.facebook')" class="sm-link-ft"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="@lang('messages.footer.instagram')" class="sm-link-ft"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="@lang('messages.footer.vk')" class="sm-link-ft"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="@lang('messages.footer.youtube')" class="sm-link-ft"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div>
        <div class="contact-form">
            <form action="javascript:mailCallback();" method="post" class="form-itself">
                <div class="contact-form1">
                    <input type="text" name="name" id="name" placeholder="Имя" required="">
                </div>
                <div class="contact-form2">
                    <input type="text" name="phone" id="phone" placeholder="Телефон" required="">
                </div>
                <div class="contact-form3">
                    <input type="email" name="email" id="email" placeholder="E-mail" required="">
                </div>
                <div class="contact-form4">
                    <textarea name="content" id="content" placeholder="Сообщение" id="" cols="30" rows="10" required=""></textarea>
                </div>
                <input type="submit" class="send-message-input" value="Отправить сообщение" >
                <div class="col-md-12">
                    <div class="form-message"></div>
                </div>
            </form>
            <div class="col-md-12" style="height:100px;">
                <div class="nesto-message">
                    <h2 class="nesto-response" id="h2"></h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
