{{--

@php
 $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<div class="container main-menu">
    <div class="row align-items-center justify-content-between d-flex">
        <nav id="nav-menu-container">
            <span class="menu-header">Menu<i class="fa fa-list"></i></span>
            <ul class="nav-menu">
                @foreach($parentCategories as $rs)
                <li class="menu-has-children">
                    <a>{{rs->title}}></a>
                    <div class="row">
                        @if(count($rs->children))
                            @include('home.categorytree',['children'=>$rs->children])
                        @endif
                    </div>
                </li>
                @endforeach
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</div>

--}}
