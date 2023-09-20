<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('layout/backend/') }}/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('editor/ckeditor/ckeditor.js') }}"></script>
    <script src="js/lumino.glyphs.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{asset('/')}}">Vietpro Admin</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
                                {{Auth::user()->email}} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                                
            </div><!-- /.container-fluid -->
        </nav>
            
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <ul class="nav menu">
                <li role="presentation" class="divider"></li>
                <li class="active"><a href="{{asset('admin/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
                <li><a href="{{asset('admin/product')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
                <li><a href="{{ route('category') }}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
                <li><a href="{{ route('user') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  QL USER</a></li>
                <li><a href="{{ route('orderconfirm') }}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Giỏ hàng</a></li>
                {{-- icon lấy ở đây http://www.digs.lv/templates_examples/lumino/icons.html? --}}
                <li role="presentation" class="divider"></li>
            </ul>
            
        </div><!--/.sidebar-->
    </header>
    <main>
         {{-- <aside>
            @section('sidebar')
                @include('clients.blocks.sidebar')
            @show
        </aside> --}}
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>