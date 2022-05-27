
<form  method="post" action="<?= isset($classe)?$Constantes::WEB_ROOT.'modifier-classe' : '' ?>">
<input type="hidden" name="id" value="<?= isset($classe)? $classe->id :""?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Libelle</label>
    <input type="text" class="form-control" name="libelle" value="<?=isset($classe->libelle)?$classe->libelle:"" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Niveau</label>
    <input type="text" class="form-control" name="niveau" value="<?=isset($classe->niveau)?$classe->niveau:"" ?>" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Filiere</label>
    <input type="text" class="form-control" name="filiere" value="<?=isset($classe->filiere)?$classe->filiere:"" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <button type="submit" name="<??>" class="btn btn-primary">Enregistrer</button>
</form>