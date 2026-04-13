<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaunchExpress</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <nav>
        <div class="logo">LaunchExpress</div>
        <ul>
            <li><a href="#features">Recursos</a></li>
            <li><a href="#how">Como funciona</a></li>
            <div class="theme-switch">
                <input type="checkbox" id="theme-checkbox" onclick="toggleTheme()" />
                <label for="theme-checkbox">
                    <div></div>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z">
                            </path>
                        </svg>
                    </span>
                </label>
            </div>
        </ul>
    </nav>

    <section class="hero">
        <div class="hero-text">
            <h1>Criação de sites com qualidade, <span>confiança</span> e velocidade</h1>
            <p>Tudo que você precisa para criar, lançar e escalar sua ideia — numa plataforma simples e poderosa.</p>
            <a href="#cta" class="btn btn-primary">Começar grátis</a>
            <a href="#features" class="btn btn-outline">Saiba mais</a>
        </div>
        <div class="hero-image">
            <div class="mockup"></div>
            <div class="hero-form">
                <div class="step-indicator" id="step-indicator">Passo 0 de 4</div>
                <form action="php/Controller/form.php" method="POST" class="lead-form">
                    <h3>Peça seu orçamento</h3>

                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>

                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" required>

                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" rows="4" required maxlength="250"></textarea>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </section>


    <section class="features" id="features">
        <h2 class="section-title">Por que escolher a LaunchExpress?</h2>
        <p class="section-sub">Pensado para você que quer alavancar em resultados</p>
        <div class="features-grid">
            <div class="card">
                <div class="icon">⚡</div>
                <h3>Rápido como o vento</h3>
                <p>Infraestrutura otimizada para garantir a melhor performance em qualquer escala.</p>
            </div>
            <div class="card">
                <div class="icon">🔒</div>
                <h3>Seguro por padrão</h3>
                <p>Seus dados e os de seus clientes protegidos com criptografia de ponta a ponta.</p>
            </div>
            <div class="card">
                <div class="icon">📊</div>
                <h3>Analytics em tempo real</h3>
                <p>Métricas claras para tomar decisões inteligentes e crescer com consistência.</p>
            </div>
            <div class="card">
                <div class="icon">🤝</div>
                <h3>Suporte dedicado</h3>
                <p>Time especializado pronto para te ajudar em cada etapa da sua jornada.</p>
            </div>
        </div>
    </section>

    <section class="how" id="how">
        <h2 class="section-title">Como funciona</h2>
        <p class="section-sub">Três passos simples para começar hoje mesmo.</p>
        <div class="steps">
            <div class="step">
                <div class="step-num">1</div>
                <h3>Crie sua conta</h3>
                <p>Cadastre-se gratuitamente em menos de 1 minuto, sem cartão de crédito.</p>
            </div>
            <div class="step">
                <div class="step-num">2</div>
                <h3>Configure seu projeto</h3>
                <p>Use nossos templates prontos ou comece do zero com total liberdade.</p>
            </div>
            <div class="step">
                <div class="step-num">3</div>
                <h3>Lance e escale</h3>
                <p>Publique com um clique e acompanhe seu crescimento em tempo real.</p>
            </div>
        </div>
    </section>

    <section class="cta-section" id="cta">
        <h2>Pronto para começar?</h2>
        <p>Junte-se a milhares de empreendedores que já estão crescendo com a LaunchExpress.</p>
        <a href="#" class="btn btn-white">Criar conta grátis</a>
    </section>

    <footer>
        <p>&copy; 2026 <span>LaunchExpress</span>. Todos os direitos reservados.</p>
    </footer>

    <script src="/assets/js/main.js"></script>

</body>

</html>