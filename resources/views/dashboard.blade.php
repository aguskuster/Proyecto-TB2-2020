@include('templates/header')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Raleway', sans-serif;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        overflow: hidden;
        margin: auto;
        padding: 60px 0;
    }

    header {
        height: 100vh;
        background-image: linear-gradient(to top, rgb(161, 140, 209, 0.2) 0%, rgb(251, 194, 235, 0.3) 100%), url(https://images.unsplash.com/photo-1542598953-41310c43f54b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80);
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .head {
        text-align: center;
        padding: 0;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: #ffffff;
    }

    .menu {
        position: fixed;
        top: 30px;
        right: 30px;
        background: #ffffff;
        width: 40px;
        height: 40px;
        cursor: pointer;
        border-radius: 10px;
        box-shadow: 0 0 6px rgba(0, 0, 0, .5);
    }


    .title {
        font-size: 60px;
        margin-bottom: 15px;
    }

    .copy {
        font-weight: 300;
        font-size: 25px;
    }

    .subtitle {
        text-align: center;
        font-weight: 300;
        color: #9f8ad0;
        margin-bottom: 40px;
        font-size: 40px;
    }

    .container-product {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-wrap: wrap;
    }

    .container-product img {
        width: 40%;
    }

    .checklist-product {
        width: 45%;
    }

    .product {
        margin-bottom: 25px;
    }

    .n-product {
        margin-bottom: 10px;
    }

    .gallery {
        background: #f2f2f2;
    }

    .container-gallery {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .img-gallery {
        object-fit: cover;
        width: 30%;
        display: flex;
        margin-bottom: 15px;
        box-shadow: 0 0 6px rgba(0, 0, 0, .5);
        cursor: pointer;
    }
  

</style>


<header class="header" id="home"
        style="background-image: linear-gradient(to top, rgb(161, 140, 209, 0.2) 0%, rgb(251, 194, 235, 0.3) 100%), url(https://images.unsplash.com/photo-1542598953-41310c43f54b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80);">
        <div class="container head">
            <h1 class="title">Insumos Informaticos</h1>
            <p class="copy">Lo ultimo en tecnologia e Informatica</p>
        </div>
        <main>
            <section class="container" id="products">
                <h2 class="subtitle">Productos mas pedidos</h2>
                <div class="container-product">
                    <div class="checklist-product">
                        <div class="product">
                            <img src="https://www.infinit.com.uy/imgs/productos/productos35_10828.jpg" alt="Gabinete Gamer"
                                style="float:left; width: 100px; height:100px;">
                            <h3 class="n-product" style="color: red">Gabinete Gamer</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit blanditiis quos
                                perferendis eveniet! Nobis doloremque corporis odio rerum cumque iure.</p>
                        </div>
                        <div class="product">
                            <img src="https://zowie.benq.com/content/dam/game/en/product/mouse/ec1-b-csgo/gallery/ec1-b-csgo-07.png" alt="ZOWIE EC1-B" style="float:left; width: 100px; height:100px;">
                            <h3 class="n-product" style="color: #9f8ad0;">ZOWIE EC1-B</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit blanditiis quos
                                perferendis eveniet! Nobis doloremque corporis odio rerum cumque iure.</p>
                        </div>
                        <div class="product">
                            <img src="https://rog.asus.com/websites/global/products/sqlhk1j3w9jgpcci/img/z490/kv/hero.png" alt="Motherboard Asus" style="float:left; width: 100px; height: 120px;">
                            <h3 class="n-product" style="color: black;">Motherboard Asus</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit blanditiis quos
                                perferendis eveniet! Nobis doloremque corporis odio rerum cumque iure.</p>
                        </div>
                    </div>
                </div>

            </section>
            <section class="gallery" id="gallery">
                <div class="container">
                    <h2 class="subtitle">Catalogo de Productos en Stock</h2>
                    <div class="container-gallery">
                        <img src="https://i.ebayimg.com/images/g/iKEAAOSwhmNfCPLp/s-l300.jpg" alt="" class="img-gallery">
                        <img src="https://sepimportaciones.com.uy/2149/silla-gamer-sades-orion.jpg" alt="" class="img-gallery">
                        <img src="https://i0.wp.com/www.gameshedge.com/wp-content/uploads/2020/09/Zotac-RTX-3090-1.jpg?fit=696%2C510&ssl=1" alt="" class="img-gallery">
                        <img src="https://www.neobyte.es/37478-large_default/procesador-intel-i9-9820x-33-socket-2066.jpg" alt="" class="img-gallery">
                        <img src="https://media.kingston.com/hyperx/product/hx-product-mousepad-fury-ultra-1-zm-lg.jpg" alt="" class="img-gallery">
                        <img src="https://c1.neweggimages.com/ProductImage/A4RE_131926891168954839cQ4uPQ916s.jpg" alt="" class="img-gallery">
                    </div>
                </div>
            </section>
        </main>
    </header>

   

@include('templates/footer')