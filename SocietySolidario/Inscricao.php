<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Society Solidário - Inscrição</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Society Solidário - Inscrição</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' action="CriaEquipe.php" method="post">
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_info'>Nome da equipe</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_nometime' placeholder='Nome da equipe' type='text' value="<?php echo $NomeEquipe;?>">
                </div>
              </div>			  
            </div>
          </div>	
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_info'>Cores do Uniforme</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_corprimaria' placeholder='Cor primária da equipe' type='text' value="<?php echo $CorPrimariaEquipe;?>">
                </div>
              </div>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_corsecundaria' placeholder='Cor secundária da equipe' type='text' value="<?php echo $CorSecundariaEquipe;?>">
                </div>
              </div>			  
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Fundação (DD/MM/AA)</label>
            <div class='col-md-8'>
				<div class='col-md-5'>
					<div class='form-group internal input-group'>
					  <input class='form-control datepicker' id='id_fundacao' value="<?php echo $DtFundacaoEquipe;?>">
					</div>
				</div>
            </div>
          </div>		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Contato na Comissão Organizadora</label>
            <div class='col-md-5'>
              <select class='form-control' id='id_contatoco' value="<?php echo $ContatoCOEquipe;?>">
                <option>Bruno Carvalho</option>
                <option>Bruno Terakado</option>
                <option>Danillo Ribeiro</option>				
                <option>Danilo Guilherme</option>
                <option>Felipe Intasqui</option>
                <option>Fernanda Mello</option>				
                <option>João Paulo Herdeiro</option>
               <option>Nenhum</option>				
              </select>
            </div>
          </div>		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Responsável </label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome' placeholder='Nome' type='text' value="<?php echo $NomeResponsavelEquipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email' placeholder='Email' type='text' value="<?php echo $EmailResponsavelEquipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone' placeholder='Telefone' type='text' value="<?php echo $TelefoneResponsavelEquipe;?>">
                </div>
              </div>
            </div>
          </div>		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Jogadores <br>(Mín. 6 Máx. 12)</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
              </div>
              <div class='col-md-3 indent-small'>
              </div>
              <div class='col-md-3 indent-small'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 1</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta1Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta1Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta1Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 2</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta2Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta2Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta2Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 3</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta3Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta3Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta3Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 4</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta4Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta4Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta4Equipe;?>">
                </div>
              </div>
            </div>
          </div>		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 5</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta5Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta5Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta5Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 6</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta6Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta6Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta6Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 7</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta7Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta7Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta7Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 8</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta8Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta8Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta8Equipe;?>">
                </div>
              </div>
            </div>
          </div>		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 9</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta9Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta9Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta9Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 10</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta10Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta10Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta10Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 11</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta11Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta11Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta11Equipe;?>">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Atleta 12</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_nome1' placeholder='Nome' type='text' value="<?php echo $NomeAtleta12Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_email1' placeholder='Email' type='text' value="<?php echo $EmailAtleta12Equipe;?>">
                </div>			  
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_telefone1' placeholder='Telefone' type='text' value="<?php echo $TelefoneAtleta12Equipe;?>">
                </div>
              </div>
            </div>
          </div>		  
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Aceito o regulamento do campeonato</label>
            <div class='col-md-8'>
              <div class='make-switch' data-off-label='NÃO' data-on-label='SIM' id='id_pets_switch'>
                <input id='id_regulamento' type='checkbox' value="<?php echo $AceiteRegulamentoEquipe;?>">
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Sugestões</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_sugestoes' placeholder='Sugestões' rows='3' value="<?php echo $SugestoesEquipe;?>"></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Enviar Inscrição</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='reset'>Limpar Formulário</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
  
    <script src="js/index.js"></script>

</body>
</html>
