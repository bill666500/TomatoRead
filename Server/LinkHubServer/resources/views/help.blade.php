@extends('_layouts.app')


@section('content')
    <div class="ui main container">

        <div class="ui segments">
            <div class="ui  segment">
                Chrome插件
            </div>
            <div class="ui yellow segment">
                分享
            </div>
            <div class="ui yellow segment">
                主题
            </div>

        </div>




        <!-- 多说评论框 start -->
        <div class="ds-thread" data-thread-key="help" data-title="帮助" data-url="{{url('help')}}"></div>
        <!-- 多说评论框 end -->
        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
        <script type="text/javascript">
            var duoshuoQuery = {short_name:"linkhub"};
            (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';ds.async = true;
                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0]
                || document.getElementsByTagName('body')[0]).appendChild(ds);
            })();
        </script>
        <!-- 多说公共JS代码 end -->


    </div>

@endsection