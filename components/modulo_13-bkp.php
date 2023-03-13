<section class='modulo_13'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-6 px-0'>
                <?php if (have_rows('modulo_13_1')) : ?>
                    <?php while (have_rows('modulo_13_1')) : the_row(); ?>
                        <div class="bloco bloco-1">
                            <h2 class="titulo-1 f-800"><?php the_sub_field('titulo_1'); ?></h2>
                            <h3 class="titulo-2"><?php the_sub_field('titulo_2'); ?></h3>
                            <div class="d-flex mb-5">
                                <a class="sub-1 d-inline-flex" href="mailto:<?php the_field('email_geral', 'option'); ?>"><?php the_field('email_geral', 'option'); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6 px-0">
                <div class="bloco bloco-2">
                    <div class="ninja-form">
                        <?php echo do_shortcode(" [ninja_form id='2']"); ?>
                    </div>

                </div>

                <div class="bloco bloco-2">
                    <form action="javascript:void(0)" onsubmit="envioForm();return false">
                        <div class="formulario">
                            <div class="form-grupo">
                                <input id="nome_completo" type="text" class="form-input nao-visitado" name="nome_completo" required>
                                <label class="form-label" for="nome_completo">Nome completo</label>
                                <label for="nome_completo" class="form-close">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_347_1054)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 14C18.47 14 14 18.47 14 24C14 29.53 18.47 34 24 34C29.53 34 34 29.53 34 24C34 18.47 29.53 14 24 14ZM24 32C19.59 32 16 28.41 16 24C16 19.59 19.59 16 24 16C28.41 16 32 19.59 32 24C32 28.41 28.41 32 24 32ZM24 22.59L27.59 19L29 20.41L25.41 24L29 27.59L27.59 29L24 25.41L20.41 29L19 27.59L22.59 24L19 20.41L20.41 19L24 22.59Z" fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_347_1054">
                                                <rect x="4" y="4" width="40" height="40" rx="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <span class="form-resp"></span>
                            </div>
                            <div class="form-grupo">
                                <input id="email" type="email" inputmode="email" x-inputmode="email" class="form-input nao-visitado" name="email" required title="Email válido: seuemail@dominio.com">
                                <label class="form-label" for="email">E-mail</label>
                                <label for="email" class="form-close">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_347_1054)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 14C18.47 14 14 18.47 14 24C14 29.53 18.47 34 24 34C29.53 34 34 29.53 34 24C34 18.47 29.53 14 24 14ZM24 32C19.59 32 16 28.41 16 24C16 19.59 19.59 16 24 16C28.41 16 32 19.59 32 24C32 28.41 28.41 32 24 32ZM24 22.59L27.59 19L29 20.41L25.41 24L29 27.59L27.59 29L24 25.41L20.41 29L19 27.59L22.59 24L19 20.41L20.41 19L24 22.59Z" fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_347_1054">
                                                <rect x="4" y="4" width="40" height="40" rx="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <span class="form-resp"></span>
                            </div>
                            <div class="form-grupo">
                                <input id="telefone" type="text" inputmode="tel" x-inputmode="tel" class="form-input nao-visitado" name="telefone" data-mask="(00) 000000000" required>
                                <label class="form-label" for="telefone">Telefone</label>
                                <label for="telefone" class="form-close">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_347_1054)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 14C18.47 14 14 18.47 14 24C14 29.53 18.47 34 24 34C29.53 34 34 29.53 34 24C34 18.47 29.53 14 24 14ZM24 32C19.59 32 16 28.41 16 24C16 19.59 19.59 16 24 16C28.41 16 32 19.59 32 24C32 28.41 28.41 32 24 32ZM24 22.59L27.59 19L29 20.41L25.41 24L29 27.59L27.59 29L24 25.41L20.41 29L19 27.59L22.59 24L19 20.41L20.41 19L24 22.59Z" fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_347_1054">
                                                <rect x="4" y="4" width="40" height="40" rx="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <span class="form-resp"></span>
                            </div>
                            <div class="form-grupo">
                                <select name="assunto" class="form-input nao-visitado" id="assunto">
                                    <option value="0" class="disabled" selected disabled>Assunto</option>
                                    <option value="1">bla bla 1</option>
                                    <option value="2">bla bla 2</option>
                                    <option value="3">bla bla 3</option>
                                </select>
                                <label for="assunto" class="form-close">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_347_1054)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 14C18.47 14 14 18.47 14 24C14 29.53 18.47 34 24 34C29.53 34 34 29.53 34 24C34 18.47 29.53 14 24 14ZM24 32C19.59 32 16 28.41 16 24C16 19.59 19.59 16 24 16C28.41 16 32 19.59 32 24C32 28.41 28.41 32 24 32ZM24 22.59L27.59 19L29 20.41L25.41 24L29 27.59L27.59 29L24 25.41L20.41 29L19 27.59L22.59 24L19 20.41L20.41 19L24 22.59Z" fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_347_1054">
                                                <rect x="4" y="4" width="40" height="40" rx="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <span class="form-resp"></span>
                            </div>
                            <div class="form-grupo">
                                <textarea id="mensagem" type="text" class="form-input nao-visitado" minlength="0" name="mensagem" required></textarea>
                                <label class="form-label" for="mensagem">Mensagem</label>
                                <label for="mensagem" class="form-close">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_347_1054)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 14C18.47 14 14 18.47 14 24C14 29.53 18.47 34 24 34C29.53 34 34 29.53 34 24C34 18.47 29.53 14 24 14ZM24 32C19.59 32 16 28.41 16 24C16 19.59 19.59 16 24 16C28.41 16 32 19.59 32 24C32 28.41 28.41 32 24 32ZM24 22.59L27.59 19L29 20.41L25.41 24L29 27.59L27.59 29L24 25.41L20.41 29L19 27.59L22.59 24L19 20.41L20.41 19L24 22.59Z" fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_347_1054">
                                                <rect x="4" y="4" width="40" height="40" rx="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </label>
                                <span class="form-resp"></span>
                            </div>
                            <div class="form-grupo">
                                <input class="btn-1 ml-auto disabled" type="submit" value="ENVIAR">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<script async>
    var nomeForm, emailForm, telefoneForm, assuntoForm, mensagemForm;
    $(document).ready(function() {
        $('.modulo_13 .bloco-2 .formulario input.form-input').focus(function() {
            $(this).siblings('.form-close').addClass('ativo');
        }).focusout(function() {
            $(this).siblings('.form-close').removeClass('ativo');
        })
        $('.modulo_13 .bloco-2 .formulario .form-close').on('click', function() {
            $(this).siblings('.form-input').val('');
        })
        $('.modulo_13 .bloco-2 .formulario .form-input').on('click', function() {
            event.preventDefault();
            $(this).removeClass('nao-visitado')
        });
        $('.modulo_13 .bloco-2 .formulario .form-input').keydown(function() {
            nomeForm = $('.modulo_13 .bloco-2 .formulario .form-input[name="nome_completo"]').val();
            emailForm = $('.modulo_13 .bloco-2 .formulario .form-input[name="email"]').val();
            telefoneForm = $('.modulo_13 .bloco-2 .formulario .form-input[name="telefone"]').val();
            assuntoForm = $('.modulo_13 .bloco-2 .formulario .form-input[name="assunto"] option:selected').val();
            mensagemForm = $('.modulo_13 .bloco-2 .formulario .form-input[name="mensagem"]').val();
            // console.log(nomeForm, emailForm, telefoneForm, assuntoForm, mensagemForm)
            if (!nomeForm == '' && !emailForm == '0' && !telefoneForm == "" && !assuntoForm == '' && !mensagemForm == "") {
                $('.modulo_13 .bloco-2 .formulario .btn-1').removeClass('disabled');
                console.log('sim')
            } else {
                $('.modulo_13 .bloco-2 .formulario .btn-1').addClass('disabled');
                console.log('nao')
            }
        })
        $('.ninja-form .nf-field-element input[type="tel"]').mask('(00) 00000-0000');


    });
    window.addEventListener('load', function() {
        $('.modulo_13 .bloco-2 .formulario .form-input').val('');
        $('.modulo_13 .bloco-2 .formulario select.form-input').val('0');

    });

    function envioForm() {
        event.preventDefault();
        alert('enviado')
    }
</script>