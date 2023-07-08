<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="icon" href="../Resources/designIcon.png">
        <link rel="stylesheet" href="../css/custom.css">
        <title>Contact</title>
        
        
    </head>
    <body>
        <?php
            include("share/navbar.html");
        ?>
        <section class="contact">
            <div class="max-width">
                <h2 class="title">Contato</h2>
                <div class="contact-content">
                <div class="column left">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec sed risus.
                            </p>
                            <div class="icons">
                                <div class="row">
                                    <i class="fa-solid fa-user"></i>
                                    <div class="info">
                                        <div class="head">
                                            Company
                                        </div>
                                        <div class="sub-title">
                                            Company-Name
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div class="info">
                                        <div class="head">
                                            Adress
                                        </div>
                                        <div class="sub-title">
                                            Rua Lorem ipsum
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <i class="fa-solid fa-user"></i>
                                    <div class="info">
                                        <div class="head">
                                            E-mail
                                        </div>
                                        <div class="sub-title">
                                            ipsum@gmail.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="column right">
                            <div class="text">
                                Contact Us
                            </div>
                            <form>
                                <div class="fields">
                                    <div class="field name">
                                        <input type="text" placeholder="Digite seu nome" required >
                                    </div>
                                    <div class="field email">
                                        <input type="email" placeholder="Digite seu e-mail" required >
                                    </div>
                                </div>

                                <div class="field">
                                    <input type="text" placeholder="Digite o assunto" required >
                                </div>
                                <div class="field textarea">
                                    <textarea cols="30" rows="10" placeholder="Digite o conteúdo"></textarea>
                                </div>

                                <div class="button-area">
                                    <button type="submit">Submit</button>
                                </div>

                            </form>
                        </div>     
                </div>
            </div>
        </section>

        <footer>
            <span>Created By <a href="https://github.com/Guilherme-S-S-F">Guilherme Filheiro</a></span>
        </footer>
        <script src="../js/custom.js"></script>
    </body>
</html>