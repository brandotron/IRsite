<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<style type='text/css'>

	
	input[type='radio'] {
margin:0 10px;
}

#frmFormMailContainer{
    font-size : 13px;
    color : #777777;
    background-color: transparent;
}

select, option{
    font-size:13px;
}

ol.phpfmg_form{
    list-style-type:none;
    padding:0px;
    margin:0px;
}

ol.phpfmg_form input, ol.phpfmg_form textarea, ol.phpfmg_form select{
    border: 1px solid #ccc;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
}

ol.phpfmg_form li{
    margin-bottom:5px;
    clear:both;
    display:block;
    overflow:hidden;
	width: 100%
}


.form_field, .form_required{
    font-weight : bold;
}

.form_required{
    color:red;
    margin-right:8px;
}

.field_block_over{
}

.form_submit_block{
    padding-top: 3px;
}

.text_box,.text_select {
    height: 32px;
}

.text_box, .text_area, .text_select {
    min-width:160px;
    max-width:300px;
    width: 100%;
    margin-bottom: 10px;
}

.text_area{
    height:80px;
}

.form_error_title{
    font-weight: bold;
    color: red;
}

.form_error{
    background-color: #F4F6E5;
    border: 1px dashed #ff0000;
    padding: 10px;
    margin-bottom: 10px;
}

.form_error_highlight{
    background-color: #F4F6E5;
    border-bottom: 1px dashed #ff0000;
}

div.instruction_error{
    color: red;
    font-weight:bold;
}

hr.sectionbreak{
    height:1px;
    color: #ccc;
}

#one_entry_msg{
    background-color: #F4F6E5;
    border: 1px dashed #ff0000;
    padding: 10px;
    margin-bottom: 10px;
}


#frmFormMailContainer input[type="submit"]{
    padding: 10px 25px; 
    font-weight: bold;
    margin-bottom: 10px;
    background-color: #0085A1;
	color: #FFFFFF;
}

#frmFormMailContainer input[type="submit"]:hover{
    background-color: #E4F0F8;
	color: #0085A1;
}

    



</style>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>
	<hr />
	<h3>Want to learn more? Complete the form below and we will contact you asap.</h3>
<form name="frmFormMail" id="frmFormMail" action='https://hooks.zapier.com/hooks/catch/1882897/m7ey5k/' method='post' enctype='multipart/form-data' >

            
<ol class='phpfmg_form' >

<li class='field_block' id='field_0_div'><div class='col_label'>
	<label class='form_field'>Name</label> <label class='form_required' >*</label> </div>
	<div class='col_field'>
	<input type="text" name="field_0"  id="field_0" value="" class='text_box' required>
	<div id='field_0_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_1_div'><div class='col_label'>
	<label class='form_field'>Email</label> <label class='form_required' >*</label> </div>
	<div class='col_field'>
	<input type="email" name="field_1"  id="field_1" value="" class='text_box' required>
	<div id='field_1_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_2_div'><div class='col_label'>
	<label class='form_field'>Phone</label> <label class='form_required' >*</label> </div>
	<div class='col_field'>
	<input type="text" name="field_2"  id="field_2" value="" class='text_box' required>
	<div id='field_2_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_3_div'><div class='col_label'>
	<label class='form_field'>City</label> <label class='form_required' >*</label> </div>
	<div class='col_field'>
	<input type="text" name="field_3"  id="field_3" value="" class='text_box' required>
	<div id='field_3_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_4_div'><div class='col_label'>
	<label class='form_field'>State</label> <label class='form_required' >*</label> </div>
	<div class='col_field'>
	<select name='field_4' id='field_4' class='text_select'    >	
<option value="AL" >AL</option>	
<option value="AK" >AK</option>	
<option value="AZ" >AZ</option>	
<option value="AR" >AR</option>	
<option value="CA" >CA</option>	
<option value="CO" >CO</option>	
<option value="CT" >CT</option>	
<option value="DE" >DE</option>	
<option value="DC" >DC</option>	
<option value="FL" >FL</option>	
<option value="GA" >GA</option>	
<option value="HI" >HI</option>	
<option value="ID" >ID</option>	
<option value="IL" >IL</option>	
<option value="IN" >IN</option>	
<option value="IA" >IA</option>	
<option value="KS" >KS</option>	
<option value="KY" >KY</option>	
<option value="LA" >LA</option>	
<option value="ME" >ME</option>	
<option value="MD" >MD</option>	
<option value="MA" >MA</option>	
<option value="MI" >MI</option>	
<option value="MN" >MN</option>	
<option value="MS" >MS</option>	
<option value="MO" >MO</option>	
<option value="MT" >MT</option>	
<option value="NE" >NE</option>	
<option value="NV" >NV</option>	
<option value="NH" >NH</option>	
<option value="NJ" >NJ</option>	
<option value="NM" >NM</option>	
<option value="NY" >NY</option>	
<option value="NC" >NC</option>	
<option value="ND" >ND</option>	
<option value="OH" >OH</option>	
<option value="OK" >OK</option>	
<option value="OR" >OR</option>	
<option value="PA" >PA</option>	
<option value="RI" >RI</option>	
<option value="SC" >SC</option>	
<option value="SD" >SD</option>	
<option value="TN" >TN</option>	
<option value="TX" >TX</option>	
<option value="UT" >UT</option>	
<option value="VT" >VT</option>	
<option value="VA" >VA</option>	
<option value="WA" >WA</option>	
<option value="WV" >WV</option>	
<option value="WI" >WI</option>	
<option value="WY" >WY</option>	
</select>
	<div id='field_4_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_5_div'><div class='col_label'>
	<label class='form_field'>Do you currently own or operate a substance abuse treatment center?</label> <label class='form_required' >&nbsp;</label> </div>
	<div class='col_field'>
	<input type='radio' name='field_5' id='field_5_0'  value="YES"   class='form_radio'  ><label class='form_choice_text' for='field_5_0'>YES</label><br>	
<input type='radio' name='field_5' id='field_5_1'  value="NO"   class='form_radio'  ><label class='form_choice_text' for='field_5_1'>NO</label><br>	
<input type='hidden' name='field_5_length' value='2'>	<div id='field_5_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_6_div'><div class='col_label'>
	<label class='form_field'>Did you formerly own or operate a substance abuse treatment center?</label> <label class='form_required' >&nbsp;</label> </div>
	<div class='col_field'>
	<input type='radio' name='field_6' id='field_6_0'  value="YES"   class='form_radio'  ><label class='form_choice_text' for='field_6_0'>YES</label><br>	
<input type='radio' name='field_6' id='field_6_1'  value="NO"   class='form_radio'  ><label class='form_choice_text' for='field_6_1'>NO</label><br>	
<input type='hidden' name='field_6_length' value='2'>	<div id='field_6_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_7_div'><div class='col_label'>
	<label class='form_field'>Are you a medical professional?</label> <label class='form_required' >&nbsp;</label> </div>
	<div class='col_field'>
	<input type='radio' name='field_7' id='field_7_0'  value="YES"   class='form_radio'  ><label class='form_choice_text' for='field_7_0'>YES</label><br>	
<input type='radio' name='field_7' id='field_7_1'  value="NO"   class='form_radio'  ><label class='form_choice_text' for='field_7_1'>NO</label><br>	
<input type='hidden' name='field_7_length' value='2'>	<div id='field_7_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_8_div'><div class='col_label'>
	<label class='form_field'>Do you have experience in the substance abuse field?</label> <label class='form_required' >&nbsp;</label> </div>
	<div class='col_field'>
	<input type='radio' name='field_8' id='field_8_0'  value="NO"   class='form_radio'  onclick="toggleOtherInputBox('field_8','radio', 'field_8_0')"  ><label class='form_choice_text' for='field_8_0'>NO</label><br>	
<input type='radio' name='field_8' id='field_8_1'  value="other"   class='form_radio'  onclick="toggleOtherInputBox('field_8','radio', 'field_8_1')"  ><label class='form_choice_text' for='field_8_1'>YES</label><br>	
<input type='hidden' name='field_8_length' value='2'>	
<input type='hidden' name='field_8_other_check' id='field_8_other_check' value='0'>	
<input type='text' name='field_8_other' id='field_8_other' value="" class='text_box' style='display:none;' >	<div id='field_8_tip' class='instruction'>(if yes, please explain)</div>
	</div>
</li>

<li class='field_block' id='field_9_div'><div class='col_label'>
	<label class='form_field'>How much are you willing to invest?</label> <label class='form_required' >&nbsp;</label> </div>
	<div class='col_field'>
	<input type='radio' name='field_9' id='field_9_0'  value="$0"   class='form_radio'  ><label class='form_choice_text' for='field_9_0'>$0</label><br>	
<input type='radio' name='field_9' id='field_9_1'  value="$1-$5000.00"   class='form_radio'  ><label class='form_choice_text' for='field_9_1'>$1-$5000.00</label><br>	
<input type='radio' name='field_9' id='field_9_2'  value="$5000.00-$10,000.00"   class='form_radio'  ><label class='form_choice_text' for='field_9_2'>$5000.00-$10,000.00</label><br>	
<input type='radio' name='field_9' id='field_9_3'  value="$10,000+"   class='form_radio'  ><label class='form_choice_text' for='field_9_3'>$10,000+</label><br>	
<input type='hidden' name='field_9_length' value='4'>	<div id='field_9_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_10_div'><div class='col_label'>
	<label class='form_field'>What type of treatment center do you want to open?</label> <label class='form_required' >&nbsp;</label> </div>
	<div class='col_field'>
	<input type='radio' name='field_10' id='field_10_0'  value="Inpatient"   class='form_radio'  ><label class='form_choice_text' for='field_10_0'>Inpatient</label><br>	
<input type='radio' name='field_10' id='field_10_1'  value="Outpatient"   class='form_radio'  ><label class='form_choice_text' for='field_10_1'>Outpatient</label><br>	
<input type='radio' name='field_10' id='field_10_2'  value="Inpatient & Outpatient"   class='form_radio'  ><label class='form_choice_text' for='field_10_2'>Inpatient & Outpatient</label><br>	
<input type='hidden' name='field_10_length' value='3'>	<div id='field_10_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_12_div'><div class='col_label'>
	<label class='form_field'>Best time to contact you</label> <label class='form_required' >&nbsp;</label> </div>
	<div class='col_field'>
	<input type='radio' name='field_12' id='field_12_0'  value="Morning"   class='form_radio'  ><label class='form_choice_text' for='field_12_0'>Morning</label><br>	
<input type='radio' name='field_12' id='field_12_1'  value="Afternoon"   class='form_radio'  ><label class='form_choice_text' for='field_12_1'>Afternoon</label><br>	
<input type='radio' name='field_12' id='field_12_2'  value="Evening"   class='form_radio'  ><label class='form_choice_text' for='field_12_2'>Evening</label><br>	
<input type='hidden' name='field_12_length' value='3'>	<div id='field_12_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_11_div'><div class='col_label'>
	<label class='form_field'>Why do you want to open a treatment center?</label> <label class='form_required' >&nbsp;</label> </div>
	<div class='col_field'>
	<textarea name="field_11" id="field_11" rows=4 cols=25 class='text_area'></textarea>

	<div id='field_11_tip' class='instruction'></div>
	</div>
</li>



            <li>
            <div class='col_label'>&nbsp;</div>
            <div class='form_submit_block col_field'>
	

                <input type='submit' value='Submit' class='form_button'>

				<div id='err_required' class="form_error" style='display:none;'>
				    <label class='form_error_title'>Please check the required fields</label>
				</div>
				


                <span id='phpfmg_processing' style='display:none;'>
                    <img id='phpfmg_processing_gif' src='admin.php?mod=image&amp;func=processing' border=0 alt='Processing...'> <label id='phpfmg_processing_dots'></label>
                </span>
            </div>
            </li>

</ol>
</form>


<?php /*?><?php get_sidebar(); ?><?php */?>
<?php if (is_page( $page = 'contact' )): ?>
<style>
	.page-title{
		display:none;
	}
</style>
<?php endif ?>
<?php get_footer(); ?>
<script type="text/javascript">
 /**
*
*  UTF-8 data encode / decode
*  http://www.webtoolkit.info/
*
**/

var Utf8 = {

	// public method for url encoding
	encode : function (string) {
		string = string.replace(/\r\n/g,"\n");
		var utftext = "";

		for (var n = 0; n < string.length; n++) {

			var c = string.charCodeAt(n);

			if (c < 128) {
				utftext += String.fromCharCode(c);
			}
			else if((c > 127) && (c < 2048)) {
				utftext += String.fromCharCode((c >> 6) | 192);
				utftext += String.fromCharCode((c & 63) | 128);
			}
			else {
				utftext += String.fromCharCode((c >> 12) | 224);
				utftext += String.fromCharCode(((c >> 6) & 63) | 128);
				utftext += String.fromCharCode((c & 63) | 128);
			}

		}

		return utftext;
	},

	// public method for url decoding
	decode : function (utftext) {
		var string = "";
		var i = 0;
		var c = c1 = c2 = 0;

		while ( i < utftext.length ) {

			c = utftext.charCodeAt(i);

			if (c < 128) {
				string += String.fromCharCode(c);
				i++;
			}
			else if((c > 191) && (c < 224)) {
				c2 = utftext.charCodeAt(i+1);
				string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
				i += 2;
			}
			else {
				c2 = utftext.charCodeAt(i+1);
				c3 = utftext.charCodeAt(i+2);
				string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
				i += 3;
			}

		}

		return string;
	}

}

 function dd_change( n, max, prefix ){
    if( n >= max-1 )
        return; // the last dropdown, no need to query

    //var prefix = 'dd_' ;
    // reset all other dropdown options
    var next = n+1;
    for( var i = next; i < max; i ++ ){
        var dd = document.getElementById(prefix +'_' + i );
        if( dd && dd.length >= 1 ) dd.length = 1 ; // keep the first one '- select -'
    };


    // request drop down data from server
    var me = this;
    var http;
    var isIE = navigator.appName == "Microsoft Internet Explorer";
    if(isIE){
        me.http = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        me.http = new XMLHttpRequest();
    };


    // build query string
    var lookup = [];
    for( var i = 0; i < next; i ++ ){
        var v = document.getElementById(prefix +'_' +  i ).value ;
        lookup.push( "lookup[" + i + "]=" + escape( isIE ? Utf8.encode(v) : v ) );
    };
    lookup = lookup.join('&');

    var url = 'admin.php?mod=dd&func=lookup&n='+next+ '&field_name=' + prefix + '&' + lookup;
    me.http.open('get', url);
    me.http.onreadystatechange = function(){

        if( me.http.readyState == 4 ){
            // rebuild the next dropdown options
            var eNext = document.getElementById(prefix +'_' + next );
            if( !eNext )
                return;

            var data = me.http.responseText;
            var opts = String(data).split("\n");
            for( var j = 0, J = opts.length; j < J; j ++ ){
                eNext.options[ eNext.length ] = new Option( opts[j], opts[j], false, false );
            }; // for
        }; //if

    };
    me.http.send(null);

 }


function PHPFMG( formID ){
    var frmID = formID;
    var exts = {
        'upload_control' : '',
        'harmful_exts'  : '.php, .php2, .php3, .php4, .php5, .php6, .php7, .html, .css, .js, .exe, .com, .bat, .vb, .vbs, scr, .inf, .reg, .lnk, .pif, .ade, .adp, .app, .bas, .chm, .cmd, .cpl, .crt, .csh, .fxp, .hlp, .hta, .ins, .isp, .jse, .ksh, .Lnk, .mda, .mdb, .mde, .mdt, .mdw, .mdz, .msc, .msi, .msp, .mst, .ops, .pcd, .prf, .prg, .pst, .scf, .scr, .sct, .shb, .shs, .url, .vbe, .wsc, .wsf, .wsh',
        'harmful_errmsg': "File is potential harmful. Upload is not allowed.",
        'allow_exts'  : '.jpg, .gif, .png, .bmp',
        'allow_errmsg': "Upload is not allowed. Please check your file type."
    };
    var redirect = "";


    var Form = null;
    var err_fields=null;

    function $( id ){
        return document.getElementById(id);
    }

    function get_form( id ){
        var frm = 'object' == typeof($(id)) ? $(id) : eval( 'document.' + id ) ;
        return frm ? frm : document.forms[0];
    }

    function file_ext( f ){
        var n = f.lastIndexOf(".");
        return -1 == n ? '' : f.substr( n ).toLowerCase();
    }

    function addLabelEvents(){
        var labels = document.body.getElementsByTagName('LABEL');
        for( var i = 0, N = labels.length; i < N; i ++ ){
            var e = labels[i];
            if( -1 != String(e.className).indexOf('form_choice_text') ){
                var oid = e.getAttribute('oid');
                if( !oid ) continue;

                e.onmouseout = function(){ this.className = 'form_choice_text'; };
                e.onmouseover = function(){ this.className = 'form_choice_text form_choice_over'; };
                e.onclick = function(){
                    try{
                        var oid = this.getAttribute('oid');
                        var O = document.getElementById(oid);
                        O.checked = !O.checked;
                    }
                    catch(E){};
                };
            }; // if
        }; // for
    }


    function addFieldBlockEvents(){
        var divs = document.body.getElementsByTagName('DIV');
        for( var i = 0, N = divs.length; i < N; i ++ ){
            var e = divs[i];
            if( -1 != String(e.className).indexOf('field_block') ){
                e.onmouseout = function(){  if( String(this.className).indexOf('form_error_highlight') == -1 ) this.className = 'field_block'; };
                e.onmouseover = function(){ if( String(this.className).indexOf('form_error_highlight') == -1 ) this.className = 'field_block field_block_over'; };
            }; // if
        }; // for
    }

    function removeHighlight( elements ){
        var divs = typeof(elements) == 'object' ? elements : document.body.getElementsByTagName('DIV');
        for( var i = 0, N = divs.length; i < N; i ++ ){
            var e = divs[i];
            var cn = String(e.className);
            if( -1 != cn.indexOf('form_error_highlight') ){
                e.className = cn.replace('form_error_highlight','');
            } else if ( -1 != cn.indexOf('instruction_error') ){
                e.className = cn.replace('instruction_error','');
            };

        }; // for
    }

    function showProcessing( hide ){
        try{
            var E = $('phpfmg_processing');
            if( !E ) return ;
            if( -1 != navigator.userAgent.toLowerCase().indexOf('msie') ){
                E.style.backgroundColor='#2960AF';
                $('phpfmg_processing_gif').style.display = 'none';
                setInterval( 'fmgHandler.dots()', 300 );
            }else{
                $('phpfmg_processing_gif').style.display = hide ? 'none' : '';
            };
            E.style.display = hide ? 'none' : '';
        }catch(e){};

    }

    function setVisible( id, show ){
        var E = $(id);
        if( !E ) return ;
        E.style.display = show ? '' : 'none';
    }



    this.highlight_fields = function( fields ){
        var A = fields.split(',');
        for( var i = 0, N = A.length; i < N; i ++ ){
            var E = $( A[i] + '_div' );
            if( E ){
                E.className += ' form_error_highlight';
            };
            var T = $( A[i] + '_tip' );
            if( T ){
                T.className += ' instruction_error';
            };
        };

        if( A.length > 0 ) {
            $('err_required').style.display= has_entry( fields ) ? 'none' : '';
        };
    }

    function has_entry( fields ){
        var div = $('one_entry_msg');
        if( !div )
            return false;

        div.style.display = fields.indexOf('phpfmg_found_entry') != -1 ? '' : 'none';
        if( typeof(found_entry) != 'undefined' ){
            div.innerHTML = div.innerHTML.replace(/%Entry%/gi,found_entry);
            return true;
        };

        return false ;
    }


    this.choice_clicked = function( id ){
        $(id).checked = !$(id).checked ;
    }


    this.init = function(){
        //addLabelEvents();
        addFieldBlockEvents();
    }

    this.harmful = function(e){
        if( 'deny' != exts['upload_control'] || e.value == '' ){
            return true;
        };

        var div = $(e.id+'_div');
        removeHighlight( [div] );
        var ext = file_ext(e.value);
        if( -1 != exts['harmful_exts'].toLowerCase().indexOf(ext) ){
            this.highlight_fields(e.id);
            alert( exts['harmful_errmsg'] );
            return false ;
        };
        return true;
    }



    this.is_allow = function(e){
        if( 'allow' != exts['upload_control'] || e.value == '' ){
            return true;
        };

        var div = $(e.id+'_div');
        removeHighlight( [div] );
        var ext = file_ext(e.value);
        if( -1 == exts['allow_exts'].toLowerCase().indexOf(ext) ){
            this.highlight_fields(e.id);
            alert( exts['allow_errmsg'] );
            return false ;
        };
        return true;
    }

    this.check_upload = function(e){
        if( '' == exts['upload_control'] )
            return true;
        else
            return ( 'deny' == exts['upload_control'] )
                   ? this.harmful(e)
                   : this.is_allow(e);
    }

    this.dots = function(){
        $('phpfmg_processing_dots').innerHTML += '.';
		if( $('phpfmg_processing_dots').innerHTML.length >= 38 ) {
			$('phpfmg_processing_dots').innerHTML = '.';
		};
    }

    this.check_fields = function(){
        if( !Form )
            return true ;

        var pass = true ;
        for( var i=0, n=Form.elements.length; i < n ; i ++ ){
          var field = Form.elements[i];
          var type = field.length != undefined && field.type == undefined ? 'radio' : field.type ;
          switch( type.toLowerCase() ){
            case 'file':
                pass = this.check_upload(field);
                break;
          };
          if( !pass ) return false ;
        };

        return true;
    }

    function removeAllHighlightedFields(){
        removeHighlight( document.body.getElementsByTagName('LI') );
        removeHighlight();
        var E = $('err_required');
        if( E ) E.style.display = 'none' ;
    }

    this.onSubmit = function( form ){
        Form = form ? form : get_form(frmID) ;
        //Form.action = location.href.replace('#error','');
        if( !this.check_fields() )
            return false ;

        removeAllHighlightedFields();
        showProcessing();
        return true;
    }

    this.onResponse = function( data ){
        removeAllHighlightedFields();
        showProcessing( true ); // true : hide processing indicator

        var ok = data && typeof data['ok'] === 'boolean' ? data['ok'] : false ;
        if( ok === true ) {
            fmgHandler.submitOK();
            return;
        };

        var fields = data && typeof data['error_fields'] === 'object' ? data['error_fields'] : false ;
        this.highlight_fields( fields + "" );


        var oneEntry = data && typeof data['OneEntry'] !== 'undefined'  ? data['OneEntry'] : '' ;
        if( oneEntry != '' ){
            setVisible( 'err_required', false );
            window.found_entry = oneEntry; // inject it as global variable for below function call
            has_entry( fields );
        };


/*        // reset errors
        $('#err_required').hide();
        $( '.form_error_highlight' ).removeClass('form_error_highlight');

        $.each( fields, function( idx, field ){
            $('#'+field+'_div').addClass('form_error_highlight');
        } );

        if( fields.length > 0 ){
            $('#err_required').show();
        };
*/
    }

     function showThankYouMessage(){
        setVisible( 'frmFormMailContainer',false );
        setVisible( 'thank_you_msg',true );
    }

    this.submitOK = function(){
        if( redirect == '' ){
            showThankYouMessage();
            return;
        };

        try{
            if( parent ) parent.location.href = redirect;
        }catch(e){
            location.href = redirect;
        };
    }


}

function toggleOtherInputBox( name, type, id ){
    var field = document.getElementById(id);
    if( !field ) return ;
    var box = document.getElementById(name+'_other');
    var other_check = document.getElementById(name+'_other_check');
    if( !box || !other_check ) return ;

    switch( type.toLowerCase() ){
        case 'checkbox':
            box.style.display = field.checked ? '' : 'none';
            other_check.value = field.checked ? 1 : 0 ;
            break;
        case 'radio':
            for( var i=0,n=document.forms.length; i < n; i ++ ){
                try{
                    var r = eval( 'document.forms['+i+'].'+name );
                    if( r ){
                        box.style.display = r[r.length-1].checked ? '' : 'none';
                        other_check.value = r[r.length-1].checked ? 1 : 0 ;
                    };
                }catch(err){};
            };
            break;
        case 'select':
            box.style.display = field.options[field.options.length-1].selected ? '' : 'none';
            other_check.value = field.options[field.options.length-1].selected ? 1 : 0 ;
            break;
    };

}



var fmgHandler = new PHPFMG();
fmgHandler.init();
/*
// Sep 2013, add ajax submit support with jQuery
$('#frmFormMail').submit( function(event){
    event.preventDefault();
    var
    $form = $(this),
    url = $form.prop('action');
    $.post( url, $form.serialize(), function(data){
        var ok = data && typeof data['ok'] === 'boolean' ? data['ok'] : false ;
        if( ok === true ) {
            fmgHandler.submitOK();
            return;
        };

        var fields = data && typeof data['error_fields'] === 'object' ? data['error_fields'] : false ;
        // reset errors
        $('#err_required').hide();
        $( '.form_error_highlight' ).removeClass('form_error_highlight');

        $.each( fields, function( idx, field ){
            $('#'+field+'_div').addClass('form_error_highlight');
        } );

        if( fields.length > 0 ){
            $('#err_required').show();
        };



    }, 'json' );

});
*/



</script>

<script>
(function($){ 
    $("#frmFormMail").submit(function(e)
    {
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {
                window.location.replace("/success/");
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                //if fails      
            }
        });
        e.preventDefault(); //STOP default action
        e.unbind(); //unbind. to stop multiple form submit.
    });
})(jQuery);	
</script>