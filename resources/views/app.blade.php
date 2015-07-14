<!DOCTYPE html>
<html lang="fa">
<head>
    <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="{{URL::to('/')}}/{{ elixir('css/all.css') }}">

    @if(isset($title))
        <title>{{ $title }}</title>
    @else
        <title>توکا</title>
    @endif

    @if(isset($styles))
        @foreach($styles as $style)
            <link rel="stylesheet" href="{{URL::to('/')}}/css/{{ $style }}">
        @endforeach
    @endif

    @yield('styles')

</head>
<body data-spy="scroll" data-target=".navbar">
<div class="container">

    @include('menu')

    <div class="margin-top-20">
        @include('flash::message')
        @yield('content')
    </div>
    @include('footer')
    @yield('footer')
</div>

<script src="{{URL::to('/')}}/{{ elixir('js/all.js') }}"></script>
@if(isset($scripts))
    @foreach($scripts as $script)
        <script src="{{URL::to('/')}}/js/{{ $script }}"></script>
    @endforeach
@endif
@yield('scripts')
<script>

    $(document).ready(function(){
        //$('.play-container').find('.caption').slideDown(200);
        $('.play-container')
                .mouseenter(function(e){
                    e.stopPropagation();
                    $(this).find('.caption').slideDown(200);
                })
                .mouseleave(function(e){
                    e.stopPropagation();
                    $(this).find('.caption').slideUp(200);
                });


        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });

        $('form input[name="delete"]').on('click', function(e){
            var $form=$(this).closest('form');

            e.preventDefault();
            $('#confirm-delete').modal('show')
                    .one('click', '#delete', function() {
                        $form.trigger('submit'); // submit the form
                    });

        });


        $('[data-toggle="tooltip"]').tooltip();

        window.fill = function(input, url){
            $('input[name='+input+']').val(url);
        }

        $(document).delegate('.editor','click', function() {
            CKEDITOR.replace( 'description',{
                filebrowserBrowseUrl : '/uploader', // eg. 'includes/elFinder/elfinder.html'
                uiColor : '#9AB8F3',
                height: 500,
                language: 'fa',
                contentsLangDirection : 'rtl'

            });

        });
        @include('scripts.search')

        @yield('jquery')

    });


    function popup(mylink, windowname)
    {
        if (! window.focus)return true;
        var href;
        if (typeof(mylink) == 'string')
            href=mylink;
        else
            href=mylink.href;
        window.open(href, windowname, 'width=950,height=420,scrollbars=yes,directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no');
        return false;
    }

    $('#video-container').resizeToParent();

    setTimeout(function(){
                $('.tt-menu').width($('.tt-menu').parent().width());
            },
            100);

    $(window).on('resize', function() {
        $('.tt-menu').width($('.tt-menu').parent().width());
    });


</script>
</body>
</html>

