<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíces & Futuro | Fundación para el Desarrollo Social</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&family=Lora:ital,wght@0,400;1,500&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Regla 60-30-10 Extendida */
            --bg-60: #fdfaf5; 
            --text-30: #2d2422; 
            --accent-10: #4f7942; 
            --accent-soft: #cc7e5c; 
            --white: #ffffff;
            --emerald-light: #ecf3ea;
        }

        /* Tipografía Hierárquica */
        html { font-size: 16px; scroll-behavior: smooth; }
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: var(--bg-60);
            color: var(--text-30);
            line-height: 1.8;
            overflow-x: hidden;
        }

        h1, h2, h3, .font-serif { font-family: 'Lora', serif; }

        h1 { font-size: clamp(3.5rem, 10vw, 7.5rem); font-weight: 500; line-height: 1.1; letter-spacing: -0.03em; }
        h2 { font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 500; line-height: 1.2; }
        h3 { font-size: 2.5rem; font-weight: 500; }
        p { font-size: 1.15rem; color: #57534e; }

        /* Navegación Elevada */
        .nav-warm {
            background: rgba(253, 250, 245, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(79, 121, 66, 0.08);
            transition: all 0.4s ease;
        }
        .nav-scrolled {
            padding: 0.8rem 0;
            box-shadow: 0 10px 30px rgba(93, 64, 55, 0.05);
        }

        /* Botones con Micro-interacción Avanzada */
        .btn-foundation {
            position: relative;
            background: var(--accent-10);
            color: var(--white);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            border-radius: 100px;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .btn-foundation::after {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--accent-soft);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            z-index: -1;
        }

        .btn-foundation:hover {
            color: var(--white);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(79, 121, 66, 0.2);
        }

        .btn-foundation:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        /* Imágenes con Efecto de Revelado */
        .reveal-img {
            position: relative;
            overflow: hidden;
            border-radius: 60px;
        }
        .reveal-img img {
            transition: transform 1.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .reveal-img:hover img {
            transform: scale(1.1);
        }

        /* Tarjetas de Impacto */
        .impact-card {
            background: var(--white);
            border-radius: 50px;
            padding: 4rem 3rem;
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid rgba(79, 121, 66, 0.05);
            position: relative;
        }
        .impact-card:hover {
            transform: translateY(-20px);
            box-shadow: 0 40px 80px -20px rgba(93, 64, 55, 0.12);
            border-color: var(--accent-10);
        }

        /* Blobs Orgánicos Animados */
        .blob {
            position: absolute;
            background: linear-gradient(135deg, rgba(79, 121, 66, 0.08) 0%, rgba(204, 126, 92, 0.05) 100%);
            filter: blur(80px);
            z-index: -1;
            border-radius: 50%;
            animation: float 25s infinite alternate ease-in-out;
        }
        @keyframes float {
            0% { transform: translate(0, 0) scale(1) rotate(0deg); }
            50% { transform: translate(60px, 80px) scale(1.1) rotate(10deg); }
            100% { transform: translate(-40px, 40px) scale(0.9) rotate(-10deg); }
        }

        /* Scroll Progress */
        .scroll-progress {
            position: fixed;
            top: 0; left: 0;
            height: 5px;
            background: linear-gradient(to right, var(--accent-10), var(--accent-soft));
            z-index: 1000;
            width: 0%;
            transition: width 0.1s linear;
        }

        /* Footer con Curva Orgánica */
        .footer-shape {
            position: absolute;
            top: -100px;
            left: 0;
            width: 100%;
            height: 100px;
            background: var(--white);
            clip-path: ellipse(70% 100% at 50% 100%);
        }
    </style>
</head>
<body>
    <div class="scroll-progress" id="progressBar"></div>

    <nav class="fixed w-full z-50 nav-warm px-8 py-6" id="navbar">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3 group cursor-pointer">
                <div class="w-12 h-12 bg-emerald-light rounded-2xl flex items-center justify-center group-hover:bg-emerald-600 transition-all duration-500 transform group-hover:rotate-12">
                    <i class="fa-solid fa-seedling text-emerald-600 group-hover:text-white text-xl"></i>
                </div>
                <span class="text-2xl font-bold tracking-tight text-stone-900">Raíces<span class="text-emerald-600 font-light">&</span>Futuro</span>
            </div>
            <div class="hidden md:flex items-center space-x-12 text-sm font-bold uppercase tracking-widest text-stone-500">
                <a href="#inicio" class="hover:text-emerald-700 transition relative group">
                    Inicio
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-600 transition-all group-hover:w-full"></span>
                </a>
                <a href="#proposito" class="hover:text-emerald-700 transition relative group">
                    Propósito
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-600 transition-all group-hover:w-full"></span>
                </a>
                <a href="#impacto" class="hover:text-emerald-700 transition relative group">
                    Impacto
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-600 transition-all group-hover:w-full"></span>
                </a>
                <a href="#contacto" class="btn-foundation px-8 py-3.5 shadow-lg">Donar Ahora</a>
            </div>
        </div>
    </nav>

    <section id="inicio" class="min-h-screen flex items-center pt-24 px-8 relative overflow-hidden bg-white">
        <div class="blob w-[600px] h-[600px] -top-20 -left-20 opacity-60"></div>
        <div class="blob w-[500px] h-[500px] bottom-0 right-0 opacity-40" style="animation-delay: -5s;"></div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-20 items-center">
            <div data-aos="fade-right" data-aos-duration="1500">
                <div class="inline-flex items-center space-x-3 bg-emerald-light text-emerald-700 px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-[0.2em] mb-10">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span>Fundación Raíces & Futuro</span>
                </div>
                <h1 class="text-stone-900 mb-10 leading-[1.05]">
                    Transformando <br>realidades <span class="italic text-emerald-600">desde la raíz.</span>
                </h1>
                <p class="text-stone-500 text-xl md:text-2xl mb-12 leading-relaxed max-w-xl">
                    Impulsamos el cambio social mediante <span class="text-emerald-800 font-semibold border-b-2 border-emerald-200">educación inclusiva</span> y el desarrollo de comunidades autosustentables.
                </p>
                <div class="flex flex-wrap gap-8">
                    <a href="#proposito" class="btn-foundation px-12 py-5 font-bold text-lg shadow-xl">
                        Nuestra Historia
                    </a>
                    <a href="#impacto" class="px-12 py-5 border-2 border-emerald-100 rounded-full hover:border-emerald-600 hover:text-emerald-600 transition-all duration-500 font-bold text-stone-700 text-lg flex items-center group">
                        Ver Impacto
                        <i class="fa-solid fa-arrow-right ml-3 transform group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="relative lg:block hidden" data-aos="zoom-in-left" data-aos-delay="300">
                <div class="reveal-img w-full aspect-[4/5] shadow-[0_50px_100px_-20px_rgba(45,36,34,0.15)] border-[20px] border-white">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=2070&auto=format&fit=crop" alt="Niños sonriendo">
                    <!-- Overlay Flotante -->
                    <div class="absolute bottom-10 left-10 bg-white/95 backdrop-blur-md p-8 rounded-[40px] shadow-2xl border border-emerald-50 max-w-xs animate-float">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-heart text-emerald-600 text-xl"></i>
                            </div>
                            <span class="text-2xl font-bold text-stone-800">+1.5K</span>
                        </div>
                        <p class="text-sm text-stone-500 font-medium">Vidas impactadas positivamente este año en todo el país.</p>
                    </div>
                </div>
                <!-- Elemento Decorativo Adicional -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-emerald-600/10 rounded-full blur-3xl"></div>
            </div>
        </div>
    </section>

    <section id="proposito" class="py-32 px-8 bg-white relative">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-32" data-aos="fade-up">
                <h2 class="text-stone-900 mb-6 italic">Nuestro Propósito</h2>
                <div class="w-24 h-1 bg-emerald-600 mx-auto rounded-full"></div>
            </div>

            <div class="space-y-48">
                <!-- Fila 1: Texto Izquierda, Imagen Derecha -->
                <div class="grid lg:grid-cols-2 gap-24 items-center">
                    <div data-aos="fade-right">
                        <span class="text-emerald-600 font-bold uppercase tracking-[0.3em] text-xs mb-8 block">Compromiso Social</span>
                        <h3 class="text-stone-900 mb-8 leading-tight">Nuestra <span class="italic text-emerald-600">Misión</span></h3>
                        <p class="text-stone-500 text-lg leading-relaxed mb-10">
                            Proveer herramientas educativas y apoyo logístico a comunidades rurales para erradicar la brecha de desigualdad y fomentar el liderazgo local. Creemos que el conocimiento es la semilla de la libertad.
                        </p>
                        <ul class="space-y-6">
                            <li class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-emerald-100 rounded-full flex items-center justify-center mt-1">
                                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                                </div>
                                <p class="text-stone-700 font-medium">Acceso a tecnología en zonas remotas.</p>
                            </li>
                            <li class="flex items-start space-x-4">
                                <div class="w-6 h-6 bg-emerald-100 rounded-full flex items-center justify-center mt-1">
                                    <i class="fa-solid fa-check text-emerald-600 text-xs"></i>
                                </div>
                                <p class="text-stone-700 font-medium">Capacitación docente continua.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="reveal-img aspect-square shadow-2xl" data-aos="fade-left">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2070&auto=format&fit=crop" alt="Niños estudiando">
                    </div>
                </div>

                <!-- Fila 2: Imagen Izquierda, Texto Derecha -->
                <div class="grid lg:grid-cols-2 gap-24 items-center">
                    <div class="reveal-img aspect-square shadow-2xl order-2 lg:order-1" data-aos="fade-right">
                        <img src="https://images.unsplash.com/photo-1524062731223-851bc0607f2e?q=80&w=2070&auto=format&fit=crop" alt="Paisaje rural">
                    </div>
                    <div class="order-1 lg:order-2" data-aos="fade-left">
                        <span class="text-emerald-600 font-bold uppercase tracking-[0.3em] text-xs mb-8 block">Visión 2030</span>
                        <h3 class="text-stone-900 mb-8 leading-tight">Nuestra <span class="italic text-emerald-600">Visión</span></h3>
                        <p class="text-stone-500 text-lg leading-relaxed mb-10">
                            Ser el referente regional en proyectos de desarrollo sostenible, logrando que cada familia en nuestra zona de impacto sea autosuficiente para el 2030. Un Ecuador donde nadie se quede atrás.
                        </p>
                        <div class="p-8 bg-emerald-light rounded-[40px] border-l-4 border-emerald-600">
                            <p class="text-emerald-900 font-bold italic text-xl">"La autosuficiencia es el grado más alto de dignidad humana."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="impacto" class="py-48 px-8 bg-stone-900 text-white relative overflow-hidden">
        <!-- Decoración de Fondo -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-emerald-600/10 rounded-full blur-[120px] -mr-64 -mt-64"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-[120px] -ml-64 -mb-64"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-24" data-aos="fade-up">
                <span class="text-emerald-400 font-bold uppercase tracking-[0.4em] text-xs mb-6 block">Resultados Tangibles</span>
                <h2 class="text-white mb-8">Nuestro Impacto en <span class="italic text-emerald-400">Números</span></h2>
                <p class="text-stone-400 max-w-2xl mx-auto text-xl">Cada estadística representa una vida transformada y una comunidad que hoy camina con mayor esperanza.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-12">
                <div class="impact-card group !bg-white/5 !border-white/10 hover:!border-emerald-500/50" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-emerald-500/10 rounded-3xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-graduation-cap text-3xl text-emerald-400"></i>
                    </div>
                    <div class="flex items-baseline space-x-2 mb-4">
                        <h4 class="text-6xl font-bold text-white tracking-tighter counter" data-target="1500">0</h4>
                        <span class="text-3xl font-bold text-emerald-400">+</span>
                    </div>
                    <p class="text-emerald-100/60 font-bold uppercase tracking-widest text-sm mb-6">Niños Educados</p>
                    <p class="text-stone-400 leading-relaxed">Programas de alfabetización digital y apoyo escolar en 12 provincias.</p>
                </div>

                <div class="impact-card group !bg-white/5 !border-white/10 hover:!border-emerald-500/50" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-emerald-500/10 rounded-3xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-house-chimney-window text-3xl text-emerald-400"></i>
                    </div>
                    <div class="flex items-baseline space-x-2 mb-4">
                        <h4 class="text-6xl font-bold text-white tracking-tighter counter" data-target="45">0</h4>
                    </div>
                    <p class="text-emerald-100/60 font-bold uppercase tracking-widest text-sm mb-6">Comunidades Activas</p>
                    <p class="text-stone-400 leading-relaxed">Centros de desarrollo local autogestionados por sus propios habitantes.</p>
                </div>

                <div class="impact-card group !bg-white/5 !border-white/10 hover:!border-emerald-500/50" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-emerald-500/10 rounded-3xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-hand-holding-dollar text-3xl text-emerald-400"></i>
                    </div>
                    <div class="flex items-baseline space-x-2 mb-4">
                        <h4 class="text-6xl font-bold text-white tracking-tighter counter" data-target="100">0</h4>
                        <span class="text-3xl font-bold text-emerald-400">%</span>
                    </div>
                    <p class="text-emerald-100/60 font-bold uppercase tracking-widest text-sm mb-6">Transparencia Total</p>
                    <p class="text-stone-400 leading-relaxed">Auditamos cada centavo para asegurar que el 100% llegue a su destino final.</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contacto" class="relative pt-48 pb-12 px-8 bg-white overflow-hidden">
        <div class="footer-shape"></div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-16 mb-24">
                <!-- Columna 1: Branding -->
                <div class="space-y-8" data-aos="fade-up">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-seedling text-emerald-600"></i>
                        </div>
                        <span class="text-xl font-bold tracking-tight text-stone-900">Raíces<span class="text-emerald-600 font-light">&</span>Futuro</span>
                    </div>
                    <p class="text-stone-500 text-sm leading-relaxed">
                        Transformando realidades desde la raíz mediante educación y desarrollo sostenible en todo el Ecuador.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-all duration-300 shadow-sm">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-all duration-300 shadow-sm">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center hover:bg-emerald-600 hover:text-white transition-all duration-300 shadow-sm">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </div>
                </div>

                <!-- Columna 2: Navegación -->
                <div class="space-y-8" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="text-lg font-bold text-stone-900">Navegación</h4>
                    <ul class="space-y-4 text-sm font-medium text-stone-500">
                        <li><a href="#inicio" class="hover:text-emerald-600 transition">Inicio</a></li>
                        <li><a href="#proposito" class="hover:text-emerald-600 transition">Nuestro Propósito</a></li>
                        <li><a href="#impacto" class="hover:text-emerald-600 transition">Impacto Social</a></li>
                        <li><a href="#" class="hover:text-emerald-600 transition">Proyectos Actuales</a></li>
                        <li><a href="#" class="hover:text-emerald-600 transition">Voluntariado</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Contacto -->
                <div class="space-y-8" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="text-lg font-bold text-stone-900">Contacto</h4>
                    <ul class="space-y-4 text-sm text-stone-500">
                        <li class="flex items-start space-x-3">
                            <i class="fa-solid fa-location-dot text-emerald-600 mt-1"></i>
                            <span>Av. de los Granados y Eloy Alfaro, Quito - Ecuador</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-phone text-emerald-600"></i>
                            <span>+593 2 123 4567</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-envelope text-emerald-600"></i>
                            <span>contacto@raicesyfuturo.org</span>
                        </li>
                    </ul>
                </div>

                <!-- Columna 4: Newsletter -->
                <div class="space-y-8" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="text-lg font-bold text-stone-900">Newsletter</h4>
                    <p class="text-sm text-stone-500">Suscríbete para recibir noticias de impacto.</p>
                    <form class="relative">
                        <input type="email" placeholder="Tu email" class="w-full bg-stone-50 border border-stone-100 rounded-2xl py-4 px-6 text-sm focus:outline-none focus:border-emerald-600 transition-all">
                        <button class="absolute right-2 top-2 bg-emerald-600 text-white p-2 rounded-xl hover:bg-emerald-700 transition-all">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="pt-12 border-t border-stone-100 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-[10px] uppercase tracking-[0.4em] text-stone-400 font-bold">
                    © 2026 Raíces & Futuro • LABS | Rediseño UI/UX por Marx Echeverría
                </p>
                <div class="flex space-x-8 text-[10px] uppercase tracking-[0.2em] font-bold text-stone-400">
                    <a href="#" class="hover:text-emerald-600 transition">Privacidad</a>
                    <a href="#" class="hover:text-emerald-600 transition">Términos</a>
                    <a href="#" class="hover:text-emerald-600 transition">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1500,
            once: true,
            easing: 'ease-out-quint'
        });

        // Barra de Progreso de Scroll
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById("progressBar").style.width = scrolled + "%";

            // Efecto Navbar al hacer Scroll
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('nav-scrolled');
            } else {
                navbar.classList.remove('nav-scrolled');
            }
        });

        // Contadores Animados
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        };

        // Intersection Observer para activar contadores
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const impactSection = document.querySelector('#impacto');
        if (impactSection) observer.observe(impactSection);

        // Parallax suave para blobs decorativos
        document.addEventListener('mousemove', (e) => {
            const blobs = document.querySelectorAll('.blob');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            blobs.forEach(blob => {
                blob.style.transform = `translate(${x * 30}px, ${y * 30}px)`;
            });
        });
    </script>
</body>
</html>