<?php

require 'config.php';
if(!isset($_SESSION)){
  session_start(); 

} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta name="description" content="Obasan Sushi: Pedí fácil y rápido online. Rolls, Hot Rolls y más."/>
    <meta name="keywords" content="Sushi, rolls, makis, harumakis."/>
    <meta name="google-site-verification" content="SczZgMypo2aFMLSu_D5AouCGKe6VtnknG8B1Ry65uVs" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
   
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H8G15XE79M"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-H8G15XE79M');
    </script>
    
            <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '737713707146568'); 
        fbq('track', 'PageView');
        </script>
        <noscript>
         <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=737713707146568&ev=PageView
        &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
 
    <title>Obasan Sushi</title>
</head>
<body class="container">

    <header class="header">

        <div class="navigation">
            
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
              <span class="navigation__icon">&nbsp;</span>
            </label>

          <div class="navigation__background">&nbsp;</div>

              <nav class="navigation__nav">
                  <ul class="navigation__list">
                      <li class="navigation__item"><a href="#inicio" class="navigation__link">Inicio</a></li>
                      <li class="navigation__item"><a href="#nosotros" class="navigation__link">Nosotros</a></li>
                      <li class="navigation__item"><a href="#pedido" class="navigation__link">Hacé tu pedido</a></li>
                      <!-- <li class="navigation__item"><a href="promos.html" class="navigation__link">Promos</a></li> -->
                      <li class="navigation__item"><a href="#menu" class="navigation__link">Menu</a></li>
                      <li class="navigation__item"><a href="#contact" class="navigation__link">Contacto</a></li>
              
                  </ul>
              </nav>
            </div>

            <script>

                let link = document.getElementsByClassName('navigation__link');
                let checkBox = document.getElementById('navi-toggle');

                    for(let i = 0; i < link.length; i++){
                        link[i].addEventListener('click', checkBoxOff);
                     
                }
                function checkBoxOff(){
                    checkBox.checked = false;
            }

            </script>
        <div class="header__logo">
            <img src="img/logo-white.png" alt="" class="logo">
        </div>
        <!-- <img src="img/o4.png" alt="" class="header__image"> -->
        <!-- <h1 class="heading-1">Obasan</h1>
        <span class="subtitle">Sushi</span> -->
     
        <button class="btn header__btn" data-aos="fade-down" onclick="location.href='#pedido' ">Hacé tu pedido</button>
    </header>


  
    <section class="section-nosotros" id="nosotros">
       
        <div class="nosotros">
            <div class="nosotros__texto" data-aos="fade-up">
                <h2 class="heading-2 heading-2-nosotros" data-aos="fade-down">Nosotros</h2>
            Teniendo como norte el brindar un nuevo concepto culinario en la Ciudad de Buenos Aires, 
            ofreciendo máxima calidad al mejor precio posible.

          Gracias al apoyo de nuestros clientes, experimentamos una explosión de crecimiento en el mercado. 
          Somos diseñadores del buen gusto, y nos esforzamos para que absolutamente cada ingrediente componga una pieza perfecta.
            </div>
            <div class="nosotros__photo">
                    <img src="img/o9.png" alt="" class="nosotros__photo--picture">
            </div>
        </div>
    </section>

    <div class="intersection" id="pedido">
        <h2 class="heading-2 heading-2-pedido" data-aos="fade-up"  data-aos-delay="250">Hacé tu pedido</h2>
      
        <div class="pedido">
            <a href="https://www.pedidosya.com.ar/restaurantes/san-martin/obasan-sushi-menu" target="blank" class="pedidos pedidos--1" data-aos="fade-up" data-aos-delay="500">
                PedidosYa
              
            </a>
            <a href="https://pedidos.masdelivery.com/obasan-sushi?utm_source=web&utm_medium=order-button&utm_campaign=obasan-sushi" target="blank" class="pedidos pedidos--2" data-aos="fade-up"  data-aos-delay="750"> 
                MasDelivery
                 <span class="descuento">(20% de descuento)</span> 
                
            </a>
            <a href="https://www.pedidosporwhatsapp.com.ar/obasansushi" target="blank" class="pedidos pedidos--3" data-aos="fade-up"  data-aos-delay="1000">
                Takeaway
            </a>
        </div>
      
    </div>
    <section class="section-menu" id="menu">
        <h2 class="heading-2 heading-2-menu" data-aos="fade-up">Menú</h2>
        <div class="menu">
            <div class="menu__item" data-aos="fade-left">
                <h3 class="heading-3">Rolls clásicos</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Roll california</h4>
                        <span class="menu__content--name">karikama y palta envuelto en alga nori, arroyz y sésamo.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Roll vegetariano</h4>
                        <span class="menu__content--name">Palta, zanahoria, queso philadelhpia envuelto en alga, arroz y sésamo</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Roll atún</h4>
                        <span class="menu__content--name">atún al natural envuelto en alga, arroz y sésamo</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Roll New York</h4>
                        <span class="menu__content--name">Salmón rosado, palta y queso philadelphia envuelto en alga nori, arroz y sésamo
                        </span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Roll New York Phila</h4>
                        <span class="menu__content--name">Salmón rosado y queso philadelphia envuelto en envuelto en alga nori, arroz y sésamo</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Roll Philadelphia</h4>
                        <span class="menu__content--name">Salmón rosado y queso philadelphia envuelto en alga nori, arroz y sésamo</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Roll Langostino</h4>
                        <span class="menu__content--name">Langostinos hervidos al vapor y queso philadelphia envuelto en alga nori, arroz y sésamo</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">New Cheese</h4>
                        <span class="menu__content--name">Salmón rebozado en panko y frito, queso philadelphia envuelto en alga, arroz y sésamo</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Golden </h4>
                        <span class="menu__content--name">Queso philadelphia y palta envuelto en alga nori, arroz y cubierto con salmon rosado.
                        </span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ahumado Roll</h4>
                        <span class="menu__content--name">Salmón ahumado, palta, queso philadelphia envuelto en alga nori, arroz y sésamo.</span>
                    </li>
                </ul>
            </div>
            <div class="menu__photo" >
                <img src="/img/o2.png" alt="" class="menu__image menu__image--1" data-aos="fade-right">
            </div>
        </div>
        <div class="menu">
            <div class="menu__photo" >
                <img src="/img/o3.png" alt="" class="menu__image menu__image--2" data-aos="fade-left">
            </div>
            <div class="menu__item" data-aos="fade-right">
                <h3 class="heading-3">Rolls especiales</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Trisalmón</h4>
                        <span class="menu__content--name">Relleno de salmon rebozado, tartar de salmon y palta cubierto con salmon fresco.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Pasión Roll</h4>
                        <span class="menu__content--name">Relleno de langostinos rebozados en panko y queso philadelphia cubierto con mango y salsa de maracuyá.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Buenos Aires</h4>
                        <span class="menu__content--name">Langostinos, queso philadelphia y palta cubierto con salmón rosado.
                        </span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Tamago</h4>
                        <span class="menu__content--name">Salmón y queso philadelphia cubierto en tamago.
                        </span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Fresh Roll</h4>
                        <span class="menu__content--name">Salmón rosado envuelto en arroz y cubierto de palta.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Crazy Roll</h4>
                        <span class="menu__content--name">Queso philadelphia, palta y arroz envuelto en alga nori cubierto con salmón.o</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Boston</h4>
                        <span class="menu__content--name">Salmón ahumado, queso philadelphia y durazno envuelto en arroz y sésamo</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Green Roll</h4>
                        <span class="menu__content--name">Relleno de cebolla crocante, queso philadelphia y espárrago cubierto con palta.
                        </span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ebiteri </h4>
                        <span class="menu__content--name">Relleno de langostino rebozado en panko y queso philadelphia cubierto con salmón y decorado con limón.
                        </span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Tataki Roll</h4>
                        <span class="menu__content--name">Relleno de salmón coronado con tartar de salmón y verdeo.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Wacamole Roll</h4>
                        <span class="menu__content--name">Salmón y queso philadelphia envuelto en alga nori y arroz coronado con wacamole.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Avocado Roll</h4>
                        <span class="menu__content--name">Salmóñ rebozado en panko envuelto en alga nori y arroz cubierto con palta.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ed Fried Roll</h4>
                        <span class="menu__content--name">Relleno de langostino rebozado en panko con salsa de miel y mostaza.</span>
                    </li>
                </ul>
            </div>
          
        </div>
        <div class="menu">
       
            <div class="menu__item" data-aos="fade-left">
                <h3 class="heading-3">Nigiris</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Salmón</h4>
                        <span class="menu__content--name">Brocado de arroz cubierto con salmón..</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ahumado</h4>
                        <span class="menu__content--name">Bocado de arroz cubierto con salmón ahumado.</span>
                    </li>
                    
                </ul>
                <h3 class="heading-3 u-margin-top-4">Geishas</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Salmón</h4>
                        <span class="menu__content--name">Queso philadelphia y palta envuelto en fino corte de salmón.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Geishas tropical</h4>
                        <span class="menu__content--name">Queso philadelphia y mango envuelto en fino corte de salmón y salsa maracuyá</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Langostino</h4>
                        <span class="menu__content--name">Queso philadelphia y langostino envuelto en fino corte de salmón</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ahumado</h4>
                        <span class="menu__content--name">Queso philadelphia y palta envuelto en fino corte de salmón ahumado.</span>
                    </li>
                    
                </ul>
                <h3 class="heading-3 u-margin-top-4">Sashimis</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Salmón</h4>
                        <span class="menu__content--name">Finos cortes de lomo de salmón rosado.</span>
                    </li>
                </ul>
                <h3 class="heading-3 u-margin-top-4">Harumaki</h3>
                <ul class="menu__list">
                    <li class="menu__content">
             
                        <span class="menu__content--name">Arrollados fritos de masa crocante rellenos de carne y verdura</span>
                    </li>
                    
                </ul>
            </div>
            <div class="menu__photo" >
                <img src="/img/O1.png" alt="" class="menu__image menu__image--3" data-aos="fade-right">
            </div>
         
        </div>

        <div class="menu">
            <div class="menu__photo">
                <img src="/img/o6.png" alt="" class="menu__image menu__image--4" data-aos="fade-left">
            </div>
            <div class="menu__item" data-aos="fade-right">
                <h3 class="heading-3">Hot Rolls</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Hot Age</h4>
                        <span class="menu__content--name">Roll sin arroz relleno con salmón, queso philadelphia y palta, rebozado en panko y frito.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Hot Phila</h4>
                        <span class="menu__content--name">Roll relleno con salmón y queso philadelphia envuelto en arroz, rebozado en panko y frito.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Hot Lango</h4>
                        <span class="menu__content--name">Roll relleno de langostino y queso philadelphia envuelto en arroz, rebozado en panko y frito.</span>
                    </li>   
                    <li class="menu__content">
                        <h4 class="menu__content--title">Mariachi</h4>
                        <span class="menu__content--name">Roll relleno de salmón y queso philadelphia coronado con guacamole, rebozado en panko y frito.</span>
                    </li>   
             
                </ul>
            </div>
        </div>
        <div class="menu">
            <div class="menu__item" data-aos="fade-right">
                <h3 class="heading-3">Makis</h3>
                <ul class="menu__list">
                    <li class="menu__content">
                        <h4 class="menu__content--title">Salmón</h4>
                        <span class="menu__content--name">Roll cubierto con alga nori, relleno de arroz y salmón rosado.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Ahumado</h4>
                        <span class="menu__content--name">Roll cubierto con alga nori, relleno de arroz y salmón ahumado.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Kanikama</h4>
                        <span class="menu__content--name">Roll cubierto con alga nori, relleno de arroz y kanikama.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Atún</h4>
                        <span class="menu__content--name">Roll cubierto con alga nori, relleno de arroz y atún.</span>
                    </li>
                    <li class="menu__content">
                        <h4 class="menu__content--title">Vegetariano</h4>
                        <span class="menu__content--name">Roll cubierto con alga nori, relleno de arroz, zanahoria, pepino y palta.</span>
                    </li>
                    
                </ul>
            </div>
            <div class="menu__photo" >
                <img src="/img/o5.png" alt="" class="menu__image menu__image--5" data-aos="fade-left">
            </div>
        </div>
    </div>


    <div class="menu">
        <div class="menu__photo">
            <img src="/img/o7.png" alt="" class="menu__image menu__image--6" data-aos="fade-down">
        </div>
        <div class="menu__item" data-aos="fade-up">
            <h3 class="heading-3">Combinados</h3>
            <ul class="menu__list">
                <li class="menu__content">
                    <h4 class="menu__content--title">Variado</h4>
                    <span class="menu__content--name">Incluye: California, atún, philadelphia y makis de salmón.</span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Todo salmón</h4>
                    <span class="menu__content--name">Incluye: Philadelphia, new york, golden, nigiris y makis de salmón.</span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Combinado Hot</h4>
                    <span class="menu__content--name">Incluye: Hot age, hot phila, hot lango, mariachi y harumakis.</span>
                </li>   
                <li class="menu__content">
                    <h4 class="menu__content--title">Premium</h4>
                    <span class="menu__content--name">Incluye: Buenos Aires, tamago, ahumado, tataki, geishas, nigiris y sashimis.</span>
                </li>   
         
            </ul>
        </div>
    </div>
    <div class="menu">
        <div class="menu__photo" >
            <!-- <img src="/img/foto8.png" alt="" class="menu__image menu__image--6" data-aos="fade-down"> -->
        </div>
        <div class="menu__item" data-aos="fade-up">
            <h3 class="heading-3">Futomakis</h3>
            <ul class="menu__list">
                <li class="menu__content">
                    <h4 class="menu__content--title">Phila</h4>
                    <span class="menu__content--name">Roll relleno de arroz, salmón y queso philadelphia envuelto en alga nori.</span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Atún</h4>
                    <span class="menu__content--name">Roll relleno de arroz y atún, envuelto en alga nori.</span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">New York Phila</h4>
                    <span class="menu__content--name">Relleno de arroz, salmón, queso philadelphia y palta envuelto en alga nori.</span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Atún</h4>
                    <span class="menu__content--name">Roll cubierto con alga nori, relleno de arroz y atún.</span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Vegetariano</h4>
                    <span class="menu__content--name">Relleno de arroz, zanahoria, queso philadelphia y palta envuelto en alga nori.</span>
                </li>
                
            </ul>
        </div>
       
    </div>
    <div class="menu">
        <div class="menu__item" data-aos="fade-left"> 
            <h3 class="heading-3">Sushi Salad</h3>
            <ul class="menu__list">
                <li class="menu__content">
                    <h4 class="menu__content--title">Clásica</h4>
                    <span class="menu__content--name">Arroz al estilo japonés , queso philadelphia, palta y salmón cortado en cubos
                    </span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Langostinos</h4>
                    <span class="menu__content--name">Arroz al estilo japonés, queso philadelphia, palta y langostinos hervidos al vapor.</span>
                </li>
                <li class="menu__content">
                    <h4 class="menu__content--title">Ebi Lango</h4>
                    <span class="menu__content--name">Arroz al estilo japonés, queso philadelphia, palta y langostinos rebozados en panko.</span>
                </li>   
                <li class="menu__content">
                    <h4 class="menu__content--title">Salmon Crunch</h4>
                    <span class="menu__content--name">Arroz al estilo japonés , queso philadelphia, palta y salmón rebozado en panko.</span>
                </li>   
                <li class="menu__content">
                    <h4 class="menu__content--title"></h4>
                    <span class="menu__content--name">Adicionales: Salsa Buenos Aires (Soja, miel y sésamo)- Salsa de soja - Jengibre - 
                        Salsa Miel y mostaza - Wasabi - Palitos</span>
                </li>   
            </ul>
        </div>
        <div class="menu__photo">
            <img src="/img/o8.png" alt="" class="menu__image menu__image--7" data-aos="fade-down">
        </div>
    </div>
        
    </section>

    
    <div class="contact" id="contact">

            <h2 class="heading-2 heading-2-contacto">Contacto</h2>

            <div class="contact__li">
                <ul class="contact__list">
                    <li class="contact__list__item"><span class="contact__list__info">Horarios de atención:</span></li>
                    <li class="contact__list__item"><span class="contact__list__info">Todos los días de 19:00 a 23:00 HS</span></li>
        
                </ul>
            </div>
         
            <?php if (isset($_SESSION['result'])): ?>

            <div class="show__message">
            <span class="mail_message"><?=$_SESSION['result']?></span>
            </div>
            
            <?php unset($_SESSION['result']);?>
            <?php endif; ?>
            
    

                <div class="contact__form__iframe">
                    <form action="mail.php" method="POST" class="contact__form">

                        <label for="nombre"></label>
                        <input type="text" name="nombre" placeholder="Nombre" class="contact__input">
        
                        <label for="email"></label>
                        <input type="email" name="email" placeholder="Email" required class="contact__input">
        
                        <textarea name="mensaje" placeholder="Dejanos tu mensaje" class="contact__textarea"></textarea>
        
                        <button name="submit" type="submit" class="btn header__btn">Enviar</button>
                    </form>
        
                    <iframe  height="450" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxZGcf5qwvJURqwiGQYKWcRU&key=<?=$key?>" 
                    allowfullscreen>
                    </iframe>

                </div>
      
    </div>
    <footer class="footer">
        <div class="footer__logo">
            <img src="img/3.png" alt="" class="footer__logo">
          
        </div>

        <div class="footer__mid">
            
            <div class="footer__socials">
             <a href="https://www.instagram.com/obasan_sushi/?hl=es" target="blank" class="footer__link"> <i class="footer__icons fab fa-instagram fa-2x"></i></a>
    
              <a href="https://wa.link/7znmn6" target="blank" class="footer__link">
                <i class="footer__icons fab fa-whatsapp fa-2x"></i>
              </a>
             <a href="https://www.facebook.com/obasansushi/" target="blank" class="footer__link"> <i class="footer__icons fab fa-facebook-square fa-2x"></i></a>
    
            </div>
          
            <ul class="footer__list">
              <li class="footer__item"><a href="#inicio" class="footer__link">Inicio</a></li>
              <li class="footer__item"><a href="#nosotros" class="footer__link">Nosotros</a></li>
              <li class="footer__item"><a href="#menu" class="footer__link">Menu</a></li>
              <li class="footer__item"><a href="#contact" class="footer__link">Contacto</a></li>
          </ul>
        </div>
    
      <div class="footer__emfes">
        <a href="https://emfesmarketing.com/" class="footer__emfes--link">Built by &copy; emfes marketing</a> 
      </div>
      </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>