<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marx Echeverría | Central de Soluciones Web</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;700&family=Inter:wght@300;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --neon-cyan: #00f2fe;
            --space-gray: #1a1d23;
            --bg-dark: #050505;
            --accent-blue: #0ea5e9;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: #ffffff;
            overflow-x: hidden;
        }

        .font-tech { font-family: 'Space Grotesk', sans-serif; }

        /* Fondo de Partículas Estilizado */
        #particles-js {
            position: fixed;
            width: 100%; height: 100%;
            background: radial-gradient(circle at 50% 50%, #111 0%, #000 100%);
            z-index: -1;
        }

        /* Glassmorphism Hub */
        .glass-nav {
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .demo-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }

        .demo-card:hover {
            transform: translateY(-15px) scale(1.02);
            background: rgba(255, 255, 255, 0.05);
            border-color: var(--neon-cyan);
            box-shadow: 0 30px 60px -12px rgba(0, 242, 254, 0.15);
        }

        .demo-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: linear-gradient(45deg, transparent, rgba(0, 242, 254, 0.05), transparent);
            transform: translateX(-100%);
            transition: 0.8s;
        }

        .demo-card:hover::before {
            transform: translateX(100%);
        }

        /* Indicador de Status Neón */
        .status-dot {
            width: 8px;
            height: 8px;
            background: var(--neon-cyan);
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 10px var(--neon-cyan);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
            100% { opacity: 1; transform: scale(1); }
        }

        /* Botón de Lanzamiento Pro */
        .btn-launch {
            width: 100%;
            padding: 1rem;
            background: rgba(0, 242, 254, 0.1);
            border: 1px solid var(--neon-cyan);
            color: var(--neon-cyan);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.7rem;
            transition: all 0.4s ease;
            text-align: center;
        }

        .btn-launch:hover {
            background: var(--neon-cyan);
            color: #000;
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.4);
        }

        /* Ayudas Visuales: Mockups Simulados */
        .mockup-preview {
            width: 100%;
            height: 120px;
            background: #111;
            border-radius: 12px;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mockup-preview div {
            position: absolute;
            width: 80%;
            height: 80%;
            top: 10%;
            left: 10%;
            background: var(--accent-blue);
            opacity: 0.2;
            filter: blur(20px);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col relative">

    <div id="particles-js"></div>

    <header class="w-full p-6 flex justify-between items-center border-b border-white/5 z-10 glass-nav">
        <div class="flex items-center space-x-3">
            <div class="w-8 h-8 rounded-full bg-cyan-950 border border-cyan-600 flex items-center justify-center">
                <span class="text-cyan-300 font-bold">M</span>
            </div>
            <span class="text-lg font-tech font-bold tracking-tight text-white">SYSTEM<span class="text-cyan-400 font-light">_EXPLORER</span></span>
        </div>
        <div class="flex items-center space-x-4 text-xs font-mono text-gray-500">
            <span>QUITO_ECUADOR</span>
            <span class="text-cyan-400">•</span>
            <span id="digital-clock">00:00:00</span>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center p-8 md:p-16 z-10 relative overflow-hidden">
        
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-cyan-900/10 rounded-full blur-3xl opacity-50"></div>

        <div class="max-w-7xl mx-auto">
            
            <div class="mb-16 text-center">
                <h1 class="font-tech text-4xl md:text-5xl font-bold tracking-tight text-white">Central de Demostraciones Web</h1>
                <p class="mt-4 text-gray-400 max-w-xl mx-auto text-sm">Seleccione una arquitectura de solución para visualizar su implementación en tiempo real.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="glass-card p-10 rounded-2xl flex flex-col justify-between group">
                    <div>
                        <i class="fa-solid fa-scale-balanced text-4xl card-icon mb-8 block"></i>
                        <h4 class="font-tech text-xl font-bold mb-4 uppercase text-white group-hover:text-cyan-300 transition">Legal <br>Premium</h4>
                        <p class="text-gray-400 text-xs font-light leading-relaxed mb-10">Autoridad, prestigio y diseño impecable para firmas de alto nivel.</p>
                    </div>
                    <a href="opcion1.php" class="btn-launch inline-block text-center rounded-sm">Lanzar</a>
                </div>

                <div class="glass-card p-10 rounded-2xl flex flex-col justify-between group">
                    <div>
                        <i class="fa-solid fa-heart-pulse text-4xl card-icon mb-8 block"></i>
                        <h4 class="font-tech text-xl font-bold mb-4 uppercase text-white group-hover:text-cyan-300 transition">Salud <br>Digital</h4>
                        <p class="text-gray-400 text-xs font-light leading-relaxed mb-10">Limpieza, confianza y tecnología avanzada para centros médicos.</p>
                    </div>
                    <a href="opcion2.php" class="btn-launch inline-block text-center rounded-sm">Lanzar</a>
                </div>

                <div class="glass-card p-10 rounded-2xl flex flex-col justify-between group">
                    <div>
                        <i class="fa-solid fa-robot text-4xl card-icon mb-8 block"></i>
                        <h4 class="font-tech text-xl font-bold mb-4 uppercase text-white group-hover:text-cyan-300 transition">Nexus <br>Systems</h4>
                        <p class="text-gray-400 text-xs font-light leading-relaxed mb-10">Disrupción, innovación y energía para empresas tecnológicas.</p>
                    </div>
                    <a href="opcion3.php" class="btn-launch inline-block text-center rounded-sm">Lanzar</a>
                </div>

                <div class="glass-card p-10 rounded-2xl flex flex-col justify-between group">
                    <div>
                        <i class="fa-solid fa-seedling text-4xl card-icon mb-8 block"></i>
                        <h4 class="font-tech text-xl font-bold mb-4 uppercase text-white group-hover:text-cyan-300 transition">Raíces <br>& Futuro</h4>
                        <p class="text-gray-400 text-xs font-light leading-relaxed mb-10">Empatía, calidez y sostenibilidad para organizaciones sociales.</p>
                    </div>
                    <a href="opcion4.php" class="btn-launch inline-block text-center rounded-sm">Lanzar</a>
                </div>

            </div>
        </div>
    </main>

    <footer class="w-full p-5 border-t border-white/5 z-10 text-center text-[10px] uppercase tracking-[0.6em] text-gray-600 font-mono">
        Marx Echeverría • Fullstack Developer • Portfolio_Core v1.0
    </footer>

    <script>
        // Reloj Digital en tiempo real (UI detail)
        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('es-EC', { hour12: false });
            document.getElementById('digital-clock').textContent = timeString;
        }
        setInterval(updateClock, 1000);
        updateClock(); // Initial call

        // Efecto Parallax muy suave en las tarjetas basado en el movimiento del mouse
        document.addEventListener('mousemove', (e) => {
            const cards = document.querySelectorAll('.glass-card');
            const xAxis = (window.innerWidth / 2 - e.clientX) / 50;
            const yAxis = (window.innerHeight / 2 - e.clientY) / 50;
            
            cards.forEach(card => {
                // Solo aplicamos un toque muy sutil de movimiento de fondo
                card.style.backgroundPosition = `${50 + xAxis}% ${50 + yAxis}%`;
            });
        });
    </script>
</body>
</html>