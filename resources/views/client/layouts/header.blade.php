  <header id="main-header"
      class="fixed top-0 left-0 w-full z-50 glass-nav border-b border-slate-100/60 transition-all duration-500 h-24">
      <div class="max-w-7xl mx-auto px-6 lg:px-8 h-full flex items-center justify-between">
          <!-- <a href="index.html" class="flex items-center space-x-3 group">
                <img src="images/SVG/domos_logo.svg" alt="Logo Domos" class="h-10 w-auto object-contain" style="mix-blend-mode: multiply;" />
                <span class="text-base font-bold tracking-[0.25em] text-navy-900">LUXE<span class="text-gold-500 font-light">&</span>HABITAT</span>
            </a> -->

          <a href="{{route('home.index')}}" class="flex items-center h-full py-2">
              <img id="logo-img" src="images/SVG/domos_logo.svg" alt="Logo Domos"
                  class="h-full w-auto object-contain transition-all duration-500"
                  style="mix-blend-mode: multiply;" />
          </a>

          <nav class="hidden md:flex items-center space-x-10 text-xs font-semibold tracking-[0.15em]">
              <a href="{{route('home.index')}}"
                  class="text-navy-900 py-2 relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-[1px] after:bg-gold-500">ACCUEIL</a>
              <a href="{{route('liste.index')}}"
                  class="text-slate-500 hover:text-navy-900 transition-colors py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-navy-900 hover:after:w-full after:transition-all">NOS
                  BIENS</a>
              <a href="{{route('ask.index')}}"
                  class="text-slate-500 hover:text-navy-900 transition-colors py-2 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-navy-900 hover:after:w-full after:transition-all">DEMANDE
                  SUR MESURE</a>
          </nav>

          <div class="hidden md:flex items-center space-x-6">
              <a href="#contact"
                  class="text-slate-500 hover:text-navy-900 text-xs font-bold tracking-widest uppercase transition">Nous
                  Contacter</a>
              <button onclick="SwAlertEstimer()"
                  class="border border-navy-900 text-navy-900 px-6 py-3 rounded-full text-[11px] font-bold tracking-widest uppercase hover:bg-navy-900 hover:text-white transition-all duration-300">
                  Publier une annonce
              </button>
          </div>

          <button onclick="toggleMobileMenu()" class="md:hidden text-navy-900 focus:outline-none">
              <i id="menu-icon" class="fa-solid fa-bars text-xl"></i>
          </button>
      </div>

      <!-- MENU MOBILE ÉPURÉ -->
      <div id="mobile-menu"
          class="hidden md:hidden bg-white border-t border-slate-100/80 px-6 py-6 space-y-4 shadow-xl">
          <a href="index.html" class="block text-xs font-bold tracking-wider uppercase text-navy-900">Accueil</a>
          <a href="liste-biens.html" class="block text-xs font-bold tracking-wider uppercase text-slate-600">Nos
              Biens</a>
          <a href="demande-sur-mesure.html"
              class="block text-xs font-bold tracking-wider uppercase text-slate-600">Demande sur Mesure</a>
          <hr class="border-slate-100" />
          <button onclick="SwAlertEstimer()"
              class="w-full bg-navy-900 text-white py-3.5 rounded-xl text-xs font-bold tracking-widest uppercase">
              Publier une annonce
          </button>
      </div>
  </header>
