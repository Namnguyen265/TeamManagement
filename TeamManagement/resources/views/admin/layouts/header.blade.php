


  
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    
                    <div class="navbar-brand">
                        <a href="index.html" class="logo">
                            <!-- Logo icon -->
                             <b class="logo-icon">
                                 
                                <img src="{{asset('/admin/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                                
                                <img src="{{asset('/admin/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                            </b> 
                           
                            <span class="logo-text">
                                 
                                 <img src="{{asset('/admin/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                                
                                <img src="{{asset('/admin/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /> 
                            </span>
                        </a>
                    </div>
                    
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    
                    <ul class="navbar-nav float-left mr-auto">
                       
                    </ul>
                    
                    @if (Auth::check())
                    
                   
                    <img src = '{{ asset('upload/user/avatar/'. Auth::user()->avatar) }}' style="width:35px; border-radius: 50%;"> <span class="caret"></span>

                    
                
                @endif
                </div>
            </nav>
        </header>