<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite("resources/css/app.css")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/pata.png') }}" type="image/x-icon">
    <title>Página Principal</title>
</head>
<body>
    <header class="flex bg-zinc-200 w-full p-3 flex-1 items-center justify-center">
        <nav class="container relative h-14 flex items-center justify-between">
            <div>
                <a href="{{ url('/home') }}"><img class="max-w-14" src={{ asset('img/gatito.png') }}></a>
            </div>
            <div class="hidden border-b md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
                <ul class="flex items-center justify-around text-center gap-12 md:flex-row menu_mode">
                    <li>
                    <a class="font-bold" href="{{ url('/quemsomos') }}">Quem Somos</a>
                    </li>
                    <li>
                    <a class="font-bold" href="{{ url('/contato') }}">Contato</a>
                    </li>
                </ul>
                <div class="absolute top[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
                <span class="material-symbols-outlined">close</span>
                </div>
            </div>
        </nav>
    </header>

    <div id="default-carousel" class="relative w-full h-full border-b-8 border-rose-900" data-carousel="static" >
    <div class="relative h-96 overflow-hidden rounded-t-lg md:h-96">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="../../img/gato1.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ asset('img/gato2.jpeg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ asset('img/gatoSubstituto.jpg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ asset('img/gato4.jpeg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ asset('img/gato5.jpeg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- bolinhas de mudar -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- seta de mudar -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-rose-100 dark:bg-rose-800 group-hover:bg-rose-950 dark:group-hover:bg-rose-950 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-rose-100 dark:bg-rose-800 group-hover:bg-rose-950 dark:group-hover:bg-rose-950 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Próximo</span>
        </span>
    </button>
</div>

<div>
    <h1 class="text-black text-4xl p-6">Gregório C.</h1>
    <p class="px-6">
        O charme de Greg é irresistível. Seu pelo macio e brilhante, de um tom que reflete sua personalidade vibrante, é um convite constante para afagos e carinhos. Ele se delicia com cada toque, ronronando de contentamento e fechando os olhos em pura felicidade. Greg transforma cada interação em um momento especial, lembrando-nos de valorizar os pequenos gestos de carinho e atenção.

        Gregório, ou Greg, é verdadeiramente o melhor gato do mundo. Ele é uma combinação perfeita de beleza, inteligência, lealdade e amor. Cada dia ao lado dele é um presente, uma lembrança constante do que significa viver com alegria e gratidão. Greg não é apenas um gato
    </p>
</div>
<div class="p-6">
    <h2 class="text-2xl">Quer um Greg na sua vida?</h2>
    <h4 class="text-xl">Adote um gato!</h4>
</div>
<ul class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-12 px-6">
    <li class="item_wrap manha tarde noite">
        <div class="h-56 grid palce-items-center bg-rose-950 rounded-3xl hover:bg-rose-900 ease-linear duration-200 flex items-center justify-center">
            <a href="{{ url('http://www.adoteumgatinho.com.br/') }}"> <img src={{ asset('img/gatoconf.jpg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"></a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Adote um Gatinho</h4>
                <p class="paragraph">O Adote um Gatinho busca lares para gatos encontrados abandonados na Grande São Paulo e também trabalha para conscientizar as pessoas sobre a importância da castração e posse responsável.</p>
            </div>
        </div>
    </li>

    <li class="item_wrap manha">
        <div class="h-56 grid palce-items-center bg-rose-950 rounded-3xl hover:bg-rose-900 ease-linear duration-200 flex items-center justify-center">
            <a href="{{ url('https://www.miadoselatidos.org.br/') }}"><img src={{ asset('img/gatolatidosemiados.jpg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"></a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Confraria dos miados e latidos</h4>
                <p class="paragraph"> Proporcionando bem estar e qualidade de vida à maior quantidade possível de cães e gatos, conhecendo suas necessidades, respeitando suas particularidades e contribuindo para sua relação com os seres humanos.</p>
            </div>
        </div>
    </li>

    <li class="item_wrap manha tarde">
        <div class="h-56 grid palce-items-center bg-rose-950 rounded-3xl hover:bg-rose-900 ease-linear duration-200 flex items-center justify-center">
            <a href="{{ url('https://www.prefeitura.sp.gov.br/cidade/secretarias/saude/saude_e_protecao_ao_animal_domestico/index.php?p=277115') }}"><img src={{ asset('img/gatogoverno.jpg') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"></a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">Prefeitura de São Paulo</h4>
                <p class="paragraph">Gostou de algum mascote? Compareça ao Centro Municipal de Adoção – Rua Santa Eulália, 86 - Santana, de segunda a sexta-feira das 9h às 17h e aos sábados das 9h às 15h, exceto feriados.
                </p>
            </div>
        </div>
    </li>
    <li class="item_wrap tarde">
        <div class="h-56 grid palce-items-center bg-rose-950 rounded-3xl hover:bg-rose-900 ease-linear duration-200 flex items-center justify-center">
           <a href="{{ url('https://catland.org.br/') }}"> <img src={{ asset('img/gatocatland.png') }} class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24"> </a>
        </div>
        <div class="pt-5">
            <div class="mb-2">
                <h4 class="cardd__title">CatLand</h4>
                <p class="paragraph">O principal objetivo da Catland é sensibilizar a sociedade sobre a adoção e posse responsável, por meio de ações efetivas como palestras e eventos. Todo nosso trabalho é realizado por uma equipe de voluntários dedicados e dispostos a fazer do mundo um lugar melhor para os gatinhos.</p>
            </div>
        </div>
    </li>
</ul>
<footer class="bg-zinc-200 mt-8">
    <section class="footer">
        <div class="px-6 pt-8">
            <ul class="grid grid-cols-1 items-start gap-2 pb-5 md:grid-cols-3">
                <li>
                    <div class="space-y-3">
                        <a href="#" class="text-4xl font-oswald uppercase">
                        Greg <span class="text-red-800">Inspire</span>
                        </a>
                        <p class="text-xs text-justify">
                            Gregório, carinhosamente conhecido como Greg, é indiscutivelmente o melhor gato do mundo. Este felino magnífico não é apenas um simples animal de estimação, mas uma presença luminosa que transforma qualquer ambiente em um espaço de alegria e aconchego.
                        </p>
                    </div>
                </li>

                <li class="space-y-8 pl-16">
                    <div class="space-y-2">
                        <h3 class="text-lg uppercase font-oswald">Contato</h3>
                        <p class="flex items-center gap-2 text-xs">
                            <span class="material-symbols-outlined text-lg text-red-800">call</span>
                            +55 (11)XXXXX-XXXX
                        </p>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg uppercase font-oswald">Email</h3>

                        <p class="flex items-center gap-2 text-xs">
                        <span class="material-symbols-outlined text-lg text-red-800">mail</span>
                            greg@greg.com
                        </p>
                    </div>
                </li>

                <li class="space-y-8">
                    <div class="space-y-2">
                        <h3 class="text-lg uppercase font-oswald">Endereço</h3>
                        <p class="flex items-center gap-2 text-xs">
                        <span class="material-symbols-outlined text-lg text-red-800">location_on</span>
                            Lorem Ipsum, XX
                        </p>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg uppercase font-oswald">Acompanhe</h3>
                        <div class="space-x-3">
                            <i class="fa-brands fa-instagram text-lg cursor-pointer text-red-800 hover:-translate-y-1 ease-in duration-200"></i>
                            <i class="fa-brands fa-facebook text-lg cursor-pointer text-red-800 hover:-translate-y-1 ease-in duration-200"></i>
                            <i class="fa-brands fa-x-twitter text-lg cursor-pointer text-red-800 hover:-translate-y-1 ease-in duration-200"></i>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="flex flex-col items-center border-t border-red-800 py-5 md:flex-row md:justify-between">
                <p class="paragraph">Greg Inspire</p>
                <p class="paragraph"> Copyright © 2024 Todos os direitos reservados.</p>
            </div>

        </div>
    </section>
</footer>
<!--JAVASCRIPT-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
const carouselItems = document.querySelectorAll('[data-carousel-item]');
const carouselPrevBtn = document.querySelector('[data-carousel-prev]');
const carouselNextBtn = document.querySelector('[data-carousel-next]');
let currentSlide = 0;
let timer; // Variável para armazenar o temporizador

// Função para mostrar o slide atual e esconder os outros
function showSlide(index) {
carouselItems.forEach((item, i) => {
if (i === index) {
    item.classList.remove('hidden');
} else {
    item.classList.add('hidden');
}
});
}

// Função para mostrar o próximo slide
function nextSlide() {
currentSlide = (currentSlide + 1) % carouselItems.length;
showSlide(currentSlide);
}

// Função para mostrar o slide anterior
function prevSlide() {
currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
showSlide(currentSlide);
}

// Adicionar ouvintes de eventos para os botões de navegação
carouselPrevBtn.addEventListener('click', function() {
clearTimeout(timer); // Limpa o temporizador ao clicar no botão de navegação
prevSlide();
autoAdvance(); // Reinicia o avanço automático
});

carouselNextBtn.addEventListener('click', function() {
clearTimeout(timer); // Limpa o temporizador ao clicar no botão de navegação
nextSlide();
autoAdvance(); // Reinicia o avanço automático
});

// Iniciar o avanço automático ao carregar a página
autoAdvance();
});

</script>
</body>
</html>