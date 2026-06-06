<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dossier Technique Exclusif | DOMOS</title>

    <!-- Polices Premium : Playfair Display (Titres) & Plus Jakarta Sans (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    },
                    colors: {
                        gold: {
                            400: "#F1DC9B",
                            500: "#EAD292",
                            600: "#D4BC79",
                            700: "#BAA261"
                        },
                        navy: {
                            800: "#0A3A60",
                            900: "#012C4E"
                        },
                        slate: {
                            950: "#0F172A"
                        }
                    },
                    boxShadow: {
                        'premium': '0 4px 30px rgba(0, 0, 0, 0.01)',
                        'modal': '0 30px 60px -15px rgba(1, 44, 78, 0.15)',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.80);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #EAD292;
            border-radius: 2px;
        }
    </style>
</head>

<body class="bg-[#FBFBFC] text-slate-900 font-sans antialiased selection:bg-gold-500/30">

    <!-- HEADER RAFFINÉ -->
    @include('client.layouts.header-dt')

    <!-- CONTENU PRINCIPAL ÉDITORIAL -->
    @yield('contente')

    <!-- MODAL DE VISITE PRIVÉE STRUCTURÉ -->
    <div id="modal-visite" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-navy-900/40 backdrop-blur-md transition-opacity duration-300 opacity-0" onclick="if(event.target === this) toggleModal('modal-visite', false)">
        <div class="bg-white rounded-[32px] max-w-md w-full shadow-modal overflow-hidden border border-slate-100 transform scale-95 transition-transform duration-300">
            <div class="bg-navy-900 p-6 sm:p-8 text-white flex justify-between items-center">
                <div class="space-y-1">
                    <h3 class="font-serif text-xl tracking-wide text-gold-500 italic">Planifier une Visite Privée</h3>
                    <p class="text-[10px] text-slate-400 font-light uppercase tracking-wider">Vos préférences exclusives de rendez-vous.</p>
                </div>
                <button onclick="toggleModal('modal-visite', false)" class="w-8 h-8 rounded-xl bg-white/10 flex items-center justify-center text-white hover:bg-white/20 transition-colors">
                    <i class="fa-solid fa-xmark text-xs"></i>
                </button>
            </div>

            <form onsubmit="handleModalForm(event)" class="p-6 sm:p-8 space-y-5">
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Identité complète *</label>
                    <input type="text" required placeholder="M. ou Mme..." class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:ring-1 focus:ring-gold-500 focus:bg-white transition" />
                </div>
                <div class="space-y-1.5">
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Téléphone direct *</label>
                    <input type="tel" required placeholder="+33 (0)6..." class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:ring-1 focus:ring-gold-500 focus:bg-white transition" />
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Date optimale</label>
                        <input type="date" required class="w-full bg-slate-50 border border-slate-100 rounded-xl px-3 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:ring-1 focus:ring-gold-500 focus:bg-white transition cursor-pointer" />
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400">Créneau horaire</label>
                        <input type="time" required class="w-full bg-slate-50 border border-slate-100 rounded-xl px-3 py-3.5 text-xs font-medium text-slate-700 focus:outline-none focus:ring-1 focus:ring-gold-500 focus:bg-white transition cursor-pointer" />
                    </div>
                </div>

                <div class="flex items-center space-x-3 pt-4">
                    <button type="button" onclick="toggleModal('modal-visite', false)" class="w-1/3 bg-slate-50 hover:bg-slate-100 text-slate-400 font-bold text-[11px] tracking-widest uppercase py-4 rounded-xl transition">
                        Fermer
                    </button>
                    <button type="submit" class="w-2/3 bg-navy-900 hover:bg-gold-500 text-white font-bold text-[11px] tracking-widest uppercase py-4 rounded-xl transition shadow-sm">
                        Proposer la date
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- FOOTER HAUTE CONCIERGERIE -->

    @include('client.layouts.footer-dt')
    <!-- LOGIQUE HYDRATATION & EFFECTS -->
    <script src="client/details.js"></script>
</body>

</html>
