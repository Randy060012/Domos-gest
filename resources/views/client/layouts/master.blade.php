<!doctype html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOMOS | Immobilier d'Exception</title>

    <!-- Polices Premium : Playfair Display (Titres) & Plus Jakarta Sans (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

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
                            500: "#EAD292",
                            600: "#d4bc79"
                        },
                        navy: {
                            900: "#012C4E"
                        },
                        customNoir: "#181c21",
                        customBlanc: "#FBFBFC",
                    },
                    animation: {
                        marquee: 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': {
                                transform: 'translateX(0%)'
                            },
                            '100%': {
                                transform: 'translateX(-50%)'
                            }
                        }
                    }
                },
            },
        };
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

        /* Masquer la barre de défilement pour le bandeau des partenaires */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-[#FBFBFC] text-slate-900 font-sans antialiased selection:bg-gold-500/30">

    <!-- HEADER DYNAMIQUE RÉTRACTABLE -->
    @include('client.layouts.header')

    @yield('content')

    <!-- FOOTER TYPE HAUTE CONCIERGERIE -->
    @include('client.layouts.footer')

    <script src="client/home.js"></script>
</body>

</html>
