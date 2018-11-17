@include('inc.header')

      <div class= "container">
        <div class='row'>
          <div class ='col-md-6'>
            <form class="form-horizontal" method= 'POST'action= "{{}}">
                    <fieldset>
                      <legend>Laravel CRUD Applicatino</legend>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                          <input type="text" name='title' class="form-control" id="inputEmail" placeholder="Title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                          <input type="text" name="description" class="form-control" id="inputPassword" placeholder="Description">
                          
                        </div>
                      </div>
                      
                    
                   
                      <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </fieldset>
            </form>
          </div>
        </div>
      </div>


@include('inc.footer')

