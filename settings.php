<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
function ecpt_stm_45t5dsfzxv22_zdx_35_page()

{
    ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
body{background: #F1F1F1;}
.center{text-align: center;}
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div style="max-width: 95%; margin: 16px 0; margin-top: 20px;">
    <div class="row">
        <div class="col-md-6"><h1>Simple Tag Manager</h1></div>
        <div class="col-md-6">
            <p style="font-size: 14px; text-align: right; margin-top: 17px;"><?php _e( 'Version', 'stm-plugin-lang-f' ); ?> 1.2.0<br><?php _e( 'Developed by', 'stm-plugin-lang-f' ); ?> <a href="#">Daniel Sedmak</a></p>
        </div>
    </div>
</div>

<?php if(is_admin()){ ?>
  <?php if(isset($_POST['stmx_form'])){ ?><div class="alert alert-success" role="alert" style="width: 70% !important; margin: 0 auto;"><p><b><?php _e( 'Congratulations!', 'stm-plugin-lang-f' ); ?></b>&nbsp;<?php _e( 'The preferences were correctly saved', 'stm-plugin-lang-f' ); ?></p></div><?php } ?>
  <form method="post">
	<?php wp_nonce_field( 'stmx_frm1', 'stmx_form' ); ?>
      <h3><?php _e( 'Mode', 'stm-plugin-lang-f' ); ?>:&nbsp;
      
<label class="switch">
  <input type="checkbox" name="opt1" <?php if( ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("1") == "on"){ echo "value =\"on\" checked"; }else{} ?>>
  <div class="slider round"></div>
</label>
      </h3>   
      
<ul class="nav nav-tabs" role="tablist" style="border-bottom: none; margin-bottom: -16px;">
    <li role="presentation" class="active"><a href="#t1" aria-controls="home" role="tab" data-toggle="tab"><?php _e( 'Easy Mode', 'stm-plugin-lang-f' ); ?></a></li>
    <li role="presentation"><a href="#t2" aria-controls="profile" role="tab" data-toggle="tab"><?php _e( 'Advanced Mode', 'stm-plugin-lang-f' ); ?></a></li>
  </ul>

<div style="max-width: 95%; padding: 20px; overflow: auto; margin: 16px 0; border: 1px solid #e5e5e5; -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.04); box-shadow: 0 1px 1px rgba(0,0,0,.04); background: #fff; font-size: 13px; line-height: 2.1em;">
<div style="margin-top: 20px;">
</div>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="t1">
    <h3 data-toggle="tooltip" data-placement="right" title="Tooltip on right">Google Tag Manager <span class="label label-default"></span></h3>
    <hr>
    <p>Insert the Google Tag Manager tracking ID:</p>
    <textarea name="opt8" style="width: 100%;" placeholder="GTM-xxxxxxx"><?php echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("8"); ?></textarea>
    <h3>Google Analytics <span class="label label-default"></span></h3>
    <hr>  
    <p>Insert the Google Analytics property code:</p>
    <textarea name="opt9" style="width: 100%;" placeholder="UA-xxxxxxxx-yy"><?php echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("9"); ?></textarea>
    </div>
    
    <div role="tabpanel" class="tab-pane" id="t2">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <?php _e( 'Google Tag Manager', 'stm-plugin-lang-f' ); ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          <h3><span class="label label-default"><?php _e( 'Head', 'stm-plugin-lang-f' ); ?></span></h3>
    <textarea name="opt2" style="width: 100%; min-height:150px;"><?php echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("2"); ?></textarea>
    <h3><span class="label label-default"><?php _e( 'Body', 'stm-plugin-lang-f' ); ?></span></h3>
    <textarea name="opt3" style="width: 100%; min-height:150px;"><?php echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("3"); ?></textarea>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <?php _e( 'Google Analytics', 'stm-plugin-lang-f' ); ?>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          <h3><span class="label label-default"><?php _e( 'Head', 'stm-plugin-lang-f' ); ?></span></h3>
    <textarea name="opt4" style="width: 100%; min-height:150px;"><?php echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("4"); ?></textarea>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <?php _e( 'Custom Code', 'stm-plugin-lang-f' ); ?>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <h3><span class="label label-default"><?php _e( 'Head', 'stm-plugin-lang-f' ); ?></span></h3>
    <textarea name="opt7" style="width: 100%; min-height:150px;"><?php echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("7"); ?></textarea>
        <h3><span class="label label-default"><?php _e( 'Body', 'stm-plugin-lang-f' ); ?></span></h3>
    <textarea name="opt6" style="width: 100%; min-height:150px;"><?php echo ecpt_stm_45t5dsfzxv22_zdx_35_stm_read("6"); ?></textarea>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
    </div>

      <?php submit_button(); ?>
</form>
<?php } else { ?>
	<h3><?php _e( 'Access Forbidden', 'stm-plugin-lang-f' ); ?></h3>
	<p><?php _e( 'Sorry, only administrators can use this plugin :(', 'stm-plugin-lang-f' ); ?></p>
<?php } ?>
<div style="width: 100%; text-align: center !important; margin: 0 auto;">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick" />
    <input type="hidden" name="hosted_button_id" value="7PGYLG7MBNHK8" />
    <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate" />
    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
  </form>
</div>
<?php
}
?>
