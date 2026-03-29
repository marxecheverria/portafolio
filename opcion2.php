<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardioElite | Centro de Excelencia Cardiovascular</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Regla 60-30-10 */
            --primary-bg: #f8fafc; /* 60% (Fondo suave) */
            --secondary-text: #0f172a; /* 30% (Texto y detalles oscuros) */
            --accent-action: #0ea5e9; /* 10% (Acción y CTA) */
            
            --medical-blue: var(--accent-action);
            --deep-navy: var(--secondary-text);
            --soft-gray: var(--primary-bg);
            --glass: rgba(255, 255, 255, 0.7);
        }

        /* Escala Tipográfica */
        html { font-size: 16px; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--primary-bg);
            color: var(--secondary-text);
            line-height: 1.6;
        }

        h1 { font-size: clamp(3rem, 8vw, 5rem); font-weight: 800; line-height: 1.1; letter-spacing: -0.02em; }
        h2 { font-size: clamp(2rem, 5vw, 3.5rem); font-weight: 700; line-height: 1.2; }
        h3 { font-size: 2rem; font-weight: 600; }
        p { font-size: 1.125rem; color: #64748b; }

        .font-accent { font-family: 'Playfair Display', serif; }

        /* Efecto de Vidrio para el Menú */
        .nav-glass {
            background: rgba(248, 250, 252, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid rgba(15, 23, 42, 0.05);
        }

        /* Micro-interacciones de Botones */
        .btn-tech {
            position: relative;
            background: var(--accent-action);
            color: white;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            overflow: hidden;
            z-index: 1;
        }

        .btn-tech::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.15);
            transition: all 0.75s ease;
            transform: translate(-50%, -50%) rotate(45deg) scale(0);
            z-index: -1;
        }

        .btn-tech:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 15px 30px rgba(14, 165, 233, 0.4);
            filter: brightness(1.05);
        }

        .btn-tech:hover::before {
            transform: translate(-50%, -50%) rotate(45deg) scale(1);
        }

        .btn-tech:active {
            transform: translateY(-1px) scale(0.98);
        }

        /* Tarjetas con Efecto de Profundidad Dinámica */
        .service-card {
            background: white;
            border: 1px solid rgba(226, 232, 240, 0.5);
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-action);
            box-shadow: 0 30px 60px -12px rgba(15, 23, 42, 0.12);
        }

        .service-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            opacity: 0;
            transition: opacity 0.6s ease;
            box-shadow: 0 0 20px rgba(14, 165, 233, 0.2);
        }

        .service-card:hover::after {
            opacity: 1;
        }

        /* Animación de Entrada para el Patrón Z */
        .reveal-left { transform: translateX(-50px); opacity: 0; transition: all 1s ease; }
        .reveal-right { transform: translateX(50px); opacity: 0; transition: all 1s ease; }
        .revealed { transform: translateX(0); opacity: 1; }

        /* Estilización de Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--primary-bg); }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--accent-action); }
    </style>
</head>
<body class="bg-gradient-medical">

    <nav class="fixed w-full z-50 nav-glass px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-heart-pulse text-3xl text-sky-500 animate-pulse"></i>
                <span class="text-2xl font-bold tracking-tight text-slate-900">Cardio<span class="text-sky-500 font-light">Elite</span></span>
            </div>
            <div class="hidden md:flex items-center space-x-8 text-sm font-semibold text-slate-600">
                <a href="#inicio" class="hover:text-sky-500 transition">Inicio</a>
                <a href="#especialidades" class="hover:text-sky-500 transition">Especialidades</a>
                <a href="#tecnologia" class="hover:text-sky-500 transition">Tecnología</a>
                <a href="#contacto" class="btn-tech px-6 py-2 rounded-full">Cita Online</a>
            </div>
        </div>
    </nav>

    <section id="inicio" class="min-h-screen flex items-center pt-32 px-6 bg-white">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right" data-aos-duration="1200" class="order-2 md:order-1">
                <span class="inline-block bg-sky-50 text-sky-600 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6">Excelencia en Quito</span>
                <h1 class="font-accent text-slate-900 mb-8 leading-[1.1]">
                    Cuidamos el ritmo de <span class="italic text-sky-500">tu vida.</span>
                </h1>
                <p class="text-slate-500 text-xl mb-12 leading-relaxed max-w-xl">
                    Combinamos calidez humana con tecnología de diagnóstico de última generación para ofrecerte la precisión que tu corazón necesita.
                </p>
                <div class="flex flex-wrap gap-6">
                    <button class="btn-tech px-10 py-5 rounded-full font-bold text-lg flex items-center shadow-xl">
                        <i class="fa-solid fa-calendar-check mr-3"></i> Agendar Evaluación
                    </button>
                    <button class="px-10 py-5 rounded-full border-2 border-slate-200 hover:border-sky-500 hover:text-sky-500 transition-all duration-300 font-bold text-slate-700 text-lg">
                        Nuestros Médicos
                    </button>
                </div>
            </div>
            <div class="relative order-1 md:order-2" data-aos="zoom-in-left" data-aos-delay="200">
                <div class="w-full h-[550px] bg-sky-50 rounded-[60px] relative overflow-hidden flex items-center justify-center border-[12px] border-white shadow-[0_32px_64px_-16px_rgba(15,23,42,0.15)]">
                    <i class="fa-solid fa-wave-square text-[180px] text-sky-200 animate-pulse"></i>
                    <!-- Elementos Flotantes para Interactividad -->
                    <div class="absolute top-12 right-12 bg-white/90 backdrop-blur p-6 rounded-3xl shadow-xl border border-sky-100 animate-bounce" style="animation-duration: 3s;">
                        <p class="text-[10px] uppercase text-slate-400 font-bold tracking-widest mb-1">Ritmo Actual</p>
                        <div class="flex items-baseline space-x-2">
                            <span class="text-3xl font-extrabold text-sky-500">72</span>
                            <span class="text-sm font-semibold text-slate-400">BPM</span>
                        </div>
                    </div>
                    <div class="absolute bottom-12 left-12 bg-white/90 backdrop-blur p-6 rounded-3xl shadow-xl border border-sky-100">
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 bg-emerald-500 rounded-full animate-ping"></div>
                            <span class="text-sm font-bold text-slate-700">Sistema Online</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nueva Sección para Patrón Z (Imagen a la Izquierda) -->
    <section class="py-32 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-20 items-center">
            <div class="relative" data-aos="fade-right">
                <div class="aspect-square bg-white rounded-[50px] overflow-hidden shadow-2xl border-8 border-white">
                    <div class="w-full h-full bg-gradient-to-br from-sky-400 to-blue-600 flex items-center justify-center">
                        <i class="fa-solid fa-microscope text-white text-[120px] opacity-20"></i>
                    </div>
                    <!-- Overlay de contenido simulado -->
                    <div class="absolute inset-0 flex items-center justify-center p-12">
                        <div class="text-center text-white">
                            <i class="fa-solid fa-shield-heart text-6xl mb-6"></i>
                            <h3 class="text-2xl font-bold mb-2">Diagnóstico Preciso</h3>
                            <p class="text-sky-100">Equipos de grado hospitalario internacional.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left">
                <h2 class="font-accent text-slate-900 mb-8 leading-tight">Tecnología que salva <span class="text-sky-500 italic">vidas.</span></h2>
                <p class="text-slate-500 text-lg mb-8">
                    En CardioElite no solo escuchamos su corazón, lo visualizamos con la mayor resolución posible. Nuestro centro cuenta con:
                </p>
                <ul class="space-y-6">
                    <li class="flex items-start space-x-4">
                        <div class="mt-1 w-6 h-6 bg-sky-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-check text-sky-500 text-xs"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Ecocardiografía 4D</h4>
                            <p class="text-sm text-slate-500">Reconstrucción volumétrica en tiempo real para análisis valvular.</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-4">
                        <div class="mt-1 w-6 h-6 bg-sky-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-check text-sky-500 text-xs"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Telemetría Inalámbrica</h4>
                            <p class="text-sm text-slate-500">Monitoreo constante sin cables invasivos para mayor comodidad.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="especialidades" class="py-32 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20" data-aos="fade-up">
                <span class="text-sky-500 font-bold uppercase tracking-widest text-sm">Nuestros Servicios</span>
                <h2 class="font-accent text-slate-900 mt-4 mb-6">Especialidades Médicas</h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto">Diagnóstico preventivo y tratamiento avanzado con un enfoque personalizado para cada paciente.</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="service-card p-10 rounded-[40px]" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-sky-50 rounded-2xl flex items-center justify-center mb-8 transition-transform group-hover:rotate-12">
                        <i class="fa-solid fa-stethoscope text-sky-500 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-4">Consulta Integral</h4>
                    <p class="text-slate-500 leading-relaxed">Evaluación clínica detallada y gestión de factores de riesgo cardiovascular.</p>
                    <a href="#" class="inline-block mt-8 text-sky-500 font-bold text-sm hover:underline">Ver detalles →</a>
                </div>
                <!-- Repetir estructura para los demás con ligeras variaciones de color si se desea, pero manteniendo la regla 60-30-10 -->
                <div class="service-card p-10 rounded-[40px]" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-rose-50 rounded-2xl flex items-center justify-center mb-8">
                        <i class="fa-solid fa-bolt text-rose-500 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-4">Electrocardiografía</h4>
                    <p class="text-slate-500 leading-relaxed">Monitoreo preciso de la actividad eléctrica del corazón en tiempo real.</p>
                    <a href="#" class="inline-block mt-8 text-sky-500 font-bold text-sm hover:underline">Ver detalles →</a>
                </div>
                <div class="service-card p-10 rounded-[40px]" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mb-8">
                        <i class="fa-solid fa-droplet text-emerald-500 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-4">Eco Doppler</h4>
                    <p class="text-slate-500 leading-relaxed">Visualización avanzada del flujo sanguíneo y estructuras valvulares.</p>
                    <a href="#" class="inline-block mt-8 text-sky-500 font-bold text-sm hover:underline">Ver detalles →</a>
                </div>
                <div class="service-card p-10 rounded-[40px]" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-amber-50 rounded-2xl flex items-center justify-center mb-8">
                        <i class="fa-solid fa-clock-rotate-left text-amber-500 text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-4">Holter 24/7</h4>
                    <p class="text-slate-500 leading-relaxed">Registro continuo para detectar arritmias y anomalías silenciosas.</p>
                    <a href="#" class="inline-block mt-8 text-sky-500 font-bold text-sm hover:underline">Ver detalles →</a>
                </div>
            </div>
        </div>
    </section>

    <footer id="contacto" class="py-32 px-6 bg-slate-900 text-white overflow-hidden relative">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky-500/10 rounded-full blur-[120px] -mr-64 -mt-64"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-blue-500/5 rounded-full blur-[120px] -ml-64 -mb-64"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid md:grid-cols-2 gap-24 items-start">
                <div data-aos="fade-right">
                    <span class="text-sky-400 font-bold uppercase tracking-[0.2em] text-xs mb-6 block">Contacto</span>
                    <h2 class="font-accent text-5xl mb-8 leading-tight">Agende su cita <br><span class="italic text-sky-400">hoy mismo.</span></h2>
                    <p class="text-slate-400 mb-12 text-xl leading-relaxed">Su salud cardiovascular no puede esperar. Estamos ubicados en el corazón del sector médico de Quito, con parqueadero privado y seguridad.</p>
                    
                    <div class="grid sm:grid-cols-2 gap-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center flex-shrink-0 border border-white/10">
                                <i class="fa-solid fa-location-dot text-sky-400"></i>
                            </div>
                            <div>
                                <h5 class="font-bold mb-1">Dirección</h5>
                                <p class="text-slate-400 text-sm">Av. Mariana de Jesús y Nuño de Valderrama, Quito.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center flex-shrink-0 border border-white/10">
                                <i class="fa-solid fa-phone text-sky-400"></i>
                            </div>
                            <div>
                                <h5 class="font-bold mb-1">Teléfono</h5>
                                <p class="text-slate-400 text-sm">+593 2-xxxx-xxx</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/5 p-12 rounded-[50px] border border-white/10 backdrop-blur-xl shadow-2xl" data-aos="fade-left">
                    <h4 class="text-2xl font-bold mb-8 flex items-center">
                        <span class="w-2 h-8 bg-sky-500 rounded-full mr-4"></span>
                        Horarios de Atención
                    </h4>
                    <ul class="space-y-6 text-slate-400">
                        <li class="flex justify-between items-center border-b border-white/5 pb-4">
                            <span class="font-medium text-slate-300">Lunes - Viernes</span> 
                            <span class="bg-white/10 px-4 py-1 rounded-full text-white text-sm">08:00 - 19:00</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-white/5 pb-4">
                            <span class="font-medium text-slate-300">Sábados</span> 
                            <span class="bg-white/10 px-4 py-1 rounded-full text-white text-sm">09:00 - 13:00</span>
                        </li>
                        <li class="flex justify-between items-center text-sky-400 pt-2">
                            <div class="flex items-center">
                                <i class="fa-solid fa-truck-medical mr-3"></i>
                                <span class="font-bold uppercase tracking-widest text-sm">Emergencias</span>
                            </div>
                            <span class="font-extrabold">24 Horas</span>
                        </li>
                    </ul>
                    <button class="w-full mt-12 btn-tech py-5 rounded-2xl font-bold text-lg shadow-[0_20px_40px_rgba(14,165,233,0.2)]">
                        Solicitar Información por WhatsApp
                    </button>
                    <p class="text-center mt-6 text-xs text-slate-500">Respuesta promedio: <span class="text-slate-300">5 minutos</span></p>
                </div>
            </div>
            
            <div class="mt-32 pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-heart-pulse text-2xl text-sky-500"></i>
                    <span class="text-xl font-bold tracking-tight text-white">Cardio<span class="text-sky-500 font-light">Elite</span></span>
                </div>
                <div class="text-slate-500 text-xs tracking-[0.3em] uppercase">
                    © 2026 CardioElite | Rediseño UI/UX por Marx Echeverría
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-slate-400 hover:text-sky-400 transition text-xl"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="text-slate-400 hover:text-sky-400 transition text-xl"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="text-slate-400 hover:text-sky-400 transition text-xl"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-quad'
        });
    </script>
</body>
</html>