<div class="infotravel-form infotravel-form-hospedagem">
    <div class="info-overlay">
        <div class="info-overlay-container">
            <div class="flex">
                <div class="loader"></div>
            </div>
            <div class="load-text">
                Buscando Melhores Ofertas...
            </div>
        </div>
    </div>
    <form action="javascript:motorDeBuscaHotel.enviaForm();" class="form-hotel">
        <style>
            .infotravel-form-hospedagem .info-input-style input[type="text"]#autocomplete-destino.ui-autocomplete-loading {
                background: white url(<?php echo plugin_dir_url( __FILE__ ) . '/css/images/loading.gif'; ?>) right center no-repeat;
            }
        </style>
        <div class="info-row">
            <div class="info-column info-column-12">
                <div class="info-input-style">
                    <label>Destino:</label> <input id="autocomplete-destino" name="destino" placeholder="Informe o hotel ou destino" required="" type="text"> <input id="stProprio" name="eTP" type="hidden" value="<?php echo get_option('hospedagem_exibir_tr'); ?>"> <input id="stProprio" name="urlDominio" type="hidden" value="<?php echo get_option('hospedagem_dominio'); ?>"> <input id="stProprio" name="stProprio" type="hidden" value="false"> <input id="idunidade" name="idunidade" type="hidden"> <input id="id" name="id" type="hidden"> <input id="tp" name="tp" type="hidden"> <input id="am" name="am" type="hidden">
                </div>
            </div>
        </div>
        <div class="info-row">
            <div class="info-column info-column-4">
                <div class="info-input-style">
                    <label>Entrada:</label> <input id="info-data-entrada" readonly="true" name="destino" required="" type="text">
                </div>
            </div>
            <div class="info-column info-column-4">
                <div class="info-input-style">
                    <label>Saida:</label> <input id="info-data-saida" readonly="true" name="destino" required="" type="text">
                </div>
            </div>
            <div class="info-column info-column-4">
                <div class="info-column info-column-12">
                    <div class="info-column info-column-6">
                        <div class="info-input-style info-input-quartos">
                            <label>Quartos:</label> <input aria-describedby="basic-quartos" autocomplete="off" id="quartos" name="quartos" placeholder="Informe o hotel ou destino" readonly="true" type="text" value="1">
                        </div>
                    </div>
                    <div class="info-column info-column-6">
                        <div class="info-input-style info-input-quartos">
                            <label>Pessoas:</label> <input aria-describedby="basic-pessoas" autocomplete="off" id="pessoas" name="pessoas" placeholder="Informe o hotel ou destino" readonly="true" type="text" value="1">
                        </div>
                    </div>
                </div>
                <div class="info-column info-column-12">
                    <div class="info-quartos-div" style="padding-bottom: 10px;">
                        <div class="info-column info-column-12">
                            <div id="info-quartos-article">
                                <article>
                                    <div class="info-quarto-header">
                                        Quarto 1
                                    </div>
                                    <div class="info-quartos">
                                        <label>Adultos:</label>
                                        <div class="info-btns info-adultosHotel">
                                            <div class="info-btn-menos" onclick="motorDeBuscaHotel.subAdulto(this);">
                                                <i class="fa fa-minus"></i>
                                            </div><input disabled name="adultosHotel" style="border-bottom: none;border-top: none;" type="text" value="1">
                                            <div class="info-btn-mais" onclick="motorDeBuscaHotel.addAdulto(this);">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-quartos" style="height: 49px;">
                                        <label>Crianças:</label> <span>(entre 2 e 11 anos)</span>
                                        <div class="info-btns info-criancaHotel">
                                            <div class="info-btn-menos" onclick="motorDeBuscaHotel.subCrianca(this);">
                                                <i class="fa fa-minus"></i>
                                            </div><input disabled name="criancaHotel" style="border-bottom: none;border-top: none;" type="text" value="0">
                                            <div class="info-btn-mais" onclick="motorDeBuscaHotel.addCrianca(this);">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div><span class="info-erro info-hidden" id="msgerroidade" style="color: red;margin-top: 39px;"></span>
                                    </div>
                                    <div class="info-criancas-idades"></div>
                                </article>
                            </div>
                        </div>

                        <div class="info-column info-column-12">
                            <div class="info-quartos-footer">
                                <a href="javascript:void(0)" id="btn-add-quarto">Adicionar quarto</a> <a href="javascript:void(0)" id="btn-aplicar">Aplicar</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="column-12">
                <button class="info-btn-pesquisar" type="submit">PESQUISAR</button>
            </div>
        </div>
    </form>
</div>