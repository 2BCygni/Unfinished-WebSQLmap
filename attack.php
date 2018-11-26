<div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Validation Types<span class="card-subtitle">Parsley different validation types</span></div>
                <div class="card-body">
                  <form novalidate="">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Required</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" placeholder="Type something" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Min Length</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" data-parsley-minlength="6" placeholder="Min 6 chars." type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Max Length</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" data-parsley-maxlength="6" placeholder="Max 6 chars." type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Length</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" data-parsley-length="[5,10]" placeholder="Text between 5 - 10 chars length" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Min Value</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" data-parsley-min="6" placeholder="Min value is 6" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Max Value</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" data-parsley-max="6" placeholder="Max value is 6" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Value</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" min="6" max="100" placeholder="Number between 6 - 100" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Regular Exp</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Hex. Color" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Equal To</label>
                      <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                        <input class="form-control" id="pass2" required="" placeholder="Password" type="password">
                      </div>
                      <div class="col-sm-4 col-lg-3">
                        <input class="form-control" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password" type="password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-sm-right">Min check</label>
                      <div class="col-sm-6">
                        <div class="custom-controls-stacked">
                          <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="ck1" name="ck1" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" type="checkbox"><span class="custom-control-label">Option 1</span>
                          </label>
                          <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="ck2" name="ck2" data-parsley-multiple="groups" value="bar2" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" type="checkbox"><span class="custom-control-label">Option 2</span>
                          </label>
                          <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="ck3" name="ck3" data-parsley-multiple="groups" value="bar3" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1" type="checkbox"><span class="custom-control-label">Option 3</span>
                          </label>
                          <div id="error-container1"></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-sm-right">Max check</label>
                      <div class="col-sm-6">
                        <div class="custom-controls-stacked">
                          <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" value="bar" id="e1" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2" type="checkbox"><span class="custom-control-label">Option 1</span>
                          </label>
                          <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" value="bar" id="e2" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2" type="checkbox"><span class="custom-control-label">Option 2</span>
                          </label>
                          <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" value="bar" id="e3" data-parsley-multiple="group1" data-parsley-maxcheck="1" data-parsley-errors-container="#error-container2" type="checkbox"><span class="custom-control-label">Option 3</span>
                          </label>
                          <div id="error-container2"></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">E-Mail</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" parsley-type="email" placeholder="Enter a valid e-mail" type="email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">URL</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" parsley-type="url" required="" placeholder="URL" type="url">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Digits</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" data-parsley-type="digits" required="" placeholder="Enter only digits" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Number</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" data-parsley-type="number" required="" placeholder="Enter only numbers" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Alphanumeric</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" data-parsley-type="alphanum" required="" placeholder="Enter alphanumeric value" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Textarea</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" required=""></textarea>
                      </div>
                    </div>
                    <div class="form-group row text-right">
                      <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <button class="btn btn-space btn-primary" type="submit">Submit</button>
                        <button class="btn btn-space btn-secondary">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>