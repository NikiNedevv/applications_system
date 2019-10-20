<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container col-md-12">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="{{route('home')}}">Edmin </a>
                    <div class="col-md-12 greeting-name">
                        Wellcome {{ucfirst(Auth::user()->name)}}
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->