<?php  

$user="votre login";
$pass="votre mot de passe";
$host="localhost";
$bdd = mysql_connect($host,$user,$pass);

echo '<br/><hr/><br/> <h2> Rechercher une entrée dans la table</h2> <br/><br/>';


echo '<form method="post">
      <div class="row">
        <div class="col">
          <label for="prenom" class="col-sm-2 col-form-label"><strong>Prénom *</strong></label>
          <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Richard" required>
          <div class="invalid-feedback">
            Champ invalide
          </div>
        </div>
        <div class="col">
          <label for="nom" class="col-sm-2 col-form-label"><strong>Nom *</strong></label>
          <input type="text" class="form-control" name="nom" id="nom" placeholder="Peres" required>
          <div class="invalid-feedback">
            Champ invalide
          </div>
        </div>
      </div><br/>
      <button type="submit" class="btn btn-dark btnSend"
      name="submit1">Envoyer</button>

    </form>';
    
    if(isset($_POST['submit1'])){
      
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      
      if(preg_match('/([A-z-]{2,})+/', $nom)){
        if(preg_match('/([A-z-]{2,})+/', $prenom)){
          
          $req = mysql_query('SELECT * FROM annuaire WHERE nom like \'%'.$nom.'\' and prenom like \'%'.$prenom.'\';');
          while($data = mysql_fetch_assoc($req)) 
              echo '<p>'. $data['id'].' '.$data['nom'].' '.$data['prenom'].' '.$data['numPoste'].'</p>'; 
        } else { echo"<strong>Prenom incorrect</strong>"; }
      } else { echo "<strong>Nom incorrect</strong>"; }
    }



echo '<br/><hr/><br/> <h2> Rajouter une entrée dans la table</h2> <br/><br/>';

echo '<form method="post">
        <div class="form-row">
        <div class="col">
          <label for="prenom" class="col-sm-2 col-form-label"><strong>Prénom *</strong></label>
          <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Richard" required>
          </div>
          <div class="col">
          <label for="nom" class="col-sm-2 col-form-label"><strong>Nom *</strong></label>
          <input type="text" class="form-control" name="nom" id="nom" placeholder="Peres" required>
          </div>
          <div class="col">
          <label for="numPoste" class="col-sm-2 col-form-label">Numéro de poste</label>
          <input type="text" class="form-control" name="numPoste" id="numPoste" placeholder="12.12" required>
          </div>
      </div><br/>
      <button type="submit" class="btn btn-dark btnSend"
      name="submit">Envoyer</button>

    </form>';
    
    if(isset($_POST['submit'])){
      
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $numPoste = $_POST['numPoste']; 
      
      if(preg_match('/([A-z-]{2,})+/', $nom)){
        if(preg_match('/([A-z-]{2,})+/', $prenom)){
            if($numPoste == null)
              mysql_query('insert into annuaire (nom,prenom, numPoste) values(\''.$nom.'\', \''.$prenom .'\', \'00.00\');');
            elseif(preg_match('/([0-9]{2}.[0-9]{2})+/',$numPoste))
               mysql_query('insert into annuaire (nom,prenom, numPoste) values(\''.$nom.'\', \''.$prenom .'\', \''. $numPoste.'\');');
            } else { echo"<strong>Prenom incorrect</strong>"; }
        } else { echo "<strong>Nom incorrect</strong>";}
    }
      

      echo '<br/><hr/><br/> <h2> Supprimer une entrée dans la table</h2> <br/><br/>';
  
      echo '<form method="post">
      <div class="row">
        <div class="col">
          <label for="id" class="col-sm-2 col-form-label"><strong>Prénom *</strong></label>
          <input type="text" class="form-control" name="id" id="id" placeholder="id" required>
          <div class="invalid-feedback">
            Champ invalide
          </div>
        </div>
      </div><br/>
      <button type="submit" class="btn btn-dark btnSend"
      name="submit3">Supprimer l\'entré</button>

    </form>';
      
      if(isset($_POST['submit2'])){
        $id = $_POST['id'];
        $req = mysql_query('SELECT * FROM annuaire WHERE id= \''.$nom.'\';');
        
        if($req != false)
          mysql_query('DELETE FROM annuaire WHERE id = \''.$id.'\' ');
      }
      
    echo '<br/><hr/><br/> <h2> Modifier le numéro de poste d\'une entrée dans la table</h2> <br/><br/>';

    echo '<form method="post">
      <div class="row">
        <div class="col">
          <label for="id" class="col-sm-2 col-form-label"><strong>Prénom *</strong></label>
          <input type="text" class="form-control" name="id" id="id" placeholder="id" required>
          <div class="invalid-feedback">
            Champ invalide
          </div>
        </div>
        <div class="col">
          <label for="numPoste" class="col-sm-2 col-form-label"><strong>Prénom *</strong></label>
          <input type="text" class="form-control" name="numPoste" id="numPoste" placeholder="Numéro de poste" required>
          <div class="invalid-feedback">
            Champ invalide
          </div>
        </div>
      </div><br/>
      <button type="submit" class="btn btn-dark btnSend"
      name="submit3">Modifier le numéro de poste</button>

    </form><br/><br/><br/>';
      
    if(isset($_POST['submit3'])){
      
      $id = $_POST['id'];
      $numPoste = $_POST['numPoste'];
      
      if(preg_match('/([A-z-]{2,})+/', $nom)){
        if(preg_match('/([A-z-]{2,})+/', $prenom)){
            mysql_query( 'UPDATE annuaire
                          SET numPoste = \''. $numPoste . '\'
                          WHERE id = \''.$id.'\';');
        } else { echo"<strong>Prenom incorrect</strong>"; }
      } else { echo "<strong>Nom incorrect</strong>"; }
      
    }

    echo '<br/><hr/><br/> <h2> La table entière : </h2> <br/><br/>';
      
       echo '<table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Numéro de poste</th>
                  </tr>
                </thead>
                <tbody>';
                
              $rcount = mysql_query('SELECT count(*) FROM annuaire');
              $rcount = intval($rcount);

        for ($i = 0 ; $i < $rcount ; $i++) {

          $rid = mysql_query('SELECT id FROM annuaire WHERE id = \''.$i.'\'');
          $rnom = mysql_query('SELECT nom FROM annuaire WHERE id = \''.$i.'\'');
          $rprenom = mysql_query('SELECT prenom FROM annuaire WHERE id = \''.$i.'\'');
          $rnumPoste = mysql_query('SELECT numPoste FROM annuaire WHERE id = \''.$i.'\'');

          echo '
            <tr>
              <th scope="row">'. $rid .'</th>
              <td>'. $rnom .'</td>
              <td>'. $rprenom .'</td>
              <td>'. $rnumPoste .'</td>
            </tr>';
        }

        echo '
          </tbody>
        </table>';
?>