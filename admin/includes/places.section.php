<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Create Post about Places</h5>
      </div>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" id="places-form" enctype="multipart/form-data">
        <div class="card-body">
          <div class="container">
            <p id="statusMsg"></p>
                <div class="form-group">
                  <label class="form-control-label" for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title" required/>
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="content">Content</label>
                  <textarea class="form-control" rows="7" id="content" name="content"></textarea>
                </div>
                <input type="file" class="form-control" accept="image/*" id="file" name="file" />
                <br>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="Post" id="post" name="post"/>
        </div>
      </form>
    </div>
  </div>
</div>