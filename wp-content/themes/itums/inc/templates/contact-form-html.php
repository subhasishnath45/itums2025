
                      <!-- <p>Comming from Shortcode</p> -->
                      <form class="contact-form" id="contact-form" method="post" action="#" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                        <div class="row row-20">
                          <div class="col-md-12">
                            <div class="form-wrap form-wrap-validation">
                              <label class="form-label-outside" for="form-1-name">Full name</label>
                              <input class="form-input form-control-has-validation form-control-last-child" id="form-1-name" type="text" data-validation="required" name="name">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-wrap form-wrap-validation">
                              <label class="form-label-outside" for="form-1-email">E-mail</label>
                              <input class="form-input form-control-has-validation form-control-last-child" id="form-1-email" type="email" data-validation="required email" name="email">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-wrap form-wrap-validation">
                              <label class="form-label-outside" for="form-1-phone">Phone</label>
                              <input class="form-input form-control-has-validation form-control-last-child" id="form-1-phone" type="text" data-validation="required length number" data-validation-length="max10" name="phone">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-wrap form-wrap-validation">
                              <label class="form-label-outside" for="form-1-message">Message</label>
                              <textarea class="form-input form-control-has-validation form-control-last-child" id="form-1-message" data-validation="length required" data-validation-length="max150" name="message"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12 offset-custom-4">
                            <div class="form-button">
                              <button class="button button-secondary button-nina" type="submit">
send message
                                </button>
                            </div>
                            <div id="error_message" class="ajax_response"></div>
							<div id="success_message" class="ajax_response"></div>
                          </div>
                        </div>
                      </form>
