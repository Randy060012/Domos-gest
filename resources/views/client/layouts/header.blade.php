  <header id="main-header"
      class="fixed top-0 left-0 w-full z-50 glass-nav border-b border-white/10 transition-all duration-500 h-16 md:h-24">
      <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 h-full flex items-center justify-between">
          <a href="{{route('home.index')}}" class="logo-link flex items-center h-full py-1 md:py-2 max-w-[140px] md:max-w-none">
              <img id="logo-img" src="images/LogoCarré.svg" alt="Logo Domos"
                  class="h-full w-auto object-contain transition-all duration-500 brightness-0 invert" />
          </a>

          <nav class="hidden md:flex items-center space-x-10 text-xs font-semibold tracking-[0.15em]">
              <a href="{{route('home.index')}}"
                  class="text-white/90 py-2 relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-[1px] after:bg-gold-500">ACCUEIL</a>
              <a href="{{route('liste.index')}}"
                  class="text-white/60 hover:text-white/90 transition-colors py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-gold-500 hover:after:w-full after:transition-all">NOS
                  BIENS</a>
              <a href="{{route('ask.index')}}"
                  class="text-white/60 hover:text-white/90 transition-colors py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-gold-500 hover:after:w-full after:transition-all">DEMANDE
                  SUR MESURE</a>
          </nav>

          <div class="hidden md:flex items-center space-x-6">
              <a href="#contact"
                  class="text-white/60 hover:text-white/90 text-xs font-bold tracking-widest uppercase transition">Nous
                  Contacter</a>
              <!-- <a href="/admin/login"
                  class="border border-white/40 text-white/90 px-6 py-3 rounded-full text-[11px] font-bold tracking-widest uppercase hover:bg-white hover:text-customNoir transition-all duration-300">
                  Publier une annonce
              </a> -->
          </div>

          <button onclick="toggleMobileMenu()" class="md:hidden text-white/90 focus:outline-none">
              <i id="menu-icon" class="fa-solid fa-bars text-xl"></i>
          </button>
      </div>

      <!-- MENU MOBILE -->
      <div id="mobile-menu"
          class="hidden md:hidden bg-customNoir border-t border-white/10 px-6 py-6 space-y-4 shadow-xl">
          <a href="{{route('home.index')}}" class="block text-xs font-bold tracking-wider uppercase text-white/90">Accueil</a>
          <a href="{{route('liste.index')}}" class="block text-xs font-bold tracking-wider uppercase text-white/60 hover:text-white/90">Nos Biens</a>
          <a href="{{route('ask.index')}}" class="block text-xs font-bold tracking-wider uppercase text-white/60 hover:text-white/90">Demande sur Mesure</a>
          <hr class="border-white/10" />
          <!-- <a href="/admin/login"
              class="block w-full text-center bg-white text-customNoir py-3.5 rounded-xl text-xs font-bold tracking-widest uppercase">
              Publier une annonce
          </a> -->
      </div>
  </header>
