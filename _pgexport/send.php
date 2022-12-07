<?php get_header(); ?>

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <div class="container">
        <div class="pg-empty-placeholder row"></div>
        <form action="<?php echo get_template_directory_uri(); ?>/venda-seu-carro/#wpcf7-f192-o1" method="post" class="wpcf7-form init" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="192"/>
                <input type="hidden" name="_wpcf7_version" value="5.6.4"/>
                <input type="hidden" name="_wpcf7_locale" value="pt_BR"/>
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f192-o1"/>
                <input type="hidden" name="_wpcf7_container_post" value="0"/>
                <input type="hidden" name="_wpcf7_posted_data_hash" value=""/>
            </div>
            <p><label> 
                    <?php _e( 'Nome completo:', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="your-name"><input type="text" name="your-name" value="" size="4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9-invalid=" alse""/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'E-mail', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'E-mail', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="tel-570"><input type="tel" name="tel-570" value="Tel. contato" size="4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9as-tel" aria-required="true" aria-invalid="false"/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Marca:', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="marca"><select name="marca" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                            <option value="">---</option>
                            <option value="marca1">
                                <?php _e( 'marca1', 'modelo2' ); ?>
                            </option>
                            <option value="marca2">
                                <?php _e( 'marca2', 'modelo2' ); ?>
                            </option>
                            <option value="marca3">
                                <?php _e( 'marca3', 'modelo2' ); ?>
                            </option>
                        </select></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Ano de fabricação:', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="fabricacao"><input type="text" name="fabricacao" value="" size="4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9-invalid=" alse""/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Ano do modelo:', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="ano-modelo"><input type="text" name="ano-modelo" value="" size="4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9-invalid=" alse""/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Mensagem/detalhes adicionais: (opcional)', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" style="height: 123px;"></textarea></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Imagem  frontal (opcional)', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="frontal"><input type="file" name="frontal" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" accept=".jpg,.png" aria-required="true" aria-invalid="false"/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Imagem  da lateral esquerda(opcional)', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="lateral-esquerda"><input type="file" name="lateral-esquerda" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" accept=".jpg,.png" aria-required="true" aria-invalid="false"/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Imagem  da lateral direita(opcional)', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="lateral-direita"><input type="file" name="lateral-direita" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" accept=".jpg,.png" aria-required="true" aria-invalid="false"/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Imagem  da lateral esquerda(opcional)', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="traseira"><input type="file" name="traseira" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" accept=".jpg,.png" aria-required="true" aria-invalid="false"/></span> 
                </label></p>
            <p><label> 
                    <?php _e( 'Imagem  da parte interna esquerda(opcional)', 'modelo2' ); ?>
                    <br/><span class="wpcf7-form-control-wrap" data-name="interna"><input type="file" name="interna" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" accept=".jpg,.png" aria-required="true" aria-invalid="false"/></span> 
                </label></p>
            <p><input type="submit" value="Enviar" class="wpcf7-form-control has-spinner wpcf7-submit"/><span class="wpcf7-spinner"></span></p>
            <div class="wpcf7-response-output" aria-hidden="true"></div>
        </form>
    </div>        

<?php get_footer(); ?>