<div id="trail-modal">
  <!-- Modal -->
  <div class="modal fade" id="trailModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p>You will  get up to 02 images  free of cost to evalute our quality</p>
          <p>Maximum File Size will be 20 MB per image</p>
          <p>File Types: jpg, png, gif ,tif, psd, ai, eps, pdf, zip only</p>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="{{ route('visitor.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"><i class="fas fa-user"></i> Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name...">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email"><i class="far fa-envelope"></i> Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email...">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="instruction"><i class="fas fa-comment-alt"></i> Instruction</label>
                  <textarea class="form-control" id="instruction" name="instruction" rows="5" cols="80"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="image1"><i class="far fa-image"></i> Image - 1</label>
                  <input type="file" id="image1" name="image1" class="dropify"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="image2"><i class="far fa-image"></i> Image - 2</label>
                  <input type="file" id="image2" name="image2" class="dropify"/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="text-right">
                  <button type="submit" class="btn btn-success"><i class="fas fa-cloud-upload-alt"></i> Upload</button>
                  <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
