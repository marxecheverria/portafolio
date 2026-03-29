<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS | Servicios de Próxima Generación</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Inter:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Regla 60-30-10 */
            --bg-60: #050505; /* Fondo Dominante */
            --surface-30: #111111; /* Superficies y Muted Text */
            --accent-10: #ff5722; /* Acción y Contraste */
            
            --accent: var(--accent-10);
            --bg-dark: var(--bg-60);
            --surface: var(--surface-30);
        }

        /* Escala Tipográfica Dominante */
        html { font-size: 16px; }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-60);
            color: #ffffff;
            cursor: none;
            overflow-x: hidden;
            line-height: 1.5;
        }

        h1 { font-family: 'Syncopate', sans-serif; font-size: clamp(3.5rem, 12vw, 10rem); font-weight: 700; line-height: 0.9; letter-spacing: -0.05em; }
        h2 { font-family: 'Syncopate', sans-serif; font-size: clamp(2rem, 6vw, 4.5rem); font-weight: 700; line-height: 1.1; }
        h3 { font-family: 'Syncopate', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 400; }
        p { font-size: 1.125rem; color: #a1a1aa; }

        .font-tech { font-family: 'Syncopate', sans-serif; }

        /* Cursor Personalizado Glitch */
        #custom-cursor {
            width: 20px;
            height: 20px;
            background: var(--accent);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.15s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 0 20px var(--accent);
        }

        /* Texto Hueco (Outlined) con Animación de Brillo */
        .text-outline {
            color: transparent;
            -webkit-text-stroke: 1px rgba(255, 87, 34, 0.5);
            transition: all 0.5s ease;
        }
        .text-outline:hover {
            -webkit-text-stroke: 1px rgba(255, 87, 34, 1);
            text-shadow: 0 0 30px rgba(255, 87, 34, 0.3);
        }

        /* Navegación Minimalista Vertical */
        .side-nav {
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }

        /* Animación de Fondo: Mesh Dinámico */
        .bg-mesh {
            background: 
                radial-gradient(at 0% 0%, rgba(255, 87, 34, 0.12) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(255, 87, 34, 0.08) 0px, transparent 50%),
                radial-gradient(at 50% 50%, rgba(255, 255, 255, 0.02) 0px, transparent 50%);
        }

        /* Micro-interacciones de Botones (Nexus Glitch Fill) */
        .btn-nexus {
            position: relative;
            padding: 1.2rem 3rem;
            background: transparent;
            border: 1px solid var(--accent);
            color: var(--accent);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.8, 0, 0.2, 1);
            font-size: 0.75rem;
        }

        .btn-nexus::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 100%; height: 100%;
            background: var(--accent);
            transition: all 0.4s cubic-bezier(0.8, 0, 0.2, 1);
            z-index: -1;
        }

        .btn-nexus:hover {
            color: #000;
            box-shadow: 0 0 40px rgba(255, 87, 34, 0.4);
            transform: scale(1.05);
        }

        .btn-nexus:hover::before {
            left: 0;
        }

        .btn-nexus:active {
            transform: scale(0.95);
        }

        /* Tarjetas de Servicio Disposición Z */
        .service-card {
            background: var(--surface);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.6s cubic-bezier(0.19, 1, 0.22, 1);
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            border-color: var(--accent);
            transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
        }

        .service-card .card-number {
            font-size: 8rem;
            position: absolute;
            top: -20px;
            right: -20px;
            font-family: 'Syncopate', sans-serif;
            opacity: 0.03;
            transition: 0.4s;
        }

        .service-card:hover .card-number {
            opacity: 0.1;
            transform: scale(1.1) translate(-20px, 20px);
        }

        /* Animación de Entrada para Patrón Z */
        .reveal-z { opacity: 0; transform: translateY(40px); transition: all 1s ease; }
        .revealed { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body class="bg-mesh">

    <div id="custom-cursor"></div>

    <header class="fixed top-0 left-0 w-full p-8 md:px-24 md:py-12 flex justify-between items-center z-50">
        <div class="font-tech text-3xl tracking-tighter hover:scale-110 transition-transform cursor-pointer">
            NX<span class="text-orange-500">S</span>
        </div>
        <nav class="hidden md:flex items-center space-x-12">
            <div class="flex space-x-8 uppercase tracking-[0.3em] text-[10px] font-bold text-gray-400">
                <a href="#inicio" class="hover:text-orange-500 transition">Sistemas</a>
                <a href="#servicios" class="hover:text-orange-500 transition">Servicios</a>
                <a href="#contacto" class="hover:text-orange-500 transition">Nexus_Lab</a>
            </div>
            <button class="btn-nexus !py-3 !px-8 text-[9px]">Acceso Terminal</button>
        </nav>
    </header>

    <section id="inicio" class="min-h-screen flex flex-col justify-center px-8 md:px-24 pt-32">
        <div class="grid md:grid-cols-12 gap-8 items-center">
            <div class="md:col-span-8" data-aos="fade-right" data-aos-delay="200">
                <div class="flex items-center mb-8 overflow-hidden">
                    <span class="w-12 h-[1px] bg-orange-500 mr-6"></span>
                    <span class="text-orange-500 font-bold tracking-[0.4em] text-xs uppercase animate-pulse">Protocolo de Innovación v2.6</span>
                </div>
                <h1>
                    IMPULSO<br>
                    <span class="text-outline">DINÁMICO</span>
                </h1>
                <p class="max-w-2xl mt-12 text-gray-400 text-xl md:text-2xl font-light leading-relaxed">
                    Redefinimos la eficiencia operativa a través de arquitecturas digitales diseñadas para <span class="text-white font-medium">escalar sin límites</span> en la era de la automatización autónoma.
                </p>
            </div>
            
            <div class="md:col-span-4 flex flex-col items-end space-y-12" data-aos="fade-left" data-aos-delay="400">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-orange-500/20 rounded-full blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    <button class="btn-nexus text-sm relative">Descubrir Sistema</button>
                </div>
                <div class="text-right space-y-2 border-r-2 border-orange-500 pr-6">
                    <p class="text-[10px] font-tech text-orange-500 tracking-widest uppercase">Estatus de Red</p>
                    <p class="text-2xl font-bold tracking-tighter">ONLINE_SECURE</p>
                </div>
            </div>
        </div>

        <!-- Elemento de Scroll Indicador -->
        <div class="absolute bottom-12 left-24 hidden md:flex items-center space-x-6 text-gray-600">
            <div class="h-12 w-[1px] bg-gray-800 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1/2 bg-orange-500 animate-[scroll-down_2s_infinite]"></div>
            </div>
            <span class="text-[10px] uppercase tracking-[0.5em] font-bold">Scroll para Navegar</span>
        </div>
    </section>

    <style>
        @keyframes scroll-down {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(200%); }
        }
    </style>

    <section id="servicios" class="py-48 px-8 md:px-24 bg-zinc-950 relative">
        <div class="max-w-7xl mx-auto">
            <div class="mb-32 text-center" data-aos="fade-up">
                <h2 class="text-white mb-6">Expertise <span class="text-orange-500">Multinivel</span></h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto mb-8"></div>
                <p class="max-w-xl mx-auto text-gray-500">Nuestra arquitectura de servicios se adapta a la velocidad de su demanda en entornos críticos.</p>
            </div>

            <div class="space-y-48">
                <!-- Fila 1: Imagen Izquierda, Texto Derecha -->
                <div class="grid md:grid-cols-2 gap-24 items-center" data-aos="fade-right">
                    <div class="service-card p-1 relative aspect-square md:aspect-video rounded-3xl group">
                        <div class="w-full h-full bg-zinc-900 rounded-3xl flex items-center justify-center border border-white/10 group-hover:border-orange-500/50 transition-all duration-700">
                            <i class="fa-solid fa-microchip text-8xl text-orange-500/20 group-hover:text-orange-500 group-hover:scale-110 transition-all duration-700"></i>
                            <div class="card-number">01</div>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <span class="text-orange-500 font-tech text-sm tracking-widest uppercase">Estrategia Digital</span>
                        <h3 class="text-white text-4xl font-bold">Consultoría en Innovación</h3>
                        <p class="text-gray-400 text-lg font-light leading-relaxed">
                            Estrategias basadas en datos para transformar procesos tradicionales en flujos de trabajo inteligentes. Implementamos arquitecturas que anticipan el cambio.
                        </p>
                        <button class="btn-nexus !py-3 !px-8 text-[10px]">Ver Protocolo</button>
                    </div>
                </div>

                <!-- Fila 2: Texto Izquierda, Imagen Derecha -->
                <div class="grid md:grid-cols-2 gap-24 items-center" data-aos="fade-left">
                    <div class="order-2 md:order-1 space-y-8 text-right md:text-left">
                        <span class="text-orange-500 font-tech text-sm tracking-widest uppercase">Distribución Autónoma</span>
                        <h3 class="text-white text-4xl font-bold">Logística Inteligente</h3>
                        <p class="text-gray-400 text-lg font-light leading-relaxed">
                            Gestión de suministros y distribución optimizada con algoritmos de tiempo real. Reducimos la fricción operativa mediante automatización avanzada.
                        </p>
                        <button class="btn-nexus !py-3 !px-8 text-[10px]">Simular Red</button>
                    </div>
                    <div class="order-1 md:order-2 service-card p-1 relative aspect-square md:aspect-video rounded-3xl group">
                        <div class="w-full h-full bg-zinc-900 rounded-3xl flex items-center justify-center border border-white/10 group-hover:border-orange-500/50 transition-all duration-700">
                            <i class="fa-solid fa-network-wired text-8xl text-orange-500/20 group-hover:text-orange-500 group-hover:scale-110 transition-all duration-700"></i>
                            <div class="card-number">02</div>
                        </div>
                    </div>
                </div>

                <!-- Fila 3: Imagen Izquierda, Texto Derecha -->
                <div class="grid md:grid-cols-2 gap-24 items-center" data-aos="fade-right">
                    <div class="service-card p-1 relative aspect-square md:aspect-video rounded-3xl group">
                        <div class="w-full h-full bg-zinc-900 rounded-3xl flex items-center justify-center border border-white/10 group-hover:border-orange-500/50 transition-all duration-700">
                            <i class="fa-solid fa-shield-halved text-8xl text-orange-500/20 group-hover:text-orange-500 group-hover:scale-110 transition-all duration-700"></i>
                            <div class="card-number">03</div>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <span class="text-orange-500 font-tech text-sm tracking-widest uppercase">Ciberseguridad</span>
                        <h3 class="text-white text-4xl font-bold">Seguridad Operativa</h3>
                        <p class="text-gray-400 text-lg font-light leading-relaxed">
                            Blindaje de infraestructuras críticas y protección de activos empresariales de alto valor mediante sistemas de defensa proactiva y cifrado cuántico.
                        </p>
                        <button class="btn-nexus !py-3 !px-8 text-[10px]">Auditar Sistema</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contacto" class="py-48 px-8 md:px-24 bg-black relative overflow-hidden">
        <!-- Fondo Decorativo de Texto Gigante -->
        <div class="absolute -bottom-24 -left-24 text-[30vw] font-tech text-white/[0.01] leading-none pointer-events-none select-none uppercase">
            Nexus
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid md:grid-cols-2 gap-32 items-end">
                <div data-aos="fade-right">
                    <h2 class="font-tech text-white mb-12 italic">
                        ¿LISTO PARA EL <br>
                        <span class="text-orange-500 text-outline hover:text-orange-500 transition-all duration-500">SIGUIENTE</span> NIVEL?
                    </h2>
                    <div class="space-y-4">
                        <p class="text-[10px] uppercase tracking-[0.5em] text-orange-500 font-bold">Canal de Enlace</p>
                        <a href="mailto:hello@nexus.systems" class="text-3xl md:text-5xl hover:text-orange-500 transition-all duration-500 border-b-2 border-orange-500/20 hover:border-orange-500 pb-4 block font-bold tracking-tighter">
                            hello@nexus.systems
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-12" data-aos="fade-left">
                    <div class="space-y-6">
                        <p class="text-[10px] uppercase tracking-[0.5em] text-gray-500 font-bold">Navegación</p>
                        <ul class="space-y-4 text-sm font-medium text-gray-400">
                            <li><a href="#inicio" class="hover:text-white transition">Inicio</a></li>
                            <li><a href="#servicios" class="hover:text-white transition">Servicios</a></li>
                            <li><a href="#" class="hover:text-white transition">Proyectos</a></li>
                            <li><a href="#" class="hover:text-white transition">Nexus_Lab</a></li>
                        </ul>
                    </div>
                    <div class="space-y-6">
                        <p class="text-[10px] uppercase tracking-[0.5em] text-gray-500 font-bold">Social</p>
                        <ul class="space-y-4 text-sm font-medium text-gray-400">
                            <li><a href="#" class="hover:text-white transition">LinkedIn</a></li>
                            <li><a href="#" class="hover:text-white transition">GitHub</a></li>
                            <li><a href="#" class="hover:text-white transition">X_Corp</a></li>
                            <li><a href="#" class="hover:text-white transition">Behance</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-48 pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="flex items-center space-x-4">
                    <div class="w-2 h-2 bg-orange-500 rounded-full animate-ping"></div>
                    <span class="text-[10px] uppercase tracking-[0.5em] text-gray-600">Servidor Activo: Quito, EC</span>
                </div>
                <div class="text-[10px] uppercase tracking-[0.5em] text-gray-600">
                    © 2026 NEXUS SYSTEMS • REDISEÑO POR MARX ECHEVERRÍA
                </div>
                <div class="flex space-x-8">
                    <span class="text-[10px] text-gray-700 uppercase tracking-widest italic">v2.0.4-STABLE</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        // Lógica del Cursor Personalizado
        const cursor = document.getElementById('custom-cursor');
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Efecto del cursor sobre elementos interactivos
        const interactives = document.querySelectorAll('a, button, .service-card');
        interactives.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.style.transform = 'scale(4)';
                cursor.style.mixBlendMode = 'difference';
                cursor.style.background = '#ffffff';
            });
            el.addEventListener('mouseleave', () => {
                cursor.style.transform = 'scale(1)';
                cursor.style.mixBlendMode = 'normal';
                cursor.style.background = '#ff5722';
            });
        });

        // Parallax sutil en el Hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroText = document.querySelector('#inicio h1');
            heroText.style.transform = `translateY(${scrolled * 0.3}px)`;
        });
    </script>
</body>
</html>