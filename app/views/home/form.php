<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
<form id="contactForm" name="sentMessage" novalidate="novalidate">
  <div class="control-group">
    <div class="form-group floating-label-form-group controls mb-0 pb-2">
      <label>Nome</label>
      <input class="form-control" id="name" type="text" placeholder="Nome" required="required"
        data-validation-required-message="Digite seu nome" />
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls mb-0 pb-2">
      <label>Endereço de e-mail</label>
      <input class="form-control" id="email" type="email" placeholder="Endereço de e-mail" required="required"
        data-validation-required-message="Digite seu e-mail." />
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls mb-0 pb-2">
      <label>Número de contato</label>
      <input class="form-control" id="phone" type="tel" placeholder="Número de contato" required="required"
        data-validation-required-message="Digite seu numero para contato." />
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="control-group">
    <div class="form-group floating-label-form-group controls mb-0 pb-2">
      <label>Mensagem</label>
      <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required"
        data-validation-required-message="Digite sua mensagem de e-mail."></textarea>
      <p class="help-block text-danger"></p>
    </div>
  </div>
  <br />
  <div id="success"></div>
  <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Enviar</button>
  </div>
</form>