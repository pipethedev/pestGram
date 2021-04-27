{% block header %}
    <!-- header -->
    <header class="header my-8">
        <!-- container -->
        <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
            <!-- header wrapper -->
                <div class="header-wrapper flex items-center justify-between">

                    <!-- header logo -->
                    <div class="header-logo">
                        <h1 class="font-semibold text-black leading-relaxed"><a href="/">PestGram</a></h1>
                    </div>

                    <!-- mobile toggle -->
                    <div class="toggle md:hidden">
                        <button @click=" isOpen = true" @keydown.escape=" isOpen = false">
                            <svg 
                                class="h-6 w-6 fill-current text-black"
                                fill="none" stroke-linecap="round" 
                                stroke-linejoin="round" stroke-width="2" 
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Navbar -->
                    <navbar class="navbar hidden md:block">
                        <ul class="flex space-x-8 text-sm font-semibold">
                            <li><a href="/" class="active border-b-2 border-orange-500 pb-2">Home</a></li>
                            <li><a href="/login" class="hover:text-orange-500">Login</a></li>
                            <li><a href="https://muritaladavid.herokuapp.com" class="hover:text-orange-500">Developer</a></li>
                            {% if session %}
                                <li><a href="/profile"><img src="https://www.flaticon.com/svg/vstatic/svg/149/149071.svg?token=exp=1619463595~hmac=e90d5f77105041dbc70f7f618ea2015c" height="30" width="30" style="cursor:pointer;"></a></li>
                            {% endif %}
                        </ul>
                    </navbar>

                </div>
        </div>

    </header><!-- end header -->
{% endblock %}