<link rel="stylesheet" href="<?=$Constantes::WEB_ROOT?>template/ajoutpro/css/mobiscroll.javascript.min.css">

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-80 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-70">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-2">ENREGISTER UN PROFESSEUR</h2>

              <form class="h- mt-4">

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">NOM COMPLET</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">GRADE</label>
                </div>

                <div class="form-outline mb-2">
                <div mbsc-page class="demo-multiple-select">
  <div style="height:100%">
      <label>
      Classe
        <input mbsc-input id="demo-multiple-select-input" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" />
    </label>
    <select id="demo-multiple-select">
        <option value="1"> </option>
        <option value="2">Movies, Music & Games</option>
        <option value="3">Electronics & Computers</option>
        <option value="4">Home, Garden & Tools</option>
    </select>
  </div>
</div>
                </div>

                <div class="form-outline mb-2">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

               

                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Enregister</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="<?=$Constantes::WEB_ROOT?>template/ajoutprof/js/mobiscroll.javascript.min.js"></script>
<script>
    
    mobiscroll.select('#demo-multiple-select', {
        inputElement: document.getElementById('demo-multiple-select-input'),  // More info about inputElement: https://docs.mobiscroll.com/5-16-2/javascript/select#opt-inputElement
        selectMultiple: true                                                  // More info about selectMultiple: https://docs.mobiscroll.com/5-16-2/javascript/select#opt-selectMultiple
    });
</script>