<!DOCTYPE html>
<html>
    <head>
        <title>Cálculo de Notas CNEC IESA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body style="background-color: #2d3073">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="well" style="width: 100%; margin-top: 15%;">
                    <div class="pull-right"><img src="img/Logo-IESA.png"></div>
                    <h3>Calcule suas notas e médias </h3>
                    <hr style=" color: #f00;
      background-color: #777777;
    opacity: 0.5;
    filter: alpha(opacity=50);
      height: 1px;">
                    <h5 style="opacity: 0.5;">Preencha os campos obrigatórios*</h5> 
                    <form role="form" id="contactForm" data-toggle="validator" class="shake">
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label for="name" class="h4">Nota 1*(0,35)</label>
                                <input type="number"class="form-control" min="0" max="10"  step=0.1 name="n1" id="n1" placeholder="N1" required data-error="Campo Obrigatório*">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="name" class="h4">Nota 2*(0,35)</label>
                                <input type="number" class="form-control" min="0" max="10"  step=0.1  name="n2" id="n2" placeholder="N2" required data-error="Campo Obrigatório*">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="name" class="h4">Nota 3(0,30)</label>
                                <input type="number" class="form-control" min="0" max="10"  step=0.1 name="n3" id="n3" placeholder="N3"  data-error="Campo Obrigatório*">
                                <div class="help-block with-errors"></div>
                            </div>


                            <!--            <div class="form-group col-sm-6">
                                            <label for="email" class="h4">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>-->
                        </div>
                        <div class="form-group">
                            <button type="submit" id="form-submit" class="btn btn-primary btn-md pull-center ">Calcular</button>
                            <!--                            <label for="message" class="h4 ">Message</label>
                                                        <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                                                        <div class="help-block with-errors"></div>-->
                        </div>
                        <br>

                        <div id="msgSubmit" class="h3">

                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <h6 style="color: #777777; font-weight: bold;" class="category text-center">Desenvolvido por: Mateus Ricardo Reginaldo, acadêmico do curso de ADS.</h6>




    </body>
    <script  type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/validator.min.js"></script>
    <script type="text/javascript" src="js/form-scripts.js"></script>
</html>
