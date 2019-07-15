<section id="Ediciones">
  <?php
    // $accountId = "564188";//cambiar por los de produccion
    $accountId = "806287";//cambiar por los de produccion
    $merchantId = "561677";//cambiar por los de produccion
    $currency = "COP";
    $amount = "0";
    $url = "https://gateway.payulatam.com/ppp-web-gateway";//Production        
    // $url = "https://sandbox.gateway.payulatam.com/ppp-web-gateway/";// Test
    $responUrl = "https://300empresas.laopinion.com.co/";//Ruta de respuesta
  ?>
  <h3>La edición que prefieras la encuentras aquí en pdf</h3>
  <ul>
    <li id="edicion_8">
      <img src="<?php print base_path(); ?>sites/default/themes/300empresas/images/ediciones/8.jpg" alt="edición-8">
      <div class="download">
        <span>Descargar</span>
      </div>
    </li>
    <li id="edicion_7">
      <img src="<?php print base_path(); ?>sites/default/themes/300empresas/images/ediciones/7.jpg" alt="edición-7">
      <div class="download">
        <span>Descargar</span>
      </div>
    </li>
    <li id="edicion_6">
      <img src="<?php print base_path(); ?>sites/default/themes/300empresas/images/ediciones/6.jpg" alt="edición-6">
      <div class="download">
        <span>Descargar</span>
      </div>
    </li>
    <li id="edicion_5">
      <img src="<?php print base_path(); ?>sites/default/themes/300empresas/images/ediciones/5.jpg" alt="edición-5">
      <div class="download">
        <span>Descargar</span>
      </div>
    </li>
    <li id="edicion_4">
      <img src="<?php print base_path(); ?>sites/default/themes/300empresas/images/ediciones/4.jpg" alt="edición-4">
      <div class="download">
        <span>Descargar</span>
      </div>
    </li>
    <li id="edicion_3">
      <img src="<?php print base_path(); ?>sites/default/themes/300empresas/images/ediciones/3.jpg" alt="edición-3">
      <div class="download">
        <span>Descargar</span>
      </div>
    </li>
    <li id="edicion_2">
      <img src="<?php print base_path(); ?>sites/default/themes/300empresas/images/ediciones/2.jpg" alt="edición-2">
      <div class="download">
        <span>Descargar</span>
      </div>
    </li>
    <li id="edicion_1">
      <img src="<?php print base_path(); ?>sites/default/themes/300empresas/images/ediciones/1.jpg" alt="edición-1">
      <div class="download">
        <span>Descargar</span>
      </div>
    </li>
  </ul>

  <div id="formulario" style="display: none;">
    <h2>Datos personales</h2>
    <form method="post" action="<?=$url?>">
      <input name="merchantId" type="hidden" value="<?=$merchantId?>" />
      <input name="accountId" type="hidden" value="<?=$accountId ?>" />
      <input
        id="description"
        name="description"
        type="hidden"
        value="Description package"
      />
      <input
        id="referenceCode"
        name="referenceCode"
        type="hidden"
        value="0"
      />
      <input id="amount" name="amount" type="hidden" value="0" />
      <input name="tax" type="hidden" value="0" />
      <input name="taxReturnBase" type="hidden" value="0" />
      <input name="currency" type="hidden" value="<?=$currency?>" />
      <input id="signature" name="signature" type="hidden" value="0" />
      <input
        name="test"
        type="hidden"
        value="0"
      /><!--Dejar en 0 cuando sea produccion-->
      <input type="hidden" name="shippingCountry" value="CO" />
      <input
        id="payerFullName"
        type="hidden"
        name="payerFullName"
        value=""
      />
      <div class="formulario">
        <div class="form-item">
          <label for="nombres">Nombre</label>
          <input
            id="nombres"
            type="text"
            name="nombres"
            class="form-text"
          />
        </div>
        <div class="form-item">
          <label for="apellidos">Apellido</label>
          <input
            id="apellidos"
            type="text"
            name="apellidos"
            class="form-text"
          />
        </div>
        <div class="form-item">
          <label for="cedula">Cédula de ciudadanía</label>
          <input
            id="cedula"
            type="text"
            name="payerDocument"
            class="form-text"
          />
        </div>
        <div class="form-item">
          <label for="telefono">Teléfono (celular)</label>
          <input
            type="text"
            name="mobilePhone"
            class="form-text"
            required
          />
        </div>
        <div class="form-item">
          <label for="correo">Correo electrónico</label>
          <input
            type="email"
            name="buyerEmail"
            class="form-text"
            required
          />
        </div>
        <div class="form-item">
          <label for="package_option">Edición</label>
          <select id="package_option">
            <option value="1">Edición 1</option>
            <option value="2">Edición 2</option>
            <option value="3">Edición 3</option>
            <option value="4">Edición 4</option>
            <option value="5">Edición 5</option>
            <option value="6">Edición 6</option>
            <option value="7">Edición 7</option>
            <option value="8">Edición 8</option>
          </select>
        </div>
        <div class="form-item terminos">
          <input
            type="radio"
            name="terminos"
            value="Acepta terminos y condiciones"
            required
          />
          <label
            class="option"
            for="edit-submitted-terminos-y-condiciones-de-uso-1"
            >Acepto los
            <a
              href="https://www.laopinion.com.co/terminos-y-condiciones"
              target="_blank"
              >términos y condiciones</a
            >
            y he leído la
            <a
              href="https://www.laopinion.com.co/politica-de-tratamiento-de-datos-personales"
              target="_blank"
            >
              política de tratamiento de los datos personales</a
            >
          </label>
        </div>
        <div id="btn__submit" class="form-actions waves">
          <input
            class="submit"
            name="Submit"
            type="submit"
            value="Comprar"
          />
        </div>
      </div>
    </form>
  </div>
</section>