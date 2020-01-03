<div id="addBannerModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Add New Home Banner</h4>
            </div>
            <div class="modal-body">
                <form id="frm-submit-add-new-banner" role="form" method="POST" action="{{route('banner.slider.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="banner_title" class="control-label">Title</label>
                        <div>
                            <textarea class="form-control input-lg" id="banner_title" name="banner_title">{{old('banner_title')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="banner_message" class="control-label">Details</label>
                        <div>
                            <textarea class="form-control input-lg" rows="6" id="banner_message" name="banner_message">{{old('banner_message')}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Banner Image</label>
                        <div>
                            <input type="file" class="form-control input-lg" accept="image/x-png,image/jpg,image/jpeg,image/png" id="banner_image" name="banner_image" >
                        </div>
                    </div>
                    <div class="row" >

                        <div class="col-sm-12 col-md-6" >

                            <div class="form-group">
                                <label for="start_date" class="control-label">Display Starts Date</label>
                                <div>
                                    <input type="date" class="form-control input-lg" id="start_date" name="start_date" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6" >
                            <div class="form-group">
                                <label for="end_date" class="control-label">Display Ends Date</label>
                                <div>
                                    <input type="date" class="form-control input-lg" id="end_date" name="end_date" >
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-info btn-block">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
