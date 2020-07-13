<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Edit Data</h3>
        <hr>
        <form class="" action="/Dashboard/update" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="firstname">User Id</label>
               <input type="text" class="form-control" name="firstname" id="firstname" value="<?=$users->id;?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="lastname">Nama Depan</label>
               <input type="text" class="form-control" name="firstname" id="firstname" value="<?=$users->firstname;?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
               <label for="email">Email</label>
               <input type="text" class="form-control" name="email" id="email" value="<?=$users->email;?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Update</button>
              <input type="hidden" name="id" id="id" value="<?=$users->id;?>">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
