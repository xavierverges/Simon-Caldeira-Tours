<div class="modal fade text-body" id="contactForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Reserva</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Contact Form -->
                <form action="send.php" method="post" class="needs-validation" novalidate>

                    <!-- Customer Identification -->
                    <div class="form-row">

                        <!-- First Name -->
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Primeiro Nome</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                            <div class="valid-feedback">
                                Parece estar certo!
                            </div>
                            <div class="invalid-feedback">
                                Deve introduzir o seu Primeiro Nome.
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Último Nome</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                            <div class="valid-feedback">
                                Parece estar certo!
                            </div>
                            <div class="invalid-feedback">
                                Deve introduzir o seu Último Nome.
                            </div>
                        </div>
                    </div>

                    <!-- Customer Contact -->
                    <div class="form-row">

                        <!-- Email -->
                        <div class="col-9 mb-3">
                            <label for="customerEmail">Email</label>
                            <input type="email" class="form-control" id="customerEmail" name="email" required>
                            <small id="customerPhoneHelpBlock" class="form-text text-muted">
                                Ex: email@domain.com.
                            </small>
                            <div class="valid-feedback">
                                Parece estar certo!
                            </div>
                            <div class="invalid-feedback">
                                Deve introduzir um Email válido (ex: email@domain.com).
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-3 mb-3">
                            <label for="customerPhone">Contacto</label>
                            <input type="tel" class="form-control" id="customerPhone" name="phone" pattern="[0-9]{9}">
                            <small id="customerPhoneHelpBlock" class="form-text text-muted">
                                Ex: 987654321.
                            </small>
                            <div class="valid-feedback">
                                O telefone é opcional.
                            </div>
                            <div class="invalid-feedback">
                                Deve introduzir um contacto válido Português (ex: 987654321).
                            </div>
                        </div>
                    </div>

                    <!-- Passengers -->
                    <div class="form-row border-top border-primary pt-3">

                        <!-- People -->
                        <div class="col mb-3">
                            <label for="passengers">Passageiros</label>
                            <input type="number" class="form-control" id="passengers" name="passengers" min="1" max="" required>
                            <small id="passengersHelpBlock" class="form-text text-muted">
                                De 1 a 8 passageiros.
                            </small>
                            <div class="valid-feedback">
                                Parece estar certo!
                            </div>
                            <div class="invalid-feedback">
                                Indique o número de passageiros (de 1 a 8).
                            </div>
                        </div>

                        <!-- Baggage -->
                        <div class="col mb-3">
                            <label>Bagagem</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="baggageRadioYes" name="baggage" value="Sim" required>
                                <label class="custom-control-label" for="baggageRadioYes">Com bagagem</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="baggageRadioNo" name="baggage" value="Não" required>
                                <label class="custom-control-label" for="baggageRadioNo">Sem bagagem</label>
                                <div class="valid-feedback">
                                    Parece estar certo!
                                </div>
                                <div class="invalid-feedback">
                                    Indique se leva bagagem consigo.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Journey -->
                    <fieldset>

                        <!-- From -->
                        <div class="form-row border-top border-primary pt-3">

                            <!-- Place -->
                            <div class="col-12 mb-3">
                                <label for="origin">Desde</label>
                                <textarea class="form-control" id="origin" placeholder="Indique o lugar de recolha." name="origin" required></textarea>
                                <div class="valid-feedback">
                                    Parece estar certo!
                                </div>
                                <div class="invalid-feedback">
                                    Deve indicar um ponto de origem para a sua recolha.
                                </div>
                            </div>

                            <!-- Day -->
                            <div class="col-2 mb-3">
                                <label for="originDay">Dia</label>
                                <select class="custom-select" name="originDay" id="originDay" required>
                                    <option value="">--</option>
                                    <?php
                                        for ($i=1; $i < 32; $i++) {
                                            if ($i < 10) {
                                                $i = '0'.$i;
                                            }
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <!-- Month -->
                            <div class="col-2 mb-3">
                                <label for="originMonth">Mês</label>
                                <select class="custom-select" name="originMonth" id="originMonth" required>
                                    <option value="">--</option>
                                    <?php
                                        for ($i=1; $i < 13; $i++) { 
                                            if ($i < 10) {
                                                $i = '0'.$i;
                                            }
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <!-- Year -->
                            <div class="col-2 mb-3">
                                <label for="originYear">Ano</label>
                                <select class="custom-select" name="originYear" id="originYear" required>
                                    <option value="">--</option>
                                    <?php
                                        for ($i= date("Y"); $i < date("Y")+11; $i++) { 
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <!-- Hour -->
                            <div class="col-2 offset-2 mb-3">
                                <label for="originHour">Hora</label>
                                <select class="custom-select" name="originHour" id="originHour" required>
                                    <option value="">--</option>
                                    <?php
                                        for ($i=0; $i < 24; $i++) { 
                                            if ($i < 10) {
                                                $i = '0'.$i;
                                            }
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <!-- Minute -->
                            <div class="col-2 mb-3">
                                <label for="originMin">Minuto</label>
                                <select class="custom-select" name="originMin" id="originMin" required>
                                    <option value="">--</option>
                                    <?php
                                        for ($i=0; $i < 60; $i++) { 
                                            if ($i < 10) {
                                                $i = '0'.$i;
                                            }
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!-- To -->
                        <div class="form-row border-top border-primary pt-3">

                            <!-- Place -->
                            <div class="col-12 mb-3">
                                <label for="destination">Até</label>
                                <textarea class="form-control" id="destination" placeholder="Indique o lugar de destino." name="destination" required></textarea>
                                <div class="valid-feedback">
                                    Parece estar certo!
                                </div>
                                <div class="invalid-feedback">
                                    Deve indicar um ponto de destino para a sua viagem.
                                </div>
                            </div>

                            <!-- Day -->
                            <div class="col-2 mb-3">
                                <label for="destinationDay">Dia</label>
                                <select class="custom-select" name="destinationDay" id="destinationDay">
                                    <option value="">--</option>
                                    <?php
                                        for ($i=1; $i < 32; $i++) { 
                                            if ($i < 10) {
                                                $i = '0'.$i;
                                            }
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <!-- Month -->
                            <div class="col-2 mb-3">
                                <label for="destinationMonth">Mês</label>
                                <select class="custom-select" name="destinationMonth" id="destinationMonth">
                                    <option value="">--</option>
                                    <?php
                                        for ($i=1; $i < 13; $i++) { 
                                            if ($i < 10) {
                                                $i = '0'.$i;
                                            }
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <!-- Year -->
                            <div class="col-2 mb-3">
                                <label for="destinationYear">Ano</label>
                                <select class="custom-select" name="destinationYear" id="destinationYear">
                                    <option value="">--</option>
                                    <?php
                                        for ($i= date("Y"); $i < date("Y")+11; $i++) { 
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <!-- Hour -->
                            <div class="col-2 offset-2 mb-3">
                                <label for="destinationHour">Hora</label>
                                <select class="custom-select" name="destinationHour" id="destinationHour">
                                    <option value="">--</option>
                                    <?php
                                        for ($i=0; $i < 24; $i++) { 
                                            if ($i < 10) {
                                                $i = '0'.$i;
                                            }
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <!-- Minute -->
                            <div class="col-2 mb-3">
                                <label for="destinationMin">Minuto</label>
                                <select class="custom-select" name="destinationMin" id="destinationMin">
                                    <option value="">--</option>
                                    <?php
                                        for ($i=0; $i < 60; $i++) { 
                                            if ($i < 10) {
                                                $i = '0'.$i;
                                            }
                                            echo '<option value="'.($i).'">'.($i).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <small id="datetimeHelpBlock" class="form-text text-muted">
                                    Deixar em branco se for o mesmo dia.
                                </small>
                            </div>
                        </div>

                    </fieldset>

                    <!-- Terms -->
                    <div class="form-group border-top border-primary pt-3">
                        <div class="form-check">
                            <small id="termsHelpBlock" class="form-text text-muted mb-1">
                                Os dados fornecidos neste formulário vão ser usados única e exclusivamente para o correcto funcionamento do serviço.
                            </small>
                            <input class="form-check-input" type="checkbox" id="terms" name="Termos" required>
                            <label class="form-check-label" for="terms">
                                Aceito os 
                                <button type="button" class="btn btn-link border-0 p-0 align-top" data-toggle="modal" data-target="#termsDetail">
                                    Termos e Condições
                                </button>
                                .
                            </label>
                            <div class="invalid-feedback">
                                Deve aceitar os Termos e Condições para continuar.
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>

                </form>
                    
                <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </div>
    </div>
</div>